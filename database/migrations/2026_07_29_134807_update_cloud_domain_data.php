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
        DB::table('domains')->where('slug', 'like', '%cloud%')->update([
            'tagline' => 'Multi-Cloud Architecture, DevOps & FinOps Excellence.',
            'description' => 'Unmanaged cloud environments breed technical debt and out-of-control costs. We architect scalable, secure, multi-cloud platforms using DevOps automation and strict FinOps governance to accelerate your time-to-market.',
        ]);

        $domainId = DB::table('domains')->where('slug', 'like', '%cloud%')->value('id');

        if (!$domainId) {
            return; // Safety fallback
        }

        // Delete existing features for Cloud domain services
        $serviceIds = DB::table('services')->where('domain_id', $domainId)->pluck('id');
        DB::table('service_features')->whereIn('service_id', $serviceIds)->delete();
        
        // Delete existing services for Cloud domain
        DB::table('services')->where('domain_id', $domainId)->delete();

        // Re-insert enriched services
        DB::table('services')->insert([
            [
                'domain_id' => $domainId,
                'title' => 'Cloud Strategy & Advisory',
                'slug' => 'cloud-strategy-advisory',
                'description' => 'Lift-and-shift without strategy leads to expensive failures. We conduct rigorous readiness assessments and build target-state architectures aligned perfectly with your business goals.',
                'icon' => 'map',
                'tech_stack' => json_encode(['AWS Well-Architected', 'Azure CAF', 'TCO/ROI Modeling']),
                'features' => json_encode([
                    'Cloud Readiness Assessments',
                    'Target-State Blueprinting',
                    'Cloud Center of Excellence (CCoE)',
                    'Application Portfolio Discovery',
                ]),
                'sort_order' => 1,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Migration & Modernization',
                'slug' => 'migration-modernization',
                'description' => 'Legacy workloads stifle innovation. We execute zero-downtime migrations, re-platform enterprise databases, and refactor monolithic applications into scalable microservices.',
                'icon' => 'arrow-up-tray',
                'tech_stack' => json_encode(['AWS Migration Hub', 'Azure Migrate', 'Database Refactoring']),
                'features' => json_encode([
                    'Zero-Downtime Cutovers',
                    'Database Re-platforming (DBaaS)',
                    'Monolith to Microservices',
                    'Wave-Based Migration Execution',
                ]),
                'sort_order' => 2,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Cloud Native & DevOps',
                'slug' => 'cloud-native-devops',
                'description' => 'Manual deployments are slow and error-prone. We engineer automated CI/CD pipelines, containerize applications, and provision environments using Infrastructure as Code (IaC).',
                'icon' => 'command-line',
                'tech_stack' => json_encode(['Kubernetes', 'Terraform', 'Docker', 'GitHub Actions / GitLab CI']),
                'features' => json_encode([
                    'CI/CD Pipeline Automation',
                    'Infrastructure as Code (IaC)',
                    'Container Orchestration (K8s)',
                    'DevSecOps Integration',
                ]),
                'sort_order' => 3,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'FinOps & Cost Optimization',
                'slug' => 'finops-cost-optimization',
                'description' => 'Scaling in the cloud shouldn\'t mean unpredictable bills. We implement FinOps governance, eliminate resource sprawl, and optimize instance sizing to guarantee maximum ROI.',
                'icon' => 'banknotes',
                'tech_stack' => json_encode(['AWS Cost Explorer', 'Azure Cost Management', 'CloudHealth', 'Spot Instances']),
                'features' => json_encode([
                    'Continuous Cost Governance',
                    'Resource Right-Sizing',
                    'Reserved Instance Strategies',
                    'Multi-Cloud Spend Analytics',
                ]),
                'sort_order' => 4,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Managed Cloud Services (MSP)',
                'slug' => 'managed-cloud-services',
                'description' => 'Maintaining cloud infrastructure distracts your core engineering team. We provide 24/7/365 tier-3 management, proactive threat hunting, and continuous performance tuning.',
                'icon' => 'server',
                'tech_stack' => json_encode(['Datadog', 'Splunk', 'AWS CloudWatch', 'PagerDuty']),
                'features' => json_encode([
                    '24/7/365 Infrastructure Management',
                    'Proactive Threat Hunting',
                    'SLA-Backed Incident Response',
                    'Continuous Performance Tuning',
                ]),
                'sort_order' => 5,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverting this complex data migration is omitted for brevity.
    }
};
