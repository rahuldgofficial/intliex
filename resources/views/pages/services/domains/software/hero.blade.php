<section class="relative h-screen min-h-[700px] flex items-center overflow-hidden hero-gradient group" id="hero-carousel">
    
    {{-- Static Breadcrumb overlaying all slides --}}
    <div class="absolute top-0 left-0 w-full z-40 pt-1 pb-0">
        <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex text-xs text-white/50" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-1.5">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center hover:text-white transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3.5 h-3.5 text-white/30 mx-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-white/50">Services</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3.5 h-3.5 text-white/30 mx-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-white/80">{{ $domain->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Carousel Track --}}
    <div class="relative w-full h-full" id="carousel-track">
        
        {{-- SLIDE 1: ERP Modules --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000 z-10" data-slide="0">
            <div class="absolute top-[20%] left-[10%] w-72 h-72 bg-blue-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        ERP Solutions For <span class="text-blue-400 block mt-2">Every Business Function</span>
                    </h1>
                    <p class="text-xl text-blue-100 mb-8 max-w-lg">Adopt individual specialized modules to solve specific bottlenecks, or deploy our complete suite for end-to-end enterprise transformation.</p>
                    <a href="#erp-modules" class="btn bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-blue-600/30">Explore ERP Modules</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center perspective-1000">
                    {{-- Isometric ERP Dashboard SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-15) skewX(20)">
                        <rect x="80" y="100" width="340" height="240" rx="12" fill="#1e3a8a" stroke="#3b82f6" stroke-width="4" />
                        <rect x="80" y="100" width="90" height="240" fill="#172554" rx="12" />
                        <rect x="100" y="130" width="50" height="12" rx="4" fill="#3b82f6" />
                        <rect x="100" y="160" width="50" height="12" rx="4" fill="#2563eb" />
                        <rect x="100" y="190" width="50" height="12" rx="4" fill="#2563eb" />
                        <rect x="100" y="220" width="50" height="12" rx="4" fill="#2563eb" />
                        
                        <!-- Main Content Area -->
                        <rect x="190" y="130" width="210" height="80" rx="8" fill="#2563eb" />
                        <circle cx="230" cy="170" r="25" fill="none" stroke="#60a5fa" stroke-width="8" stroke-dasharray="100 20" />
                        <rect x="270" y="150" width="110" height="8" rx="4" fill="#93c5fd" />
                        <rect x="270" y="170" width="80" height="8" rx="4" fill="#bfdbfe" />
                        
                        <rect x="190" y="230" width="100" height="90" rx="8" fill="#3b82f6" />
                        <path d="M210,300 L230,270 L250,280 L270,250" fill="none" stroke="#93c5fd" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        
                        <rect x="300" y="230" width="100" height="90" rx="8" fill="#3b82f6" />
                        <rect x="320" y="250" width="60" height="8" rx="4" fill="#bfdbfe" />
                        <rect x="320" y="270" width="40" height="8" rx="4" fill="#93c5fd" />
                        <rect x="320" y="290" width="50" height="8" rx="4" fill="#60a5fa" />
                        
                        <!-- Floating element -->
                        <rect x="330" y="60" width="130" height="90" rx="8" fill="#1d4ed8" stroke="#60a5fa" stroke-width="3" transform="translate(20, -30)" />
                        <circle cx="370" cy="95" r="15" fill="#93c5fd" />
                        <rect x="395" y="85" width="45" height="6" rx="3" fill="#bfdbfe" />
                        <rect x="395" y="100" width="30" height="6" rx="3" fill="#60a5fa" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 2: Industry Specific --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="1">
            <div class="absolute top-[30%] right-[20%] w-96 h-96 bg-indigo-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Industry-Specific <span class="text-indigo-400 block mt-2">Management Solutions</span>
                    </h2>
                    <p class="text-xl text-indigo-100 mb-8 max-w-lg">Purpose-built software platforms engineered to handle the unique operational workflows of your specific industry.</p>
                    <a href="#industry-specific" class="btn bg-indigo-600 hover:bg-indigo-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-indigo-600/30">Explore Industries</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center perspective-1000">
                    {{-- Isometric Industry Icons SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Connecting lines -->
                        <path d="M250,250 L150,150 M250,250 L350,150 M250,250 L150,350 M250,250 L350,350" stroke="#4f46e5" stroke-width="2" stroke-dasharray="5 5" fill="none" />
                        <circle cx="250" cy="250" r="40" fill="#312e81" stroke="#4f46e5" stroke-width="4" />
                        <path d="M240,240 h20 v20 h-20 z" fill="#818cf8" />
                        
                        <!-- Hotel -->
                        <g transform="translate(150, 150)">
                            <circle cx="0" cy="0" r="45" fill="#3730a3" stroke="#6366f1" stroke-width="3" />
                            <path d="M-15,-10 h30 v25 h-30 z" fill="#818cf8" />
                            <path d="M-5,-10 v-5 a5,5 0 0,1 10,0 v5" fill="none" stroke="#c7d2fe" stroke-width="3" />
                            <rect x="-10" y="-5" width="8" height="8" fill="#e0e7ff" />
                            <rect x="2" y="-5" width="8" height="8" fill="#e0e7ff" />
                        </g>
                        <!-- Hospital -->
                        <g transform="translate(350, 150)">
                            <circle cx="0" cy="0" r="45" fill="#3730a3" stroke="#6366f1" stroke-width="3" />
                            <path d="M-20,-5 h40 v10 h-40 z M-5,-20 h10 v40 h-10 z" fill="#818cf8" />
                        </g>
                        <!-- Restaurant -->
                        <g transform="translate(150, 350)">
                            <circle cx="0" cy="0" r="45" fill="#3730a3" stroke="#6366f1" stroke-width="3" />
                            <path d="M-15,15 v-20 a15,15 0 0,1 30,0 v20 h-30" fill="#818cf8" />
                            <path d="M0,15 v10" stroke="#818cf8" stroke-width="4" />
                            <path d="M-10,25 h20" stroke="#818cf8" stroke-width="4" stroke-linecap="round" />
                        </g>
                        <!-- Retail/Cart -->
                        <g transform="translate(350, 350)">
                            <circle cx="0" cy="0" r="45" fill="#3730a3" stroke="#6366f1" stroke-width="3" />
                            <path d="M-20,-10 h10 l5,20 h20" fill="none" stroke="#818cf8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="-2" cy="15" r="4" fill="#c7d2fe" />
                            <circle cx="12" cy="15" r="4" fill="#c7d2fe" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 3: Mobile Apps --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="2">
            <div class="absolute bottom-[20%] left-[30%] w-96 h-96 bg-rose-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Mobile App <span class="text-rose-400 block mt-2">Development</span>
                    </h2>
                    <p class="text-xl text-rose-100 mb-8 max-w-lg">Award-winning mobile experiences across iOS, Android, and cross-platform ecosystems, from concept to app store launch.</p>
                    <a href="#mobile-apps" class="btn bg-rose-600 hover:bg-rose-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-rose-600/30">Explore Mobile Services</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Mobile Mockup SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Background Phone -->
                        <g transform="translate(150, 100) rotate(-15)">
                            <rect x="0" y="0" width="120" height="240" rx="20" fill="#4c1d95" stroke="#f43f5e" stroke-width="2" opacity="0.6" />
                            <rect x="10" y="10" width="100" height="220" rx="12" fill="#2e1065" opacity="0.6" />
                            <rect x="20" y="30" width="80" height="60" rx="8" fill="#e11d48" opacity="0.4" />
                            <circle cx="35" cy="110" r="15" fill="#fb7185" opacity="0.4" />
                            <rect x="60" y="105" width="40" height="10" rx="4" fill="#fb7185" opacity="0.4" />
                        </g>
                        
                        <!-- Foreground Phone -->
                        <g transform="translate(240, 120) rotate(5)">
                            <rect x="0" y="0" width="140" height="280" rx="25" fill="#1e1b4b" stroke="#f43f5e" stroke-width="4" />
                            <rect x="10" y="10" width="120" height="260" rx="15" fill="#0f172a" />
                            <!-- Notch -->
                            <path d="M50,10 h40 a10,10 0 0,1 10,10 v0 a10,10 0 0,1 -10,10 h-40 a10,10 0 0,1 -10,-10 v0 a10,10 0 0,1 10,-10 z" fill="#1e1b4b" />
                            
                            <!-- UI Elements -->
                            <rect x="20" y="50" width="100" height="80" rx="12" fill="#e11d48" />
                            <circle cx="45" cy="90" r="15" fill="#ffe4e6" />
                            <rect x="70" y="85" width="40" height="10" rx="5" fill="#ffe4e6" />
                            
                            <rect x="20" y="150" width="45" height="45" rx="10" fill="#be123c" />
                            <rect x="75" y="150" width="45" height="45" rx="10" fill="#be123c" />
                            <rect x="20" y="205" width="100" height="40" rx="10" fill="#be123c" />
                        </g>
                        
                        <!-- Floating elements -->
                        <circle cx="180" cy="280" r="8" fill="#fecdd3" />
                        <circle cx="380" cy="180" r="12" fill="#f43f5e" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 4: E-Commerce --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="3">
            <div class="absolute top-[20%] right-[30%] w-96 h-96 bg-emerald-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        E-Commerce <span class="text-emerald-400 block mt-2">Solutions</span>
                    </h2>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">Scalable digital storefronts and marketplaces designed to maximize conversion rates and drive revenue.</p>
                    <a href="#ecommerce-solutions" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Explore E-Commerce</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center perspective-1000">
                    {{-- E-Commerce Storefront SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(10) skewX(-10)">
                        <!-- Browser Window -->
                        <rect x="80" y="120" width="340" height="220" rx="10" fill="#064e3b" stroke="#10b981" stroke-width="4" />
                        <rect x="80" y="120" width="340" height="30" fill="#022c22" rx="10" />
                        <circle cx="100" cy="135" r="4" fill="#ef4444" />
                        <circle cx="115" cy="135" r="4" fill="#eab308" />
                        <circle cx="130" cy="135" r="4" fill="#22c55e" />
                        
                        <!-- Hero Banner -->
                        <rect x="100" y="170" width="300" height="60" rx="8" fill="#10b981" />
                        <rect x="120" y="190" width="100" height="10" rx="4" fill="#d1fae5" />
                        <rect x="120" y="210" width="60" height="10" rx="4" fill="#a7f3d0" />
                        
                        <!-- Product Grid -->
                        <rect x="100" y="250" width="80" height="70" rx="6" fill="#047857" />
                        <circle cx="140" cy="275" r="15" fill="#34d399" />
                        <rect x="110" y="300" width="60" height="8" rx="4" fill="#6ee7b7" />
                        
                        <rect x="210" y="250" width="80" height="70" rx="6" fill="#047857" />
                        <circle cx="250" cy="275" r="15" fill="#34d399" />
                        <rect x="220" y="300" width="60" height="8" rx="4" fill="#6ee7b7" />
                        
                        <rect x="320" y="250" width="80" height="70" rx="6" fill="#047857" />
                        <circle cx="360" cy="275" r="15" fill="#34d399" />
                        <rect x="330" y="300" width="60" height="8" rx="4" fill="#6ee7b7" />
                        
                        <!-- Floating Cart -->
                        <g transform="translate(370, 70)">
                            <circle cx="30" cy="30" r="30" fill="#059669" stroke="#34d399" stroke-width="3" />
                            <path d="M15,20 h8 l5,15 h15" fill="none" stroke="#a7f3d0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="28" cy="42" r="3" fill="#d1fae5" />
                            <circle cx="42" cy="42" r="3" fill="#d1fae5" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 5: Specialized Software --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="4">
            <div class="absolute bottom-[20%] right-[30%] w-96 h-96 bg-cyan-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Specialized Software <span class="text-cyan-400 block mt-2">Engineering</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Advanced technical capabilities for complex enterprise requirements, from legacy modernization to cloud-native architectures.</p>
                    <a href="#specialized-software" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Capabilities</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Specialized Integration Network SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Connecting lines -->
                        <path d="M250,250 L120,120 M250,250 L380,120 M250,250 L120,380 M250,250 L380,380 M250,250 L250,80 M250,250 L80,250 M250,250 L420,250 M250,250 L250,420" stroke="#0891b2" stroke-width="2" stroke-dasharray="8 4" fill="none" />
                        
                        <!-- Core Node (API/Code) -->
                        <polygon points="250,180 320,250 250,320 180,250" fill="#164e63" stroke="#22d3ee" stroke-width="4" />
                        <path d="M220,250 l20,-20 M220,250 l20,20 M280,250 l-20,-20 M280,250 l-20,20 M260,220 l-20,60" fill="none" stroke="#a5f3fc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        
                        <!-- Satellite Nodes -->
                        <circle cx="120" cy="120" r="25" fill="#0e7490" stroke="#22d3ee" stroke-width="3" />
                        <circle cx="380" cy="120" r="25" fill="#0e7490" stroke="#22d3ee" stroke-width="3" />
                        <circle cx="120" cy="380" r="25" fill="#0e7490" stroke="#22d3ee" stroke-width="3" />
                        <circle cx="380" cy="380" r="25" fill="#0e7490" stroke="#22d3ee" stroke-width="3" />
                        <circle cx="250" cy="80" r="20" fill="#155e75" stroke="#67e8f9" stroke-width="2" />
                        <circle cx="80" cy="250" r="20" fill="#155e75" stroke="#67e8f9" stroke-width="2" />
                        <circle cx="420" cy="250" r="20" fill="#155e75" stroke="#67e8f9" stroke-width="2" />
                        <circle cx="250" cy="420" r="20" fill="#155e75" stroke="#67e8f9" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
    
    {{-- Carousel Controls --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex items-center space-x-6 z-30">
        <button id="carousel-prev" class="p-2 rounded-full bg-black/30 text-white hover:bg-black/50 transition-colors focus:outline-none backdrop-blur" aria-label="Previous slide">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <div class="flex space-x-3" id="carousel-dots">
            <button class="w-3 h-3 rounded-full bg-white transition-all duration-300" data-dot="0" aria-label="Go to slide 1"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-dot="1" aria-label="Go to slide 2"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-dot="2" aria-label="Go to slide 3"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-dot="3" aria-label="Go to slide 4"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-dot="4" aria-label="Go to slide 5"></button>
        </div>
        <button id="carousel-next" class="p-2 rounded-full bg-black/30 text-white hover:bg-black/50 transition-colors focus:outline-none backdrop-blur" aria-label="Next slide">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>
</section>

