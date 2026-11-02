<section class="py-20 bg-gray-900 text-white border-t border-gray-800 relative overflow-hidden">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Agnostic Multi-Cloud Expertise</h2>
            <p class="text-lg text-gray-400">We hold premier certifications across all major hyperscalers, ensuring we architect the optimal environment for your specific enterprise workloads.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Hyperscalers --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    <h3 class="text-xl font-bold">Hyperscalers & Core Services</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Amazon Web Services (AWS)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium text-gray-400">AWS EC2</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium text-gray-400">AWS S3</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium text-gray-400">AWS RDS</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium text-gray-400">AWS Lambda</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Microsoft Azure</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Google Cloud (GCP)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Oracle Cloud (OCI)</span>
                </div>
            </div>

            {{-- Containerization --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    <h3 class="text-xl font-bold">Containers & Orchestration</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Kubernetes (K8s)</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Docker</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Red Hat OpenShift</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">AWS EKS / Azure AKS</span>
                </div>
            </div>

            {{-- Infrastructure as Code --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    <h3 class="text-xl font-bold">Infrastructure as Code</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Terraform</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">AWS CloudFormation</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Ansible</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Azure Bicep</span>
                </div>
            </div>

            {{-- CI/CD & DevOps --}}
            <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl">
                <div class="flex items-center mb-6">
                    <svg class="w-6 h-6 text-{{ $domainColor }}-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    <h3 class="text-xl font-bold">CI/CD & DevOps</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">GitHub Actions</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">GitLab CI</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">Jenkins</span>
                    <span class="px-3 py-1 bg-gray-700/50 border border-gray-600 rounded-full text-sm font-medium">ArgoCD</span>
                </div>
            </div>
        </div>
    </div>
</section>
