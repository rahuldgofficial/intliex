<section class="relative h-screen min-h-[600px] flex items-center overflow-hidden hero-gradient group" id="hero-carousel">
    
    {{-- Carousel Track --}}
    <div class="relative w-full h-full" id="carousel-track">
        
        {{-- SLIDE 1: Brand/Umbrella --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000 z-10" data-slide="0">
            {{-- Background decorative blobs --}}
            <div class="absolute top-[20%] left-[10%] w-72 h-72 bg-brand-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="absolute -bottom-8 left-[30%] w-96 h-96 bg-violet-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob animation-delay-4000"></div>
            
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Next-Generation Enterprise-Grade AI Ecosystem
                    </h1>
                    <p class="text-xl text-brand-200 mb-8 max-w-lg">One Company. Five Capabilities.</p>
                    <a href="{{ url('/services/software') }}" class="btn btn-primary px-8 py-3 text-lg border-none shadow-lg shadow-brand-500/30">Explore Our Services</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Central Hub SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Connectors -->
                        <line x1="250" y1="250" x2="250" y2="80" stroke="#3b82f6" stroke-width="2" stroke-dasharray="4" />
                        <line x1="250" y1="250" x2="410" y2="180" stroke="#8b5cf6" stroke-width="2" stroke-dasharray="4" />
                        <line x1="250" y1="250" x2="350" y2="390" stroke="#06b6d4" stroke-width="2" stroke-dasharray="4" />
                        <line x1="250" y1="250" x2="150" y2="390" stroke="#f59e0b" stroke-width="2" stroke-dasharray="4" />
                        <line x1="250" y1="250" x2="90" y2="180" stroke="#10b981" stroke-width="2" stroke-dasharray="4" />
                        
                        <!-- Center Node -->
                        <circle cx="250" cy="250" r="40" fill="#1e1b4b" stroke="#6366f1" stroke-width="4" />
                        <circle cx="250" cy="250" r="20" fill="#8b5cf6" />
                        
                        <!-- Peripheral Nodes -->
                        <!-- Software -->
                        <g transform="translate(250,80)">
                            <rect x="-25" y="-25" width="50" height="50" rx="10" fill="#1e3a8a" stroke="#3b82f6" stroke-width="3" />
                            <path d="M-10,-10 h20 M-10,0 h10 M-10,10 h15" stroke="#60a5fa" stroke-width="3" stroke-linecap="round"/>
                        </g>
                        <!-- AI -->
                        <g transform="translate(410,180)">
                            <circle cx="0" cy="0" r="28" fill="#2e1065" stroke="#8b5cf6" stroke-width="3" />
                            <path d="M-10,-10 L10,10 M10,-10 L-10,10" stroke="#a78bfa" stroke-width="3"/>
                        </g>
                        <!-- Networking -->
                        <g transform="translate(350,390)">
                            <polygon points="0,-30 26,15 -26,15" fill="#164e63" stroke="#06b6d4" stroke-width="3" />
                            <circle cx="0" cy="5" r="5" fill="#22d3ee" />
                        </g>
                        <!-- Automation -->
                        <g transform="translate(150,390)">
                            <path d="M-20,-20 h40 v40 h-40 z" fill="#78350f" stroke="#f59e0b" stroke-width="3" transform="rotate(45)" />
                            <circle cx="0" cy="0" r="10" fill="#fbbf24" />
                        </g>
                        <!-- Cloud -->
                        <g transform="translate(90,180)">
                            <rect x="-30" y="-15" width="60" height="30" rx="15" fill="#064e3b" stroke="#10b981" stroke-width="3" />
                            <circle cx="-10" cy="-10" r="15" fill="#064e3b" stroke="#10b981" stroke-width="3" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 2: Software (Blue) --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="1">
            <div class="absolute top-[30%] right-[20%] w-96 h-96 bg-blue-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        ERP & Softwares <span class="text-blue-400 block mt-2">Built for Scale</span>
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-lg">Custom platforms and enterprise systems designed to eliminate silos and drive operational efficiency.</p>
                    <a href="{{ url('/services/software') }}" class="btn bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-blue-600/30">Learn More</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center perspective-1000">
                    {{-- Isometric UI SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-15) skewX(20)">
                        <rect x="100" y="100" width="300" height="200" rx="10" fill="#1e3a8a" stroke="#3b82f6" stroke-width="4" />
                        <rect x="100" y="100" width="80" height="200" fill="#172554" rx="10" />
                        <rect x="120" y="130" width="40" height="10" rx="3" fill="#3b82f6" />
                        <rect x="120" y="160" width="40" height="10" rx="3" fill="#2563eb" />
                        <rect x="120" y="190" width="40" height="10" rx="3" fill="#2563eb" />
                        
                        <rect x="220" y="140" width="140" height="60" rx="8" fill="#2563eb" />
                        <rect x="240" y="160" width="100" height="8" rx="4" fill="#60a5fa" />
                        <rect x="240" y="180" width="70" height="8" rx="4" fill="#93c5fd" />
                        
                        <rect x="220" y="220" width="60" height="50" rx="8" fill="#3b82f6" />
                        <rect x="300" y="220" width="60" height="50" rx="8" fill="#3b82f6" />
                        
                        <!-- Floating element -->
                        <rect x="330" y="60" width="120" height="80" rx="8" fill="#1d4ed8" stroke="#60a5fa" stroke-width="3" transform="translate(0, -20)" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 3: AI (Purple) --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="2">
            <div class="absolute bottom-[20%] left-[30%] w-96 h-96 bg-violet-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Artificial Intelligence <span class="text-violet-400 block mt-2">Applied to Business</span>
                    </h2>
                    <p class="text-xl text-violet-100 mb-8 max-w-lg">From predictive analytics to Generative AI agents, we deploy models that deliver measurable ROI.</p>
                    <a href="{{ url('/services/ai') }}" class="btn bg-violet-600 hover:bg-violet-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-violet-600/30">Learn More</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Neural Network SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Connections -->
                        <path d="M100,250 L200,150 L300,250 L400,150" fill="none" stroke="#8b5cf6" stroke-width="3" stroke-dasharray="5" />
                        <path d="M100,250 L200,350 L300,250 L400,350" fill="none" stroke="#8b5cf6" stroke-width="3" stroke-dasharray="5" />
                        <path d="M200,150 L300,150 L400,250" fill="none" stroke="#8b5cf6" stroke-width="3" stroke-dasharray="5" />
                        <path d="M200,350 L300,350 L400,250" fill="none" stroke="#8b5cf6" stroke-width="3" stroke-dasharray="5" />
                        
                        <!-- Nodes Layer 1 -->
                        <circle cx="100" cy="250" r="20" fill="#2e1065" stroke="#a78bfa" stroke-width="4" />
                        
                        <!-- Nodes Layer 2 -->
                        <circle cx="200" cy="150" r="15" fill="#4c1d95" />
                        <circle cx="200" cy="250" r="15" fill="#4c1d95" />
                        <circle cx="200" cy="350" r="15" fill="#4c1d95" />
                        
                        <!-- Nodes Layer 3 -->
                        <circle cx="300" cy="150" r="25" fill="#5b21b6" stroke="#c4b5fd" stroke-width="3" />
                        <circle cx="300" cy="250" r="25" fill="#5b21b6" stroke="#c4b5fd" stroke-width="3" />
                        <circle cx="300" cy="350" r="25" fill="#5b21b6" stroke="#c4b5fd" stroke-width="3" />
                        
                        <!-- Nodes Layer 4 -->
                        <circle cx="400" cy="150" r="20" fill="#7c3aed" stroke="#ddd6fe" stroke-width="4" />
                        <circle cx="400" cy="250" r="20" fill="#7c3aed" stroke="#ddd6fe" stroke-width="4" />
                        <circle cx="400" cy="350" r="20" fill="#7c3aed" stroke="#ddd6fe" stroke-width="4" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 4: Networking (Cyan) --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="3">
            <div class="absolute top-[20%] right-[30%] w-96 h-96 bg-cyan-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Networking Services <span class="text-cyan-400 block mt-2">Zero-Trust Infrastructure</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Secure, high-bandwidth network architectures designed for the hybrid, multi-cloud enterprise.</p>
                    <a href="{{ url('/services/networking') }}" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Learn More</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Network Topology SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Lines -->
                        <path d="M250,250 L100,100 M250,250 L400,100 M250,250 L100,400 M250,250 L400,400 M100,100 L400,100 L400,400 L100,400 Z" fill="none" stroke="#0891b2" stroke-width="2" />
                        <!-- Outer Nodes -->
                        <rect x="70" y="70" width="60" height="60" rx="10" fill="#164e63" stroke="#22d3ee" stroke-width="3" />
                        <rect x="370" y="70" width="60" height="60" rx="10" fill="#164e63" stroke="#22d3ee" stroke-width="3" />
                        <rect x="70" y="370" width="60" height="60" rx="10" fill="#164e63" stroke="#22d3ee" stroke-width="3" />
                        <rect x="370" y="370" width="60" height="60" rx="10" fill="#164e63" stroke="#22d3ee" stroke-width="3" />
                        
                        <!-- Signal waves -->
                        <circle cx="100" cy="100" r="15" fill="none" stroke="#67e8f9" stroke-width="2" />
                        <circle cx="400" cy="400" r="15" fill="none" stroke="#67e8f9" stroke-width="2" />
                        
                        <!-- Core Node -->
                        <polygon points="250,200 300,250 250,300 200,250" fill="#0e7490" stroke="#67e8f9" stroke-width="4" />
                        <circle cx="250" cy="250" r="12" fill="#cffafe" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 5: Automation (Amber) --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="4">
            <div class="absolute bottom-[20%] right-[30%] w-96 h-96 bg-amber-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Industrial Automation <span class="text-amber-400 block mt-2">Zero Downtime Focus</span>
                    </h2>
                    <p class="text-xl text-amber-100 mb-8 max-w-lg">Advanced control systems and PLC integration to keep your manufacturing facilities running 24/7/365.</p>
                    <a href="{{ url('/services/automation') }}" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Learn More</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Control Panel/Gears SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Hexagon frame -->
                        <polygon points="250,50 423,150 423,350 250,450 77,350 77,150" fill="#451a03" stroke="#d97706" stroke-width="5" />
                        
                        <!-- Gears -->
                        <g fill="#b45309" stroke="#fcd34d" stroke-width="2">
                            <!-- Top left gear -->
                            <g transform="translate(180, 200)">
                                <circle cx="0" cy="0" r="40" />
                                <circle cx="0" cy="0" r="15" fill="#78350f" />
                                <!-- teeth -->
                                <path d="M-5,-45 h10 v10 h-10 z M-5,35 h10 v10 h-10 z M35,-5 h10 v10 h-10 z M-45,-5 h10 v10 h-10 z" />
                            </g>
                            <!-- Bottom right gear -->
                            <g transform="translate(290, 280)">
                                <circle cx="0" cy="0" r="60" />
                                <circle cx="0" cy="0" r="20" fill="#78350f" />
                                <!-- teeth -->
                                <path d="M-8,-68 h16 v16 h-16 z M-8,52 h16 v16 h-16 z M52,-8 h16 v16 h-16 z M-68,-8 h16 v16 h-16 z" />
                            </g>
                        </g>
                        
                        <!-- Data lines -->
                        <path d="M250,50 v50 M423,150 l-40,25 M77,350 l40,-25" stroke="#f59e0b" stroke-width="4" stroke-linecap="round" stroke-dasharray="10 5" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- SLIDE 6: Cloud (Emerald) --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="5">
            <div class="absolute top-[20%] left-[20%] w-96 h-96 bg-emerald-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Cloud Services <span class="text-emerald-400 block mt-2">DevOps & FinOps Mastery</span>
                    </h2>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">Control cloud sprawl, eliminate technical debt, and accelerate deployment via automated infrastructure.</p>
                    <a href="{{ url('/services/cloud') }}" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Learn More</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Cloud & Servers SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Cloud shape -->
                        <path d="M150,200 a60,60 0 0,1 60,-60 a70,70 0 0,1 120,0 a50,50 0 0,1 40,90 a20,20 0 0,1 -10,30 h-200 a40,40 0 0,1 -10,-60 z" fill="#064e3b" stroke="#10b981" stroke-width="4" />
                        
                        <!-- Server Stacks Base -->
                        <g transform="translate(180, 320)">
                            <rect x="0" y="0" width="140" height="20" rx="5" fill="#022c22" stroke="#34d399" stroke-width="3" />
                            <circle cx="20" cy="10" r="4" fill="#6ee7b7" />
                            <rect x="0" y="30" width="140" height="20" rx="5" fill="#022c22" stroke="#34d399" stroke-width="3" />
                            <circle cx="20" cy="40" r="4" fill="#6ee7b7" />
                            <rect x="0" y="60" width="140" height="20" rx="5" fill="#022c22" stroke="#34d399" stroke-width="3" />
                            <circle cx="20" cy="70" r="4" fill="#6ee7b7" />
                        </g>
                        
                        <!-- Upload/Download Arrows -->
                        <g transform="translate(250, 260)" stroke="#10b981" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M-20,40 v-30 m-10,10 l10,-10 l10,10" />
                            <path d="M20,10 v30 m-10,-10 l10,10 l10,-10" />
                        </g>
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
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-dot="5" aria-label="Go to slide 6"></button>
        </div>
        <button id="carousel-next" class="p-2 rounded-full bg-black/30 text-white hover:bg-black/50 transition-colors focus:outline-none backdrop-blur" aria-label="Next slide">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>
</section>
