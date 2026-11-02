@extends('layouts.app')

@section('meta_title', $industry['name'] . ' Solutions — IntliEx')
@section('meta_description', $industry['description'])
@section('og_title', $industry['name'] . ' Solutions - IntliEx')
@section('og_description', $industry['description'])
@section('og_image', asset('images/IntliEx_Logo_Web_Header.webp'))

@section('content')

@php
    $colorMap = [
        'amber' => ['bg' => 'bg-amber-900/30', 'text' => 'text-amber-400', 'border' => 'border-amber-800', 'badge' => 'bg-amber-900/50 text-amber-300', 'gradient' => 'from-amber-600 to-amber-900', 'icon_bg' => 'bg-amber-900/30'],
        'rose' => ['bg' => 'bg-rose-900/30', 'text' => 'text-rose-400', 'border' => 'border-rose-800', 'badge' => 'bg-rose-900/50 text-rose-300', 'gradient' => 'from-rose-600 to-rose-900', 'icon_bg' => 'bg-rose-900/30'],
        'blue' => ['bg' => 'bg-blue-900/30', 'text' => 'text-blue-400', 'border' => 'border-blue-800', 'badge' => 'bg-blue-900/50 text-blue-300', 'gradient' => 'from-blue-600 to-blue-900', 'icon_bg' => 'bg-blue-900/30'],
        'emerald' => ['bg' => 'bg-emerald-900/30', 'text' => 'text-emerald-400', 'border' => 'border-emerald-800', 'badge' => 'bg-emerald-900/50 text-emerald-300', 'gradient' => 'from-emerald-600 to-emerald-900', 'icon_bg' => 'bg-emerald-900/30'],
        'cyan' => ['bg' => 'bg-cyan-900/30', 'text' => 'text-cyan-400', 'border' => 'border-cyan-800', 'badge' => 'bg-cyan-900/50 text-cyan-300', 'gradient' => 'from-cyan-600 to-cyan-900', 'icon_bg' => 'bg-cyan-900/30'],
        'violet' => ['bg' => 'bg-violet-900/30', 'text' => 'text-violet-400', 'border' => 'border-violet-800', 'badge' => 'bg-violet-900/50 text-violet-300', 'gradient' => 'from-violet-600 to-violet-900', 'icon_bg' => 'bg-violet-900/30'],
    ];
    $c = $colorMap[$industry['color']] ?? $colorMap['blue'];

    $domainSlugMap = [
        'Industrial Automation' => 'automation',
        'ERP & Softwares' => 'software',
        'AI Services' => 'ai',
        'Networking Services' => 'networking',
        'Cloud Services' => 'cloud',
    ];

    $domainColorMap = [
        'software' => ['bg' => 'bg-blue-900/30', 'text' => 'text-blue-400'],
        'ai' => ['bg' => 'bg-violet-900/30', 'text' => 'text-violet-400'],
        'networking' => ['bg' => 'bg-cyan-900/30', 'text' => 'text-cyan-400'],
        'automation' => ['bg' => 'bg-amber-900/30', 'text' => 'text-amber-400'],
        'cloud' => ['bg' => 'bg-emerald-900/30', 'text' => 'text-emerald-400'],
    ];
@endphp

{{-- Hero --}}
<section class="section section-dark pb-16 pt-32 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 -mr-32 -mt-32 w-[600px] h-[600px] bg-gradient-to-br {{ $c['gradient'] }} opacity-20 rounded-full blur-3xl pointer-events-none"></div>
    </div>
    <div class="container-site relative z-10 max-w-4xl mx-auto">
        <div class="mb-6">
            <a href="{{ url('/industries') }}" class="inline-flex items-center text-sm font-medium text-slate-400 hover:text-white transition-colors">
                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                All Industries
            </a>
        </div>
        <span class="section-label {{ $c['text'] }}">{{ strtoupper($industry['name']) }}</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">{{ $industry['name'] }} Solutions</h1>
        <p class="text-xl text-slate-300 max-w-3xl">{{ $industry['description'] }}</p>
        <div class="flex flex-wrap gap-3 mt-8">
            @foreach($industry['domain_labels'] as $label)
                <a href="{{ url('/services/' . ($domainSlugMap[$label] ?? '#')) }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-800/10 text-white hover:bg-gray-800/20 backdrop-blur transition-colors">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- Use Cases --}}
<section class="section py-20 bg-gray-900">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-animate>
            <span class="section-label text-gray-400 font-semibold tracking-widest text-sm mb-3 block">USE CASES</span>
            <h2 class="section-title !text-white">How We Help in {{ $industry['name'] }}</h2>
            <p class="section-subtitle !text-gray-400 mt-4">Real-world applications of our technology domains within {{ strtolower($industry['name']) }} organizations.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($industry['use_cases'] as $index => $useCase)
                <div class="bg-gray-800 rounded-2xl border border-gray-700 shadow-sm hover:shadow-glow transition-all duration-300 p-8 flex flex-col" data-animate>
                    <div class="mb-5 inline-flex items-center justify-center w-12 h-12 rounded-xl {{ $c['bg'] }} {{ $c['text'] }} font-bold text-lg border border-gray-700/50">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <h3 class="text-lg font-bold !text-white mb-3">{{ $useCase['title'] }}</h3>
                    <p class="!text-gray-400 text-sm leading-relaxed flex-grow">{{ $useCase['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Applicable Domains --}}
<section class="section py-16 bg-gray-800 border-t border-b border-gray-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-gray-900 opacity-50"></div>
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12" data-animate>
            <span class="section-label text-gray-400 font-semibold tracking-widest text-sm mb-3 block">OUR CAPABILITIES</span>
            <h2 class="section-title !text-white">IntliEx Domains for {{ $industry['name'] }}</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @foreach($industry['domain_details'] ?? [] as $label => $details)
                @php 
                    $domainSlug = $domainSlugMap[$label] ?? ''; 
                    $dc = $domainColorMap[$domainSlug] ?? ['bg' => 'bg-gray-900', 'text' => 'text-gray-300'];
                @endphp
                <a href="{{ url('/services/' . $domainSlug) }}" class="group bg-gray-900/80 backdrop-blur rounded-xl border border-gray-700 hover:border-gray-500 shadow-sm hover:shadow-lg p-6 text-left transition-all duration-300 flex flex-col h-full" data-animate>
                    <div class="mb-4 w-12 h-12 rounded-lg flex items-center justify-center {{ $dc['bg'] }} {{ $dc['text'] }} group-hover:scale-110 transition-transform border border-gray-700/50">
                        @if(view()->exists('partials.domain-icon'))
                            @include('partials.domain-icon', ['slug' => $domainSlug])
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        @endif
                    </div>
                    <h3 class="font-bold text-white mb-2">{{ $label }}</h3>
                    <p class="text-sm text-gray-400 mb-4 flex-grow">{{ $details }}</p>
                    <p class="text-sm font-semibold {{ $dc['text'] }} mt-auto inline-flex items-center">
                        Explore Capabilities 
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- Other Industries --}}
<section class="section py-16 bg-gray-900">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-animate>
            <h2 class="text-2xl font-bold text-white">Explore Other Industries</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach($allIndustries as $otherSlug => $other)
                @if($otherSlug !== $industry['slug'])
                    <a href="{{ url('/industries/' . $otherSlug) }}" class="px-5 py-2.5 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-brand-50 hover:text-brand-700 transition-colors">
                        {{ $other['name'] }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="relative py-20 overflow-hidden bg-gradient-to-br from-brand-600 to-brand-800">
    <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Discuss Your {{ $industry['name'] }} Project?</h2>
        <p class="text-xl text-brand-100 max-w-2xl mx-auto mb-10">Tell us about the challenges you're facing and we'll show you how our technology domains apply to your specific situation.</p>
        <a href="{{ url('/contact') }}" class="btn btn-white text-brand-900 px-8 py-4 text-lg inline-flex items-center">
            Get in Touch
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
        </a>
    </div>
</section>

@endsection


