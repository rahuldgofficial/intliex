@extends('layouts.admin')

@section('content')
<div class="mb-8">
        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Edit Job Posting ✨</h1>
    </div>

    <div class="bg-white p-5 shadow-lg rounded-sm border border-slate-200">
        <form action="{{ route('admin.careers.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="grid gap-5 md:grid-cols-2">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="title">Job Title <span class="text-rose-500">*</span></label>
                    <input id="title" name="title" class="form-input w-full" type="text" value="{{ old('title', $job->title) }}" required />
                    @error('title')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1" for="domain_id">Domain <span class="text-rose-500">*</span></label>
                    <select id="domain_id" name="domain_id" class="form-select w-full" required>
                        <option value="">Select Domain...</option>
                        @foreach($domains as $domain)
                            <option value="{{ $domain->id }}" @selected(old('domain_id', $job->domain_id) == $domain->id)>{{ $domain->name }}</option>
                        @endforeach
                    </select>
                    @error('domain_id')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="location">Location</label>
                    <input id="location" name="location" class="form-input w-full" type="text" value="{{ old('location', $job->location) }}" placeholder="e.g. New York, NY" />
                    @error('location')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="type">Job Type</label>
                    <select id="type" name="type" class="form-select w-full">
                        <option value="Full-time" @selected(old('type', $job->type) == 'Full-time')>Full-time</option>
                        <option value="Part-time" @selected(old('type', $job->type) == 'Part-time')>Part-time</option>
                        <option value="Contract" @selected(old('type', $job->type) == 'Contract')>Contract</option>
                    </select>
                    @error('type')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="work_mode">Work Mode</label>
                    <select id="work_mode" name="work_mode" class="form-select w-full">
                        <option value="Remote" @selected(old('work_mode', $job->work_mode) == 'Remote')>Remote</option>
                        <option value="On-site" @selected(old('work_mode', $job->work_mode) == 'On-site')>On-site</option>
                        <option value="Hybrid" @selected(old('work_mode', $job->work_mode) == 'Hybrid')>Hybrid</option>
                    </select>
                    @error('work_mode')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1" for="salary_range">Salary Range</label>
                    <input id="salary_range" name="salary_range" class="form-input w-full" type="text" value="{{ old('salary_range', $job->salary_range) }}" placeholder="e.g. $100k - $120k" />
                    @error('salary_range')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" class="form-checkbox" @checked(old('is_active', $job->is_active)) />
                        <span class="text-sm ml-2">Is Active</span>
                    </label>
                    @error('is_active')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="description">Description <span class="text-rose-500">*</span></label>
                    <textarea id="description" name="description" class="form-textarea w-full" rows="6" required>{{ old('description', $job->description) }}</textarea>
                    @error('description')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="requirements">Requirements <span class="text-rose-500">*</span></label>
                    <textarea id="requirements" name="requirements" class="form-textarea w-full" rows="6" required>{{ old('requirements', $job->requirements) }}</textarea>
                    @error('requirements')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-1" for="benefits">Benefits</label>
                    <textarea id="benefits" name="benefits" class="form-textarea w-full" rows="6">{{ old('benefits', $job->benefits) }}</textarea>
                    @error('benefits')<div class="text-xs mt-1 text-rose-500">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <a href="{{ route('admin.careers.index') }}" class="btn border-slate-200 hover:border-slate-300 text-slate-600">Cancel</a>
                <button type="submit" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">Update Job</button>
            </div>
        </form>
    @endsection
