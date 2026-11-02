@extends('layouts.admin')

@section('title', 'Job Applications')
@section('header', 'Manage Applications')

@section('content')
<div class="sm:flex sm:items-center sm:justify-between mb-6">
    <div>
        <h2 class="text-base font-semibold leading-7 text-gray-900">Career Applications</h2>
        <p class="mt-1 text-sm leading-6 text-gray-500">Review candidates who have applied for open positions.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Applicant</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Applied</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($applications ?? [] as $application)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 ">
                            <div class="text-sm font-medium text-gray-900">{{ $application->name ?? 'Sarah Jenkins' }}</div>
                            <div class="text-sm text-gray-500">{{ $application->email ?? 'sarah.j@example.com' }}</div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-900 font-medium">{{ $application->jobPosting->title ?? 'N/A' }}</div>
                            <div class="text-sm text-gray-500">{{ $application->jobPosting->department ?? '' }}</div>
                        </td>
                        <td class="px-6 py-4  text-sm text-gray-500">
                            {{ isset($application->created_at) ? $application->created_at->format('M d, Y') : 'Oct 23, 2024' }}
                        </td>
                        <td class="px-6 py-4 ">
                            @php
                                $status = $application->status ?? 'new';
                                $badgeClass = match($status) {
                                    'new' => 'bg-blue-100 text-blue-800',
                                    'reviewing' => 'bg-yellow-100 text-yellow-800',
                                    'interviewed' => 'bg-purple-100 text-purple-800',
                                    'hired' => 'bg-green-100 text-green-800',
                                    'rejected' => 'bg-red-100 text-red-800',
                                    default => 'bg-gray-100 text-gray-800',
                                };
                            @endphp
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $badgeClass }}">
                                {{ ucfirst($status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4  text-right text-sm font-medium space-x-3">
                            @if($application->resume_path ?? true)
                            <a href="{{ route('admin.applications.resume', $application->id ?? 1) }}" class="text-gray-500 hover:text-gray-900 inline-flex items-center" title="Download Resume">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                            </a>
                            @endif
                            <a href="{{ route('admin.applications.show', $application->id ?? 1) }}" class="text-blue-600 hover:text-blue-900">Review</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-semibold text-gray-900">No applications</h3>
                            <p class="mt-1 text-sm text-gray-500">Get started by creating a new job posting.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if(isset($applications) && $applications->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $applications->links() }}
        </div>
    @endif
@endsection
