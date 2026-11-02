@extends('layouts.app')

@section('title', 'About Us - IntliEx')
@section('meta_description', 'IntliEx is a unified enterprise technology partner spanning Software, AI, Networking, Automation, and Cloud Services.')

@section('content')
<!-- Hero -->
<div class="section section-dark pt-32 pb-24 lg:pt-40 lg:pb-32 relative overflow-hidden">
    <div class="absolute inset-0 z-0 bg-[url('/images/grid-pattern.svg')] opacity-10"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-blue/10 to-transparent"></div>
    
    <div class="container-site relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Architecting the <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-violet-400">Modern Enterprise</span>
            </h1>
            <p class="text-xl text-slate-300 leading-relaxed mb-8">
                IntliEx was founded on a simple premise: enterprise technology is too complex to be handled in silos. We bring together world-class expertise across five critical domains to deliver holistic, transformative solutions.
            </p>
        </div>
    </div>
</div>

<!-- Mission & Vision -->
<div class="section py-20 bg-white">
    <div class="container-site">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Our Mission</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    To empower global enterprises with integrated, scalable, and secure technology foundations that drive operational excellence and sustainable growth.
                </p>
                
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Our Vision</h2>
                <p class="text-lg text-slate-600 leading-relaxed">
                    To be the definitive technology partner for the world's most ambitious organizations, recognized for breaking down technological barriers and engineering the future of business operations.
                </p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 text-center">
                        <div class="text-4xl font-bold text-brand-blue mb-2">15+</div>
                        <div class="text-sm font-semibold text-slate-700 uppercase tracking-wide">Years Experience</div>
                    </div>
                    <div class="bg-slate-900 p-6 rounded-2xl text-center shadow-lg">
                        <div class="text-4xl font-bold text-brand-cyan mb-2">5</div>
                        <div class="text-sm font-semibold text-white uppercase tracking-wide">Core Domains</div>
                    </div>
                </div>
                <div class="space-y-4 mt-8">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 text-center shadow-sm">
                        <div class="text-4xl font-bold text-brand-blue mb-2">500+</div>
                        <div class="text-sm font-semibold text-slate-700 uppercase tracking-wide">Global Experts</div>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 text-center">
                        <div class="text-4xl font-bold text-brand-blue mb-2">98%</div>
                        <div class="text-sm font-semibold text-slate-700 uppercase tracking-wide">Client Retention</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why One Company -->
<div class="section py-24 bg-slate-50 border-y border-slate-200">
    <div class="container-site">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Why One Company for Five Domains?</h2>
            <p class="text-slate-600 text-lg">In today's landscape, software depends on cloud infrastructure, which depends on secure networking, which powers AI and automation. Siloed vendors create friction. IntliEx creates flow.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 text-center">
                <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Seamless Integration</h3>
                <p class="text-slate-600">No more finger-pointing between vendors. Our cross-functional teams design solutions that work perfectly together from day one.</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 text-center">
                <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Holistic Security</h3>
                <p class="text-slate-600">Security isn't an add-on; it's woven into the fabric of our networking, cloud, and software architectures to protect your entire ecosystem.</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 text-center">
                <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Accelerated Delivery</h3>
                <p class="text-slate-600">Unified methodologies and unified management mean faster deployment times and reduced overhead for your leadership team.</p>
            </div>
        </div>
    </div>
</div>

<!-- Leadership Team -->
<div class="section py-24 bg-white">
    <div class="container-site">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Leadership Team</h2>
            <p class="text-slate-600 text-lg">Guided by veterans of the technology industry dedicated to engineering excellence.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @if(isset($teamMembers) && count($teamMembers) > 0)
                @foreach($teamMembers as $member)
                <div class="group">
                    <div class="relative w-full aspect-[4/5] rounded-2xl overflow-hidden mb-4 bg-slate-100">
                        <img src="{{ $member->image_url ?? 'https://ui-avatars.com/api/?name='.urlencode($member->name).'&size=400&background=F1F5F9&color=1B3A5C' }}" alt="{{ $member->name }}" class="absolute inset-0 w-full h-full object-cover transition-all duration-500" loading="lazy" decoding="async">
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">{{ $member->name }}</h3>
                    <p class="text-brand-blue font-medium text-sm mb-2">{{ $member->position }}</p>
                    <p class="text-slate-500 text-sm line-clamp-3">{{ $member->bio ?? 'Bringing years of enterprise technology experience to guide IntliEx\'s strategic vision.' }}</p>
                </div>
                @endforeach
            @else
                <!-- Placeholders -->
                @foreach(['Sarah Jenkins' => 'Chief Executive Officer', 'Michael Chen' => 'Chief Technology Officer', 'David Rodriguez' => 'VP of Cloud & Network', 'Elena Rostova' => 'VP of AI & Automation'] as $name => $title)
                <div class="group">
                    <div class="relative w-full aspect-[4/5] rounded-2xl overflow-hidden mb-4 bg-slate-100">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($name) }}&size=400&background=F1F5F9&color=1B3A5C" alt="{{ $name }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async">
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">{{ $name }}</h3>
                    <p class="text-brand-blue font-medium text-sm mb-2">{{ $title }}</p>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<!-- CTA -->
<div class="section py-20 bg-brand-800 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('/images/grid-pattern.svg')] opacity-10"></div>
    <div class="container-site relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to work with us?</h2>
        <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto">Let's discuss how our integrated approach can solve your most complex enterprise challenges.</p>
        <div class="flex items-center justify-center">
            <a href="{{ route('contact') }}" class="btn btn-primary px-8 py-4 text-lg">Contact Our Experts</a>
        </div>
    </div>
</div>
@endsection


