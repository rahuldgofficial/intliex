<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CaseStudyController extends Controller
{
    use \App\Traits\UploadsWebp;

    public function index(): View
    {
        $caseStudies = CaseStudy::with('domain')->latest()->paginate(20);
        return view('admin.case-studies.index', compact('caseStudies'));
    }

    public function create(): View
    {
        $domains = Domain::all();
        return view('admin.case-studies.create', compact('domains'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('case_studies', 'title')->whereNull('deleted_at')],
            'domain_id' => ['required', 'exists:domains,id'],
            'client' => ['nullable', 'string', 'max:255'],
            'challenge' => ['required', 'string'],
            'solution' => ['required', 'string'],
            'results' => ['nullable', 'string'],
            'is_active' => ['boolean'],
            'is_featured' => ['boolean'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
        ]);

        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $this->uploadAndConvertToWebp($request->file('featured_image'), 'case-studies');
        }

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (CaseStudy::withTrashed()->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        CaseStudy::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'domain_id' => $validated['domain_id'],
            'client' => $validated['client'] ?? null,
            'challenge' => $validated['challenge'],
            'solution' => $validated['solution'],
            'results' => $validated['results'] ?? null,
            'is_active' => $request->has('is_active'),
            'is_featured' => $request->has('is_featured'),
            'featured_image' => $imagePath,
        ]);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study created successfully.');
    }

    public function edit(CaseStudy $caseStudy): View
    {
        $domains = Domain::all();
        return view('admin.case-studies.edit', compact('caseStudy', 'domains'));
    }

    public function update(Request $request, CaseStudy $caseStudy): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('case_studies', 'title')->ignore($caseStudy->id)->whereNull('deleted_at')],
            'domain_id' => ['required', 'exists:domains,id'],
            'client' => ['nullable', 'string', 'max:255'],
            'challenge' => ['required', 'string'],
            'solution' => ['required', 'string'],
            'results' => ['nullable', 'string'],
            'is_active' => ['boolean'],
            'is_featured' => ['boolean'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
        ]);

        $imagePath = $caseStudy->featured_image;
        if ($request->hasFile('featured_image')) {
            $imagePath = $this->uploadAndConvertToWebp($request->file('featured_image'), 'case-studies');
        }

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (CaseStudy::withTrashed()->where('slug', $slug)->where('id', '!=', $caseStudy->id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $caseStudy->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'domain_id' => $validated['domain_id'],
            'client' => $validated['client'] ?? null,
            'challenge' => $validated['challenge'],
            'solution' => $validated['solution'],
            'results' => $validated['results'] ?? null,
            'is_active' => $request->has('is_active'),
            'is_featured' => $request->has('is_featured'),
            'featured_image' => $imagePath,
        ]);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study updated successfully.');
    }

    public function destroy(CaseStudy $caseStudy): RedirectResponse
    {
        $caseStudy->delete();
        return redirect()->route('admin.case-studies.index')->with('success', 'Case study deleted successfully.');
    }
}

