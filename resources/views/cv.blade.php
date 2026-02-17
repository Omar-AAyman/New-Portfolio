<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Omar Ayman') }} - CV</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            line-height: 1.28;
            /* Tighter line height */
            margin: 0;
            padding: 0;
            background: #525659;
        }

        .cv-page {
            width: 210mm;
            min-height: 297mm;
            margin: 20px auto;
            background: white;
            padding: 28px 38px;
            /* Aggressively reduced padding */
            box-sizing: border-box;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        h1 {
            font-size: 34pt;
            /* Slightly smaller */
            font-weight: 900;
            text-transform: uppercase;
            color: #1a233a;
            margin: 0;
            line-height: 1;
            letter-spacing: 1px;
        }

        .role-title {
            color: #2980b9;
            font-size: 10.3pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 4.5px;
            margin-bottom: 4.8px;
        }

        .contact-row {
            font-size: 8.5pt;
            color: #444;
            margin-bottom: 13px;
            /* Reduced from 15px */
        }

        .contact-row a {
            text-decoration: none;
            color: #2980b9;
        }

        .contact-row span {
            margin: 0 5px;
            color: #ccc;
        }

        .divider {
            border-bottom: 2px solid #1a233a;
            margin: 9px 0 13px 0;
            /* Tighter divider */
        }

        .section-header {
            font-size: 11.3pt;
            font-weight: 900;
            text-transform: uppercase;
            color: #1a233a;
            margin-top: 16px;
            /* Reduced from 18px */
            margin-bottom: 7px;
            /* Reduced from 8px */
            border-bottom: 1px solid #ccc;
            padding-bottom: 2.5px;
            page-break-after: avoid;
        }

        p {
            font-size: 9pt;
            margin-bottom: 4.5px;
            text-align: justify;
        }

        /* Core Competencies Pills */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 5.5px;
            margin-bottom: 9px;
            /* Reduced margin */
            page-break-inside: avoid;
        }

        .skill-pill {
            background: #eef4f9;
            border: 1px solid #dcdcdc;
            padding: 2.5px 8px;
            font-size: 8pt;
            font-weight: 700;
            color: #1a233a;
            border-radius: 4px;
        }

        /* Technical Skills Grid */
        .tech-skills-grid {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 2.5px 15px;
            margin-bottom: 9px;
            /* Reduced margin */
            page-break-inside: avoid;
        }

        .ts-Label {
            font-weight: 800;
            font-size: 9pt;
            color: #1a233a;
        }

        .ts-Value {
            font-size: 9pt;
            color: #333;
        }

        /* Experience Item */
        .exp-item {
            margin-bottom: 11px;
            /* Reduced from 12px */
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .exp-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5px;
        }

        .exp-role {
            font-weight: 800;
            font-size: 9.5pt;
            color: #000;
        }

        .exp-company {
            font-weight: 400;
            color: #444;
        }

        .exp-date {
            font-weight: 400;
            font-size: 9pt;
            color: #666;
        }

        ul {
            margin: 2.5px 0;
            padding-left: 18px;
        }

        li {
            font-size: 9pt;
            /* margin-bottom: 1.25px; */
            color: #333;
        }

        /* Prevent breaking inside headers or skills */
        .section-header {
            page-break-after: avoid;
        }

        .tech-skills-grid,
        .skills-container {
            page-break-inside: avoid;
            break-inside: avoid;
        }

        /* Print Controls */
        @media print {
            body {
                background: white;
                -webkit-print-color-adjust: exact;
            }

            .cv-page {
                margin: 0;
                box-shadow: none;
                width: 100%;
                height: auto;
                min-height: 0;
                padding: 0;
                overflow: hidden;
            }

            .no-print {
                display: none;
            }
        }

        /* PDF Generation Overrides */
        body.generating-pdf .cv-page {
            margin: 0 !important;
            box-shadow: none !important;
            border: none !important;
            padding: 28px 38px !important;
            /* Keep user's padding */
            width: 210mm !important;
            min-height: 0 !important;
            height: auto !important;
        }

        .btn-download {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #e74c3c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <button id="download-pdf" class="btn-download no-print" style="border: none; cursor: pointer;">
        ⬇️ Download PDF
    </button>

    <div class="cv-page">
        <!-- Header -->
        <header>
            <h1>OMAR AYMAN MOHAMED</h1>
            <div class="role-title">BACK-END ENGINEER | SAAS ARCHITECTURE • LARAVEL • FINTECH SYSTEMS</div>
            <div class="contact-row">
                Cairo, Egypt (Open to relocation & remote) <span>|</span> Phone: <span id="cv-phone">Loading...</span>
                <span>|</span> Email:
                <span id="cv-email">Loading...</span><br>
                <script>
                    (function() {
                        var u = 'Omaraymn411',
                            d = 'gmail.com';
                        document.getElementById('cv-email').innerHTML = '<a href="mailto:' + u + '@' + d + '">' + u + '@' + d +
                            '</a>';
                        document.getElementById('cv-phone').innerHTML = '+20 11 4968 5494';
                    })();
                </script>
                LinkedIn: <a
                    href="https://www.linkedin.com/in/omar-ayman-%F0%9F%87%B5%F0%9F%87%B8-789725183">linkedin.com/in/omar-ayman</a>
                <span>|</span> GitHub:
                <a href="https://github.com/Omar-AAyman">github.com/Omar-AAyman</a> <span>|</span> Portfolio: <a
                    href="https://omarayman-portfolio.is-great.net/">omarayman-portfolio.is-great.net</a>
            </div>
            <div class="divider"></div>
        </header>

        <!-- Summary -->
        <div class="section-header">PROFESSIONAL SUMMARY</div>
        <p>
            Back-End Engineer with 3+ years of experience building scalable SaaS ERP and fintech systems using the
            Laravel ecosystem. Proven track record designing multi-tenant architectures serving 50+ companies,
            implementing secure multi-gateway payment infrastructures, and improving system performance by up to 40%.
            Specialized in RESTful API design, real-time systems, caching strategies, database optimization, and complex
            third-party integrations. Strong focus on clean architecture, scalability, security, and production-grade
            backend systems.
        </p>

        <!-- Core Competencies -->
        <div class="section-header">CORE COMPETENCIES</div>
        <div class="skills-container">
            <span class="skill-pill">SaaS & Multi-Tenant Architecture</span>
            <span class="skill-pill">RESTful API Design</span>
            <span class="skill-pill">Payment Gateway Integration</span>
            <span class="skill-pill">Performance Optimization</span>
            <span class="skill-pill">Real-Time Systems & WebSockets</span>
            <span class="skill-pill">Database & Query Optimization</span>
            <span class="skill-pill">RBAC & Security</span>
            <span class="skill-pill">Background Jobs & Queues</span>
            <span class="skill-pill">Third-Party Integrations</span>
        </div>

        <!-- Technical Skills -->
        <div class="section-header">TECHNICAL SKILLS</div>
        <div class="tech-skills-grid">
            <div class="ts-Label">Backend & Frameworks</div>
            <div class="ts-Value">PHP (Laravel 9/10+), Filament v3, Livewire, REST APIs, WebSockets, Redis, MySQL</div>

            <div class="ts-Label">Integrations</div>
            <div class="ts-Value">Paymob, Lahza, Firebase (FCM & Analytics), Google Play, Zoho CRM, MS Clarity, Maqsam
                VoIP</div>

            <div class="ts-Label">DevOps & Tools</div>
            <div class="ts-Value">Git, GitHub, Linux, Postman, Docker (Basic), Debugging, Performance Monitoring</div>

            <div class="ts-Label">Concepts & Frontend</div>
            <div class="ts-Value">OOP, MVC, SOLID, Design Patterns, Agile/Scrum; Blade, Alpine.js, Tailwind CSS, JS
            </div>
        </div>

        <!-- Experience -->
        <div class="section-header">PROFESSIONAL EXPERIENCE</div>

        <div class="exp-item">
            <div class="exp-header">
                <span class="exp-role">Mid-Level Software Developer <span class="exp-company">– Gap Cloud (SaaS ERP
                        Platform)</span></span>
                <span class="exp-date">Aug 2025 – Present</span>
            </div>
            <ul>
                <li>Architected and developed 30+ dynamic Filament v3 admin resources with real-time Livewire updates.
                </li>
                <li>Designed and implemented multi-tenant ERP modules serving 50+ active companies.</li>
                <li>Reduced dashboard load time by 40% through Redis caching and query optimization.</li>
                <li>Designed scalable database schemas ensuring tenant isolation.</li>
                <li>Implemented RBAC systems, dynamic menus, and advanced audit logging.</li>
                <li>Built queue-based background job processing for asynchronous operations.</li>
            </ul>
        </div>

        <div class="exp-item">
            <div class="exp-header">
                <span class="exp-role">Back-End Developer (Fintech) <span class="exp-company">– Seena Pay</span></span>
                <span class="exp-date">Apr 2024 – Jul 2025</span>
            </div>
            <ul>
                <li>Designed secure multi-gateway payment systems integrating Paymob and other providers.</li>
                <li>Developed scalable RESTful APIs for mobile and backend communication.</li>
                <li>Implemented Firebase Cloud Messaging increasing engagement by 30%.</li>
                <li>Integrated Zoho CRM and Microsoft Clarity for analytics and tracking.</li>
                <li>Led Maqsam VoIP integration with call tracking and recording systems.</li>
                <li>Optimized database queries and caching to reduce API response times.</li>
            </ul>
        </div>

        <div class="exp-item">
            <div class="exp-header">
                <span class="exp-role">Freelance Back-End Developer <span class="exp-company">– Remote</span></span>
                <span class="exp-date">Sep 2022 – Present</span>
            </div>
            <ul>
                <li>Delivered custom backend systems and third-party integrations for startups and SMEs.</li>
                <li>Designed secure authentication systems and scalable REST APIs.</li>
                <li>Optimized backend infrastructure and database performance.</li>
            </ul>
        </div>

        <!-- Education -->
        <div class="section-header">EDUCATION</div>

        <div class="exp-item">
            <div class="exp-header">
                <span class="exp-role">Computer Science Diploma (In Progress)</span>
                <span class="exp-date">Oct 2025 – Present</span>
            </div>
            <div style="font-size: 9pt;">Arab Academy for Science, Technology & Maritime Transport (AAST)</div>
        </div>

        <div class="exp-item">
            <div class="exp-header">
                <span class="exp-role">Bachelor's Degree – Arabic & Islamic Studies</span>
                <span class="exp-date">2018 – 2022</span>
            </div>
            <div style="font-size: 9pt;">Cairo University</div>
        </div>

        <!-- Languages -->
        <div class="section-header">LANGUAGES</div>
        <div style="font-size: 9pt;">
            <strong>Arabic:</strong> Native | <strong>English:</strong> Professional Working Proficiency
        </div>

    </div>

    <!-- PDF Generation Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('download-pdf').addEventListener('click', function() {
            const element = document.querySelector('.cv-page');
            document.body.classList.add('generating-pdf'); // Apply clean styles

            const opt = {
                margin: 0, // Standard 0 margin
                filename: 'Omar-Ayman-CV.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    scrollY: 0,
                    useCORS: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                },
                pagebreak: {
                    mode: ['css', 'legacy'] // Use CSS rules mainly
                }
            };

            // Promise-based usage:
            html2pdf().set(opt).from(element).save().then(function() {
                document.body.classList.remove('generating-pdf'); // Revert styles
                console.log('PDF downloaded!');
            }).catch(function(err) {
                document.body.classList.remove('generating-pdf'); // Revert styles on error
                console.error('Error exporting PDF:', err);
                alert('Error generating PDF. Please try "Ctrl+P" as a backup.');
            });
        });
    </script>
</body>

</html>
