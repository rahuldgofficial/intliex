@php
    $companyName = \App\Models\Setting::get('company_name', 'IntliEx');
    $address = \App\Models\Setting::get('contact_address', 'Block C House 111 Road 8 Dhaka Banani 1212, Bangladesh');
    $phone = \App\Models\Setting::get('contact_phone', '+880 1234-567890');
    $email = explode(',', \App\Models\Setting::get('contact_email', 'info@intliex.com'))[0];
    $hours = \App\Models\Setting::get('contact_hours', 'Sun-Thu: 9:00 AM - 6:00 PM (BDT)');
    
    // Process Socials
    $socials = [];
    $socialKeys = ['social_linkedin', 'social_facebook', 'social_twitter', 'social_instagram', 'social_tiktok', 'social_youtube'];
    $defaultSocials = [
        'social_linkedin' => 'https://linkedin.com/company/intliex',
        'social_facebook' => 'https://facebook.com/intliex',
        'social_twitter'  => 'https://twitter.com/intliex',
        'social_instagram'=> 'https://instagram.com/intliex',
        'social_tiktok'   => 'https://tiktok.com/@intliex',
        'social_youtube'  => 'https://youtube.com/@intliex',
    ];
    
    foreach ($socialKeys as $key) {
        $val = \App\Models\Setting::get($key, $defaultSocials[$key]);
        if ($val) {
            $socials[] = $val;
        }
    }
@endphp

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Organization",
      "@@id": "{{ url('/') }}#organization",
      "name": "{{ $companyName }}",
      "url": "{{ url('/') }}",
      "logo": {
        "@@type": "ImageObject",
        "url": "{{ asset('images/IntliEx_Logo_Web_Header.webp') }}"
      },
      "sameAs": @json($socials)
    },
    {
      "@@type": "LocalBusiness",
      "@@id": "{{ url('/') }}#localbusiness",
      "name": "{{ $companyName }}",
      "image": "{{ asset('images/IntliEx_Logo_Web_Header.webp') }}",
      "url": "{{ url('/') }}",
      "telephone": "{{ $phone }}",
      "email": "{{ trim($email) }}",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "{{ $address }}"
      },
      "openingHours": "{{ $hours }}"
    }
  ]
}
</script>
