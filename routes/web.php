<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\CaseStudyController as AdminCaseStudyController;
use App\Http\Controllers\Admin\JobPostingController as AdminJobPostingController;
use App\Http\Controllers\Admin\ApplicationController as AdminApplicationController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use App\Http\Controllers\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Middleware\AdminMiddleware;

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');
Route::get('/industries/{slug}', [IndustryController::class, 'show'])->name('industries.show');
Route::get('/services/{domain:slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case-studies.index');
Route::get('/case-studies/{caseStudy:slug}', [CaseStudyController::class, 'show'])->name('case-studies.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{blogCategory:slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/{blogPost:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');
Route::get('/careers/culture', [CareerController::class, 'culture'])->name('careers.culture');
Route::get('/careers/{jobPosting:slug}', [CareerController::class, 'show'])->name('careers.show');
Route::post('/careers/{jobPosting:slug}/apply', [CareerController::class, 'apply'])->name('careers.apply')->middleware('throttle:5,1');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit')->middleware('throttle:5,1');
Route::post('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter.subscribe')->middleware('throttle:5,1');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/cookie-policy', [PageController::class, 'cookiePolicy'])->name('cookie-policy');

// Sitemap & Robots
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post')->middleware('throttle:5,1');
    Route::get('/admin/forgot-password', [PasswordResetController::class, 'showForgotForm'])->name('password.request');
    Route::post('/admin/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email')->middleware('throttle:5,1');
    Route::get('/admin/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
    Route::post('/admin/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update')->middleware('throttle:5,1');
});
Route::post('/admin/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/clear-cache', function() {
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        return "All caches cleared successfully! You can now go back to the homepage.";
    })->name('clear-cache');
    
    Route::get('/link-storage', function() {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return "Storage link created successfully!";
    });

    Route::middleware(['role:editor'])->group(function () {
        Route::resource('blog', AdminBlogPostController::class);
        Route::resource('case-studies', AdminCaseStudyController::class);
        Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->except(['show']);
        Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class)->except(['show']);
        
        Route::get('inquiries', [AdminInquiryController::class, 'index'])->name('inquiries.index');
        Route::get('inquiries/{inquiry}', [AdminInquiryController::class, 'show'])->name('inquiries.show');
        Route::patch('inquiries/{inquiry}/read', [AdminInquiryController::class, 'markRead'])->name('inquiries.read');
        Route::patch('inquiries/{inquiry}/status', [AdminInquiryController::class, 'updateStatus'])->name('inquiries.status');
        Route::delete('inquiries/{inquiry}', [AdminInquiryController::class, 'destroy'])->name('inquiries.destroy');
        
        Route::get('subscribers', [\App\Http\Controllers\Admin\SubscriberController::class, 'index'])->name('subscribers.index');
        Route::delete('subscribers/{subscriber}', [\App\Http\Controllers\Admin\SubscriberController::class, 'destroy'])->name('subscribers.destroy');
        
        Route::resource('media', AdminMediaController::class)->only(['index', 'store', 'destroy']);
    });

    Route::middleware(['role:hr'])->group(function () {
        Route::resource('careers', AdminJobPostingController::class);
        Route::resource('team-members', \App\Http\Controllers\Admin\TeamMemberController::class);
        Route::resource('benefits', \App\Http\Controllers\Admin\BenefitController::class);
        
        Route::get('applications', [AdminApplicationController::class, 'index'])->name('applications.index');
        Route::get('applications/{application}', [AdminApplicationController::class, 'show'])->name('applications.show');
        Route::patch('applications/{application}/status', [AdminApplicationController::class, 'updateStatus'])->name('applications.status');
        Route::patch('applications/{application}/notes', [AdminApplicationController::class, 'updateNotes'])->name('applications.notes');
        Route::delete('applications/{application}', [AdminApplicationController::class, 'destroy'])->name('applications.destroy');
        Route::get('applications/{application}/resume', [AdminApplicationController::class, 'downloadResume'])->name('applications.resume');
    });

    Route::middleware([\App\Http\Middleware\EnsureCanAccessSettings::class])->group(function () {
        Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
        Route::resource('accounts', \App\Http\Controllers\Admin\AccountController::class)->except(['show']);
    });
});
