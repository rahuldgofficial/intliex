@extends('layouts.app')

@section('meta_title', 'IntliEx — Enterprise Software, AI, Networking, Automation & Cloud Solutions')
@section('meta_description', 'IntliEx is a multi-domain technology company delivering enterprise-grade solutions across ERP & Softwares, Artificial Intelligence, Networking, Industrial Automation, and Cloud Services.')
@section('og_title', 'IntliEx - Enterprise Software, AI, Networking, Automation & Cloud Solutions')
@section('og_description', 'IntliEx is a multi-domain technology company delivering enterprise-grade solutions across ERP & Softwares, Artificial Intelligence, Networking, Industrial Automation, and Cloud Services.')
@section('og_image', asset('images/IntliEx_Logo_Web_Header.webp'))

@section('content')

{{-- 1. Hero Section --}}
@include('partials.hero-carousel')

{{-- 2. Domain Showcase Section --}}
<section class="py-16 lg:py-20 bg-gray-50 dark:bg-gray-900" id="domains">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12" data-animate>
            <span class="section-label mb-3 inline-block">WHAT WE DO</span>
            <h2 class="section-title mb-4 !text-gray-900 dark:!text-white">Five Domains, One Technology Partner</h2>
            <p class="section-subtitle mx-auto">From software engineering to factory-floor automation, we deliver end-to-end solutions that drive business transformation.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 xl:gap-8">
            @if(isset($domains) && $domains->count() > 0)
                @foreach($domains as $domain)
                    <a href="{{ url('/services/' . $domain->slug) }}" class="domain-card group bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full transform hover:-translate-y-2 border border-gray-100 dark:border-gray-700" data-domain="{{ $domain->slug }}" data-animate>
                        <div class="h-2 w-full transition-colors duration-300
                            @if($domain->slug == 'software') bg-blue-500
                            @elseif($domain->slug == 'ai') bg-violet-500
                            @elseif($domain->slug == 'networking') bg-cyan-500
                            @elseif($domain->slug == 'automation') bg-amber-500
                            @elseif($domain->slug == 'cloud') bg-emerald-500
                            @else bg-brand-500 @endif
                        "></div>
                        <div class="p-6 xl:p-8 flex-grow flex flex-col">
                            <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-200 group-hover:scale-110 transition-transform duration-300
                                @if($domain->slug == 'software') group-hover:text-blue-500 group-hover:bg-blue-50 dark:group-hover:bg-blue-900/20
                                @elseif($domain->slug == 'ai') group-hover:text-violet-500 group-hover:bg-violet-50 dark:group-hover:bg-violet-900/20
                                @elseif($domain->slug == 'networking') group-hover:text-cyan-500 group-hover:bg-cyan-50 dark:group-hover:bg-cyan-900/20
                                @elseif($domain->slug == 'automation') group-hover:text-amber-500 group-hover:bg-amber-50 dark:group-hover:bg-amber-900/20
                                @elseif($domain->slug == 'cloud') group-hover:text-emerald-500 group-hover:bg-emerald-50 dark:group-hover:bg-emerald-900/20
                                @endif
                            ">
                                @if(view()->exists('partials.domain-icon'))
                                    @include('partials.domain-icon', ['slug' => $domain->slug])
                                @else
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                @endif
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">{{ $domain->name }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 flex-grow">{{ $domain->tagline ?? 'Enterprise solutions tailored to your business needs.' }}</p>
                            <div class="mt-auto flex items-center font-semibold text-sm
                                @if($domain->slug == 'software') text-blue-600 dark:text-blue-400
                                @elseif($domain->slug == 'ai') text-violet-600 dark:text-violet-400
                                @elseif($domain->slug == 'networking') text-cyan-600 dark:text-cyan-400
                                @elseif($domain->slug == 'automation') text-amber-600 dark:text-amber-400
                                @elseif($domain->slug == 'cloud') text-emerald-600 dark:text-emerald-400
                                @else text-brand-600 dark:text-brand-400 @endif
                            ">
                                Learn More
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                {{-- Fallback if no domains --}}
                <div class="col-span-full text-center text-gray-500 py-10">Domain information is currently unavailable.</div>
            @endif
        </div>
    </div>
</section>

{{-- 4. Services Showcase --}}
@include('partials.services-showcase')

{{-- 5. Why Businesses Choose Us --}}
@include('partials.why-choose-us')

{{-- 6. Our Clients --}}
@include('partials.our-clients')

{{-- 7. Testimonials Section --}}
<section class="py-20 lg:py-28 bg-gray-50 dark:bg-gray-900" id="testimonials">
    <div class="container-site mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-animate>
            <span class="section-label mb-3 inline-block">CLIENT FEEDBACK</span>
            <h2 class="section-title mb-4 !text-gray-900 dark:!text-white">What Our Clients Say</h2>
            <p class="section-subtitle mx-auto">Hear how we've helped enterprises transform their operations across software, AI, networks, and cloud.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
              @php
                  $colorScheme = match($loop->index % 3) {
                      0 => ['text' => 'text-blue-500', 'bg' => 'bg-blue-100 dark:bg-blue-900/30', 'textDark' => 'text-blue-600 dark:text-blue-400', 'pillBg' => 'bg-blue-50 dark:bg-blue-900/20'],
                      1 => ['text' => 'text-emerald-500', 'bg' => 'bg-emerald-100 dark:bg-emerald-900/30', 'textDark' => 'text-emerald-600 dark:text-emerald-400', 'pillBg' => 'bg-emerald-50 dark:bg-emerald-900/20'],
                      2 => ['text' => 'text-amber-500', 'bg' => 'bg-amber-100 dark:bg-amber-900/30', 'textDark' => 'text-amber-600 dark:text-amber-400', 'pillBg' => 'bg-amber-50 dark:bg-amber-900/20'],
                  };
              @endphp
              <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm border border-gray-100 dark:border-gray-700 relative flex flex-col h-full" data-animate>
                  <div class="{{ $colorScheme['text'] }} mb-6 flex-shrink-0">
                      <svg class="h-8 w-8 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                  </div>
                  <p class="text-gray-700 dark:text-gray-300 mb-6 text-lg flex-grow line-clamp-4">"{{ $testimonial->quote }}"</p>
                  <div class="flex items-center mt-auto flex-shrink-0">
                      @if($testimonial->avatar)
                          <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-12 h-12 rounded-full object-cover mr-4 border-2 border-white" loading="lazy" decoding="async">
                      @else
                          <div class="w-12 h-12 {{ $colorScheme['bg'] }} rounded-full flex items-center justify-center {{ $colorScheme['textDark'] }} font-bold text-lg mr-4">{{ substr($testimonial->client_name, 0, 1) }}</div>
                      @endif
                      <div>
                          <h4 class="font-bold text-gray-900 dark:text-white text-sm">{{ $testimonial->client_name }}</h4>
                          <p class="text-xs text-gray-500 dark:text-gray-400">{{ $testimonial->client_position }}{{ $testimonial->client_company ? ', ' . $testimonial->client_company : '' }}</p>
                      </div>
                  </div>
                  @if($testimonial->domain)
                  <div class="absolute top-8 right-8">
                      <span class="px-2.5 py-1 {{ $colorScheme['pillBg'] }} {{ $colorScheme['textDark'] }} text-xs font-bold rounded">{{ $testimonial->domain->name }}</span>
                  </div>
                  @endif
              </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. CTA Section --}}
<section class="relative py-20 lg:py-28 overflow-hidden bg-gradient-to-br from-brand-600 to-brand-800">
    {{-- Decorative background --}}
    <div class="absolute inset-0 opacity-10">
        <svg class="absolute left-0 top-0 h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="url(#cta-grad)" />
            <defs>
                <linearGradient id="cta-grad" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="white" />
                    <stop offset="100%" stop-color="transparent" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    
    <div class="container-site relative z-10 mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl text-brand-100 max-w-2xl mx-auto mb-10">Let's discuss how IntliEx can solve your technology challenges across any domain.</p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ url('/contact') }}" class="btn btn-white w-full sm:w-auto text-brand-900 px-8 py-4 text-lg">
                Get in Touch
            </a>
            <a href="{{ url('/services/software') }}" class="btn bg-transparent text-white border border-white hover:bg-white/10 w-full sm:w-auto px-8 py-4 text-lg transition-colors">
                Explore ERP & Softwares
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Simple intersection observer for scroll animations
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = 1;
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-animate]').forEach((el) => {
            el.style.opacity = 0;
            observer.observe(el);
        });

        // Hero Carousel Logic
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('#carousel-dots button');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        
        if (slides.length > 0) {
            let currentSlide = 0;
            let slideInterval;
            
            const showSlide = (index) => {
                slides.forEach((slide, i) => {
                    slide.style.opacity = i === index ? '1' : '0';
                    slide.style.zIndex = i === index ? '10' : '0';
                });
                
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.remove('bg-white/40');
                        dot.classList.add('bg-white');
                    } else {
                        dot.classList.add('bg-white/40');
                        dot.classList.remove('bg-white');
                    }
                });
                
                currentSlide = index;
            };
            
            const nextSlide = () => {
                showSlide((currentSlide + 1) % slides.length);
            };
            
            const prevSlide = () => {
                showSlide((currentSlide - 1 + slides.length) % slides.length);
            };
            
            const startSlideShow = () => {
                slideInterval = setInterval(nextSlide, 6000);
            };
            
            const stopSlideShow = () => {
                clearInterval(slideInterval);
            };
            
            prevBtn.addEventListener('click', () => {
                prevSlide();
                stopSlideShow();
                startSlideShow();
            });
            
            nextBtn.addEventListener('click', () => {
                nextSlide();
                stopSlideShow();
                startSlideShow();
            });
            
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                    stopSlideShow();
                    startSlideShow();
                });
            });
            
            const carouselSection = document.getElementById('hero-carousel');
            carouselSection.addEventListener('mouseenter', stopSlideShow);
            carouselSection.addEventListener('mouseleave', startSlideShow);
            
            // Initialize
            showSlide(0);
            startSlideShow();
        }
    });
</script>
@endpush


