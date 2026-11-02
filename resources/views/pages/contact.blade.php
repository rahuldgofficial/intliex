@extends('layouts.app')

@section('title', 'Contact Us - IntliEx')
@section('meta_description', 'Get in touch with IntliEx experts for enterprise software, AI, networking, industrial automation, and cloud services.')

@section('content')
<div class="section pt-32 pb-20 bg-slate-50">
    <div class="container-site">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Let's Build the Future</h1>
            <p class="text-xl text-slate-600">Reach out to discuss your enterprise challenges. Our team of experts is ready to architect your solution.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
            
            <!-- Contact Form -->
            <div class="lg:col-span-7 p-8 md:p-12 order-2 lg:order-1">
                <h2 class="text-2xl font-bold text-slate-900 mb-6">Send us a message</h2>
                
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

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="form-label">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" required class="form-input w-full" value="{{ old('name') }}">
                            @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" name="company" id="company" class="form-input w-full" value="{{ old('company') }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="form-label">Work Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" required class="form-input w-full" value="{{ old('email') }}">
                            @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-input w-full" value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="type" class="form-label">How can we help? <span class="text-red-500">*</span></label>
                        <select name="type" id="type" required class="form-input w-full" onchange="toggleDomainSelect()">
                            <option value="" disabled selected>Select an option</option>
                            <option value="general" {{ old('type') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                            <option value="quote" {{ old('type') == 'quote' ? 'selected' : '' }}>Project Quote</option>
                            <option value="support" {{ old('type') == 'support' ? 'selected' : '' }}>Support Request</option>
                            <option value="domain-specific" {{ old('type') == 'domain-specific' ? 'selected' : '' }}>Domain-Specific Service</option>
                        </select>
                        @error('type')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <!-- Domain Select (Hidden by default) -->
                    <div id="domain_wrapper" class="mb-6 {{ old('type') == 'domain-specific' ? 'block' : 'hidden' }}">
                        <label for="domain_id" class="form-label">Select Domain Area</label>
                        <select name="domain_id" id="domain_id" class="form-input w-full">
                            <option value="">Select a domain</option>
                            @if(isset($domains))
                                @foreach($domains as $domain)
                                    <option value="{{ $domain->id }}" {{ old('domain_id') == $domain->id ? 'selected' : '' }}>{{ $domain->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div>
                        <label for="message" class="form-label">Message <span class="text-red-500">*</span></label>
                        <textarea name="message" id="message" rows="5" required class="form-input w-full resize-none placeholder-slate-400" placeholder="Tell us about your project, challenges, or requirements...">{{ old('message') }}</textarea>
                        @error('message')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="btn btn-primary w-full md:w-auto px-8">Send Message</button>
                    </div>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="lg:col-span-5 bg-brand-navy p-8 md:p-12 text-white order-1 lg:order-2 relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 w-64 h-64 bg-brand-blue/20 rounded-full blur-3xl -mr-20 -mt-20 pointer-events-none"></div>
                
                <div class="relative z-10 flex-grow">
                    <h3 class="text-2xl font-bold mb-8">Contact Information</h3>
                    
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 mr-4 mt-1 text-brand-cyan flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <div>
                                <h4 class="font-semibold text-lg">Global Headquarters</h4>
                                <p class="text-slate-300 mt-1">{!! nl2br(e(\App\Models\Setting::get('contact_address', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh'))) !!}</p>
                                <a href="https://maps.google.com/?q={{ urlencode(\App\Models\Setting::get('contact_map_query', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh')) }}" target="_blank" rel="noopener" class="inline-block mt-2 text-sm text-brand-cyan hover:text-white transition-colors">Get Directions &rarr;</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 mr-4 mt-1 text-brand-cyan flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            <div>
                                <h4 class="font-semibold text-lg">Email Us</h4>
                                @php $emails = explode(',', \App\Models\Setting::get('contact_email', 'info@intliex.com')); @endphp
                                @foreach($emails as $email)
                                <a href="mailto:{{ trim($email) }}" class="text-slate-300 hover:text-white transition-colors mt-1 block">{{ trim($email) }}</a>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 mr-4 mt-1 text-brand-cyan flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            <div>
                                <h4 class="font-semibold text-lg">Call Us</h4>
                                <a href="tel:{{ preg_replace('/[^0-9+]/', '', \App\Models\Setting::get('contact_phone', '+880 1234-567890')) }}" class="text-slate-300 hover:text-white transition-colors mt-1 block">{{ \App\Models\Setting::get('contact_phone', '+880 1234-567890') }}</a>
                                <p class="text-sm text-slate-400 mt-1">{{ \App\Models\Setting::get('contact_hours', 'Sun-Thu: 9:00 AM - 6:00 PM (BDT)') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map embed -->
                <div class="mt-auto pt-6 border-t border-white/10 rounded-xl overflow-hidden h-48 w-full bg-slate-800 relative z-10">
                    <iframe src="https://maps.google.com/maps?q={{ urlencode(\App\Models\Setting::get('contact_map_query', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh')) }}&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Mini -->
<div class="section py-16 bg-white border-t border-slate-200">
    <div class="container-site max-w-4xl mx-auto text-center">
        <h3 class="text-2xl font-bold text-slate-900 mb-3">Stay Updated</h3>
        <p class="text-slate-600 mb-8">Subscribe to our enterprise technology insights and engineering blog.</p>
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row max-w-lg mx-auto gap-3">
            @csrf
            <label for="newsletter_email" class="sr-only">Email address</label>
            <input type="email" id="newsletter_email" name="email" required class="form-input flex-grow rounded-md" placeholder="Enter your business email">
            <button type="submit" class="btn btn-secondary whitespace-nowrap">Subscribe</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function toggleDomainSelect() {
        const typeSelect = document.getElementById('type');
        const domainWrapper = document.getElementById('domain_wrapper');
        const domainSelect = document.getElementById('domain_id');
        
        if (typeSelect.value === 'domain-specific') {
            domainWrapper.classList.remove('hidden');
            domainWrapper.classList.add('block');

            domainSelect.setAttribute('required', 'required');
        } else {
            domainWrapper.classList.remove('block');
            domainWrapper.classList.add('hidden');
            domainSelect.removeAttribute('required');
            domainSelect.value = '';
        }
    }
</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "IntliEx",
  "image": "{{ asset('images/logo.webp') }}",
  "@id": "{{ url('/') }}",
  "url": "{{ url('/') }}",
  "telephone": "+18005550199",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "100 Enterprise Way, Suite 500",
    "addressLocality": "San Francisco",
    "addressRegion": "CA",
    "postalCode": "94105",
    "addressCountry": "US"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  }
}
</script>
@endpush
