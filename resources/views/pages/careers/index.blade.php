@extends('layouts.app')

@section('title', 'Careers - Join IntliEx')

@section('content')
<!-- Hero -->
<div class="section section-dark pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/careers-hero.webp') }}" alt="IntliEx Team" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-brand-navy/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-brand-navy via-brand-navy/90 to-brand-navy"></div>
    </div>
    
    <div class="container-site relative z-10 text-center max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
            Build the Future of <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-cyan">Enterprise Tech</span>
        </h1>
        <p class="text-xl text-slate-300 mb-10">
            Join a world-class team solving complex problems across Software, AI, Networking, Automation, and Cloud.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#open-positions" class="btn btn-primary">View Open Positions</a>
            <a href="{{ route('careers.culture') }}" class="btn bg-white/10 text-white hover:bg-white/20 border-0">Life at IntliEx</a>
        </div>
    </div>
</div>

<div id="open-positions" class="section py-20 bg-slate-50">
    <div class="container-site">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Open Positions</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Find your next career-defining role. Filter by domain, type, or work mode.</p>
        </div>

        <!-- Filters -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 mb-10">
            <form action="{{ route('careers.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-6">
                
                <div>
                    <label for="domain" class="form-label text-xs font-semibold uppercase tracking-wider text-slate-500">Domain</label>
                    <select name="domain" id="domain" class="form-input mt-1 w-full rounded-md border-slate-300 focus:border-brand-blue focus:ring-brand-blue" onchange="this.form.submit()">
                        <option value="">All Domains</option>
                        @if(isset($domains))
                            @foreach($domains as $domain)
                                <option value="{{ $domain->slug }}" {{ request('domain') == $domain->slug ? 'selected' : '' }}>
                                    {{ $domain->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                
                <div>
                    <label for="type" class="form-label text-xs font-semibold uppercase tracking-wider text-slate-500">Job Type</label>
                    <select name="type" id="type" class="form-input mt-1 w-full rounded-md border-slate-300 focus:border-brand-blue focus:ring-brand-blue" onchange="this.form.submit()">
                        <option value="">All Types</option>
                        <option value="full-time" {{ request('type') == 'full-time' ? 'selected' : '' }}>Full-Time</option>
                        <option value="part-time" {{ request('type') == 'part-time' ? 'selected' : '' }}>Part-Time</option>
                        <option value="contract" {{ request('type') == 'contract' ? 'selected' : '' }}>Contract</option>
                    </select>
                </div>

                <div>
                    <label for="mode" class="form-label text-xs font-semibold uppercase tracking-wider text-slate-500">Work Mode</label>
                    <select name="mode" id="mode" class="form-input mt-1 w-full rounded-md border-slate-300 focus:border-brand-blue focus:ring-brand-blue" onchange="this.form.submit()">
                        <option value="">All Locations</option>
                        <option value="remote" {{ request('mode') == 'remote' ? 'selected' : '' }}>Remote</option>
                        <option value="hybrid" {{ request('mode') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                        <option value="onsite" {{ request('mode') == 'onsite' ? 'selected' : '' }}>On-Site</option>
                    </select>
                </div>
                
                <div class="flex items-end">
                    <a href="{{ route('careers.index') }}" class="w-full text-center px-4 py-2 bg-slate-100 text-slate-600 rounded-md hover:bg-slate-200 transition-colors font-medium">
                        Clear Filters
                    </a>
                </div>
            </form>
        </div>

        <!-- Job List -->
        @if(isset($jobs) && $jobs->count() > 0)
            <div class="space-y-4">
                @foreach($jobs as $job)
                <a href="{{ route('careers.show', $job->slug) }}" class="block group bg-white p-6 md:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:border-brand-blue/30 transition-all duration-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div class="flex-grow">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <span class="badge bg-brand-navy text-white">{{ $job->domain->name ?? 'Engineering' }}</span>
                                <span class="text-sm font-medium text-slate-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                    {{ $job->location ?? 'Global' }}
                                </span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 group-hover:text-brand-blue transition-colors mb-2">
                                {{ $job->title }}
                            </h3>
                            <p class="text-slate-600 text-sm md:text-base line-clamp-2 max-w-3xl">
                                {{ $job->excerpt ?? 'Join our dynamic team to build scalable enterprise solutions and drive technological innovation.' }}
                            </p>
                        </div>
                        
                        <div class="flex flex-col md:items-end flex-shrink-0 gap-3">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-md text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                                    {{ ucfirst(str_replace('-', ' ', $job->type ?? 'full-time')) }}
                                </span>
                                <span class="px-3 py-1 rounded-md text-xs font-semibold bg-blue-50 text-brand-blue border border-blue-100">
                                    {{ ucfirst($job->work_mode ?? 'remote') }}
                                </span>
                            </div>
                            <div class="inline-flex items-center text-brand-navy font-bold group-hover:text-brand-blue transition-colors mt-2 md:mt-4">
                                View & Apply 
                                <svg class="ml-1.5 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
            <div class="mt-12 flex justify-center">
                {{ $jobs->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-2xl border border-slate-200">
                <svg class="mx-auto h-12 w-12 text-slate-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h3 class="text-lg font-bold text-slate-900">No positions found</h3>
                <p class="mt-2 text-slate-500 max-w-md mx-auto">We don't have any open roles matching these criteria right now. Check back soon or view all positions.</p>
                <div class="mt-6">
                    <a href="{{ route('careers.index') }}" class="btn btn-secondary">View All Openings</a>
                </div>
            </div>
        @endif
    </div>
</div>

<!-- Culture Banner -->
<div class="section py-0">
    <div class="container-site">
        <div class="bg-gradient-to-r from-brand-navy to-[#0F2841] rounded-3xl overflow-hidden shadow-2xl relative">
            <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:32px_32px]"></div>
            <div class="relative px-8 py-16 md:px-16 md:py-20 flex flex-col md:flex-row items-center justify-between gap-10">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Discover Life at IntliEx</h2>
                    <p class="text-lg text-slate-300 mb-0">Learn about our values, world-class benefits, and the vibrant culture that makes IntliEx a great place to grow your career.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('careers.culture') }}" class="btn bg-brand-cyan text-brand-navy hover:bg-white hover:text-brand-navy border-0 font-bold px-8 py-4 text-lg w-full sm:w-auto">
                        Explore Our Culture
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
