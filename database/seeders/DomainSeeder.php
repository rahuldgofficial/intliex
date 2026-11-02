<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domains = [
            [
                'name' => 'ERP & Softwares',
                'slug' => 'software',
                'tagline' => 'Enterprise Software Solutions That Scale With Your Business',
                'description' => 'From custom ERP systems to full-scale e-commerce platforms, we engineer software that transforms operations. Our solutions span mobile, desktop, and web — built for performance, security, and scalability across any industry.',
                'icon' => 'code-bracket',
                'color' => '#3B82F6',
                'sort_order' => 1,
            ],
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'ai',
                'tagline' => 'Intelligent Automation That Thinks Ahead',
                'description' => 'We build AI agents, automation pipelines, and ML/LLM integrations that turn data into decisions. From conversational AI to predictive analytics, our solutions deliver measurable business intelligence.',
                'icon' => 'cpu-chip',
                'color' => '#8B5CF6',
                'sort_order' => 2,
            ],
            [
                'name' => 'Networking Services',
                'slug' => 'networking',
                'tagline' => 'Connected Infrastructure, Unbreakable Performance',
                'description' => 'We design, deploy, and manage network architectures from small office setups to enterprise-scale data centers. Our engineers ensure your connectivity is fast, secure, and future-ready.',
                'icon' => 'globe-alt',
                'color' => '#06B6D4',
                'sort_order' => 3,
            ],
            [
                'name' => 'Industrial Automation',
                'slug' => 'automation',
                'tagline' => 'Precision Control From PLC to Production Floor',
                'description' => 'We program PLCs, configure inverters and VFDs, design motor control systems, and build complete control panel boards. From installation to repair, we keep your industrial operations running at peak efficiency.',
                'icon' => 'cog-6-tooth',
                'color' => '#F59E0B',
                'sort_order' => 4,
            ],
            [
                'name' => 'Cloud Services',
                'slug' => 'cloud',
                'tagline' => 'Cloud Architecture That Powers Growth',
                'description' => 'We architect, migrate, and manage cloud environments on AWS and Azure. Whether you need a hybrid setup, full cloud migration, or ongoing managed services, we build infrastructure that scales with your ambitions.',
                'icon' => 'cloud',
                'color' => '#10B981',
                'sort_order' => 5,
            ],
        ];

        foreach ($domains as $domain) {
            Domain::updateOrCreate(['slug' => $domain['slug']], $domain);
        }
    }
}
