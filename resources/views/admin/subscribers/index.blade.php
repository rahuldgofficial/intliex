@extends('layouts.admin')

@section('title', 'Newsletter Subscribers')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-900">Newsletter Subscribers</h1>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm">
                <th class="py-3 px-4 font-semibold">Email</th>
                <th class="py-3 px-4 font-semibold w-40">Status</th>
                <th class="py-3 px-4 font-semibold w-40">Subscribed On</th>
                <th class="py-3 px-4 font-semibold text-right w-24">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach($subscribers as $subscriber)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3 px-4 font-medium text-slate-900">{{ $subscriber->email }}</td>
                <td class="py-3 px-4">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $subscriber->is_active ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800' }}">
                        {{ $subscriber->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="py-3 px-4 text-slate-500 text-sm">{{ $subscriber->created_at->format('M d, Y') }}</td>
                <td class="py-3 px-4 text-right">
                    <form action="{{ route('admin.subscribers.destroy', $subscriber) }}" method="POST" class="inline-block" onsubmit="return confirm('Remove this subscriber?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium text-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($subscribers->isEmpty())
            <tr>
                <td colspan="4" class="py-8 text-center text-slate-500">No subscribers yet.</td>
            </tr>
            @endif
        </tbody>
    </table>
    
    @if($subscribers->hasPages())
    <div class="p-4 border-t border-slate-200">
        {{ $subscribers->links() }}
    </div>
    @endif
@endsection
