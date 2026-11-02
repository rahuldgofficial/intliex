<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogPostController extends Controller
{
    use \App\Traits\UploadsWebp;

    public function index(): View
    {
        $posts = BlogPost::with('category')->latest()->paginate(20);
        return view('admin.blog.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = BlogCategory::all();
        $tags = BlogTag::all();
        return view('admin.blog.create', compact('categories', 'tags'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('blog_posts', 'title')->whereNull('deleted_at')],
            'body' => ['required', 'string'],
            'category_id' => ['nullable', 'exists:blog_categories,id'],
            'status' => ['required', 'in:draft,published,scheduled'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'tags' => ['nullable', 'array'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
        ]);

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (BlogPost::withTrashed()->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $readingTime = ceil(str_word_count(strip_tags($validated['body'])) / 200);

        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $this->uploadAndConvertToWebp($request->file('featured_image'), 'posts');
        }

        $post = BlogPost::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'body' => $validated['body'],
            'excerpt' => Str::limit(strip_tags($validated['body']), 150),
            'category_id' => $validated['category_id'],
            'status' => $validated['status'],
            'author_id' => auth()->id(),
            'reading_time' => $readingTime,
            'featured_image' => $imagePath,
            'published_at' => $validated['status'] === 'published' ? now() : null,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        if (!empty($validated['tags'])) {
            $post->tags()->sync($validated['tags']);
        }

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(BlogPost $blog): View
    {
        $categories = BlogCategory::all();
        $tags = BlogTag::all();
        return view('admin.blog.edit', ['post' => $blog, 'categories' => $categories, 'tags' => $tags]);
    }

    public function update(Request $request, BlogPost $blog): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('blog_posts', 'title')->ignore($blog->id)->whereNull('deleted_at')],
            'body' => ['required', 'string'],
            'category_id' => ['nullable', 'exists:blog_categories,id'],
            'status' => ['required', 'in:draft,published,scheduled'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'tags' => ['nullable', 'array'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
        ]);

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (BlogPost::withTrashed()->where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $readingTime = ceil(str_word_count(strip_tags($validated['body'])) / 200);

        $imagePath = $blog->featured_image;
        if ($request->hasFile('featured_image')) {
            $imagePath = $this->uploadAndConvertToWebp($request->file('featured_image'), 'posts');
        }

        $blog->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'body' => $validated['body'],
            'excerpt' => Str::limit(strip_tags($validated['body']), 150),
            'category_id' => $validated['category_id'],
            'status' => $validated['status'],
            'reading_time' => $readingTime,
            'featured_image' => $imagePath,
            'published_at' => $validated['status'] === 'published' && !$blog->published_at ? now() : $blog->published_at,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        if (isset($validated['tags'])) {
            $blog->tags()->sync($validated['tags']);
        } else {
            $blog->tags()->sync([]);
        }

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blog): RedirectResponse
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully.');
    }
}

