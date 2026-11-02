@extends('layouts.admin')

@section('title', 'Benefits')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-900">World-Class Benefits</h1>
    <a href="{{ route('admin.benefits.create') }}" class="btn btn-primary px-4 py-2">Add Benefit</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm">
                <th class="py-3 px-4 font-semibold w-16">Icon</th>
                <th class="py-3 px-4 font-semibold">Title</th>
                <th class="py-3 px-4 font-semibold">Description</th>
                <th class="py-3 px-4 font-semibold w-24">Order</th>
                <th class="py-3 px-4 font-semibold w-24">Status</th>
                <th class="py-3 px-4 font-semibold text-right w-32">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach($benefits as $benefit)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3 px-4">
                    <svg class="w-6 h-6 text-brand-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        {!! $benefit->icon !!}
                    </svg>
                </td>
                <td class="py-3 px-4 font-medium text-slate-900">{{ $benefit->title }}</td>
                <td class="py-3 px-4 text-slate-600 truncate max-w-xs">{{ $benefit->description }}</td>
                <td class="py-3 px-4 text-slate-600">{{ $benefit->sort_order }}</td>
                <td class="py-3 px-4">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $benefit->is_active ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800' }}">
                        {{ $benefit->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="py-3 px-4 text-right space-x-2">
                    <a href="{{ route('admin.benefits.edit', $benefit) }}" class="text-brand-blue hover:text-brand-navy font-medium text-sm">Edit</a>
                    <form action="{{ route('admin.benefits.destroy', $benefit) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this benefit?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium text-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($benefits->isEmpty())
            <tr>
                <td colspan="6" class="py-8 text-center text-slate-500">No benefits found.</td>
            </tr>
            @endif
        </tbody>
    </table>
@endsection
