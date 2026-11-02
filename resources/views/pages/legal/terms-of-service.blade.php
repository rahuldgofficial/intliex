@extends('layouts.app')

@section('title', 'Terms of Service - IntliEx')

@section('content')
<div class="section pt-32 pb-20 bg-slate-50">
    <div class="container-site max-w-4xl mx-auto">
        <!-- Breadcrumbs -->
        <nav class="text-sm font-medium mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-slate-500">
                <li><a href="{{ route('home') }}" class="hover:text-brand-navy transition-colors focus:outline-none focus:underline rounded">Home</a></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></li>
                <li><span class="text-slate-900">Legal</span></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></li>
                <li class="text-slate-900" aria-current="page">Terms of Service</li>
            </ol>
        </nav>

        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Terms of Service</h1>
            <p class="text-sm text-slate-500 mb-10 pb-6 border-b border-slate-100">Last updated: {{ date('F d, Y') }}</p>
            
            <div class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-a:text-brand-blue">
                <p><strong>[TEMPLATE CONTENT - TO BE CUSTOMIZED BY LEGAL]</strong></p>
                
                <h2>1. Terms</h2>
                <p>By accessing this Website, accessible from intliex.com, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>
                
                <h2>2. Use License</h2>
                <p>Permission is granted to temporarily download one copy of the materials on IntliEx's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                <ul>
                    <li>modify or copy the materials;</li>
                    <li>use the materials for any commercial purpose or for any public display;</li>
                    <li>attempt to reverse engineer any software contained on IntliEx's Website;</li>
                    <li>remove any copyright or other proprietary notations from the materials; or</li>
                    <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                </ul>
                <p>This will let IntliEx to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format.</p>
                
                <h2>3. Disclaimer</h2>
                <p>All the materials on IntliEx's Website are provided "as is". IntliEx makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, IntliEx does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>
                
                <h2>4. Limitations</h2>
                <p>IntliEx or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on IntliEx's Website, even if IntliEx or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>
                
                <h2>5. Revisions and Errata</h2>
                <p>The materials appearing on IntliEx's Website may include technical, typographical, or photographic errors. IntliEx will not promise that any of the materials in this Website are accurate, complete, or current. IntliEx may change the materials contained on its Website at any time without notice. IntliEx does not make any commitment to update the materials.</p>
                
                <h2>6. Links</h2>
                <p>IntliEx has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by IntliEx of the site. The use of any linked website is at the user's own risk.</p>
                
                <h2>7. Site Terms of Use Modifications</h2>
                <p>IntliEx may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>
                
                <h2>8. Your Privacy</h2>
                <p>Please read our <a href="{{ route('privacy-policy') }}">Privacy Policy</a>.</p>
                
                <h2>9. Governing Law</h2>
                <p>Any claim related to IntliEx's Website shall be governed by the laws of the State without regards to its conflict of law provisions.</p>
            </div>
        </div>
    </div>
</div>
@endsection
