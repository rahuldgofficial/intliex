@extends('layouts.app')

@section('meta_title', 'Industries We Serve — IntliEx')
@section('meta_description', 'IntliEx delivers technology solutions across Manufacturing, Healthcare, Retail & E-Commerce, Finance & Banking, Logistics, and Energy & Utilities.')

@section('content')

{{-- Hero Section --}}
<section class="section section-dark pb-16 pt-32 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 -mr-32 -mt-32 w-[600px] h-[600px] bg-brand-500/20 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
    </div>
    <div class="container-site relative z-10 text-center max-w-4xl mx-auto">
        <span class="section-label text-brand-300">INDUSTRIES</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
            Technology Solutions for <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-violet-400">Every Industry</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto">
            Our five technology domains — Software, AI, Networking, Industrial Automation, and Cloud — combine to solve real problems in the industries where our clients operate.
        </p>
    </div>
</section>

{{-- Industries Grid --}}
<section class="section py-20 bg-gray-900">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @php
                $colorMap = [
                    'amber' => ['bg' => 'bg-amber-900/30', 'text' => 'text-amber-400', 'border' => 'border-amber-800', 'hover' => 'hover:border-amber-600', 'badge' => 'bg-amber-900/50 text-amber-300'],
                    'rose' => ['bg' => 'bg-rose-900/30', 'text' => 'text-rose-400', 'border' => 'border-rose-800', 'hover' => 'hover:border-rose-600', 'badge' => 'bg-rose-900/50 text-rose-300'],
                    'blue' => ['bg' => 'bg-blue-900/30', 'text' => 'text-blue-400', 'border' => 'border-blue-800', 'hover' => 'hover:border-blue-600', 'badge' => 'bg-blue-900/50 text-blue-300'],
                    'emerald' => ['bg' => 'bg-emerald-900/30', 'text' => 'text-emerald-400', 'border' => 'border-emerald-800', 'hover' => 'hover:border-emerald-600', 'badge' => 'bg-emerald-900/50 text-emerald-300'],
                    'cyan' => ['bg' => 'bg-cyan-900/30', 'text' => 'text-cyan-400', 'border' => 'border-cyan-800', 'hover' => 'hover:border-cyan-600', 'badge' => 'bg-cyan-900/50 text-cyan-300'],
                    'violet' => ['bg' => 'bg-violet-900/30', 'text' => 'text-violet-400', 'border' => 'border-violet-800', 'hover' => 'hover:border-violet-600', 'badge' => 'bg-violet-900/50 text-violet-300'],
                ];

                $iconMap = [
                    'cog' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                    'heart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />',
                    'shopping-cart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z" />',
                    'building-library' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />',
                    'truck' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l2-1m8 1l2-1m-2 1v2a2 2 0 11-4 0v-1m-4 0a2 2 0 11-4 0" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 6h3l4 4v4h-2" />',
                    'bolt' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                    'academic-cap' => '<path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />',
                    'globe-alt' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />',
                    'home' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />',
                    'wrench-screwdriver' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.742-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />',
                ];
            @endphp

            @foreach($industries as $slug => $industry)
                @php $c = $colorMap[$industry['color']] ?? $colorMap['blue']; @endphp
                <a href="{{ url('/industries/' . $slug) }}" class="group bg-gray-800 rounded-2xl border-2 {{ $c['border'] }} {{ $c['hover'] }} shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full transform hover:-translate-y-1" data-animate>
                    <div class="p-8 flex-grow flex flex-col">
                        {{-- Icon --}}
                        <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-xl {{ $c['bg'] }} {{ $c['text'] }} group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">{!! $iconMap[$industry['icon']] ?? $iconMap['cog'] !!}</svg>
                        </div>

                        {{-- Title & Tagline --}}
                        <h2 class="text-xl font-bold text-white mb-2 group-hover:text-brand-400 transition-colors">{{ $industry['name'] }}</h2>
                        <p class="text-sm text-gray-400 mb-5 flex-grow">{{ $industry['tagline'] }}</p>

                        {{-- Applicable Domains --}}
                        <div class="flex flex-wrap gap-2 mb-5">
                            @foreach($industry['domain_labels'] as $label)
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ $c['badge'] }}">{{ $label }}</span>
                            @endforeach
                        </div>

                        {{-- Link --}}
                        <div class="mt-auto inline-flex items-center font-semibold text-sm {{ $c['text'] }}">
                            View Industry Solutions
                            <svg class="w-4 h-4 ml-1.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="relative py-20 overflow-hidden bg-gradient-to-br from-brand-600 to-brand-800">
    <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Don't See Your Industry?</h2>
        <p class="text-xl text-brand-100 max-w-2xl mx-auto mb-10">Our five technology domains can be applied to virtually any sector. Tell us about your challenge and we'll show you how we can help.</p>
        <a href="{{ url('/contact') }}" class="btn btn-white text-brand-900 px-8 py-4 text-lg inline-flex items-center">
            Talk to Our Team
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
        </a>
    </div>
</section>

@endsection
