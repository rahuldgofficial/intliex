@extends('layouts.admin')

@section('title', 'Add Benefit')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-slate-900">Add Benefit</h1>
    <a href="{{ route('admin.benefits.index') }}" class="text-slate-500 hover:text-slate-700">Back to List</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 max-w-3xl">
    <form action="{{ route('admin.benefits.store') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Title</label>
            <input type="text" name="title" class="form-input w-full" required>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Description</label>
            <textarea name="description" rows="3" class="form-input w-full" required></textarea>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">SVG Icon Path (Optional)</label>
            <input type="text" name="icon" class="form-input w-full font-mono text-sm" placeholder='<path d="..." />'>
            <p class="text-xs text-slate-500 mt-1">Paste the inner &lt;path&gt; tag of an SVG icon (e.g. from Heroicons).</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" class="form-input w-full" value="0">
            </div>
            <div class="flex items-center mt-6">
                <input type="checkbox" name="is_active" id="is_active" class="rounded border-slate-300 text-brand-blue" checked>
                <label for="is_active" class="ml-2 text-sm text-slate-700">Active</label>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary px-6 py-2">Save Benefit</button>
        </div>
    </form>
@endsection
