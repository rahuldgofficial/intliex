<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\JobApplication;
use App\Models\BlogPost;
use App\Models\JobPosting;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalInquiries = Inquiry::count();
        $unreadInquiries = Inquiry::where('is_read', false)->count();
        $totalApplications = JobApplication::count();
        $totalPosts = BlogPost::count();
        $totalJobs = JobPosting::count();

        $recentInquiries = Inquiry::latest()->take(5)->get();
        $recentApplications = JobApplication::with('jobPosting')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalInquiries', 'unreadInquiries', 'totalApplications', 'totalPosts', 'totalJobs',
            'recentInquiries', 'recentApplications'
        ));
    }
}
