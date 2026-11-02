@extends('layouts.admin')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-slate-800">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary px-4 py-2">
        Add Testimonial
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden w-full">
    <div class="w-full overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 border-b border-slate-200 text-slate-800">
                <tr>
                    <th class="px-6 py-4 font-semibold w-16">Sort</th>
                    <th class="px-6 py-4 font-semibold">Avatar</th>
                    <th class="px-6 py-4 font-semibold">Client</th>
                    <th class="px-6 py-4 font-semibold">Domain</th>
                    <th class="px-6 py-4 font-semibold">Status</th>
                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse($testimonials as $testimonial)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4">{{ $testimonial->sort_order }}</td>
                    <td class="px-6 py-4">
                        @if($testimonial->avatar)
                            <img src="{{ Storage::url($testimonial->avatar) }}" class="h-10 w-10 rounded-full object-cover">
                        @else
                            <div class="h-10 w-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 font-bold">
                                {{ substr($testimonial->client_name, 0, 1) }}
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-medium text-slate-900">{{ $testimonial->client_name }}</div>
                        <div class="text-xs text-slate-500">{{ $testimonial->client_position }}{{ $testimonial->client_company ? ' - ' . $testimonial->client_company : '' }}</div>
                    </td>
                    <td class="px-6 py-4">
                        {{ $testimonial->domain ? $testimonial->domain->name : 'N/A' }}
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $testimonial->is_active ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800' }}">
                            {{ $testimonial->is_active ? 'Active' : 'Hidden' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-blue-600 hover:text-blue-800 font-medium mr-3">Edit</a>
                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-8 text-center text-slate-500">No testimonials found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
