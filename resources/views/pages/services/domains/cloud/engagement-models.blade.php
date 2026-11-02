<section class="py-16 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">Cloud Delivery Models</h2>
            <p class="text-gray-600 dark:text-gray-300">Flexible engagement structures tailored to your organization's cloud maturity and resourcing needs.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            {{-- Model 1 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Assessment Sprints</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Rapid, fixed-scope engagements to discover application dependencies, map target-state architecture, and calculate precise TCO/ROI models.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> TCO & ROI Modeling</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Cloud Readiness Index</li>
                </ul>
            </div>

            {{-- Model 2 --}}
            <div class="p-6 rounded-2xl bg-white dark:bg-gray-800 border-2 border-{{ $domainColor }}-500 shadow-xl relative transform lg:-translate-y-4">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-{{ $domainColor }}-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide whitespace-nowrap">
                    Core Offering
                </div>
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Turnkey Migrations</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Deliverable-based, wave-structured migration projects backed by strict SLAs and zero-downtime cutover guarantees.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Fixed Scope & Timeline</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Zero-Downtime Guarantee</li>
                </ul>
            </div>

            {{-- Model 3 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Elastic Co-Engineering</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Dedicated, multi-disciplinary pods of cloud architects and DevOps engineers seamlessly embedded within your internal product teams.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Agile Team Augmentation</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Cross-functional Pods</li>
                </ul>
            </div>

            {{-- Model 4 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Managed Cloud (MSP)</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Hands-off operational excellence. We provide 24/7/365 infrastructure monitoring, automated security patching, and continuous FinOps tuning.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 24/7 Tier-3 Support</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> SLA-Backed Resolution</li>
                </ul>
            </div>
        </div>
    </div>
</section>
