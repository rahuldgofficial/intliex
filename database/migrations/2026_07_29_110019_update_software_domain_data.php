<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update Domain description and tagline
        DB::table('domains')->where('slug', 'software')->update([
            'tagline' => 'Enterprise custom software and digital transformation.',
            'description' => 'From legacy system modernization to scalable custom ERPs, we build the core software infrastructure that powers enterprise operations. Our engineering teams integrate directly into your workflows to deliver high-performance, secure, and maintainable applications.',
        ]);

        $domainId = DB::table('domains')->where('slug', 'software')->value('id');

        if (!$domainId) {
            return; // Safety fallback
        }

        // Delete existing features for software domain services
        $serviceIds = DB::table('services')->where('domain_id', $domainId)->pluck('id');
        DB::table('service_features')->whereIn('service_id', $serviceIds)->delete();
        
        // Delete existing services for software domain
        DB::table('services')->where('domain_id', $domainId)->delete();

        // Re-insert enriched services
        DB::table('services')->insert([
            [
                'domain_id' => $domainId,
                'title' => 'Custom Enterprise Software',
                'slug' => 'custom-enterprise-software',
                'description' => 'Eliminate operational bottlenecks and technical debt with tailored applications designed for your specific business logic. We replace rigid off-the-shelf software with scalable, secure architectures.',
                'icon' => 'code-bracket-square',
                'tech_stack' => json_encode(['Laravel', 'Node.js', 'React', 'Vue', 'Python']),
                'features' => json_encode([
                    'Full Lifecycle Engineering',
                    'Microservices Architecture',
                    'Legacy System Modernization',
                    'Enterprise-grade Security (SOC 2 Compliant workflows)',
                ]),
                'sort_order' => 1,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Custom ERP & Workflow Systems',
                'slug' => 'custom-erp',
                'description' => 'Centralize operations with bespoke Enterprise Resource Planning systems. Stop fighting spreadsheets and fragmented tools—unify finance, HR, inventory, and operations into a single cohesive platform.',
                'icon' => 'building-office-2',
                'tech_stack' => json_encode(['PostgreSQL', 'Redis', 'Laravel', 'Docker', 'AWS']),
                'features' => json_encode([
                    'Custom Module Development',
                    'Real-time Data Visualization',
                    'Role-based Access Control (RBAC)',
                    'Third-party ERP Integrations (SAP, Salesforce)',
                ]),
                'sort_order' => 2,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'API & Cloud Integrations',
                'slug' => 'api-integrations',
                'description' => 'Connect isolated systems into a unified digital ecosystem. We build robust middleware, RESTful and GraphQL APIs, and custom connectors that securely synchronize data across your enterprise stack.',
                'icon' => 'arrows-right-left',
                'tech_stack' => json_encode(['GraphQL', 'REST', 'Go', 'AWS API Gateway', 'RabbitMQ']),
                'features' => json_encode([
                    'API Design & Strategy',
                    'Middleware Development',
                    'Secure Authentication (OAuth, SAML)',
                    'High-throughput Data Pipelines',
                ]),
                'sort_order' => 3,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverting this complex data migration is omitted for brevity, 
        // as the previous state was basic placeholder text.
    }
};
