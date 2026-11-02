@extends('layouts.app')

@section('title', isset($currentCategory) ? $currentCategory->name . ' - Blog' : 'Blog & Insights')

@section('content')
<div class="section section-dark pb-12 pt-32">
    <div class="container-site">
        <nav class="text-sm font-medium mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-slate-400">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-brand-blue rounded">Home</a></li>
                <li>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </li>
                <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-brand-blue rounded">Blog</a></li>
                @if(isset($currentCategory))
                    <li>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </li>
                    <li class="text-white" aria-current="page">{{ $currentCategory->name }}</li>
                @endif
            </ol>
        </nav>
        
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            {{ isset($currentCategory) ? $currentCategory->name : 'Blog & Insights' }}
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mb-12">
            Expert perspectives, industry trends, and deep dives into the technologies shaping the future of enterprise.
        </p>
    </div>
</div>

<div class="section py-12">
    <div class="container-site">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <!-- Categories Filter -->
            <div class="flex flex-wrap gap-2" role="group" aria-label="Blog categories filter">
                <a href="{{ route('blog.index') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-brand-blue {{ !isset($currentCategory) ? 'bg-brand-navy text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    All
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('blog.category', $category->slug) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-brand-blue {{ isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-brand-navy text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>

            <!-- Search -->
            <form action="{{ route('blog.index') }}" method="GET" class="relative max-w-sm w-full">
                <label for="search" class="sr-only">Search blog posts</label>
                <input type="search" name="search" id="search" value="{{ request('search') }}" class="form-input block w-full sm:text-sm rounded-md focus:ring-brand-blue focus:border-brand-blue" placeholder="Search insights...">
                @if(isset($currentCategory))
                    <input type="hidden" name="category" value="{{ $currentCategory->slug }}">
                @endif
            </form>
        </div>

        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="card relative flex flex-col h-full bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden group border border-slate-100">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            @if($post->image_url)
                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="badge bg-brand-navy/90 text-white backdrop-blur-sm shadow-sm">{{ $post->category->name ?? 'Technology' }}</span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h2 class="text-xl font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-brand-blue transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}" class="focus:outline-none focus:underline">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="text-slate-600 mb-6 line-clamp-3 text-sm flex-grow">
                                {{ $post->excerpt }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                                <div class="flex items-center space-x-2">
                                    <span class="font-medium text-slate-900">{{ $post->author->name ?? 'IntliEx Team' }}</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <time datetime="{{ $post->published_at->format('Y-m-d') }}">{{ $post->published_at->format('M j, Y') }}</time>
                                    <span class="flex items-center">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        {{ $post->reading_time ?? 5 }} min
                                    </span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            
            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-slate-50 rounded-2xl border border-slate-100">
                <svg class="mx-auto h-12 w-12 text-slate-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15M9 11l3 3m0 0l3-3m-3 3V8" />
                </svg>
                <h3 class="text-lg font-medium text-slate-900">No posts found</h3>
                <p class="mt-1 text-slate-500">We couldn't find any posts matching your criteria.</p>
                <div class="mt-6">
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary">Clear Filters</a>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection

@push('scripts')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Blog",
  "name": "IntliEx Blog & Insights",
  "url": "{{ route('blog.index') }}",
  "description": "Expert perspectives, industry trends, and deep dives into the technologies shaping the future of enterprise.",
  "publisher": {
    "@type": "Organization",
    "name": "IntliEx",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('images/logo.webp') }}"
    }
  }
}
</script>
@endpush
