@extends('layouts.app')

@section('meta_title', $post->meta_title ?? $post->title . ' - IntliEx Blog')
@section('meta_description', $post->meta_description ?? $post->excerpt)
@section('og_title', $post->meta_title ?? $post->title)
@section('og_description', $post->meta_description ?? $post->excerpt)
@section('og_image', $post->featured_image ? asset('storage/'.$post->featured_image) : asset('images/IntliEx_Logo_Web_Header.webp'))

@section('content')
<div class="section pt-32 pb-16 bg-slate-50">
    <div class="container-site max-w-4xl mx-auto">
        <nav class="text-sm font-medium mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-slate-500">
                <li><a href="{{ route('home') }}" class="hover:text-brand-navy transition-colors focus:outline-none focus:underline rounded">Home</a></li>
                <li>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </li>
                <li><a href="{{ route('blog.index') }}" class="hover:text-brand-navy transition-colors focus:outline-none focus:underline rounded">Blog</a></li>
                <li>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </li>
                <li class="text-slate-900 truncate max-w-[200px] md:max-w-none" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>

        <header class="mb-10 text-center">
            <div class="mb-6">
                <a href="{{ route('blog.category', $post->category->slug ?? 'tech') }}" class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-brand-blue/10 text-brand-blue hover:bg-brand-blue/20 transition-colors">
                    {{ $post->category->name ?? 'Technology' }}
                </a>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                {{ $post->title }}
            </h1>
            <div class="flex items-center justify-center space-x-6 text-sm text-slate-600">
                <div class="flex items-center">
                    <img src="{{ optional($post->author)->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(optional($post->author)->name ?? 'IntliEx Team') . '&background=0891b2&color=fff' }}" alt="{{ optional($post->author)->name ?? 'Author' }}" class="w-10 h-10 rounded-full mr-3 object-cover shadow-sm">
                    <div class="text-left">
                        <div class="font-medium text-slate-900">{{ optional($post->author)->name ?? 'IntliEx Team' }}</div>
                        <div class="text-xs">{{ optional($post->author)->role ?? 'Expert Contributor' }}</div>
                    </div>
                </div>
                <div class="flex items-center pl-6 border-l border-slate-200">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <time datetime="{{ $post->published_at->format('Y-m-d') }}">{{ $post->published_at->format('F j, Y') }}</time>
                </div>
                <div class="flex items-center pl-6 border-l border-slate-200 hidden sm:flex">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    {{ $post->reading_time ?? 5 }} min read
                </div>
            </div>
        </header>
    </div>

    @if($post->image_url)
    <div class="container-site mb-12">
        <div class="aspect-w-16 aspect-h-7 rounded-2xl overflow-hidden shadow-lg bg-slate-200">
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover" loading="eager">
        </div>
    </div>
    @endif

    <div class="container-site max-w-4xl mx-auto">
        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Social Share Sidebar -->
            <div class="hidden lg:block w-12 flex-shrink-0 pt-8">
                <div class="sticky top-32 flex flex-col items-center space-y-4">
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2" style="writing-mode: vertical-rl;">Share</span>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#1DA1F2] hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-[#1DA1F2]" aria-label="Share on Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#0A66C2] hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-[#0A66C2]" aria-label="Share on LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#1877F2] hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-[#1877F2]" aria-label="Share on Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Content Body -->
            <article class="prose prose-slate lg:prose-lg max-w-none flex-grow">
                {!! $post->body !!}
            </article>
        </div>

        <!-- Tags -->
        @if(isset($post->tags) && count($post->tags) > 0)
        <div class="mt-12 pt-8 border-t border-slate-200">
            <h3 class="text-sm font-semibold text-slate-900 mb-4 uppercase tracking-wider">Tags</h3>
            <div class="flex flex-wrap gap-2">
                @foreach($post->tags as $tag)
                    <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="px-3 py-1.5 bg-slate-100 text-slate-700 rounded text-sm hover:bg-brand-navy hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-brand-navy">
                        #{{ $tag->name }}
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- Mobile Share (visible only on small screens) -->
        <div class="mt-8 lg:hidden flex justify-center space-x-4">
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#1DA1F2] hover:text-white">
                 <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#0A66C2] hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#1877F2] hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
        </div>
    </div>
</div>

@if(isset($relatedPosts) && $relatedPosts->count() > 0)
<section class="section py-16 bg-white border-t border-slate-100">
    <div class="container-site">
        <h2 class="text-3xl font-bold text-slate-900 mb-10 text-center">Related Insights</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $related)
            <article class="card relative flex flex-col h-full bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden group border border-slate-100">
                <div class="relative h-48 overflow-hidden bg-slate-100">
                    @if($related->image_url)
                        <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-lg font-bold text-slate-900 mb-2 line-clamp-2 group-hover:text-brand-blue transition-colors">
                        <a href="{{ route('blog.show', $related->slug) }}" class="focus:outline-none focus:underline">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            {{ $related->title }}
                        </a>
                    </h3>
                    <p class="text-slate-600 mb-4 line-clamp-2 text-sm">
                        {{ $related->excerpt }}
                    </p>
                    <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <time datetime="{{ $related->published_at->format('Y-m-d') }}">{{ $related->published_at->format('M j, Y') }}</time>
                        <span>{{ $related->reading_time ?? 5 }} min read</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ request()->url() }}"
  },
  "headline": "{{ $post->title }}",
  "description": "{{ $post->excerpt }}",
  "image": "{{ $post->image_url ?? asset('images/IntliEx_Logo_Web_Header.webp') }}",  
    "author": {
    "@id": "{{ url('/') }}#organization"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "IntliEx",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('images/IntliEx_Logo_Web_Header.webp') }}"
    }
  },
  "datePublished": "{{ $post->published_at->toIso8601String() }}",
  "dateModified": "{{ $post->updated_at->toIso8601String() }}"
}
</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Blog",
      "item": "{{ route('blog.index') }}"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $post->title }}",
      "item": "{{ url()->current() }}"
    }
  ]
}
</script>
@endpush



