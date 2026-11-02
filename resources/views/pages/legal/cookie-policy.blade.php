@extends('layouts.app')

@section('title', 'Cookie Policy - IntliEx')

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
                <li class="text-slate-900" aria-current="page">Cookie Policy</li>
            </ol>
        </nav>

        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Cookie Policy</h1>
            <p class="text-sm text-slate-500 mb-10 pb-6 border-b border-slate-100">Last updated: {{ date('F d, Y') }}</p>
            
            <div class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-a:text-brand-blue">
                <p><strong>[TEMPLATE CONTENT - TO BE CUSTOMIZED BY LEGAL]</strong></p>
                <p>This Cookie Policy explains how IntliEx ("Company", "we", "us", and "our") uses cookies and similar technologies to recognize you when you visit our website at intliex.com ("Website"). It explains what these technologies are and why we use them, as well as your rights to control our use of them.</p>
                
                <h2>What are cookies?</h2>
                <p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>
                
                <h2>Why do we use cookies?</h2>
                <p>We use first-party and third-party cookies for several reasons. Some cookies are required for technical reasons in order for our Website to operate, and we refer to these as "essential" or "strictly necessary" cookies. Other cookies also enable us to track and target the interests of our users to enhance the experience on our Online Properties.</p>
                
                <h2>Types of Cookies We Use</h2>
                
                <h3>Essential Website Cookies</h3>
                <p>These cookies are strictly necessary to provide you with services available through our Website and to use some of its features, such as access to secure areas.</p>
                
                <h3>Performance and Functionality Cookies</h3>
                <p>These cookies are used to enhance the performance and functionality of our Website but are non-essential to their use. However, without these cookies, certain functionality may become unavailable.</p>
                
                <h3>Analytics and Customization Cookies</h3>
                <p>These cookies collect information that is used either in aggregate form to help us understand how our Website is being used or how effective our marketing campaigns are, or to help us customize our Website for you.</p>
                
                <h2>How can I control cookies?</h2>
                <p>You have the right to decide whether to accept or reject cookies. You can exercise your cookie rights by setting your preferences in the Cookie Consent Manager. The Cookie Consent Manager allows you to select which categories of cookies you accept or reject. Essential cookies cannot be rejected as they are strictly necessary to provide you with services.</p>
                <p>You can also set or amend your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted.</p>
                
                <h2>More Information</h2>
                <p>If you have any questions about our use of cookies or other technologies, please contact us at <a href="mailto:privacy@intliex.com">privacy@intliex.com</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection
