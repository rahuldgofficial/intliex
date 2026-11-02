<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\BlogPost;
use App\Models\CaseStudy;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $domains = Domain::where('is_active', true)->with(['services' => function($q) {
            $q->where('is_active', true)->take(3);
        }])->take(5)->get();
        $latestPosts = BlogPost::published()->latest()->take(3)->get();
        $featuredCaseStudies = CaseStudy::where('is_featured', true)->latest()->take(3)->get();

        $partners = \App\Models\Partner::active()->orderBy('sort_order')->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->orderBy('sort_order')->get();

        return view('pages.home', compact('domains', 'latestPosts', 'featuredCaseStudies', 'partners', 'testimonials'));
    }

    public function about(): View
    {
        $teamMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.about', compact('teamMembers'));
    }

    public function privacyPolicy(): View
    {
        return view('pages.legal.privacy-policy');
    }

    public function termsOfService(): View
    {
        return view('pages.legal.terms-of-service');
    }

    public function cookiePolicy(): View
    {
        return view('pages.legal.cookie-policy');
    }
}
