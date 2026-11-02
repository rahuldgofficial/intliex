@extends('layouts.app')

@section('title', $job->title . ' - Careers at IntliEx')
@section('meta_description', strip_tags(Str::limit($job->description ?? '', 150)))

@section('content')
<div class="section pt-32 pb-16 bg-slate-50">
    <div class="container-site max-w-5xl mx-auto">
        <!-- Breadcrumbs -->
        <nav class="text-sm font-medium mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-slate-500">
                <li><a href="{{ route('home') }}" class="hover:text-brand-navy transition-colors focus:outline-none focus:underline rounded">Home</a></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></li>
                <li><a href="{{ route('careers.index') }}" class="hover:text-brand-navy transition-colors focus:outline-none focus:underline rounded">Careers</a></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></li>
                <li class="text-slate-900 truncate" aria-current="page">{{ $job->title }}</li>
            </ol>
        </nav>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
            <!-- Job Header -->
            <div class="p-8 md:p-12 border-b border-slate-100 bg-gradient-to-br from-white to-slate-50">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-8">
                    <div>
                        <div class="mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-brand-blue/10 text-brand-blue">
                                {{ $job->domain->name ?? 'Engineering' }}
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">{{ $job->title }}</h1>
                        
                        <div class="flex flex-wrap gap-y-4 gap-x-8 text-slate-600 font-medium">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                {{ $job->location ?? 'San Francisco, CA' }}
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                {{ ucfirst(str_replace('-', ' ', $job->type ?? 'full-time')) }}
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                {{ ucfirst($job->work_mode ?? 'remote') }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-shrink-0">
                        <a href="#apply-form" class="btn btn-primary w-full sm:w-auto justify-center text-lg px-8 py-4 shadow-lg shadow-brand-blue/30">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job Body & Form Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 divide-y lg:divide-y-0 lg:divide-x divide-slate-100">
                
                <!-- Description -->
                <div class="lg:col-span-7 p-8 md:p-12">
                    <div class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-a:text-brand-blue">
                        <h2>About the Role</h2>
                        {!! $job->description ?? '<p>Description goes here.</p>' !!}
                        
                        <h2>Requirements</h2>
                        {!! $job->requirements ?? '<ul><li>Requirement 1</li></ul>' !!}
                        
                        <h2>What We Offer</h2>
                        {!! $job->benefits ?? '<ul><li>Competitive salary</li><li>Health insurance</li></ul>' !!}
                    </div>
                    
                    <div class="mt-12 pt-8 border-t border-slate-100 flex items-center justify-between text-sm text-slate-500">
                        <span>Posted on {{ isset($job->created_at) ? $job->created_at->format('M d, Y') : 'Recently' }}</span>
                        <div class="flex items-center">
                            <button type="button" onclick="navigator.clipboard.writeText(window.location.href); this.innerHTML = '<svg class=\'h-4 w-4 mr-1.5\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M5 13l4 4L19 7\'/></svg>Copied!'; setTimeout(() => { this.innerHTML = '<svg class=\'h-4 w-4 mr-1.5\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1\'/></svg>Copy Link' }, 2000)" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-slate-600 bg-white border border-slate-300 rounded hover:bg-slate-50 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                <svg class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                                Copy Link
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Application Form -->
                <div id="apply-form" class="lg:col-span-5 p-8 md:p-12 bg-slate-50">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Submit Your Application</h3>
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-md bg-green-50 border border-green-200">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('careers.apply', $job->slug ?? 'dummy') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        
                        <div>
                            <label for="name" class="form-label">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" required class="form-input w-full" value="{{ old('name') }}">
                            @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="email" class="form-label">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" required class="form-input w-full" value="{{ old('email') }}">
                            @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-input w-full" value="{{ old('phone') }}">
                        </div>

                        <div>
                            <label for="linkedin" class="form-label">LinkedIn Profile URL</label>
                            <input type="url" name="linkedin" id="linkedin" class="form-input w-full" placeholder="https://linkedin.com/in/..." value="{{ old('linkedin') }}">
                        </div>

                        <div>
                            <label for="resume" class="form-label">Resume / CV <span class="text-red-500">*</span></label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg bg-white hover:bg-slate-50 transition-colors">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-slate-600 justify-center">
                                        <label for="resume" class="relative cursor-pointer bg-white rounded-md font-medium text-brand-blue hover:text-brand-navy focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-brand-blue">
                                            <span>Upload a file</span>
                                            <input id="resume" name="resume" type="file" class="sr-only" required accept=".pdf,.doc,.docx">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-slate-500">PDF, DOC up to 5MB</p>
                                </div>
                            </div>
                            @error('resume')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="cover_letter" class="form-label">Cover Letter / Message</label>
                            <textarea name="cover_letter" id="cover_letter" rows="4" class="form-input w-full resize-none">{{ old('cover_letter') }}</textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="btn btn-primary w-full justify-center">Submit Application</button>
                            <p class="text-xs text-center text-slate-500 mt-4">
                                By submitting, you agree to our <a href="{{ route('privacy-policy') }}" class="text-brand-blue hover:underline">Privacy Policy</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('schema')
@php
    $companyName = \App\Models\Setting::get('company_name', 'IntliEx');
    $addressStr = \App\Models\Setting::get('contact_address', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh');
@endphp
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "JobPosting",
  "title": "{{ $jobPosting->title }}",
  "description": "{{ strip_tags($jobPosting->description) }}",
  "identifier": {
    "@type": "PropertyValue",
    "name": "{{ $companyName }}",
    "value": "{{ $jobPosting->id }}"
  },
  "datePosted": "{{ $jobPosting->created_at->format('Y-m-d') }}",
  "validThrough": "{{ $jobPosting->created_at->addMonths(3)->format('Y-m-d') }}",
  "employmentType": "{{ strtoupper(str_replace('-', '_', $jobPosting->type)) }}",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "{{ $companyName }}",
    "sameAs": "{{ url('/') }}",
    "logo": "{{ asset('images/IntliEx_Logo_Web_Header.webp') }}"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "{{ $addressStr }}"
    }
  },
  "jobLocationType": "{{ $jobPosting->work_mode === 'remote' ? 'TELECOMMUTE' : '' }}"
}
</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Careers",
      "item": "{{ route('careers.index') }}"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $jobPosting->title }}",
      "item": "{{ url()->current() }}"
    }
  ]
}
</script>
@endpush


