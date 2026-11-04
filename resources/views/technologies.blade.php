@extends('layouts.app')

@section('title', 'Technologies We Use | Antops Technologies')
@section('meta_description', 'Explore the modern technologies and frameworks Antops Technologies uses: frontend, backend, mobile, cloud, and database.')
@section('meta_keywords', 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')

@php
// ─────────────────────────────────────────────────────────────
//  DATA — add/remove entries here, everything else is automatic
// ─────────────────────────────────────────────────────────────
$categories = [
    'Frontend Technologies',
    'Backend',
    'Mobile App Development',
    'Cloud & DevOps',
    'Database Technologies',
];

$technologies = [
    // ── Frontend ──
    ['name' => 'HTML5',        'icon' => 'fa-brands fa-html5',       'slug' => 'html5',                       'category' => 'Frontend Technologies', 'level' => 98, 'desc' => 'The semantic foundation of every modern web experience — clean markup, accessibility, and SEO-friendly structure.'],
    ['name' => 'CSS3',         'icon' => 'fa-brands fa-css3-alt',    'slug' => 'css3',                        'category' => 'Frontend Technologies', 'level' => 97, 'desc' => 'From responsive layouts to stunning animations, we craft pixel-perfect styles that bring your designs to life.'],
    ['name' => 'JavaScript',   'icon' => 'fa-brands fa-js',          'slug' => 'javascript',                  'category' => 'Frontend Technologies', 'level' => 96, 'desc' => 'The language of the web — we use modern ES specifications to build rich, interactive experiences.'],
    ['name' => 'React.js',     'icon' => 'fa-brands fa-react',       'slug' => 'reactjs',                     'category' => 'Frontend Technologies', 'level' => 95, 'desc' => 'A component-driven library for blazing-fast, scalable single-page applications and complex UIs.'],
    ['name' => 'Next.js',      'icon' => 'fa-solid fa-rocket',       'slug' => 'next',                        'category' => 'Frontend Technologies', 'level' => 94, 'desc' => 'The React framework for production — server-side rendering, static generation, and best-in-class performance.'],
    ['name' => 'Vue.js',       'icon' => 'fa-brands fa-vuejs',       'slug' => 'vuejs',                       'category' => 'Frontend Technologies', 'level' => 93, 'desc' => 'A progressive, approachable framework for building reactive interfaces with a gentle learning curve.'],
    ['name' => 'Angular',      'icon' => 'fa-brands fa-angular',     'slug' => 'angular',                     'category' => 'Frontend Technologies', 'level' => 92, 'desc' => 'A powerful, enterprise-grade platform for structured, testable, and maintainable large-scale apps.'],
    ['name' => 'Bootstrap',    'icon' => 'fa-brands fa-bootstrap',   'slug' => 'bootstrap',                   'category' => 'Frontend Technologies', 'level' => 98, 'desc' => 'The industry-standard responsive CSS framework we use to jumpstart consistent, mobile-first UIs.'],
    ['name' => 'Tailwind CSS', 'icon' => 'fa-solid fa-wind',         'slug' => 'tailwind-css',                'category' => 'Frontend Technologies', 'level' => 94, 'desc' => 'A utility-first CSS framework that keeps styling fast, consistent, and completely on-brand.'],

    // ── Backend ──
    ['name' => 'PHP',          'icon' => 'fa-brands fa-php',         'slug' => 'php-development-services',    'category' => 'Backend', 'level' => 97, 'desc' => 'The battle-tested server language powering billions of websites with speed and simplicity.'],
    ['name' => 'Laravel',      'icon' => 'fa-brands fa-laravel',     'slug' => 'laravel-development-services','category' => 'Backend', 'level' => 96, 'desc' => 'An elegant PHP framework with rich tooling for building secure, maintainable modern web apps.'],
    ['name' => 'Node.js',      'icon' => 'fa-brands fa-node-js',     'slug' => 'nodejs-development-services', 'category' => 'Backend', 'level' => 95, 'desc' => 'Event-driven JavaScript runtime for fast, scalable APIs, real-time apps, and microservices.'],
    ['name' => 'Python',       'icon' => 'fa-brands fa-python',      'slug' => 'python-development-services', 'category' => 'Backend', 'level' => 94, 'desc' => 'A versatile, readable language ideal for web apps, data processing, and AI/ML-powered backends.'],
    ['name' => 'Django',       'icon' => 'fa-solid fa-layer-group',  'slug' => 'django-development-services', 'category' => 'Backend', 'level' => 92, 'desc' => 'A high-level Python framework with batteries included — secure, scalable, and incredibly productive.'],
    ['name' => '.NET',         'icon' => 'fa-solid fa-window-restore','slug' => 'net-development-services',  'category' => 'Backend', 'level' => 91, 'desc' => 'Microsoft’s robust, high-performance framework for enterprise applications and cloud.'],
    ['name' => 'Java',         'icon' => 'fa-brands fa-java',        'slug' => 'java-development-services',   'category' => 'Backend', 'level' => 93, 'desc' => 'A rock-solid, enterprise-proven language known for stability, portability, and ecosystem.'],
    ['name' => 'Spring Boot',  'icon' => 'fa-solid fa-leaf',         'slug' => 'spring-boot-development-services', 'category' => 'Backend', 'level' => 91, 'desc' => 'The go-to Java framework for production-ready, microservice-friendly, bootstrapped applications.'],

    // ── Mobile ──
    ['name' => 'Android',      'icon' => 'fa-brands fa-android',     'slug' => 'android',                     'category' => 'Mobile App Development', 'level' => 95, 'desc' => 'Native Android applications engineered for performance and reach on the world’s largest mobile OS.'],
    ['name' => 'iOS',          'icon' => 'fa-brands fa-apple',       'slug' => 'ios',                         'category' => 'Mobile App Development', 'level' => 94, 'desc' => 'Beautiful, high-performance native iOS apps that feel perfectly at home on Apple devices.'],
    ['name' => 'Flutter',      'icon' => 'fa-solid fa-mobile-screen','slug' => 'flutter',                     'category' => 'Mobile App Development', 'level' => 96, 'desc' => 'Google’s cross-platform toolkit for natively compiled, pixel-perfect apps from a single codebase.'],
    ['name' => 'React Native', 'icon' => 'fa-brands fa-react',       'slug' => 'react-native',                'category' => 'Mobile App Development', 'level' => 94, 'desc' => 'Build real native apps for iOS and Android using JavaScript with a huge development community.'],
    ['name' => 'Kotlin',       'icon' => 'fa-solid fa-crown',        'slug' => 'kotlin',                      'category' => 'Mobile App Development', 'level' => 92, 'desc' => 'The modern language for Android development — concise, safe, and fully interoperable with Java.'],
    ['name' => 'Swift',        'icon' => 'fa-solid fa-bolt',         'slug' => 'swift',                       'category' => 'Mobile App Development', 'level' => 92, 'desc' => 'Apple’s powerful and intuitive language for crafting reliable native iOS, iPadOS, and macOS apps.'],

    // ── Cloud & DevOps ──
    ['name' => 'AWS',              'icon' => 'fa-brands fa-aws',        'slug' => 'aws',              'category' => 'Cloud & DevOps', 'level' => 95, 'desc' => 'Scale effortlessly on the world’s most comprehensive and reliable cloud platform.'],
    ['name' => 'Microsoft Azure',  'icon' => 'fa-solid fa-cloud',       'slug' => 'microsoft-azure',  'category' => 'Cloud & DevOps', 'level' => 93, 'desc' => 'Enterprise-grade cloud computing and AI services that plug directly into your Microsoft stack.'],
    ['name' => 'Google Cloud',     'icon' => 'fa-brands fa-google',     'slug' => 'google-cloud',     'category' => 'Cloud & DevOps', 'level' => 92, 'desc' => 'Google’s global cloud platform with exceptional data, analytics, and machine-learning services.'],
    ['name' => 'Docker',           'icon' => 'fa-brands fa-docker',     'slug' => 'docker',           'category' => 'Cloud & DevOps', 'level' => 96, 'desc' => 'Containerization that packages your app and its environment together for consistent deployments.'],
    ['name' => 'Kubernetes',       'icon' => 'fa-solid fa-boxes-stacked','slug' => 'kubernetes',      'category' => 'Cloud & DevOps', 'level' => 92, 'desc' => 'Production-grade orchestration that automates container scaling, rollout, and self-healing.'],
    ['name' => 'CI/CD',            'icon' => 'fa-solid fa-rotate',      'slug' => 'cicd',             'category' => 'Cloud & DevOps', 'level' => 94, 'desc' => 'Continuous integration and delivery pipelines that ship quality code faster and safer.'],
    ['name' => 'GitHub Actions',   'icon' => 'fa-brands fa-github',     'slug' => 'github-actions',   'category' => 'Cloud & DevOps', 'level' => 93, 'desc' => 'Automate your entire workflow — builds, tests, and deployments — directly from your GitHub repo.'],

    // ── Database ──
    ['name' => 'MySQL',                'icon' => 'fa-solid fa-database', 'slug' => 'mysql',                'category' => 'Database Technologies', 'level' => 97, 'desc' => 'The world’s most popular open-source relational database — reliable, fast, and universally supported.'],
    ['name' => 'PostgreSQL',           'icon' => 'fa-solid fa-database', 'slug' => 'postgresql',           'category' => 'Database Technologies', 'level' => 95, 'desc' => 'A powerful, open-source relational database known for advanced features and extensibility.'],
    ['name' => 'MongoDB',              'icon' => 'fa-brands fa-envira',  'slug' => 'mongodb',              'category' => 'Database Technologies', 'level' => 94, 'desc' => 'A flexible document database that scales horizontally and models real-world data naturally.'],
    ['name' => 'Microsoft SQL Server', 'icon' => 'fa-solid fa-table',    'slug' => 'microsoft-sql-server', 'category' => 'Database Technologies', 'level' => 92, 'desc' => 'Enterprise database platform with deep analytics, security, and business-intelligence features.'],
    ['name' => 'Firebase',             'icon' => 'fa-solid fa-fire',     'slug' => 'firebase',             'category' => 'Database Technologies', 'level' => 94, 'desc' => 'Google’s app-development platform with realtime database, auth, hosting, and analytics.'],
    ['name' => 'Redis',                'icon' => 'fa-solid fa-bolt-lightning', 'slug' => 'redis',          'category' => 'Database Technologies', 'level' => 95, 'desc' => 'An in-memory data store for caching, sessions, and realtime speed that supercharges your app.'],
];

// Active filter (via ?category=... query string)
$activeCategory = request('category');
$filtered = $activeCategory
    ? array_values(array_filter($technologies, fn($t) => $t['category'] === $activeCategory))
    : $technologies;
@endphp

@push('styles')
<style>
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
        --brand-dark: #B0171F;
        --brand: #CF171F;
        --brand-accent: #CF171F;
        --text-dark: #8C1116;
        --text-muted: #5a6a8a;
        --bg-light: #f7f9fc;
        --white: #fff;
    }

    /* Hero */
    .pg-hero {
        background: linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);
        padding: 150px 0 90px; position: relative; overflow: hidden;
    }
    .pg-hero .container { position: relative; z-index: 2; }

    .pg-float, .pg-float-d { position: absolute; border-radius: 50%; opacity: .18; pointer-events: none; }
    .pg-float { width: 12px; height: 12px; background: var(--brand); animation: pgFloat 4.5s ease-in-out infinite; }
    .pg-float-d { width: 9px; height: 9px; background: var(--brand-accent); animation: pgFloatD 5.5s ease-in-out 1.2s infinite; }
    @keyframes pgFloat { 0%,100% { transform: translateY(0) scale(1); } 50% { transform: translateY(-18px) scale(1.15); } }
    @keyframes pgFloatD { 0%,100% { transform: translateY(0) scale(1); } 50% { transform: translateY(14px) scale(1.1); } }

    .pg-breadcrumb { padding: 0 0 10px; }
    .pg-breadcrumb a { color: #CF171F; text-decoration: none; font-size: .88rem; }
    .pg-breadcrumb span { color: #8C1116; font-size: .88rem; font-weight: 600; }
    .pg-breadcrumb i { color: var(--text-muted); margin: 0 6px; font-size: .72rem; }

    .pg-reveal, .pg-reveal-left, .pg-reveal-right, .pg-reveal-scale { opacity: 0; transition: opacity .7s ease, transform .7s ease; }
    .pg-reveal { transform: translateY(36px); }
    .pg-reveal-left { transform: translateX(-40px); }
    .pg-reveal-right { transform: translateX(40px); }
    .pg-reveal-scale { transform: scale(.92); }
    .pg-visible { opacity: 1; transform: translate(0) scale(1); }

    .pg-kicker {
        text-transform: uppercase; font-size: 12px; letter-spacing: 2.5px;
        color: #CF171F; font-weight: 700; display: flex; align-items: center; gap: 12px; margin-bottom: 12px;
    }
    .pg-kicker::before {
        content: ''; display: inline-block; width: 28px; height: 3px;
        background: linear-gradient(90deg,#CF171F,#CF171F); border-radius: 2px;
    }

    .pg-grad {
        background: linear-gradient(135deg, var(--brand-dark), var(--brand));
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .pg-card {
        background: var(--white); border-radius: 14px; padding: 30px 26px;
        border: 1px solid #e8edf5; position: relative; overflow: hidden;
        transition: transform .35s ease, box-shadow .35s ease;
    }
    .pg-card::before {
        content: ''; position: absolute; left: 4px; top: 0; width: 4px; height: 0;
        background: linear-gradient(180deg,#CF171F,#CF171F); border-radius: 2px;
        transition: height .4s ease;
    }
    .pg-card:hover { transform: translateY(-9px); box-shadow: 0 18px 48px rgba(176,23,31,.13); }
    .pg-card:hover::before { height: 100%; }

    .pg-icon-tile {
        width: 60px; height: 60px; border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        font-size: 28px; background: linear-gradient(135deg,#eef4ff,#dce8fc); color: var(--brand);
        transition: transform .35s ease, background .35s ease;
    }
    .pg-card:hover .pg-icon-tile { transform: rotate(6deg) scale(1.1); }

    /* Proficiency bar */
    .pg-prog { height: 6px; background: #e8ecf4; border-radius: 4px; overflow: hidden; }
    .pg-prog > span {
        display: block; height: 100%; width: 0; border-radius: 4px;
        background: linear-gradient(90deg,#CF171F,#53a0fd);
        transition: width 1.2s cubic-bezier(.22,1,.36,1);
    }

    /* Filter tabs */
    .pg-tab {
        padding: 10px 26px; border-radius: 30px; border: 2px solid #e0e4ec;
        background: var(--white); color: #555; font-weight: 600; font-size: 14px;
        cursor: pointer; transition: all .3s ease; text-decoration: none; display: inline-block;
    }
    .pg-tab:hover { border-color: var(--brand); color: var(--brand); }
    .pg-tab.pg-tab-active {
        background: var(--brand); color: var(--white); border-color: var(--brand);
        box-shadow: 0 8px 22px rgba(207,23,31,.28);
    }

    /* CTA dark */
    .pg-cta {
        background: linear-gradient(135deg, #8C1116 0%, #B0171F 60%, #8C1116 100%);
        color: var(--white); position: relative; overflow: hidden;
    }
    .pg-cta::after {
        content: ''; position: absolute; top: -50%; left: -60%; width: 50%; height: 200%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,.07), transparent);
        transform: skewX(-20deg); animation: pgShine 5s ease-in-out infinite;
    }
    @keyframes pgShine { 0%,100% { left: -60%; } 50% { left: 120%; } }

    /* Sections */
    .pg-section { padding: 90px 0; }
    .pg-section-dark { background: #8C1116; color: var(--white); }
    .pg-section-light { background: var(--bg-light); }

    .pg-btn {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 14px 34px; border-radius: 8px; font-weight: 600; font-size: .95rem;
        text-decoration: none; transition: all .3s ease; border: none; cursor: pointer;
    }
    .pg-btn-white { background: var(--white); color: var(--brand-dark); }
    .pg-btn-white:hover { background: #f0f4ff; transform: translateY(-2px); }

    @media (max-width: 767.98px) {
        .pg-hero { padding: 120px 0 60px; }
        .pg-section { padding: 60px 0; }
    }
</style>
@endpush

@section('content')

{{-- ================= HERO ================= --}}
<section class="pg-hero">
    <div class="pg-float" style="top:18%;left:8%"></div>
    <div class="pg-float-d" style="top:32%;right:12%"></div>
    <div class="pg-float" style="bottom:22%;left:20%"></div>
    <div class="pg-float-d" style="top:60%;right:25%"></div>
    <div class="pg-float" style="top:45%;left:50%"></div>
    <div class="container">
        <div class="pg-breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Technologies</span>
        </div>
        <div class="pg-reveal">
            <div class="pg-kicker">Our Tech Stack</div>
            <h1 class="display-5 fw-bold mb-3">Technologies We <span class="pg-grad">Master</span></h1>
            <p class="lead col-lg-7" style="color:var(--text-muted);">
                Explore the modern technologies and frameworks powering our solutions — from frontend to backend, mobile, cloud, and data.
            </p>
        </div>
    </div>
</section>

{{-- ================= CATEGORY FILTER ================= --}}
<section style="background:#fff;padding:35px 0 10px;">
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap gap-2 pg-reveal">
            <a href="{{ url('technologies') }}"
               class="pg-tab {{ !$activeCategory ? 'pg-tab-active' : '' }}">All</a>
            @foreach($categories as $cat)
                <a href="{{ url('technologies') }}?category={{ urlencode($cat) }}"
                   class="pg-tab {{ $activeCategory === $cat ? 'pg-tab-active' : '' }}">{{ $cat }}</a>
            @endforeach
        </div>
    </div>
</section>

{{-- ================= TECH GRID ================= --}}
<section class="pg-section pg-section-light">
    <div class="container">
        @if(count($filtered) === 0)
            <div class="text-center py-5 pg-reveal">
                <h4 class="fw-bold mb-2" style="color:var(--text-dark);">No technologies found</h4>
                <p style="color:var(--text-muted);">Try a different category or <a href="{{ url('technologies') }}" style="color:#CF171F;font-weight:600;">view all</a>.</p>
            </div>
        @else
            <div class="row g-4">
                @foreach($filtered as $i => $tech)
                <div class="col-lg-3 col-md-4 col-sm-6 pg-reveal" style="transition-delay:{{ ($i % 4) * 0.07 }}s;">
                    <a href="{{ url('technology/' . $tech['slug']) }}" class="text-decoration-none">
                        <div class="pg-card h-100 d-flex flex-column text-center">
                            <div class="pg-icon-tile mx-auto mb-4">
                                <i class="{{ $tech['icon'] }}"></i>
                            </div>
                            <h5 class="fw-bold mb-2" style="color:var(--text-dark);">{{ $tech['name'] }}</h5>
                            <div class="pg-prog mb-3 w-100">
                                <span data-width="{{ $tech['level'] }}"></span>
                            </div>
                            <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.85rem;line-height:1.65;">
                                {{ \Illuminate\Support\Str::limit($tech['desc'], 100) }}
                            </p>
                            <span style="color:#CF171F;font-weight:600;font-size:.85rem;">
                                Learn More <i class="fas fa-arrow-right ms-1" style="font-size:.75rem;"></i>
                            </span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

{{-- ================= WHY OUR STACK ================= --}}
<section class="pg-section pg-section-dark">
    <div class="container">
        <div class="pg-reveal text-center mb-5">
            <div class="pg-kicker" style="color:#7eb8ff;">Why Our Stack</div>
            <h2 class="fw-bold text-white">The Right Tech for <span style="color:#CF171F;">Your Business</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 pg-reveal">
                <div class="pg-card h-100" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1);">
                    <div class="pg-icon-tile mb-4" style="background:rgba(207,23,31,.2);color:#7eb8ff;"><i class="fas fa-compass"></i></div>
                    <h5 class="fw-bold text-white mb-2">Right Tool Selection</h5>
                    <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.7;">We pick the stack that best fits your goals, budget, and long-term vision — never the trendiest, always the right one.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pg-reveal" style="transition-delay:.1s;">
                <div class="pg-card h-100" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1);">
                    <div class="pg-icon-tile mb-4" style="background:rgba(207,23,31,.2);color:#CF171F;"><i class="fas fa-shield-halved"></i></div>
                    <h5 class="fw-bold text-white mb-2">Enterprise-Grade Quality</h5>
                    <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.7;">Security, performance, and maintainability are engineered in from day one, not bolted on later.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pg-reveal" style="transition-delay:.2s;">
                <div class="pg-card h-100" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1);">
                    <div class="pg-icon-tile mb-4" style="background:rgba(207,23,31,.2);color:#7eb8ff;"><i class="fas fa-chart-line"></i></div>
                    <h5 class="fw-bold text-white mb-2">Future-Proof Builds</h5>
                    <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.7;">Modular architecture and modern tooling mean your platform scales and adapts as your business grows.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= BOTTOM CTA ================= --}}
<section class="pg-cta py-5">
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center justify-content-between text-center text-md-start">
            <div class="col-lg-7 mb-4 mb-md-0 pg-reveal-left">
                <div class="pg-kicker" style="color:#7eb8ff;">Let's Build Together</div>
                <h2 class="fw-bold text-white mb-2">Need a Custom Solution?</h2>
                <p class="mb-0" style="color:rgba(255,255,255,.7);">We combine the right technologies to build solutions that drive real results.</p>
            </div>
            <div class="col-lg-4 text-center pg-reveal-right">
                <a href="{{ url('contact') }}" class="pg-btn pg-btn-white">
                    Contact Us <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function() {
    // Reveal on scroll
    if (!('IntersectionObserver' in window)) {
        document.querySelectorAll('.pg-reveal,.pg-reveal-left,.pg-reveal-right,.pg-reveal-scale').forEach(function(el) {
            el.classList.add('pg-visible');
        });
    } else {
        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) {
                    e.target.classList.add('pg-visible');
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.pg-reveal,.pg-reveal-left,.pg-reveal-right,.pg-reveal-scale').forEach(function(el) {
            obs.observe(el);
        });
    }

    // Animate proficiency bars
    var pObs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting) {
                var bar = e.target;
                bar.style.width = (bar.getAttribute('data-width') || 0) + '%';
                pObs.unobserve(bar);
            }
        });
    }, { threshold: 0.4 });
    document.querySelectorAll('.pg-prog span[data-width]').forEach(function(bar) {
        pObs.observe(bar);
    });
})();
</script>
@endpush