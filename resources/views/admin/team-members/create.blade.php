@extends('layouts.admin')

@section('title', 'Add Team Member')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-slate-900">Add Team Member</h1>
    <a href="{{ route('admin.team-members.index') }}" class="text-slate-500 hover:text-slate-700">Back to List</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
    <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Name</label>
                <input type="text" name="name" class="form-input" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Position</label>
                <input type="text" name="position" class="form-input" required>
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Photo (Optional)</label>
            <input type="file" name="photo" class="form-input" accept="image/*">
            <p class="text-xs text-slate-500 mt-1">Recommended: 4:5 aspect ratio (e.g. 800x1000px). Uploads will be automatically converted to WebP and cropped to fit.</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Bio (Optional)</label>
            <textarea name="bio" rows="4" class="form-input"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" class="form-input" value="0">
            </div>
            <div class="flex items-center mt-6">
                <input type="checkbox" name="is_active" id="is_active" value="1" class="rounded border-slate-300 text-brand-blue" checked>
                <label for="is_active" class="ml-2 text-sm text-slate-700">Active</label>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary px-6 py-2">Save Member</button>
        </div>
    </form>
@endsection

