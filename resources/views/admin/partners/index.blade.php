@extends('layouts.admin')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-slate-800">Partners (Clients)</h1>
    <a href="{{ route('admin.partners.create') }}" class="btn btn-primary px-4 py-2">
        Add Partner
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden w-full">
    <table class="w-full text-left text-sm text-slate-600">
        <thead class="bg-slate-50 border-b border-slate-200 text-slate-800">
            <tr>
                <th class="px-6 py-4 font-semibold w-16">Sort</th>
                <th class="px-6 py-4 font-semibold">Logo</th>
                <th class="px-6 py-4 font-semibold">Name</th>
                <th class="px-6 py-4 font-semibold">Status</th>
                <th class="px-6 py-4 font-semibold text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-200">
            @forelse($partners as $partner)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="px-6 py-4">{{ $partner->sort_order }}</td>
                <td class="px-6 py-4">
                    @if($partner->logo_path)
                        <img src="{{ Storage::url($partner->logo_path) }}" class="h-10 object-contain">
                    @else
                        <span class="text-xs text-slate-400">No Image</span>
                    @endif
                </td>
                <td class="px-6 py-4 font-medium text-slate-900">{{ $partner->name }}</td>
                <td class="px-6 py-4">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $partner->is_active ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800' }}">
                        {{ $partner->is_active ? 'Active' : 'Hidden' }}
                    </span>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.partners.edit', $partner) }}" class="text-blue-600 hover:text-blue-800 font-medium mr-3">Edit</a>
                    <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-8 text-center text-slate-500">No partners found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
