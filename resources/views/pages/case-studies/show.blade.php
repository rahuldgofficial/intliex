@extends('layouts.app')

@section('meta_title', $caseStudy->meta_title ?? $caseStudy->title . ' - Case Study')
@section('og_title', $caseStudy->meta_title ?? $caseStudy->title)
@section('og_description', $caseStudy->meta_description ?? Str::limit(strip_tags($caseStudy->challenge ?? ''), 160))
@section('og_image', $caseStudy->featured_image ? asset('storage/'.$caseStudy->featured_image) : asset('images/IntliEx_Logo_Web_Header.webp'))
@section('meta_description', Str::limit($caseStudy->challenge ?? '', 160))

@section('content')
<!-- Hero Section -->
<div class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0 opacity-40">
        @if(isset($caseStudy->image_url))
            <img src="{{ $caseStudy->image_url }}" alt="{{ $caseStudy->title }} Background" class="w-full h-full object-cover" loading="eager" decoding="async">
        @else
            <div class="w-full h-full bg-gradient-to-br from-brand-navy to-slate-900"></div>
        @endif
        <div class="absolute inset-0 bg-slate-900/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
    </div>
    
    <div class="container-site relative z-10">
        <div class="max-w-4xl">
            <a href="{{ route('case-studies.index') }}" class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-white mb-8 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Back to Case Studies
            </a>
            
            <div class="flex items-center space-x-4 mb-6">
                <span class="px-3 py-1 bg-brand-blue/20 text-brand-cyan border border-brand-blue/30 rounded-full text-sm font-semibold tracking-wide">
                    {{ $caseStudy->domain->name ?? 'Enterprise Solution' }}
                </span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                {{ $caseStudy->title }}
            </h1>
            
            <div class="flex flex-wrap items-center gap-6 text-slate-300 text-lg">
                <div class="flex items-center">
                    <span class="font-semibold text-white mr-2">Client:</span> 
                    {{ $caseStudy->client_name ?? 'Confidential Enterprise' }}
                </div>
                @if(isset($caseStudy->industry))
                <div class="flex items-center">
                    <span class="font-semibold text-white mr-2">Industry:</span> 
                    {{ $caseStudy->industry }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Key Metrics Bar -->
@if(isset($caseStudy->metrics) && count($caseStudy->metrics) > 0)
<div class="bg-brand-navy border-b border-white/10 relative z-20 shadow-lg">
    <div class="container-site">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-white/10">
            @foreach($caseStudy->metrics as $metric)
            <div class="p-6 text-center">
                <div class="text-3xl lg:text-4xl font-bold text-white mb-1">{{ $metric['value'] }}</div>
                <div class="text-sm text-brand-cyan uppercase tracking-wider font-semibold">{{ $metric['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- Content Grid -->
<div class="section py-20 bg-white">
    <div class="container-site">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Main Content -->
            <div class="lg:col-span-8 space-y-16">
                
                <!-- The Challenge -->
                <section>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-lg bg-red-100 text-red-600 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        </div>
                        <h2 class="text-3xl font-bold text-slate-900">The Challenge</h2>
                    </div>
                    <div class="prose prose-lg max-w-none text-slate-600">
                        {!! $caseStudy->challenge ?? '<p>Detailed challenge description coming soon.</p>' !!}
                    </div>
                </section>

                <!-- Our Solution -->
                <section>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center mr-4">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                        </div>
                        <h2 class="text-3xl font-bold text-slate-900">Our Solution</h2>
                    </div>
                    <div class="prose prose-lg max-w-none text-slate-600">
                        {!! $caseStudy->solution ?? '<p>Detailed solution architecture coming soon.</p>' !!}
                    </div>
                </section>

                <!-- The Results -->
                <section>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </div>
                        <h2 class="text-3xl font-bold text-slate-900">The Results</h2>
                    </div>
                    <div class="prose prose-lg max-w-none text-slate-600">
                        {!! $caseStudy->results ?? '<p>Business outcomes and metrics coming soon.</p>' !!}
                    </div>
                </section>

                <!-- Image Gallery (if any) -->
                @if(isset($caseStudy->gallery) && count($caseStudy->gallery) > 0)
                <section>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Implementation Gallery</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($caseStudy->gallery as $image)
                        <div class="aspect-w-16 aspect-h-10 rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
                            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] ?? 'Case study visual' }}" class="w-full h-full object-cover" loading="eager" decoding="async">
                        </div>
                        @endforeach
                    </div>
                </section>
                @endif
                
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-4 space-y-8">
                <!-- Technologies -->
                @if(isset($caseStudy->technologies) && count($caseStudy->technologies) > 0)
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        Technologies Used
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($caseStudy->technologies as $tech)
                        <span class="px-3 py-1 bg-white border border-slate-200 text-slate-700 rounded-md text-sm font-medium shadow-sm">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Testimonial (if exists) -->
                @if(isset($caseStudy->testimonial))
                <div class="bg-brand-navy rounded-2xl p-8 text-white relative overflow-hidden">
                    <svg class="absolute top-4 left-4 w-16 h-16 text-white/10 transform -scale-x-100" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <blockquote class="relative z-10 text-lg font-medium leading-relaxed mb-6 mt-4">
                        "{{ $caseStudy->testimonial['quote'] }}"
                    </blockquote>
                    <div class="flex items-center">
                        @if(isset($caseStudy->testimonial['avatar']))
                        <img src="{{ $caseStudy->testimonial['avatar'] }}" alt="{{ $caseStudy->testimonial['author'] }}" class="w-12 h-12 rounded-full mr-4 border-2 border-brand-blue" loading="lazy" decoding="async">
                        @endif
                        <div>
                            <div class="font-bold">{{ $caseStudy->testimonial['author'] }}</div>
                            <div class="text-sm text-brand-cyan">{{ $caseStudy->testimonial['position'] }}</div>
                        </div>
                    </div>
                </div>
                @endif
                
                <!-- CTA -->
                <div class="bg-gradient-to-br from-slate-100 to-white rounded-2xl p-8 border border-slate-200 text-center">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Have a similar challenge?</h3>
                    <p class="text-slate-600 mb-6 text-sm">Let's discuss how IntliEx can deliver measurable outcomes for your organization.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary w-full justify-center">Contact Our Experts</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ request()->url() }}"
  },
  "headline": "{{ $caseStudy->title }}",
  "description": "{{ $caseStudy->meta_description ?? Str::limit(strip_tags($caseStudy->challenge ?? ''), 160) }}",
  "image": "{{ $caseStudy->featured_image ? asset('storage/'.$caseStudy->featured_image) : asset('images/IntliEx_Logo_Web_Header.webp') }}",  
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
  "datePublished": "{{ $caseStudy->created_at->toIso8601String() }}",
  "dateModified": "{{ $caseStudy->updated_at->toIso8601String() }}"
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
      "name": "Case Studies",
      "item": "{{ route('case-studies.index') }}"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $caseStudy->title }}",
      "item": "{{ url()->current() }}"
    }
  ]
}
</script>
@endpush


