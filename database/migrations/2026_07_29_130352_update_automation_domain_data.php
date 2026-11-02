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
        DB::table('domains')->where('slug', 'industrial-automation')->update([
            'tagline' => 'Turnkey Control Systems & Industrial Automation Integration.',
            'description' => 'Unplanned downtime and obsolete hardware put your plant at risk. We deliver rigorous, FAT-tested automation solutions—from UL 508A panel fabrication and PLC integration to turnkey machine commissioning—ensuring maximum OEE and operational safety.',
        ]);

        $domainId = DB::table('domains')->where('slug', 'industrial-automation')->value('id');

        if (!$domainId) {
            return; // Safety fallback
        }

        // Delete existing features for Automation domain services
        $serviceIds = DB::table('services')->where('domain_id', $domainId)->pluck('id');
        DB::table('service_features')->whereIn('service_id', $serviceIds)->delete();
        
        // Delete existing services for Automation domain
        DB::table('services')->where('domain_id', $domainId)->delete();

        // Re-insert enriched services
        DB::table('services')->insert([
            [
                'domain_id' => $domainId,
                'title' => 'PLC Integration Services',
                'slug' => 'plc-integration-services',
                'description' => 'Obsolete controllers threaten your production lines. We modernize legacy control systems and program advanced logic architectures, extending asset lifecycles without requiring full mechanical replacements.',
                'icon' => 'cpu-chip',
                'tech_stack' => json_encode(['Rockwell/Allen-Bradley', 'Siemens SIMATIC', 'Schneider Electric', 'Omron']),
                'features' => json_encode([
                    'Legacy System Modernization',
                    'Custom Control Logic Design',
                    'Motion Control Programming',
                    'Safety PLC Integration',
                ]),
                'sort_order' => 1,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Industrial Panelboard Installation',
                'slug' => 'industrial-panelboard-installation',
                'description' => 'Poorly fabricated panels cause thermal failures and safety hazards. We design, build, and install custom control panels tailored to your exact plant-floor specifications, ensuring strict regulatory compliance.',
                'icon' => 'bolt',
                'tech_stack' => json_encode(['UL 508A Standards', 'AutoCAD Electrical', 'EPLAN', 'NEC Compliance']),
                'features' => json_encode([
                    'UL 508A Certified Fabrication',
                    'Build-to-Print Manufacturing',
                    'On-Site Field Installation',
                    'Factory Acceptance Testing (FAT)',
                ]),
                'sort_order' => 2,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Textile Machine Setup & Commissioning',
                'slug' => 'textile-machine-setup-commissioning',
                'description' => 'New machinery deployments are often delayed by integration errors. We execute rigorous Site Acceptance Testing (SAT) and turnkey commissioning for textile manufacturing lines to accelerate your time-to-market.',
                'icon' => 'cog-8-tooth',
                'tech_stack' => json_encode(['Rigorous SAT Protocols', 'OEE Tracking', 'Tension Control Systems']),
                'features' => json_encode([
                    'Turnkey Site Commissioning',
                    'Site Acceptance Testing (SAT)',
                    'Operator Training & Handover',
                    'Yield & Speed Optimization',
                ]),
                'sort_order' => 3,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Industrial Motor Inverter Services',
                'slug' => 'industrial-motor-inverter-services',
                'description' => 'Inefficient motor control wastes energy and degrades mechanical components. We specify, install, and tune Variable Frequency Drives (VFDs) for precision motion control and massive energy savings.',
                'icon' => 'arrow-path',
                'tech_stack' => json_encode(['Yaskawa', 'Danfoss', 'ABB Drives', 'Rockwell PowerFlex']),
                'features' => json_encode([
                    'VFD Sizing & Installation',
                    'Precision Motion Control',
                    'Energy Consumption Optimization',
                    'Harmonic Mitigation',
                ]),
                'sort_order' => 4,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'SCADA & MES Architecture',
                'slug' => 'scada-mes-architecture',
                'description' => 'Plant-floor data silos blind executives to inefficiencies. We bridge the gap between OT and IT, designing high-performance SCADA interfaces and MES dashboards that provide real-time visibility into production yield.',
                'icon' => 'presentation-chart-line',
                'tech_stack' => json_encode(['Inductive Automation Ignition', 'AVEVA Wonderware', 'FactoryTalk View', 'SQL Historians']),
                'features' => json_encode([
                    'High-Performance HMI Design',
                    'Manufacturing Execution Systems (MES)',
                    'Real-Time OEE Dashboards',
                    'Historical Data Logging',
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
