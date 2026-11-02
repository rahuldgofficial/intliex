<section class="py-24 bg-white dark:bg-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Our 5-Phase Engineering Lifecycle</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">We execute industrial automation projects with a rigorous, standard-aligned methodology that eliminates commissioning surprises.</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="relative border-l-4 border-gray-200 dark:border-gray-700 ml-4 md:ml-0 md:border-l-0 md:flex md:justify-between md:space-x-4">
                
                {{-- Desktop Timeline Line --}}
                <div class="hidden md:block absolute top-6 left-0 w-full h-1 bg-gray-200 dark:bg-gray-700 -z-10"></div>

                {{-- Step 1 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-transform duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400 uppercase tracking-wider block mb-2">Phase 01</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">FEED & Scoping</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Front-End Engineering Design. We collaborate with plant managers to define User Requirement Specifications (URS) and budget constraints.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 02</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Detailed Design</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Drafting functional design specifications, AutoCAD electrical schematics, and writing PLC/SCADA control logic.</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 03</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Build & FAT</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">[X] panel fabrication followed by Factory Acceptance Testing (FAT)&mdash;simulating all I/O before shipping.</p>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 04</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Install & SAT</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">On-site mechanical/electrical installation, loop checks, and Site Acceptance Testing (SAT) for seamless handover.</p>
                    </div>
                </div>
                
                {{-- Step 5 --}}
                <div class="ml-8 md:ml-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 05</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Lifecycle Support</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Operator training, preventive maintenance SLAs, and continuous OEE monitoring to maximize your asset ROI.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
