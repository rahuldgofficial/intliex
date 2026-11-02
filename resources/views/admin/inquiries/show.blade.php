@extends('layouts.admin')

@section('title', 'View Inquiry')
@section('header', 'Inquiry Details')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <a href="{{ route('admin.inquiries.index') ?? '/admin/inquiries' }}" class="text-sm font-medium text-blue-600 hover:text-blue-900 flex items-center">
        <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Back to Inquiries
    </a>
    
    <div class="flex space-x-3">
        <form action="{{ route('admin.inquiries.destroy', $inquiry->id ?? 1) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-red-300 text-sm font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors">
                Delete
            </button>
        </form>
        <a href="mailto:{{ $inquiry->email ?? 'test@example.com' }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
            Reply via Email
        </a>
    </div>
</div>

<div class="bg-white shadow-sm rounded-xl border border-gray-200 overflow-hidden">
    <div class="px-4 py-5 sm:px-6 border-b border-gray-200 flex justify-between items-center bg-gray-50/50">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Message from {{ $inquiry->name ?? 'John Doe' }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Received on {{ isset($inquiry->created_at) ? $inquiry->created_at->format('F d, Y at h:i A') : 'October 24, 2024 at 10:30 AM' }}
            </p>
        </div>
        <div>
            @if($inquiry->is_read ?? false)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Read</span>
            @else
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Unread</span>
            @endif
        </div>
    </div>
    
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Full name</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $inquiry->name ?? 'John Doe' }}</dd>
            </div>
            
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Email address</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <a href="mailto:{{ $inquiry->email ?? 'john@example.com' }}" class="text-blue-600 hover:underline">{{ $inquiry->email ?? 'john@example.com' }}</a>
                </dd>
            </div>
            
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $inquiry->phone ?? '+1 (555) 123-4567' }}
                </dd>
            </div>
            
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Inquiry Type</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-gray-100 text-gray-800">
                        {{ $inquiry->type ?? 'Project Consultation' }}
                    </span>
                </dd>
            </div>
            
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Domain / Interest</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $inquiry->domain->name ?? 'General' }}
                </dd>
            </div>
            
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Company</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $inquiry->company ?? 'Acme Corp' }}
                </dd>
            </div>
            
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50/50">
                <dt class="text-sm font-medium text-gray-500">Message Content</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-wrap font-sans">{{ $inquiry->message ?? 'We are interested in exploring how IntliEx can implement custom AI models to improve our supply chain predictability. Please reach out to discuss potential pilot projects.' }}</dd>
            </div>
        </dl>
    </div>
@endsection
