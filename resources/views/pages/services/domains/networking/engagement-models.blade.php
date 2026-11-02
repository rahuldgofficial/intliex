<section class="py-16 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">Engagement Models</h2>
            <p class="text-gray-600 dark:text-gray-300">From initial risk diagnostics to 24/7 proactive network monitoring.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            {{-- Model 1 --}}
            <div class="p-6 rounded-2xl bg-white dark:bg-gray-800 border-2 border-{{ $domainColor }}-500 shadow-xl relative transform lg:-translate-y-4">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-{{ $domainColor }}-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide whitespace-nowrap">
                    Start Here
                </div>
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Assessments & Diagnostics</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">A low-friction, high-value audit. We evaluate your current state to identify security vulnerabilities, configuration drift, and hardware EOL risks.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Gap Analysis Reports</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Security Posture Audits</li>
                </ul>
            </div>

            {{-- Model 2 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Advisory & Architecture</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Strategic blueprinting. We map out a vendor-agnostic target state architecture that aligns with your multi-cloud and security objectives.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Multi-Vendor Blueprints</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Technology Roadmapping</li>
                </ul>
            </div>

            {{-- Model 3 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Implementation & Migration</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Turnkey execution. Our engineers handle physical staging, software provisioning, and zero-downtime migrations.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Factory Pre-configuration</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Phased Cut-overs</li>
                </ul>
            </div>

            {{-- Model 4 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Managed Services (NOC)</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Continuous operational excellence. We provide 24/7/365 monitoring, incident remediation, and continuous lifecycle tuning.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 24/7 NOC Support</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Co-managed or Fully Managed</li>
                </ul>
            </div>
        </div>
    </div>
</section>
