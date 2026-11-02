<section class="relative pt-1 pb-16 md:pb-24 bg-gray-900 overflow-hidden min-h-[600px] flex flex-col" x-data="carousel()" x-init="startAutoplay()">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-900 to-emerald-900/40"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#10b981 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>

    {{-- Breadcrumb (Absolute top) --}}
    <div class="absolute top-4 left-0 w-full z-20">
        <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex text-sm text-gray-400" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="text-gray-400">Services</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="text-white font-medium">Cloud Services</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Carousel Container --}}
    <div class="relative flex-grow w-full flex items-center justify-center mt-12 md:mt-0" @mouseenter="pauseAutoplay()" @mouseleave="startAutoplay()">
        
        {{-- Slide 1: Cloud Strategy & Migration --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000 z-10" data-slide="0">
            <div class="absolute top-[20%] right-[10%] w-96 h-96 bg-emerald-600/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Cloud Strategy <span class="text-emerald-400 block mt-2">& Migration</span>
                    </h1>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">Accelerate your digital transformation with zero-downtime migrations, legacy modernization, and precise readiness assessments.</p>
                    <a href="#migration" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Explore Migration</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Data Flow / Cloud SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(5)">
                        <!-- Legacy Server (Bottom) -->
                        <polygon points="150,400 300,450 450,400 300,350" fill="#064e3b" stroke="#10b981" stroke-width="3" stroke-linejoin="round" />
                        <polygon points="150,400 300,450 300,480 150,430" fill="#022c22" stroke="#10b981" stroke-width="2" />
                        <!-- Data Particles moving up -->
                        <circle cx="280" cy="320" r="5" fill="#34d399" opacity="0.8" />
                        <circle cx="320" cy="270" r="6" fill="#6ee7b7" opacity="0.6" />
                        <circle cx="290" cy="220" r="4" fill="#a7f3d0" opacity="0.9" />
                        <!-- Cloud Platform (Top) -->
                        <path d="M220,150 Q180,150 180,120 Q180,90 220,90 Q240,60 280,60 Q340,60 340,110 Q380,110 380,150 Z" fill="#064e3b" stroke="#10b981" stroke-width="4" />
                        <circle cx="280" cy="110" r="15" fill="#059669" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 2: Architecture & Infrastructure --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="1">
            <div class="absolute bottom-[20%] left-[10%] w-96 h-96 bg-emerald-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Cloud Architecture <span class="text-emerald-400 block mt-2">& Infrastructure</span>
                    </h2>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">Resilient, scalable multi-cloud and hybrid environments built with Infrastructure as Code and Kubernetes containerization.</p>
                    <a href="#architecture" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">View Architecture</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Topology / Nodes SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-5)">
                        <!-- Platform Base -->
                        <polygon points="100,250 250,180 400,250 250,320" fill="#064e3b" stroke="#059669" stroke-width="4" stroke-linejoin="round" />
                        <!-- Central Hub -->
                        <polygon points="230,230 270,210 270,250 230,270" fill="#10b981" />
                        <!-- Nodes & Connections -->
                        <line x1="250" y1="240" x2="180" y2="280" stroke="#34d399" stroke-width="3" />
                        <line x1="250" y1="240" x2="320" y2="280" stroke="#34d399" stroke-width="3" />
                        <line x1="250" y1="240" x2="250" y2="180" stroke="#34d399" stroke-width="3" />
                        <!-- Endpoint Cubes -->
                        <polygon points="170,285 190,275 190,295 170,305" fill="#6ee7b7" />
                        <polygon points="310,285 330,275 330,295 310,305" fill="#6ee7b7" />
                        <polygon points="240,175 260,165 260,185 240,195" fill="#6ee7b7" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 3: DevOps & Automation --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="2">
            <div class="absolute top-[30%] right-[30%] w-96 h-96 bg-emerald-700/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        DevOps <span class="text-emerald-400 block mt-2">& Automation</span>
                    </h2>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">Streamline your software delivery with advanced CI/CD pipelines, Site Reliability Engineering, and full-stack observability.</p>
                    <a href="#devops" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Discover DevOps</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Infinity Loop / Gears SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Infinity Loop Path -->
                        <path d="M150,250 C50,150 50,350 150,250 C250,150 250,350 350,250 C450,150 450,350 350,250 C250,150 250,350 150,250" fill="none" stroke="#059669" stroke-width="25" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M150,250 C50,150 50,350 150,250 C250,150 250,350 350,250" fill="none" stroke="#10b981" stroke-width="12" stroke-linecap="round" />
                        <!-- Gear 1 -->
                        <circle cx="150" cy="250" r="30" fill="#022c22" stroke="#34d399" stroke-width="5" />
                        <circle cx="150" cy="250" r="10" fill="#6ee7b7" />
                        <!-- Gear 2 -->
                        <circle cx="350" cy="250" r="30" fill="#022c22" stroke="#34d399" stroke-width="5" />
                        <circle cx="350" cy="250" r="10" fill="#6ee7b7" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 4: Managed Cloud & Security --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="3">
            <div class="absolute bottom-[40%] right-[10%] w-96 h-96 bg-emerald-600/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Managed Cloud <span class="text-emerald-400 block mt-2">& Security</span>
                    </h2>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">24/7 proactive cloud operations, compliance-driven architectures (SOC2/HIPAA), and impenetrable access management.</p>
                    <a href="#managed" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Secure Your Cloud</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Shield / Security SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Shield Base -->
                        <path d="M250,50 L400,100 L400,250 C400,350 300,420 250,450 C200,420 100,350 100,250 L100,100 Z" fill="#064e3b" stroke="#059669" stroke-width="8" stroke-linejoin="round" />
                        <!-- Shield Inner Motif -->
                        <path d="M250,80 L370,120 L370,250 C370,330 290,390 250,410 C210,390 130,330 130,250 L130,120 Z" fill="#022c22" stroke="#10b981" stroke-width="4" stroke-linejoin="round" />
                        <!-- Checkmark / Core -->
                        <path d="M200,250 L235,285 L310,210" fill="none" stroke="#6ee7b7" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 5: FinOps & Cost Optimization --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="4">
            <div class="absolute top-[20%] left-[40%] w-96 h-96 bg-emerald-600/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        FinOps & Cost <span class="text-emerald-400 block mt-2">Optimization</span>
                    </h2>
                    <p class="text-xl text-emerald-100 mb-8 max-w-lg">Regain control of your cloud spend with strict billing governance, reserved capacity planning, and automated resource rightsizing.</p>
                    <a href="#finops" class="btn bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-emerald-600/30">Optimize Costs</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Dashboard / Cost Analytics SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(5)">
                        <!-- Dashboard Panel -->
                        <polygon points="120,150 420,100 450,300 150,350" fill="#083344" stroke="#10b981" stroke-width="4" stroke-linejoin="round" />
                        <!-- Bar Chart -->
                        <polygon points="170,300 200,295 200,230 170,235" fill="#059669" />
                        <polygon points="210,293 240,288 240,250 210,255" fill="#34d399" />
                        <polygon points="250,286 280,281 280,180 250,185" fill="#6ee7b7" />
                        <!-- Line Graph overlay -->
                        <path d="M185,225 L225,245 L265,175 L330,195" fill="none" stroke="#a7f3d0" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="265" cy="175" r="5" fill="#ffffff" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Carousel Controls (Shared Component Logic) --}}
    <div class="absolute bottom-8 left-0 right-0 z-30 flex justify-center items-center space-x-6">
        <button @click="prev()" class="p-2 rounded-full bg-white/10 hover:bg-white/20 text-white backdrop-blur transition-all border border-white/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        
        <div class="flex space-x-3">
            <template x-for="i in 5" :key="i">
                <button @click="goTo(i-1)" class="w-3 h-3 rounded-full transition-all duration-300" :class="activeSlide === i-1 ? 'bg-emerald-400 scale-125' : 'bg-white/30 hover:bg-white/50'"></button>
            </template>
        </div>

        <button @click="next()" class="p-2 rounded-full bg-white/10 hover:bg-white/20 text-white backdrop-blur transition-all border border-white/20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>
</section>

{{-- Carousel Alpine.js Logic --}}
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('carousel', () => ({
            activeSlide: 0,
            totalSlides: 5,
            autoplayInterval: null,
            init() {
                this.showSlide(this.activeSlide);
            },
            showSlide(index) {
                const slides = document.querySelectorAll('.carousel-slide');
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove('opacity-0', 'z-0');
                        slide.classList.add('opacity-100', 'z-10');
                    } else {
                        slide.classList.remove('opacity-100', 'z-10');
                        slide.classList.add('opacity-0', 'z-0');
                    }
                });
            },
            nextSlide() {
                this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                this.showSlide(this.activeSlide);
            },
            prevSlide() {
                this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                this.showSlide(this.activeSlide);
            },
            next() {
                this.nextSlide();
                this.resetAutoplay();
            },
            prev() {
                this.prevSlide();
                this.resetAutoplay();
            },
            goTo(index) {
                this.activeSlide = index;
                this.showSlide(this.activeSlide);
                this.resetAutoplay();
            },
            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.nextSlide();
                }, 5000);
            },
            pauseAutoplay() {
                if (this.autoplayInterval) {
                    clearInterval(this.autoplayInterval);
                }
            },
            resetAutoplay() {
                this.pauseAutoplay();
                this.startAutoplay();
            }
        }));
    });
</script>

