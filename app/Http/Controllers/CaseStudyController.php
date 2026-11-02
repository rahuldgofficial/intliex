<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CaseStudyController extends Controller
{
    public function index(Request $request): View
    {
        $query = CaseStudy::with('domain')->where('is_active', true);

        if ($request->has('domain')) {
            $query->whereHas('domain', function ($q) use ($request) {
                $q->where('slug', $request->domain);
            });
        }

        $caseStudies = $query->latest()->paginate(9)->withQueryString();
        $domains = Domain::where('is_active', true)->get();

        return view('pages.case-studies.index', compact('caseStudies', 'domains'));
    }

    public function show(CaseStudy $caseStudy): View
    {
        if (!$caseStudy->is_active && (!auth()->check() || !auth()->user()->isAdmin())) {
            abort(404);
        }

        $caseStudy->load('domain');
        return view('pages.case-studies.show', compact('caseStudy'));
    }
}
