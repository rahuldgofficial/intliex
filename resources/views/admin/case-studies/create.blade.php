@extends('layouts.admin')

@section('content')
<div class="mb-8">
        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Create Case Study ✨</h1>
    </div>

    <div class="bg-white p-5 shadow-lg rounded-sm border border-slate-200">
        <form action="{{ route('admin.case-studies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-5 md:grid-cols-2">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="title">Title <span class="text-rose-500">*</span></label>
                    <input id="title" name="title" class="form-input w-full" type="text" value="{{ old('title') }}" required />
                    @error('title')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1" for="domain_id">Domain <span class="text-rose-500">*</span></label>
                    <select id="domain_id" name="domain_id" class="form-select w-full" required>
                        <option value="">Select Domain...</option>
                        @foreach($domains as $domain)
                            <option value="{{ $domain->id }}" @selected(old('domain_id') == $domain->id)>{{ $domain->name }}</option>
                        @endforeach
                    </select>
                    @error('domain_id')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="client">Client Name</label>
                    <input id="client" name="client" class="form-input w-full" type="text" value="{{ old('client') }}" />
                    @error('client')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="featured_image">Featured Image</label>
                    <input id="featured_image" name="featured_image" class="w-full text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" type="file" accept="image/*" />
                    @error('featured_image')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div class="md:col-span-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_featured" value="1" class="form-checkbox" @checked(old('is_featured')) />
                        <span class="text-sm ml-2">Is Featured</span>
                    </label>
                    @error('is_featured')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" class="form-checkbox" @checked(old('is_active', true)) />
                        <span class="text-sm ml-2">Is Active</span>
                    </label>
                    @error('is_active')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="challenge">Challenge <span class="text-rose-500">*</span></label>
                    <textarea id="challenge" name="challenge" class="form-textarea w-full" rows="4" required>{{ old('challenge') }}</textarea>
                    @error('challenge')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="solution">Solution <span class="text-rose-500">*</span></label>
                    <textarea id="solution" name="solution" class="form-textarea w-full" rows="4" required>{{ old('solution') }}</textarea>
                    @error('solution')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="results">Results</label>
                    <textarea id="results" name="results" class="form-textarea w-full" rows="4">{{ old('results') }}</textarea>
                    @error('results')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <a href="{{ route('admin.case-studies.index') }}" class="btn border-slate-200 hover:border-slate-300 text-slate-600">Cancel</a>
                <button type="submit" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">Create Case Study</button>
            </div>
        </form>
    @endsection

