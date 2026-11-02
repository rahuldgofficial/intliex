@extends('layouts.admin')

@section('title', 'Edit Account')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.accounts.index') }}" class="text-sm text-brand-600 hover:text-brand-900 mb-2 inline-block">&larr; Back to Accounts</a>
    <h1 class="text-2xl font-bold text-slate-900">Edit Account: {{ $account->name }}</h1>
    @if(auth()->id() === $account->id)
    <p class="text-sm text-gray-500 mt-1">This is your own profile. You can update your information and change your password here.</p>
    @endif
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 max-w-2xl">
    <form action="{{ route('admin.accounts.update', $account) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-700 mb-1">Name</label>
            <input type="text" name="name" class="form-input w-full" value="{{ old('name', $account->name) }}" required>
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
            <input type="email" name="email" class="form-input w-full" value="{{ old('email', $account->email) }}" required>
            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="can_access_settings" value="1" class="rounded border-gray-300 text-brand-600 shadow-sm focus:border-brand-300 focus:ring focus:ring-brand-200 focus:ring-opacity-50" {{ old('can_access_settings', $account->can_access_settings) ? 'checked' : '' }} {{ auth()->id() === $account->id ? 'disabled' : '' }}>
                <span class="ml-2 text-sm text-gray-600">Give access to Settings menu (General Settings & Accounts)</span>
                @if(auth()->id() === $account->id)
                <input type="hidden" name="can_access_settings" value="1">
                @endif
            </label>
        </div>

        <h3 class="text-lg font-semibold border-b border-gray-200 pb-2 mb-4 mt-8">Change Password</h3>
        <p class="text-sm text-gray-500 mb-4">Leave blank if you do not want to change the password.</p>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-700 mb-1">New Password</label>
            <input type="password" name="password" class="form-input w-full">
            @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-input w-full">
        </div>

        <div class="flex justify-end pt-4 border-t border-slate-100">
            <button type="submit" class="btn btn-primary px-6 py-2">Update Account</button>
        </div>
    </form>
@endsection
