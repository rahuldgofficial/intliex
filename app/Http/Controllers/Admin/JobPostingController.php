<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class JobPostingController extends Controller
{
    public function index(Request $request): View
    {
        $query = JobPosting::with('domain');

        if ($request->has('domain') && $request->domain !== '') {
            $query->where('domain_id', $request->domain);
        }

        if ($request->has('status') && $request->status !== '') {
            $query->where('is_active', $request->status === 'active');
        }

        $jobs = $query->latest()->paginate(20)->withQueryString();
        $domains = Domain::all();

        return view('admin.careers.index', compact('jobs', 'domains'));
    }

    public function create(): View
    {
        $domains = Domain::all();
        return view('admin.careers.create', compact('domains'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('job_postings', 'title')->whereNull('deleted_at')],
            'domain_id' => ['required', 'exists:domains,id'],
            'type' => ['required', 'string'],
            'work_mode' => ['required', 'string'],
            'location' => ['nullable', 'string', 'max:255'],
            'salary_range' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'benefits' => ['nullable', 'string'],
            'is_active' => ['boolean'],
        ]);

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (JobPosting::withTrashed()->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        JobPosting::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'domain_id' => $validated['domain_id'],
            'type' => $validated['type'],
            'work_mode' => $validated['work_mode'],
            'location' => $validated['location'] ?? null,
            'salary_range' => $validated['salary_range'] ?? null,
            'description' => $validated['description'],
            'requirements' => $validated['requirements'],
            'benefits' => $validated['benefits'] ?? null,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.careers.index')->with('success', 'Job posting created successfully.');
    }

    public function edit(JobPosting $career): View
    {
        $domains = Domain::all();
        return view('admin.careers.edit', ['job' => $career, 'domains' => $domains]);
    }

    public function update(Request $request, JobPosting $career): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('job_postings', 'title')->ignore($career->id)->whereNull('deleted_at')],
            'domain_id' => ['required', 'exists:domains,id'],
            'type' => ['required', 'string'],
            'work_mode' => ['required', 'string'],
            'location' => ['nullable', 'string', 'max:255'],
            'salary_range' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'benefits' => ['nullable', 'string'],
            'is_active' => ['boolean'],
        ]);

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (JobPosting::withTrashed()->where('slug', $slug)->where('id', '!=', $career->id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $career->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'domain_id' => $validated['domain_id'],
            'type' => $validated['type'],
            'work_mode' => $validated['work_mode'],
            'location' => $validated['location'] ?? null,
            'salary_range' => $validated['salary_range'] ?? null,
            'description' => $validated['description'],
            'requirements' => $validated['requirements'],
            'benefits' => $validated['benefits'] ?? null,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.careers.index')->with('success', 'Job posting updated successfully.');
    }

    public function destroy(JobPosting $career): RedirectResponse
    {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('success', 'Job posting deleted successfully.');
    }
}
