<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\CaseStudy;
use App\Models\Domain;
use App\Models\JobPosting;
use App\Models\BlogCategory;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $domains = Domain::where('is_active', true)->get();
        $posts = BlogPost::where('status', 'published')->get();
        $categories = BlogCategory::all();
        $caseStudies = CaseStudy::where('is_active', true)->get();
        $jobs = JobPosting::where('is_active', true)->get();

        $staticPages = [
            '/',
            '/about',
            '/contact',
            '/privacy-policy',
            '/terms-of-service',
            '/cookie-policy',
            '/blog',
            '/case-studies',
            '/careers',
            '/industries'
        ];

        $industrySlugs = [
            'manufacturing', 'healthcare', 'retail-ecommerce', 'finance-banking',
            'logistics-supply-chain', 'energy-utilities', 'education', 
            'hospitality-travel', 'real-estate', 'construction-engineering'
        ];

        $content = view('sitemap', compact(
            'domains', 'posts', 'categories', 'caseStudies', 'jobs', 
            'staticPages', 'industrySlugs'
        ))->render();
        
        return response($content)->header('Content-Type', 'text/xml');
    }
}
