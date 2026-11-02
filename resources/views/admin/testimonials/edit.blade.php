@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Edit Testimonial</h1>
</div>

<div class="bg-white rounded-lg shadow-sm border border-slate-200 p-6 max-w-2xl w-full">
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Client Name *</label>
            <input type="text" name="client_name" class="form-input w-full" value="{{ old('client_name', $testimonial->client_name) }}" required>
            @error('client_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Client Position</label>
                <input type="text" name="client_position" class="form-input w-full" value="{{ old('client_position', $testimonial->client_position) }}">
                @error('client_position')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Client Company</label>
                <input type="text" name="client_company" class="form-input w-full" value="{{ old('client_company', $testimonial->client_company) }}">
                @error('client_company')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Quote *</label>
            <textarea name="quote" rows="4" class="form-input w-full" required>{{ old('quote', $testimonial->quote) }}</textarea>
            @error('quote')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Domain / Category</label>
            <select name="domain_id" class="form-input w-full">
                <option value="">None</option>
                @foreach($domains as $domain)
                    <option value="{{ $domain->id }}" {{ old('domain_id', $testimonial->domain_id) == $domain->id ? 'selected' : '' }}>{{ $domain->name }}</option>
                @endforeach
            </select>
            @error('domain_id')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Avatar Image</label>
            @if($testimonial->avatar)
                <div class="mb-3">
                    <img src="{{ Storage::url($testimonial->avatar) }}" class="h-16 w-16 rounded-full object-cover border border-slate-200">
                </div>
            @endif
            <input type="file" name="avatar" class="form-input w-full" accept="image/*">
            <p class="text-xs text-slate-500 mt-1">Leave empty to keep existing avatar.</p>
            @error('avatar')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" class="form-input w-full" value="{{ old('sort_order', $testimonial->sort_order) }}" required>
            </div>
            <div class="pt-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" class="form-checkbox" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                    <span class="ml-2 text-sm text-slate-700">Active (Visible)</span>
                </label>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary px-4 py-2">Update Testimonial</button>
            <a href="{{ route('admin.testimonials.index') }}" class="text-slate-500 hover:text-slate-700">Cancel</a>
        </div>
    </form>
</div>
@endsection
