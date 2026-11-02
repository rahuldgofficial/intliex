<section class="py-20 bg-brand-900 text-white border-t border-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Technologies We Master</h2>
            <p class="text-lg text-brand-200">Our engineering teams are proficient in modern, scalable, and secure technologies tailored for enterprise deployment across every domain.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Frontend --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    <h3 class="text-xl font-bold">Frontend & UI</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">React.js</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Vue.js</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Next.js</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">TypeScript</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Tailwind CSS</span>
                </div>
            </div>

            {{-- Backend --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                    <h3 class="text-xl font-bold">Backend & Core</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Laravel (PHP)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Node.js</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Python (Django)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Go</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">.NET Core</span>
                </div>
            </div>

            {{-- Database --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    <h3 class="text-xl font-bold">Data & Storage</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">PostgreSQL</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">MySQL</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">MongoDB</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Redis</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Elasticsearch</span>
                </div>
            </div>

            {{-- Infrastructure --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    <h3 class="text-xl font-bold">Cloud & DevOps</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">AWS</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Microsoft Azure</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Docker</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Kubernetes</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">CI/CD Pipelines</span>
                </div>
            </div>

            {{-- Mobile Development --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    <h3 class="text-xl font-bold">Mobile Development</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Flutter</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">React Native</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Swift (iOS)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Kotlin (Android)</span>
                </div>
            </div>

            {{-- E-Commerce Platforms --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <h3 class="text-xl font-bold">E-Commerce</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Shopify</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">WooCommerce</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Magento</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Stripe</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">SSLCommerz</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">bKash</span>
                </div>
            </div>

            {{-- Industry-Specific & CMS --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <h3 class="text-xl font-bold">CMS & Platforms</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">WordPress</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Custom CMS</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Strapi</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Odoo</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">SAP Integration</span>
                </div>
            </div>

            {{-- Specialized / Integration --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <h3 class="text-xl font-bold">API & Integrations</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">REST APIs</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">GraphQL</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Webhooks</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">MQTT (IoT)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">WebSockets</span>
                </div>
            </div>
        </div>
    </div>
</section>
