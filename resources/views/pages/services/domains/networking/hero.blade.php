<section class="relative pt-1 pb-16 md:pb-24 bg-gray-900 overflow-hidden min-h-[600px] flex flex-col" x-data="heroCarousel()" x-init="init()">
    {{-- Background Base --}}
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-950 via-gray-900 to-gray-950 z-0"></div>
    
    {{-- Grid Overlay --}}
    <div class="absolute inset-0 z-0 opacity-20" style="background-image: linear-gradient(to right, #0891b2 1px, transparent 1px), linear-gradient(to bottom, #0891b2 1px, transparent 1px); background-size: 4rem 4rem;"></div>

    {{-- Breadcrumbs (Near zero gap below sticky nav) --}}
    <div class="container-site relative z-20 mx-auto px-4 sm:px-6 lg:px-8 pt-4">
        <nav class="flex text-xs text-cyan-200/60" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center hover:text-white transition-colors">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="text-cyan-200/60">Services</span>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="text-cyan-100 font-medium">Enterprise Networking</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Slides Container --}}
    <div class="relative flex-grow flex items-center justify-center w-full" @mouseenter="pause()" @mouseleave="resume()">
        
        {{-- Slide 1: Infrastructure & Design --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000 z-10" data-slide="0">
            <div class="absolute top-[20%] right-[10%] w-96 h-96 bg-cyan-600/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Network Infrastructure <span class="text-cyan-400 block mt-2">& Design</span>
                    </h1>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Architecting resilient, high-throughput LAN, WAN, and SD-WAN fabrics tailored for massive enterprise scale.</p>
                    <a href="#infrastructure" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Infrastructure</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Network Node SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(5)">
                        <!-- Central Core -->
                        <polygon points="250,150 350,200 350,300 250,350 150,300 150,200" fill="#083344" stroke="#06b6d4" stroke-width="4"/>
                        <!-- Connected Nodes -->
                        <circle cx="150" cy="100" r="20" fill="#083344" stroke="#22d3ee" stroke-width="4"/>
                        <circle cx="350" cy="100" r="20" fill="#083344" stroke="#22d3ee" stroke-width="4"/>
                        <circle cx="450" cy="250" r="20" fill="#083344" stroke="#22d3ee" stroke-width="4"/>
                        <circle cx="50" cy="250" r="20" fill="#083344" stroke="#22d3ee" stroke-width="4"/>
                        <circle cx="250" cy="450" r="20" fill="#083344" stroke="#22d3ee" stroke-width="4"/>
                        <!-- Connections -->
                        <line x1="200" y1="175" x2="165" y2="115" stroke="#22d3ee" stroke-width="4" stroke-dasharray="8 4"/>
                        <line x1="300" y1="175" x2="335" y2="115" stroke="#22d3ee" stroke-width="4" stroke-dasharray="8 4"/>
                        <line x1="350" y1="250" x2="430" y2="250" stroke="#22d3ee" stroke-width="4" stroke-dasharray="8 4"/>
                        <line x1="150" y1="250" x2="70" y2="250" stroke="#22d3ee" stroke-width="4" stroke-dasharray="8 4"/>
                        <line x1="250" y1="350" x2="250" y2="430" stroke="#22d3ee" stroke-width="4" stroke-dasharray="8 4"/>
                        <!-- Data pulses -->
                        <circle cx="180" cy="140" r="5" fill="#67e8f9" />
                        <circle cx="390" cy="250" r="5" fill="#67e8f9" />
                        <circle cx="250" cy="390" r="5" fill="#67e8f9" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 2: Managed Network Services --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="1">
            <div class="absolute bottom-[20%] left-[20%] w-96 h-96 bg-cyan-600/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Managed Network <span class="text-cyan-400 block mt-2">Services</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">24/7 proactive NOC monitoring, performance optimization, and managed Wi-Fi to keep your operations flawless.</p>
                    <a href="#managed-services" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Managed Services</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Dashboard/Monitoring SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-5)">
                        <!-- Dashboard Panel -->
                        <rect x="100" y="150" width="300" height="200" rx="12" fill="#083344" stroke="#06b6d4" stroke-width="4" />
                        <rect x="100" y="150" width="300" height="40" rx="12" fill="#164e63" />
                        <circle cx="130" cy="170" r="6" fill="#ef4444" />
                        <circle cx="150" cy="170" r="6" fill="#eab308" />
                        <circle cx="170" cy="170" r="6" fill="#22c55e" />
                        <!-- Performance Graph -->
                        <path d="M130,300 L180,260 L230,280 L280,210 L330,240 L370,180" fill="none" stroke="#22d3ee" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="370" cy="180" r="8" fill="#67e8f9" />
                        <circle cx="280" cy="210" r="6" fill="#06b6d4" />
                        <rect x="130" y="320" width="240" height="4" fill="#164e63" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 3: Network Security --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="2">
            <div class="absolute top-[30%] right-[30%] w-96 h-96 bg-cyan-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Enterprise Network <span class="text-cyan-400 block mt-2">Security</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Zero Trust Network Access (ZTNA), SASE, and next-generation firewalls to lock down your perimeter and protect critical assets.</p>
                    <a href="#security" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Network Security</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Shield/Lock SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(5)">
                        <!-- Shield Base -->
                        <path d="M250,100 L380,150 L380,280 C380,380 250,450 250,450 C250,450 120,380 120,280 L120,150 Z" fill="#083344" stroke="#06b6d4" stroke-width="8" stroke-linejoin="round" />
                        <!-- Inner Lock -->
                        <rect x="210" y="240" width="80" height="60" rx="8" fill="#22d3ee" />
                        <path d="M225,240 V200 C225,180 275,180 275,200 V240" fill="none" stroke="#22d3ee" stroke-width="16" stroke-linecap="round" />
                        <!-- Pulse Rings -->
                        <path d="M250,50 L420,110 L420,290 C420,410 250,490 250,490 C250,490 80,410 80,290 L80,110 Z" fill="none" stroke="#22d3ee" stroke-width="2" stroke-dasharray="10 10" opacity="0.5" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 4: Cloud Networking --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="3">
            <div class="absolute bottom-[20%] left-[30%] w-96 h-96 bg-cyan-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Cloud & Multi-Cloud <span class="text-cyan-400 block mt-2">Networking</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Seamless, high-performance hybrid connectivity, VPC peering, and managed load balancing across AWS, Azure, and GCP.</p>
                    <a href="#cloud-networking" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Cloud Networking</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Cloud/Network SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-5)">
                        <!-- Cloud Shape -->
                        <path d="M180,300 A60,60 0 0,1 210,190 A80,80 0 0,1 350,210 A60,60 0 0,1 350,320 Z" fill="#083344" stroke="#06b6d4" stroke-width="6" stroke-linejoin="round" />
                        <!-- Servers below cloud -->
                        <rect x="220" y="380" width="60" height="80" rx="4" fill="#083344" stroke="#22d3ee" stroke-width="4" />
                        <!-- Data beams -->
                        <line x1="250" y1="320" x2="250" y2="380" stroke="#22d3ee" stroke-width="4" stroke-dasharray="6 6" />
                        <line x1="235" y1="330" x2="235" y2="380" stroke="#67e8f9" stroke-width="2" />
                        <line x1="265" y1="330" x2="265" y2="380" stroke="#67e8f9" stroke-width="2" />
                        <!-- Cloud Nodes -->
                        <circle cx="230" cy="240" r="8" fill="#22d3ee" />
                        <circle cx="310" cy="260" r="8" fill="#22d3ee" />
                        <circle cx="270" cy="280" r="8" fill="#22d3ee" />
                        <path d="M230,240 L310,260 L270,280 Z" fill="none" stroke="#22d3ee" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 5: Network Consulting --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="4">
            <div class="absolute top-[20%] left-[40%] w-96 h-96 bg-cyan-600/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Network Consulting <span class="text-cyan-400 block mt-2">& Optimization</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Comprehensive audits, compliance-driven design (PCI-DSS/HIPAA), and capacity planning for enterprise modernization.</p>
                    <a href="#consulting" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Consulting</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Blueprint/Audit SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(5)">
                        <!-- Blueprint Document -->
                        <polygon points="150,150 400,100 450,300 200,350" fill="#083344" stroke="#06b6d4" stroke-width="4" stroke-linejoin="round" />
                        <!-- Blueprint Lines -->
                        <line x1="180" y1="180" x2="350" y2="150" stroke="#22d3ee" stroke-width="2" opacity="0.5" />
                        <line x1="190" y1="210" x2="360" y2="180" stroke="#22d3ee" stroke-width="2" opacity="0.5" />
                        <!-- Magnifying Glass/Audit -->
                        <circle cx="280" cy="250" r="50" fill="none" stroke="#22d3ee" stroke-width="8" />
                        <line x1="315" y1="285" x2="370" y2="340" stroke="#22d3ee" stroke-width="12" stroke-linecap="round" />
                        <circle cx="280" cy="250" r="40" fill="#06b6d4" opacity="0.2" />
                        <!-- Checkmark -->
                        <path d="M260,250 L275,265 L305,230" fill="none" stroke="#67e8f9" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        {{-- Slide 6: Physical Infrastructure --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0" data-slide="5">
            <div class="absolute bottom-[20%] right-[30%] w-96 h-96 bg-cyan-500/10 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        On-Premises <span class="text-cyan-400 block mt-2">Infrastructure</span>
                    </h2>
                    <p class="text-xl text-cyan-100 mb-8 max-w-lg">Complete low-voltage solutions from structured cabling and data center build-outs to IP surveillance and unified communications.</p>
                    <a href="#physical-infrastructure" class="btn bg-cyan-600 hover:bg-cyan-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-cyan-600/30">Explore Physical Infrastructure</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    {{-- Isometric Server Rack / Physical Infra SVG --}}
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-5)">
                        <!-- Server Rack Base -->
                        <polygon points="200,100 350,150 350,400 200,350" fill="#083344" stroke="#06b6d4" stroke-width="4" stroke-linejoin="round" />
                        <!-- Servers in Rack -->
                        <polygon points="210,130 340,170 340,190 210,150" fill="#164e63" stroke="#22d3ee" stroke-width="2" />
                        <circle cx="230" cy="148" r="3" fill="#67e8f9" /> <circle cx="245" cy="152" r="3" fill="#67e8f9" />
                        
                        <polygon points="210,170 340,210 340,230 210,190" fill="#164e63" stroke="#22d3ee" stroke-width="2" />
                        <circle cx="230" cy="188" r="3" fill="#ef4444" /> <circle cx="245" cy="192" r="3" fill="#67e8f9" />
                        
                        <polygon points="210,210 340,250 340,270 210,230" fill="#164e63" stroke="#22d3ee" stroke-width="2" />
                        <circle cx="230" cy="228" r="3" fill="#67e8f9" /> <circle cx="245" cy="232" r="3" fill="#eab308" />
                        
                        <!-- Cabling routing down the side -->
                        <path d="M190,130 Q170,250 180,380" fill="none" stroke="#22d3ee" stroke-width="6" />
                        <path d="M180,140 Q160,260 170,390" fill="none" stroke="#06b6d4" stroke-width="4" />
                        
                        <!-- CCTV Camera overhead -->
                        <polygon points="380,50 450,70 450,100 380,80" fill="#083344" stroke="#06b6d4" stroke-width="3" />
                        <circle cx="395" cy="72" r="8" fill="#ef4444" />
                        <line x1="415" y1="60" x2="415" y2="20" stroke="#06b6d4" stroke-width="4" />
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
            <template x-for="i in 6" :key="i">
                <button @click="goTo(i-1)" class="w-3 h-3 rounded-full transition-all duration-300" :class="activeSlide === i-1 ? 'bg-cyan-400 scale-125' : 'bg-white/30 hover:bg-white/50'"></button>
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
        Alpine.data('heroCarousel', () => ({
            activeSlide: 0,
            totalSlides: 6,
            autoPlayInterval: null,
            
            init() {
                this.showSlide(this.activeSlide);
                this.startAutoPlay();
            },
            
            startAutoPlay() {
                this.autoPlayInterval = setInterval(() => {
                    this.next();
                }, 6000); // 6 seconds per slide
            },
            
            pause() {
                clearInterval(this.autoPlayInterval);
            },
            
            resume() {
                this.startAutoPlay();
            },
            
            next() {
                this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                this.showSlide(this.activeSlide);
                this.resetAutoplay();
            },
            
            prev() {
                this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                this.showSlide(this.activeSlide);
                this.resetAutoplay();
            },
            
            goTo(index) {
                if (index === this.activeSlide) return;
                this.activeSlide = index;
                this.showSlide(this.activeSlide);
                this.resetAutoplay();
            },

            resetAutoplay() {
                this.pause();
                this.resume();
            },
            
            showSlide(index) {
                const slides = document.querySelectorAll('.carousel-slide');
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                        slide.classList.add('opacity-100', 'z-10');
                    } else {
                        slide.classList.remove('opacity-100', 'z-10');
                        slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
                    }
                });
            }
        }));
    });
</script>


