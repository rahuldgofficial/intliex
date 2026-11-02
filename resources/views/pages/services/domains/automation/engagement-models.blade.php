<section class="py-16 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">Engineering Engagement Models</h2>
            <p class="text-gray-600 dark:text-gray-300">From built-to-print panel fabrication to full turnkey machine commissioning.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            {{-- Model 1 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Panel Fabrication</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Build-to-print or custom engineering. We construct robust, [X] compliant control panels in our dedicated fabrication facility.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> [X] Certified</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Rigorous QA Testing</li>
                </ul>
            </div>

            {{-- Model 2 --}}
            <div class="p-6 rounded-2xl bg-white dark:bg-gray-800 border-2 border-{{ $domainColor }}-500 shadow-xl relative transform lg:-translate-y-4">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-{{ $domainColor }}-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide whitespace-nowrap">
                    Most Popular
                </div>
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Targeted Retrofits</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Modernize obsolete PLCs and drives while preserving your existing mechanical investments to eliminate downtime risks.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Legacy PLC Migration</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Zero-Downtime Cutovers</li>
                </ul>
            </div>

            {{-- Model 3 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Turnkey Integration</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Single point of accountability. We handle electrical design, panel build, programming, and mechanical integration for new production lines.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> End-to-End Delivery</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Guaranteed Performance</li>
                </ul>
            </div>

            {{-- Model 4 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Field Commissioning</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">On-site execution. Our field engineers conduct loop checks, SAT protocols, and operator training to ensure flawless startup.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Site Acceptance Testing</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Production Ramp-up</li>
                </ul>
            </div>
        </div>
    </div>
</section>
