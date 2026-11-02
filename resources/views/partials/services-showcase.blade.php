<section class="py-20 lg:py-28 bg-gray-50 dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800" id="services-showcase">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12" data-animate>
            <span class="section-label mb-3 inline-block">OUR EXPERTISE</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4">Enterprise Services Showcase</h2>
            <p class="section-subtitle mx-auto">Explore targeted capabilities designed to solve complex business challenges across every domain of modern technology.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 max-w-6xl mx-auto" id="showcase-container">
            {{-- Tabs / Sidebar --}}
            <div class="w-full lg:w-1/4 flex flex-col space-y-2">
                @foreach($domains as $index => $domain)
                <button class="showcase-tab text-left px-6 py-4 rounded-xl font-bold transition-all duration-300 {{ $index === 0 ? 'bg-brand-50 dark:bg-brand-900/40 text-brand-600 dark:text-brand-300 border border-brand-200 dark:border-brand-700' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 border border-transparent' }}" data-target="showcase-{{ $domain->slug }}">
                    <div class="flex items-center justify-between">
                        <span>{{ $domain->slug === 'software' ? 'ERP & Softwares' : $domain->name }}</span>
                        <svg class="w-5 h-5 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }} transition-opacity duration-300 transform translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </button>
                @endforeach
            </div>
            
            {{-- Content Panels --}}
            <div class="w-full lg:w-3/4">
                @foreach($domains as $index => $domain)
                <div id="showcase-{{ $domain->slug }}" class="showcase-panel w-full {{ $index === 0 ? 'block opacity-100 animate-fade-in-up' : 'hidden opacity-0' }}">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @if($domain->slug === 'software')
                            {{-- Card 1: Custom ERP & Software --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Custom ERP & Software</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">Centralize operations and eliminate data silos with enterprise-grade platforms tailored to your business needs. Core modules include:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">HRM</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">CRM</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Procurement</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">POS</span>
                                </div>
                                <a href="{{ url('/services/software#erp') }}" class="inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>

                            {{-- Card 2: E-Commerce --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">E-Commerce</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Build highly scalable storefronts with seamless checkout flows, secure payment gateways, and real-time inventory sync.</p>
                                <a href="{{ url('/services/software#ecommerce') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>

                            {{-- Card 3: Mobile App --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Mobile App</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Deliver exceptional native and cross-platform mobile experiences for iOS and Android that engage users and drive conversions.</p>
                                <a href="{{ url('/services/software#mobile-app') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>

                            {{-- Card 4: API & Cloud Integrations --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">API & Cloud Integrations</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Connect disparate systems and securely exchange data across your enterprise with robust APIs and microservices.</p>
                                <a href="{{ url('/services/software#api-integrations') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        @elseif($domain->slug === 'ai')
                            {{-- AI Card 1 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Generative AI & Agentic Workflows</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Automate complex decision-making and content generation with cutting-edge language models. Technologies:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">LLMs</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">LangChain</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">RAG</span>
                                </div>
                                <a href="{{ url('/services/ai#generative-ai') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- AI Card 2 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Custom Machine Learning</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Deploy predictive models and neural networks built specifically for your proprietary datasets. Focus areas:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Predictive</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Neural Nets</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Classification</span>
                                </div>
                                <a href="{{ url('/services/ai#custom-ml') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- AI Card 3 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Computer Vision & NLP</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Extract insights from images, video, and unstructured text with deep learning algorithms. Capabilities:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">OCR</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Sentiment</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Object Detection</span>
                                </div>
                                <a href="{{ url('/services/ai#vision-nlp') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- AI Card 4 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">AI Strategy & Discovery</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Map out high-impact AI use cases, assess data readiness, and build a roadmap. Key outcomes:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Readiness</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">ROI Modeling</span>
                                </div>
                                <a href="{{ url('/services/ai#strategy') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>

                        @elseif($domain->slug === 'networking')
                            {{-- Networking Card 1 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Enterprise Network Architecture</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Design scalable, resilient LAN/WAN topologies that ensure seamless connectivity and uptime. Key features:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">LAN/WAN</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">BGP</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">OSPF</span>
                                </div>
                                <a href="{{ url('/services/networking#architecture') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Networking Card 2 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">SD-WAN & SASE Deployments</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Modernize branch connectivity with software-defined routing and unified cloud security frameworks. Technologies:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Zero Trust</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Meraki</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Fortinet</span>
                                </div>
                                <a href="{{ url('/services/networking#sdwan') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Networking Card 3 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Wireless & Campus Networks</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Deliver high-density, secure Wi-Fi coverage across corporate campuses and large facilities. Includes:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Wi-Fi 6E</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Site Surveys</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">High-Density</span>
                                </div>
                                <a href="{{ url('/services/networking#wireless') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Networking Card 4 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Defensive Network Security</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Protect perimeter and internal traffic from advanced threats using enterprise-grade defense mechanisms. Core tools:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">NGFW</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">IPS/IDS</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Micro-segmentation</span>
                                </div>
                                <a href="{{ url('/services/networking#security') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>

                        @elseif($domain->slug === 'automation')
                            {{-- Automation Card 1 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">PLC Integration Services</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Program and deploy Programmable Logic Controllers to orchestrate automated assembly and manufacturing. Supported:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Allen-Bradley</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Siemens</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Ladder Logic</span>
                                </div>
                                <a href="{{ url('/services/automation#plc') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Automation Card 2 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">SCADA & MES Architecture</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Visualize real-time operations, track production data, and bridge the gap between IT and OT. Components:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Real-time HMI</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Ignition</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Data Logging</span>
                                </div>
                                <a href="{{ url('/services/automation#scada') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Automation Card 3 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Industrial Motor Inverter Services</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Optimize energy consumption and precision movement with Variable Frequency Drives and servo systems. Elements:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">VFDs</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Servo Drives</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Motion Control</span>
                                </div>
                                <a href="{{ url('/services/automation#motors') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Automation Card 4 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Industrial Panelboard Installation</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Design, assemble, and wire custom industrial control panels adhering strictly to global safety standards. Covered:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">MCCs</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Switchgear</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">UL 508A</span>
                                </div>
                                <a href="{{ url('/services/automation#panelboard') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>

                        @elseif($domain->slug === 'cloud')
                            {{-- Cloud Card 1 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Migration & Modernization</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Transition legacy workloads to public or hybrid clouds with minimal downtime and zero data loss. Approaches:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Re-platforming</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Lift & Shift</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Serverless</span>
                                </div>
                                <a href="{{ url('/services/cloud#migration') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Cloud Card 2 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Cloud Native & DevOps</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Accelerate software delivery with automated CI/CD pipelines and containerized microservices. Core stacks:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Kubernetes</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">CI/CD</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Terraform</span>
                                </div>
                                <a href="{{ url('/services/cloud#devops') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Cloud Card 3 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">FinOps & Cost Optimization</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Eliminate cloud waste and restructure your architecture for maximum financial efficiency. Strategies:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Rightsizing</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Reserved Instances</span>
                                </div>
                                <a href="{{ url('/services/cloud#finops') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                            {{-- Cloud Card 4 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 hover:border-brand-300 dark:hover:border-brand-500 transition-colors shadow-sm group flex flex-col">
                                <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600 flex items-center justify-center mb-4 text-brand-500 dark:text-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Managed Cloud Services (MSP)</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 flex-grow">Offload infrastructure management with 24/7 proactive monitoring and incident response. Operations:</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">24/7 NOC</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Patching</span>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs font-semibold rounded-md text-gray-700 dark:text-gray-300">Disaster Recovery</span>
                                </div>
                                <a href="{{ url('/services/cloud#msp') }}" class="mt-auto inline-flex items-center text-sm font-semibold text-brand-600 dark:text-brand-400 group-hover:text-brand-800 dark:group-hover:text-brand-300 transition-colors">
                                    Learn More <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- View All Buttons Centered --}}
        <div class="mt-12 flex justify-center w-full">
            @foreach($domains as $index => $domain)
                <a href="{{ url('/services/' . $domain->slug) }}" class="showcase-btn {{ $index === 0 ? 'inline-flex' : 'hidden' }} items-center px-6 py-3 border-2 border-brand-500 text-brand-600 dark:text-brand-400 rounded-lg hover:bg-brand-500 hover:text-white transition-colors font-semibold" data-btn-target="showcase-{{ $domain->slug }}">
                    View All {{ $domain->name }}
                </a>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.showcase-tab');
        const panels = document.querySelectorAll('.showcase-panel');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetId = tab.getAttribute('data-target');
                
                // Update tabs
                tabs.forEach(t => {
                    t.classList.remove('bg-brand-50', 'dark:bg-brand-900/20', 'text-brand-600', 'dark:text-brand-400', 'border-brand-200', 'dark:border-brand-700');
                    t.classList.add('text-gray-600', 'dark:text-gray-400', 'border-transparent');
                    t.querySelector('svg').classList.replace('opacity-100', 'opacity-0');
                });
                tab.classList.add('bg-brand-50', 'dark:bg-brand-900/20', 'text-brand-600', 'dark:text-brand-400', 'border-brand-200', 'dark:border-brand-700');
                tab.classList.remove('text-gray-600', 'dark:text-gray-400', 'border-transparent');
                tab.querySelector('svg').classList.replace('opacity-0', 'opacity-100');
                
                // Update panels
                panels.forEach(panel => {
                    if (panel.id === targetId) {
                        panel.classList.remove('hidden', 'opacity-0');
                        panel.classList.add('block', 'opacity-100', 'animate-fade-in-up');
                    } else {
                        panel.classList.add('hidden', 'opacity-0');
                        panel.classList.remove('block', 'opacity-100', 'animate-fade-in-up');
                    }
                });

                // Update buttons
                document.querySelectorAll('.showcase-btn').forEach(btn => {
                    if (btn.getAttribute('data-btn-target') === targetId) {
                        btn.classList.remove('hidden');
                        btn.classList.add('inline-flex');
                    } else {
                        btn.classList.add('hidden');
                        btn.classList.remove('inline-flex');
                    }
                });
            });
        });
    });
</script>
@endpush
