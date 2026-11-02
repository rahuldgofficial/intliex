<section id="generative-ai" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Generative AI & Agentic Systems</h2>
            <p class="text-lg text-gray-400">Transform how your enterprise creates, reasons, and operates with custom large language models and autonomous AI agents.</p>
        </div>

        <div x-data="{ expandedGenAI: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                {{-- Card 1 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Autonomous AI Agents</h3>
                    <p class="text-gray-400 text-sm">Self-directed software agents capable of planning, executing, and resolving multi-step business workflows without human intervention.</p>
                </div>

                {{-- Card 2 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4h.002m0 0v-.002"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Domain-Specific AI Copilots</h3>
                    <p class="text-gray-400 text-sm">Customized conversational assistants integrated directly into your internal tools to supercharge employee productivity.</p>
                </div>

                {{-- Card 3 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">RAG Systems</h3>
                    <p class="text-gray-400 text-sm">Retrieval-Augmented Generation to securely ground LLMs in your proprietary enterprise data, eliminating hallucinations.</p>
                </div>

                {{-- Card 4 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Multi-Agent Orchestration</h3>
                    <p class="text-gray-400 text-sm">Complex architectures where specialized AI agents communicate and collaborate to solve multifaceted enterprise problems.</p>
                </div>

                {{-- Card 5 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">LLM Workflow Automation</h3>
                    <p class="text-gray-400 text-sm">Replace brittle rules-based RPAs with cognitive automation capable of handling unstructured data and edge cases.</p>
                </div>

                {{-- Card 6 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Content Generation Systems</h3>
                    <p class="text-gray-400 text-sm">Automate the creation of reports, marketing copy, internal documentation, and personalized email outreach.</p>
                </div>

                {{-- Card 7 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">AI Chatbots & Virtual Assistants</h3>
                    <p class="text-gray-400 text-sm">Next-generation conversational interfaces for customer support, HR helpdesks, and IT ticketing.</p>
                </div>

                {{-- Card 8 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Voice AI Agents</h3>
                    <p class="text-gray-400 text-sm">Real-time conversational voice agents for outbound sales, inbound call routing, and hands-free logistics.</p>
                </div>

                {{-- Card 9 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Custom LLM Fine-Tuning</h3>
                    <p class="text-gray-400 text-sm">Adapt foundational open-source models (like Llama 3) to your specific industry nomenclature and tasks.</p>
                </div>

                {{-- Card 10 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Prompt Engineering & Guardrails</h3>
                    <p class="text-gray-400 text-sm">Systematic optimization of LLM inputs, alongside strict security guardrails to prevent data leakage and jailbreaks.</p>
                </div>

                {{-- Card 11 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Enterprise Knowledge Search</h3>
                    <p class="text-gray-400 text-sm">Semantic search engines that allow employees to query millions of internal documents using natural language.</p>
                </div>

                {{-- Card 12 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-red-900/30 text-red-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-red-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Automated Code Generation</h3>
                    <p class="text-gray-400 text-sm">Custom code-assistants tailored to your company's proprietary tech stack and internal coding standards.</p>
                </div>

                {{-- Expanded Cards --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedGenAI" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Synthetic Data Generation</h3>
                    <p class="text-gray-400 text-sm">Generate statistically accurate, anonymized datasets to train downstream ML models without compromising PII.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedGenAI" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">AI Legal & Contract Analysis</h3>
                    <p class="text-gray-400 text-sm">Automated extraction of key clauses, risk flags, and compliance anomalies across massive document sets.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedGenAI" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Multimodal Synthesis</h3>
                    <p class="text-gray-400 text-sm">Cross-modal generation systems spanning text, image, and video synthesis for marketing and product prototyping.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedGenAI = !expandedGenAI" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedGenAI ? 'Show Less' : 'Show All 15 Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedGenAI}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="machine-learning" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Machine Learning & Predictive Analytics</h2>
            <p class="text-lg text-gray-400">Discover hidden patterns, forecast trends, and automate complex decision-making with custom statistical models.</p>
        </div>

        <div x-data="{ expandedML: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Predictive Modeling</h3>
                    <p class="text-gray-400 text-sm">Develop custom machine learning models that anticipate outcomes and prescribe optimal business strategies.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-red-900/30 text-red-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-red-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Anomaly & Fraud Detection</h3>
                    <p class="text-gray-400 text-sm">Real-time identification of outlier events, fraudulent transactions, and network intrusions using unsupervised learning.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Risk Scoring Systems</h3>
                    <p class="text-gray-400 text-sm">Automated evaluation models for insurance underwriting, portfolio risk, and enterprise compliance assessments.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Demand & Sales Forecasting</h3>
                    <p class="text-gray-400 text-sm">Accurately predict product demand and revenue fluctuations to optimize inventory and staffing.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Customer Behavior Analytics</h3>
                    <p class="text-gray-400 text-sm">Cluster and segment users based on deep interaction patterns, driving hyper-personalized marketing.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Recommendation Engines</h3>
                    <p class="text-gray-400 text-sm">Collaborative filtering and deep learning systems to serve the right products or content to the right user.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Churn Prediction Models</h3>
                    <p class="text-gray-400 text-sm">Identify at-risk accounts before they cancel by recognizing subtle behavioral degradation signals.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Credit & Loan Scoring</h3>
                    <p class="text-gray-400 text-sm">Robust classification algorithms for fintechs and banks to instantly evaluate borrower reliability.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Time-Series Forecasting</h3>
                    <p class="text-gray-400 text-sm">Advanced temporal modeling techniques (ARIMA, LSTMs) to predict values over continuous time intervals.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Classification & Clustering</h3>
                    <p class="text-gray-400 text-sm">Categorize vast amounts of unstructured data into actionable, precisely delineated groups.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Dynamic Pricing Algorithms</h3>
                    <p class="text-gray-400 text-sm">Real-time price optimization models that adapt instantly to supply, demand, and competitor behavior.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Supply Chain Optimization</h3>
                    <p class="text-gray-400 text-sm">Minimize logistics costs and route inefficiencies using sophisticated mathematical modeling and constraint solvers.</p>
                </div>

                {{-- Expanded Cards --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedML" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Predictive Maintenance</h3>
                    <p class="text-gray-400 text-sm">Analyze sensor and IoT data to forecast equipment failures before they happen, avoiding costly downtime.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedML" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Customer Lifetime Value (CLV)</h3>
                    <p class="text-gray-400 text-sm">Predict long-term revenue generated per account to optimize your customer acquisition cost (CAC) spend.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedML" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Algorithmic Trading Models</h3>
                    <p class="text-gray-400 text-sm">High-frequency, automated trading systems powered by predictive quantitative modeling for financial institutions.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedML = !expandedML" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedML ? 'Show Less' : 'Show All 15 Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedML}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="computer-vision" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Computer Vision & NLP</h2>
            <p class="text-lg text-gray-400">Transform unstructured images, video, and text into structured, actionable enterprise data.</p>
        </div>

        <div x-data="{ expandedCV: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Always Visible Cards (First 12) --}}
                
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" id="nlp">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Object Detection</h3>
                    <p class="text-gray-400 text-sm">Real-time identification and localization of specific objects within complex video feeds and imagery.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Text Classification</h3>
                    <p class="text-gray-400 text-sm">Automatically route and categorize incoming emails, support tickets, and raw text feeds with high accuracy.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Visual Quality Control</h3>
                    <p class="text-gray-400 text-sm">Automate defect detection on manufacturing assembly lines using high-speed computer vision inspection.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">OCR & Document Scanning</h3>
                    <p class="text-gray-400 text-sm">Convert physical documents, handwritten forms, and PDFs into highly accurate, machine-readable text formats.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Geospatial Image Analysis</h3>
                    <p class="text-gray-400 text-sm">Extract actionable intelligence from satellite imagery, drone footage, and aerial topography maps.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Named Entity Extraction</h3>
                    <p class="text-gray-400 text-sm">Automatically pull critical entities (names, locations, pricing, dates) out of massive unstructured text corpuses.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Sentiment Analysis</h3>
                    <p class="text-gray-400 text-sm">Monitor brand perception across social media, reviews, and support logs by accurately analyzing emotional tone.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Intelligent Document Processing</h3>
                    <p class="text-gray-400 text-sm">Go beyond basic OCR with AI that understands layout, context, and relationships in complex forms and invoices.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Language Translation Systems</h3>
                    <p class="text-gray-400 text-sm">Enterprise-grade, context-aware machine translation capable of handling specialized industry vocabulary.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Facial Recognition Systems</h3>
                    <p class="text-gray-400 text-sm">High-accuracy biometric authentication and access control systems deployed securely on-premise.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Semantic Search Engines</h3>
                    <p class="text-gray-400 text-sm">Search systems that understand user intent and contextual meaning, not just exact keyword matches.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Medical Image Analysis</h3>
                    <p class="text-gray-400 text-sm">HIPAA-compliant AI diagnostic assistance for X-rays, MRIs, and pathological scans to augment radiologists.</p>
                </div>

                {{-- Expanded Cards --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedCV" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Video Analytics</h3>
                    <p class="text-gray-400 text-sm">Track movement, analyze crowd density, and recognize behaviors across thousands of hours of CCTV footage.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedCV" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-orange-900/30 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-orange-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Text Summarization</h3>
                    <p class="text-gray-400 text-sm">Condense lengthy reports, legal briefs, and meeting transcripts into concise, highly accurate executive summaries.</p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedCV" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Topic Modeling</h3>
                    <p class="text-gray-400 text-sm">Discover abstract "topics" occurring in a collection of documents to map out emerging trends in customer feedback.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button @click="expandedCV = !expandedCV" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedCV ? 'Show Less' : 'Show All 15 Capabilities'"></span>
                    <svg class="w-5 h-5 ml-2 transition-transform duration-200" :class="{'rotate-180': expandedCV}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="data-engineering" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Data Science & Data Engineering</h2>
            <p class="text-lg text-gray-400">Architect scalable data infrastructure to feed your AI models and unlock true business intelligence.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">ETL/ELT Data Pipelines</h3>
                <p class="text-gray-400 text-sm">Robust pipelines to extract, transform, and load data from disparate enterprise sources into a unified repository.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Data Lakes & Warehouses</h3>
                <p class="text-gray-400 text-sm">Design and implementation of cloud-native architecture (Snowflake, Databricks, Redshift) for massive scale.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">BI & Dashboards</h3>
                <p class="text-gray-400 text-sm">Interactive Tableau, PowerBI, and Looker dashboards that turn raw data into strategic operational insights.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Big Data Analytics</h3>
                <p class="text-gray-400 text-sm">Hadoop and Spark ecosystems deployed to process petabytes of unstructured and semi-structured data.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Data Cleaning & Prep</h3>
                <p class="text-gray-400 text-sm">Automated deduplication, normalization, and outlier removal to ensure training data is pristine and bias-free.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Real-Time Analytics</h3>
                <p class="text-gray-400 text-sm">Sub-second data processing architectures designed for live financial trading, ad bidding, and network monitoring.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Cloud Data Migration</h3>
                <p class="text-gray-400 text-sm">Secure, zero-downtime migration of legacy on-premise databases into scalable AWS, GCP, or Azure data stores.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Statistical Modeling</h3>
                <p class="text-gray-400 text-sm">Rigorous A/B testing infrastructure, hypothesis testing, and causal inference modeling for product teams.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Event Streaming</h3>
                <p class="text-gray-400 text-sm">Apache Kafka and AWS Kinesis architectures designed to process millions of concurrent events.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Master Data Management</h3>
                <p class="text-gray-400 text-sm">Implement a single source of truth across your organization by unifying disparate customer and product records.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Graph Database Modeling</h3>
                <p class="text-gray-400 text-sm">Neo4j and Amazon Neptune implementations to uncover complex relational networks in social or fraud data.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Data Visualization UI</h3>
                <p class="text-gray-400 text-sm">Custom D3.js and React visualization layers built directly into your proprietary SaaS products.</p>
            </div>
        </div>
    </div>
</section>

<section id="ai-integration" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">AI Integration, MLOps & Strategy</h2>
            <p class="text-lg text-gray-400">Bridge the gap between experimental models and scalable, production-grade enterprise architecture.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Enterprise AI Integration</h3>
                <p class="text-gray-400 text-sm">Embed intelligence directly into your legacy ERPs, CRMs, and core operational platforms seamlessly via API.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Model Deployment & Monitoring</h3>
                <p class="text-gray-400 text-sm">Containerized model deployment via Docker and Kubernetes with robust drift detection and telemetry.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">ML Lifecycle Management</h3>
                <p class="text-gray-400 text-sm">End-to-end management using MLflow and Kubeflow to track experiments, version data, and manage model registries.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Edge AI Deployment</h3>
                <p class="text-gray-400 text-sm">Optimize and quantize heavy neural networks to run locally on low-power IoT devices and mobile hardware.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-purple-900/30 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-purple-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">AI Cloud Architecture</h3>
                <p class="text-gray-400 text-sm">Design fault-tolerant, scalable GPU computing infrastructure across AWS SageMaker, GCP Vertex, or Azure ML.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">AI Readiness Assessment</h3>
                <p class="text-gray-400 text-sm">Comprehensive audits of your data maturity, tech stack, and organizational readiness before you invest in AI.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-fuchsia-900/30 text-fuchsia-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-fuchsia-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Responsible AI & Governance</h3>
                <p class="text-gray-400 text-sm">Implement ethical AI frameworks to ensure model fairness, explainability, and compliance with emerging AI acts.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">PoC to Production</h3>
                <p class="text-gray-400 text-sm">Strategic roadmapping to transition brittle proof-of-concept scripts into hardened, scalable microservices.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-teal-900/30 text-teal-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-teal-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">AI Cost Optimization</h3>
                <p class="text-gray-400 text-sm">FinOps for AI—reduce inference costs by implementing caching, model distillation, and instance rightsizing.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-pink-900/30 text-pink-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-pink-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">CI/CD for Machine Learning</h3>
                <p class="text-gray-400 text-sm">Automated testing, validation, and deployment pipelines tailored specifically for stochastic ML model updates.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-lime-900/30 text-lime-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-lime-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">AI Data Privacy & Security</h3>
                <p class="text-gray-400 text-sm">Enforce PII scrubbing, federated learning, and strict role-based access control around sensitive model data.</p>
            </div>

            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-12 h-12 bg-sky-900/30 text-sky-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-sky-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">LLM Benchmarking</h3>
                <p class="text-gray-400 text-sm">Rigorously evaluate commercial vs. open-source models using custom datasets to find the optimal cost-to-performance ratio.</p>
            </div>
        </div>
    </div>
</section>
