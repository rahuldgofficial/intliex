<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Page Not Found - IntliEx</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans text-slate-900 antialiased h-screen flex flex-col items-center justify-center relative overflow-hidden">

    <!-- Decorative Elements -->
    <div class="absolute inset-0 z-0 pointer-events-none flex items-center justify-center overflow-hidden">
        <div class="w-[800px] h-[800px] bg-brand-navy/5 rounded-full blur-[100px] absolute mix-blend-multiply"></div>
        <div class="text-[20rem] font-bold text-slate-200/40 select-none absolute -z-10 leading-none">404</div>
    </div>

    <!-- Content -->
    <main class="relative z-10 container-site px-4 text-center max-w-2xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('home') }}" class="inline-block focus:outline-none focus:ring-2 focus:ring-brand-blue rounded-lg">
                <span class="sr-only">IntliEx</span>
                <!-- Logo placeholder -->
                <div class="flex items-center justify-center">
                    <svg class="w-10 h-10 text-brand-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    <span class="ml-2 text-2xl font-bold text-brand-navy tracking-tight">IntliEx</span>
                </div>
            </a>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4 tracking-tight">Page Not Found</h1>
        <p class="text-lg text-slate-600 mb-10">We couldn't find the page you were looking for. It might have been moved, renamed, or doesn't exist.</p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('home') }}" class="btn btn-primary w-full sm:w-auto justify-center shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                Return to Homepage
            </a>
            <a href="{{ route('contact') }}" class="btn btn-secondary w-full sm:w-auto justify-center bg-white">
                Contact Support
            </a>
        </div>

        <div class="mt-16 pt-8 border-t border-slate-200">
            <p class="text-sm font-semibold text-slate-900 mb-4 uppercase tracking-wider">Quick Links</p>
            <div class="flex flex-wrap justify-center gap-4 text-sm font-medium">
                <a href="{{ url('/services/software') }}" class="text-slate-600 hover:text-brand-blue transition-colors">Services</a>
                <a href="{{ route('case-studies.index') }}" class="text-slate-600 hover:text-brand-blue transition-colors">Case Studies</a>
                <a href="{{ route('about') }}" class="text-slate-600 hover:text-brand-blue transition-colors">About Us</a>
                <a href="{{ route('blog.index') }}" class="text-slate-600 hover:text-brand-blue transition-colors">Blog</a>
            </div>
        </div>
    </main>

</body>
</html>
