@extends('layouts.admin')

@section('content')
<div class="mb-8">
        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Create Blog Post ✨</h1>
    </div>

    <div class="bg-white p-5 shadow-lg rounded-sm border border-slate-200">
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-5 md:grid-cols-2">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="title">Title <span class="text-rose-500">*</span></label>
                    <input id="title" name="title" class="form-input w-full" type="text" value="{{ old('title') }}" required />
                    @error('title')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1" for="category_id">Category</label>
                    <select id="category_id" name="category_id" class="form-select w-full">
                        <option value="">Select Category...</option>
                        @foreach($categories ?? [] as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="status">Status</label>
                    <select id="status" name="status" class="form-select w-full">
                        <option value="draft" @selected(old('status') == 'draft')>Draft</option>
                        <option value="published" @selected(old('status') == 'published')>Published</option>
                    </select>
                    @error('status')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="featured_image">Featured Image</label>
                    <input id="featured_image" name="featured_image" class="w-full text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" type="file" accept="image/*" />
                    @error('featured_image')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1">Tags</label>
                    <div class="flex flex-wrap gap-2">
                        @foreach($tags ?? [] as $tag)
                            <label class="flex items-center">
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-checkbox" @checked(in_array($tag->id, old('tags', []))) />
                                <span class="text-sm ml-2">{{ $tag->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('tags')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="body">Body <span class="text-rose-500">*</span></label>
                    <textarea id="body" name="body" class="form-textarea w-full" rows="12" required>{{ old('body') }}</textarea>
                    @error('body')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <a href="{{ route('admin.blog.index') }}" class="btn border-slate-200 hover:border-slate-300 text-slate-600">Cancel</a>
                <button type="submit" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">Create Post</button>
            </div>
        </form>
    @endsection

