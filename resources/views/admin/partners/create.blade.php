@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Add Partner</h1>
</div>

<div class="bg-white rounded-lg shadow-sm border border-slate-200 p-6 max-w-2xl w-full">
    <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Company Name *</label>
            <input type="text" name="name" class="form-input w-full" value="{{ old('name') }}" required>
            @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Logo Image</label>
            <input type="file" name="logo_path" class="form-input w-full" accept="image/*">
            <p class="text-xs text-slate-500 mt-1">Recommended format: Transparent PNG or SVG.</p>
            @error('logo_path')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" class="form-input w-full" value="{{ old('sort_order', 0) }}" required>
            </div>
            <div class="pt-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" class="form-checkbox" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span class="ml-2 text-sm text-slate-700">Active (Visible)</span>
                </label>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary px-4 py-2">Save Partner</button>
            <a href="{{ route('admin.partners.index') }}" class="text-slate-500 hover:text-slate-700">Cancel</a>
        </div>
    </form>
</div>
@endsection
