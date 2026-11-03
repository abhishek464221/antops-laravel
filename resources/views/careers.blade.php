@extends('layouts.app')

@section('title', 'Careers | Antops Technologies')
@section('meta_description', 'Join the Antops Technologies team and help us build the future of digital technology. Explore open positions and a fulfilling career.')
@section('meta_keywords', 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')

@push('styles')
{{-- JSON-LD Schema (escaped @context so Blade doesn't parse it) --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Organization",
  "name": "Antops Technologies",
  "url": "https://antops.ryvoratechnologies.com",
  "description": "Think Digital. Think Antops. Innovative technology solutions."
}
</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://antops.ryvoratechnologies.com"
  }]
}
</script>

<style>
    .pg-page { font-family: 'Montserrat', sans-serif; }
    .pg-page h1, .pg-page h2, .pg-page h3, .pg-page h4, .pg-page h5, .pg-page h6 { font-family: 'Montserrat', sans-serif; }
    .pg-page .pg-kicker {
        display: inline-flex; align-items: center; gap: 0;
        font-size: 12px; font-weight: 700; text-transform: uppercase;
        letter-spacing: 2.5px; color: #CF171F; margin-bottom: 16px;
    }
    .pg-page .pg-kicker::before {
        content: ''; display: inline-block; width: 28px; height: 2px;
        border-radius: 2px; margin-right: 10px;
        background: linear-gradient(90deg, #CF171F, #B0171F);
        vertical-align: middle;
    }
    .pg-page .pg-kicker.pg-kicker-light { color: #7ea8ff; }
    .pg-page .pg-kicker.pg-kicker-light::before { background: linear-gradient(90deg, #CF171F, #CF171F); }
    .pg-page .pg-line { width: 62px; height: 3px; border-radius: 3px; background: linear-gradient(90deg, #CF171F, #B0171F); margin: 20px auto 0; }
    .pg-page .pg-grad { background: linear-gradient(135deg, #CF171F, #B0171F); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }

    .pg-page .pg-hero {
        position: relative; overflow: hidden; text-align: center;
        padding: 150px 0 90px;
        background: linear-gradient(135deg, #f0f4ff, #e8f0fe 55%, #fdf0e6);
    }
    .pg-page .pg-hero-title { font-size: 52px; font-weight: 800; color: #B0171F; line-height: 1.15; margin: 0 0 20px; }
    .pg-page .pg-hero-sub { font-size: 17px; color: #5a6b8c; max-width: 640px; margin: 0 auto 30px; line-height: 1.7; }
    .pg-page .pg-hero-actions { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; margin-bottom: 46px; }
    .pg-page .pg-hero::after {
        content: ''; position: absolute; right: -120px; top: -160px; width: 460px; height: 460px;
        border-radius: 50%; background: radial-gradient(circle, rgba(207,23,31,.14), transparent 65%);
        pointer-events: none;
    }
    .pg-page .pg-hero::before {
        content: ''; position: absolute; left: -100px; bottom: -180px; width: 420px; height: 420px;
        border-radius: 50%; background: radial-gradient(circle, rgba(207,23,31,.12), transparent 65%);
        pointer-events: none;
    }

    .pg-page .pg-dot { position: absolute; border-radius: 50%; pointer-events: none; z-index: 0; }
    .pg-page .pg-dot-1 { width: 14px; height: 14px; top: 24%; left: 8%; background: rgba(207,23,31,.18); }
    .pg-page .pg-dot-2 { width: 9px; height: 9px; top: 32%; right: 12%; background: rgba(207,23,31,.22); }
    .pg-page .pg-dot-3 { width: 18px; height: 18px; bottom: 22%; left: 18%; background: rgba(176,23,31,.12); }
    .pg-page .pg-dot-4 { width: 8px; height: 8px; top: 18%; right: 26%; background: rgba(207,23,31,.25); }
    .pg-page .pg-dot-5 { width: 12px; height: 12px; bottom: 30%; right: 20%; background: rgba(176,23,31,.14); }
    .pg-page .pg-float { animation: pgFloat 7s ease-in-out infinite; }
    .pg-page .pg-float-d { animation: pgFloatD 9s ease-in-out infinite; animation-delay: 1.2s; }
    @keyframes pgFloat {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-18px) translateX(10px); }
    }
    @keyframes pgFloatD {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(14px) translateX(-8px); }
    }

    .pg-page .pg-breadcrumb { display: flex; align-items: center; justify-content: center; gap: 10px; list-style: none; margin: 0; padding: 0; font-size: 14px; position: relative; z-index: 1; }
    .pg-page .pg-breadcrumb .pg-sep { color: #b7c4dd; }
    .pg-page .pg-breadcrumb a { color: #CF171F; text-decoration: none; font-weight: 600; }
    .pg-page .pg-breadcrumb a:hover { color: #B0171F; }
    .pg-page .pg-breadcrumb .pg-active { color: #7b8bab; font-weight: 600; }

    .pg-page .pg-btn {
        display: inline-flex; align-items: center; justify-content: center; gap: 10px;
        padding: 14px 32px; border-radius: 50px; font-weight: 600; font-size: 15px;
        text-decoration: none; transition: all .3s ease; border: 0; line-height: 1.2;
    }
    .pg-page .pg-btn-sm { padding: 11px 22px; font-size: 14px; }
    .pg-page .pg-btn-solid { background: linear-gradient(135deg, #CF171F, #B0171F); color: #fff; box-shadow: 0 10px 24px rgba(207,23,31,.28); }
    .pg-page .pg-btn-solid:hover { color: #fff; transform: translateY(-3px); box-shadow: 0 16px 34px rgba(176,23,31,.34); }
    .pg-page .pg-btn-ghost { border: 2px solid #CF171F; color: #CF171F; background: rgba(255,255,255,.5); }
    .pg-page .pg-btn-ghost:hover { background: #CF171F; color: #fff; transform: translateY(-3px); }
    .pg-page .pg-btn-light { background: #fff; color: #B0171F; box-shadow: 0 10px 24px rgba(0,0,0,.18); }
    .pg-page .pg-btn-light:hover { color: #CF171F; transform: translateY(-3px); }
    .pg-page .pg-btn-outline-light { border: 2px solid rgba(255,255,255,.55); color: #fff; background: rgba(255,255,255,.06); }
    .pg-page .pg-btn-outline-light:hover { background: #fff; color: #B0171F; transform: translateY(-3px); }

    .pg-page .pg-reveal, .pg-page .pg-reveal-left, .pg-page .pg-reveal-right, .pg-page .pg-reveal-scale {
        opacity: 0; transition: opacity .75s ease, transform .75s ease; will-change: opacity, transform;
    }
    .pg-page .pg-reveal { transform: translateY(36px); }
    .pg-page .pg-reveal-left { transform: translateX(-46px); }
    .pg-page .pg-reveal-right { transform: translateX(46px); }
    .pg-page .pg-reveal-scale { transform: scale(.92); }
    .pg-page .pg-visible { opacity: 1; transform: none; }

    .pg-page .pg-section { padding: 96px 0; }
    .pg-page .pg-section-head { margin-bottom: 52px; position: relative; z-index: 1; }
    .pg-page .pg-section-title { font-size: 38px; font-weight: 800; color: #B0171F; margin: 0; line-height: 1.2; }
    .pg-page .pg-section-sub { font-size: 16px; color: #5a6b8c; max-width: 640px; margin: 16px 0 0; line-height: 1.7; }

    .pg-page .pg-card {
        position: relative; background: #fff; border-radius: 18px; padding: 34px 30px;
        border: 1px solid #e6ecf8; box-shadow: 0 8px 24px rgba(176,23,31,.06);
        transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease; height: 100%;
    }
    .pg-page .pg-card::before {
        content: ''; position: absolute; top: 26px; left: 0; width: 4px; height: 46px;
        border-radius: 0 4px 4px 0; background: linear-gradient(180deg, #CF171F, #B0171F);
    }
    .pg-page .pg-card:hover { transform: translateY(-9px); box-shadow: 0 24px 48px rgba(176,23,31,.16); border-color: rgba(207,23,31,.28); }
    .pg-page .pg-icon-tile {
        display: inline-flex; align-items: center; justify-content: center;
        width: 64px; height: 64px; border-radius: 16px; margin-bottom: 20px;
        background: linear-gradient(135deg, #eaf1ff, #fbeff2); color: #CF171F; font-size: 26px;
    }
    .pg-page .pg-icon-tile i { transition: transform .35s ease; }
    .pg-page .pg-card:hover .pg-icon-tile i { transform: rotate(-8deg) scale(1.14); }
    .pg-page .pg-card-title { font-size: 20px; font-weight: 700; color: #B0171F; margin-bottom: 8px; }
    .pg-page .pg-card-text { font-size: 14.5px; color: #6b7a99; line-height: 1.7; }

    .pg-page .pg-badge {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: .5px; text-transform: uppercase;
        padding: 5px 14px; border-radius: 30px; background: #eaf1ff; color: #CF171F; margin-right: 8px;
    }
    .pg-page .pg-badge-orange { background: #ffefe7; color: #CF171F; }
    .pg-page .pg-job-meta { list-style: none; margin: 16px 0 24px; padding: 0; }
    .pg-page .pg-job-meta li { display: flex; align-items: center; gap: 10px; font-size: 14px; color: #6b7a99; margin-bottom: 10px; }
    .pg-page .pg-job-meta i { color: #CF171F; font-size: 13px; width: 18px; text-align: center; }

    .pg-page .pg-empty {
        max-width: 620px; margin: 0 auto; text-align: center;
        background: #fff; border: 1px solid #e6ecf8; border-radius: 22px; padding: 60px 40px;
        box-shadow: 0 10px 30px rgba(176,23,31,.07);
    }
    .pg-page .pg-empty-icon {
        display: inline-flex; align-items: center; justify-content: center;
        width: 88px; height: 88px; border-radius: 50%; margin-bottom: 24px; font-size: 34px;
        background: linear-gradient(135deg, #eaf1ff, #ffd9c7); color: #CF171F;
    }
    .pg-page .pg-empty h3 { font-size: 26px; font-weight: 800; color: #B0171F; margin-bottom: 12px; }
    .pg-page .pg-empty p { font-size: 15.5px; color: #5a6b8c; line-height: 1.75; }
    .pg-page .pg-empty .pg-link { color: #CF171F; font-weight: 700; text-decoration: none; }
    .pg-page .pg-empty .pg-link:hover { color: #B0171F; text-decoration: underline; }

    .pg-page .pg-cta { position: relative; overflow: hidden; text-align: center; }
    .pg-page .pg-cta-inner { position: relative; z-index: 1; }
    .pg-page .pg-cta-title { font-size: 36px; font-weight: 800; color: #fff; margin-bottom: 16px; line-height: 1.25; }
    .pg-page .pg-cta-sub { font-size: 16.5px; color: rgba(255,255,255,.65); max-width: 560px; margin: 0 auto 34px; line-height: 1.7; }
    .pg-page .pg-cta-actions { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

    .pg-page .pg-dark { background: linear-gradient(135deg, #0b1120, #101f46); position: relative; overflow: hidden; }
    .pg-page .pg-dark .pg-section-title { color: #fff; }
    .pg-page .pg-dark .pg-section-sub { color: rgba(255,255,255,.6); }

    @media (max-width: 991px) {
        .pg-page .pg-hero { padding: 130px 0 70px; }
        .pg-page .pg-hero-title { font-size: 40px; }
        .pg-page .pg-section { padding: 76px 0; }
        .pg-page .pg-section-title { font-size: 32px; }
    }
    @media (max-width: 575px) {
        .pg-page .pg-hero { padding: 120px 0 60px; }
        .pg-page .pg-hero-title { font-size: 32px; }
        .pg-page .pg-cta-title { font-size: 28px; }
        .pg-page .pg-empty { padding: 44px 24px; }
    }
</style>
@endpush

@section('content')
<main>

<div class="pg-page">

    {{-- ========== HERO ========== --}}
    <section class="pg-hero">
        <span class="pg-dot pg-dot-1 pg-float"></span>
        <span class="pg-dot pg-dot-2 pg-float-d"></span>
        <span class="pg-dot pg-dot-3 pg-float-d"></span>
        <span class="pg-dot pg-dot-4 pg-float"></span>
        <span class="pg-dot pg-dot-5 pg-float-d"></span>
        <div class="container">
            <span class="pg-kicker pg-reveal">Careers at Antops</span>
            <h1 class="pg-hero-title pg-reveal">Join <span class="pg-grad">Our Team</span></h1>
            <p class="pg-hero-sub pg-reveal">Be part of a dynamic team building the future of digital technology. Grow your skills, work on meaningful projects, and do the best work of your career.</p>
            <div class="pg-hero-actions pg-reveal">
                <a href="#openings" class="pg-btn pg-btn-solid">View Openings <i class="fas fa-arrow-down"></i></a>
                <a href="contact.html" class="pg-btn pg-btn-ghost">Get in Touch <i class="fas fa-paper-plane"></i></a>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="pg-breadcrumb pg-reveal">
                    <li><a href="index.html">Home</a></li>
                    <li class="pg-sep">/</li>
                    <li class="pg-active" aria-current="page">Careers</li>
                </ol>
            </nav>
        </div>
    </section>

    {{-- ========== CURRENT OPENINGS ========== --}}
    <section class="pg-section" id="openings">
        <div class="container">
            <div class="pg-section-head text-center pg-reveal">
                <span class="pg-kicker">Current Openings</span>
                <h2 class="pg-section-title">Explore Opportunities to Grow With Us</h2>
                <p class="pg-section-sub">Check out the roles we're hiring for and start your journey with Antops Technologies.</p>
                <div class="pg-line"></div>
            </div>

            <div class="pg-empty pg-reveal-scale">
                <div class="pg-empty-icon"><i class="fas fa-briefcase"></i></div>
                <h3>No Open Positions Currently</h3>
                <p class="mb-4">We're always looking for talented people. Send us your resume at <a href="mailto:careers@antops.com" class="pg-link">careers@antops.com</a> and we'd love to hear from you.</p>
                <a href="contact.html" class="pg-btn pg-btn-solid">Get in Touch <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    {{-- ========== WHY WORK WITH US ========== --}}
    <section class="pg-section" id="why-us" style="background:#f8fafd;">
        <div class="container">
            <div class="pg-section-head text-center pg-reveal">
                <span class="pg-kicker">Why Work With Us</span>
                <h2 class="pg-section-title">A Place to Grow, Collaborate &amp; Shine</h2>
                <p class="pg-section-sub">Discover what makes Antops Technologies a great place to build your career.</p>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:0ms">
                        <div class="pg-icon-tile"><i class="fas fa-rocket"></i></div>
                        <h3 class="pg-card-title">Innovative Projects</h3>
                        <p class="pg-card-text mb-0">Work on cutting-edge technologies and impactful projects that shape the digital world.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:90ms">
                        <div class="pg-icon-tile"><i class="fas fa-user-graduate"></i></div>
                        <h3 class="pg-card-title">Learning &amp; Growth</h3>
                        <p class="pg-card-text mb-0">Continuous learning opportunities, mentorship, and clear career development paths.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:180ms">
                        <div class="pg-icon-tile"><i class="fas fa-users"></i></div>
                        <h3 class="pg-card-title">Great Culture</h3>
                        <p class="pg-card-text mb-0">A collaborative, inclusive environment where every voice is heard and valued.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:270ms">
                        <div class="pg-icon-tile"><i class="fas fa-balance-scale"></i></div>
                        <h3 class="pg-card-title">Work-Life Balance</h3>
                        <p class="pg-card-text mb-0">Flexible hours and a healthy balance so you can do your best work sustainably.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== CTA ========== --}}
    <section class="pg-section pg-dark pg-cta" id="career-cta">
        <div class="container">
            <div class="pg-cta-inner pg-reveal-scale">
                <span class="pg-kicker pg-kicker-light">Let's Build Together</span>
                <h2 class="pg-cta-title">Don't See a Role That Fits?</h2>
                <p class="pg-cta-sub">Send us your resume and we'll keep you in mind for future opportunities that match your skills and ambitions.</p>
                <div class="pg-cta-actions">
                    <a href="mailto:careers@antops.com" class="pg-btn pg-btn-light"><i class="fas fa-paper-plane"></i> careers@antops.com</a>
                    <a href="contact.html" class="pg-btn pg-btn-outline-light">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

</div>
</main>
@endsection

@push('scripts')
<script>
(function () {
    var revealEls = document.querySelectorAll('.pg-reveal, .pg-reveal-left, .pg-reveal-right, .pg-reveal-scale');
    if ('IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('pg-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });
        revealEls.forEach(function (el) { revealObserver.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('pg-visible'); });
    }

    /* Smooth scroll for #openings button */
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var t = document.querySelector(this.getAttribute('href'));
            if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        });
    });
})();
</script>
@endpush