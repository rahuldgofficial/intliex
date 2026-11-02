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
        DB::table('domains')->where('slug', 'networking')->update([
            'tagline' => 'High-Performance, Secure-by-Design Enterprise Infrastructure.',
            'description' => 'Legacy networks are fragile, rigid, and insecure. We architect modern, automated networking environments—from SD-WAN to Zero Trust fabrics—that mitigate risk, eliminate operational bottlenecks, and accelerate your multi-cloud strategy.',
        ]);

        $domainId = DB::table('domains')->where('slug', 'networking')->value('id');

        if (!$domainId) {
            return; // Safety fallback
        }

        // Delete existing features for Networking domain services
        $serviceIds = DB::table('services')->where('domain_id', $domainId)->pluck('id');
        DB::table('service_features')->whereIn('service_id', $serviceIds)->delete();
        
        // Delete existing services for Networking domain
        DB::table('services')->where('domain_id', $domainId)->delete();

        // Re-insert enriched services
        DB::table('services')->insert([
            [
                'domain_id' => $domainId,
                'title' => 'Enterprise Network Architecture',
                'slug' => 'enterprise-network-architecture',
                'description' => 'Stop relying on organic, undocumented network growth. We deliver comprehensive readiness assessments and design scalable, intent-based blueprints tailored to your business outcomes.',
                'icon' => 'globe-alt',
                'tech_stack' => json_encode(['READI Diagnostics', 'Cisco DNA', 'Arista EOS', 'Network Automation']),
                'features' => json_encode([
                    'Infrastructure Gap Analysis',
                    'Intent-Based Networking Design',
                    'Multi-Vendor Blueprinting',
                    'AIOps & NetDevOps Automation',
                ]),
                'sort_order' => 1,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'SD-WAN & SASE Deployments',
                'slug' => 'sd-wan-sase',
                'description' => 'Replace costly MPLS circuits and fragmented edge security. We unify your WAN and security postures, delivering cloud-first connectivity with built-in Zero Trust Network Access (ZTNA) and Secure Web Gateways (SWG).',
                'icon' => 'arrows-right-left',
                'tech_stack' => json_encode(['Palo Alto Prisma SASE', 'Cisco SD-WAN', 'Fortinet Secure SD-WAN']),
                'features' => json_encode([
                    'Cloud-First WAN Replacement',
                    'Zero Trust Network Access (ZTNA)',
                    'Firewall-as-a-Service (FWaaS)',
                    'Application-Aware Traffic Steering',
                ]),
                'sort_order' => 2,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Wireless & Campus Networks',
                'slug' => 'wireless-campus-networks',
                'description' => 'Poor Wi-Fi kills productivity. We engineer high-density, AI-driven wireless environments (Wi-Fi 6/6E) and Private 5G networks that guarantee seamless roaming and flawless device onboarding.',
                'icon' => 'wifi',
                'tech_stack' => json_encode(['Juniper Mist AI', 'HPE Aruba', 'Cisco Meraki', 'Private 5G']),
                'features' => json_encode([
                    'High-Density Wi-Fi 6/6E',
                    'AI-Driven Wireless Operations',
                    'Private Cellular (5G/LTE)',
                    'IoT Device Security & Onboarding',
                ]),
                'sort_order' => 3,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Data Center & Hybrid Cloud',
                'slug' => 'data-center-hybrid-cloud',
                'description' => 'AI workloads and multi-cloud strategies require massive throughput. We deploy EVPN/VXLAN fabrics and ultra-low latency interconnects that seamlessly bridge your on-premise infrastructure with AWS and Azure.',
                'icon' => 'server-stack',
                'tech_stack' => json_encode(['Cisco ACI', 'Arista CloudVision', 'AWS Direct Connect', 'Azure ExpressRoute']),
                'features' => json_encode([
                    'EVPN/VXLAN Overlays',
                    'Ultra-Low Latency Fabrics',
                    'Lossless Ethernet for AI Workloads',
                    'Automated Multi-Cloud Connectivity',
                ]),
                'sort_order' => 4,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Defensive Network Security',
                'slug' => 'defensive-network-security',
                'description' => 'Security cannot be an afterthought. We embed Next-Gen Firewalls, micro-segmentation, and intrusion prevention directly into the routing and switching nodes of your enterprise fabric.',
                'icon' => 'shield-check',
                'tech_stack' => json_encode(['Palo Alto Strata', 'FortiGate', 'Cisco Secure', 'Micro-segmentation']),
                'features' => json_encode([
                    'Next-Gen Firewalls (NGFW)',
                    'Zero Trust Micro-segmentation',
                    'Intrusion Prevention Systems (IPS)',
                    'Automated Threat Remediation',
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
