<!DOCTYPE html>
<html lang="en" class="overflow-y-scroll">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta -->
    <title>@yield('meta_title', 'IntliEx — Multi-Domain Technology Company')</title>
    <meta name="description" content="@yield('meta_description', 'IntliEx delivers enterprise solutions across ERP & Softwares, AI, Networking, Industrial Automation, and Cloud Services.')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'IntliEx — Multi-Domain Technology Company')">
    <meta property="og:description" content="@yield('og_description', 'Enterprise solutions across 5 technology domains.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="IntliEx">
    @if(View::hasSection('og_image'))
    <meta property="og:image" content="@yield('og_image')">
    @endif
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'IntliEx')">
    <meta name="twitter:description" content="@yield('og_description', 'Enterprise solutions across 5 technology domains.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Alpine.js (Required for some domain hero carousels) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- JSON-LD Structured Data -->
    @include('partials.schema')
    @yield('structured_data')
    @stack('schema')
    
    @yield('head')
</head>
<body class="font-sans antialiased text-surface-700 bg-white overflow-x-hidden">
    <!-- Skip to main content (accessibility) -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:bg-brand-600 focus:text-white focus:px-4 focus:py-2 focus:rounded-lg">Skip to main content</a>
    
    @include('partials.header')

    
    <!-- Flash Messages -->
    @if(session('success'))
    <div class="toast toast-success" id="flash-toast">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="toast toast-error" id="flash-toast">{{ session('error') }}</div>
    @endif
    
    <main id="main-content">
        @yield('content')
    </main>
    
    @include('partials.footer')
    @include('partials.whatsapp-button')
    
    @stack('scripts')
</body>
</html>
