<section class="py-20 bg-gray-900 text-white border-t border-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Certified Vendor Integrations</h2>
            <p class="text-lg text-gray-400">As an independent systems integrator, we partner with the world's leading OEMs to design the right architecture for your exact production requirements.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- PLCs & Controllers --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h3 class="text-xl font-bold">PLCs & Logic</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Siemens</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Allen-Bradley</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Schneider Electric</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Mitsubishi</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Delta</span>
                </div>
            </div>

            {{-- HMI & SCADA --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <h3 class="text-xl font-bold">HMI, SCADA & Design</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Ignition (Inductive)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">AVEVA / Wonderware</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">FactoryTalk View</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">WinCC</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">AutoCAD Electrical</span>
                </div>
            </div>

            {{-- Motion & Drives --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="text-xl font-bold">Motion & Drives</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Yaskawa VFDs</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Danfoss</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">ABB Drives</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Rockwell PowerFlex</span>
                </div>
            </div>

            {{-- Industrial Networking --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    <h3 class="text-xl font-bold">Industrial Networking</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">EtherNet/IP</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">PROFINET</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Modbus TCP</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Stratix / Scalance</span>
                </div>
            </div>
        </div>
    </div>
</section>
