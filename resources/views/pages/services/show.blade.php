@extends('layouts.app')

@section('meta_title', $domain->meta_title ?? $domain->name . ' Services - IntliEx')
@section('og_title', $domain->meta_title ?? $domain->name . ' Services - IntliEx')
@section('og_description', $domain->meta_description ?? $domain->description)
@section('og_image', $domain->icon ? asset($domain->icon) : asset('images/IntliEx_Logo_Web_Header.webp'))
@section('meta_description', $domain->description)

@section('content')
@php
    $domainColor = 'blue';
    $domainGradient = 'from-blue-900 to-gray-900';
    $btnClass = 'bg-blue-600 hover:bg-blue-700';
    $textClass = 'text-blue-500 dark:text-blue-400';
    $borderClass = 'border-blue-500';
    
    if ($domain->slug === 'artificial-intelligence') {
        $domainColor = 'violet';
        $domainGradient = 'from-violet-900 to-gray-900';
        $btnClass = 'bg-violet-600 hover:bg-violet-700';
        $textClass = 'text-violet-500 dark:text-violet-400';
        $borderClass = 'border-violet-500';
    } elseif ($domain->slug === 'networking-services') {
        $domainColor = 'cyan';
        $domainGradient = 'from-cyan-900 to-gray-900';
        $btnClass = 'bg-cyan-600 hover:bg-cyan-700';
        $textClass = 'text-cyan-500 dark:text-cyan-400';
        $borderClass = 'border-cyan-500';
    } elseif ($domain->slug === 'automation') {
        $domainColor = 'amber';
        $domainGradient = 'from-amber-900 to-gray-900';
        $btnClass = 'bg-amber-600 hover:bg-amber-700';
        $textClass = 'text-amber-500 dark:text-amber-400';
        $borderClass = 'border-amber-500';
    } elseif ($domain->slug === 'cloud-services') {
        $domainColor = 'emerald';
        $domainGradient = 'from-emerald-900 to-gray-900';
        $btnClass = 'bg-emerald-600 hover:bg-emerald-700';
        $textClass = 'text-emerald-500 dark:text-emerald-400';
        $borderClass = 'border-emerald-500';
    }
@endphp

{{-- Domain Hero --}}
@if(view()->exists('pages.services.domains.' . $domain->slug . '.hero'))
    @include('pages.services.domains.' . $domain->slug . '.hero')
@else
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 bg-gradient-to-br {{ $domainGradient }} text-white overflow-hidden">
    <div class="absolute inset-0 opacity-30 mix-blend-overlay" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Breadcrumbs --}}
        <nav class="flex text-sm text-gray-300 mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center hover:text-white transition-colors">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 md:ml-2 text-gray-300">Services</span>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 md:ml-2 font-medium text-white">{{ $domain->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="max-w-4xl">
            <div class="inline-block p-3 bg-white/10 backdrop-blur-md rounded-2xl mb-6 shadow-xl border border-white/20">
                @include('partials.domain-icon', ['slug' => $domain->slug, 'class' => 'w-10 h-10 text-white'])
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-4">
                {{ $domain->name }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 font-medium mb-6">{{ $domain->tagline }}</p>
            <p class="text-lg text-gray-400 leading-relaxed max-w-3xl mb-10">{{ $domain->description }}</p>
            
            <a href="#contact" class="btn text-white {{ $btnClass }} px-8 py-3 rounded-full font-bold shadow-lg transition transform hover:-translate-y-1">
                Discuss Your Project
            </a>
        </div>
    </div>
</section>
@endif

{{-- Domain-Specific Extended Services --}}
@includeIf('pages.services.domains.' . $domain->slug . '.extended-services')

{{-- Domain-Specific Engagement Models --}}
@includeIf('pages.services.domains.' . $domain->slug . '.engagement-models')

@if(!in_array($domain->slug, ['software', 'ai', 'networking', 'cloud', 'automation']))
{{-- Services Overview (Accordion) --}}
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Our {{ $domain->name }} Services</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">Comprehensive solutions tailored to your enterprise requirements.</p>
        </div>

        <div class="max-w-4xl mx-auto" x-data="{ activeAccordion: 0 }">
            @foreach($domain->services as $index => $service)
                <div class="mb-4 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 overflow-hidden">
                    <button 
                        @click="activeAccordion = activeAccordion === {{ $index }} ? null : {{ $index }}"
                        class="flex justify-between items-center w-full p-6 text-left focus:outline-none focus-visible:ring focus-visible:ring-opacity-50 focus-visible:ring-{{ $domainColor }}-500 transition-colors hover:bg-gray-50 dark:hover:bg-gray-700/50"
                        :aria-expanded="activeAccordion === {{ $index }}"
                    >
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $service->name ?? $service->title }}</h3>
                        <svg class="w-6 h-6 transform transition-transform duration-200 {{ $textClass }}" :class="{'rotate-180': activeAccordion === {{ $index }}}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === {{ $index }}" 
                        x-collapse
                        class="px-6 pb-6"
                        x-cloak
                    >
                        <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                            <p class="text-gray-600 dark:text-gray-300 mb-6">{{ $service->description }}</p>
                            
                            @if(is_array($service->features) && count($service->features) > 0)
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Key Features:</h4>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-6">
                                    @foreach($service->features as $feature)
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 {{ $textClass }} mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600 dark:text-gray-300">{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            @if(is_array($service->tech_stack) && count($service->tech_stack) > 0)
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Technologies:</h4>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($service->tech_stack as $tech)
                                        <span class="badge bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md px-2.5 py-1 text-xs font-medium border border-gray-200 dark:border-gray-600">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Domain-Specific Tech Stack (Interactive Grid) --}}
@includeIf('pages.services.domains.' . $domain->slug . '.tech-stack')

{{-- Process / How We Work --}}
@if(view()->exists('pages.services.domains.' . $domain->slug . '.process'))
    @include('pages.services.domains.' . $domain->slug . '.process')
@else
    {{-- Fallback Generic Process --}}
    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">How We Work</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">A proven methodology ensuring timely delivery and exceptional quality.</p>
            </div>

            <div class="relative">
                {{-- Connecting line (desktop) --}}
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gray-200 dark:bg-gray-700 -translate-y-1/2 z-0"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                    {{-- Step 1 --}}
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 text-center relative group hover:-translate-y-2 transition-transform duration-300">
                        <div class="w-16 h-16 mx-auto bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center mb-6 shadow-inner border-2 {{ $borderClass }} text-xl font-bold {{ $textClass }}">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Discovery</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Understanding your business goals, requirements, and current infrastructure.</p>
                    </div>
                    
                    {{-- Step 2 --}}
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 text-center relative group hover:-translate-y-2 transition-transform duration-300">
                        <div class="w-16 h-16 mx-auto bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center mb-6 shadow-inner border-2 {{ $borderClass }} text-xl font-bold {{ $textClass }}">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Strategy</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Designing architecture, defining milestones, and selecting optimal technologies.</p>
                    </div>

                    {{-- Step 3 --}}
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 text-center relative group hover:-translate-y-2 transition-transform duration-300">
                        <div class="w-16 h-16 mx-auto bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center mb-6 shadow-inner border-2 {{ $borderClass }} text-xl font-bold {{ $textClass }}">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Development</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Agile execution with rigorous testing and continuous integration.</p>
                    </div>

                    {{-- Step 4 --}}
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 text-center relative group hover:-translate-y-2 transition-transform duration-300">
                        <div class="w-16 h-16 mx-auto bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center mb-6 shadow-inner border-2 {{ $borderClass }} text-xl font-bold {{ $textClass }}">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Launch</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Seamless deployment, user training, and ongoing maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

{{-- Domain Case Studies --}}
@if(isset($caseStudies) && $caseStudies->isNotEmpty())
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Success Stories</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">See how we've transformed businesses with our {{ $domain->name }} solutions.</p>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="{{ route('case-studies.index') }}?domain={{ $domain->slug }}" class="font-semibold {{ $textClass }} hover:underline flex items-center">
                    View All Case Studies
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($caseStudies->take(3) as $study)
                <div class="card bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden flex flex-col group">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                        @if($study->image)
                            <img src="{{ $study->image }}" alt="{{ $study->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                        @else
                            <div class="absolute inset-0 bg-gradient-to-br {{ $domainGradient }} opacity-80"></div>
                        @endif
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="text-sm font-semibold {{ $textClass }} mb-2 uppercase tracking-wide">{{ $study->client_name }}</div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:{{ $textClass }} transition-colors">{{ $study->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 line-clamp-3">{{ $study->summary }}</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                            <a href="{{ route('case-studies.show', $study->slug) }}" class="font-medium {{ $textClass }} hover:underline flex items-center">
                                Read Case Study
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Domain-Specific Why Choose Us --}}
@includeIf('pages.services.domains.' . $domain->slug . '.why-choose')

{{-- Domain-Specific CTA --}}
<section id="contact" class="py-24 bg-white dark:bg-gray-800 relative">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-gray-50 dark:bg-gray-900 rounded-3xl shadow-2xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                <div class="lg:col-span-2 bg-gradient-to-br {{ $domainGradient }} p-10 text-white flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-4">Ready to Get Started with {{ $domain->name }}?</h2>
                    <p class="text-white/80 mb-8">Discuss your specific requirements with our domain experts and discover how IntliEx can accelerate your goals.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Expert Consultation
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Custom Architecture
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Scalable Solutions
                        </li>
                    </ul>
                </div>
                <div class="lg:col-span-3 p-10">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="type" value="domain-specific">
                        <input type="hidden" name="domain_id" value="{{ $domain->id }}">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                                <input type="text" name="name" id="name" required class="w-full rounded-md border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-{{ $domainColor }}-500 focus:ring-{{ $domainColor }}-500 px-4 py-2 border">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Work Email</label>
                                <input type="email" name="email" id="email" required class="w-full rounded-md border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-{{ $domainColor }}-500 focus:ring-{{ $domainColor }}-500 px-4 py-2 border">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Company</label>
                                <input type="text" name="company" id="company" class="w-full rounded-md border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-{{ $domainColor }}-500 focus:ring-{{ $domainColor }}-500 px-4 py-2 border">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="w-full rounded-md border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-{{ $domainColor }}-500 focus:ring-{{ $domainColor }}-500 px-4 py-2 border">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Project Details</label>
                            <textarea name="message" id="message" rows="4" required class="w-full rounded-md border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-{{ $domainColor }}-500 focus:ring-{{ $domainColor }}-500 px-4 py-2 border" placeholder="Tell us about your challenges and goals..."></textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white {{ $btnClass }} focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $domainColor }}-500 transition-colors">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Related Domains --}}
@if(isset($relatedDomains) && $relatedDomains->isNotEmpty())
<section class="py-16 bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">Explore Our Other Domains</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($relatedDomains as $related)
                <a href="{{ route('services.show', $related->slug) }}" class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-md transition-shadow border border-gray-100 dark:border-gray-700 flex flex-col items-center text-center group">
                    <div class="w-12 h-12 mb-4 text-gray-500 group-hover:{{ $textClass }} transition-colors">
                        {!! $related->icon !!}
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $related->name }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2">{{ $related->tagline }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- JSON-LD Structured Data --}}
@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Service",
  "name": "{{ $domain->name }} Services by IntliEx",
  "provider": {
    "@type": "Organization",
    "name": "IntliEx",
    "url": "{{ url('/') }}"
  },
  "description": "{{ $domain->description }}",
  "areaServed": "Worldwide",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "{{ $domain->name }} Services",
    "itemListElement": [
      @foreach($domain->services as $index => $service)
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "{{ $service->name }}"
        }
      }{{ $loop->last ? '' : ',' }}
      @endforeach
    ]
  }
</script><script type="application/ld+json">{"@@context": "https://schema.org","@type": "BreadcrumbList",
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
      "name": "Services"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $domain->name }}",
      "item": "{{ url()->current() }}"
    }
  ]
</script>
@endpush
@endsection






