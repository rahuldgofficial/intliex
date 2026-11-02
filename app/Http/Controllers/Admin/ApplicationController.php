<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function index(Request $request): View
    {
        $query = JobApplication::with('jobPosting');

        if ($request->has('job') && $request->job !== '') {
            $query->where('job_posting_id', $request->job);
        }

        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        $applications = $query->latest()->paginate(20)->withQueryString();
        $jobs = JobPosting::all();

        return view('admin.applications.index', compact('applications', 'jobs'));
    }

    public function show(JobApplication $application): View
    {
        $application->load('jobPosting');
        return view('admin.applications.show', compact('application'));
    }

    public function updateStatus(Request $request, JobApplication $application): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'string'],
        ]);

        $application->update(['status' => $validated['status']]);

        return back()->with('success', 'Application status updated.');
    }

    public function downloadResume(JobApplication $application): StreamedResponse|RedirectResponse
    {
        if (!Storage::disk('local')->exists($application->resume_path)) {
            return back()->with('error', 'Resume file not found.');
        }

        return Storage::disk('local')->download($application->resume_path);
    }

    public function updateNotes(Request $request, JobApplication $application): RedirectResponse
    {
        $validated = $request->validate([
            'notes' => ['nullable', 'string'],
        ]);

        $application->update(['notes' => $validated['notes']]);

        return back()->with('success', 'Admin notes updated.');
    }

    public function destroy(JobApplication $application): RedirectResponse
    {
        if (Storage::disk('local')->exists($application->resume_path)) {
            Storage::disk('local')->delete($application->resume_path);
        }
        $application->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Application deleted successfully.');
    }
}
