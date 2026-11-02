@extends('layouts.app')

@section('title', 'Case Studies - IntliEx')

@section('content')

<div class="section section-dark pb-16 pt-32 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 -mr-32 -mt-32 w-[600px] h-[600px] bg-brand-500/20 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
    </div>
    
    <div class="container-site relative z-10 text-center max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
            Proven Results for <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-violet-400">Global Enterprises</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto">
            Discover how IntliEx transforms complex challenges into strategic advantages across software, AI, networking, industrial automation, and cloud.
        </p>
    </div>
</div>

<div class="section py-16 bg-slate-50">
    <div class="container-site">
        <!-- Filters -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
            <div class="flex flex-wrap gap-2 justify-center w-full" role="group" aria-label="Filter case studies by domain">
                <a href="{{ route('case-studies.index') }}" class="px-5 py-2 rounded-full text-sm font-semibold transition-all {{ !request('domain') ? 'bg-slate-900 text-white shadow-md' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                    All Success Stories
                </a>
                @if(isset($domains))
                    @foreach($domains as $domain)
                        <a href="{{ route('case-studies.index', ['domain' => $domain->slug]) }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all {{ request('domain') == $domain->slug ? 'bg-slate-900 text-white shadow-md' : 'bg-white text-slate-600 hover:bg-slate-100 border border-slate-200' }}">
                            {{ $domain->name }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>

        @if(isset($caseStudies) && $caseStudies->count() > 0)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                @foreach($caseStudies as $study)
                    <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-slate-100">
                        <div class="relative h-64 overflow-hidden bg-slate-200">
                            @if($study->image_url)
                                <img src="{{ $study->image_url }}" alt="{{ $study->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-200 to-slate-300">
                                    <svg class="w-16 h-16 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white text-slate-900 shadow-sm mb-3">
                                    {{ $study->domain->name ?? 'Technology' }}
                                </span>
                                <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-blue-400 transition-colors">
                                    <a href="{{ route('case-studies.show', $study->slug) }}" class="focus:outline-none focus:underline">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        {{ $study->title }}
                                    </a>
                                </h3>
                                <p class="text-slate-300 text-sm font-medium">Client: {{ $study->client ?? 'Confidential' }}</p>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">The Challenge</h4>
                            <p class="text-slate-600 mb-6 flex-grow">
                                {{ Str::limit($study->challenge, 150) ?? 'Organizations face complex integration and scaling challenges. See how we architected a robust solution to drive measurable business value.' }}
                            </p>
                            <div class="pt-6 border-t border-slate-100 flex justify-between items-center mt-auto">
                                <div class="flex space-x-4 text-sm">
                                    {{-- Metrics removed since they aren't in DB schema --}}
                                </div>
                                <span class="inline-flex items-center text-sm font-bold text-brand-navy group-hover:text-brand-blue transition-colors">
                                    Read Full Case Study
                                    <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-16 flex justify-center">
                {{ $caseStudies->links() }}
            </div>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                {{-- Case 1: Education --}}
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-slate-100 relative">
                    <div class="relative h-64 overflow-hidden bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white text-blue-700 shadow-sm mb-3">Education</span>
                            <h3 class="text-2xl font-bold text-white">University-Wide Network & LMS Overhaul</h3>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">The Challenge</h4>
                        <p class="text-slate-600 mb-4 flex-grow">A major regional university struggled with legacy Wi-Fi infrastructure causing connectivity dropouts in lecture halls, and an aging student portal that routinely crashed during peak exam periods.</p>
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Our Approach</h4>
                        <p class="text-slate-600 mb-0">We deployed a high-density Wi-Fi 6 network across 40 campus buildings, while migrating their Learning Management System (LMS) to an auto-scaling AWS cloud environment, achieving 99.99% uptime during finals.</p>
                    </div>
                </div>

                {{-- Case 2: Hospitality & Travel --}}
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-slate-100 relative">
                    <div class="relative h-64 overflow-hidden bg-gradient-to-br from-amber-600 to-orange-800 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white text-amber-700 shadow-sm mb-3">Hospitality & Travel</span>
                            <h3 class="text-2xl font-bold text-white">AI-Driven Dynamic Pricing & Concierge App</h3>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">The Challenge</h4>
                        <p class="text-slate-600 mb-4 flex-grow">A luxury resort chain wanted to maximize RevPAR (Revenue Per Available Room) while simultaneously offering guests a frictionless check-in experience without waiting at the front desk.</p>
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Our Approach</h4>
                        <p class="text-slate-600 mb-0">We built a predictive machine learning model to optimize room rates based on real-time market data, and developed a secure mobile app for Bluetooth door unlocking, room service, and booking amenities.</p>
                    </div>
                </div>
                
                {{-- Case 3: Real Estate --}}
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-slate-100 relative">
                    <div class="relative h-64 overflow-hidden bg-gradient-to-br from-emerald-600 to-emerald-800 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white text-emerald-700 shadow-sm mb-3">Real Estate</span>
                            <h3 class="text-2xl font-bold text-white">Cloud-Hosted Virtual Tour Infrastructure</h3>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">The Challenge</h4>
                        <p class="text-slate-600 mb-4 flex-grow">A large property brokerage needed a way to showcase luxury properties remotely, but their existing servers couldn't handle the immense bandwidth required to stream 4K 3D virtual tours to prospective buyers globally.</p>
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Our Approach</h4>
                        <p class="text-slate-600 mb-0">We architected a globally distributed CDN on Azure with scalable blob storage, ensuring latency-free, high-resolution rendering of virtual properties for thousands of concurrent users across multiple continents.</p>
                    </div>
                </div>

                {{-- Case 4: Construction & Engineering --}}
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-slate-100 relative">
                    <div class="relative h-64 overflow-hidden bg-gradient-to-br from-rose-600 to-rose-800 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.742-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" /></svg>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white text-rose-700 shadow-sm mb-3">Construction & Engineering</span>
                            <h3 class="text-2xl font-bold text-white">Mesh Networking & Equipment Tracking</h3>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">The Challenge</h4>
                        <p class="text-slate-600 mb-4 flex-grow">A mega-project construction site spanning hundreds of acres suffered from blind spots causing communication breakdowns, while machinery was frequently misplaced or poorly maintained due to paper logs.</p>
                        <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Our Approach</h4>
                        <p class="text-slate-600 mb-0">We deployed a ruggedized, high-availability mesh Wi-Fi network across the active site and built a centralized equipment tracking ERP to log maintenance schedules, locations, and asset depreciation.</p>
                    </div>
                </div>

            </div>
        @endif
    </div>
</div>
@endsection
