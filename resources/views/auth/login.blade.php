<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - IntliEx</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-[#1B3A5C] min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8 relative overflow-hidden">

    <!-- Decorative background elements -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-1/4 -right-1/4 w-1/2 h-1/2 bg-blue-500 rounded-full mix-blend-multiply filter blur-[128px] opacity-20"></div>
        <div class="absolute -bottom-1/4 -left-1/4 w-1/2 h-1/2 bg-cyan-500 rounded-full mix-blend-multiply filter blur-[128px] opacity-20"></div>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md relative z-10">
        <div class="flex justify-center text-center">
            <a href="/" class="text-4xl font-bold tracking-tight text-white">IntliEx<span class="text-blue-400">.</span></a>
        </div>
        <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-white">
            Admin Control Panel
        </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px] relative z-10">
        <div class="bg-white px-6 py-12 shadow-2xl sm:rounded-xl sm:px-12 border border-gray-100">
            
            <form class="space-y-6" action="{{ route('admin.login.post') ?? '/admin/login' }}" method="POST">
                @csrf
                
                @if (session('status'))
                    <div class="rounded-md bg-emerald-50 p-4 mb-6 border border-emerald-200">
                        <div class="flex">
                            <svg class="h-5 w-5 text-emerald-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="text-sm font-medium text-emerald-800">{{ session('status') }}</p>
                        </div>
                    </div>
                @endif

                @if (isset($errors) && $errors->any())
                    <div class="rounded-md bg-red-50 p-4 mb-6 border border-red-200">
                        <div class="flex">
                            <div class="ml-3 text-sm text-red-700">
                                <ul class="list-disc pl-5 space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 px-3" value="{{ old('email') }}" placeholder="admin@intliex.com">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 px-3" placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                        <label for="remember" class="ml-3 block text-sm leading-6 text-gray-700">Remember me</label>
                    </div>

                    <div class="text-sm leading-6">
                        <a href="{{ route('password.request') }}" class="font-semibold text-blue-600 hover:text-blue-500">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-[#1B3A5C] px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#122740] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#1B3A5C] transition-colors">
                        Sign in to Dashboard
                    </button>
                </div>
            </form>
            
            <div class="mt-8 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} IntliEx. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
