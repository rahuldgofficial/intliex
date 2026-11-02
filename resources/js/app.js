document.addEventListener('DOMContentLoaded', () => {
    // 1. Header Scroll Effect
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('is-scrolled', window.scrollY > 50);
        });
        // Initial check
        header.classList.toggle('is-scrolled', window.scrollY > 50);
    }

    // 2. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        const toggleMobileMenu = () => {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
            mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        };

        mobileMenuBtn.addEventListener('click', toggleMobileMenu);

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                toggleMobileMenu();
            }
        });
    }

    // Mobile Menu Accordion (Services)
    const mobileServicesBtn = document.getElementById('mobile-services-btn');
    const mobileServicesMenu = document.getElementById('mobile-services-menu');
    if (mobileServicesBtn && mobileServicesMenu) {
        mobileServicesBtn.addEventListener('click', () => {
            const isExpanded = mobileServicesBtn.getAttribute('aria-expanded') === 'true';
            mobileServicesBtn.setAttribute('aria-expanded', !isExpanded);
            mobileServicesMenu.classList.toggle('hidden');
        });
    }

    // 3. Mega Menu (Desktop)
    const servicesNavItem = document.getElementById('services-nav-item');
    const megaMenu = document.getElementById('mega-menu');
    let megaMenuTimeout;

    if (servicesNavItem && megaMenu) {
        const openMegaMenu = () => {
            clearTimeout(megaMenuTimeout);
            megaMenu.classList.remove('hidden');
            megaMenu.classList.add('opacity-100', 'translate-y-0');
            megaMenu.classList.remove('opacity-0', '-translate-y-2');
            servicesNavItem.setAttribute('aria-expanded', 'true');
        };

        const closeMegaMenu = () => {
            megaMenuTimeout = setTimeout(() => {
                megaMenu.classList.add('opacity-0', '-translate-y-2');
                megaMenu.classList.remove('opacity-100', 'translate-y-0');
                servicesNavItem.setAttribute('aria-expanded', 'false');
                setTimeout(() => {
                    megaMenu.classList.add('hidden');
                }, 150); // match transition duration
            }, 100);
        };

        servicesNavItem.addEventListener('mouseenter', openMegaMenu);
        servicesNavItem.addEventListener('mouseleave', closeMegaMenu);
        megaMenu.addEventListener('mouseenter', openMegaMenu);
        megaMenu.addEventListener('mouseleave', closeMegaMenu);
        
        // Focus management and accessibility
        servicesNavItem.querySelector('a')?.addEventListener('focus', openMegaMenu);

        // Close on click outside
        document.addEventListener('click', (e) => {
            if (!servicesNavItem.contains(e.target) && !megaMenu.contains(e.target)) {
                closeMegaMenu();
            }
        });

        // Close on escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !megaMenu.classList.contains('hidden')) {
                closeMegaMenu();
                servicesNavItem.querySelector('a')?.focus();
            }
        });
    }

    // 4. Scroll Animations (Intersection Observer)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const animateObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                animateObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('[data-animate]').forEach(el => animateObserver.observe(el));

    // 5. Accordion Component
    const accordions = document.querySelectorAll('.accordion');
    accordions.forEach(accordion => {
        const btn = accordion.querySelector('.accordion-btn');
        const content = accordion.querySelector('.accordion-content');
        
        if (btn && content) {
            btn.addEventListener('click', () => {
                const isOpen = accordion.classList.contains('is-open');
                
                // If single-open behavior is desired
                if (accordion.parentElement.hasAttribute('data-single-open')) {
                    const siblings = accordion.parentElement.querySelectorAll('.accordion.is-open');
                    siblings.forEach(sibling => {
                        if (sibling !== accordion) {
                            sibling.classList.remove('is-open');
                            sibling.querySelector('.accordion-btn').setAttribute('aria-expanded', 'false');
                            sibling.querySelector('.accordion-content').style.maxHeight = null;
                        }
                    });
                }

                if (isOpen) {
                    accordion.classList.remove('is-open');
                    btn.setAttribute('aria-expanded', 'false');
                    content.style.maxHeight = null;
                } else {
                    accordion.classList.add('is-open');
                    btn.setAttribute('aria-expanded', 'true');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    });

    

    // 7. Flash Toast Auto-dismiss
    const toast = document.getElementById('flash-toast');
    if (toast) {
        setTimeout(() => {
            toast.style.transition = 'all 0.3s ease';
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => toast.remove(), 300);
        }, 5000);
    }

    // 8. Stat Counter Animation
    const stats = document.querySelectorAll('.stat-number');
    
    if (stats.length > 0) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalValue = target.innerText;
                    const isPercentage = finalValue.includes('%');
                    const hasPlus = finalValue.includes('+');
                    const numValue = parseFloat(finalValue.replace(/[^0-9.]/g, ''));
                    
                    if (!isNaN(numValue)) {
                        let start = 0;
                        const duration = 2000;
                        const startTime = performance.now();
                        
                        const updateCounter = (currentTime) => {
                            const elapsed = currentTime - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            
                            // Easing function (easeOutExpo)
                            const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                            const currentVal = start + (numValue - start) * easeProgress;
                            
                            let displayVal = Math.floor(currentVal);
                            if (numValue % 1 !== 0) displayVal = currentVal.toFixed(1);
                            
                            target.innerText = `${displayVal}${isPercentage ? '%' : ''}${hasPlus ? '+' : ''}`;
                            
                            if (progress < 1) {
                                requestAnimationFrame(updateCounter);
                            } else {
                                target.innerText = finalValue; // Ensure exact final value
                            }
                        };
                        
                        requestAnimationFrame(updateCounter);
                        statsObserver.unobserve(target);
                    }
                }
            });
        }, observerOptions);
        
        stats.forEach(stat => statsObserver.observe(stat));
    }

    // 9. Form Validation
    const forms = document.querySelectorAll('form[data-validate]');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            // Reset errors
            form.querySelectorAll('.text-red-500.text-xs').forEach(el => el.remove());
            form.querySelectorAll('.border-red-500').forEach(el => el.classList.remove('border-red-500'));
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    const errorMsg = document.createElement('p');
                    errorMsg.className = 'text-red-500 text-xs mt-1';
                    errorMsg.innerText = 'This field is required.';
                    
                    if (field.nextElementSibling) {
                        field.parentNode.insertBefore(errorMsg, field.nextElementSibling);
                    } else {
                        field.parentNode.appendChild(errorMsg);
                    }
                } else if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    const errorMsg = document.createElement('p');
                    errorMsg.className = 'text-red-500 text-xs mt-1';
                    errorMsg.innerText = 'Please enter a valid email address.';
                    
                    if (field.nextElementSibling) {
                        field.parentNode.insertBefore(errorMsg, field.nextElementSibling);
                    } else {
                        field.parentNode.appendChild(errorMsg);
                    }
                }
            });
            
            if (!isValid) {
                e.preventDefault();
            } else {
                const submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Submitting...';
                }
            }
        });
        
        // Clear error on input
        form.querySelectorAll('input, textarea, select').forEach(field => {
            field.addEventListener('input', () => {
                field.classList.remove('border-red-500');
                const error = field.parentNode.querySelector('.text-red-500.text-xs');
                if (error) error.remove();
            });
        });
    });

    // 10. Hero Carousel
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('#carousel-dots button');
    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');
    
    if (slides.length > 0) {
        let currentSlide = 0;
        let slideInterval;
        const totalSlides = slides.length;

        const updateCarousel = (index) => {
            // Normalize index
            if (index < 0) currentSlide = totalSlides - 1;
            else if (index >= totalSlides) currentSlide = 0;
            else currentSlide = index;

            // Update slides
            slides.forEach((slide, i) => {
                if (i === currentSlide) {
                    slide.classList.remove('opacity-0', 'z-0');
                    slide.classList.add('opacity-100', 'z-10');
                } else {
                    slide.classList.remove('opacity-100', 'z-10');
                    slide.classList.add('opacity-0', 'z-0');
                }
            });

            // Update dots
            if (dots.length > 0) {
                dots.forEach((dot, i) => {
                    if (i === currentSlide) {
                        dot.classList.remove('bg-white/40', 'hover:bg-white/70');
                        dot.classList.add('bg-white');
                    } else {
                        dot.classList.remove('bg-white');
                        dot.classList.add('bg-white/40', 'hover:bg-white/70');
                    }
                });
            }
        };

        const nextSlide = () => updateCarousel(currentSlide + 1);
        const prevSlide = () => updateCarousel(currentSlide - 1);

        const startAutoPlay = () => {
            stopAutoPlay();
            slideInterval = setInterval(nextSlide, 5500);
        };

        const stopAutoPlay = () => {
            if (slideInterval) clearInterval(slideInterval);
        };

        // Event Listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                nextSlide();
                startAutoPlay(); // Reset timer
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                prevSlide();
                startAutoPlay(); // Reset timer
            });
        }

        if (dots.length > 0) {
            dots.forEach((dot, i) => {
                dot.addEventListener('click', (e) => {
                    e.preventDefault();
                    updateCarousel(i);
                    startAutoPlay(); // Reset timer
                });
            });
        }

        // Pause on hover
        const carouselContainer = document.getElementById('hero-carousel');
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopAutoPlay);
            carouselContainer.addEventListener('mouseleave', startAutoPlay);
            
            // Handle touch devices
            carouselContainer.addEventListener('touchstart', stopAutoPlay, {passive: true});
            carouselContainer.addEventListener('touchend', startAutoPlay, {passive: true});
        }

        // Initialize
        updateCarousel(0);
        startAutoPlay();
    }
});
