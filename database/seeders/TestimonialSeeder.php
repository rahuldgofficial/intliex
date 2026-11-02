<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use App\Models\Domain;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $softwareDomain = Domain::where('slug', 'software')->first();
        $aiDomain = Domain::where('slug', 'ai')->first();
        $networkingDomain = Domain::where('slug', 'networking')->first();
        $automationDomain = Domain::where('slug', 'automation')->first();
        $cloudDomain = Domain::where('slug', 'cloud')->first();

        $testimonials = [
            [
                'domain_id' => $softwareDomain?->id,
                'client_name' => 'Sarah Jenkins',
                'client_position' => 'Chief Operations Officer',
                'client_company' => 'Nexus Logistics',
                'quote' => 'Intliex completely transformed our supply chain management. The custom ERP they built replaced five disparate legacy systems, giving us real-time visibility and saving us countless hours in operational efficiency. Their engineering team is top-tier.',

                'is_active' => true,
            ],
            [
                'domain_id' => $aiDomain?->id,
                'client_name' => 'David Chen',
                'client_position' => 'VP of Customer Success',
                'client_company' => 'FinTech Solutions Group',
                'quote' => 'The conversational AI agent implemented by Intliex handles 60% of our Tier 1 support queries flawlessly. The RAG architecture they designed ensures responses are accurate and compliant with our financial regulations. It’s been a game-changer for our scaling efforts.',

                'is_active' => true,
            ],
            [
                'domain_id' => $networkingDomain?->id,
                'client_name' => 'Michael Rodriguez',
                'client_position' => 'IT Director',
                'client_company' => 'Apex Healthcare Network',
                'quote' => 'When we needed to upgrade our hospital network infrastructure to support telemedicine, Intliex delivered a flawless Zero Trust architecture. Their deployment was seamless, ensuring zero downtime for our critical care systems. We sleep better knowing our network is secure and resilient.',

                'is_active' => true,
            ],
            [
                'domain_id' => $automationDomain?->id,
                'client_name' => 'Elena Volkov',
                'client_position' => 'Plant Manager',
                'client_company' => 'Stellar Manufacturing',
                'quote' => 'Intliex upgraded our entire assembly line PLC programming and implemented new VFD controls. The precision they brought to our motor control systems reduced our scrap rate by 15% and noticeably cut our energy consumption. True professionals in industrial automation.',

                'is_active' => true,
            ],
            [
                'domain_id' => $cloudDomain?->id,
                'client_name' => 'Marcus Thorne',
                'client_position' => 'Chief Technology Officer',
                'client_company' => 'DataStream Analytics',
                'quote' => 'Our migration to AWS was complex, involving terabytes of sensitive data and legacy applications. Intliex planned the architecture meticulously and executed the migration with zero data loss. Their ongoing FinOps support continues to optimize our monthly cloud spend.',

                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
