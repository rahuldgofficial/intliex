{{-- Section 1: Network Infrastructure & Design --}}
<section id="infrastructure" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Network Infrastructure & Design</h2>
            <p class="text-lg text-gray-400">Architecting resilient, high-throughput fabrics tailored for massive enterprise scale, combining traditional routing with next-gen SD-WAN.</p>
        </div>

        <div x-data="{ expandedInfra: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">LAN Design & Implementation</h3>
                    <p class="text-gray-400 text-sm">Design and deployment of high-availability Local Area Networks with optimized VLAN segmentation and redundancy.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">WAN Architecture</h3>
                    <p class="text-gray-400 text-sm">Global Wide Area Network architecture connecting geographically distributed branch offices back to core data centers.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">SD-WAN Deployment</h3>
                    <p class="text-gray-400 text-sm">Transition legacy WANs to Software-Defined WAN (Cisco Meraki, Viptela) for dynamic path selection and cost reduction.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Wireless Network Design</h3>
                    <p class="text-gray-400 text-sm">Enterprise Wi-Fi 6/6E heatmapping, RF spectrum analysis, and seamless campus roaming architectures.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Structured Cabling</h3>
                    <p class="text-gray-400 text-sm">Physical layer design including Cat6a/Fiber optic runs, MDF/IDF layout, and rack elevation planning.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Routing & Switching</h3>
                    <p class="text-gray-400 text-sm">Layer 2/Layer 3 configuration (OSPF, EIGRP, STP) optimizing traffic flow and eliminating broadcast storms.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">MPLS Setup & Management</h3>
                    <p class="text-gray-400 text-sm">Provisioning and ongoing management of highly reliable MPLS circuits for delay-sensitive applications.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Data Center Networking</h3>
                    <p class="text-gray-400 text-sm">Spine-leaf architectures and top-of-rack switching for high-density, low-latency data center environments.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Campus Network Architecture</h3>
                    <p class="text-gray-400 text-sm">Large-scale network design covering multi-building topologies, distribution layers, and core switching rings.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">QoS Implementation</h3>
                    <p class="text-gray-400 text-sm">Traffic shaping and Quality of Service policies to prioritize VoIP, video conferencing, and mission-critical apps.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Network Automation & IaC</h3>
                    <p class="text-gray-400 text-sm">Infrastructure as Code using Ansible and Terraform to automate switch provisioning and reduce human error.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">BGP & Edge Routing</h3>
                    <p class="text-gray-400 text-sm">Complex exterior gateway protocol (BGP) tuning for enterprises operating multiple redundant ISP connections.</p>
                </div>

                {{-- Expanded Cards --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInfra" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">IPsec VPN & Secure Access</h3>
                    <p class="text-gray-400 text-sm">Site-to-site IPsec tunnels and client VPN solutions establishing secure communication over public internet links.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInfra" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">IPv6 Migration Strategy</h3>
                    <p class="text-gray-400 text-sm">Strategic planning and dual-stack implementation to future-proof networks running out of legacy IPv4 space.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInfra" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Network Infrastructure Mgmt</h3>
                    <p class="text-gray-400 text-sm">Comprehensive lifecycle tracking, firmware management, and configuration backups for all network devices.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedInfra = !expandedInfra" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedInfra ? 'Show Less' : 'Show All 15 Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedInfra}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Section 2: Managed Network Services --}}
<section id="managed-services" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Managed Network Services</h2>
            <p class="text-lg text-gray-400">Offload day-to-day network operations to our 24/7 NOC, ensuring maximum uptime, performance, and proactive issue resolution.</p>
        </div>

        <div x-data="{ expandedManaged: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">24/7 NOC Monitoring</h3>
                    <p class="text-gray-400 text-sm">Round-the-clock proactive monitoring from our Network Operations Center to detect and resolve issues before they cause downtime.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Managed Wi-Fi Services</h3>
                    <p class="text-gray-400 text-sm">End-to-end administration of your enterprise wireless network, optimizing access points for density and coverage.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Performance Monitoring</h3>
                    <p class="text-gray-400 text-sm">Deep NPM (Network Performance Monitoring) to track latency, jitter, and packet loss across critical applications.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Managed Connectivity</h3>
                    <p class="text-gray-400 text-sm">Provisioning, management, and troubleshooting of your primary and secondary ISP circuits and DIA links.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Proactive Patching</h3>
                    <p class="text-gray-400 text-sm">Scheduled firmware updates, vulnerability patching, and OS upgrades for all routers, switches, and firewalls.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Remote Troubleshooting</h3>
                    <p class="text-gray-400 text-sm">Rapid-response remote engineering support to diagnose and resolve routing loops, latency spikes, and drops.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Hardware Lifecycle Mgmt</h3>
                    <p class="text-gray-400 text-sm">Asset tracking, warranty management, and seamless RMA processing to replace faulty hardware with zero friction.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Managed Switch & Router</h3>
                    <p class="text-gray-400 text-sm">Turnkey administration of your core, distribution, and access layer switches by certified network engineers.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Log Analytics (Syslog)</h3>
                    <p class="text-gray-400 text-sm">Centralized aggregation and analysis of network telemetry and syslog data to uncover hidden anomalies.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">ISP Vendor Management</h3>
                    <p class="text-gray-400 text-sm">We handle all carrier relationships, escalating circuit outages directly with ISPs so your team doesn't have to wait on hold.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Configuration Backups</h3>
                    <p class="text-gray-400 text-sm">Automated daily backups of all network device configurations, ensuring instant rollbacks during bad updates.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Predictive Capacity Alerting</h3>
                    <p class="text-gray-400 text-sm">AIOps-driven alerts that notify our NOC when bandwidth utilization trends toward exhaustion before it impacts users.</p>
                </div>

                {{-- Expanded Cards --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedManaged" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Guest Wi-Fi & Captive Portals</h3>
                    <p class="text-gray-400 text-sm">Secure, segmented wireless networks for visitors, featuring branded splash pages and bandwidth throttling.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedManaged" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-red-900/30 text-red-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-red-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Managed Cellular Failover</h3>
                    <p class="text-gray-400 text-sm">Implementation and monitoring of 4G/5G LTE backup connections ensuring business continuity during primary circuit cuts.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedManaged" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Network Automation (MaaS)</h3>
                    <p class="text-gray-400 text-sm">Continuous optimization scripts and automated responses to routine network events managed entirely by our team.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedManaged = !expandedManaged" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedManaged ? 'Show Less' : 'Show All 15 Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedManaged}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Section 3: Network Security --}}
<section id="security" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Enterprise Network Security</h2>
            <p class="text-lg text-gray-400">Lock down your perimeter, secure your edge, and adopt a Zero Trust architecture to defend against sophisticated cyber threats.</p>
        </div>

        <div x-data="{ expandedSec: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-red-900/30 text-red-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-red-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Managed Firewalls</h3>
                    <p class="text-gray-400 text-sm">Deployment and active management of Next-Generation Firewalls (NGFW) with deep packet inspection and application control.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Zero Trust (ZTNA)</h3>
                    <p class="text-gray-400 text-sm">Identity-based micro-boundaries that grant access strictly on a least-privilege basis, regardless of user location.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">SASE Implementation</h3>
                    <p class="text-gray-400 text-sm">Converging SD-WAN with comprehensive security (SWG, CASB, ZTNA) into a unified, cloud-native architecture.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">IDS/IPS Management</h3>
                    <p class="text-gray-400 text-sm">Continuous traffic analysis to detect and actively block malware, exploits, and lateral movement attempts.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Network Access Control</h3>
                    <p class="text-gray-400 text-sm">Automated device profiling (Cisco ISE, Aruba ClearPass) ensuring only compliant endpoints join the network.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">DDoS Protection</h3>
                    <p class="text-gray-400 text-sm">Always-on traffic scrubbing and mitigation to ensure availability during massive volumetric attacks.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Web App Firewall (WAF)</h3>
                    <p class="text-gray-400 text-sm">Protect public-facing applications from SQL injection, XSS, and automated bot scraping.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Secure Web Gateway</h3>
                    <p class="text-gray-400 text-sm">Enforce corporate acceptable use policies and block malicious URLs before traffic reaches the endpoint.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Network Micro-segmentation</h3>
                    <p class="text-gray-400 text-sm">Isolate workloads in the data center to prevent lateral threat movement using strict east-west security policies.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Vulnerability Scanning</h3>
                    <p class="text-gray-400 text-sm">Continuous automated scanning of your external IP ranges to identify misconfigurations before hackers do.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">CASB Integration</h3>
                    <p class="text-gray-400 text-sm">Cloud Access Security Broker implementation to enforce security policies between your users and SaaS applications.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">SIEM & Threat Hunting</h3>
                    <p class="text-gray-400 text-sm">Forwarding network security logs to centralized SIEM platforms for advanced correlation and proactive threat hunting.</p>
                </div>

                {{-- Expanded Cards --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedSec" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Endpoint Security (EDR)</h3>
                    <p class="text-gray-400 text-sm">Integrating network intelligence directly with Endpoint Detection and Response tools for automated quarantine.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedSec" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Email Security & Phishing</h3>
                    <p class="text-gray-400 text-sm">Gateway-level filtering to block malicious attachments, credential phishing links, and spoofed domains.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedSec" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Penetration Testing</h3>
                    <p class="text-gray-400 text-sm">Scheduled red-team engagements designed to exploit weaknesses in your architecture before they go live.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedSec = !expandedSec" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedSec ? 'Show Less' : 'Show All 15 Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedSec}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Section 4: Cloud & Multi-Cloud Networking --}}
<section id="cloud-networking" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Cloud & Multi-Cloud Networking</h2>
            <p class="text-lg text-gray-400">Seamlessly connect your on-premises infrastructure to AWS, Azure, and Google Cloud with enterprise-grade transit and peering.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Multi-Cloud Architecture</h3>
                <p class="text-gray-400 text-sm">Design unified network fabrics that securely route traffic across disparate cloud providers (AWS, Azure, GCP).</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Hybrid Cloud Connectivity</h3>
                <p class="text-gray-400 text-sm">Provisioning of dedicated, private connections like AWS Direct Connect, Azure ExpressRoute, and GCP Cloud Interconnect.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">VPC Design & Peering</h3>
                <p class="text-gray-400 text-sm">Architecting Virtual Private Clouds with correct subnet CIDR blocks, routing tables, and complex VPC peering links.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Cloud Load Balancing</h3>
                <p class="text-gray-400 text-sm">Global and regional load balancing setups to distribute traffic across multi-region instances for high availability.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Enterprise DNS Services</h3>
                <p class="text-gray-400 text-sm">Managed DNS (Route 53, Cloudflare) with geolocation routing, failover policies, and health checks.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Cloud Transit Gateways</h3>
                <p class="text-gray-400 text-sm">Centralized hub-and-spoke network topologies replacing complex point-to-point VPC peering meshes.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Site-to-Site Cloud VPN</h3>
                <p class="text-gray-400 text-sm">Encrypted IPsec tunnels ensuring secure, reliable connectivity from remote branch offices directly into cloud resources.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Container Networking</h3>
                <p class="text-gray-400 text-sm">Advanced Kubernetes network policies (CNI), Service Meshes (Istio), and ingress controller configurations.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">SD-WAN Cloud OnRamp</h3>
                <p class="text-gray-400 text-sm">Integrating on-prem SD-WAN fabrics directly with SaaS applications (O365, Salesforce) for optimal routing.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Cloud Firewalls & SG</h3>
                <p class="text-gray-400 text-sm">Strict enforcement of AWS Security Groups, Network ACLs, and Azure NSGs to minimize the blast radius.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Cloud Flow Logs & NPM</h3>
                <p class="text-gray-400 text-sm">Monitoring VPC Flow Logs and metrics to identify cloud network bottlenecks and latency issues.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">CDN & Edge Caching</h3>
                <p class="text-gray-400 text-sm">Content Delivery Network integration to push assets closer to users, reducing origin load and transit costs.</p>
            </div>
        </div>
    </div>
</section>

{{-- Section 5: Network Consulting & Optimization --}}
<section id="consulting" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Network Consulting & Optimization</h2>
            <p class="text-lg text-gray-400">Strategic guidance for network modernization, M&A integration, and compliance audits to align IT with business goals.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Network Health Audits</h3>
                <p class="text-gray-400 text-sm">Deep-dive technical audits of existing architectures to uncover single points of failure and security gaps.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Capacity Planning</h3>
                <p class="text-gray-400 text-sm">Data-driven scalability consulting to ensure your backbone can handle projected traffic growth and new application rollouts.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Legacy Modernization</h3>
                <p class="text-gray-400 text-sm">Strategic roadmaps to retire end-of-life hardware (EOL/EOSL) and transition to modern SD-WAN and SASE platforms.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Compliance Network Design</h3>
                <p class="text-gray-400 text-sm">Architecting networks that inherently satisfy stringent PCI-DSS, HIPAA, or SOC2 regulatory frameworks.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Disaster Recovery (BC/DR)</h3>
                <p class="text-gray-400 text-sm">Developing network resilience and failover plans to guarantee business continuity during catastrophic site failures.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Data Center Migrations</h3>
                <p class="text-gray-400 text-sm">Zero-downtime routing strategies to transparently migrate workloads from on-prem to colocation or cloud.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.906 14.142 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Wireless Site Surveys</h3>
                <p class="text-gray-400 text-sm">Predictive and active on-site RF surveys using Ekahau tools to guarantee seamless campus Wi-Fi roaming.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Bandwidth Optimization</h3>
                <p class="text-gray-400 text-sm">Traffic shaping, QoS tuning, and WAN optimization to ensure critical application performance over constrained links.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">M&A Network Integration</h3>
                <p class="text-gray-400 text-sm">Resolving IP overlap, routing conflicts, and disparate security policies during corporate mergers and acquisitions.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">IPv4 to IPv6 Planning</h3>
                <p class="text-gray-400 text-sm">Strategic transition mechanisms (NAT64, dual-stack) enabling enterprises to gracefully adopt IPv6.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Telecom Expense Audits</h3>
                <p class="text-gray-400 text-sm">Analyzing carrier billing, identifying unused circuits, and renegotiating ISP contracts to reduce OPEX.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Cloud Readiness Assessment</h3>
                <p class="text-gray-400 text-sm">Evaluating on-prem network latency and throughput capabilities prior to migrating heavy workloads to the cloud.</p>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: Physical & On-Premises Infrastructure --}}
<section id="physical-infrastructure" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">On-Premises & Physical Infrastructure</h2>
            <p class="text-lg text-gray-400">End-to-end low voltage solutions covering structured cabling, server room build-outs, IP surveillance, and unified communications.</p>
        </div>

        <div x-data="{ expandedPhysical: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                {{-- CABLING --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Cat6/Cat6A Data Cabling</h3>
                    <p class="text-gray-400 text-sm">Professional copper cabling runs ensuring maximum gigabit and 10-gigabit throughput for office endpoints.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Fiber Optic Implementation</h3>
                    <p class="text-gray-400 text-sm">Single-mode and multi-mode fiber fusion splicing for high-speed riser and campus backbone interconnects.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">MDF/IDF Patch Panels</h3>
                    <p class="text-gray-400 text-sm">Immaculate patch panel termination, labeling, and cable management ensuring organized telecom closets.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Cable Testing & Certification</h3>
                    <p class="text-gray-400 text-sm">Fluke network testing and certification to guarantee all cable drops meet stringent TIA/EIA performance standards.</p>
                </div>

                {{-- IP TELEPHONY --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">IP PBX & VoIP Systems</h3>
                    <p class="text-gray-400 text-sm">Complete deployment of enterprise IP telephony solutions ensuring crystal-clear voice routing and robust PBX features.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Unified Communications</h3>
                    <p class="text-gray-400 text-sm">Integration of voice, video, instant messaging, and presence across desktop and mobile softphone clients.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Conference Room AV</h3>
                    <p class="text-gray-400 text-sm">Design and installation of immersive telepresence rooms, smart displays, and multi-directional microphone arrays.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Legacy Telecom Migration</h3>
                    <p class="text-gray-400 text-sm">Seamless porting of DIDs and migration strategies transitioning legacy analog/PRI systems to modern SIP trunks.</p>
                </div>

                {{-- SURVEILLANCE & SECURITY --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-red-900/30 text-red-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-red-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">IP CCTV & Surveillance</h3>
                    <p class="text-gray-400 text-sm">Strategic deployment of indoor, outdoor, and specialized IP cameras providing 360-degree facility coverage.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">NVR & Video Management</h3>
                    <p class="text-gray-400 text-sm">Installation of high-capacity Network Video Recorders and enterprise VMS software for centralized footage retrieval.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Video Monitoring Rooms</h3>
                    <p class="text-gray-400 text-sm">Design and construction of multi-screen operations centers (SOC) for live, continuous facility monitoring.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Access Control Systems</h3>
                    <p class="text-gray-400 text-sm">Implementation of badge readers, biometric scanners, and electronic strikes integrated directly with the network.</p>
                </div>

                {{-- Expanded Cards: SERVER ROOM --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedPhysical" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-gray-700 text-gray-300 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Server Room Design & Build</h3>
                    <p class="text-gray-400 text-sm">Turnkey construction of dedicated IT server rooms tailored for optimum space utilization and thermal efficiency.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedPhysical" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-gray-700 text-gray-300 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Rack & Cabinet Installation</h3>
                    <p class="text-gray-400 text-sm">Professional mounting and grounding of 2-post and 4-post server racks, enclosures, and high-density cabinets.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedPhysical" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-gray-700 text-gray-300 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Power (UPS) & Cooling</h3>
                    <p class="text-gray-400 text-sm">Specification and integration of Uninterruptible Power Supplies (UPS) and precision CRAC cooling systems.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedPhysical" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-gray-700 text-gray-300 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Raised Flooring & Trays</h3>
                    <p class="text-gray-400 text-sm">Design of overhead ladder racks, fiber troughs, and raised access flooring for clean, scalable cable routing.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedPhysical = !expandedPhysical" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedPhysical ? 'Show Less' : 'Show Server Room Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedPhysical}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
