<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->truncate();

        $projects = [
            [
                'title' => json_encode([
                    'en' => 'Multi-Tenant SaaS ERP',
                    'ar' => 'منصة ERP سحابية (SaaS)',
                ]),
                'role' => json_encode([
                    'en' => 'Lead Backend Engineer',
                    'ar' => 'قيادي هندسة واجهات خلفية (Lead Backend)',
                ]),
                'description' => json_encode([ // Using description as a general field, though existing data splits it
                    'en' => 'Leading backend development for a multi-tenant SaaS ERP.',
                    'ar' => 'قيادة هندسة منصة SaaS ERP متعددة المستأجرين.',
                ]),
                'problem' => json_encode([
                    'en' => 'Building a scalable, multi-tenant ERP system serving 50+ companies with complex permissions and high data volume.',
                    'ar' => 'بناء نظام ERP متعدد المستأجرين قابل للتوسع لخدمة أكثر من 50 شركة مع صلاحيات معقدة وحجم بيانات ضخم.',
                ]),
                'solution' => json_encode([
                    'en' => 'Developed 30+ dynamic modules using Filament v3. Implemented Redis caching for 40% faster load times and robust RBAC for tenant isolation.',
                    'ar' => 'هندسة أكثر من 30 وحدة ديناميكية باستخدام Filament v3. تطبيق التخزين المؤقت (Redis) لتسريع الأداء بنسبة 40% ونظام صلاحيات صارم لعزل المستأجرين.',
                ]),
                'outcome' => json_encode([
                    'en' => 'Serves 50+ active companies with sub-100ms dashboard response times.',
                    'ar' => 'يخدم الآن أكثر من 50 شركة نشطة مع زمن استجابة للوحة التحكم أقل من 100 مللي ثانية.',
                ]),
                'tech_stack' => json_encode(['Laravel', 'Filament v3', 'Livewire', 'Redis', 'MySQL']),
                'image' => 'assets/img/portfolio/project-1-min.png',
                'video_url' => 'https://www.youtube.com/watch?v=LXb3EKWsInQ', // Placeholder
                'display_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => json_encode([
                    'en' => 'Secure Fintech Payment System',
                    'ar' => 'نظام مدفوعات مالية آمن',
                ]),
                'role' => json_encode([
                    'en' => 'Back-End Developer',
                    'ar' => 'مطور الواجهة الخلفية',
                ]),
                'description' => json_encode([
                    'en' => 'Designed secure APIs integrating Paymob & other providers.',
                    'ar' => 'هندسة بوابات دفع آمنة تتوافق مع المعايير المالية.',
                ]),
                'problem' => json_encode([
                    'en' => 'Need for a secure, multi-gateway payment infrastructure with real-time transaction tracking.',
                    'ar' => 'الحاجة إلى بنية تحتية آمنة للمدفوعات عبر بوابات متعددة مع تتبع المعاملات بشكل لحظي.',
                ]),
                'solution' => json_encode([
                    'en' => 'Designed secure APIs integrating Paymob & other providers. Added Firebase (FCM) for notifications and Zoho CRM/VoIP integrations.',
                    'ar' => 'تصميم واجهات برمجة تطبيقات (APIs) آمنة تتكامل مع Paymob ومزودين آخرين. إضافة Firebase (FCM) للإشعارات وتكامل مع Zoho CRM و VoIP.',
                ]),
                'outcome' => json_encode([
                    'en' => 'Improved user engagement by 30% and enabled seamless multi-channel payment processing.',
                    'ar' => 'تحسين تفاعل المستخدمين بنسبة 30% وتمكين معالجة المدفوعات بسلاسة عبر قنوات متعددة.',
                ]),
                'tech_stack' => json_encode(['Laravel', 'REST APIs', 'Docker', 'Paymob', 'Firebase']),
                'image' => 'assets/img/portfolio/project-2-min.png',
                'video_url' => 'https://www.youtube.com/watch?v=LXb3EKWsInQ', // Placeholder
                'display_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => json_encode([
                    'en' => 'Real-Time Mobile Infrastructure',
                    'ar' => 'بنية تحتية لتطبيقات الجوال',
                ]),
                'role' => json_encode([
                    'en' => 'Backend Developer',
                    'ar' => 'مهندس أنظمة',
                ]),
                'description' => json_encode([
                    'en' => 'Supporting multiple cross-platform mobile apps.',
                    'ar' => 'دعم تطبيقات جوال متعددة المنصات.',
                ]),
                'problem' => json_encode([
                    'en' => 'Supporting multiple cross-platform mobile apps (HR, Sales, Antifat) with real-time data synchronization.',
                    'ar' => 'دعم تطبيقات جوال متعددة المنصات (HR, Sales, Antifat) مع مزامنة البيانات بشكل لحظي.',
                ]),
                'solution' => json_encode([
                    'en' => 'Built optimized RESTful endpoints for Gap Cloud HR & Sales Apps. Implemented real-time tracking and background sync.',
                    'ar' => 'بناء نقاط وصول RESTful محسنة لتطبيقات Gap Cloud للمبيعات والموارد البشرية. تطبيق التتبع اللحظي والمزامنة في الخلفية.',
                ]),
                'outcome' => json_encode([
                    'en' => 'Reliable backend supporting thousands of daily active users across iOS and Android platforms.',
                    'ar' => 'واجهة خلفية موثوقة تدعم آلاف المستخدمين النشطين يوميًا عبر منصات iOS و Android.',
                ]),
                'tech_stack' => json_encode(['Laravel API', 'Sanctum', 'FCM', 'Google Maps API']),
                'image' => 'assets/img/portfolio/project-3-min.png',
                'video_url' => 'https://www.youtube.com/watch?v=LXb3EKWsInQ', // Placeholder
                'display_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
