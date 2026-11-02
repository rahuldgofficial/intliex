@extends('layouts.admin')

@section('title', 'Settings')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-900">General Settings</h1>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 max-w-3xl">
    <h2 class="text-lg font-semibold text-slate-900 mb-4 border-b border-slate-100 pb-2">Contact Information</h2>
    
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        
        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Global Headquarters Address</label>
            <textarea name="contact_address" rows="2" class="form-input w-full" required>{{ $settings['contact_address'] }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Contact Email</label>
                <input type="email" name="contact_email" class="form-input w-full" value="{{ $settings['contact_email'] }}" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Contact Phone</label>
                <input type="text" name="contact_phone" class="form-input w-full" value="{{ $settings['contact_phone'] }}" required>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">WhatsApp Number</label>
                <input type="text" name="whatsapp_number" class="form-input w-full" value="{{ $settings['whatsapp_number'] ?? '+880 1234-567890' }}" placeholder="+880 1234-567890">
                <p class="text-xs text-slate-500 mt-1">Used for the floating WhatsApp click-to-chat button. Supports formatting like +880 1234-567890 or plain digits.</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Business Hours</label>
                <input type="text" name="contact_hours" class="form-input w-full" value="{{ $settings['contact_hours'] ?? 'Sun-Thu: 9:00 AM - 6:00 PM (BDT)' }}" required>
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 mb-1">Google Maps Query</label>
            <input type="text" name="contact_map_query" class="form-input w-full" value="{{ $settings['contact_map_query'] }}" required>
            <p class="text-xs text-slate-500 mt-1">This is the search query used for the Google Maps iframe and "Get Directions" link (e.g., "Block C House 111 Road 8 Dhaka Banani").</p>
        </div>

        <h2 class="text-lg font-semibold text-slate-900 mb-4 border-b border-slate-100 pb-2 mt-8">Social Media Links</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">LinkedIn URL</label>
                <input type="url" name="social_linkedin" class="form-input w-full" value="{{ $settings['social_linkedin'] }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Twitter / X URL</label>
                <input type="url" name="social_twitter" class="form-input w-full" value="{{ $settings['social_twitter'] }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Facebook URL</label>
                <input type="url" name="social_facebook" class="form-input w-full" value="{{ $settings['social_facebook'] }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Instagram URL</label>
                <input type="url" name="social_instagram" class="form-input w-full" value="{{ $settings['social_instagram'] }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">TikTok URL</label>
                <input type="url" name="social_tiktok" class="form-input w-full" value="{{ $settings['social_tiktok'] }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">YouTube URL</label>
                <input type="url" name="social_youtube" class="form-input w-full" value="{{ $settings['social_youtube'] ?? '' }}">
            </div>
        </div>

        <div class="flex justify-end pt-4 border-t border-slate-100">
            <button type="submit" class="btn btn-primary px-6 py-2">Save Settings</button>
        </div>
    </form>
</div>
@endsection
