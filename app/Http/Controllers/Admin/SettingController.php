<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'contact_address' => Setting::get('contact_address', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh'),
            'contact_email' => Setting::get('contact_email', 'info@intliex.com'),
            'contact_phone' => Setting::get('contact_phone', '+880 1234-567890'),
            'whatsapp_number' => Setting::get('whatsapp_number', '+8801355414646'),
            'contact_hours' => Setting::get('contact_hours', 'Sun-Thu: 9:00 AM - 6:00 PM (BDT)'),
            'contact_map_query' => Setting::get('contact_map_query', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh'),
            'social_linkedin' => Setting::get('social_linkedin', 'https://linkedin.com/company/intliex'),
            'social_twitter' => Setting::get('social_twitter', 'https://twitter.com/intliex'),
            'social_facebook' => Setting::get('social_facebook', 'https://facebook.com/intliex'),
            'social_instagram' => Setting::get('social_instagram', 'https://instagram.com/intliex'),
            'social_tiktok' => Setting::get('social_tiktok', 'https://tiktok.com/@intliex'),
            'social_youtube' => Setting::get('social_youtube', 'https://youtube.com/@intliex'),
        ];
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'contact_address' => 'required|string',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
            'whatsapp_number' => 'nullable|string',
            'contact_hours' => 'required|string',
            'contact_map_query' => 'required|string',
            'social_linkedin' => 'nullable|url',
            'social_twitter' => 'nullable|url',
            'social_facebook' => 'nullable|url',
            'social_instagram' => 'nullable|url',
            'social_tiktok' => 'nullable|url',
            'social_youtube' => 'nullable|url',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
