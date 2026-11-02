<section class="py-16 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">Flexible Engagement Models</h2>
            <p class="text-gray-600 dark:text-gray-300">Choose the right partnership model to scale your AI initiatives while mitigating risk.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            {{-- Model 1: AI Pilot --}}
            <div class="p-6 rounded-2xl bg-white dark:bg-gray-800 border-2 border-{{ $domainColor }}-500 shadow-xl relative transform lg:-translate-y-4">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-{{ $domainColor }}-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide whitespace-nowrap">
                    Start Here
                </div>
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">AI Pilot / PoC</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">A 2–4 week feasibility sprint. We audit your data, build a baseline model, and prove ROI before you commit to full-scale engineering.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data Feasibility Audit</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Rapid Prototyping</li>
                </ul>
            </div>

            {{-- Model 2 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Staff Augmentation</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Embed our senior ML engineers and data scientists directly into your existing in-house teams to fill critical skill gaps.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Pre-vetted senior talent</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Direct integration</li>
                </ul>
            </div>

            {{-- Model 3 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Dedicated Teams</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Autonomous, cross-functional squads (Data Scientists, MLOps, PMs) managing specific AI product modules.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Full cross-functional squad</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Managed Agile delivery</li>
                </ul>
            </div>

            {{-- Model 4 --}}
            <div class="p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 hover:border-{{ $domainColor }}-500 transition-colors">
                <div class="w-12 h-12 rounded-lg bg-{{ $domainColor }}-100 dark:bg-{{ $domainColor }}-900/30 flex items-center justify-center mb-6 text-{{ $domainColor }}-600 dark:text-{{ $domainColor }}-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Managed Projects</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">End-to-end full lifecycle outsourcing. You provide the vision, we handle the architecture, execution, and SLA maintenance.</p>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-2">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Fixed scope & timeline options</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-{{ $domainColor }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Complete risk mitigation</li>
                </ul>
            </div>
        </div>
    </div>
</section>
