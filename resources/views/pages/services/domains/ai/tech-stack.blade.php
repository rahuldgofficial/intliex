<section class="py-20 bg-brand-900 text-white border-t border-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our AI Technology Stack</h2>
            <p class="text-lg text-gray-400">We leverage industry-leading frameworks, state-of-the-art LLMs, and robust MLOps infrastructure to deliver enterprise AI.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Generative AI & LLMs --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <h3 class="text-xl font-bold">Generative AI & LLMs</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">OpenAI API</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Anthropic API</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Llama 3</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Mistral</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Hugging Face</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Cohere</span>
                </div>
            </div>

            {{-- Frameworks & Libraries --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    <h3 class="text-xl font-bold">ML Frameworks</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Python</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">PyTorch</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">TensorFlow</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Scikit-learn</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">LangChain</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">LangGraph</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">OpenCV</span>
                </div>
            </div>

            {{-- Vector DBs --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    <h3 class="text-xl font-bold">Vector DBs & RAG</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Pinecone</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Weaviate</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Qdrant</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">ChromaDB</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Milvus</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">LlamaIndex</span>
                </div>
            </div>

            {{-- Cloud & MLOps --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    <h3 class="text-xl font-bold">Cloud & MLOps</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">AWS SageMaker</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Databricks</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">MLflow</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Kubeflow</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Apache Airflow</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Docker/K8s</span>
                </div>
            </div>
        </div>
    </div>
</section>
