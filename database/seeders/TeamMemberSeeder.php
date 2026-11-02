<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'Alexander Wright',
                'position' => 'Chief Executive Officer',
                'bio' => 'With over 20 years of experience in enterprise technology, Alexander leads Intliex’s strategic vision. He previously served as CTO for two successful tech startups and holds a Master’s in Computer Science from Stanford University.',
                'sort_order' => 1,
                'social_links' => json_encode(['linkedin' => 'https://linkedin.com/']),
                // 'social_twitter' => 'https://twitter.com/',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Sophia Patel',
                'position' => 'Head of Artificial Intelligence',
                'bio' => 'Sophia holds a Ph.D. in Machine Learning and directs our AI research and implementation teams. She specializes in NLP and predictive modeling, ensuring our clients leverage the most advanced, ethical AI solutions available.',
                'sort_order' => 2,
                'social_links' => json_encode(['linkedin' => 'https://linkedin.com/']),
                'is_active' => true,
            ],
            [
                'name' => 'Marcus Johnson',
                'position' => 'Director of Cloud Architecture',
                'bio' => 'A certified AWS Solutions Architect and Azure Expert, Marcus oversees all cloud migrations and infrastructure deployments. He is passionate about building scalable, cost-optimized, and highly secure cloud environments.',
                'sort_order' => 3,
                'social_links' => json_encode(['linkedin' => 'https://linkedin.com/']),
                // 'social_github' => 'https://github.com/',
                'is_active' => true,
            ],
            [
                'name' => 'Elena Rostova',
                'position' => 'Lead Automation Engineer',
                'bio' => 'Elena brings a decade of hands-on experience on the factory floor. She leads our industrial automation division, specializing in complex PLC programming, SCADA systems, and integrating legacy machinery with modern IIoT platforms.',
                'sort_order' => 4,
                'social_links' => json_encode(['linkedin' => 'https://linkedin.com/']),
                'is_active' => true,
            ],
            [
                'name' => 'James Harrison',
                'position' => 'VP of Software Engineering',
                'bio' => 'James champions our agile development methodologies and quality assurance processes. He oversees our software teams, ensuring that every web, mobile, and desktop application we build is robust, maintainable, and aligned with client goals.',
                'sort_order' => 5,
                'social_links' => json_encode(['linkedin' => 'https://linkedin.com/']),
                // 'social_github' => 'https://github.com/',
                'is_active' => true,
            ],
            [
                'name' => 'Nadia Al-Fayed',
                'position' => 'Principal Network Architect',
                'bio' => 'Nadia designs resilient enterprise networks with a focus on Zero Trust architecture. She holds multiple high-level networking certifications and ensures our clients’ infrastructures are secure, fast, and future-ready.',
                'sort_order' => 6,
                'social_links' => json_encode(['linkedin' => 'https://linkedin.com/']),
                'is_active' => true,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
