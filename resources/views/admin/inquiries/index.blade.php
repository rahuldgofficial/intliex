@extends('layouts.admin')

@section('title', 'Inquiries')
@section('header', 'Manage Inquiries')

@section('content')
<div class="sm:flex sm:items-center sm:justify-between mb-6">
    <div>
        <h2 class="text-base font-semibold leading-7 text-gray-900">Website Inquiries</h2>
        <p class="mt-1 text-sm leading-6 text-gray-500">A list of all messages and inquiries submitted via the website contact forms.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name & Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type / Domain</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($inquiries ?? [] as $inquiry)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 ">
                            @if($inquiry->is_read)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Read</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Unread</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm font-medium text-gray-900">{{ $inquiry->name ?? 'John Doe' }}</div>
                            <div class="text-sm text-gray-500">{{ $inquiry->email ?? 'john@example.com' }}</div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-900">{{ $inquiry->type ?? 'General Inquiry' }}</div>
                            <div class="text-sm text-gray-500">{{ $inquiry->domain->name ?? 'General' }}</div>
                        </td>
                        <td class="px-6 py-4  text-sm text-gray-500">
                            {{ isset($inquiry->created_at) ? $inquiry->created_at->format('M d, Y h:i A') : 'Oct 24, 2024' }}
                        </td>
                        <td class="px-6 py-4  text-right text-sm font-medium">
                            <a href="{{ route('admin.inquiries.show', $inquiry->id ?? 1) }}" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                            @if(!($inquiry->is_read ?? false))
                            <form action="{{ route('admin.inquiries.read', $inquiry->id ?? 1) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="text-green-600 hover:text-green-900">Mark Read</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                            </svg>
                            <h3 class="mt-2 text-sm font-semibold text-gray-900">No inquiries</h3>
                            <p class="mt-1 text-sm text-gray-500">You're all caught up. No inquiries found.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if(isset($inquiries) && $inquiries->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $inquiries->links() }}
        </div>
    @endif
@endsection
