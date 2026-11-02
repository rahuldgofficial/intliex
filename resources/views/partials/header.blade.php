<header class="fixed w-full top-0 z-40 transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-surface-200" id="site-header">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex items-center focus:outline-none focus:ring-2 focus:ring-brand-500 rounded" aria-label="IntliEx Home">
                    <img src="{{ asset('images/IntliEx_Logo_Web_Header.webp') }}" alt="IntliEx" class="h-10 w-auto" loading="eager" decoding="async">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex space-x-8 items-center" aria-label="Main Navigation">
                <a href="{{ url('/') }}" class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors">Home</a>
                
                <!-- Services Dropdown (Mega Menu) -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors flex items-center gap-1 focus:outline-none focus:ring-2 focus:ring-brand-500 rounded" aria-expanded="false" aria-haspopup="true">
                        Services
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <!-- Mega Menu Panel -->
                    <div class="absolute left-1/2 -translate-x-1/2 mt-0 w-screen max-w-4xl px-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 pt-6 shadow-xl" role="menu">
                        <div class="rounded-xl shadow-lg ring-1 ring-black/5 bg-white overflow-hidden flex">
                            <!-- Services List -->
                            <div class="w-2/3 p-8 grid grid-cols-2 gap-8">
                                <a href="{{ url('/services/software') }}" class="flex items-start p-4 -m-4 rounded-lg hover:bg-surface-50 transition-colors group/item focus:outline-none focus:ring-2 focus:ring-brand-500">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-100 text-blue-600 sm:h-12 sm:w-12">
                                        @include('partials.domain-icon', ['slug' => 'software', 'class' => 'h-6 w-6'])
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-base font-semibold text-surface-900 group-hover/item:text-blue-600 transition-colors">ERP & Softwares</p>
                                        <p class="mt-1 text-sm text-surface-500">Custom enterprise applications and scalable SaaS platforms.</p>
                                    </div>
                                </a>
                                
                                <a href="{{ url('/services/ai') }}" class="flex items-start p-4 -m-4 rounded-lg hover:bg-surface-50 transition-colors group/item focus:outline-none focus:ring-2 focus:ring-brand-500">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-violet-100 text-violet-600 sm:h-12 sm:w-12">
                                        @include('partials.domain-icon', ['slug' => 'ai', 'class' => 'h-6 w-6'])
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-base font-semibold text-surface-900 group-hover/item:text-violet-600 transition-colors">Artificial Intelligence</p>
                                        <p class="mt-1 text-sm text-surface-500">Machine learning, predictive analytics, and intelligent automation.</p>
                                    </div>
                                </a>

                                <a href="{{ url('/services/networking') }}" class="flex items-start p-4 -m-4 rounded-lg hover:bg-surface-50 transition-colors group/item focus:outline-none focus:ring-2 focus:ring-brand-500">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-100 text-cyan-600 sm:h-12 sm:w-12">
                                        @include('partials.domain-icon', ['slug' => 'networking', 'class' => 'h-6 w-6'])
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-base font-semibold text-surface-900 group-hover/item:text-cyan-600 transition-colors">Networking Services</p>
                                        <p class="mt-1 text-sm text-surface-500">Secure, high-performance network infrastructure for modern enterprises.</p>
                                    </div>
                                </a>

                                <a href="{{ url('/services/automation') }}" class="flex items-start p-4 -m-4 rounded-lg hover:bg-surface-50 transition-colors group/item focus:outline-none focus:ring-2 focus:ring-brand-500">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-amber-100 text-amber-600 sm:h-12 sm:w-12">
                                        @include('partials.domain-icon', ['slug' => 'automation', 'class' => 'h-6 w-6'])
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-base font-semibold text-surface-900 group-hover/item:text-amber-600 transition-colors">Industrial Automation</p>
                                        <p class="mt-1 text-sm text-surface-500">Smart manufacturing, IoT integrations, and automated workflows.</p>
                                    </div>
                                </a>

                                <a href="{{ url('/services/cloud') }}" class="flex items-start p-4 -m-4 rounded-lg hover:bg-surface-50 transition-colors group/item focus:outline-none focus:ring-2 focus:ring-brand-500">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-emerald-100 text-emerald-600 sm:h-12 sm:w-12">
                                        @include('partials.domain-icon', ['slug' => 'cloud', 'class' => 'h-6 w-6'])
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-base font-semibold text-surface-900 group-hover/item:text-emerald-600 transition-colors">Cloud Services</p>
                                        <p class="mt-1 text-sm text-surface-500">Cloud migration, multi-cloud strategy, and managed infrastructure.</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Right Stats Panel -->
                            <div class="w-1/3 bg-surface-50 p-8 flex flex-col justify-center space-y-8 border-l border-surface-200">
                                <!-- Experience -->
                                <div class="flex items-center gap-4">
                                    <div class="flex-shrink-0 text-brand-500">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-base font-semibold text-surface-900">10+ Years</div>
                                        <div class="text-xs font-medium text-surface-500 uppercase tracking-wider">Experience</div>
                                    </div>
                                </div>
                                <!-- Countries Served -->
                                <div class="flex items-center gap-4">
                                    <div class="flex-shrink-0 text-brand-500">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-base font-semibold text-surface-900">30+ Countries</div>
                                        <div class="text-xs font-medium text-surface-500 uppercase tracking-wider">Served</div>
                                    </div>
                                </div>
                                <!-- Clients -->
                                <div class="flex items-center gap-4">
                                    <div class="flex-shrink-0 text-brand-500">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-base font-semibold text-surface-900">350+ Satisfied</div>
                                        <div class="text-xs font-medium text-surface-500 uppercase tracking-wider">Clients</div>
                                    </div>
                                </div>
                                <!-- Products -->
                                <div class="flex items-center gap-4">
                                    <div class="flex-shrink-0 text-brand-500">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-base font-semibold text-surface-900">500+ Products</div>
                                        <div class="text-xs font-medium text-surface-500 uppercase tracking-wider">Delivered</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/industries') }}" class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors">Industries</a>
                <a href="{{ url('/case-studies') }}" class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors">Case Studies</a>
                <a href="{{ url('/blog') }}" class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors">Blog</a>
                <a href="{{ url('/about') }}" class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors">About</a>
                <a href="{{ url('/careers') }}" class="nav-link text-surface-600 hover:text-brand-600 font-medium transition-colors">Careers</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden lg:flex items-center">
                <a href="{{ url('/contact') }}" class="btn btn-primary bg-brand-600 hover:bg-brand-700 text-white px-5 py-2.5 rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 shadow-sm">
                    Contact Us
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden">
                <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-surface-400 hover:text-surface-500 hover:bg-surface-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-500" aria-expanded="false" onclick="document.getElementById('mobile-menu').classList.toggle('hidden');">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden bg-white border-t border-surface-200" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-surface-900 hover:bg-surface-50">Home</a>
            
            <div class="px-3 py-2 text-base font-medium text-surface-900">Services</div>
            <div class="pl-6 space-y-1">
                <a href="{{ url('/services/software') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-surface-600 hover:bg-surface-50 hover:text-brand-600">ERP & Softwares</a>
                <a href="{{ url('/services/ai') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-surface-600 hover:bg-surface-50 hover:text-brand-600">Artificial Intelligence</a>
                <a href="{{ url('/services/networking') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-surface-600 hover:bg-surface-50 hover:text-brand-600">Networking Services</a>
                <a href="{{ url('/services/automation') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-surface-600 hover:bg-surface-50 hover:text-brand-600">Industrial Automation</a>
                <a href="{{ url('/services/cloud') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-surface-600 hover:bg-surface-50 hover:text-brand-600">Cloud Services</a>
            </div>

            <a href="{{ url('/industries') }}" class="block px-3 py-2 rounded-md text-base font-medium text-surface-900 hover:bg-surface-50">Industries</a>
            <a href="{{ url('/case-studies') }}" class="block px-3 py-2 rounded-md text-base font-medium text-surface-900 hover:bg-surface-50">Case Studies</a>
            <a href="{{ url('/blog') }}" class="block px-3 py-2 rounded-md text-base font-medium text-surface-900 hover:bg-surface-50">Blog</a>
            <a href="{{ url('/about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-surface-900 hover:bg-surface-50">About</a>
            <a href="{{ url('/careers') }}" class="block px-3 py-2 rounded-md text-base font-medium text-surface-900 hover:bg-surface-50">Careers</a>
            
            <div class="mt-4 pt-4 border-t border-surface-200 px-3">
                <a href="{{ url('/contact') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-brand-600 hover:bg-brand-700">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Spacer to prevent content from hiding under fixed header -->
<div class="h-20 w-full"></div>

