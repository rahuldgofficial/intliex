@extends('layouts.admin')

@section('title', 'Add Account')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.accounts.index') }}" class="text-sm text-brand-600 hover:text-brand-900 mb-2 inline-block">&larr; Back to Accounts</a>
    <h1 class="text-2xl font-bold text-slate-900">Add Account</h1>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 max-w-2xl">
    <form action="{{ route('admin.accounts.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-700 mb-1">Name</label>
            <input type="text" name="name" class="form-input w-full" value="{{ old('name') }}" required>
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
            <input type="email" name="email" class="form-input w-full" value="{{ old('email') }}" required>
            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
            <input type="password" name="password" class="form-input w-full" required>
            @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-input w-full" required>
        </div>

        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="can_access_settings" value="1" class="rounded border-gray-300 text-brand-600 shadow-sm focus:border-brand-300 focus:ring focus:ring-brand-200 focus:ring-opacity-50" {{ old('can_access_settings') ? 'checked' : '' }}>
                <span class="ml-2 text-sm text-gray-600">Give access to Settings menu (General Settings & Accounts)</span>
            </label>
        </div>

        <div class="flex justify-end pt-4 border-t border-slate-100">
            <button type="submit" class="btn btn-primary px-6 py-2">Create Account</button>
        </div>
    </form>
@endsection
