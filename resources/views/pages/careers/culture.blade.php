@extends('layouts.app')

@section('title', 'Life at IntliEx - Culture & Benefits')

@section('content')
<!-- Hero -->
<div class="section pt-32 pb-24 bg-brand-navy relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute right-0 top-0 w-[800px] h-[800px] bg-brand-blue/20 rounded-full blur-[120px] opacity-60 translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute left-0 bottom-0 w-[600px] h-[600px] bg-brand-cyan/20 rounded-full blur-[100px] opacity-40 -translate-x-1/2 translate-y-1/3"></div>
    </div>
    
    <div class="container-site relative z-10 text-center max-w-4xl mx-auto">
        <span class="text-brand-cyan font-bold tracking-wider uppercase text-sm mb-4 block">Our Culture</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
            Innovate. Collaborate. <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-cyan">Thrive.</span>
        </h1>
        <p class="text-xl text-slate-300 mb-10 leading-relaxed">
            At IntliEx, we're building more than just enterprise technology. We're building a community of passionate experts who push boundaries and support each other's growth.
        </p>
    </div>
</div>

<!-- Values Section -->
<div class="section py-24 bg-white">
    <div class="container-site">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Our Core Values</h2>
            <p class="text-slate-600 text-lg">The principles that guide our decisions, our work, and how we treat one another every single day.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-blue-100 text-brand-blue rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Relentless Innovation</h3>
                <p class="text-slate-600 leading-relaxed">We challenge the status quo. We believe that there is always a better, faster, and more secure way to solve enterprise problems.</p>
            </div>

            <!-- Value 2 -->
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Unified Collaboration</h3>
                <p class="text-slate-600 leading-relaxed">Five domains, one company. We break down silos. The best solutions happen when diverse experts work together seamlessly.</p>
            </div>

            <!-- Value 3 -->
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Uncompromising Integrity</h3>
                <p class="text-slate-600 leading-relaxed">Trust is our currency. We operate with radical transparency, security-first mindsets, and honest communication with clients.</p>
            </div>
            
            <!-- Value 4 -->
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow duration-300 lg:col-start-2">
                <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Continuous Mastery</h3>
                <p class="text-slate-600 leading-relaxed">Technology evolves fast. We empower our people to learn continuously, experiment boldly, and become masters of their craft.</p>
            </div>
            
            <!-- Value 5 -->
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-rose-100 text-rose-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">People First</h3>
                <p class="text-slate-600 leading-relaxed">Enterprise software is built by people, for people. We prioritize the well-being, diversity, and balance of our global team.</p>
            </div>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<div class="section py-24 bg-slate-50 border-t border-slate-100">
    <div class="container-site">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">World-Class Benefits</h2>
            <p class="text-slate-600 text-lg">We invest heavily in our team so they can focus on doing their best work. Enjoy comprehensive perks designed for the modern professional.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @if(isset($benefits) && count($benefits) > 0)
                @foreach($benefits as $benefit)
                <!-- Benefit -->
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center mb-4 text-brand-navy">
                        @if($benefit->icon)
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            {!! $benefit->icon !!}
                        </svg>
                        @endif
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">{{ $benefit->title }}</h4>
                    <p class="text-sm text-slate-600">{{ $benefit->description }}</p>
                </div>
                @endforeach
            @else
                <p class="text-slate-500 text-center col-span-4">No benefits configured yet.</p>
            @endif
        </div>
    </div>
</div>

<!-- CTA -->
<div class="section py-20 bg-brand-navy relative overflow-hidden">
    <div class="container-site relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to make an impact?</h2>
        <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto">We are always looking for brilliant minds to join our mission. Explore our open positions and find your next challenge.</p>
        <a href="{{ route('careers.index') }}" class="btn btn-primary px-8 py-4 text-lg">View Open Positions</a>
    </div>
</div>
@endsection
