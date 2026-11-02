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
                            <svg class="w-3.5 h-3.5 text-white/30" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 md:ml-1.5 hover:text-white transition-colors">Services</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3.5 h-3.5 text-white/30" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 md:ml-1.5 font-medium text-white/80">{{ $domain->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Slide 1: Generative AI & Conversational Agents --}}
    <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="0">
        <div class="absolute top-[20%] left-[20%] w-96 h-96 bg-violet-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
        <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
            <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Generative AI & <span class="text-violet-400 block mt-2">Conversational Agents</span>
                </h1>
                <p class="text-xl text-violet-100 mb-8 max-w-lg">From domain-specific copilots to autonomous LLM-powered workflows, we build AI that reasons and creates.</p>
                <a href="#generative-ai" class="btn bg-violet-600 hover:bg-violet-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-violet-600/30">Explore GenAI</a>
            </div>
            <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                {{-- Isometric Neural/Chat SVG --}}
                <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                    <!-- Central Node -->
                    <circle cx="250" cy="250" r="40" fill="#2e1065" stroke="#8b5cf6" stroke-width="4" />
                    <!-- Orbiting Nodes -->
                    <circle cx="150" cy="150" r="20" fill="#4c1d95" />
                    <circle cx="350" cy="150" r="20" fill="#4c1d95" />
                    <circle cx="150" cy="350" r="20" fill="#4c1d95" />
                    <circle cx="350" cy="350" r="20" fill="#4c1d95" />
                    <!-- Connections -->
                    <path d="M165,165 L225,225 M335,165 L275,225 M165,335 L225,275 M335,335 L275,275" stroke="#8b5cf6" stroke-width="2" stroke-dasharray="4 4" fill="none" />
                    <!-- Chat bubbles indicating conversational AI -->
                    <path d="M280,180 Q320,150 360,180 Q360,210 320,230 L310,240 L310,225 Q280,210 280,180 Z" fill="#8b5cf6" opacity="0.8" />
                </svg>
            </div>
        </div>
    </div>

    {{-- Slide 2: Machine Learning & Predictive Analytics --}}
    <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="1">
        <div class="absolute bottom-[20%] right-[30%] w-96 h-96 bg-rose-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
        <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
            <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Machine Learning & <span class="text-rose-400 block mt-2">Predictive Analytics</span>
                </h2>
                <p class="text-xl text-rose-100 mb-8 max-w-lg">Custom statistical models for forecasting, anomaly detection, and discovering hidden patterns in enterprise data.</p>
                <a href="#machine-learning" class="btn bg-rose-600 hover:bg-rose-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-rose-600/30">Explore ML Solutions</a>
            </div>
            <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                {{-- Isometric Graph/Data SVG --}}
                <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                    <!-- Grid base -->
                    <path d="M100,350 L400,350 M100,250 L400,250 M100,150 L400,150" stroke="#4c0519" stroke-width="2" />
                    <!-- Predictive curve -->
                    <path d="M100,350 C200,350 250,200 400,100" stroke="#f43f5e" stroke-width="6" fill="none" stroke-linecap="round" />
                    <!-- Data points -->
                    <circle cx="150" cy="320" r="6" fill="#fb7185" />
                    <circle cx="220" cy="260" r="6" fill="#fb7185" />
                    <circle cx="300" cy="180" r="6" fill="#fb7185" />
                    <circle cx="370" cy="120" r="8" fill="#fff" stroke="#f43f5e" stroke-width="3" />
                </svg>
            </div>
        </div>
    </div>

    {{-- Slide 3: Computer Vision --}}
    <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="2">
        <div class="absolute top-[20%] right-[20%] w-96 h-96 bg-cyan-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
        <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
            <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Computer Vision <span class="text-cyan-400 block mt-2">Visual Intelligence</span>
                </h2>
                <p class="text-xl text-cyan-100 mb-8 max-w-lg">Advanced image classification, object detection, and visual inspection automation for real-world environments.</p>
                <a href="#computer-vision" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Computer Vision</a>
            </div>
            <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                {{-- Isometric Camera/Vision SVG --}}
                <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                    <!-- Bounding box -->
                    <rect x="150" y="150" width="200" height="200" fill="none" stroke="#22d3ee" stroke-width="4" stroke-dasharray="20 10" />
                    <!-- Scan line -->
                    <line x1="130" y1="250" x2="370" y2="250" stroke="#06b6d4" stroke-width="3" opacity="0.8" />
                    <!-- Object inside -->
                    <polygon points="250,180 320,280 180,280" fill="#164e63" stroke="#0891b2" stroke-width="2" />
                    <!-- Crosshairs -->
                    <path d="M250,220 L250,240 M230,230 L270,230" stroke="#fff" stroke-width="2" />
                </svg>
            </div>
        </div>
    </div>

    {{-- Slide 4: Data Science & Data Engineering --}}
    <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="3">
        <div class="absolute bottom-[20%] left-[30%] w-96 h-96 bg-emerald-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
        <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
            <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Data Science & <span class="text-emerald-400 block mt-2">Data Engineering</span>
                </h2>
                <p class="text-xl text-emerald-100 mb-8 max-w-lg">Architect scalable data lakes, pipelines, and Big Data platforms to feed your AI models and unlock true business intelligence.</p>
                <a href="#data-engineering" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Explore Data Science</a>
            </div>
            <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                {{-- Isometric Data/Server SVG --}}
                <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-5)">
                    <!-- Server stack -->
                    <rect x="150" y="250" width="200" height="40" rx="4" fill="#064e3b" stroke="#10b981" stroke-width="4" />
                    <rect x="150" y="190" width="200" height="40" rx="4" fill="#064e3b" stroke="#10b981" stroke-width="4" />
                    <rect x="150" y="130" width="200" height="40" rx="4" fill="#064e3b" stroke="#10b981" stroke-width="4" />
                    <!-- Data flows -->
                    <path d="M180,290 v40 a20,20 0 0,0 20,20 h100 a20,20 0 0,0 20,-20 v-40" stroke="#34d399" stroke-width="4" fill="none" />
                    <circle cx="250" cy="350" r="10" fill="#34d399" />
                    <!-- Activity lights -->
                    <circle cx="170" cy="270" r="4" fill="#34d399" />
                    <circle cx="170" cy="210" r="4" fill="#34d399" />
                    <circle cx="170" cy="150" r="4" fill="#34d399" />
                </svg>
            </div>
        </div>
    </div>

    {{-- Slide 5: AI Integration & Strategy --}}
    <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="4">
        <div class="absolute top-[20%] right-[30%] w-96 h-96 bg-amber-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
        <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
            <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    AI Integration & <span class="text-amber-400 block mt-2">Enterprise MLOps</span>
                </h2>
                <p class="text-xl text-amber-100 mb-8 max-w-lg">From readiness assessments to production deployment, we embed scalable AI models directly into your core systems.</p>
                <a href="#ai-integration" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Explore MLOps</a>
            </div>
            <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                {{-- Isometric Gears/Integration SVG --}}
                <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                    <!-- Pipeline -->
                    <rect x="100" y="220" width="300" height="60" rx="8" fill="#451a03" stroke="#d97706" stroke-width="4" />
                    <!-- Pipeline blocks -->
                    <rect x="120" y="235" width="60" height="30" fill="#f59e0b" rx="4" />
                    <rect x="220" y="235" width="60" height="30" fill="#d97706" rx="4" />
                    <rect x="320" y="235" width="60" height="30" fill="#b45309" rx="4" />
                    <!-- Connecting arrows -->
                    <path d="M190,250 L210,250 M290,250 L310,250" stroke="#fff" stroke-width="3" stroke-linecap="round" />
                    <!-- Cloud upload -->
                    <path d="M250,220 L250,150 M240,160 L250,150 L260,160" stroke="#fcd34d" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                </svg>
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
