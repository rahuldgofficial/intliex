<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndustryController extends Controller
{
    /**
     * Industry data — hardcoded until DB-backed.
     */
    private array $industries = [
        'manufacturing' => [
            'name' => 'Manufacturing',
            'slug' => 'manufacturing',
            'tagline' => 'Smart factories, connected systems, measurable output.',
            'description' => 'We help manufacturers modernize production lines, integrate IT and OT systems, and build software that connects the shop floor to the boardroom.',
            'icon' => 'cog',
            'color' => 'amber',
            'domains' => ['automation', 'software', 'ai'],
            'domain_labels' => ['Industrial Automation', 'ERP & Softwares', 'AI Services'],
            'domain_details' => [
                'Industrial Automation' => 'PLC-driven production line control, Motor Control Center (MCC) panel installation, Boiler panel troubleshooting for facility utilities.',
                'ERP & Softwares' => 'Custom MES integration, production scheduling modules, real-time inventory tracking.',
                'AI Services' => 'Predictive maintenance models, defect detection via machine vision, production demand forecasting.'
            ],
            'use_cases' => [
                [
                    'title' => 'PLC-Driven Production Line Modernization',
                    'description' => 'Replacing legacy relay logic with modern PLC programs (Siemens S7, Allen-Bradley) to improve cycle time, reduce scrap, and enable real-time production monitoring.',
                ],
                [
                    'title' => 'Custom MES / ERP Integration',
                    'description' => 'Building manufacturing execution systems that bridge ERP data (SAP, Oracle, or custom) with shop-floor devices, giving managers real-time visibility into WIP, yield, and downtime.',
                ],
                [
                    'title' => 'Predictive Maintenance with AI',
                    'description' => 'Deploying vibration, temperature, and current sensors connected to ML models that predict equipment failure before unplanned downtime occurs.',
                ],
            ],
        ],
        'healthcare' => [
            'name' => 'Healthcare',
            'slug' => 'healthcare',
            'tagline' => 'Secure infrastructure for patient-critical systems.',
            'description' => 'Healthcare organizations need networks that never go down, cloud platforms that meet compliance standards, and software that clinicians actually want to use.',
            'icon' => 'heart',
            'color' => 'rose',
            'domains' => ['networking', 'cloud', 'software'],
            'domain_labels' => ['Networking Services', 'Cloud Services', 'ERP & Softwares'],
            'domain_details' => [
                'Networking Services' => 'HIPAA-compliant zero-trust architecture, robust campus Wi-Fi for hospitals, secure SD-WAN for remote clinics.',
                'Cloud Services' => 'Encrypted patient data lakes on AWS/Azure, highly available telehealth infrastructure, critical disaster recovery.',
                'ERP & Softwares' => 'Custom Hospital & Clinic Management systems, secure patient portals, complex EMR/EHR system integrations.'
            ],
            'use_cases' => [
                [
                    'title' => 'HIPAA-Compliant Network Architecture',
                    'description' => 'Designing segmented hospital networks with Zero Trust principles, ensuring patient data flows securely between EMR systems, medical devices, and telehealth platforms.',
                ],
                [
                    'title' => 'Cloud-Hosted Patient Portals',
                    'description' => 'Building and hosting patient-facing web applications on AWS or Azure with encryption at rest and in transit, meeting healthcare regulatory requirements.',
                ],
                [
                    'title' => 'Custom Clinical Workflow Software',
                    'description' => 'Developing appointment scheduling, patient intake, and referral management systems tailored to the specific workflows of clinics and hospital departments.',
                ],
            ],
        ],
        'retail-ecommerce' => [
            'name' => 'Retail & E-Commerce',
            'slug' => 'retail-ecommerce',
            'tagline' => 'Scalable platforms for modern retail operations.',
            'description' => 'From custom e-commerce builds to AI-powered recommendation engines, we help retailers compete online and unify their digital and physical storefronts.',
            'icon' => 'shopping-cart',
            'color' => 'blue',
            'domains' => ['software', 'ai', 'cloud'],
            'domain_labels' => ['ERP & Softwares', 'AI Services', 'Cloud Services'],
            'domain_details' => [
                'ERP & Softwares' => 'Custom E-Commerce & Retail POS modules, deep inventory tracking, dynamic vendor management logic.',
                'AI Services' => 'NLP-driven customer support chatbots, predictive demand forecasting, personalized collaborative filtering.',
                'Cloud Services' => 'Serverless auto-scaling architectures, high-availability multi-region databases for traffic spikes.'
            ],
            'use_cases' => [
                [
                    'title' => 'Custom E-Commerce Platform Development',
                    'description' => 'Building tailored online stores with Laravel, React, or Vue.js — including inventory management, payment gateway integration, and multi-warehouse fulfillment logic.',
                ],
                [
                    'title' => 'AI-Powered Product Recommendations',
                    'description' => 'Implementing collaborative filtering and content-based recommendation systems that increase average order value and reduce bounce rates.',
                ],
                [
                    'title' => 'Cloud Infrastructure for Traffic Spikes',
                    'description' => 'Architecting auto-scaling AWS or Azure environments that handle Black Friday-level traffic without manual intervention or downtime.',
                ],
            ],
        ],
        'finance-banking' => [
            'name' => 'Finance & Banking',
            'slug' => 'finance-banking',
            'tagline' => 'Compliant, secure, and intelligent financial systems.',
            'description' => 'Financial institutions need bulletproof security, regulatory compliance, and intelligent automation. We deliver infrastructure and software built to those standards.',
            'icon' => 'building-library',
            'color' => 'emerald',
            'domains' => ['cloud', 'networking', 'ai'],
            'domain_labels' => ['Cloud Services', 'Networking Services', 'AI Services'],
            'domain_details' => [
                'Cloud Services' => 'FinOps cost optimization, zero-downtime database migrations, compliant AWS/Azure architecture.',
                'Networking Services' => 'Zero Trust Network Access (ZTNA), secure SD-WAN, firewall modernization and segmentation.',
                'AI Services' => 'Fraud anomaly detection, ML-driven credit scoring models, unstructured document processing.'
            ],
            'use_cases' => [
                [
                    'title' => 'Secure Cloud Migration for Core Banking',
                    'description' => 'Planning and executing zero-downtime migrations of core banking applications to AWS or Azure, with encryption, audit logging, and disaster recovery built in.',
                ],
                [
                    'title' => 'Network Security & Compliance Hardening',
                    'description' => 'Deploying next-generation firewalls (Fortinet, Cisco), intrusion detection systems, and network segmentation architectures that satisfy PCI-DSS and SOC 2 requirements.',
                ],
                [
                    'title' => 'AI-Driven Fraud Detection',
                    'description' => 'Building real-time transaction monitoring pipelines using machine learning models that flag anomalous patterns and reduce false positives compared to rule-based systems.',
                ],
            ],
        ],
        'logistics-supply-chain' => [
            'name' => 'Logistics & Supply Chain',
            'slug' => 'logistics-supply-chain',
            'tagline' => 'Visibility from warehouse to last mile.',
            'description' => 'We build the software and automation systems that give logistics companies real-time visibility across warehouses, fleets, and delivery networks.',
            'icon' => 'truck',
            'color' => 'cyan',
            'domains' => ['software', 'automation', 'ai'],
            'domain_labels' => ['ERP & Softwares', 'Industrial Automation', 'AI Services'],
            'domain_details' => [
                'ERP & Softwares' => 'Transportation Management System (TMS), Warehouse Management (WMS), real-time fleet tracking integration.',
                'Industrial Automation' => 'PLC-controlled conveyor sorting, VFDs for heavy motors, custom PFI panels for expansive warehouses.',
                'AI Services' => 'Computer vision for logistics sorting, predictive maintenance for fleets, route optimization algorithms.'
            ],
            'use_cases' => [
                [
                    'title' => 'Custom WMS & TMS Development',
                    'description' => 'Building warehouse management and transportation management systems that integrate with barcode/RFID hardware, route optimization APIs, and ERP back-ends.',
                ],
                [
                    'title' => 'Automated Sorting & Conveyor Control',
                    'description' => 'Programming PLC-controlled conveyor systems with VFD-driven motors for automated package sorting, reducing manual labor and increasing throughput.',
                ],
                [
                    'title' => 'Demand Forecasting with Machine Learning',
                    'description' => 'Deploying time-series forecasting models that predict inventory demand by SKU, reducing overstock costs and stockout events.',
                ],
            ],
        ],
        'energy-utilities' => [
            'name' => 'Energy & Utilities',
            'slug' => 'energy-utilities',
            'tagline' => 'Reliable control systems for critical infrastructure.',
            'description' => 'Energy companies and utilities depend on industrial control systems that run 24/7. We design, program, and maintain automation and networking infrastructure for these high-stakes environments.',
            'icon' => 'bolt',
            'color' => 'violet',
            'domains' => ['automation', 'networking', 'cloud'],
            'domain_labels' => ['Industrial Automation', 'Networking Services', 'Cloud Services'],
            'domain_details' => [
                'Industrial Automation' => 'Motor Control Center (MCC) panels, Boiler control systems, robust SCADA programming for substations.',
                'Networking Services' => 'Air-gapped OT networks, ruggedized industrial firewalls, fiber optic structured cabling.',
                'Cloud Services' => 'Real-time IoT telemetry pipelines, scalable data lakes, hybrid cloud disaster recovery solutions.'
            ],
            'use_cases' => [
                [
                    'title' => 'SCADA & PLC Systems for Power Distribution',
                    'description' => 'Designing and programming SCADA systems with Siemens or Schneider Electric PLCs to monitor and control substations, switchgear, and distribution networks.',
                ],
                [
                    'title' => 'Secure OT Network Architecture',
                    'description' => 'Building air-gapped and segmented OT networks with industrial firewalls that protect critical infrastructure from cyber threats while enabling remote monitoring.',
                ],
                [
                    'title' => 'Cloud-Based Energy Monitoring Dashboards',
                    'description' => 'Developing real-time dashboards hosted on AWS or Azure that aggregate data from smart meters, sensors, and SCADA systems for operational insight and reporting.',
                ],
            ],
        ],
        'education' => [
            'name' => 'Education',
            'slug' => 'education',
            'tagline' => 'Digital transformation for modern campuses.',
            'description' => 'From K-12 schools to global universities, we provide the digital infrastructure and software needed to deliver seamless, engaging learning experiences.',
            'icon' => 'academic-cap',
            'color' => 'blue',
            'domains' => ['software', 'networking', 'cloud', 'ai'],
            'domain_labels' => ['ERP & Softwares', 'Networking Services', 'Cloud Services', 'AI Services'],
            'domain_details' => [
                'ERP & Softwares' => 'School & University Management Systems, robust LMS platforms, scalable e-learning portals.',
                'Networking Services' => 'High-density campus Wi-Fi 6, secure dormitory networks, fiber optic structured cabling.',
                'Cloud Services' => 'Scalable infrastructure for student portals, disaster recovery for academic records.',
                'AI Services' => 'Personalized learning algorithms, automated grading assistance, predictive student retention modeling.'
            ],
            'use_cases' => [
                [
                    'title' => 'Integrated University Management',
                    'description' => 'Deploying custom ERP modules that unify admissions, student billing, course registration, and alumni relations into a single unified platform.',
                ],
                [
                    'title' => 'High-Density Campus Networking',
                    'description' => 'Designing and installing robust Wi-Fi networks capable of supporting tens of thousands of concurrent student devices across lecture halls and dormitories.',
                ],
                [
                    'title' => 'Scalable E-Learning Portals',
                    'description' => 'Architecting cloud-hosted Learning Management Systems (LMS) that auto-scale during peak exam periods, ensuring uninterrupted access to vital course materials.',
                ],
            ],
        ],
        'hospitality-travel' => [
            'name' => 'Hospitality & Travel',
            'slug' => 'hospitality-travel',
            'tagline' => 'Elevating guest experiences through connected technology.',
            'description' => 'We help hotels, resorts, and travel agencies modernize their property management systems, enhance Wi-Fi coverage, and deploy AI to personalize guest services.',
            'icon' => 'globe-alt',
            'color' => 'amber',
            'domains' => ['software', 'networking', 'ai', 'cloud'],
            'domain_labels' => ['ERP & Softwares', 'Networking Services', 'AI Services', 'Cloud Services'],
            'domain_details' => [
                'ERP & Softwares' => 'Custom Property Management Systems (PMS), mobile concierge apps, central reservation integrations.',
                'Networking Services' => 'Seamless property-wide Wi-Fi, secure guest networks, VoIP communications for staff.',
                'AI Services' => 'Dynamic pricing models, personalized travel recommendations, AI-driven guest support bots.',
                'Cloud Services' => 'High-availability booking engines, scalable global content delivery, secure customer data lakes.'
            ],
            'use_cases' => [
                [
                    'title' => 'Custom Mobile Concierge Apps',
                    'description' => 'Developing mobile applications that allow guests to check in, unlock their doors via Bluetooth, order room service, and book amenities directly from their phones.',
                ],
                [
                    'title' => 'Seamless Resort-Wide Wi-Fi',
                    'description' => 'Designing high-capacity wireless networks that provide uninterrupted, fast connectivity across sprawling resort properties, including outdoor pools and private beaches.',
                ],
                [
                    'title' => 'AI-Driven Dynamic Pricing',
                    'description' => 'Implementing machine learning models that analyze seasonal trends, local events, and competitor rates to optimize room pricing and maximize RevPAR in real time.',
                ],
            ],
        ],
        'real-estate' => [
            'name' => 'Real Estate & Property Management',
            'slug' => 'real-estate',
            'tagline' => 'Smart solutions for modern property portfolios.',
            'description' => 'We empower real estate developers, REITs, and property managers with the software and analytics needed to manage assets, automate tenant relations, and optimize facility operations.',
            'icon' => 'home',
            'color' => 'emerald',
            'domains' => ['software', 'ai', 'cloud'],
            'domain_labels' => ['ERP & Softwares', 'AI Services', 'Cloud Services'],
            'domain_details' => [
                'ERP & Softwares' => 'Custom property management ERPs, tenant portals, lease administration, and facility maintenance modules.',
                'AI Services' => 'Predictive asset valuation models, automated lead scoring for brokerages, smart building energy analytics.',
                'Cloud Services' => 'Centralized data lakes for multi-property portfolios, scalable document storage for leases, cloud-hosted virtual tours.'
            ],
            'use_cases' => [
                [
                    'title' => 'Custom Property Management Portals',
                    'description' => 'Building end-to-end web applications that allow tenants to pay rent, submit maintenance requests, and book amenities, while giving managers a unified dashboard.',
                ],
                [
                    'title' => 'AI-Powered Asset Valuation',
                    'description' => 'Deploying machine learning algorithms that ingest local market data, interest rates, and demographic shifts to accurately predict future property values.',
                ],
                [
                    'title' => 'Cloud-Hosted Virtual Tours',
                    'description' => 'Architecting high-bandwidth, low-latency cloud infrastructure to serve high-resolution 3D virtual tours to thousands of concurrent prospective buyers.',
                ],
            ],
        ],
        'construction-engineering' => [
            'name' => 'Construction & Engineering',
            'slug' => 'construction-engineering',
            'tagline' => 'Connecting the job site to the back office.',
            'description' => 'We provide construction and engineering firms with robust project management software, site-wide networking, and automation systems that keep massive projects on schedule and on budget.',
            'icon' => 'wrench-screwdriver',
            'color' => 'rose',
            'domains' => ['software', 'automation', 'networking', 'cloud'],
            'domain_labels' => ['ERP & Softwares', 'Industrial Automation', 'Networking Services', 'Cloud Services'],
            'domain_details' => [
                'ERP & Softwares' => 'Custom construction project management, equipment tracking, and sub-contractor billing modules.',
                'Industrial Automation' => 'Custom control panels for heavy site machinery, automated material handling systems.',
                'Networking Services' => 'Ruggedized mesh Wi-Fi for active construction sites, temporary job-site connectivity, secure remote access.',
                'Cloud Services' => 'Centralized blueprint and BIM model storage, scalable drone mapping data processing, robust DR solutions.'
            ],
            'use_cases' => [
                [
                    'title' => 'Job-Site Mesh Networking',
                    'description' => 'Deploying ruggedized, high-availability mesh Wi-Fi networks across active construction sites, ensuring foremen and engineers can access blueprints and BIM models anywhere.',
                ],
                [
                    'title' => 'Custom Equipment Tracking ERP',
                    'description' => 'Building integrated software modules that track the location, maintenance schedule, and depreciation of heavy machinery across multiple concurrent large-scale projects.',
                ],
                [
                    'title' => 'Cloud-Hosted BIM Infrastructure',
                    'description' => 'Architecting secure AWS/Azure environments to host massive Building Information Modeling (BIM) files, allowing global engineering teams to collaborate in real time without latency.',
                ],
            ],
        ],
    ];

    public function index(): View
    {
        return view('pages.industries.index', [
            'industries' => $this->industries,
        ]);
    }

    public function show(string $slug): View
    {
        if (!isset($this->industries[$slug])) {
            abort(404);
        }

        return view('pages.industries.show', [
            'industry' => $this->industries[$slug],
            'allIndustries' => $this->industries,
        ]);
    }
}
