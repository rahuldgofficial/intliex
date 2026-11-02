<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $query = BlogPost::with(['category', 'author', 'tags'])->where('status', 'published');

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('slug', $request->tag);
            });
        }

        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                  ->orWhere('body', 'like', '%' . $request->search . '%');
            });
        }

        $posts = $query->latest('published_at')->paginate(12)->withQueryString();
        $categories = BlogCategory::all();

        return view('pages.blog.index', compact('posts', 'categories'));
    }

    public function show(BlogPost $blogPost): View
    {
        if ($blogPost->status !== 'published' && (!auth()->check() || !auth()->user()->isAdmin())) {
            abort(404);
        }

        $blogPost->increment('views');
        $blogPost->load(['category', 'author', 'tags']);

        $relatedPosts = BlogPost::where('status', 'published')
            ->where('category_id', $blogPost->category_id)
            ->where('id', '!=', $blogPost->id)
            ->take(3)
            ->get();

        $post = $blogPost;
        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }

    public function category(BlogCategory $blogCategory): View
    {
        $posts = $blogCategory->posts()->where('status', 'published')->with(['author', 'tags', 'category'])->latest('published_at')->paginate(12);
        $categories = BlogCategory::all();
        
        return view('pages.blog.index', compact('blogCategory', 'posts', 'categories'));
    }
}
