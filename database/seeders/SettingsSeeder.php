<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'company_name' => 'Intliex',
            'company_email' => 'info@intliex.com',
            'company_phone' => '+1 (555) 123-4567',
            'whatsapp_number' => '+8801355414646',
            'company_address' => '123 Technology Drive, Suite 400, San Francisco, CA 94105',
            'company_description' => 'A multi-domain technology company delivering enterprise software, artificial intelligence, networking, industrial automation, and cloud services to transform businesses globally.',
            'social_facebook' => 'https://facebook.com/intliex',
            'social_twitter' => 'https://twitter.com/intliex',
            'social_linkedin' => 'https://linkedin.com/company/intliex',
            'social_github' => 'https://github.com/intliex',
            'google_analytics_id' => '',
            'google_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.067332219747!2d-122.39566978438181!3d37.78849767975662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580646c24f5eb%3A0xc3f7a637533f8!2s123%20Technology%20Dr%2C%20San%20Francisco%2C%20CA%2094105!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
