@extends('layouts.app')

@section('title', 'Privacy Policy - IntliEx')

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
                <li class="text-slate-900" aria-current="page">Privacy Policy</li>
            </ol>
        </nav>

        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Privacy Policy</h1>
            <p class="text-sm text-slate-500 mb-10 pb-6 border-b border-slate-100">Last updated: {{ date('F d, Y') }}</p>
            
            <div class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-a:text-brand-blue">
                <p><strong>[TEMPLATE CONTENT - TO BE CUSTOMIZED BY LEGAL]</strong></p>
                <p>At IntliEx, accessible from intliex.com, one of our main priorities is the privacy of our visitors and clients. This Privacy Policy document contains types of information that is collected and recorded by IntliEx and how we use it.</p>
                
                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
                
                <h2>1. Information We Collect</h2>
                <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                
                <h2>2. How We Use Your Information</h2>
                <p>We use the information we collect in various ways, including to:</p>
                <ul>
                    <li>Provide, operate, and maintain our website and enterprise services</li>
                    <li>Improve, personalize, and expand our website and offerings</li>
                    <li>Understand and analyze how you use our website</li>
                    <li>Develop new products, services, features, and functionality</li>
                    <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                    <li>Send you emails</li>
                    <li>Find and prevent fraud</li>
                </ul>
                
                <h2>3. Log Files</h2>
                <p>IntliEx follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable.</p>
                
                <h2>4. Cookies and Web Beacons</h2>
                <p>Like any other website, IntliEx uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
                <p>For more general information on cookies, please read our <a href="{{ route('cookie-policy') }}">Cookie Policy</a>.</p>
                
                <h2>5. CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
                <p>Under the CCPA, among other rights, California consumers have the right to:</p>
                <ul>
                    <li>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</li>
                    <li>Request that a business delete any personal data about the consumer that a business has collected.</li>
                    <li>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</li>
                </ul>
                
                <h2>6. GDPR Data Protection Rights</h2>
                <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
                <ul>
                    <li>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</li>
                    <li>The right to rectification – You have the right to request that we correct any information you believe is inaccurate.</li>
                    <li>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
