<section class="relative pt-1 pb-16 md:pb-24 bg-gray-900 overflow-hidden min-h-[600px] flex flex-col" x-data="carousel()" x-init="startAutoplay()">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-900 to-amber-900/40"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fbbf24 1px, transparent 1px); background-size: 30px 30px;"></div>
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
                            <span class="text-white font-medium">Industrial Automation</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Carousel Container --}}
    <div class="relative flex-grow w-full flex items-center justify-center mt-12 md:mt-0" @mouseenter="pauseAutoplay()" @mouseleave="startAutoplay()">
        
        {{-- Slide 1: PLC Programming --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000 z-10" data-slide="0">
            <div class="absolute top-[20%] right-[10%] w-96 h-96 bg-amber-600/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        PLC Programming <span class="text-amber-400 block mt-2">& Control Systems</span>
                    </h1>
                    <p class="text-xl text-amber-100 mb-8 max-w-lg">Master your manufacturing processes with robust ladder logic, seamless SCADA integration, and reliable multi-vendor controller architectures.</p>
                    <a href="#plc" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Explore PLC Services</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(-5) skewX(5)">
                        <!-- PLC Chassis -->
                        <rect x="50" y="150" width="400" height="200" rx="10" fill="#1f2937" stroke="#374151" stroke-width="8"/>
                        <!-- Power Supply -->
                        <rect x="70" y="170" width="60" height="160" rx="5" fill="#374151" stroke="#f59e0b" stroke-width="2"/>
                        <!-- CPU Module -->
                        <rect x="140" y="170" width="80" height="160" rx="5" fill="#374151" stroke="#f59e0b" stroke-width="2"/>
                        <circle cx="160" cy="190" r="8" fill="#10b981"/>
                        <circle cx="160" cy="215" r="8" fill="#f59e0b"/>
                        <circle cx="160" cy="240" r="8" fill="#ef4444"/>
                        <!-- I/O Modules -->
                        <rect x="230" y="170" width="40" height="160" rx="5" fill="#374151"/>
                        <rect x="280" y="170" width="40" height="160" rx="5" fill="#374151"/>
                        <rect x="330" y="170" width="40" height="160" rx="5" fill="#374151"/>
                        <rect x="380" y="170" width="40" height="160" rx="5" fill="#374151"/>
                        <!-- Ladder Logic Hologram -->
                        <path d="M140 80 L220 80 M140 110 L220 110" stroke="#f59e0b" stroke-width="4" stroke-linecap="round"/>
                        <path d="M160 70 L160 90 M200 70 L200 90 M200 100 L200 120" stroke="#f59e0b" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 2: Motor & VFD --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0 pointer-events-none" data-slide="1">
            <div class="absolute top-[30%] left-[10%] w-96 h-96 bg-amber-600/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Motor & VFD <span class="text-amber-400 block mt-2">(Inverter) Services</span>
                    </h2>
                    <p class="text-xl text-amber-100 mb-8 max-w-lg">Optimize torque, achieve precision speed control, and drastically cut energy waste with expert variable frequency drive and motor integration.</p>
                    <a href="#vfd" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Explore VFD Services</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Industrial Motor -->
                        <path d="M150 250 A 80 80 0 1 0 310 250 A 80 80 0 1 0 150 250" fill="#374151" stroke="#4b5563" stroke-width="8"/>
                        <circle cx="230" cy="250" r="40" fill="#1f2937" stroke="#9ca3af" stroke-width="4"/>
                        <rect x="220" y="240" width="20" height="20" fill="#9ca3af"/>
                        <rect x="180" y="160" width="100" height="30" fill="#4b5563" rx="5"/>
                        <!-- VFD Drive -->
                        <rect x="350" y="100" width="120" height="180" rx="10" fill="#1f2937" stroke="#f59e0b" stroke-width="4"/>
                        <rect x="370" y="120" width="80" height="60" rx="4" fill="#111827"/>
                        <text x="410" y="155" font-family="monospace" font-size="24" fill="#10b981" text-anchor="middle">50.0</text>
                        <!-- Sine Wave Graphic -->
                        <path d="M370 200 Q 390 180 410 200 T 450 200" stroke="#f59e0b" stroke-width="3" fill="none"/>
                        <!-- Wires -->
                        <path d="M230 160 L230 130 L350 130" stroke="#f59e0b" stroke-width="6" fill="none" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 3: Industrial Control Panels --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0 pointer-events-none" data-slide="2">
            <div class="absolute bottom-[20%] right-[20%] w-96 h-96 bg-amber-600/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Industrial <span class="text-amber-400 block mt-2">Control Panel Boards</span>
                    </h2>
                    <p class="text-xl text-amber-100 mb-8 max-w-lg">Custom-designed, strictly compliant Motor Control Centers and PCC panels built to withstand extreme industrial environments.</p>
                    <a href="#panels" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Explore Control Panels</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl" transform="rotate(2) skewY(-5)">
                        <!-- Panel Enclosure -->
                        <rect x="120" y="50" width="260" height="400" rx="8" fill="#1f2937" stroke="#4b5563" stroke-width="12"/>
                        <!-- Wire Ducts -->
                        <rect x="140" y="70" width="20" height="360" fill="#374151"/>
                        <rect x="340" y="70" width="20" height="360" fill="#374151"/>
                        <rect x="160" y="240" width="180" height="20" fill="#374151"/>
                        <!-- Contactors & Relays -->
                        <rect x="180" y="100" width="40" height="60" rx="4" fill="#4b5563" stroke="#f59e0b" stroke-width="2"/>
                        <rect x="230" y="100" width="40" height="60" rx="4" fill="#4b5563" stroke="#f59e0b" stroke-width="2"/>
                        <rect x="280" y="100" width="40" height="60" rx="4" fill="#4b5563" stroke="#f59e0b" stroke-width="2"/>
                        <!-- Terminal Blocks -->
                        <rect x="180" y="320" width="140" height="30" fill="#9ca3af"/>
                        <line x1="190" y1="320" x2="190" y2="350" stroke="#374151" stroke-width="2"/>
                        <line x1="200" y1="320" x2="200" y2="350" stroke="#374151" stroke-width="2"/>
                        <!-- HMI Screen inside -->
                        <rect x="200" y="180" width="100" height="50" fill="#111827" stroke="#f59e0b" stroke-width="3"/>
                        <path d="M220 205 L240 195 L260 215 L280 190" stroke="#10b981" stroke-width="3" fill="none"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 4: PFI Panels --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0 pointer-events-none" data-slide="3">
            <div class="absolute top-[40%] left-[20%] w-96 h-96 bg-amber-600/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Power Factor <span class="text-amber-400 block mt-2">Improvement (PFI)</span>
                    </h2>
                    <p class="text-xl text-amber-100 mb-8 max-w-lg">Eliminate utility penalties and optimize plant power consumption with intelligently sized capacitor banks and APFC panels.</p>
                    <a href="#pfi" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Explore PFI Panels</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- PFI Panel Structure -->
                        <rect x="100" y="80" width="300" height="340" rx="10" fill="#1f2937" stroke="#4b5563" stroke-width="10"/>
                        <!-- Capacitor Banks -->
                        <rect x="140" y="200" width="60" height="180" rx="10" fill="#374151" stroke="#f59e0b" stroke-width="3"/>
                        <rect x="220" y="200" width="60" height="180" rx="10" fill="#374151" stroke="#f59e0b" stroke-width="3"/>
                        <rect x="300" y="200" width="60" height="180" rx="10" fill="#374151" stroke="#f59e0b" stroke-width="3"/>
                        <!-- PF Meter -->
                        <rect x="190" y="110" width="120" height="60" fill="#111827" stroke="#f59e0b" stroke-width="4"/>
                        <text x="250" y="148" font-family="monospace" font-size="28" font-weight="bold" fill="#10b981" text-anchor="middle">0.99</text>
                        <!-- Lightning bolt -->
                        <path d="M260 50 L240 80 L255 80 L240 110" stroke="#f59e0b" stroke-width="4" fill="none" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Slide 5: Boiler Controls --}}
        <div class="carousel-slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0 pointer-events-none" data-slide="4">
            <div class="absolute top-[20%] right-[30%] w-96 h-96 bg-amber-600/20 rounded-full mix-blend-screen filter blur-3xl animate-blob"></div>
            <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col md:flex-row items-center justify-between pt-16">
                <div class="w-full md:w-1/2 text-left mb-10 md:mb-0 z-20">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                        Boiler Panel <span class="text-amber-400 block mt-2">& Control Systems</span>
                    </h2>
                    <p class="text-xl text-amber-100 mb-8 max-w-lg">Enhance thermodynamic efficiency and plant safety with advanced combustion control, BMS integration, and flame safeguard systems.</p>
                    <a href="#boiler" class="btn bg-amber-600 hover:bg-amber-500 text-white px-8 py-3 text-lg border-none shadow-lg shadow-amber-600/30">Explore Boiler Controls</a>
                </div>
                <div class="w-full md:w-1/2 h-64 md:h-full relative flex items-center justify-center">
                    <svg viewBox="0 0 500 500" class="w-full h-full max-w-lg drop-shadow-2xl">
                        <!-- Boiler Drum -->
                        <rect x="150" y="100" width="200" height="300" rx="40" fill="#374151" stroke="#4b5563" stroke-width="8"/>
                        <!-- Burner -->
                        <rect x="220" y="400" width="60" height="40" fill="#1f2937"/>
                        <path d="M230 400 Q 250 350 270 400" fill="#ef4444" opacity="0.8"/>
                        <path d="M240 400 Q 250 370 260 400" fill="#f59e0b" opacity="0.9"/>
                        <!-- Pressure Gauges -->
                        <circle cx="200" cy="180" r="25" fill="#111827" stroke="#f59e0b" stroke-width="4"/>
                        <line x1="200" y1="180" x2="215" y2="165" stroke="#f59e0b" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="300" cy="180" r="25" fill="#111827" stroke="#f59e0b" stroke-width="4"/>
                        <line x1="300" y1="180" x2="285" y2="170" stroke="#f59e0b" stroke-width="3" stroke-linecap="round"/>
                        <!-- Pipe -->
                        <path d="M250 100 L250 50 L350 50" stroke="#9ca3af" stroke-width="12" fill="none" stroke-linejoin="round"/>
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
            <template x-for="i in totalSlides" :key="i">
                <button @click="goTo(i-1)" class="w-3 h-3 rounded-full transition-all duration-300" :class="activeSlide === i-1 ? 'bg-amber-400 scale-125' : 'bg-white/30 hover:bg-white/50'"></button>
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
                        slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                        slide.classList.add('opacity-100', 'z-10');
                    } else {
                        slide.classList.remove('opacity-100', 'z-10');
                        slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
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

