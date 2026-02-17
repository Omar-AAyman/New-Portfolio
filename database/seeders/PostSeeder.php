<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title_en' => 'Backend Optimization: Scaling Laravel for Global Users',
                'title_ar' => 'معمارية SaaS: توسيع Laravel للمستخدمين العالميين',
                'slug' => 'backend-optimization-scaling-laravel',
                'image' => 'assets/img/blog/saas_architecture.png',
                'content_en' => '<h2>High-Performance Multi-Tenancy</h2><p>Scaling a SaaS platform requires more than just adding servers. It involves a deep understanding of database sharding, caching layers (Redis), and horizontal scaling. In Laravel, we leverage advanced Service Provider patterns to dynamically configure tenant resources.</p><h3>Key Scalability Components</h3><ul><li><strong>Database Sharding:</strong> Distributing tenant data across multiple database instances to prevent bottlenecks.</li><li><strong>Global CDN Integration:</strong> Reducing latency by serving static assets from edge locations.</li><li><strong>Queue Optimization:</strong> Using Horizon to manage thousands of concurrent background jobs efficiently.</li></ul><blockquote>"Scaling is not about handling more users; it is about maintainability under pressure."</blockquote>',
                'content_ar' => '<h2>تعدد المستأجرين عالي الأداء</h2><p>توسيع منصة SaaS يتطلب أكثر من مجرد إضافة خوادم. يتضمن ذلك فهمًا عميقًا لتقسيم قواعد البيانات (Sharding)، وطبقات التخزين المؤقت (Redis)، والتوسع الأفقي. في Laravel، نستخدم أنماط متقدمة من Service Providers لتكوين موارد المستأجرين ديناميكيًا.</p><h3>مكونات التوسع الرئيسية</h3><ul><li><strong>تقسيم قواعد البيانات:</strong> توزيع بيانات المستأجرين عبر عدة خوادم لمنع الاختناقات.</li><li><strong>تكامل CDN العالمي:</strong> تقليل زمن الاستجابة من خلال خدمة الملفات الثابتة من أقرب موقع للمستخدم.</li><li><strong>تحسين الطوابير (Queues):</strong> استخدام Horizon لإدارة آلاف الوظائف الخلفية المتزامنة بكفاءة.</li></ul><blockquote>"التوسع لا يتعلق فقط بمعالجة المزيد من المستخدمين؛ بل بالحفاظ على قابلية الصيانة تحت الضغط."</blockquote>',
                'author' => 'Omar Ayman',
                'tags_en' => ['Laravel', 'SaaS', 'Scaling'],
                'tags_ar' => ['لارافيل', 'SaaS', 'التوسع'],
                'published_at' => now(),
            ],
            [
                'title_en' => 'Cyber Security: Defending Modern Laravel Applications',
                'title_ar' => 'الأمن السيبراني: الدفاع عن تطبيقات Laravel الحديثة',
                'slug' => 'cyber-security-defending-laravel-apps',
                'image' => 'assets/img/blog/cyber_security.png',
                'content_en' => '<h2>Security Beyond the Basics</h2><p>While Laravel provides built-in CSRF and XSS protection, high-security applications require a more rigorous approach, including Content Security Policy (CSP), rate limiting, and advanced SQL injection prevention.</p><h3>Hardening Your Core</h3><ul><li><strong>Rate Limiting:</strong> Protecting API endpoints from brute force and DoS attacks.</li><li><strong>Encrypted Data at Rest:</strong> Ensuring sensitive PII is encrypted within the database.</li><li><strong>Audit Logs:</strong> Tracking every sensitive action within the system for forensic analysis.</li></ul>',
                'content_ar' => '<h2>الأمن ما وراء الأساسيات</h2><p>بينما يوفر Laravel حماية مدمجة ضد CSRF و XSS، تتطلب التطبيقات عالية الأمان نهجًا أكثر صرامة، بما في ذلك سياسة أمن المحتوى (CSP)، وتحديد معدل الطلبات (Rate Limiting)، ومنع حقن SQL المتقدم.</p><h3>تحصين النظام الأساسي</h3><ul><li><strong>تحديد معدل الطلبات:</strong> حماية واجهات البرمجة من هجمات القوة الغاشمة (Brute Force) و DoS.</li><li><strong>تشفير البيانات الثابتة:</strong> ضمان تشفير معلومات الهوية الشخصية الحساسة داخل قاعدة البيانات.</li><li><strong>سجلات التدقيق:</strong> تتبع كل إجراء حساس داخل النظام للتحليل الجنائي.</li></ul>',
                'author' => 'Omar Ayman',
                'tags_en' => ['Security', 'Laravel', 'DevOps'],
                'tags_ar' => ['الأمان', 'لارافيل', 'DevOps'],
                'published_at' => now()->subDays(1),
            ],
            [
                'title_en' => 'AI Integration: Leveraging OpenAI API inside PHP',
                'title_ar' => 'تكامل الذكاء الاصطناعي: استخدام OpenAI API داخل PHP',
                'slug' => 'ai-integration-openai-php',
                'image' => 'assets/img/blog/ai_integration.png',
                'content_en' => '<h2>The AI Era in Web Development</h2><p>Integrating AI models like GPT-4 directly into your Laravel application can transform user experiences from static forms to intelligent assistants. We use Laravel\'s HTTP client to wrap OpenAI calls in robust jobs.</p><h3>Practical AI Features</h3><ul><li><strong>Auto-Content Generation:</strong> Helping users create descriptions and metadata.</li><li><strong>Predictive Analytics:</strong> Using historical data to forecast user behavior.</li><li><strong>Intelligent Search:</strong> Implementing semantic search using vector embeddings.</li></ul>',
                'content_ar' => '<h2>عصر الذكاء الاصطناعي في تطوير الويب</h2><p>يمكن أن يؤدي دمج نماذج الذكاء الاصطناعي مثل GPT-4 مباشرة في تطبيق Laravel الخاص بك إلى تحويل تجارب المستخدم من نماذج ثابتة إلى مساعدين أذكياء. نحن نستخدم عميل HTTP في Laravel لتغليف استدعاءات OpenAI في وظائف قوية.</p><h3>ميزات الذكاء الاصطناعي العملية</h3><ul><li><strong>التوليد التلقائي للمحتوى:</strong> مساعدة المستخدمين في إنشاء الأوصاف والبيانات الوصفية.</li><li><strong>التحليلات التنبؤية:</strong> استخدام البيانات التاريخية لتوقع سلوك المستخدم.</li><li><strong>البحث الذكي:</strong> تنفيذ البحث الدلالي باستخدام تضمينات المتجهات (Vector Embeddings).</li></ul>',
                'author' => 'Omar Ayman',
                'tags_en' => ['AI', 'OpenAI', 'PHP'],
                'tags_ar' => ['الذكاء الاصطناعي', 'OpenAI', 'PHP'],
                'published_at' => now()->subDays(2),
            ],
            [
                'title_en' => 'Real-Time Systems: WebSockets vs Long Polling',
                'title_ar' => 'الأنظمة اللحظية: WebSockets مقابل Long Polling',
                'slug' => 'real-time-systems-websockets-vs-polling',
                'image' => 'assets/img/blog/scalable_platforms.png',
                'content_en' => '<h2>Building Reactive User Interfaces</h2><p>Modern users expect instant feedback. Whether it is a chat application or a live trading dashboard, choosing the right real-time technology is crucial for performance and cost.</p><h3>Soketi and Laravel Echo</h3><p>Laravel Echo simplified the integration of WebSockets. By using Soketi as a self-hosted alternative to Pusher, we can handle millions of events without scaling costs.</p>',
                'content_ar' => '<h2>بناء واجهات مستخدم تفاعلية</h2><p>يتوقع المستخدمون الحديثون ردود فعل فورية. سواء كان تطبيق دردشة أو لوحة تحكم للتداول المباشر، فإن اختيار تقنية اللحظة الحقيقية المناسبة أمر بالغ الأهمية للأداء والتكلفة.</p><h3>Soketi و Laravel Echo</h3><p>سهّل Laravel Echo تكامل WebSockets. باستخدام Soketi كبديل مستضاف ذاتيًا لـ Pusher، يمكننا معالجة ملايين الأحداث دون تكاليف إضافية عند التوسع.</p>',
                'author' => 'Omar Ayman',
                'tags_en' => ['WebSockets', 'Real-time', 'Soketi'],
                'tags_ar' => ['WebSockets', 'اللحظة الحقيقية', 'Soketi'],
                'published_at' => now()->subDays(3),
            ],
            [
                'title_en' => 'Database Optimization: Advanced SQL in Laravel',
                'title_ar' => 'تحسين قواعد البيانات: SQL المتقدم في Laravel',
                'slug' => 'database-optimization-advanced-sql',
                'image' => 'assets/img/blog/fintech_ledger.png',
                'content_en' => '<h2>Beyond Eloquent Queries</h2><p>Eloquent is powerful, but complex reports often require Raw SQL or advanced Query Builder techniques like Subqueries and Conditional Aggregates to remain efficient.</p><h3>Zero-Downtime Migration Tips</h3><ul><li><strong>Index Management:</strong> Ensuring every high-traffic query is backed by an efficient index.</li><li><strong>JSON Column Usage:</strong> Leveraging PostgreSQL/MySQL JSONB for flexible but performant schemaless data.</li></ul>',
                'content_ar' => '<h2>ما وراء استعلامات Eloquent</h2><p>يعد Eloquent قويًا، لكن التقارير المعقدة غالبًا ما تتطلب SQL خامًا أو تقنيات Query Builder متقدمة مثل الاستعلامات الفرعية (Subqueries) والتجميعات الشرطية لتبقى فعالة.</p><h3>نصائح لهجرة قواعد البيانات دون توقف</h3><ul><li><strong>إدارة الفهارس (Indexes):</strong> ضمان دعم كل استعلام عالي الحركة بفهرس فعال.</li><li><strong>استخدام أعمدة JSON:</strong> الاستفادة من JSONB في PostgreSQL/MySQL لبيانات مرنة وعالية الأداء بدون مخطط ثابت.</li></ul>',
                'author' => 'Omar Ayman',
                'tags_en' => ['SQL', 'Database', 'Optimization'],
                'tags_ar' => ['SQL', 'قواعد البيانات', 'التحسين'],
                'published_at' => now()->subDays(4),
            ],
            [
                'title_en' => 'The DevOps Culture: CI/CD for Freelancers',
                'title_ar' => 'ثقافة DevOps: CI/CD للمستقلين',
                'slug' => 'devops-culture-cicd-freelancers',
                'image' => 'assets/img/blog/cyber_security.png',
                'content_en' => '<h2>Automating Your Workflow</h2><p>As a developer, manual deployments are your worst enemy. CI/CD pipelines ensure that every commit is tested, built, and deployed safely to production.</p><h3>GitHub Actions and Forge</h3><p>By combining GitHub Actions for testing and Laravel Forge for deployment, we create a "push to deploy" environment that guarantees zero human error during production releases.</p>',
                'content_ar' => '<h2>أتمتة سير العمل الخاص بك</h2><p>كمطور أول، فإن عمليات النشر اليدوية هي أسوأ أعدائك. تضمن خطوط أنابيب CI/CD اختبار كل التزام (Commit) وبنائه ونشره بأمان في بيئة الإنتاج.</p><h3>GitHub Actions و Forge</h3><p>من خلال الجمع بين GitHub Actions للاختبار و Laravel Forge للنشر، نقوم بإنشاء بيئة "Push to Deploy" تضمن عدم وجود خطأ بشري أثناء إصدارات الإنتاج.</p>',
                'author' => 'Omar Ayman',
                'tags_en' => ['DevOps', 'CI/CD', 'GitHub Actions'],
                'tags_ar' => ['DevOps', 'CI/CD', 'GitHub Actions'],
                'published_at' => now()->subDays(5),
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
