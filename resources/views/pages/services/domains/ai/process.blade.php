<section class="py-24 bg-white dark:bg-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Our Data-First AI Lifecycle</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">We don't build turnkey software; we engineer precise AI solutions using rigorous data science methodologies.</p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="relative border-l-4 border-gray-200 dark:border-gray-700 ml-4 md:ml-0 md:border-l-0 md:flex md:justify-between md:space-x-4">
                
                {{-- Desktop Timeline Line --}}
                <div class="hidden md:block absolute top-6 left-0 w-full h-1 bg-gray-200 dark:bg-gray-700 -z-10"></div>

                {{-- Step 1 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-transform duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400 uppercase tracking-wider block mb-2">Phase 01</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Discovery & Data Feasibility</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Auditing raw data cleanliness, defining business hypotheses, and setting accuracy benchmarks.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 02</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Prototype & Architecture</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Developing a rapid PoC to test baseline models and validate the underlying architecture (Classical ML vs. GenAI).</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 03</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Model Development</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Iterative model training, fine-tuning, and feature engineering to maximize precision and recall metrics.</p>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="mb-10 ml-8 md:ml-0 md:mb-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 04</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Integration & Testing</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Wrapping models in secure REST/gRPC APIs and integrating them directly into your existing enterprise software.</p>
                    </div>
                </div>

                {{-- Step 5 --}}
                <div class="ml-8 md:ml-0 relative w-full group">
                    <div class="absolute -left-11 md:left-1/2 md:-translate-x-1/2 -top-1 w-8 h-8 rounded-full border-4 border-white dark:border-gray-800 bg-gray-300 dark:bg-gray-600 group-hover:bg-{{ $domainColor }}-500 z-10 group-hover:scale-125 transition-all duration-300"></div>
                    <div class="md:text-center md:pt-12">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider block mb-2">Phase 05</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Deployment & MLOps</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Production launch with continuous monitoring, data drift detection, and automated retraining pipelines.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
