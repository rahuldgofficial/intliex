@extends('layouts.admin')

@section('title', 'Edit Team Member')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-slate-900">Edit Team Member</h1>
    <a href="{{ route('admin.team-members.index') }}" class="text-slate-500 hover:text-slate-700">Back to List</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
    <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Name</label>
                <input type="text" name="name" class="form-input" value="{{ $teamMember->name }}" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Position</label>
                <input type="text" name="position" class="form-input" value="{{ $teamMember->position }}" required>
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Photo (Optional)</label>
            @if($teamMember->photo)
                <div class="mb-3">
                    <img src="{{ asset('storage/'.$teamMember->photo) }}" class="w-20 h-20 rounded object-cover">
                </div>
            @endif
            <input type="file" name="photo" class="form-input" accept="image/*">
            <p class="text-xs text-slate-500 mt-1">Recommended: 4:5 aspect ratio (e.g. 800x1000px). Leave blank to keep current photo.</p>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Bio (Optional)</label>
            <textarea name="bio" rows="4" class="form-input">{{ $teamMember->bio }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" class="form-input" value="{{ $teamMember->sort_order }}">
            </div>
            <div class="flex items-center mt-6">
                <input type="checkbox" name="is_active" id="is_active" value="1" class="rounded border-slate-300 text-brand-blue" {{ $teamMember->is_active ? 'checked' : '' }}>
                <label for="is_active" class="ml-2 text-sm text-slate-700">Active</label>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary px-6 py-2">Update Member</button>
        </div>
    </form>
@endsection

