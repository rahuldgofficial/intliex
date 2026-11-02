<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\Domain;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
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

        if (!$softwareDomain || !$aiDomain || !$networkingDomain || !$automationDomain || !$cloudDomain) {
            return;
        }

        $services = [
            // ERP & Softwares
            [
                'domain_id' => $softwareDomain->id,
                'title' => 'ERP Systems',
                'description' => 'Custom-built Enterprise Resource Planning systems tailored to your unique business processes. We integrate finance, HR, supply chain, and operations into a single cohesive platform.',
                'icon' => 'building-office-2',
                'tech_stack' => json_encode(['Laravel', 'Vue.js', 'PostgreSQL', 'Redis']),
                'features' => [
                    'Centralized Data Management',
                    'Real-time Analytics and Reporting',
                    'Automated Workflows',
                    'Scalable Architecture',
                    'Role-based Access Control'
                ]
            ],
            [
                'domain_id' => $softwareDomain->id,
                'title' => 'Custom Software Development',
                'description' => 'Bespoke software solutions designed from the ground up to solve complex business challenges. Our end-to-end development process ensures high-quality, maintainable, and secure applications.',
                'icon' => 'code-bracket-square',
                'tech_stack' => json_encode(['PHP', 'Python', 'React', 'MySQL', 'Docker']),
                'features' => [
                    'Requirements Gathering and Analysis',
                    'Agile Development Methodology',
                    'Comprehensive QA and Testing',
                    'Ongoing Maintenance and Support',
                    'Seamless Integration with Legacy Systems'
                ]
            ],
            [
                'domain_id' => $softwareDomain->id,
                'title' => 'Mobile & Desktop Applications',
                'description' => 'High-performance applications for iOS, Android, Windows, and macOS. We build native and cross-platform experiences that delight users and drive engagement.',
                'icon' => 'device-phone-mobile',
                'tech_stack' => json_encode(['Flutter', 'React Native', 'Electron', 'Swift', 'Kotlin']),
                'features' => [
                    'Cross-platform Compatibility',
                    'Intuitive UI/UX Design',
                    'Offline Functionality',
                    'Push Notifications Integration',
                    'App Store Deployment'
                ]
            ],
            [
                'domain_id' => $softwareDomain->id,
                'title' => 'E-Commerce Platforms',
                'description' => 'Scalable and secure e-commerce solutions that maximize conversion rates. From custom storefronts to complex marketplace platforms, we power digital retail.',
                'icon' => 'shopping-cart',
                'tech_stack' => json_encode(['Laravel', 'Next.js', 'Stripe', 'Elasticsearch']),
                'features' => [
                    'Custom Storefront Design',
                    'Secure Payment Gateway Integration',
                    'Inventory Management',
                    'Order Tracking and Fulfillment',
                    'SEO Optimized Architecture'
                ]
            ],
            [
                'domain_id' => $softwareDomain->id,
                'title' => 'Management Systems',
                'description' => 'Robust management systems for CRM, CMS, and specialized industry needs. Streamline your operations and improve data visibility across your organization.',
                'icon' => 'clipboard-document-list',
                'tech_stack' => json_encode(['Laravel', 'Livewire', 'Alpine.js', 'Tailwind CSS']),
                'features' => [
                    'Customer Relationship Management',
                    'Content Management Capabilities',
                    'Task and Project Tracking',
                    'Document Storage and Retrieval',
                    'Customizable Dashboards'
                ]
            ],

            // AI
            [
                'domain_id' => $aiDomain->id,
                'title' => 'AI Agents & Chatbots',
                'description' => 'Intelligent conversational agents that provide 24/7 customer support and automate routine tasks. Our AI agents learn from interactions to continuously improve performance.',
                'icon' => 'chat-bubble-bottom-center-text',
                'tech_stack' => json_encode(['OpenAI API', 'LangChain', 'Python', 'Vector DBs']),
                'features' => [
                    'Natural Language Processing',
                    'Context-Aware Responses',
                    'Omnichannel Integration',
                    'Sentiment Analysis',
                    'Continuous Learning Models'
                ]
            ],
            [
                'domain_id' => $aiDomain->id,
                'title' => 'Intelligent Automation',
                'description' => 'Transform manual processes into automated, intelligent workflows. We leverage AI to handle data entry, document processing, and complex decision-making tasks.',
                'icon' => 'bolt',
                'tech_stack' => json_encode(['Python', 'TensorFlow', 'UiPath', 'Apache Airflow']),
                'features' => [
                    'Optical Character Recognition (OCR)',
                    'Robotic Process Automation (RPA)',
                    'Predictive Process Modeling',
                    'Automated Decision Engines',
                    'Error Reduction Algorithms'
                ]
            ],
            [
                'domain_id' => $aiDomain->id,
                'title' => 'ML & LLM Integration',
                'description' => 'Integrate cutting-edge Machine Learning and Large Language Models into your existing systems. Unlock deep insights from your data and enable advanced generative capabilities.',
                'icon' => 'circle-stack',
                'tech_stack' => json_encode(['PyTorch', 'Hugging Face', 'Pinecone', 'FastAPI']),
                'features' => [
                    'Custom Model Fine-tuning',
                    'Retrieval-Augmented Generation (RAG)',
                    'Predictive Analytics',
                    'Anomaly Detection',
                    'Data Pipeline Architecture'
                ]
            ],
            [
                'domain_id' => $aiDomain->id,
                'title' => 'AI Consulting & Strategy',
                'description' => 'Expert guidance on navigating the AI landscape. We help you identify high-value AI opportunities, assess readiness, and develop a comprehensive adoption strategy.',
                'icon' => 'light-bulb',
                'tech_stack' => json_encode(['Strategic Planning', 'Data Auditing', 'Feasibility Studies']),
                'features' => [
                    'AI Readiness Assessment',
                    'Use Case Identification',
                    'Technology Stack Selection',
                    'ROI Analysis',
                    'Ethical AI Governance'
                ]
            ],

            // Networking
            [
                'domain_id' => $networkingDomain->id,
                'title' => 'Network Design & Architecture',
                'description' => 'Resilient and scalable network designs for businesses of all sizes. We architect robust infrastructures that prioritize security, speed, and high availability.',
                'icon' => 'share',
                'tech_stack' => json_encode(['Cisco', 'Juniper', 'Fortinet', 'Ubiquiti']),
                'features' => [
                    'Topology Planning and Design',
                    'Security Policy Formulation',
                    'Bandwidth Optimization',
                    'Redundancy and Failover Planning',
                    'Wireless Surveying and Design'
                ]
            ],
            [
                'domain_id' => $networkingDomain->id,
                'title' => 'Deployment & Configuration',
                'description' => 'Professional installation and precise configuration of network hardware and software. We ensure minimal downtime and optimal performance from day one.',
                'icon' => 'wrench-screwdriver',
                'tech_stack' => json_encode(['Routing', 'Switching', 'Firewalls', 'VPNs']),
                'features' => [
                    'Hardware Rack and Stack',
                    'Router and Switch Configuration',
                    'Firewall Rule Implementation',
                    'VLAN Setup and Segmentation',
                    'Secure VPN Tunneling'
                ]
            ],
            [
                'domain_id' => $networkingDomain->id,
                'title' => 'Managed Support & Monitoring',
                'description' => 'Proactive 24/7 network monitoring and dedicated support. We identify and resolve issues before they impact your business operations.',
                'icon' => 'shield-check',
                'tech_stack' => json_encode(['SolarWinds', 'Zabbix', 'PRTG', 'Wireshark']),
                'features' => [
                    '24/7 Network Monitoring',
                    'Performance Analytics',
                    'Patch Management',
                    'Incident Response',
                    'Routine Configuration Backups'
                ]
            ],

            // Industrial Automation
            [
                'domain_id' => $automationDomain->id,
                'title' => 'PLC Programming',
                'description' => 'Custom Programmable Logic Controller programming for precise industrial automation. We develop robust logic for complex manufacturing processes and machinery control.',
                'icon' => 'cpu-chip',
                'tech_stack' => json_encode(['Siemens', 'Allen-Bradley', 'Omron', 'Mitsubishi']),
                'features' => [
                    'Ladder Logic Development',
                    'Structured Text Programming',
                    'HMI/SCADA Integration',
                    'System Debugging and Optimization',
                    'Safety Logic Implementation'
                ]
            ],
            [
                'domain_id' => $automationDomain->id,
                'title' => 'Inverters & VFD Control',
                'description' => 'Expert configuration of Variable Frequency Drives for optimal motor control. Improve energy efficiency and extend equipment lifespan with our precise VFD solutions.',
                'icon' => 'arrow-path',
                'tech_stack' => json_encode(['ABB', 'Danfoss', 'Yaskawa', 'Schneider Electric']),
                'features' => [
                    'Parameter Optimization',
                    'Energy Consumption Analysis',
                    'Harmonic Mitigation',
                    'Closed-Loop Control Setup',
                    'Fault Diagnostics'
                ]
            ],
            [
                'domain_id' => $automationDomain->id,
                'title' => 'Motor Control Systems',
                'description' => 'Comprehensive motor control solutions from direct-on-line starters to advanced servo systems. We ensure reliable and safe operation of your critical industrial motors.',
                'icon' => 'cog',
                'tech_stack' => json_encode(['Contactors', 'Soft Starters', 'Servo Drives']),
                'features' => [
                    'Motor Sizing and Selection',
                    'Soft Starter Integration',
                    'Servo Motion Control',
                    'Overload Protection',
                    'Speed and Torque Regulation'
                ]
            ],
            [
                'domain_id' => $automationDomain->id,
                'title' => 'Control Panel Design & Build',
                'description' => 'Custom electrical control panels designed to exact specifications and industry standards. We build durable, well-organized panels for any industrial application.',
                'icon' => 'server-stack',
                'tech_stack' => json_encode(['AutoCAD Electrical', 'EPLAN', 'UL508A Standards']),
                'features' => [
                    'Schematic Design',
                    'Component Selection',
                    'Panel Fabrication and Wiring',
                    'Factory Acceptance Testing (FAT)',
                    'Compliance Certification'
                ]
            ],
            [
                'domain_id' => $automationDomain->id,
                'title' => 'Installation & Repair',
                'description' => 'On-site installation and rapid repair services for industrial automation systems. Our technicians minimize downtime and ensure systems operate safely and correctly.',
                'icon' => 'wrench',
                'tech_stack' => json_encode(['Troubleshooting', 'Multimeters', 'Oscilloscopes']),
                'features' => [
                    'Turnkey Installation',
                    'Emergency Breakdown Support',
                    'Preventative Maintenance',
                    'Component Replacement',
                    'System Upgrades and Retrofits'
                ]
            ],

            // Cloud
            [
                'domain_id' => $cloudDomain->id,
                'title' => 'AWS Architecture',
                'description' => 'Expertly designed Amazon Web Services environments built for scale, security, and cost-efficiency. We architect solutions leveraging the full power of the AWS ecosystem.',
                'icon' => 'cloud-arrow-up',
                'tech_stack' => json_encode(['EC2', 'S3', 'Lambda', 'RDS', 'VPC']),
                'features' => [
                    'Well-Architected Framework Reviews',
                    'Serverless Application Design',
                    'Container Orchestration (EKS)',
                    'Disaster Recovery Planning',
                    'Security and Compliance Automation'
                ]
            ],
            [
                'domain_id' => $cloudDomain->id,
                'title' => 'Azure Solutions',
                'description' => 'Comprehensive Microsoft Azure deployments tailored for enterprise workloads. Seamlessly integrate your cloud infrastructure with existing Microsoft environments.',
                'icon' => 'window',
                'tech_stack' => json_encode(['Azure VMs', 'App Service', 'Azure SQL', 'AKS']),
                'features' => [
                    'Enterprise Cloud Strategy',
                    'Active Directory Integration',
                    'Azure Virtual Desktop (AVD)',
                    'Data Lake and Analytics Setup',
                    'Azure Security Center Configuration'
                ]
            ],
            [
                'domain_id' => $cloudDomain->id,
                'title' => 'Hybrid & Multi-Cloud',
                'description' => 'Flexible architectures that span on-premises data centers and multiple cloud providers. Maximize resilience and avoid vendor lock-in with a strategic multi-cloud approach.',
                'icon' => 'arrows-right-left',
                'tech_stack' => json_encode(['Terraform', 'Kubernetes', 'Anthos', 'Azure Arc']),
                'features' => [
                    'Unified Management Dashboards',
                    'Cross-Cloud Workload Migration',
                    'Hybrid Identity Access Management',
                    'Data Synchronization',
                    'Cost Optimization Across Providers'
                ]
            ],
            [
                'domain_id' => $cloudDomain->id,
                'title' => 'Cloud Migration',
                'description' => 'Seamless and secure migration of legacy applications and data to the cloud. We handle the complexities of the move to ensure zero data loss and minimal disruption.',
                'icon' => 'arrow-up-tray',
                'tech_stack' => json_encode(['AWS DMS', 'Azure Migrate', 'CloudEndure']),
                'features' => [
                    'Infrastructure Assessment',
                    'Migration Strategy formulation (6 Rs)',
                    'Database Migration',
                    'Application Replatforming',
                    'Post-Migration Validation'
                ]
            ],
            [
                'domain_id' => $cloudDomain->id,
                'title' => 'DevOps & FinOps',
                'description' => 'Accelerate delivery and control cloud costs. We implement CI/CD pipelines for rapid deployment and establish FinOps practices to maximize the business value of cloud spend.',
                'icon' => 'banknotes',
                'tech_stack' => json_encode(['GitHub Actions', 'GitLab CI', 'Docker', 'AWS Cost Explorer']),
                'features' => [
                    'CI/CD Pipeline Construction',
                    'Infrastructure as Code (IaC)',
                    'Cloud Cost Allocation and Showback',
                    'Resource Rightsizing',
                    'Automated Security Scanning (DevSecOps)'
                ]
            ],
        ];

        foreach ($services as $serviceData) {
            $features = $serviceData['features'];
            unset($serviceData['features']);
            $serviceData['slug'] = Str::slug($serviceData['title']);
            
            $service = Service::updateOrCreate(
                ['domain_id' => $serviceData['domain_id'], 'slug' => $serviceData['slug']],
                $serviceData
            );
            
            // Recreate features
            $service->serviceFeatures()->delete();
            
            $sortOrder = 1;
            foreach ($features as $feature) {
                ServiceFeature::create([
                    'service_id' => $service->id,
                    'title' => $feature,
                    'sort_order' => $sortOrder++
                ]);
            }
        }
    }
}
