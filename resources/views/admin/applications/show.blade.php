@extends('layouts.admin')

@section('title', 'Review Application')
@section('header', 'Applicant Review')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <a href="{{ route('admin.applications.index') ?? '/admin/applications' }}" class="text-sm font-medium text-blue-600 hover:text-blue-900 flex items-center">
        <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Back to Applications
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Left Column: Details -->
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white shadow-sm rounded-xl border border-gray-200 overflow-hidden">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200 flex justify-between items-start bg-gray-50/50">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 flex items-center">
                        {{ $application->name ?? 'Sarah Jenkins' }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Applied for: <a href="#" class="font-medium text-blue-600">{{ $application->jobPosting->title ?? 'N/A' }}</a>
                    </p>
                </div>
                <a href="{{ route('admin.applications.resume', $application->id ?? 1) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    Download Resume
                </a>
            </div>
            
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Email address</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <a href="mailto:{{ $application->email ?? 'sarah.j@example.com' }}" class="text-blue-600 hover:underline">{{ $application->email ?? 'sarah.j@example.com' }}</a>
                        </dd>
                    </div>
                    
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $application->phone ?? '+1 (555) 987-6543' }}
                        </dd>
                    </div>
                    
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Portfolio / LinkedIn</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @if($application->linkedin_url)
                                <a href="{{ $application->linkedin_url ?? '' }}" target="_blank" class="text-blue-600 hover:underline break-all">
                                    {{ $application->linkedin_url ?? '' }}
                                </a>
                            @else
                                <span class="text-gray-400">Not provided</span>
                            @endif
                        </dd>
                    </div>
                    
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50/50">
                        <dt class="text-sm font-medium text-gray-500">Cover Letter</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-wrap font-sans">{{ $application->cover_letter ?? 'Dear Hiring Manager,

I am writing to express my interest in the Senior UI/UX Designer role at IntliEx. With over 8 years of experience in enterprise software design, I believe my skills strongly align with your requirements.

I am particularly drawn to IntliEx\'s focus on AI and automation domains, and I would love the opportunity to contribute to your design system.

Looking forward to discussing my application with you.

Sincerely,
Sarah' }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Right Column: Status & Actions -->
    <div class="space-y-6">
        <div class="bg-white shadow-sm rounded-xl border border-gray-200">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Application Status</h3>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('admin.applications.status', $application->id ?? 1) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Current Stage</label>
                        <select id="status" name="status" class="mt-2 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm shadow-sm ring-1 ring-inset ring-gray-300">
                            <option value="new" {{ ($application->status ?? 'new') === 'new' ? 'selected' : '' }}>New Application</option>
                            <option value="reviewing" {{ ($application->status ?? 'new') === 'reviewing' ? 'selected' : '' }}>Under Review</option>
                            <option value="interviewed" {{ ($application->status ?? 'new') === 'interviewed' ? 'selected' : '' }}>Interview Stage</option>
                            <option value="hired" {{ ($application->status ?? 'new') === 'hired' ? 'selected' : '' }}>Hired</option>
                            <option value="rejected" {{ ($application->status ?? 'new') === 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Update Status
                    </button>
                </form>
            </div>
        </div>
        
        <div class="bg-white shadow-sm rounded-xl border border-gray-200">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Notes</h3>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('admin.applications.notes', $application->id ?? 1) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <textarea rows="4" name="notes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 px-3" placeholder="Add internal notes regarding this candidate...">{{ $application->notes ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Save Note
                    </button>
                </form>
            </div>
        </div>
        
        <div class="text-center">
            <form action="{{ route('admin.applications.destroy', $application->id ?? 1) }}" method="POST" onsubmit="return confirm('Are you sure? This cannot be undone.');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800">
                    Delete Application completely
                </button>
            </form>
        </div>
    </div>
@endsection
