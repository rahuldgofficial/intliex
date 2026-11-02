@extends('layouts.admin')

@section('title', 'Edit Benefit')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-slate-900">Edit Benefit</h1>
    <a href="{{ route('admin.benefits.index') }}" class="text-slate-500 hover:text-slate-700">Back to List</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 max-w-3xl">
    <form action="{{ route('admin.benefits.update', $benefit) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Title</label>
            <input type="text" name="title" class="form-input w-full" value="{{ $benefit->title }}" required>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Description</label>
            <textarea name="description" rows="3" class="form-input w-full" required>{{ $benefit->description }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">SVG Icon Path (Optional)</label>
            <input type="text" name="icon" class="form-input w-full font-mono text-sm" value="{{ $benefit->icon }}">
            <p class="text-xs text-slate-500 mt-1">Paste the inner &lt;path&gt; tag of an SVG icon (e.g. from Heroicons).</p>
            @if($benefit->icon)
            <div class="mt-3 p-3 bg-slate-50 border border-slate-200 rounded inline-block">
                <svg class="w-8 h-8 text-brand-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    {!! $benefit->icon !!}
                </svg>
            </div>
            @endif
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" class="form-input w-full" value="{{ $benefit->sort_order }}">
            </div>
            <div class="flex items-center mt-6">
                <input type="checkbox" name="is_active" id="is_active" class="rounded border-slate-300 text-brand-blue" {{ $benefit->is_active ? 'checked' : '' }}>
                <label for="is_active" class="ml-2 text-sm text-slate-700">Active</label>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary px-6 py-2">Update Benefit</button>
        </div>
    </form>
@endsection
