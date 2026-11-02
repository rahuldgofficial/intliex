<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    use \App\Traits\UploadsWebp;

    public function index()
    {
        $testimonials = Testimonial::orderBy('sort_order')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        $domains = Domain::all();
        return view('admin.testimonials.create', compact('domains'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:200',
            'client_position' => 'nullable|string|max:200',
            'client_company' => 'nullable|string|max:200',
            'quote' => 'required|string',
            'domain_id' => 'nullable|exists:domains,id',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $this->uploadAndConvertToWebp($request->file('avatar'), 'testimonials');
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        $domains = Domain::all();
        return view('admin.testimonials.edit', compact('testimonial', 'domains'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:200',
            'client_position' => 'nullable|string|max:200',
            'client_company' => 'nullable|string|max:200',
            'quote' => 'required|string',
            'domain_id' => 'nullable|exists:domains,id',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('avatar')) {
            if ($testimonial->avatar) {
                Storage::disk('public')->delete($testimonial->avatar);
            }
            $validated['avatar'] = $this->uploadAndConvertToWebp($request->file('avatar'), 'testimonials');
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->avatar) {
            Storage::disk('public')->delete($testimonial->avatar);
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
