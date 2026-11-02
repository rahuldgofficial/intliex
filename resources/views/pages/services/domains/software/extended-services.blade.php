<section id="erp-modules" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">ERP Solutions For Every Business Function</h2>
            <p class="text-lg text-gray-400">Adopt individual specialized modules to solve specific bottlenecks, or deploy our complete suite for end-to-end enterprise transformation.</p>
        </div>

        <div x-data="{ expanded: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Card 1 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Accounts Management</h3>
                    <p class="text-gray-400 text-sm">Streamline financial operations with automated ledger management, invoicing, and real-time financial reporting.</p>
                </div>
                {{-- Card 2 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Warehouse Management</h3>
                    <p class="text-gray-400 text-sm">Optimize inventory tracking, bin locations, and stock movements for peak operational efficiency.</p>
                </div>
                {{-- Card 3 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Purchase Management</h3>
                    <p class="text-gray-400 text-sm">Automate procurement workflows, from purchase requisitions to vendor invoice reconciliation.</p>
                </div>
                {{-- Card 4 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Sales Management</h3>
                    <p class="text-gray-400 text-sm">Accelerate revenue cycles with quotation management, order processing, and dynamic pricing.</p>
                </div>
                {{-- Card 5 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Production Module</h3>
                    <p class="text-gray-400 text-sm">Plan and control manufacturing processes with BOM management and real-time shop floor tracking.</p>
                </div>
                {{-- Card 6 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Damage & Wastage</h3>
                    <p class="text-gray-400 text-sm">Track material losses, analyze defect causes, and implement cost-saving quality controls.</p>
                </div>
                {{-- Card 7 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">HRM Module</h3>
                    <p class="text-gray-400 text-sm">Manage the entire employee lifecycle including onboarding, attendance, payroll, and appraisals.</p>
                </div>
                {{-- Card 8 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Import L/C Module</h3>
                    <p class="text-gray-400 text-sm">Handle Letter of Credit operations seamlessly, tracking shipments and banking compliance.</p>
                </div>
                {{-- Card 9 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Customer Portal</h3>
                    <p class="text-gray-400 text-sm">Empower clients with self-service access to their orders, invoices, and support tickets.</p>
                </div>
                {{-- Card 10 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Vendor Portal</h3>
                    <p class="text-gray-400 text-sm">Streamline supplier communication with direct portals for RFQs, POs, and delivery schedules.</p>
                </div>
                {{-- Card 11 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Fixed Asset Mgmt</h3>
                    <p class="text-gray-400 text-sm">Track asset lifecycles, calculate depreciation automatically, and manage maintenance schedules.</p>
                </div>
                {{-- Card 12 --}}
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Vehicle Management</h3>
                    <p class="text-gray-400 text-sm">Monitor fleet operations, fuel consumption, driver assignments, and vehicle maintenance logs.</p>
                </div>

                {{-- Hidden Cards (Expandable) --}}
                {{-- Card 13 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">CRM Management</h3>
                    <p class="text-gray-400 text-sm">Drive sales growth by tracking leads, opportunities, and managing customer communications.</p>
                </div>
                {{-- Card 14 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Task Module</h3>
                    <p class="text-gray-400 text-sm">Assign, track, and collaborate on internal tasks and project deliverables across departments.</p>
                </div>
                {{-- Card 15 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Managerial Module</h3>
                    <p class="text-gray-400 text-sm">Executive dashboards providing high-level business intelligence and approval workflows.</p>
                </div>
                {{-- Card 16 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">User Module</h3>
                    <p class="text-gray-400 text-sm">Granular role-based access control and security configurations for all system users.</p>
                </div>
                {{-- Card 17 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">MIS Module</h3>
                    <p class="text-gray-400 text-sm">Generate dynamic Management Information System reports tailored to strategic metrics.</p>
                </div>
                {{-- Card 18 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">License Management</h3>
                    <p class="text-gray-400 text-sm">Track software usage, digital licenses, expiries, and compliance documentation.</p>
                </div>
                {{-- Card 19 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Loan Management</h3>
                    <p class="text-gray-400 text-sm">Manage employee advances, corporate loans, interest calculations, and repayment schedules.</p>
                </div>
                {{-- Card 20 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">POS Management</h3>
                    <p class="text-gray-400 text-sm">Integrated Point-of-Sale interfaces syncing real-time with backend inventory and accounting.</p>
                </div>
                {{-- Card 21 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Export LC</h3>
                    <p class="text-gray-400 text-sm">Manage Export Letters of Credit, ensuring international trade compliance and accurate documentation.</p>
                </div>
                {{-- Card 22 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Billing Module</h3>
                    <p class="text-gray-400 text-sm">Automate recurring billing, subscription management, and complex tax calculations.</p>
                </div>
                {{-- Card 23 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">KPI Module</h3>
                    <p class="text-gray-400 text-sm">Define, track, and evaluate Key Performance Indicators across teams and individuals.</p>
                </div>
                {{-- Card 24 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">PF Module</h3>
                    <p class="text-gray-400 text-sm">Calculate and manage Provident Fund contributions, distributions, and compliance reporting.</p>
                </div>
                {{-- Card 25 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">CRM & Billing Module</h3>
                    <p class="text-gray-400 text-sm">Unified customer relationship and invoicing system to manage the complete sales lifecycle.</p>
                </div>
                {{-- Card 26 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">CRM & Customer Portal</h3>
                    <p class="text-gray-400 text-sm">Provide a seamless front-end portal connected directly to your backend CRM database.</p>
                </div>
                {{-- Card 27 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Hotel Management</h3>
                    <p class="text-gray-400 text-sm">Manage room bookings, housekeeping, front desk operations, and guest services.</p>
                </div>
                {{-- Card 28 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Visitor Management</h3>
                    <p class="text-gray-400 text-sm">Digital check-in systems for tracking guests, printing badges, and securing facilities.</p>
                </div>
                {{-- Card 29 --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">E-Procurement</h3>
                    <p class="text-gray-400 text-sm">Digitalize supplier bidding, contract negotiations, and procurement approval chains.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button @click="expanded = !expanded" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors mr-4 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expanded ? 'Show Less Modules' : 'View All 29 Modules'"></span>
                    <svg class="ml-2 w-5 h-5 transform transition-transform" :class="{'rotate-180': expanded}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                
                <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-white bg-brand-600 hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900 mt-4 sm:mt-0">
                    Discuss Your ERP Needs
                </a>
            </div>
        </div>
    </div>
</section>
<section id="industry-specific" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Industry-Specific Management Solutions</h2>
            <p class="text-lg text-gray-400">Purpose-built software platforms engineered to handle the unique operational workflows of your specific industry.</p>
        </div>

        <div x-data="{ expandedInd: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Hotel Management Software</h3>
                    <p class="text-gray-400 text-sm">End-to-end hospitality solution for room bookings, housekeeping, billing, and guest relationship management.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Hospital & Clinic Mgmt</h3>
                    <p class="text-gray-400 text-sm">Comprehensive healthcare ERP covering patient records, appointments, billing, and pharmacy integration.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Restaurant Management</h3>
                    <p class="text-gray-400 text-sm">Complete F&B operations software with POS, table management, kitchen display systems, and inventory.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Courier & Logistics</h3>
                    <p class="text-gray-400 text-sm">Track parcels in real-time, optimize delivery routes, and manage dispatch fleets with high precision.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">University Management</h3>
                    <p class="text-gray-400 text-sm">Streamline higher education administration, from student admissions and grading to alumni networking.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">School Management</h3>
                    <p class="text-gray-400 text-sm">K-12 administrative software handling attendance, parent-teacher portals, fees, and exam scheduling.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Laboratory Management</h3>
                    <p class="text-gray-400 text-sm">Automate LIMS operations for diagnostics, sample tracking, quality control, and secure test reporting.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Housing/Property Mgmt</h3>
                    <p class="text-gray-400 text-sm">Centralize tenant management, lease agreements, maintenance requests, and rent collection.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Food Delivery App</h3>
                    <p class="text-gray-400 text-sm">Scalable ordering and dispatch platforms with consumer apps, driver apps, and merchant dashboards.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Ride-Hailing App</h3>
                    <p class="text-gray-400 text-sm">On-demand transport applications featuring real-time GPS tracking, dynamic pricing, and driver management.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Pharmacy Management</h3>
                    <p class="text-gray-400 text-sm">Control medical inventory, expiry dates, batch tracking, and prescription billing with regulatory compliance.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Real Estate Software</h3>
                    <p class="text-gray-400 text-sm">CRM and listing platforms for agencies to manage leads, properties, viewing schedules, and contracts.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Salon & Spa Management</h3>
                    <p class="text-gray-400 text-sm">Booking systems with calendar management, staff scheduling, inventory, and loyalty programs.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Gym/Fitness Management</h3>
                    <p class="text-gray-400 text-sm">Manage memberships, class scheduling, trainer assignments, and access control integrations.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Event Management</h3>
                    <p class="text-gray-400 text-sm">End-to-end planning software covering ticketing, attendee registration, venue management, and analytics.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a2 2 0 00-2 2v10a2 2 0 002 2h8a1 1 0 001-1zm1 0v-4m0 0a2 2 0 114 0v4m-4-4h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Parking Management</h3>
                    <p class="text-gray-400 text-sm">Automated ticketing, capacity tracking, LPR integration, and digital payment systems for parking lots.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Fleet Management</h3>
                    <p class="text-gray-400 text-sm">IoT-enabled dashboards for vehicle tracking, maintenance alerts, route optimization, and driver behavior.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Retail POS & Inventory</h3>
                    <p class="text-gray-400 text-sm">Omnichannel retail software unifying in-store checkout, e-commerce, and real-time stock levels.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Co-working Space Mgmt</h3>
                    <p class="text-gray-400 text-sm">Platform for hot-desk booking, meeting room scheduling, billing, and member community engagement.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Travel & Tour Agency</h3>
                    <p class="text-gray-400 text-sm">Manage itineraries, flight/hotel API integrations, customer bookings, and agency commissions.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Microfinance & NGO</h3>
                    <p class="text-gray-400 text-sm">Track micro-loans, donor management, field officer schedules, and financial disbursements.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Auto Repair Shop Mgmt</h3>
                    <p class="text-gray-400 text-sm">Service scheduling, parts inventory, mechanic assignments, and digital customer invoicing.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Law Firm Practice Mgmt</h3>
                    <p class="text-gray-400 text-sm">Organize case files, client billing, trust accounting, and secure document sharing.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Cinema & Ticketing</h3>
                    <p class="text-gray-400 text-sm">Digital box office solutions, seat map builders, concessions POS, and online ticket booking.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Construction Project</h3>
                    <p class="text-gray-400 text-sm">Track on-site progress, manage contractor bids, budget allocations, and material procurement.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Agriculture & Farm Mgmt</h3>
                    <p class="text-gray-400 text-sm">Crop planning, livestock tracking, supply chain logistics, and IoT sensor integration for yield analysis.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Dental Clinic Mgmt</h3>
                    <p class="text-gray-400 text-sm">Specialized EMR for dentistry, 3D imaging integration, treatment plans, and appointment reminders.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedInd" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Garments & Textile ERP</h3>
                    <p class="text-gray-400 text-sm">Manage the complete apparel lifecycle: design sampling, bulk manufacturing, QA, and export logistics.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button @click="expandedInd = !expandedInd" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedInd ? 'Show Less Industries' : 'View All 28 Industries'"></span>
                    <svg class="ml-2 w-5 h-5 transform transition-transform" :class="{'rotate-180': expandedInd}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
<section id="mobile-apps" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Mobile App Development</h2>
            <p class="text-lg text-gray-400">Award-winning mobile experiences across iOS, Android, and cross-platform ecosystems, from concept to app store launch.</p>
        </div>

        <div x-data="{ expandedMob: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">iOS Development</h3>
                    <p class="text-gray-400 text-sm">Native Apple applications using Swift and Objective-C, optimized for performance across iPhone and iPad.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Android Development</h3>
                    <p class="text-gray-400 text-sm">High-performance native Android apps built with Kotlin and Java for the massive Google Play ecosystem.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">React Native</h3>
                    <p class="text-gray-400 text-sm">Cross-platform mobile apps delivering near-native performance using a single JavaScript codebase.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Flutter Development</h3>
                    <p class="text-gray-400 text-sm">Beautiful, natively compiled applications for mobile, web, and desktop from a single Dart codebase.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Ionic / Cordova</h3>
                    <p class="text-gray-400 text-sm">Hybrid mobile applications built with standard web technologies (HTML, CSS, Angular/React).</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Progressive Web Apps (PWA)</h3>
                    <p class="text-gray-400 text-sm">Web applications that look, feel, and function like native apps, complete with offline capabilities.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Enterprise Mobility</h3>
                    <p class="text-gray-400 text-sm">Secure internal applications for employees, enabling remote work, field force tracking, and data access.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">AR/VR Mobile Apps</h3>
                    <p class="text-gray-400 text-sm">Immersive augmented and virtual reality experiences powered by ARKit and ARCore.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">IoT Mobile Apps</h3>
                    <p class="text-gray-400 text-sm">Companion applications to control, monitor, and configure Internet of Things smart devices.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Wearable Apps</h3>
                    <p class="text-gray-400 text-sm">Custom software for Apple Watch, Wear OS, and specialized fitness or healthcare wearables.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Game Development</h3>
                    <p class="text-gray-400 text-sm">Engaging 2D and 3D mobile games built with Unity and Unreal Engine for maximum player retention.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">App UI/UX Design</h3>
                    <p class="text-gray-400 text-sm">User-centric interface design, wireframing, and prototyping focused on intuitive mobile interactions.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedMob" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Maintenance & Support</h3>
                    <p class="text-gray-400 text-sm">Continuous monitoring, OS update compatibility fixes, bug patching, and performance optimization.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedMob" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">App Store Optimization</h3>
                    <p class="text-gray-400 text-sm">Maximize visibility and organic downloads with keyword research, metadata tuning, and review management.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedMob" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Mobile Backend (MBaaS)</h3>
                    <p class="text-gray-400 text-sm">Scalable cloud infrastructure, APIs, databases, and push notification servers to power your apps.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button @click="expandedMob = !expandedMob" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedMob ? 'Show Less Services' : 'View All 15 Services'"></span>
                    <svg class="ml-2 w-5 h-5 transform transition-transform" :class="{'rotate-180': expandedMob}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
<section id="ecommerce-solutions" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">E-Commerce Solutions</h2>
            <p class="text-lg text-gray-400">Scalable digital storefronts and marketplaces designed to maximize conversion rates and drive revenue.</p>
        </div>

        <div x-data="{ expandedEcom: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">B2B E-Commerce</h3>
                    <p class="text-gray-400 text-sm">Wholesale platforms with custom pricing tiers, bulk ordering, and complex procurement workflows.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">B2C E-Commerce</h3>
                    <p class="text-gray-400 text-sm">High-conversion retail storefronts designed to deliver seamless, engaging consumer shopping experiences.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Multi-Vendor Marketplaces</h3>
                    <p class="text-gray-400 text-sm">Amazon-style platforms allowing third-party sellers to manage their own products, inventory, and fulfillment.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Custom E-Commerce</h3>
                    <p class="text-gray-400 text-sm">Fully bespoke online stores built from scratch to accommodate completely unique business models.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Shopify Development</h3>
                    <p class="text-gray-400 text-sm">Custom theme design, app development, and Store 2.0 implementations on the Shopify ecosystem.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">WooCommerce</h3>
                    <p class="text-gray-400 text-sm">Flexible, WordPress-powered e-commerce solutions tailored for content-heavy retail brands.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Magento / Adobe Commerce</h3>
                    <p class="text-gray-400 text-sm">Enterprise-grade e-commerce development for massive product catalogs and complex architectures.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">BigCommerce</h3>
                    <p class="text-gray-400 text-sm">Robust SaaS e-commerce implementations offering extensive API capabilities and built-in scalability.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Headless E-Commerce</h3>
                    <p class="text-gray-400 text-sm">Decoupled architectures using React/Vue frontends connected to Shopify or CommerceTools via API.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">E-Commerce SEO</h3>
                    <p class="text-gray-400 text-sm">Technical optimization, structured data, and content strategies to dominate retail search rankings.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Payment Integrations</h3>
                    <p class="text-gray-400 text-sm">Secure connections to Stripe, PayPal, Authorize.net, and localized international payment gateways.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">POS Integration</h3>
                    <p class="text-gray-400 text-sm">Sync your brick-and-mortar Point of Sale systems bi-directionally with your online storefront.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedEcom" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Subscription E-Commerce</h3>
                    <p class="text-gray-400 text-sm">Recurring billing models, subscription boxes, and membership paywalls optimized for lifetime value.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedEcom" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">E-Commerce Maintenance</h3>
                    <p class="text-gray-400 text-sm">Ongoing security patches, speed optimization, cart abandonment recovery, and conversion rate optimization.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button @click="expandedEcom = !expandedEcom" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedEcom ? 'Show Less Services' : 'View All 14 Services'"></span>
                    <svg class="ml-2 w-5 h-5 transform transition-transform" :class="{'rotate-180': expandedEcom}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
<section id="specialized-software" class="py-20 bg-gray-900 text-white relative overflow-hidden border-t border-gray-800">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Specialized Software Engineering</h2>
            <p class="text-lg text-gray-400">Advanced technical capabilities for complex enterprise requirements, from legacy modernization to cloud-native architectures.</p>
        </div>

        <div x-data="{ expandedSpec: false }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">SaaS Product Development</h3>
                    <p class="text-gray-400 text-sm">End-to-end engineering for Software-as-a-Service products, covering multi-tenancy, billing, and scalability.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">CRM Development</h3>
                    <p class="text-gray-400 text-sm">Bespoke Customer Relationship Management systems tailored precisely to your unique sales and marketing funnels.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Custom ERP Development</h3>
                    <p class="text-gray-400 text-sm">Ground-up Enterprise Resource Planning development when off-the-shelf solutions cannot meet your requirements.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Web App Development</h3>
                    <p class="text-gray-400 text-sm">Complex, interactive web applications built with modern frameworks like React, Vue, Laravel, and Node.js.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Desktop App Development</h3>
                    <p class="text-gray-400 text-sm">Native and cross-platform desktop applications (Windows, macOS, Linux) utilizing Electron or C#/.NET.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Microservices Architecture</h3>
                    <p class="text-gray-400 text-sm">Decompose monolithic applications into highly scalable, independently deployable microservices.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Cloud-Native Apps</h3>
                    <p class="text-gray-400 text-sm">Applications built specifically to leverage the elasticity and services of AWS, Azure, or Google Cloud.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Legacy Modernization</h3>
                    <p class="text-gray-400 text-sm">Refactoring, re-platforming, and migrating outdated legacy systems to modern, secure tech stacks.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-emerald-900/30 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-emerald-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">API Development</h3>
                    <p class="text-gray-400 text-sm">Design and implementation of secure, RESTful, and GraphQL APIs for seamless system interoperability.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-blue-900/30 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-blue-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Blockchain Development</h3>
                    <p class="text-gray-400 text-sm">Smart contracts, dApps, and private blockchain networks leveraging Ethereum, Hyperledger, or Solana.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-violet-900/30 text-violet-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-violet-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Data Warehouse / BI</h3>
                    <p class="text-gray-400 text-sm">Centralized data lakes, ETL pipelines, and interactive Tableau/PowerBI dashboards for actionable intelligence.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-12 h-12 bg-cyan-900/30 text-cyan-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Automated Testing</h3>
                    <p class="text-gray-400 text-sm">Comprehensive QA engineering utilizing Selenium, Cypress, and CI/CD pipelines to ensure flawless releases.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedSpec" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-amber-900/30 text-amber-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">DevOps Consulting</h3>
                    <p class="text-gray-400 text-sm">Streamlining software delivery pipelines with Docker, Kubernetes, Terraform, and automated provisioning.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedSpec" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-rose-900/30 text-rose-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-rose-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Tech Strategy & Consulting</h3>
                    <p class="text-gray-400 text-sm">Virtual CTO services offering architectural guidance, tech stack selection, and digital transformation roadmaps.</p>
                </div>
                <div class="bg-gray-800/50 backdrop-blur border border-gray-700 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 group" x-show="expandedSpec" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
                    <div class="w-12 h-12 bg-indigo-900/30 text-indigo-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform border border-indigo-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Post-Launch Support</h3>
                    <p class="text-gray-400 text-sm">Dedicated SLAs for 24/7 monitoring, incident response, feature updates, and technical maintenance.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button @click="expandedSpec = !expandedSpec" class="inline-flex items-center justify-center px-6 py-3 border border-gray-600 text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    <span x-text="expandedSpec ? 'Show Less Capabilities' : 'View All 15 Capabilities'"></span>
                    <svg class="ml-2 w-5 h-5 transform transition-transform" :class="{'rotate-180': expandedSpec}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
