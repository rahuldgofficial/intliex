<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class InquiryController extends Controller
{
    public function index(Request $request): View
    {
        $query = Inquiry::with('domain');

        if ($request->has('domain') && $request->domain !== '') {
            $query->where('domain_id', $request->domain);
        }

        if ($request->has('type') && $request->type !== '') {
            $query->where('type', $request->type);
        }

        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        if ($request->has('read') && $request->read !== '') {
            $query->where('is_read', $request->read === '1');
        }

        $inquiries = $query->latest()->paginate(20)->withQueryString();
        $domains = Domain::all();

        return view('admin.inquiries.index', compact('inquiries', 'domains'));
    }

    public function show(Inquiry $inquiry): View
    {
        $inquiry->load('domain');
        
        if (!$inquiry->is_read) {
            $inquiry->update(['is_read' => true]);
        }

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function markRead(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $inquiry->update(['is_read' => $request->has('is_read')]);
        return back()->with('success', 'Inquiry read status updated.');
    }

    public function updateStatus(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'string'],
        ]);

        $inquiry->update(['status' => $validated['status']]);
        return back()->with('success', 'Inquiry status updated.');
    }

    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->delete();
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted successfully.');
    }
}
