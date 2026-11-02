<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function index(Request $request): View
    {
        $query = JobPosting::where('is_active', true);

        if ($request->has('domain')) {
            $query->whereHas('domain', function($q) use ($request) {
                $q->where('slug', $request->domain);
            });
        }

        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

        if ($request->has('work_mode')) {
            $query->where('work_mode', $request->work_mode);
        }

        $jobs = $query->latest()->paginate(10)->withQueryString();
        $domains = Domain::where('is_active', true)->get();

        return view('pages.careers.index', compact('jobs', 'domains'));
    }

    public function show(JobPosting $jobPosting): View
    {
        if (!$jobPosting->is_active && (!auth()->check() || !auth()->user()->isAdmin())) {
            abort(404);
        }

        $jobPosting->load('domain');
        $job = $jobPosting;
        return view('pages.careers.show', compact('job', 'jobPosting'));
    }

    public function culture(): View
    {
        $benefits = \App\Models\Benefit::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.careers.culture', compact('benefits'));
    }

    public function apply(Request $request, JobPosting $jobPosting): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'resume' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'cover_letter' => ['nullable', 'string', 'max:5000'],
            'linkedin' => ['nullable', 'url', 'max:500'],
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'local');

        $jobPosting->applications()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'resume_path' => $resumePath,
            'cover_letter' => $validated['cover_letter'] ?? null,
            'linkedin_url' => $validated['linkedin'] ?? null,
            'status' => 'new',
        ]);

        return back()->with('success', 'Your application has been submitted successfully.');
    }
}
