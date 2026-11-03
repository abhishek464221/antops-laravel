@extends('layouts.app')

@section('title', 'Our Services | Antops Technologies')
@section('meta_description', 'End-to-end digital services by Antops Technologies - UI/UX design, web development, mobile apps, software development, digital marketing and cloud hosting.')
@section('meta_keywords', 'digital services, web development services, mobile app development, UI/UX design services, software development, digital marketing services, cloud hosting services')

@push('styles')
<style>
/* ========== HERO ========== */
.svc-hero {
    position: relative; overflow: hidden; padding: 150px 0 70px; text-align: center;
    background: linear-gradient(135deg, #B0171F 0%, #0a2f6d 100%);
}
.svc-hero-bg {
    position: absolute; inset: 0; pointer-events: none;
    background: radial-gradient(600px 300px at 85% 0%, rgba(207,23,31,.18), transparent 60%),
        radial-gradient(500px 260px at 10% 100%, rgba(255,255,255,.06), transparent 60%);
}
.svc-kicker {
    display: inline-flex; align-items: center; gap: 8px;
    background: linear-gradient(135deg, #CF171F, #F3636B); color: #B0171F;
    font-size: 12.5px; font-weight: 700; letter-spacing: 1.2px; text-transform: uppercase;
    padding: 8px 22px; border-radius: 50px; margin-bottom: 18px;
}
.svc-hero h1 { color: #fff; font-size: 44px; margin-bottom: 14px; }
.svc-hero h1 .svc-gold { color: #CF171F; }
.svc-hero p { color: rgba(255,255,255,.75); font-size: 16px; max-width: 620px; margin: 0 auto; }

/* ========== BLOCKS ========== */
.svc-block { background: #f4f8ff; padding: 70px 0; }
.svc-block-alt { background: #ffffff; }
.svc-block-head {
    display: flex; align-items: center; gap: 20px; margin-bottom: 40px;
}
.svc-cat-icon {
    min-width: 64px; height: 64px; border-radius: 18px; display: grid; place-items: center;
    background: linear-gradient(135deg, #B0171F, #B0171F); color: #CF171F; font-size: 24px;
    box-shadow: 0 14px 30px -14px rgba(176,23,31,.55);
}
.svc-block-head h2 { color: #111; font-size: 28px; margin-bottom: 6px; }
.svc-block-head h2::after {
    content: ""; display: block; width: 54px; height: 4px; margin-top: 10px;
    background: linear-gradient(90deg, #B0171F, #CF171F); border-radius: 4px;
}
.svc-block-head p { color: #5a6b8c; font-size: 15px; margin: 0; }

/* ========== CARDS ========== */
.svc-card {
    display: flex; align-items: flex-start; gap: 20px; height: 100%;
    background: #fff; border: 1px solid rgba(176,23,31,.08); border-radius: 18px;
    padding: 26px; box-shadow: 0 16px 38px -22px rgba(176,23,31,.25);
    transition: transform .35s ease, box-shadow .35s ease;
    position: relative; overflow: hidden;
}
.svc-card::before {
    content: ""; position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, #B0171F, #CF171F);
    opacity: 0; transition: opacity .35s ease;
}
.svc-card:hover { transform: translateY(-7px); box-shadow: 0 28px 54px -24px rgba(176,23,31,.35); }
.svc-card:hover::before { opacity: 1; }
.svc-card-icon {
    min-width: 56px; height: 56px; border-radius: 15px; display: grid; place-items: center;
    background: linear-gradient(135deg, rgba(176,23,31,.07), rgba(207,23,31,.1));
    color: #B0171F; font-size: 22px;
}
.svc-card-body h5 { color: #B0171F; font-size: 17px; margin-bottom: 8px; }
.svc-card-body p { color: #5a6b8c; font-size: 14px; line-height: 24px; margin-bottom: 10px; }
.svc-card-link {
    display: inline-flex; align-items: center; gap: 8px;
    color: #B0171F; font-weight: 700; font-size: 13.5px;
    border-bottom: 2px solid #CF171F; padding-bottom: 3px;
    transition: all .3s ease;
}
.svc-card:hover .svc-card-link { gap: 14px; color: #e39a00; }

/* ========== PROCESS ========== */
.svc-process { background: #f4f8ff; padding: 80px 0; }
.svc-step-card { text-align: center; padding: 20px 10px; }
.svc-step-icon {
    width: 70px; height: 70px; border-radius: 50%; display: grid; place-items: center;
    margin: 0 auto 15px; font-size: 24px; color: #fff;
    background: linear-gradient(135deg, #B0171F, #B0171F);
    box-shadow: 0 12px 26px -12px rgba(176,23,31,.5);
    transition: transform .3s ease;
}
.svc-step-card:hover .svc-step-icon { transform: translateY(-5px); background: linear-gradient(135deg, #CF171F, #F3636B); color: #B0171F; }
.svc-step-card h6 { color: #B0171F; font-size: 14.5px; margin-bottom: 6px; }
.svc-step-card p { color: #5a6b8c; font-size: 12.5px; line-height: 20px; margin: 0; }

/* ========== TECH ========== */
.svc-tech { background: #fff; padding: 80px 0; }
.tech-fbtn {
    padding: 9px 22px; border-radius: 30px; border: 2px solid #e0e4ec;
    background: #fff; color: #555; font-size: 13.5px; font-weight: 600; cursor: pointer;
    transition: all .3s ease;
}
.tech-fbtn:hover { border-color: #CF171F; color: #e39a00; }
.tech-fbtn.active { background: linear-gradient(135deg, #B0171F, #B0171F); border-color: #B0171F; color: #fff; }
.svc-tech-card {
    background: #fff; border: 1px solid #e8ecf4; border-radius: 14px;
    padding: 16px 10px; text-align: center; transition: all .3s ease;
}
.svc-tech-card:hover { transform: translateY(-4px); border-color: #CF171F; box-shadow: 0 12px 26px -14px rgba(207,23,31,.4); }
.svc-tech-card i { font-size: 28px; color: #B0171F; margin-bottom: 8px; display: block; }
.svc-tech-card span { color: #333; font-size: 13px; font-weight: 600; }

/* ========== CTA ========== */
.svc-cta {
    background: linear-gradient(135deg, #B0171F 0%, #0a2f6d 100%);
    padding: 70px 0; position: relative; overflow: hidden;
}
.svc-cta::before {
    content: ""; position: absolute; top: -80px; right: -80px; width: 240px; height: 240px;
    border-radius: 50%; background: rgba(207,23,31,.12); pointer-events: none;
}
.svc-cta h2 { color: #fff; font-size: 32px; margin-bottom: 12px; }
.svc-cta p { color: rgba(255,255,255,.75); font-size: 16px; margin-bottom: 26px; }
.svc-cta-btn {
    display: inline-flex; align-items: center; gap: 8px;
    background: linear-gradient(135deg, #CF171F, #F3636B); color: #B0171F;
    font-weight: 700; font-size: 15px; padding: 14px 30px; border-radius: 12px;
    box-shadow: 0 14px 30px -12px rgba(207,23,31,.6); transition: all .3s ease;
}
.svc-cta-btn:hover { transform: translateY(-3px); color: #B0171F; box-shadow: 0 20px 38px -12px rgba(207,23,31,.75); }

/* ========== SECTION TITLE helpers ========== */
.gredient-text {
    background: linear-gradient(135deg, #B0171F, #CF171F);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.ab-kicker {
    display: inline-flex; align-items: center; gap: 8px;
    color: #CF171F; font-size: 12.5px; font-weight: 700;
    letter-spacing: 1.4px; text-transform: uppercase;
    background: rgba(207,23,31,.08); padding: 8px 18px; border-radius: 30px;
}
.ab-kicker-center { justify-content: center; }
.ab-line {
    width: 62px; height: 3px; border-radius: 3px;
    background: linear-gradient(90deg, #B0171F, #CF171F);
    margin: 14px auto 0;
}
.ab-line-center { margin-left: auto; margin-right: auto; }

@media (max-width: 991.98px) {
    .svc-hero { padding: 130px 0 55px; }
    .svc-hero h1 { font-size: 32px; }
    .svc-block-head { flex-direction: column; align-items: flex-start; }
}
</style>
@endpush

@section('content')

{{-- ============ HERO ============ --}}
<section class="svc-hero" data-aos="fade-down">
    <div class="svc-hero-bg"></div>
    <div class="container position-relative">
        <span class="svc-kicker"><i class="fa-solid fa-layer-group"></i> What We Offer</span>
        <h1>Our <span class="svc-gold">Services</span></h1>
        <p>End-to-end digital services to accelerate your business growth</p>
    </div>
</section>

@php
/* ============ Services Data (Single Source of Truth) ============ */
$serviceGroups = [
    [
        'title'   => 'UI/UX Design',
        'icon'    => 'fas fa-paint-brush',
        'desc'    => 'Crafting intuitive, user-centered interfaces that delight users and drive conversions.',
        'slug'    => 'uiux-design',
        'items'   => [
            ['UI/UX Design', 'uiux-design', 'User-centric UI/UX design services that transform your product into a seamless, engaging and conversion-driven experience.'],
            ['Website Design', 'website-design', 'Stunning, conversion-focused website design that gives your business a professional online presence and turns visitors into customers.'],
            ['Mobile App UI/UX Design', 'mobile-app-uiux-design', 'Mobile app UI/UX design that delivers beautiful, intuitive interfaces users love to open, tap and return to every day.'],
            ['Landing Page Design', 'landing-page-design', 'High-converting landing page design that turns paid traffic and campaigns into leads, signups and sales.'],
            ['Dashboard & Admin Panel Design', 'dashboard-admin-panel-design', 'Clear, data-rich dashboard and admin panel design that makes complex information simple to scan, understand and act on.'],
            ['Logo & Brand Identity Design', 'logo-brand-identity-design', 'Memorable logo and brand identity design that makes your business instantly recognizable and professionally distinct.'],
            ['Graphic Design', 'graphic-design', 'Eye-catching graphic design for marketing, social media, print and web that keeps your brand looking sharp everywhere.'],
            ['Prototyping & Wireframing', 'prototyping-wireframing', 'Fast, interactive prototyping and wireframing that validate your product idea before you spend a rupee on development.'],
        ],
    ],
    [
        'title'   => 'Web Application Development',
        'icon'    => 'fas fa-globe',
        'desc'    => 'Building scalable, high-performance web apps and portals for modern businesses.',
        'slug'    => 'web-application-development',
        'items'   => [
            ['Website Development', 'website-development', 'Bespoke website development tailored to your exact business requirements — scalable, secure and built for performance.'],
            ['Web Application Development', 'web-application-development', 'Scalable web application development with modern architecture, seamless UX and enterprise-grade security for your business.'],
            ['E-Commerce Development', 'e-commerce-development', 'Powerful, conversion-optimized e-commerce development — stores that look great, load fast and sell more on any device.'],
            ['CMS Development', 'cms-development', 'Powerful, easy-to-manage CMS development that puts content control in your hands — no coding required.'],
            ['SaaS Application Development', 'saas-application-development', 'Multi-tenant SaaS application development that turns your software idea into a secure, scalable subscription product.'],
            ['Web Portal Development', 'web-portal-development', 'Secure, user-friendly web portal development for businesses, education, healthcare, government and communities.'],
            ['API Development & Integration', 'api-development-integration', 'Robust API development and integration services that connect your software, apps and third-party services seamlessly.'],
            ['Progressive Web App Development', 'progressive-web-app-development', 'App-like PWA development that combines the reach of the web with the speed, offline access and engagement of native apps.'],
        ],
    ],
    [
        'title'   => 'Mobile Application Development',
        'icon'    => 'fas fa-mobile-alt',
        'desc'    => 'Native and cross-platform mobile apps that engage users on iOS and Android.',
        'slug'    => 'mobile-app-development',
        'items'   => [
            ['Android App Development', 'android-app-development', 'Feature-rich Android app development using Kotlin and Java — fast, secure and scalable apps that perform beautifully.'],
            ['iOS App Development', 'ios-app-development', 'Polished, secure iOS app development in Swift and SwiftUI that delivers the premium experience Apple users expect.'],
            ['Flutter App Development', 'flutter-app-development', 'Beautiful cross-platform apps with Flutter — one codebase for Android, iOS, web and desktop without compromising quality.'],
            ['React Native App Development', 'react-native-app-development', 'High-performance React Native apps that deliver a native experience on both Android and iOS from a single JavaScript codebase.'],
            ['E-Commerce App Development', 'e-commerce-app-development', 'Mobile e-commerce app development that turns browsing into buying — secure, fast and packed with features shoppers love.'],
            ['On-Demand App Development', 'on-demand-app-development', 'On-demand app development for services, delivery and bookings — connecting customers and providers in real time.'],
            ['Business & Enterprise App Development', 'business-enterprise-app-development', 'Enterprise mobile app development that digitizes workflows, empowers your workforce and connects your business.'],
            ['Mobile App Maintenance & Support', 'mobile-app-maintenance-support', 'Reliable mobile app maintenance and support — keep your app updated, secure, optimized and bug-free as your business grows.'],
        ],
    ],
    [
        'title'   => 'Software Development',
        'icon'    => 'fas fa-laptop-code',
        'desc'    => 'Custom-built software solutions including ERP, CRM, HRMS and more.',
        'slug'    => 'software-development',
        'items'   => [
            ['Custom Software Development', 'custom-software-development', 'Custom software development solutions built around your exact business processes — scalable, secure and designed for growth.'],
            ['ERP Software Development', 'erp-software-development', 'ERP software development that integrates finance, sales, inventory, HR and operations into one unified business platform.'],
            ['CRM Software Development', 'crm-software-development', 'Custom CRM software development that centralizes leads, customers, sales pipelines and follow-ups — built around your sales process.'],
            ['HRMS Software Development', 'hrms-software-development', 'HRMS software development with employee records, attendance, leave, payroll and recruitment — unified in one HR platform.'],
            ['School Management Software', 'school-management-software', 'School management software with admissions, attendance, fees, exams, results and parent communication — all in one platform.'],
            ['Hospital Management Software', 'hospital-management-software', 'Hospital management software covering OPD, IPD, appointments, billing, pharmacy, lab reports and patient records.'],
            ['Inventory Management Software', 'inventory-management-software', 'Inventory management software with real-time stock tracking, purchase and sales management, and reorder alerts.'],
            ['Billing & POS Software', 'billing-pos-software', 'Billing & POS software with fast checkout, GST invoices, inventory sync and sales reports for retail, restaurants and more.'],
        ],
    ],
    [
        'title'   => 'Digital Marketing & Branding',
        'icon'    => 'fas fa-bullhorn',
        'desc'    => 'Data-driven marketing strategies to boost visibility, traffic and ROI.',
        'slug'    => 'digital-marketing',
        'items'   => [
            ['Search Engine Optimization (SEO)', 'search-engine-optimization-seo', 'Results-driven SEO services that improve your rankings, drive organic traffic and grow your business through Google.'],
            ['Local SEO Services', 'local-seo-services', 'Local SEO services that make your business visible to nearby customers searching on Google Maps and local search.'],
            ['Google Ads & PPC Management', 'google-ads-ppc-management', 'Google Ads & PPC management that turns your ad budget into clicks, leads and sales with expert campaign optimization.'],
            ['Social Media Marketing', 'social-media-marketing', 'Social media marketing that grows your audience, builds your brand and turns followers into customers across every channel.'],
            ['Content Marketing', 'content-marketing', 'Content marketing services that create valuable, SEO-driven content to attract, engage and convert your target audience.'],
            ['Branding & Brand Identity', 'branding-brand-identity', 'Complete branding and brand identity services — logo, colors, voice and guidelines that make your brand memorable.'],
            ['Online Reputation Management', 'online-reputation-management', 'Online reputation management services that protect and improve how your brand is perceived across reviews, search and social.'],
            ['Conversion Rate Optimization (CRO)', 'conversion-rate-optimization-cro', 'Conversion rate optimization services that turn more of your visitors into leads, signups and paying customers.'],
        ],
    ],
    [
        'title'   => 'Cloud & Hosting',
        'icon'    => 'fas fa-cloud',
        'desc'    => 'Reliable cloud infrastructure, hosting and server management services.',
        'slug'    => 'cloud-hosting',
        'items'   => [
            ['Cloud Hosting Services', 'cloud-hosting-services', 'Fast, secure and scalable cloud hosting services with high availability, automated backups and expert 24/7 management.'],
            ['VPS Hosting', 'vps-hosting', 'Powerful VPS hosting with dedicated resources, full root access and expert management for high-traffic websites.'],
            ['Dedicated Server Hosting', 'dedicated-server-hosting', 'Dedicated server hosting with exclusive hardware, maximum performance and complete control for demanding business apps.'],
            ['Domain & Business Email', 'domain-business-email', 'Domain registration and professional business email setup with your own domain — trusted, secure and branded communication.'],
            ['AWS Cloud Services', 'aws-cloud-services', 'AWS cloud services — architecture, migration, hosting and management of your infrastructure on Amazon Web Services.'],
            ['Cloud Migration Services', 'cloud-migration-services', 'Cloud migration services that move your websites, applications, data and systems to the cloud safely and efficiently.'],
            ['Server Management & Security', 'server-management-security', 'Server management and security services — setup, hardening, monitoring, patching and 24/7 protection for Linux and Windows.'],
            ['Website Backup & Maintenance', 'website-backup-maintenance', 'Website backup and maintenance services that keep your site secure, updated, backed up and running at peak performance.'],
        ],
    ],
];

/* ============ Process steps ============ */
$processSteps = [
    ['fas fa-comments',      'Discovery',   'Understanding your goals and requirements'],
    ['fas fa-pencil-ruler',  'Planning',    'Creating roadmap and milestones'],
    ['fas fa-paint-brush',   'Design',      'Crafting beautiful UI/UX designs'],
    ['fas fa-code',          'Development', 'Agile sprints with regular reviews'],
    ['fas fa-vial',          'Testing',     'Rigorous QA and UAT testing'],
    ['fas fa-rocket',        'Launch',      'Deployment and ongoing support'],
];

/* ============ Tech stack ============ */
$techTabs = [
    'Frontend Technologies',
    'Backend',
    'Mobile App Development',
    'Cloud & DevOps',
    'Database Technologies',
];
$techItems = [
    ['Frontend Technologies',      'fa-brands fa-html5',        'HTML5'],
    ['Frontend Technologies',      'fa-brands fa-css3-alt',     'CSS3'],
    ['Frontend Technologies',      'fa-brands fa-js',           'JavaScript'],
    ['Frontend Technologies',      'fa-brands fa-react',        'React.js'],
    ['Frontend Technologies',      'fa-solid fa-rocket',        'Next.js'],
    ['Frontend Technologies',      'fa-brands fa-vuejs',        'Vue.js'],
    ['Frontend Technologies',      'fa-brands fa-angular',      'Angular'],
    ['Frontend Technologies',      'fa-brands fa-bootstrap',    'Bootstrap'],
    ['Frontend Technologies',      'fa-solid fa-wind',          'Tailwind CSS'],
    ['Backend',                    'fa-brands fa-php',          'PHP'],
    ['Backend',                    'fa-brands fa-laravel',      'Laravel'],
    ['Backend',                    'fa-brands fa-node-js',      'Node.js'],
    ['Backend',                    'fa-brands fa-python',       'Python'],
    ['Backend',                    'fa-solid fa-layer-group',   'Django'],
    ['Backend',                    'fa-solid fa-window-restore','.NET'],
    ['Backend',                    'fa-brands fa-java',         'Java'],
    ['Backend',                    'fa-solid fa-leaf',          'Spring Boot'],
    ['Mobile App Development',     'fa-brands fa-android',      'Android'],
    ['Mobile App Development',     'fa-brands fa-apple',        'iOS'],
    ['Mobile App Development',     'fa-solid fa-mobile-screen', 'Flutter'],
    ['Mobile App Development',     'fa-brands fa-react',        'React Native'],
    ['Mobile App Development',     'fa-solid fa-crown',         'Kotlin'],
    ['Mobile App Development',     'fa-solid fa-bolt',          'Swift'],
    ['Cloud & DevOps',             'fa-brands fa-aws',          'AWS'],
    ['Cloud & DevOps',             'fa-solid fa-cloud',         'Microsoft Azure'],
    ['Cloud & DevOps',             'fa-brands fa-google',       'Google Cloud'],
    ['Cloud & DevOps',             'fa-brands fa-docker',       'Docker'],
    ['Cloud & DevOps',             'fa-solid fa-boxes-stacked', 'Kubernetes'],
    ['Cloud & DevOps',             'fa-solid fa-rotate',        'CI/CD'],
    ['Cloud & DevOps',             'fa-brands fa-github',       'GitHub Actions'],
    ['Database Technologies',      'fa-solid fa-database',      'MySQL'],
    ['Database Technologies',      'fa-solid fa-database',      'PostgreSQL'],
    ['Database Technologies',      'fa-brands fa-envira',       'MongoDB'],
    ['Database Technologies',      'fa-solid fa-table',         'Microsoft SQL Server'],
    ['Database Technologies',      'fa-solid fa-fire',          'Firebase'],
    ['Database Technologies',      'fa-solid fa-bolt-lightning','Redis'],
];
@endphp

{{-- ============ SERVICE GROUPS ============ --}}
@foreach($serviceGroups as $gi => $group)
<section class="svc-block {{ $gi % 2 === 1 ? 'svc-block-alt' : '' }}">
    <div class="container">
        <div class="svc-block-head" data-aos="fade-up">
            <span class="svc-cat-icon"><i class="{{ $group['icon'] }}"></i></span>
            <div>
                <h2>{{ $group['title'] }}</h2>
                <p>{{ $group['desc'] }}</p>
            </div>
        </div>
        <div class="row g-4">
            @foreach($group['items'] as $ii => $item)
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ ($ii % 2) * 100 }}">
                <a href="{{ url('services/'.$item[1]) }}" class="svc-card" style="text-decoration:none;">
                    <div class="svc-card-icon">
                        <i class="{{ $group['icon'] }}"></i>
                    </div>
                    <div class="svc-card-body">
                        <h5>{{ $item[0] }}</h5>
                        <p>{{ $item[2] }}</p>
                        <span class="svc-card-link">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

{{-- ============ PROCESS STEPS ============ --}}
<section class="svc-process">
    <div class="container">
        <div class="section-title content" data-aos="fade-up">
            <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-diagram-project"></i> How We Work</span>
            <h2 class="text-center">Our Development <span class="gredient-text">Process</span></h2>
            <div class="ab-line ab-line-center"></div>
            <p class="text-center">A proven methodology to deliver exceptional results</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($processSteps as $pi => $step)
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="{{ $pi * 120 }}">
                <div class="svc-step-card">
                    <div class="svc-step-icon"><i class="{{ $step[0] }}"></i></div>
                    <h6>{{ $step[1] }}</h6>
                    <p>{{ $step[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ TECH STACK ============ --}}
<section class="svc-tech">
    <div class="container">
        <div class="section-title content" data-aos="fade-up">
            <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-microchip"></i> Tech Stack</span>
            <h2 class="text-center">Technologies We <span class="gredient-text">Master</span></h2>
            <div class="ab-line ab-line-center"></div>
        </div>

        <div class="d-flex justify-content-center flex-wrap gap-2 mb-4" data-aos="fade-up">
            <button class="tech-fbtn active" onclick="filterTech('all',this)">All</button>
            @foreach($techTabs as $tab)
            <button class="tech-fbtn" onclick="filterTech(@js($tab), this)">{{ $tab }}</button>
            @endforeach
        </div>

        <div class="row g-3">
            @foreach($techItems as $ti => $tech)
            <div class="col-lg-2 col-md-3 col-4 tech-item"
                 data-techcat="{{ $tech[0] }}"
                 data-aos="fade-up"
                 data-aos-delay="{{ ($ti % 6) * 30 }}">
                <div class="svc-tech-card">
                    <i class="{{ $tech[1] }}"></i>
                    <span>{{ $tech[2] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="svc-cta">
    <div class="container text-center" data-aos="fade-up">
        <h2>Need a Custom Solution?</h2>
        <p>Let's discuss your project and find the perfect solution for your business</p>
        <a href="{{ url('get-quote') }}" class="svc-cta-btn">Request a Quote <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
</section>

@endsection

@push('scripts')
<script>
function filterTech(cat, btn) {
    document.querySelectorAll('.tech-fbtn').forEach(function(b){ b.classList.remove('active'); });
    btn.classList.add('active');
    document.querySelectorAll('.tech-item').forEach(function(el){
        el.style.display = (cat === 'all' || el.dataset.techcat === cat) ? 'block' : 'none';
    });
}
</script>
@endpush