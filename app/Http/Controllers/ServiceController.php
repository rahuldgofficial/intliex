<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\View\View;

class ServiceController extends Controller
{


    public function show(Domain $domain): View
    {
        $domain->load(['services.serviceFeatures']);
        return view('pages.services.show', compact('domain'));
    }
}
