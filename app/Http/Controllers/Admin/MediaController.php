<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index(): View
    {
        $mediaItems = Media::latest()->paginate(24);
        return view('admin.media.index', compact('mediaItems'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:jpg,jpeg,png,gif,svg,webp,pdf,doc,docx', 'max:10240'],
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $mimeType = $file->getMimeType();
        $size = $file->getSize();

        $path = $file->store('media', 'public');

        Media::create([
            'filename' => $originalName,
            'path' => $path,
            'mime_type' => $mimeType,
            'size' => $size,
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }

    public function destroy(Media $medium): RedirectResponse
    {
        if (Storage::disk('public')->exists($medium->path)) {
            Storage::disk('public')->delete($medium->path);
        }

        $medium->delete();
        return back()->with('success', 'File deleted successfully.');
    }
}
