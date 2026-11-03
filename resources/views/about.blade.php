@extends('layouts.app')

@section('title', 'About Us | Antops Technologies')
@section('meta_description', 'Learn about Antops Technologies — a premium technology agency delivering innovative digital solutions across web development, mobile apps, UI/UX design, and AI.')
@section('meta_keywords', 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')

@push('styles')
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
    .pg-page .pg-line.pg-line-start { margin-left: 0; }
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
    .pg-page .pg-card-title { font-size: 20px; font-weight: 700; color: #B0171F; margin-bottom: 10px; }
    .pg-page .pg-card-text { font-size: 14.5px; color: #6b7a99; line-height: 1.7; margin-bottom: 18px; }
    .pg-page .pg-card-link { font-size: 14px; font-weight: 700; color: #CF171F; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
    .pg-page .pg-card-link i { transition: transform .3s ease; }
    .pg-page .pg-card-link:hover { color: #B0171F; }
    .pg-page .pg-card-link:hover i { transform: translateX(5px); }

    .pg-page .pg-dark { background: linear-gradient(135deg, #0b1120, #101f46); position: relative; overflow: hidden; }
    .pg-page .pg-dark .pg-section-title { color: #fff; }
    .pg-page .pg-dark .pg-section-sub { color: rgba(255,255,255,.6); }
    .pg-page .pg-glass-card {
        position: relative; border-radius: 20px; padding: 44px 36px; height: 100%; text-align: center;
        background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.14);
        backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);
        transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease;
    }
    .pg-page .pg-glass-card:hover { transform: translateY(-9px); border-color: rgba(255,255,255,.3); box-shadow: 0 26px 50px rgba(0,0,0,.3); }
    .pg-page .pg-glass-icon {
        display: inline-flex; align-items: center; justify-content: center;
        width: 70px; height: 70px; border-radius: 18px; margin-bottom: 22px; font-size: 28px;
        background: linear-gradient(135deg, rgba(207,23,31,.28), rgba(207,23,31,.18)); color: #fff;
    }
    .pg-page .pg-glass-title { font-size: 22px; font-weight: 700; color: #fff; margin-bottom: 14px; }
    .pg-page .pg-glass-text { font-size: 15px; color: rgba(255,255,255,.65); line-height: 1.75; margin: 0; }

    .pg-page .pg-stats-inner { position: relative; z-index: 1; }
    .pg-page .pg-stat { text-align: center; padding: 12px 8px; }
    .pg-page .pg-stat-icon {
        display: inline-flex; align-items: center; justify-content: center;
        width: 60px; height: 60px; border-radius: 50%; margin-bottom: 20px; font-size: 22px;
        background: rgba(207,23,31,.16); color: #CF171F; border: 1px solid rgba(207,23,31,.28);
    }
    .pg-page .pg-stat-value { font-size: 50px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 10px; }
    .pg-page .pg-stat-value .pg-stat-suffix { color: #CF171F; }
    .pg-page .pg-stat-label { font-size: 14px; letter-spacing: 1px; text-transform: uppercase; color: rgba(255,255,255,.55); margin: 0; }

    .pg-page .pg-about-media { position: relative; }
    .pg-page .pg-about-media img, .pg-page .pg-about-placeholder { border-radius: 22px; width: 100%; min-height: 460px; object-fit: cover; display: flex; }
    .pg-page .pg-about-placeholder {
        align-items: center; justify-content: center; flex-direction: column; text-align: center; color: #fff;
        background: linear-gradient(135deg, #B0171F, #CF171F 60%, #CF171F);
    }
    .pg-page .pg-about-placeholder i { font-size: 64px; margin-bottom: 18px; opacity: .9; }
    .pg-page .pg-about-placeholder span { font-size: 15px; letter-spacing: 3px; text-transform: uppercase; font-weight: 700; }
    .pg-page .pg-about-chip {
        position: absolute; left: 24px; bottom: 24px; display: flex; align-items: center; gap: 12px;
        background: rgba(255,255,255,.92); backdrop-filter: blur(6px); border-radius: 14px; padding: 14px 20px;
        box-shadow: 0 14px 30px rgba(176,23,31,.22);
    }
    .pg-page .pg-about-chip i { font-size: 24px; color: #CF171F; }
    .pg-page .pg-about-chip strong { display: block; font-size: 20px; color: #B0171F; line-height: 1.1; }
    .pg-page .pg-about-chip span { font-size: 12.5px; color: #6b7a99; }

    .pg-page .pg-body-text { font-size: 15.5px; color: #5a6b8c; line-height: 1.8; margin-bottom: 20px; }
    .pg-page .pg-check-list { list-style: none; margin: 0 0 28px; padding: 0; }
    .pg-page .pg-check-list li { display: flex; align-items: center; gap: 12px; font-size: 14.5px; color: #3d4f75; font-weight: 600; margin-bottom: 12px; }
    .pg-page .pg-check-list i { color: #CF171F; font-size: 14px; width: 22px; height: 22px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: #eaf1ff; }

    .pg-page .pg-cta { position: relative; overflow: hidden; text-align: center; }
    .pg-page .pg-cta-inner { position: relative; z-index: 1; }
    .pg-page .pg-cta-title { font-size: 36px; font-weight: 800; color: #fff; margin-bottom: 16px; line-height: 1.25; }
    .pg-page .pg-cta-sub { font-size: 16.5px; color: rgba(255,255,255,.65); max-width: 560px; margin: 0 auto 34px; line-height: 1.7; }
    .pg-page .pg-cta-actions { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

    .pg-page .pg-cta-band { background: linear-gradient(135deg, #f0f4ff, #e8f0fe 55%, #fdf0e6); border-top: 1px solid rgba(176,23,31,.06); }

    @media (max-width: 991px) {
        .pg-page .pg-hero { padding: 130px 0 70px; }
        .pg-page .pg-hero-title { font-size: 40px; }
        .pg-page .pg-section { padding: 76px 0; }
        .pg-page .pg-section-title { font-size: 32px; }
    }
    @media (max-width: 575px) {
        .pg-page .pg-hero { padding: 120px 0 60px; }
        .pg-page .pg-hero-title { font-size: 32px; }
        .pg-page .pg-stat-value { font-size: 40px; }
        .pg-page .pg-cta-title { font-size: 28px; }
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
            <span class="pg-kicker pg-reveal">Think Digital. Think Antops.</span>
            <h1 class="pg-hero-title pg-reveal">About <span class="pg-grad">Antops Technologies</span></h1>
            <p class="pg-hero-sub pg-reveal">A premium technology agency dedicated to delivering innovative digital solutions that empower businesses to thrive in an ever-evolving digital landscape.</p>
            <div class="pg-hero-actions pg-reveal">
                <a href="contact.html" class="pg-btn pg-btn-solid">Let's Talk <i class="fas fa-arrow-right"></i></a>
                <a href="services.html" class="pg-btn pg-btn-ghost">Our Services <i class="fas fa-layer-group"></i></a>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="pg-breadcrumb pg-reveal">
                    <li><a href="index.html">Home</a></li>
                    <li class="pg-sep">/</li>
                    <li class="pg-active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </section>

    {{-- ========== STORY ========== --}}
    <section class="pg-section" id="story">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="pg-about-media pg-reveal-left">
                        <img src="storage/about/CKSZhKcdT9hXJEtf2moEDh2TSSh1V8AyDOuOK6zJ.png" alt="About Antops Technologies" title="About Antops Technologies">
                        <div class="pg-about-chip">
                            <i class="fas fa-medal"></i>
                            <div>
                                <strong>10+</strong>
                                <span>Years of Excellence</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pg-reveal-right">
                        <span class="pg-kicker">Who We Are</span>
                        <h2 class="pg-section-title mb-4">Crafting Digital Excellence</h2>
                        <div class="pg-line pg-line-start mb-4"></div>
                        <p class="pg-body-text">Antops Technologies is a premium technology agency dedicated to delivering innovative digital solutions that empower businesses to thrive in an ever-evolving digital landscape.</p>
                        <p class="pg-body-text">Our team of passionate developers, designers, and strategists combines creativity with technical expertise to craft solutions that are not only functional but also transformative.</p>
                        <p class="pg-body-text">From startups to enterprises, we serve clients across diverse industries including healthcare, finance, e-commerce, education, and more.</p>
                        <ul class="pg-check-list">
                            <li><i class="fas fa-check"></i> End-to-end product engineering &amp; support</li>
                            <li><i class="fas fa-check"></i> Human-centred design thinking</li>
                            <li><i class="fas fa-check"></i> Reliable, secure, scalable technology</li>
                        </ul>
                        <a href="contact.html" class="pg-btn pg-btn-solid">Let's Talk <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== MISSION & VISION ========== --}}
    <section class="pg-section pg-dark" id="mission-vision">
        <div class="container">
            <div class="pg-section-head text-center pg-reveal">
                <span class="pg-kicker pg-kicker-light">Our Purpose</span>
                <h2 class="pg-section-title">Mission &amp; Vision</h2>
                <p class="pg-section-sub">What drives us forward every single day</p>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="pg-glass-card pg-reveal">
                        <div class="pg-glass-icon"><i class="fas fa-bullseye"></i></div>
                        <h3 class="pg-glass-title">Our Mission</h3>
                        <p class="pg-glass-text">To empower businesses with innovative, reliable, and scalable digital solutions that drive growth, enhance efficiency, and create lasting value for organizations of all sizes.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pg-glass-card pg-reveal" style="transition-delay:120ms">
                        <div class="pg-glass-icon"><i class="fas fa-eye"></i></div>
                        <h3 class="pg-glass-title">Our Vision</h3>
                        <p class="pg-glass-text">To be the global leader in digital transformation, recognized for our innovation, integrity, and the exceptional value we deliver to our clients worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== STATS ========== --}}
    <section class="pg-section pg-dark" id="stats" style="padding-top:0">
        <div class="container">
            <div class="pg-section-head text-center pg-reveal">
                <span class="pg-kicker pg-kicker-light">Our Impact</span>
                <h2 class="pg-section-title">In Numbers</h2>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4 pg-stats-inner">
                <div class="col-lg-3 col-md-6">
                    <div class="pg-stat pg-reveal" style="transition-delay:0ms">
                        <div class="pg-stat-icon"><i class="fas fa-project-diagram"></i></div>
                        <div class="pg-stat-value">
                            <span class="pg-stat-num" data-count="500">0</span><span class="pg-stat-suffix">+</span>
                        </div>
                        <p class="pg-stat-label">Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-stat pg-reveal" style="transition-delay:100ms">
                        <div class="pg-stat-icon"><i class="fas fa-smile"></i></div>
                        <div class="pg-stat-value">
                            <span class="pg-stat-num" data-count="300">0</span><span class="pg-stat-suffix">+</span>
                        </div>
                        <p class="pg-stat-label">Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-stat pg-reveal" style="transition-delay:200ms">
                        <div class="pg-stat-icon"><i class="fas fa-users"></i></div>
                        <div class="pg-stat-value">
                            <span class="pg-stat-num" data-count="50">0</span><span class="pg-stat-suffix">+</span>
                        </div>
                        <p class="pg-stat-label">Team Members</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-stat pg-reveal" style="transition-delay:300ms">
                        <div class="pg-stat-icon"><i class="fas fa-clock"></i></div>
                        <div class="pg-stat-value">
                            <span class="pg-stat-num" data-count="10">0</span><span class="pg-stat-suffix">+</span>
                        </div>
                        <p class="pg-stat-label">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== CORE VALUES ========== --}}
    <section class="pg-section" id="values">
        <div class="container">
            <div class="pg-section-head text-center pg-reveal">
                <span class="pg-kicker">Core Values</span>
                <h2 class="pg-section-title">What We Stand For</h2>
                <p class="pg-section-sub">The principles that shape every decision, every partnership, and every line of code we ship.</p>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:0ms">
                        <div class="pg-icon-tile"><i class="fas fa-lightbulb"></i></div>
                        <h3 class="pg-card-title">Innovation</h3>
                        <p class="pg-card-text mb-0">We embrace new ideas and emerging technologies to build forward-thinking solutions that keep our clients ahead of the curve.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:90ms">
                        <div class="pg-icon-tile"><i class="fas fa-shield-alt"></i></div>
                        <h3 class="pg-card-title">Integrity</h3>
                        <p class="pg-card-text mb-0">We act with honesty and transparency in everything we do, building lasting trust through ethical and dependable delivery.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:180ms">
                        <div class="pg-icon-tile"><i class="fas fa-handshake"></i></div>
                        <h3 class="pg-card-title">Collaboration</h3>
                        <p class="pg-card-text mb-0">We win as one team — partnering closely with clients and each other to turn ambitious goals into shared success.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:270ms">
                        <div class="pg-icon-tile"><i class="fas fa-trophy"></i></div>
                        <h3 class="pg-card-title">Excellence</h3>
                        <p class="pg-card-text mb-0">We obsess over quality and detail, setting high standards and delivering work that exceeds expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== WHAT WE DO ========== --}}
    <section class="pg-section" id="what-we-do" style="background:#f8fafd;">
        <div class="container">
            <div class="pg-section-head text-center pg-reveal">
                <span class="pg-kicker">What We Do</span>
                <h2 class="pg-section-title">Solutions Built Around You</h2>
                <p class="pg-section-sub">From idea to launch, we combine strategy, design, and engineering to deliver products that make a difference.</p>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:0ms">
                        <div class="pg-icon-tile"><i class="fas fa-code"></i></div>
                        <h3 class="pg-card-title">Web Development</h3>
                        <p class="pg-card-text">Fast, secure, and scalable websites and web applications engineered with modern stacks.</p>
                        <a href="services.html" class="pg-card-link">Explore Service <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:90ms">
                        <div class="pg-icon-tile"><i class="fas fa-mobile-screen"></i></div>
                        <h3 class="pg-card-title">Mobile Apps</h3>
                        <p class="pg-card-text">Native and cross-platform apps that deliver seamless, delightful experiences on every device.</p>
                        <a href="services.html" class="pg-card-link">Explore Service <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:180ms">
                        <div class="pg-icon-tile"><i class="fas fa-pen-nib"></i></div>
                        <h3 class="pg-card-title">UI/UX Design</h3>
                        <p class="pg-card-text">Human-centred interfaces crafted from research and design thinking to boost engagement.</p>
                        <a href="services.html" class="pg-card-link">Explore Service <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pg-card pg-reveal" style="transition-delay:270ms">
                        <div class="pg-icon-tile"><i class="fas fa-brain"></i></div>
                        <h3 class="pg-card-title">AI Solutions</h3>
                        <p class="pg-card-text">Smart automation and data-driven intelligence that unlock growth and efficiency.</p>
                        <a href="services.html" class="pg-card-link">Explore Service <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== CTA ========== --}}
    <section class="pg-section pg-dark pg-cta" id="cta">
        <div class="container">
            <div class="pg-cta-inner pg-reveal-scale">
                <span class="pg-kicker pg-kicker-light">Let's Collaborate</span>
                <h2 class="pg-cta-title">Ready to Build Something Amazing?</h2>
                <p class="pg-cta-sub">Partner with Antops Technologies and turn your vision into a digital solution that drives measurable results.</p>
                <div class="pg-cta-actions">
                    <a href="contact.html" class="pg-btn pg-btn-light">Get Free Consultation <i class="fas fa-arrow-right"></i></a>
                    <a href="services.html" class="pg-btn pg-btn-outline-light">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== CTA BAND ========== --}}
    <section class="pg-cta-band" style="padding:36px 0;">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 pg-reveal">
                <div>
                    <h4 style="font-size:22px;font-weight:800;color:#B0171F;margin:0 0 4px;">Have a project in mind?</h4>
                    <p style="font-size:14.5px;color:#5a6b8c;margin:0;">Let's discuss how we can help your business grow.</p>
                </div>
                <a href="contact.html" class="pg-btn pg-btn-solid">Get in Touch <i class="fas fa-arrow-right"></i></a>
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

    function pgAnimateCount(el) {
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var duration = 1800;
        var start = null;
        function step(now) {
            if (start === null) { start = now; }
            var progress = Math.min((now - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target);
            if (progress < 1) { requestAnimationFrame(step); }
        }
        requestAnimationFrame(step);
    }
    var counters = document.querySelectorAll('.pg-stat-num');
    if (counters.length && 'IntersectionObserver' in window) {
        var counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    pgAnimateCount(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        counters.forEach(function (el) { counterObserver.observe(el); });
    } else {
        counters.forEach(function (el) { el.textContent = el.getAttribute('data-count'); });
    }
})();
</script>
@endpush