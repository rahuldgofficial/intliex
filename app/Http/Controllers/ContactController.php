<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Domain;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function index(): View
    {
        $domains = Domain::where('is_active', true)->get();
        return view('pages.contact', compact('domains'));
    }

    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'company' => ['nullable', 'string', 'max:200'],
            'domain_id' => ['nullable', 'exists:domains,id'],
            'type' => ['required', 'in:general,quote,support,domain-specific'],
            'message' => ['required', 'string', 'max:5000'],
            'g-recaptcha-response' => ['nullable', 'string'],
        ]);

        Inquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company' => $validated['company'],
            'domain_id' => $validated['domain_id'],
            'type' => $validated['type'],
            'message' => $validated['message'],
            'is_read' => false,
            'status' => 'new',
        ]);

        return back()->with('success', 'Your message has been sent successfully. We will get back to you soon.');
    }

    public function newsletter(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        NewsletterSubscriber::updateOrCreate(
            ['email' => $validated['email']],
            ['is_active' => true]
        );

        return back()->with('success', 'You have successfully subscribed to our newsletter.');
    }
}
