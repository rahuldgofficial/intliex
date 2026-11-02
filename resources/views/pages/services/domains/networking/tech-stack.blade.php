<section class="py-20 bg-brand-900 text-white border-t border-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Strategic Vendor Partnerships</h2>
            <p class="text-lg text-gray-400">We maintain top-tier certifications with the world's leading networking and security OEMs, ensuring you get objective, validated architectures.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Enterprise Routing & Switching --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <h3 class="text-xl font-bold">Routing & Switching</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Cisco Catalyst & Nexus</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Arista EOS</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Juniper Networks</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">MikroTik</span>
                </div>
            </div>

            {{-- Security & SASE --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <h3 class="text-xl font-bold">Security & SASE</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Palo Alto Networks</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Fortinet</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Cisco Umbrella</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Zscaler</span>
                </div>
            </div>

            {{-- SD-WAN & Edge --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="text-xl font-bold">SD-WAN & Edge</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Cisco Meraki</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Cisco SD-WAN (Viptela)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">VMware SD-WAN</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Silver Peak</span>
                </div>
            </div>

            {{-- Wireless & Mobility --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                    <h3 class="text-xl font-bold">Wireless & Mobility</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">HPE Aruba</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Juniper Mist AI</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Cisco Wireless</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Private 5G (CBRS)</span>
                </div>
            </div>
            {{-- Physical Infrastructure --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <h3 class="text-xl font-bold">Physical Infra</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Panduit</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">CommScope</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Belden</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">APC / Schneider</span>
                </div>
            </div>

            {{-- Surveillance & Voice --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    <h3 class="text-xl font-bold">Surveillance & Voice</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Axis</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Hikvision / Dahua</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Milestone (VMS)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">3CX / Cisco Webex</span>
                </div>
            </div>
        </div>
    </div>
</section>

