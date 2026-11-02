<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\Domain;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Categories
        $categories = [
            'ERP & Softwares',
            'Artificial Intelligence',
            'Networking',
            'Industrial Automation',
            'Cloud Computing',
            'Industry Insights'
        ];

        $categoryModels = [];
        foreach ($categories as $cat) {
            $categoryModels[] = BlogCategory::updateOrCreate(
                ['slug' => Str::slug($cat)],
                ['name' => $cat, 'description' => "Insights and articles related to $cat."]
            );
        }

        // 2. Create Tags
        $tags = [
            'Enterprise Tech', 'Digital Transformation', 'Machine Learning', 
            'Cybersecurity', 'IoT', 'DevOps', 'Data Center', 'Manufacturing', 
            'Scalability', 'Future of Work'
        ];

        $tagModels = [];
        foreach ($tags as $tag) {
            $tagModels[] = BlogTag::updateOrCreate(
                ['slug' => Str::slug($tag)],
                ['name' => $tag]
            );
        }

        // 3. Create Posts
        $posts = [
            [
                'title' => 'The Evolution of Microservices in Enterprise SaaS Architecture',
                'category_id' => $categoryModels[0]->id, // Software
                'excerpt' => 'Discover how migrating from monolithic applications to microservices architecture can dramatically improve scalability, deployment frequency, and fault tolerance in modern SaaS platforms.',
                'content' => '<h2>Understanding the Shift to Microservices</h2><p>For years, monolithic architectures were the standard for enterprise software. They were straightforward to develop, test, and deploy initially. However, as applications grew in complexity, the limitations became apparent. A single bug could bring down the entire system, and scaling required duplicating the whole monolith, even if only one component faced high load.</p><p>Microservices architecture fundamentally changes this dynamic. By breaking down applications into loosely coupled, independently deployable services, development teams gain unprecedented flexibility.</p><h3>Key Advantages for SaaS Platforms</h3><p><strong>1. Independent Scalability:</strong> In a multi-tenant SaaS environment, certain features often experience disproportionate usage. Microservices allow you to scale only the specific services under heavy load, optimizing resource utilization and cloud costs.</p><p><strong>2. Technology Heterogeneity:</strong> Different problems require different tools. Microservices enable teams to choose the best technology stack for each specific service, rather than forcing a one-size-fits-all approach.</p><p><strong>3. Resilience and Fault Tolerance:</strong> When a service fails in a microservices architecture, it doesn\'t necessarily bring down the entire application. Proper isolation and fallback mechanisms ensure that the core platform remains available.</p><h3>Challenges in Implementation</h3><p>Transitioning is not without hurdles. Managing distributed data, handling inter-service communication, and implementing comprehensive observability are complex challenges that require robust DevOps practices and sophisticated tooling.</p><p>In conclusion, while the initial complexity is higher, the long-term benefits of agility, scalability, and resilience make microservices the architecture of choice for ambitious SaaS platforms.</p>',
            ],
            [
                'title' => 'Implementing RAG (Retrieval-Augmented Generation) in Corporate Chatbots',
                'category_id' => $categoryModels[1]->id, // AI
                'excerpt' => 'Explore how Retrieval-Augmented Generation significantly reduces hallucination and improves the accuracy of corporate AI assistants by grounding responses in proprietary company data.',
                'content' => '<h2>The Hallucination Problem in LLMs</h2><p>Large Language Models (LLMs) like GPT-4 are incredibly powerful, but they suffer from a fundamental flaw when applied to specific enterprise contexts: they hallucinate. When asked about proprietary company policies, internal documentation, or recent private data, they confidently invent answers because they lack the necessary context.</p><h3>Enter Retrieval-Augmented Generation (RAG)</h3><p>RAG is a paradigm that bridges the gap between the generative capabilities of LLMs and the specific, factual nature of corporate data. It works by combining a retrieval mechanism (usually a vector database) with a generative model.</p><p>When a user asks a question, the system first searches the vector database for relevant internal documents. It then feeds these retrieved documents, along with the original question, to the LLM. The LLM is instructed to answer the question <em>only</em> based on the provided context.</p><h3>Building the Pipeline</h3><p><strong>1. Data Ingestion and Embedding:</strong> Company documents (PDFs, intranet pages, Zendesk tickets) are parsed, chunked into smaller segments, and converted into numerical vectors (embeddings) using models like text-embedding-ada-002.</p><p><strong>2. Vector Database:</strong> These vectors are stored in specialized databases like Pinecone, Weaviate, or Milvus, optimized for fast similarity search.</p><p><strong>3. The Retrieval Phase:</strong> The user\'s query is also converted into an embedding. The system searches the vector database for document chunks with embeddings closest to the query embedding.</p><h3>Business Impact</h3><p>Implementing RAG transforms generic chatbots into powerful, highly accurate corporate assistants. They can confidently answer HR policy queries, assist customer support agents by surfacing relevant documentation, and act as intelligent knowledge management interfaces, all while keeping proprietary data secure and significantly mitigating the risk of AI hallucination.</p>',
            ],
            [
                'title' => 'Zero Trust Network Architecture: Moving Beyond the Perimeter',
                'category_id' => $categoryModels[2]->id, // Networking
                'excerpt' => 'Traditional perimeter-based security is no longer sufficient. Learn why Zero Trust architecture is essential for modern networking and how to implement its core principles.',
                'content' => '<h2>The Death of the Perimeter</h2><p>The traditional approach to network security was simple: build a strong perimeter (the "moat") and trust everything inside it. This model worked when applications lived in on-premises data centers and employees worked from corporate offices. However, the rise of cloud computing, remote work, and BYOD policies has completely dissolved the traditional network perimeter.</p><h3>What is Zero Trust?</h3><p>Zero Trust is a security model built on the principle of "never trust, always verify." It assumes that threats exist both inside and outside the network, and therefore, no user, device, or application should be trusted by default.</p><p>Every access request must be authenticated, authorized, and continuously validated before access is granted, regardless of where the request originates.</p><h3>Core Pillars of Zero Trust Implementation</h3><p><strong>1. Identity-Centric Security:</strong> Robust identity and access management (IAM) is the foundation. Multi-factor authentication (MFA) and granular, role-based access control (RBAC) are mandatory.</p><p><strong>2. Micro-segmentation:</strong> Networks must be divided into smaller, isolated segments. This limits the "blast radius" if a breach occurs, preventing lateral movement by attackers.</p><p><strong>3. Least Privilege Access:</strong> Users and devices should only be granted the absolute minimum level of access necessary to perform their required tasks.</p><p><strong>4. Continuous Monitoring:</strong> Security posture must be evaluated continuously. Automated tools should monitor for anomalous behavior and instantly revoke access if suspicious activity is detected.</p><h3>The Journey, Not a Destination</h3><p>Implementing Zero Trust is not a single project but an ongoing strategic initiative. It requires a fundamental shift in how organizations think about network design and security policies, but it is an absolute necessity in today\'s complex and threat-rich digital landscape.</p>',
            ],
            [
                'title' => 'Integrating PLCs with IIoT for Predictive Maintenance',
                'category_id' => $categoryModels[3]->id, // Automation
                'excerpt' => 'Discover how connecting traditional Programmable Logic Controllers (PLCs) to Industrial IoT platforms enables predictive maintenance, drastically reducing unexpected downtime on the factory floor.',
                'content' => '<h2>From Reactive to Predictive</h2><p>In industrial automation, unexpected machine downtime is the enemy of profitability. Traditionally, maintenance has been either reactive (fixing things when they break) or preventative (performing maintenance on a fixed schedule, regardless of actual wear). Both approaches are inefficient.</p><p>Predictive maintenance represents a paradigm shift. By continuously monitoring the real-time condition of equipment, maintenance can be scheduled exactly when needed, just before a failure occurs.</p><h3>Bridging the Gap: PLCs and IIoT</h3><p>Programmable Logic Controllers (PLCs) have long been the brains of the factory floor, controlling individual machines and processes. However, this data was often siloed. The Industrial Internet of Things (IIoT) changes this by connecting these isolated PLCs to centralized cloud platforms.</p><p><strong>Data Extraction:</strong> Using edge gateways and protocols like MQTT or OPC UA, operational data (temperature, vibration, motor current, cycle times) is securely extracted from PLCs.</p><p><strong>Cloud Analytics:</strong> This telemetry data is streamed to IIoT platforms (like AWS IoT Core or Azure IoT Hub). Here, advanced analytics and machine learning models analyze the data streams.</p><h3>The Role of Machine Learning</h3><p>Machine learning models are trained on historical data to identify patterns that precede equipment failure. For example, a subtle increase in motor vibration combined with a slight rise in temperature might indicate an impending bearing failure.</p><p>When the IIoT platform detects these anomalies in real-time data, it automatically generates alerts, allowing maintenance teams to intervene proactively.</p><h3>Benefits Realized</h3><p>The integration of PLCs with IIoT for predictive maintenance offers compelling ROI. It extends equipment lifespan, optimizes spare parts inventory, improves worker safety, and crucially, maximizes Overall Equipment Effectiveness (OEE) by nearly eliminating catastrophic, unplanned downtime.</p>',
            ],
            [
                'title' => 'Navigating Cloud Cost Optimization: Strategies for AWS and Azure',
                'category_id' => $categoryModels[4]->id, // Cloud
                'excerpt' => 'Cloud environments offer infinite scalability, but also infinite billing potential. Learn essential FinOps strategies to optimize your cloud spend without compromising performance.',
                'content' => '<h2>The Cloud Bill Shock</h2><p>The agility of cloud computing often leads to rapid, decentralized provisioning of resources. Without strict governance, this quickly results in "cloud sprawl" and unexpected, massive monthly bills. Effective cloud cost optimization—often formalized as FinOps—is critical for maximizing the return on cloud investments.</p><h3>Visibility is the First Step</h3><p>You cannot optimize what you cannot see. The foundational step is implementing comprehensive tagging strategies. Every resource (EC2 instance, S3 bucket, Azure VM) must be tagged with cost center, project, and owner metadata. This enables precise cost allocation and showback/chargeback reporting.</p><h3>Key Optimization Strategies</h3><p><strong>1. Rightsizing Resources:</strong> Developers often over-provision instances to ensure performance. Utilize cloud provider tools (AWS Compute Optimizer, Azure Advisor) to analyze historical utilization and downgrade oversized instances to more appropriate tiers.</p><p><strong>2. Eliminating Waste:</strong> Identify and terminate idle resources. This includes unattached EBS volumes, obsolete snapshots, unassigned Elastic IPs, and idle load balancers. Automated scripts should regularly audit and clean up these orphans.</p><p><strong>3. Leveraging Pricing Models:</strong> Standard pay-as-you-go pricing is the most expensive option. For predictable workloads, utilizing Reserved Instances (RIs) or Savings Plans can yield discounts of up to 72% compared to on-demand pricing. For fault-tolerant, flexible workloads, Spot Instances offer massive savings.</p><p><strong>4. Storage Lifecycle Management:</strong> Not all data needs to sit in expensive, high-performance storage. Implement lifecycle policies to automatically transition older, infrequently accessed data to cheaper storage tiers (e.g., from S3 Standard to S3 Glacier).</p><h3>Fostering a Cost-Conscious Culture</h3><p>Cost optimization is not just a technical challenge; it\'s a cultural one. Engineering teams must understand the financial implications of their architectural decisions. By empowering developers with cost visibility and integrating cost checks into the CI/CD pipeline, organizations can maintain control over their cloud spend while continuing to innovate rapidly.</p>',
            ]
        ];

        $postModels = [];
        $now = Carbon::now();

        foreach ($posts as $index => $postData) {
            $wordCount = str_word_count(strip_tags($postData['content']));
            $readingTime = ceil($wordCount / 200); // 200 words per minute average

            $post = BlogPost::updateOrCreate(
                ['slug' => Str::slug($postData['title'])],
                [
                    'title' => $postData['title'],
                    'category_id' => $postData['category_id'],
                    'excerpt' => $postData['excerpt'],
                    'body' => $postData['content'],
                    'status' => 'published', // Using raw string, ideally should be an Enum if defined
                    'reading_time' => $readingTime,
                    'published_at' => $now->copy()->subDays((5 - $index) * 3), // Staggered dates
                    'featured_image' => null,
                ]
            );

            // Attach 2-3 random tags
            $randomTags = collect($tagModels)->random(rand(2, 3))->pluck('id');
            $post->tags()->sync($randomTags);
            
            $postModels[] = $post;
        }
    }
}
