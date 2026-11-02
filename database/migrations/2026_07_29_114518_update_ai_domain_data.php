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
        DB::table('domains')->where('slug', 'artificial-intelligence')->update([
            'tagline' => 'Enterprise Artificial Intelligence & Machine Learning.',
            'description' => 'We engineer secure, scalable AI solutions that deliver measurable ROI. From rapid feasibility prototypes to full-scale Agentic workflows and Custom Machine Learning models, our data science teams integrate AI seamlessly into your enterprise ecosystem.',
        ]);

        $domainId = DB::table('domains')->where('slug', 'artificial-intelligence')->value('id');

        if (!$domainId) {
            // Fallback for older seeded slug
            $domainId = DB::table('domains')->where('slug', 'ai')->value('id');
        }

        if (!$domainId) {
            return; // Safety fallback
        }

        // Delete existing features for AI domain services
        $serviceIds = DB::table('services')->where('domain_id', $domainId)->pluck('id');
        DB::table('service_features')->whereIn('service_id', $serviceIds)->delete();
        
        // Delete existing services for AI domain
        DB::table('services')->where('domain_id', $domainId)->delete();

        // Re-insert enriched services
        DB::table('services')->insert([
            [
                'domain_id' => $domainId,
                'title' => 'AI Strategy & Discovery Sprints',
                'slug' => 'ai-strategy-discovery',
                'description' => 'De-risk your AI investment. We audit your raw data, define clear business hypotheses, and build a rapid technical roadmap to validate feasibility before full-scale engineering begins.',
                'icon' => 'light-bulb',
                'tech_stack' => json_encode(['Data Auditing', 'CRISP-DM', 'Feasibility Modeling', 'Architecture Design']),
                'features' => json_encode([
                    'Exploratory Data Analysis (EDA)',
                    'Use-Case Prioritization',
                    'Cloud/On-Prem Architecture Design',
                    'ROI & Latency Benchmarking',
                ]),
                'sort_order' => 1,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Custom Machine Learning',
                'slug' => 'custom-machine-learning',
                'description' => 'Move beyond generic APIs. We build bespoke predictive models tailored to your proprietary datasets, solving complex challenges like demand forecasting, fraud detection, and predictive maintenance.',
                'icon' => 'cpu-chip',
                'tech_stack' => json_encode(['PyTorch', 'TensorFlow', 'Scikit-learn', 'XGBoost', 'Python']),
                'features' => json_encode([
                    'Deep Learning & Neural Networks',
                    'Hyperparameter Tuning',
                    'Proprietary Algorithm Development',
                    'Real-time Predictive Analytics',
                ]),
                'sort_order' => 2,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Generative AI & Agentic Workflows',
                'slug' => 'generative-ai-agents',
                'description' => 'Harness the power of modern LLMs securely. We develop Retrieval-Augmented Generation (RAG) architectures and autonomous AI agents that reason, plan, and execute tasks across your internal knowledge bases.',
                'icon' => 'sparkles',
                'tech_stack' => json_encode(['OpenAI/Claude', 'LangChain', 'LlamaIndex', 'Pinecone', 'Weaviate']),
                'features' => json_encode([
                    'Custom LLM Fine-tuning',
                    'RAG & Vector Database Integration',
                    'Multi-Agent Autonomous Workflows',
                    'Strict Data Privacy (No Public Training)',
                ]),
                'sort_order' => 3,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Computer Vision & NLP',
                'slug' => 'computer-vision-nlp',
                'description' => 'Transform unstructured data into actionable insights. We build systems capable of reading documents, analyzing video feeds in real-time, and extracting intelligent metadata at enterprise scale.',
                'icon' => 'eye',
                'tech_stack' => json_encode(['OpenCV', 'YOLO', 'Hugging Face', 'Spacy', 'AWS Textract']),
                'features' => json_encode([
                    'OCR & Document Intelligence',
                    'Real-time Object Detection',
                    'Sentiment Analysis & Text Mining',
                    'Automated Video Analytics',
                ]),
                'sort_order' => 4,
            ],
            [
                'domain_id' => $domainId,
                'title' => 'Data Engineering & MLOps',
                'slug' => 'data-engineering-mlops',
                'description' => 'A model is only as good as its pipeline. We design robust ETL processes, feature stores, and automated retraining pipelines to ensure your AI remains accurate and performant in production.',
                'icon' => 'circle-stack',
                'tech_stack' => json_encode(['Apache Spark', 'Airflow', 'AWS SageMaker', 'MLflow', 'Docker']),
                'features' => json_encode([
                    'High-throughput ETL Pipelines',
                    'Continuous Integration / Continuous Training (CI/CT)',
                    'Model Drift Detection',
                    'Scalable API Inference Deployment',
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
