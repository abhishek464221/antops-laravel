@extends('layouts.app')

@section('title', 'Antops Technologies - Think Digital. Think Antops.')
@section('meta_description', 'Antops Technologies is a premium digital solutions agency offering web development, mobile apps, UI/UX design, and digital marketing services.')
@section('meta_keywords', 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=League+Spartan:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
@endpush

@section('content')
    <main>
        <style>
            .home-banner .banner-overlay {
                position: absolute;
                inset: 0;
                z-index: 1;
                pointer-events: none;
                background: linear-gradient(100deg,
                    rgba(0,0,0,.88) 0%,
                    rgba(8,12,26,.75) 40%,
                    rgba(10,15,32,.5) 66%,
                    rgba(0,0,0,.22) 100%);
            }
            .home-banner .hero-content-wrap { position: relative; z-index: 2; }
        </style>
        <div class="internalPage">
            <section class="hero-section home-banner">
                <div class="swiper hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner-overlay"></div>
                            <div class="banner-image-static">
                                <img class="d-none d-sm-block" decoding="async" src="storage/sliders/3inD9Fg82Ck1NiDFCYkqOU0sQNkboevfQidZZ1Mw.png" alt="Antops Technologies" title="Antops Technologies" loading="eager" />
                                <img class="d-block d-sm-none" decoding="async" src="storage/sliders/3inD9Fg82Ck1NiDFCYkqOU0sQNkboevfQidZZ1Mw.png" alt="Antops Technologies" title="Antops Technologies" loading="eager" />
                            </div>
                            <div class="hero-content-wrap">
                                <div class="container content">
                                    <span class="text-white font-16 text-uppercase banner-head-title-1">Build powerful websites, mobile apps and custom software solutions</span>
                                    <p class="text-white home-banner-title home-banner-text-style" style="margin-top:20px;">Transforming Ideas Into Digital Reality
                                        <br /><span class="text-primary-blue-light fw-bolder" style="color:#CF171F;">designed to grow your business.</span>
                                    </p>
                                    <a href="{{ url('contact') }}" class="mt-5 bg-blur btn btn-white-outlined">Get Free Consultation</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-overlay"></div>
                            <div class="banner-image-static">
                                <img class="d-none d-sm-block" decoding="async" src="storage/sliders/bl0I1RmnHMubsJoYegpR1yH0ql8hgLd8wDWmJOst.png" alt="Antops Technologies" title="Antops Technologies" loading="lazy" />
                                <img class="d-block d-sm-none" decoding="async" src="storage/sliders/bl0I1RmnHMubsJoYegpR1yH0ql8hgLd8wDWmJOst.png" alt="Antops Technologies" title="Antops Technologies" loading="lazy" />
                            </div>
                            <div class="hero-content-wrap">
                                <div class="container content">
                                    <span class="text-white font-16 text-uppercase banner-head-title-1" style="margin-top:20px;">Imagination Meets, Implementation</span>
                                    <p class="text-white home-banner-title home-banner-text-style">Custom Software and
                                        <br /><span class="text-primary-blue-light fw-bolder" style="color:#CF171F;">ERP Solutions Company</span>
                                    </p>
                                    <a href="{{ url('contact') }}" class="mt-5 bg-blur btn btn-white-outlined">Schedule an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-overlay"></div>
                            <div class="banner-image-static">
                                <img class="d-none d-sm-block" decoding="async" src="storage/sliders/Ef1gzNCb0Jp0JQoWNnSKt2NuWKHKxbGpEiNfe16C.png" alt="Digital Marketing" title="Digital Marketing" loading="lazy" />
                                <img class="d-block d-sm-none" decoding="async" src="storage/sliders/Ef1gzNCb0Jp0JQoWNnSKt2NuWKHKxbGpEiNfe16C.png" alt="Digital Marketing" title="Digital Marketing" loading="lazy" />
                            </div>
                            <div class="hero-content-wrap">
                                <div class="container content">
                                    <span class="text-white font-16 text-uppercase banner-head-title-1" style="margin-top:20px !important;">Grow Your Brand Online</span>
                                    <p class="text-white home-banner-title home-banner-text-style">Custom strategies. Transparent execution. Real results.
                                        <br /><span class="text-primary-blue-light fw-bolder" style="color:#CF171F;">Digital Marketing Agency</span>
                                    </p>
                                    <a href="{{ url('services') }}" class="mt-5 bg-blur btn btn-white-outlined">Our Digital Marketing Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="about-us-section ryvora-about">
                <div class="ab-blob ab-blob-a"></div>
                <div class="ab-blob ab-blob-b"></div>
                <span class="ab-dot ab-dot-1"></span>
                <span class="ab-dot ab-dot-2"></span>
                <span class="ab-dot ab-dot-3"></span>
                <span class="ab-dot ab-dot-4"></span>
                <div class="container position-relative">
                    <div class="row align-items-center g-4 g-lg-5">
                        <div class="col-12 col-lg-6">
                            <div class="ab-media">
                                <span class="ab-frame-ring"></span>
                                <div class="ab-frame">
                                    <img src="storage/about/CKSZhKcdT9hXJEtf2moEDh2TSSh1V8AyDOuOK6zJ.png" alt="About Antops Technologies" title="About Antops Technologies" loading="lazy">
                                </div>
                                <div class="ab-badge">
                                    <span class="ab-badge-icon"><i class="fa-solid fa-award"></i></span>
                                    <div class="ab-badge-txt">
                                        <strong>10+</strong>
                                        <span>Years of Excellence</span>
                                    </div>
                                </div>
                                <div class="ab-float ab-float-a"><i class="fa-solid fa-rocket"></i></div>
                                <div class="ab-float ab-float-b"><i class="fa-solid fa-bolt"></i></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="ab-content">
                                <span class="ab-kicker"><i class="fa-solid fa-infinity"></i> About Antops Technologies</span>
                                <h2 class="ab-title" style="margin-bottom:25px !important;">
                                    Digital Marketing Web Development Services for Business Growth
                                </h2>
                                <div class="ab-line"></div>
                                <p class="ab-text">At Antops Technologies, we offer a full range of digital marketing and web development services. From website design and SEO to social media marketing and graphic designing, we empower businesses to excel online. With tailored solutions and expert guidance, we help you stand out and succeed in the digital landscape.</p>
                                <p class="ab-text">Our dedicated team employs advanced strategies and tools to enhance your digital footprint, ensuring maximum visibility and growth for your brand online.</p>
                                <p class="ab-text">Our strategies are tailored to meet your unique business needs, ensuring personalized attention and solutions that yield real results.</p>
                                <div class="ab-chip-row">
                                    <span class="ab-chip"><i class="fa-solid fa-circle-check"></i> SEO &amp; PPC</span>
                                    <span class="ab-chip"><i class="fa-solid fa-circle-check"></i> Social Media Marketing</span>
                                    <span class="ab-chip"><i class="fa-solid fa-circle-check"></i> Website Development</span>
                                    <span class="ab-chip"><i class="fa-solid fa-circle-check"></i> Graphic Design</span>
                                </div>
                                <a href="{{ url('contact') }}" class="ab-btn ab-btn-solid">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .what-can-we-do-gradient {
                    background: linear-gradient(-45deg, #ffffff, #fcf6f7, #faf0f2, #fff6f6, #fdf3f5);
                    background-size: 500% 500%;
                    animation: gradientShift 10s ease-in-out infinite;
                    position: relative;
                    padding-top: 130px;
                    padding-bottom: 130px;
                    z-index: 1;
                }
                .what-can-we-do-gradient::before {
                    content: '';
                    position: absolute; top: 0; left: 0; width: 100%; height: 90px;
                    background: #FFFFFF;
                    clip-path: ellipse(55% 100% at 50% 0%);
                }
                .what-can-we-do-gradient::after {
                    content: '';
                    position: absolute; bottom: 0; left: 0; width: 100%; height: 90px;
                    background: #FFFFFF;
                    clip-path: ellipse(55% 100% at 50% 100%);
                }
                @keyframes gradientShift {
                    0% { background-position: 0% 50%; }
                    50% { background-position: 100% 50%; }
                    100% { background-position: 0% 50%; }
                }
                /* ── TITLE: Spartan 44px/54px/700/#282F3B ── */
                .what-can-we-do-gradient .section-title h2 .gredient-text {
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    font-size: 44px !important;
                    line-height: 54px !important;
                    font-weight: 700 !important;
                    color: #282F3B !important;
                    background: none !important;
                    -webkit-background-clip: unset !important;
                    background-clip: unset !important;
                    -webkit-text-fill-color: #282F3B !important;
                }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .what-can-we-do-gradient .section-title p {
                    color: #282f3b;
                    opacity: 1;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                }
                .what-can-we-do-gradient .service-box {
                    background: #ffffff;
                    border-radius: 18px;
                    box-shadow: 0 20px 45px -18px rgba(0,30,88,.12);
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .what-can-we-do-gradient .service-box .top-content h3 {
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                }
                .what-can-we-do-gradient .service-box .top-content h3 span { color: #282f3b; }
                .what-can-we-do-gradient .service-inner-box h4 {
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                }
                .what-can-we-do-gradient .service-inner-box p {
                    color: #282f3b;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                }
                .what-can-we-do-gradient .service-inner-box img {
                    height: 220px; width: 100%; object-fit: cover;
                    border-radius: 8px 8px 0 0;
                }
                .what-can-we-do-gradient .section-title h2::after { display: none; }
                .what-can-we-do-gradient .svc-new-card {
                    display: flex; flex-direction: column; align-items: flex-start; gap: 12px;
                    padding: 28px 24px; border-radius: 18px; text-decoration: none;
                    background: #fff; border: 1px solid #CF171F;
                    box-shadow: 0 12px 36px -14px rgba(0,0,0,.06);
                    transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
                    min-height: 200px; position: relative; overflow: hidden;
                }
                .what-can-we-do-gradient .svc-new-card::before {
                    content: ''; position: absolute; top: -46px; right: -46px;
                    width: 110px; height: 110px; border-radius: 50%;
                    background: radial-gradient(circle, rgba(207,23,31,.07), transparent 70%);
                }
                .what-can-we-do-gradient .svc-new-card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 22px 50px -16px rgba(176,23,31,.22);
                    border-color: rgba(207,23,31,.3);
                }
                .what-can-we-do-gradient .svc-new-icon {
                    width: 56px; height: 56px; border-radius: 16px;
                    display: grid; place-items: center; font-size: 20px;
                    background: #fff; color: #CF171F;
                    box-shadow: inset 0 0 0 1.5px rgba(207,23,31,.3);
                    transition: background .35s ease, transform .35s ease, box-shadow .35s ease;
                }
                .what-can-we-do-gradient .svc-new-card:hover .svc-new-icon {
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    box-shadow: 0 12px 28px -8px #CF171F;
                    transform: scale(1.08) rotate(-4deg);
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .what-can-we-do-gradient .svc-new-title {
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    color: #282f3b;
                }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .what-can-we-do-gradient .svc-new-desc {
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    color: #282f3b;
                    flex: 1;
                }
                .what-can-we-do-gradient .svc-new-arrow {
                    display: inline-flex; align-items: center; justify-content: center;
                    width: 36px; height: 36px; border-radius: 50%;
                    background: transparent; color: #CF171F; font-size: 14px;
                    border: 1.5px solid rgba(207,23,31,.35);
                    transition: background .3s ease, transform .3s ease, color .3s ease;
                }
                .what-can-we-do-gradient .svc-new-card:hover .svc-new-arrow {
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    border-color: #CF171F; transform: translateX(4px);
                }

                /* ── TITLE: Spartan 44px/54px/700/#282F3B ── */
                .ab-heading {
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    font-size: 44px !important;
                    line-height: 54px !important;
                    font-weight: 700 !important;
                    color: #282F3B !important;
                    margin-bottom: 8px;
                }

                .ab-heading span{
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    font-size: 44px !important;
                    line-height: 54px !important;
                    font-weight: 700 !important;
                    color: #282F3B !important;
                    margin-bottom: 8px;
                }

                .section-title h2 {
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    font-size: 44px !important;
                    line-height: 54px !important;
                    font-weight: 700 !important;
                    color: #282F3B !important;
                    margin-bottom: 8px;
                }
                .section-title h2::after { display: none !important; }

                /* ── gradient text → solid #282F3B ── */
                .section-title .gredient-text,
                .section-title h2 .gredient-text,
                .testimonial-v3-head h2 .gredient-text,
                .industries-road-section .section-title h2 .gredient-text,
                .blog-section-new .section-title .gredient-text,
                .faq-quote-section .section-title .gredient-text,
                .clients-section .section-title .gredient-text,
                .our-products.solutions-new .section-title .ab-grad {
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    background: none !important;
                    -webkit-background-clip: unset !important;
                    background-clip: unset !important;
                    -webkit-text-fill-color: #282F3B !important;
                    color: #282F3B !important;
                }

                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .section-title p {
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    color: #282f3b;
                    margin-bottom: 16px;
                }
                .ab-line-center { margin-left: auto; margin-right: auto; }
                .internalPage .btn {
                    border-radius: 10px !important;
                    font-family: 'Inter' !important;
                    font-size: 15px !important;
                    font-weight: 600 !important;
                    letter-spacing: .3px;
                    padding: 14px 32px !important;
                    line-height: 1.2 !important;
                    display: inline-flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                    gap: 10px !important;
                    border: none !important;
                    transition: all .3s ease !important;
                }
                .internalPage .btn:hover { transform: translateY(-3px); box-shadow: 0 18px 32px -12px rgba(176,23,31,.4); }
                .internalPage .btn-blue-2,
                .internalPage .ab-btn-solid {
                    background: #CF171F !important;
                    color: #fff !important;
                    box-shadow: 0 14px 28px -10px rgb(207, 23, 31) !important;
                    margin-top: 15px;
                }
                .internalPage .btn-blue-2:hover,
                .internalPage .ab-btn-solid:hover {
                    background: #CF171F !important;
                    color: #fff !important;
                    box-shadow: 0 20px 36px -10px #CF171F !important;
                }
                .internalPage .btn-white-outlined {
                    color: #fff !important;
                    background: rgba(255,255,255,.16) !important;
                    border: 1.5px solid #fff !important;
                    backdrop-filter: blur(6px);
                }
                .internalPage .btn-white-outlined:hover {
                    background: rgb(207, 23, 31) !important;
                    border-color: rgb(207, 23, 31) !important;
                    color: #fff !important;
                }

                .ryvora-about {
                    position: relative; overflow: hidden;
                    padding: 90px 0 90px;
                    background: #ffffff;
                    z-index: 1;
                }
                .ryvora-about::before {
                    content: ''; position: absolute; inset: 0;
                    background-image: radial-gradient(rgba(176,23,31,.05) 1.2px, transparent 1.2px);
                    background-size: 26px 26px;
                    -webkit-mask-image: linear-gradient(90deg, transparent, #000 30%, #000 70%, transparent);
                    mask-image: linear-gradient(90deg, transparent, #000 30%, #000 70%, transparent);
                }
                .ab-blob { position: absolute; border-radius: 50%; filter: blur(70px); opacity: .3; pointer-events: none; z-index: 0; }
                .ab-blob-a { width: 420px; height: 420px; top: -140px; right: -140px; background: radial-gradient(circle, rgba(207,23,31,.18), transparent 70%); }
                .ab-blob-b { width: 380px; height: 380px; bottom: -140px; left: -140px; background: radial-gradient(circle, rgba(176,23,31,.12), transparent 70%); }
                .ab-dot { position: absolute; border-radius: 50%; z-index: 0; animation: abPulse 3s ease-in-out infinite; }
                .ab-dot-1 { width: 10px; height: 10px; background: #CF171F; top: 45px; left: 5%; }
                .ab-dot-2 { width: 6px; height: 6px; background: #CF171F; top: 130px; left: 12%; animation-delay: .5s; }
                .ab-dot-3 { width: 8px; height: 8px; background: #CF171F; bottom: 90px; right: 7%; animation-delay: 1s; }
                .ab-dot-4 { width: 5px; height: 5px; background: #CF171F; top: 30%; right: 4%; animation-delay: 1.5s; }
                @keyframes abPulse { 0%, 100% { opacity: .45; transform: scale(1); } 50% { opacity: 1; transform: scale(1.6); } }
                @keyframes abFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
                .ab-media { position: relative; max-width: 520px; margin: 0 auto 26px; }
                .ab-frame-ring {
                    position: absolute; z-index: 1; top: -16px; right: -16px; bottom: -16px; left: -16px;
                    border: 1.5px dashed #CF171F; border-radius: 34px 78px 34px 34px;
                    pointer-events: none;
                }
                .ab-frame {
                    position: relative; z-index: 2; background: #fff;
                    border-radius: 26px 80px 26px 26px;
                    box-shadow: 0 26px 60px -20px rgba(176,23,31,.45);
                    overflow: hidden;
                }
                .ab-frame img { display: block; width: 100%; height: clamp(320px, 40vw, 470px); object-fit: cover; }
                .ab-frame::after {
                    content: ''; position: absolute; inset: 0;
                    background: linear-gradient(180deg, transparent 60%, rgba(176,23,31,.38) 100%);
                    pointer-events: none;
                }
                .ab-badge {
                    position: absolute; z-index: 3; left: -14px; bottom: 30px;
                    display: flex; align-items: center; gap: 12px;
                    background: #fff; border-radius: 16px; padding: 12px 18px 12px 12px;
                    box-shadow: 0 18px 40px -14px rgba(176,23,31,.5);
                    animation: abFloat 4s ease-in-out infinite;
                }
                .ab-badge-icon {
                    width: 50px; height: 50px; border-radius: 13px; flex-shrink: 0;
                    display: grid; place-items: center; color: #fff; font-size: 20px;
                    background: rgb(207, 23, 31);
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .ab-badge-txt strong {
                    display: block;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    color: #282f3b;
                }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .ab-badge-txt span {
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    color: #282f3b;
                }
                .ab-float {
                    position: absolute; z-index: 3; width: 48px; height: 48px; border-radius: 14px;
                    display: grid; place-items: center; color: #fff; font-size: 17px;
                    background: rgb(207, 23, 31);
                    box-shadow: 0 14px 30px -10px rgba(6,41,96,.55);
                    animation: abFloat 5s ease-in-out infinite;
                }
                .ab-float-a { top: 24px; right: -12px; }
                .ab-float-b { bottom: -16px; right: 40px; animation-delay: 1.2s; background: rgb(207, 23, 31); }
                .ab-content { position: relative; z-index: 1; }
                .ab-kicker {
                    font-faimly: "Spartan", sans-serif !important; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 10px;
                    padding: 5px 14px; border-radius: 50px; font-size: 14px; font-weight: 600;
                    letter-spacing: 1.2px; text-transform: uppercase; color: #CF171F;
                    background: rgba(6,41,96,.07); border: 1px solid rgba(6,41,96,.22);
                }
                .ab-kicker-center { display: flex; width: fit-content; margin-left: auto; margin-right: auto; }
                .ab-kicker i { color: #CF171F; font-size: 14px; }
                /* ── TITLE: Spartan 44px/54px/700/#282F3B ── */
                .ab-title {
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    font-size: 44px !important;
                    line-height: 54px !important;
                    font-weight: 700 !important;
                    color: #282F3B !important;
                    margin-bottom: 8px !important;
                }
                .ab-grad {
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 44px;
                    line-height: 54px;
                    font-weight: 700;
                    color: #282F3B;
                    margin-bottom: 8px;
                }
                .ab-line {
                    width: 60px; height: 3px; border-radius: 4px; margin-bottom: 10px;
                    background: #CF171F;
                    background-size: 200% 100%;
                    animation: abLineFlow 2s linear infinite;
                    margin-top: -20px;
                }
                @keyframes abLineFlow {
                    0% { background-position: 0% center; }
                    100% { background-position: 200% center; }
                }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .ab-text {
                    font-family: 'Inter', sans-serif;
                    color: #282f3b;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    margin-bottom: 14px;
                    max-width: 520px;
                }
                .ab-chip-row { display: flex; flex-wrap: wrap; gap: 10px; margin: 4px 0 24px; }
                .ab-chip {
                    display: inline-flex; align-items: center; gap: 7px;
                    padding: 8px 16px; border-radius: 50px; font-size: 14px; font-weight: 600;
                    color: #CF171F; background: #fff; border: 1px solid rgb(207, 23, 31);
                    box-shadow: 0 8px 20px -12px rgb(207, 23, 31);
                    transition: transform .3s ease, background .3s ease, color .3s ease;
                }
                .ab-chip i { color: #CF171F; font-size: 14px; }
                .ab-chip:hover { background: rgb(207, 23, 31); color: #fff; transform: translateY(-3px); }
                .ab-chip:hover i { color: #fff; }
                .ab-content-wide { text-align: center; }
                .ab-content-wide .ab-kicker { justify-content: center; }
                .ab-content-wide .ab-line { margin-left: auto; margin-right: auto; }
                .ab-content-wide .ab-text { max-width: 100%; color: #282f3b; font-size: 17px; line-height: 1.65; }
                .our-products.solutions-new .portfolio-wrapper .sol-card {
                    display: flex; flex-direction: column; text-decoration: none;
                    height: 420px; border-radius: 20px; overflow: hidden;
                    background: #fff; border: 1px solid rgba(207,23,31,.14);
                    box-shadow: 0 16px 40px -20px rgba(176,23,31,.22);
                    transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
                }
                .our-products.solutions-new .portfolio-wrapper .sol-card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 28px 55px -20px rgba(176,23,31,.42);
                    border-color: rgba(207,23,31,.32);
                }
                .sol-card-img { flex: 1; overflow: hidden; display: block; min-height: 0; position: relative; }
                .sol-card-img::after {
                    content: ''; position: absolute; inset: 0;
                    background: linear-gradient(180deg, rgba(11,14,30,0) 55%, rgba(11,14,30,.5) 100%);
                    opacity: .35; transition: opacity .35s ease;
                }
                .sol-card:hover .sol-card-img::after { opacity: .6; }
                .sol-card-img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .6s ease; }
                .sol-card:hover .sol-card-img img { transform: scale(1.08); }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .sol-card-name {
                    display: flex; align-items: center; justify-content: space-between; gap: 10px;
                    padding: 20px 22px;
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-weight: 600;
                    font-size: 20px;
                    line-height: 30px;
                    border-top: 1px solid rgba(207,23,31,.1);
                }
                .our-products.solutions-new .ab-kicker i { color: #CF171F; }
                .sol-card-name i {
                    display: inline-flex; align-items: center; justify-content: center;
                    width: 38px; height: 38px; border-radius: 50%;
                    background: linear-gradient(135deg, #CF171F, #CF171F);
                    color: #fff; font-size: 14px; flex-shrink: 0;
                    transition: background .3s ease, transform .3s ease;
                }
                .sol-card:hover .sol-card-name i { transform: translateX(4px) rotate(-45deg); }
                .technology-we-work.techstack {
                    background: #CF171F !important;
                    position: relative;
                    overflow: hidden;
                }
                .techstack-bg {
                    position: absolute; inset: 0; pointer-events: none; z-index: 0;
                    background-image: radial-gradient(rgba(207,23,31,.16) 1.2px, transparent 1.2px);
                    background-size: 26px 26px;
                    -webkit-mask-image: linear-gradient(180deg, rgba(0,0,0,.7), transparent 65%);
                    mask-image: linear-gradient(180deg, rgba(0,0,0,.7), transparent 65%);
                    animation: techDrift 26s linear infinite;
                }
                @keyframes techDrift { 0% { background-position: 0 0; } 100% { background-position: 52px 26px; } }
                .technology-we-work.techstack .container,
                .technology-we-work.techstack .technology-slider-wrap { position: relative; z-index: 2; }
                .technology-we-work.techstack .section-title h2 { color: #fff !important; }
                .technology-we-work.techstack .ab-kicker {
                    color: #CF171F; background: #fff; border-color: #fff;
                }
                .technology-we-work.techstack .ab-kicker i { color: #CF171F; }
                .technology-we-work.techstack .ab-line {
                    background: linear-gradient(90deg, #CF171F, #CF171F, #CF171F) !important;
                }
                .technology-we-work.techstack .section-title p { color: #fff !important; }
                .technology-we-work.techstack .img-text-wrap { background: #fff; border: 1px solid rgba(176,23,31,.12); border-radius: 14px; min-height: 64px; box-shadow: 0 10px 24px -14px rgba(176,23,31,.25); }
                .ts-name {
                    color: #CF171F; font-size: 17px; font-weight: 500;
                    font-family: 'Inter', sans-serif;
                    white-space: nowrap; letter-spacing: .2px;
                    display: inline-flex; align-items: center; justify-content: center;
                    min-width: 130px; min-height: 56px; padding: 0 26px;
                    background: #fff; border: 1px solid rgba(176,23,31,.12); border-radius: 14px;
                    box-shadow: 0 10px 24px -14px rgba(176,23,31,.25);
                    transition: all .3s ease;
                }
                .swiper-slide:hover .ts-name { transform: translateY(-4px); border-color: rgba(207,23,31,.6); color: #CF171F; }
                .clients-section { background: #fff; position: relative; overflow: hidden; }
                .clients-section::before {
                    content: ""; position: absolute; top: -140px; right: -140px; width: 420px; height: 420px;
                    background: radial-gradient(circle, rgba(176,23,31,.07), transparent 70%);
                }
                .clients-section::after {
                    content: ""; position: absolute; bottom: -140px; left: -140px; width: 460px; height: 460px;
                    background: radial-gradient(circle, rgba(207,23,31,.12), transparent 70%);
                }
                .clients-section .clients-blob-a { background: radial-gradient(circle, rgba(176,23,31,.18), transparent 70%); }
                .clients-section .clients-blob-b { background: radial-gradient(circle, rgba(207,23,31,.14), transparent 70%); }
                .client-logo-name {
                    position: relative; z-index: 1; display: flex; align-items: center; gap: 10px;
                    font-family: 'Spartan', 'League Spartan', sans-serif; font-weight: 700; font-size: 20px; line-height: 30px;
                    color: #282f3b; white-space: nowrap; letter-spacing: .3px;
                }
                .client-logo-name i {
                    display: inline-flex; align-items: center; justify-content: center;
                    width: 34px; height: 34px; border-radius: 10px; flex-shrink: 0;
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #CF171F; font-size: 14px;
                }
                .client-logo-card { border-color: rgba(176,23,31,.1); }
                .client-logo-card::before { background: linear-gradient(135deg, rgba(176,23,31,.06), rgba(207,23,31,.06)); }
                .client-brand-letter {
                    width: 64px; height: 64px; border-radius: 16px; flex-shrink: 0;
                    display: flex; align-items: center; justify-content: center;
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #CF171F;
                    font-family: 'Spartan', 'League Spartan', sans-serif; font-size: 20px; font-weight: 800; letter-spacing: 1px;
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .client-brand-name {
                    margin-top: 12px; padding-top: 12px; border-top: 1px dashed rgba(176,23,31,.14);
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    color: #282f3b;
                    text-transform: capitalize;
                }
                .client-brand-name a { color: #282f3b; text-decoration: none; transition: color .3s ease; }
                .client-brand-name a:hover { color: #CF171F; }
                @media (max-width: 768px) {
                    .clm-item { min-width: 160px; height: 88px; padding: 14px 20px; }
                }
                @media (max-width: 480px) {
                    .clm-item { min-width: 120px; height: 72px; padding: 10px 14px; }
                    .clm-item img { max-height: 46px; max-width: 100px; }
                }
                .clients-logo-marquee { margin-top: 10px; position: relative; z-index: 1; overflow: hidden; display: flex; flex-direction: column; gap: 18px; }
                .clm-row { overflow: hidden; -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); }
                .clm-track { display: flex; align-items: center; width: max-content; gap: 20px; }
                .clm-left .clm-track { animation: clmScroll 30s linear infinite; }
                .clm-right .clm-track { animation: clmScroll 36s linear infinite reverse; }
                .clm-row:hover .clm-track { animation-play-state: paused; }
                .clm-item { display: flex; align-items: center; justify-content: center; min-width: 230px; height: 116px; padding: 20px 36px; background: #fff; border: 1px solid rgba(176,23,31,.08); border-radius: 14px; box-shadow: 0 8px 20px -14px rgba(176,23,31,.18); flex-shrink: 0; transition: all .3s ease; }
                .clm-item:hover { transform: translateY(-4px); box-shadow: 0 14px 32px -14px rgba(176,23,31,.3); border-color: rgba(207,23,31,.5); }
                .clm-item img { max-height: 88px; max-width: 185px; object-fit: contain; filter: grayscale(1); opacity: .72; transition: all .35s ease; }
                .clm-item:hover img { filter: grayscale(0); opacity: 1; }
                .clm-item em { font-style: normal; font-size: 17px; font-weight: 700; color: #CF171F; white-space: nowrap; }
                @keyframes clmScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
                .t-carousel-wrap { position: relative; z-index: 1; margin-top: 14px; padding-bottom: 50px; }
                .t-carousel .testimonial-card-v3 {
                    min-height: 340px; padding: 34px 28px 26px;
                    border-radius: 18px;
                    box-shadow: 0 18px 40px -20px rgba(0,0,0,.45);
                    transition: transform .35s ease, box-shadow .35s ease;
                }
                .t-carousel .testimonial-card-v3:hover { transform: translateY(-8px); box-shadow: 0 30px 55px -20px rgba(0,0,0,.5); }
                .t-carousel .testimonial-card-v3.grad-blue,
                .t-carousel .testimonial-card-v3.grad-violet,
                .t-carousel .testimonial-card-v3.grad-teal,
                .t-carousel .testimonial-card-v3.grad-coral,
                .t-carousel .testimonial-card-v3.grad-indigo,
                .t-carousel .testimonial-card-v3.grad-rose {
                    background: linear-gradient(180deg, #fff 0%, #f4f7fc 100%);
                    border: 1px solid rgba(176,23,31,.08);
                }
                .t-carousel .testimonial-card-v3::before {
                    content: ""; position: absolute; top: 0; left: 0; right: 0; height: 4px;
                    background: linear-gradient(90deg, #CF171F, #CF171F);
                }
                .t-carousel .testimonial-card-v3::after { display: none; }
                .t-carousel .tc-quote-mark { color: #e8eef8; font-size: 44px; top: 26px; right: 28px; }
                .t-carousel .tc-top { margin-bottom: 20px; }
                .t-carousel .tc-stars { color: #CF171F; font-size: 14px; letter-spacing: 2px; gap: 2px; }
                .t-carousel .tc-stars i { animation: none; filter: none; text-shadow: 0 2px 6px rgba(207,23,31,.35); }
                .t-carousel .tc-verified {
                    background: rgba(176, 23, 31, 0); border-color: #CF171F;
                    color: #282f3b; font-size: 14px; padding: 5px 10px; border-radius: 50px;
                }
                .t-carousel .tc-verified i { color: #CF171F; font-size: 14px; }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .t-carousel .tc-text {
                    color: #282f3b;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                }
                .t-carousel .tc-bottom { border-top: 1px dashed rgba(176,23,31,.14); padding-top: 18px; }
                .t-carousel .client-avatar.avatar-v3 {
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    border: none; box-shadow: 0 8px 18px -8px rgba(176,23,31,.6);
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-weight: 600;
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .t-carousel .tc-detail h3 {
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                }
                .t-carousel .tc-detail p {
                    color: #282f3b;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                }
                .testimonial-v3-badge {
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    box-shadow: 0 10px 24px -8px rgba(207,23,31,.5);
                }
                .testimonial-v3-badge i { color: #fff; }
                .testimonial-v3-head p { color: rgba(255,255,255,.75); }
                .our-testimonial.t-light-bg {
                    margin-left: 0 !important; margin-right: 0 !important; border-radius: 0 !important;
                }
                .our-testimonial.t-light-bg::before { display: none !important; }
                .t-light-bg {
                    position: relative; overflow: hidden;
                    background: linear-gradient(180deg, rgba(6,20,48,.94) 0%, rgba(10,25,60,.95) 100%),
                        url('assets/images/nw/solutions/hospitality/why-us-bg.jpg') center/cover no-repeat fixed;
                }
                .t-light-bg .container { position: relative; z-index: 1; }
                .t-head-start { text-align: left !important; margin-bottom: 30px; }
                .t-head-start h2 {
                    color: #fff !important;
                    font-family: 'Spartan', 'League Spartan', sans-serif !important;
                    font-size: 44px !important;
                    line-height: 54px !important;
                    font-weight: 700 !important;
                }
                .t-stats-box { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
                .t-stat {
                    background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.14); border-radius: 16px;
                    padding: 20px 18px; text-align: center;
                    backdrop-filter: blur(6px);
                    box-shadow: 0 14px 30px -18px rgba(0,0,0,.4);
                    transition: transform .3s ease, box-shadow .3s ease;
                }
                .t-stat:hover { transform: translateY(-5px); box-shadow: 0 22px 40px -18px rgba(0,0,0,.5); }
                .t-stat-num {
                    font-family: 'Spartan', 'League Spartan', sans-serif; font-size: 20px; font-weight: 800; line-height: 1.1;
                    background: linear-gradient(90deg, #CF171F, #CF171F);
                    -webkit-background-clip: text; background-clip: text;
                    -webkit-text-fill-color: transparent;
                }
                .t-stat-num .fa-star { font-size: 20px; }
                .t-stat-label { margin-top: 6px; font-size: 14px; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: .6px; }
                .testimonial-v3-blob.blob-a { background: rgba(207,23,31,.14); }
                .testimonial-v3-blob.blob-b { background: rgba(176,23,31,.5); }
                .testimonial-v3-blob.blob-c { background: rgba(207,23,31,.1); }
                .t-carousel-pagination { position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); }
                .t-carousel-pagination .swiper-pagination-bullet { width: 10px; height: 10px; background: rgba(255,255,255,.3); opacity: 1; transition: all .3s ease; }
                .t-carousel-pagination .swiper-pagination-bullet-active { width: 28px; border-radius: 6px; background: #CF171F; }
                .t-float { position: absolute; z-index: 0; pointer-events: none; animation: tFloatDrift 7s ease-in-out infinite; }
                .t-float-a { top: 16%; left: 6%; font-size: 20px; color: rgba(207,23,31,.35); }
                .t-float-b { top: 24%; right: 8%; font-size: 20px; color: rgba(255,255,255,.18); animation-delay: -2s; }
                .t-float-c { bottom: 22%; left: 12%; font-size: 44px; color: rgba(207,23,31,.25); animation-delay: -4s; }
                @keyframes tFloatDrift {
                    0%, 100% { transform: translateY(0) rotate(-6deg); }
                    50% { transform: translateY(-22px) rotate(8deg); }
                }
                .industries-road-section {
                    position: relative; padding: 90px 0 0; overflow: hidden;
                    background: linear-gradient(-45deg, #f4f8ff, #eaf1fc, #f7f9ff, #eef4ff, #f4f8ff);
                    background-size: 400% 400%;
                    animation: irGradientShift 14s ease-in-out infinite;
                }
                @keyframes irGradientShift {
                    0% { background-position: 0% 50%; }
                    50% { background-position: 100% 50%; }
                    100% { background-position: 0% 50%; }
                }
                .industries-road-section .section-title h2 { color: #282F3B !important; }
                .industries-road-section .section-title p {
                    color: #282f3b;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                }
                .ir-scene { position: relative; margin-top: 56px; height: 300px; overflow: hidden; }
                .ir-sun {
                    position: absolute; top: 26px; right: 10%; width: 64px; height: 64px; border-radius: 50%;
                    background: radial-gradient(circle at 35% 35%, #ffe9b8, #CF171F);
                    animation: irSunPulse 4s ease-in-out infinite;
                }
                @keyframes irSunPulse {
                    0%, 100% { box-shadow: 0 0 46px 12px rgba(207,23,31,.28); }
                    50% { box-shadow: 0 0 64px 22px rgba(207,23,31,.42); }
                }
                .ir-clouds { position: absolute; inset: 0; pointer-events: none; }
                .ir-cloud {
                    position: absolute; width: 86px; height: 26px; border-radius: 20px;
                    background: #fff; opacity: .85;
                    box-shadow: 0 12px 26px -14px rgba(176,23,31,.3);
                    animation: irCloudDrift linear infinite;
                }
                .ir-cloud::before, .ir-cloud::after {
                    content: ""; position: absolute; bottom: 0; border-radius: 50%; background: #fff;
                }
                .ir-cloud::before { width: 34px; height: 34px; left: 12px; }
                .ir-cloud::after { width: 24px; height: 24px; right: 10px; }
                @keyframes irCloudDrift {
                    from { transform: translateX(-160px); }
                    to { transform: translateX(calc(100vw + 160px)); }
                }
                .ir-track {
                    position: absolute; bottom: 58px; left: 0;
                    display: flex; align-items: flex-end; gap: 46px; width: max-content;
                    animation: irScroll 46s linear infinite;
                }
                @keyframes irScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
                .ir-stop { position: relative; display: block; text-decoration: none; flex-shrink: 0; }
                .ir-stop:hover .ir-pin { transform: translateY(-4px) scale(1.08); box-shadow: 0 14px 26px -8px rgba(207,23,31,.65); }
                .ir-stop:hover .ir-building { filter: brightness(1.25); }
                .ir-label {
                    position: absolute; bottom: 100%; left: 50%; transform: translateX(-50%);
                    display: flex; flex-direction: column; align-items: center; gap: 7px;
                    padding-bottom: 12px; white-space: nowrap;
                }
                .ir-pin {
                    width: 42px; height: 42px; border-radius: 50% 50% 50% 4px;
                    display: grid; place-items: center; font-size: 17px;
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    box-shadow: 0 10px 22px -8px rgba(207,23,31,.55);
                    transition: all .3s ease;
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .ir-name {
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 17px;
                    line-height: 24px;
                    font-weight: 500;
                    letter-spacing: .3px;
                }
                .ir-building {
                    display: block; width: 120px; border-radius: 8px 8px 0 0;
                    background: linear-gradient(180deg, #1a2f66 0%, #101f4a 100%);
                    border: 1px solid rgba(255,255,255,.08);
                    position: relative; transition: filter .3s ease;
                    box-shadow: 0 18px 30px -18px rgb(207, 23, 31);
                }
                .ir-building::after {
                    content: ""; position: absolute; inset: 14px 12px;
                    background-image: radial-gradient(rgba(207,23,31,.55) 2px, transparent 2.6px);
                    background-size: 20px 24px;
                }
                .ir-b0 { height: 96px; }
                .ir-b1 { height: 132px; }
                .ir-b2 { height: 110px; }
                .ir-b3 { height: 146px; }
                .ir-road {
                    position: absolute; left: 0; right: 0; bottom: 0; height: 58px;
                    background: linear-gradient(180deg, #d9e2f2 0%, #c3d1ea 100%);
                    border-top: 2px solid rgba(176,23,31,.14);
                }
                .ir-road::before {
                    content: ""; position: absolute; top: 50%; left: 0; width: 100%; height: 4px;
                    transform: translateY(-50%);
                    background: repeating-linear-gradient(90deg, #CF171F 0 46px, transparent 46px 96px);
                    animation: irDash 0.9s linear infinite;
                }
                @keyframes irDash { from { background-position: 0 0; } to { background-position: -96px 0; } }
                .ir-road::after {
                    content: ""; position: absolute; top: 0; left: 0; right: 0; height: 1px;
                    background: rgba(255,255,255,.15);
                }
                .ir-car {
                    position: absolute; left: 5%; bottom: 64px; width: 220px; height: 78px; z-index: 3;
                    animation: irBounce .45s ease-in-out infinite;
                }
                @keyframes irBounce { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-2.5px); } }
                .ir-car-body {
                    position: absolute; left: 0; right: 0; bottom: 12px; height: 42px;
                    background: linear-gradient(135deg, #CF171F 0%, #e39a00 100%);
                    border-radius: 18px 40px 10px 12px;
                    box-shadow: 0 12px 26px -12px rgba(207,23,31,.6), inset 0 2px 0 rgba(255,255,255,.35);
                }
                .ir-car-cabin {
                    position: absolute; left: 26%; bottom: 46px; width: 46%; height: 38px;
                    background: linear-gradient(135deg, #CF171F 0%, #e39a00 100%);
                    border-radius: 16px 16px 6px 6px;
                    box-shadow: inset 0 2px 0 rgba(255,255,255,.3);
                }
                .ir-car-window {
                    position: absolute; bottom: 9px; width: 30px; height: 20px;
                    background: #CF171F; border-radius: 5px;
                }
                .ir-car-window.ir-w1 { left: 8px; }
                .ir-car-window.ir-w2 { left: 46px; }
                .ir-car-light {
                    position: absolute; right: 6px; top: 12px; width: 12px; height: 9px;
                    background: #fff; border-radius: 3px; box-shadow: 0 0 10px 2px rgba(255,255,255,.55);
                }
                .ir-wheel {
                    position: absolute; bottom: 0; width: 34px; height: 34px; border-radius: 50%;
                    background: #0d1526; border: 7px solid #31405f;
                    animation: irWheel .55s linear infinite;
                }
                .ir-wheel::before {
                    content: ""; position: absolute; inset: 3px; border-radius: 50%;
                    background: repeating-conic-gradient(#CF171F 0deg 18deg, #0d1526 18deg 36deg);
                }
                .ir-wheel::after {
                    content: ""; position: absolute; inset: 50% auto auto 50%; width: 6px; height: 6px;
                    transform: translate(-50%, -50%); border-radius: 50%; background: #CF171F;
                }
                .ir-wheel-front { left: 32px; }
                .ir-wheel-back { right: 26px; }
                @keyframes irWheel { to { transform: rotate(360deg); } }
                @media (max-width: 768px) {
                    .ir-scene { height: 240px; margin-top: 40px; }
                    .ir-car { transform: scale(.62); transform-origin: bottom left; left: 2%; }
                    .ir-track { gap: 30px; }
                    .ir-building { width: 92px; }
                    .ir-name { font-size: 14px; line-height: 20px; }
                    .ir-pin { width: 34px; height: 34px; font-size: 14px; }
                }
                .bg-float { position: absolute; z-index: 0; pointer-events: none; animation: tFloatDrift 8s ease-in-out infinite; }
                .bg-float-a { top: 15%; left: 5%; font-size: 44px; color: rgba(176,23,31,.1); }
                .bg-float-b { top: 30%; right: 6%; font-size: 20px; color: rgba(207,23,31,.3); animation-delay: -3s; }
                .bg-float-c { bottom: 18%; left: 9%; font-size: 20px; color: rgba(176,23,31,.12); animation-delay: -5s; }
                .blog-section-new { position: relative; overflow: hidden; padding: 90px 0; background: linear-gradient(180deg, #fff 0%, #f4f8ff 100%); }
                .blog-section-new .container { position: relative; z-index: 1; }
                .blog-card-new {
                    display: block; text-decoration: none; height: 100%; position: relative;
                    border-radius: 16px; overflow: hidden; background: #fff;
                    border: 1px solid rgba(176,23,31,.08);
                    box-shadow: 0 14px 34px -18px rgba(176,23,31,.22);
                    transition: transform .35s ease, box-shadow .35s ease;
                }
                .blog-card-new:hover { transform: translateY(-8px); box-shadow: 0 26px 54px -22px rgba(176,23,31,.38); }
                .blog-card-new .blog-card-img { position: relative; height: 190px; overflow: hidden; }
                .blog-card-new .blog-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }
                .blog-card-new:hover .blog-card-img img { transform: scale(1.07); }
                .blog-card-new .blog-card-badge {
                    position: absolute; top: 14px; left: 14px; z-index: 2;
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    font-family: 'Spartan', 'League Spartan', sans-serif; font-size: 14px; font-weight: 800; letter-spacing: .5px;
                    text-transform: uppercase; padding: 6px 14px; border-radius: 50px;
                    box-shadow: 0 8px 18px -8px rgba(207,23,31,.7);
                }
                .blog-card-new .blog-card-date {
                    position: absolute; bottom: 14px; left: 14px; z-index: 2;
                    background: rgb(207, 23, 31); color: #fff;
                    font-size: 14px; font-weight: 600; padding: 6px 12px; border-radius: 8px;
                    backdrop-filter: blur(4px);
                }
                .blog-card-new .blog-card-body { padding: 22px 22px 24px; }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .blog-card-new .blog-card-body h3 {
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    margin-bottom: 10px;
                }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .blog-card-new .blog-card-body p {
                    color: #282f3b;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    margin-bottom: 14px;
                }
                .blog-card-new .blog-card-link {
                    display: inline-flex; align-items: center; gap: 8px;
                    color: #CF171F; font-family: 'Spartan', 'League Spartan', sans-serif; font-size: 14px; font-weight: 800;
                    border-bottom: 2px solid #CF171F; padding-bottom: 3px;
                    transition: all .3s ease;
                }
                .blog-card-new:hover .blog-card-link { gap: 14px; color: rgb(207, 23, 31); }

                .faq-quote-section { position: relative; overflow: hidden; padding: 90px 0; background: linear-gradient(180deg, #f4f8ff 0%, #fff 100%); }
                .faq-quote-section .container { position: relative; z-index: 1; }
                .faq-accordion-item {
                    margin-bottom: 14px; border-radius: 14px; overflow: hidden;
                    background: #fff; border: 1px solid rgba(176,23,31,.08);
                    box-shadow: 0 10px 26px -16px rgba(176,23,31,.18);
                    transition: all .3s ease;
                }
                .faq-accordion-item.open { border-color: rgba(207,23,31,.55); box-shadow: 0 16px 34px -16px rgba(176,23,31,.28); }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .faq-accordion-btn {
                    width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 14px;
                    padding: 17px 20px; background: transparent; border: none; text-align: left;
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    cursor: pointer; transition: all .3s ease;
                }
                .faq-accordion-btn i {
                    width: 30px; height: 30px; min-width: 30px; border-radius: 50%;
                    display: grid; place-items: center; font-size: 14px;
                    background: rgba(176,23,31,.08); color: #CF171F;
                    transition: all .35s ease;
                }
                .faq-accordion-item.open .faq-accordion-btn { color: #282F3B; }
                .faq-accordion-item.open .faq-accordion-btn i { background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff; transform: rotate(45deg); }
                .faq-accordion-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
                /* ✅ FAQ FIX: open state */
                .faq-accordion-item.open .faq-accordion-answer { max-height: 500px; }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .faq-accordion-answer p {
                    padding: 0 20px 18px;
                    margin: 0;
                    color: #282f3b;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                }

                .quote-form-card {
                    position: relative; border-radius: 20px; padding: 38px 34px; overflow: hidden;
                    background: linear-gradient(160deg, #0b1738 0%, #10224d 60%, #0c1a3e 100%);
                    box-shadow: 0 30px 60px -24px rgba(176,23,31,.5);
                    border: 1px solid rgba(255,255,255,.1);
                }
                .quote-form-card::before {
                    content: ""; position: absolute; top: -70px; right: -70px; width: 180px; height: 180px;
                    border-radius: 50%; background: rgba(207,23,31,.12); pointer-events: none;
                }
                .quote-form-card::after {
                    content: ""; position: absolute; bottom: -50px; left: -50px; width: 130px; height: 130px;
                    border-radius: 50%; background: rgba(207,23,31,.08); pointer-events: none;
                }
                .quote-form-head { position: relative; z-index: 1; margin-bottom: 24px; }
                .quote-form-head > span { font-family: 'Spartan', 'League Spartan', sans-serif; font-size: 14px; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; }
                /* ── BOX TITLE: Spartan 20px/30px/600/#fff (on dark) ── */
                .quote-form-head h3 {
                    color: #fff;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    margin: 8px 0 8px;
                }
                /* ── TEXT: Inter 17px/400 ── */
                .quote-form-head p {
                    color: #fff;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    margin: 0;
                }
                .quote-form-card form { position: relative; z-index: 1; }
                .quote-label { display: block; color: rgba(255,255,255,.85); font-size: 14px; font-weight: 700; margin-bottom: 6px; font-family: 'Spartan', 'League Spartan', sans-serif; }
                .quote-input {
                    width: 100%; padding: 12px 16px; border-radius: 10px;
                    background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.16);
                    color: #fff;
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    outline: none; transition: all .3s ease;
                }
                .quote-input::placeholder { color: rgba(255,255,255,.45); font-family: 'Inter', sans-serif; font-size: 17px; }
                .quote-input:focus { border-color: #CF171F; background: rgba(255,255,255,.1); box-shadow: 0 0 0 3px rgba(207,23,31,.18); }
                .quote-input option { color: #282f3b; }
                .quote-submit-btn {
                    width: 100%; padding: 14px 24px; border: none; border-radius: 12px;
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    font-family: 'Spartan', 'League Spartan', sans-serif; font-size: 15px; font-weight: 800; letter-spacing: .3px;
                    cursor: pointer; transition: all .3s ease;
                }
                .quote-submit-btn:hover { transform: translateY(-3px); }
                .quote-alert { border-radius: 10px; padding: 12px 16px; font-size: 15px; }

                .ps-card {
                    display: block; text-decoration: none; height: 100%;
                    border-radius: 16px; overflow: hidden; position: relative; background: #fff;
                    border: 1px solid rgba(176,23,31,.08);
                    box-shadow: 0 14px 34px -18px rgba(176,23,31,.25);
                    transition: transform .3s ease, box-shadow .3s ease;
                }
                .ps-card:hover { transform: translateY(-7px); box-shadow: 0 24px 50px -20px rgba(176,23,31,.4); }
                .ps-card-img { position: relative; display: block; height: 168px; overflow: hidden; background: #f1f4fa; }
                .ps-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }
                .ps-card:hover .ps-card-img img { transform: scale(1.08); }
                .ps-card-ph { display: flex; align-items: center; justify-content: center; height: 100%; font-size: 44px; color: #b6c0d4; }
                .ps-card-o {
                    position: absolute; right: 12px; bottom: 12px; width: 38px; height: 38px; border-radius: 50%;
                    background: #CF171F; color: #fff; display: grid; place-items: center; font-size: 15px;
                    opacity: 0; transform: translateY(8px); transition: all .3s ease;
                    box-shadow: 0 10px 22px -8px rgba(207,23,31,.7);
                }
                .ps-card:hover .ps-card-o { opacity: 1; transform: translateY(0); }
                .ps-card-name {
                    display: block; padding: 14px 16px 16px; color: #282f3b; text-align: center;
                    font-family: 'Spartan', 'League Spartan', sans-serif; font-weight: 600; font-size: 20px; line-height: 30px;
                    background: #fff; transition: color .3s ease;
                }
                .ps-card:hover .ps-card-name { color: #CF171F; }
                @media (max-width: 575.98px) {
                    .ps-card-img { height: 120px; }
                    .ps-card-name { font-size: 17px; line-height: 24px; padding: 10px 10px 12px; }
                }
                .ab-btn {
                    display: inline-flex; align-items: center; gap: 10px;
                    padding: 14px 30px; border-radius: 12px; font-size: 15px; font-weight: 600;
                    text-decoration: none; transition: all .3s ease;
                }
                .ab-btn-solid { color: #fff; background: linear-gradient(135deg, #CF171F, #CF171F); box-shadow: 0 14px 28px -10px rgb(207, 23, 31); }
                .ab-btn-solid:hover { color: #fff; transform: translateY(-3px); box-shadow: 0 20px 36px -10px rgb(207, 23, 31); }
                @media (max-width: 991.98px) {
                    .ryvora-about { padding: 64px 0; }
                    .ab-badge { left: 8px; bottom: 18px; padding: 10px 14px 10px 10px; }
                    .ab-badge-icon { width: 42px; height: 42px; font-size: 18px; }
                    .ab-frame-ring { display: none; }
                }

                .recent-portfolio-section { padding: 50px 0; background: #ffffff; }
                .recent-portfolio-section .section-title p { margin-bottom: 0; }
                .recent-portfolio-section .portfolio-nav-arrows { display: flex; gap: 10px; justify-content: flex-end; }
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-next,
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-prev {
                    position: static; width: 38px; height: 38px; background: transparent;
                    border: 1.5px solid #CF171F; border-radius: 50%; color: #CF171F; margin: 0;
                    transition: all .3s ease;
                }
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-next { background: #CF171F; color: #fff; }
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-next:hover,
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-prev:hover {
                    background: #CF171F; border-color: #CF171F; color: #fff; transform: translateY(-2px);
                    box-shadow: 0 6px 18px rgba(176,23,31,0.2);
                }
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-next:after,
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-prev:after { content: ''; }
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-next i,
                .recent-portfolio-section .portfolio-nav-arrows .swiper-button-prev i { font-size: 12px; }
                .recent-portfolio-section .recent-portfolio-slider { padding-bottom: 10px; }
                .recent-portfolio-section .recent-portfolio-card {
                    display: block; border-radius: 18px; overflow: hidden; height: 100%; text-decoration: none;
                    position: relative; box-shadow: 0 16px 40px -18px rgba(11,14,30,.22);
                    transition: transform .35s ease, box-shadow .35s ease;
                }
                .recent-portfolio-section .recent-portfolio-card:hover { transform: translateY(-8px); box-shadow: 0 28px 55px -20px rgba(11,14,30,.4); }
                .recent-portfolio-section .portfolio-image { position: relative; border-radius: 18px; overflow: hidden; height: 340px; }
                .recent-portfolio-section .portfolio-image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .7s ease; }
                .recent-portfolio-section .recent-portfolio-card:hover .portfolio-image img { transform: scale(1.1); }
                .recent-portfolio-section .portfolio-gradient-overlay { position: absolute; inset: 0; background: linear-gradient(180deg, rgba(11,14,30,0) 0%, rgba(11,14,30,.15) 45%, rgba(11,14,30,.9) 100%); z-index: 1; }
                .recent-portfolio-section .portfolio-card-content { position: absolute; left: 0; right: 0; bottom: 0; padding: 24px 24px 26px; z-index: 2; }
                .recent-portfolio-section .portfolio-tags { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 10px; }
                .recent-portfolio-section .portfolio-category { background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff; font-size: 12px; padding: 4px 12px; border-radius: 20px; font-weight: 700; letter-spacing: .3px; }
                .recent-portfolio-section .portfolio-industry { background: #fff; backdrop-filter: blur(4px); color: #CF171F; font-size: 12px; padding: 4px 12px; border-radius: 20px; font-weight: 700; letter-spacing: .3px; }
                /* ── BOX TITLE: Spartan 20px/30px/600/#fff (on image) ── */
                .recent-portfolio-section .portfolio-card-content h3 {
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    color: #fff;
                    margin-bottom: 10px;
                }
                .recent-portfolio-section .portfolio-view-link {
                    display: inline-flex; align-items: center; gap: 8px;
                    background: rgba(255,255,255,.14); border: 1px solid rgba(255,255,255,.3);
                    backdrop-filter: blur(4px); color: #fff; font-size: 13px; font-weight: 600;
                    padding: 7px 14px; border-radius: 22px;
                    opacity: 0; transform: translateY(10px); transition: all .35s ease;
                }
                .recent-portfolio-section .portfolio-view-link i { color: #CF171F; }
                .recent-portfolio-section .recent-portfolio-card:hover .portfolio-view-link { opacity: 1; transform: translateY(0); }
                .recent-portfolio-section .recent-portfolio-card:hover .portfolio-gradient-overlay { background: linear-gradient(180deg, rgba(176,23,31,0) 0%, rgba(176,23,31,.2) 45%, rgba(140,17,22,.95) 100%); }
                @media (max-width: 767px) {
                    .recent-portfolio-section .portfolio-nav-wrap { margin-top: 20px; }
                    .recent-portfolio-section .portfolio-nav-arrows { justify-content: flex-start; }
                    .recent-portfolio-section .portfolio-image { height: 280px; }
                }

                /* ===== Why Choose Us ===== */
                .why-choose-section {
                    position: relative; overflow: hidden;
                    padding: 110px 0 120px;
                    background: #FFFFFF;
                    z-index: 1;
                }
                .wc-orb { position: absolute; border-radius: 50%; pointer-events: none; }
                .wc-orb-a { width: 480px; height: 480px; top: -160px; right: -140px; background: radial-gradient(circle, rgba(207,23,31,.06), transparent 70%); }
                .wc-orb-b { width: 420px; height: 420px; bottom: -160px; left: -140px; background: radial-gradient(circle, rgba(176,23,31,.05), transparent 70%); }
                .wc-content { position: relative; z-index: 2; }
                .wc-list { list-style: none; margin: 34px 0 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 24px 30px; }
                .wc-list-item { display: flex; gap: 14px; align-items: flex-start; }
                .wc-list-icon {
                    flex: 0 0 auto; width: 46px; height: 46px; border-radius: 14px;
                    display: grid; place-items: center; font-size: 17px;
                    background: #fff; color: #CF171F;
                    box-shadow: inset 0 0 0 1.5px rgba(207,23,31,.22);
                    transition: transform .3s ease, background .3s ease, color .3s ease, box-shadow .3s ease;
                }
                .wc-list-item:hover .wc-list-icon {
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff;
                    box-shadow: 0 10px 24px -8px rgba(176,23,31,.5);
                    transform: scale(1.08) rotate(-4deg);
                }
                .wc-list-body { display: flex; flex-direction: column; gap: 3px; }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .wc-list-body strong {
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                    color: #282f3b;
                }
                /* ── TEXT: Inter 17px/400/#282f3b ── */
                .wc-list-body span {
                    font-family: 'Inter', sans-serif;
                    font-size: 17px;
                    font-weight: 400;
                    line-height: 1.65;
                    color: #282f3b;
                }
                .wc-visual { position: relative; width: 520px; max-width: 100%; aspect-ratio: 1; margin: 0 auto; }
                .wc-ring { position: absolute; border-radius: 50%; border: 2px dashed #CF171F; }
                .wc-ring-1 { inset: 0; animation: wcSpin 30s linear infinite; }
                .wc-ring-2 { inset: 42px; border-color: #CF171F; animation: wcSpinReverse 22s linear infinite; }
                .wc-center {
                    position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    width: 226px; height: 226px; border-radius: 50%;
                    background: radial-gradient(circle at 30% 25%, #ffffff, #fdf3f4 65%, #fbe7ea);
                    box-shadow: 0 26px 60px -18px rgb(207, 23, 31), inset 0 0 30px rgba(207,23,31,.06);
                    display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px;
                    text-align: center; z-index: 2; overflow: hidden;
                    border: 2px solid rgba(207,23,31,.12);
                }
                .wc-center::before {
                    content: ''; position: absolute; inset: 12px; border-radius: 50%;
                    border: 2px dashed rgba(207,23,31,.22);
                }
                .wc-center::after {
                    content: ''; position: absolute; inset: -20px; border-radius: 50%;
                    background: conic-gradient(from 0deg, transparent 0deg, rgba(207,23,31,.16) 40deg, transparent 120deg, rgba(207,23,31,.12) 200deg, transparent 280deg);
                    animation: wcSpin 14s linear infinite; pointer-events: none;
                }
                .wc-center-icon {
                    width: 58px; height: 58px; border-radius: 18px;
                    background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff; font-size: 24px;
                    display: grid; place-items: center;
                    box-shadow: 0 14px 30px -8px rgba(176,23,31,.5);
                }
                /* ── BOX TITLE: Spartan 20px/30px/600/#282f3b ── */
                .wc-center-title {
                    color: #282f3b;
                    font-family: 'Spartan', 'League Spartan', sans-serif;
                    font-size: 20px;
                    line-height: 30px;
                    font-weight: 600;
                }
                .wc-center-title span { display: inline-block; color: #282f3b; }
                .wc-float {
                    position: absolute; width: 56px; height: 56px; border-radius: 50%;
                    background: #fff; color: #CF171F; font-size: 19px;
                    display: grid; place-items: center;
                    box-shadow: 0 14px 30px -10px rgba(176,23,31,.28);
                    border: 1.5px solid rgba(207,23,31,.18);
                    animation: wcFloat 4.5s ease-in-out infinite; z-index: 3;
                }
                .wc-float-1 { top: 14%; left: 6%; }
                .wc-float-2 { top: 10%; right: 8%; animation-delay: 1.2s; }
                .wc-float-3 { bottom: 12%; left: 10%; background: linear-gradient(135deg, #CF171F, #CF171F); color: #fff; border-color: #CF171F; animation-delay: 2.1s; }
                .wc-float-4 { bottom: 8%; right: 4%; animation-delay: .6s; }
                .wc-shine {
                    position: absolute; top: 8%; right: 4%; width: 90px; height: 90px; border-radius: 50%;
                    background: radial-gradient(circle, rgba(207,23,31,.16), transparent 70%);
                    animation: wcPulse 3.5s ease-in-out infinite;
                }
                @keyframes wcSpin { to { transform: rotate(360deg); } }
                @keyframes wcSpinReverse { to { transform: rotate(-360deg); } }
                @keyframes wcFloat {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-14px); }
                }
                @keyframes wcPulse {
                    0%, 100% { transform: scale(1); opacity: .7; }
                    50% { transform: scale(1.25); opacity: 1; }
                }
                @media (max-width: 991px) {
                    .wc-list { grid-template-columns: 1fr; }
                    .wc-visual { margin-top: 30px; }
                }

                /* Responsive: reduce 44px title on mobile */
                @media (max-width: 767.98px) {
                    .ab-title,
                    .ab-grad,
                    .ab-heading,
                    .section-title h2,
                    .t-head-start h2 {
                        font-size: 30px !important;
                        line-height: 40px !important;
                    }
                }
            </style>

            <section class="what-can-we-do what-can-we-do-gradient">
                <div class="container">
                    <div class="section-title content text-center">
                        <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-briefcase"></i> What We Offer</span>
                        <h2 class="ab-heading">
                            <span>Complete IT Services &amp; Digital</span><br>
                            <span class="ab-grad">Solutions for Your Business</span>
                        </h2>
                        <div class="ab-line ab-line-center"></div>
                    </div>
                    <div class="card-deck-js">
                        <div class="service-box box-1">
                            <div class="top-content">
                                <h3>UI/UX Design</h3>
                            </div>
                            <div class="swiper service-slider-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="{{url ('services/uiux-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">UI/UX Design</span><span class="svc-new-desc">User-centric UI/UX design services that transform your product into a seamless, intuitive experience.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/website-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Website Design</span><span class="svc-new-desc">Stunning, conversion-focused website design that gives your business a professional edge.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/mobile-app-uiux-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Mobile App UI/UX Design</span><span class="svc-new-desc">Mobile app UI/UX design that delivers beautiful, intuitive interfaces users love.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/landing-page-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Landing Page Design</span><span class="svc-new-desc">High-converting landing page design that turns paid traffic and campaigns into leads.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/dashboard-admin-panel-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Dashboard &amp; Admin Panel Design</span><span class="svc-new-desc">Clear, data-rich dashboard and admin panel design that makes complex information easy.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/logo-brand-identity-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Logo &amp; Brand Identity Design</span><span class="svc-new-desc">Memorable logo and brand identity design that makes your business instantly recognizable.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/graphic-design') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Graphic Design</span><span class="svc-new-desc">Eye-catching graphic design for marketing, social media, print and web that keeps.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/prototyping-wireframing') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-paint-brush"></i></span><span class="svc-new-title">Prototyping &amp; Wireframing</span><span class="svc-new-desc">Fast, interactive prototyping and wireframing that validate your product idea before.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        </div>
                        <div class="service-box box-2">
                            <div class="top-content">
                                <h3>Web Application Development</h3>
                            </div>
                            <div class="swiper service-slider-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="{{url ('services/website-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">Website Development</span><span class="svc-new-desc">Bespoke website development tailored to your exact business requirements.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/web-application-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">Web Application Development</span><span class="svc-new-desc">Scalable web application development with modern architecture and seamless UX.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/e-commerce-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">E-Commerce Development</span><span class="svc-new-desc">Powerful, conversion-optimized e-commerce development for growing stores.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/cms-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">CMS Development</span><span class="svc-new-desc">Powerful, easy-to-manage CMS development that puts content control in your hands.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/saas-application-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">SaaS Application Development</span><span class="svc-new-desc">Multi-tenant SaaS application development that turns your software idea into a success.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/web-portal-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">Web Portal Development</span><span class="svc-new-desc">Secure, user-friendly web portal development for businesses, education, healthcare.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/api-development-integration') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">API Development &amp; Integration</span><span class="svc-new-desc">Robust API development and integration services that connect your software and apps.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/progressive-web-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-code"></i></span><span class="svc-new-title">Progressive Web App Development</span><span class="svc-new-desc">App-like PWA development that combines the reach of the web with the speed.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        </div>
                        <div class="service-box box-3">
                            <div class="top-content">
                                <h3>Mobile Application Development</h3>
                            </div>
                            <div class="swiper service-slider-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="{{url ('services/android-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">Android App Development</span><span class="svc-new-desc">Feature-rich Android app development using Kotlin and Java — fast, secure and scalable.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/ios-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">iOS App Development</span><span class="svc-new-desc">Polished, secure iOS app development in Swift and SwiftUI that delivers the premium.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/flutter-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">Flutter App Development</span><span class="svc-new-desc">Beautiful cross-platform apps with Flutter — one codebase for Android, iOS, web.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/react-native-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">React Native App Development</span><span class="svc-new-desc">High-performance React Native apps that deliver a native experience on both platforms.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/e-commerce-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">E-Commerce App Development</span><span class="svc-new-desc">Mobile e-commerce app development that turns browsing into buying — secure, fast.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/on-demand-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">On-Demand App Development</span><span class="svc-new-desc">On-demand app development for services, delivery and bookings.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/business-enterprise-app-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">Business &amp; Enterprise App Development</span><span class="svc-new-desc">Enterprise mobile app development that digitizes workflows and empowers teams.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/mobile-app-maintenance-support') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-mobile-alt"></i></span><span class="svc-new-title">Mobile App Maintenance &amp; Support</span><span class="svc-new-desc">Reliable mobile app maintenance and support — keep your app updated, secure, optimized.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        </div>
                        <div class="service-box box-4">
                            <div class="top-content">
                                <h3>Software Development</h3>
                            </div>
                            <div class="swiper service-slider-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="{{url ('services/custom-software-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">Custom Software Development</span><span class="svc-new-desc">Custom software development solutions built around your exact business processes.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/erp-software-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">ERP Software Development</span><span class="svc-new-desc">ERP software development that integrates finance, sales, inventory, HR and operations.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/crm-software-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">CRM Software Development</span><span class="svc-new-desc">Custom CRM software development that centralizes leads, customers, sales pipelines.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/hrms-software-development') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">HRMS Software Development</span><span class="svc-new-desc">HRMS software development with employee records, attendance, leave, payroll and more.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/school-management-software') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">School Management Software</span><span class="svc-new-desc">School management software with admissions, attendance, fees, exams, results.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/hospital-management-software') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">Hospital Management Software</span><span class="svc-new-desc">Hospital management software covering OPD, IPD, appointments, billing, pharmacy.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/inventory-management-software') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">Inventory Management Software</span><span class="svc-new-desc">Inventory management software with real-time stock tracking, purchase and sales.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/billing-pos-software') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-laptop-code"></i></span><span class="svc-new-title">Billing &amp; POS Software</span><span class="svc-new-desc">Billing &amp; POS software with fast checkout, GST invoices, inventory sync and sales.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        </div>
                        <div class="service-box box-5">
                            <div class="top-content">
                                <h3>Digital Marketing &amp; Branding</h3>
                            </div>
                            <div class="swiper service-slider-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="{{url ('services/search-engine-optimization-seo') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Search Engine Optimization (SEO)</span><span class="svc-new-desc">Results-driven SEO services that improve your rankings, drive organic traffic and leads.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/local-seo-services') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Local SEO Services</span><span class="svc-new-desc">Local SEO services that make your business visible to nearby customers searching.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/google-ads-ppc-management') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Google Ads &amp; PPC Management</span><span class="svc-new-desc">Google Ads &amp; PPC management that turns your ad budget into clicks, leads and sales.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/social-media-marketing') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Social Media Marketing</span><span class="svc-new-desc">Social media marketing that grows your audience, builds your brand and turns followers.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/content-marketing') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Content Marketing</span><span class="svc-new-desc">Content marketing services that create valuable, SEO-driven content to attract.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/branding-brand-identity') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Branding &amp; Brand Identity</span><span class="svc-new-desc">Complete branding and brand identity services — logo, colors, voice and guidelines.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/online-reputation-management') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Online Reputation Management</span><span class="svc-new-desc">Online reputation management services that protect and improve how your brand is seen.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/conversion-rate-optimization-cro') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-bullhorn"></i></span><span class="svc-new-title">Conversion Rate Optimization (CRO)</span><span class="svc-new-desc">Conversion rate optimization services that turn more of your visitors into leads.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        </div>
                        <div class="service-box box-6">
                            <div class="top-content">
                                <h3>Cloud &amp; Hosting</h3>
                            </div>
                            <div class="swiper service-slider-6">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="{{url ('services/cloud-hosting-services') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">Cloud Hosting Services</span><span class="svc-new-desc">Fast, secure and scalable cloud hosting services with high availability.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/vps-hosting') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">VPS Hosting</span><span class="svc-new-desc">Powerful VPS hosting with dedicated resources, full root access and expert management.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/dedicated-server-hosting') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">Dedicated Server Hosting</span><span class="svc-new-desc">Dedicated server hosting with exclusive hardware, maximum performance and control.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/domain-business-email') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">Domain &amp; Business Email</span><span class="svc-new-desc">Domain registration and professional business email setup with your own domain.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/aws-cloud-services') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">AWS Cloud Services</span><span class="svc-new-desc">AWS cloud services — architecture, migration, hosting and management of your infrastructure.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/cloud-migration-services') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">Cloud Migration Services</span><span class="svc-new-desc">Cloud migration services that move your websites, applications, data and systems.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/server-management-security') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">Server Management &amp; Security</span><span class="svc-new-desc">Server management and security services — setup, hardening, monitoring, patching.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <div class="swiper-slide"><a href="{{url ('services/website-backup-maintenance') }}" class="svc-new-card"><span class="svc-new-icon"><i class="fas fa-cloud"></i></span><span class="svc-new-title">Website Backup &amp; Maintenance</span><span class="svc-new-desc">Website backup and maintenance services that keep your site secure, updated, backed up.</span><span class="svc-new-arrow"><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-choose-section">
                <div class="wc-orb wc-orb-a"></div>
                <div class="wc-orb wc-orb-b"></div>
                <div class="container position-relative">
                    <div class="row align-items-center g-5">
                        <div class="col-12 col-lg-6" data-aos="fade-right">
                            <div class="wc-content">
                                <span class="ab-kicker"><i class="fa-solid fa-trophy"></i> Why Choose Us</span>
                                <h2 class="ab-title" style="margin-bottom:25px !important;">
                                    Discover the Difference<br />with Antops Technologies
                                </h2>
                                <div class="ab-line"></div>
                                <p class="ab-text">We blend strategy, creativity and technology to deliver results that move your business forward — and we stand beside you through every step.</p>
                                <ul class="wc-list">
                                    <li class="wc-list-item" data-aos="fade-up" data-aos-delay="0">
                                        <span class="wc-list-icon"><i class="fa-solid fa-bullseye"></i></span>
                                        <div class="wc-list-body">
                                            <strong>Expertise in Digital Marketing Strategies</strong>
                                            <span>Proven strategies to improve online visibility and increase marketing ROI.</span>
                                        </div>
                                    </li>
                                    <li class="wc-list-item" data-aos="fade-up" data-aos-delay="70">
                                        <span class="wc-list-icon"><i class="fa-solid fa-code"></i></span>
                                        <div class="wc-list-body">
                                            <strong>Customized Website Development</strong>
                                            <span>Websites built around your brand, audience, and business goals.</span>
                                        </div>
                                    </li>
                                    <li class="wc-list-item" data-aos="fade-up" data-aos-delay="140">
                                        <span class="wc-list-icon"><i class="fa-solid fa-chart-line"></i></span>
                                        <div class="wc-list-body">
                                            <strong>Proven Track Record of Success</strong>
                                            <span>Tangible results and growth across diverse industries.</span>
                                        </div>
                                    </li>
                                    <li class="wc-list-item" data-aos="fade-up" data-aos-delay="210">
                                        <span class="wc-list-icon"><i class="fa-solid fa-handshake"></i></span>
                                        <div class="wc-list-body">
                                            <strong>Client-Centric Approach</strong>
                                            <span>Personalized solutions built around your exact needs.</span>
                                        </div>
                                    </li>
                                    <li class="wc-list-item" data-aos="fade-up" data-aos-delay="280">
                                        <span class="wc-list-icon"><i class="fa-solid fa-lightbulb"></i></span>
                                        <div class="wc-list-body">
                                            <strong>Innovative &amp; Creative Solutions</strong>
                                            <span>Cutting-edge strategies that set your brand apart.</span>
                                        </div>
                                    </li>
                                    <li class="wc-list-item" data-aos="fade-up" data-aos-delay="350">
                                        <span class="wc-list-icon"><i class="fa-solid fa-headset"></i></span>
                                        <div class="wc-list-body">
                                            <strong>Dedicated Support &amp; Collaboration</strong>
                                            <span>Unwavering support from idea to launch and beyond.</span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="{{ url('contact') }}" class="ab-btn ab-btn-solid">Let's Work Together <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6" data-aos="fade-left">
                            <div class="wc-visual">
                                <div class="wc-ring wc-ring-1"></div>
                                <div class="wc-ring wc-ring-2"></div>
                                <div class="wc-center">
                                    <span class="wc-center-icon"><i class="fa-solid fa-trophy"></i></span>
                                    <span class="wc-center-title">Best SEO<br /><span>Firm India</span></span>
                                </div>
                                <span class="wc-float wc-float-1"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                                <span class="wc-float wc-float-2"><i class="fa-solid fa-rocket"></i></span>
                                <span class="wc-float wc-float-3"><i class="fa-solid fa-star"></i></span>
                                <span class="wc-float wc-float-4"><i class="fa-solid fa-chart-simple"></i></span>
                                <div class="wc-shine"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="recent-portfolio-section">
                <div class="container">
                    <div class="row align-items-end section-title-row">
                        <div class="col-12 col-md-8">
                            <div class="section-title content">
                                <span class="ab-kicker"><i class="fa-solid fa-briefcase"></i> Our Portfolio</span>
                                <h2 class="mb-0">Our Recent <span class="gredient-text">Work</span></h2>
                                <div class="ab-line"></div>
                                <p>Take a look at some of our recent projects that we've delivered with passion, precision, and innovation. Every project tells a story of collaboration and success.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-md-end portfolio-nav-wrap">
                            <div class="portfolio-nav-arrows">
                                <button type="button" class="swiper-button-prev portfolio-prev"><i class="fa-solid fa-arrow-left"></i></button>
                                <button type="button" class="swiper-button-next portfolio-next"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="recent-portfolio-slider-section section-content-gap">
                        <div class="swiper recent-portfolio-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ url('portfolio/pro-bangalore-real-estate-property-listing-management-platform') }}" class="recent-portfolio-card">
                                        <div class="portfolio-image">
                                            <img src="uploads/portfolios/37838ec1-2899-4a61-86af-a86fd5e05b64.png" alt="PRO Bangalore" loading="lazy" />
                                            <div class="portfolio-gradient-overlay"></div>
                                            <div class="portfolio-card-content">
                                                <div class="portfolio-tags">
                                                    <span class="portfolio-category">Web Development</span>
                                                    <span class="portfolio-industry">Real Estate</span>
                                                </div>
                                                <h3>PRO Bangalore – Real Estate Property Listing &amp; Management Platform</h3>
                                                <span class="portfolio-view-link">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ url('portfolio/medjections-medical-research-mentorship-clinical-guidance-platform') }}" class="recent-portfolio-card">
                                        <div class="portfolio-image">
                                            <img src="uploads/portfolios/4b9af48a-1f92-4e8e-9350-9f1d18e2cb94.png" alt="Medjections" loading="lazy" />
                                            <div class="portfolio-gradient-overlay"></div>
                                            <div class="portfolio-card-content">
                                                <div class="portfolio-tags">
                                                    <span class="portfolio-category">Web Development</span>
                                                    <span class="portfolio-industry">Medical</span>
                                                </div>
                                                <h3>Medjections – Medical Research, Mentorship &amp; Clinical Guidance Platform</h3>
                                                <span class="portfolio-view-link">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ url('portfolio') }}" class="btn btn-blue-2 py-2 px-4 radius-0">View All Our Work <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="agile-process-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6" data-aos="fade-right">
                            <div class="section-title content pe-sm-5">
                                <span class="ab-kicker"><i class="fa-solid fa-diagram-project"></i> Our Process</span>
                                <h2 class="ab-title">Our Agile Process.<br />Simple, Seamless, Streamlined</h2>
                                <div class="ab-line"></div>
                                <p class="ab-text">From initial discovery to launch and beyond, our agile workflow keeps you in the loop at every milestone. Transparent sprints, regular demos and honest communication ensure your project is delivered on time, on budget — and built to grow with your business.</p>
                            </div>
                            <div class="section-content-gap pe-sm-5 agile-process-diagram">
                                <img src="assets/images/nw/home/proccess-home.png" alt="Our agile process at a glance" loading="lazy" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6" data-aos="fade-left">
                            <div class="agile-process-circle">
                                <div class="holderCircle">
                                    <div class="round"></div>
                                    <div class="dotCircle">
                                        <span class="itemDot active itemDot1" data-tab="1"><span class="icon material-symbols-outlined">note_alt</span><span class="forActive"></span></span>
                                        <span class="itemDot itemDot2" data-tab="2"><span class="icon material-symbols-outlined">web</span><span class="forActive"></span></span>
                                        <span class="itemDot itemDot3" data-tab="3"><span class="icon material-symbols-outlined">code_blocks</span><span class="forActive"></span></span>
                                        <span class="itemDot itemDot4" data-tab="4"><span class="icon material-symbols-outlined">screen_search_desktop</span><span class="forActive"></span></span>
                                        <span class="itemDot itemDot5" data-tab="5"><span class="icon material-symbols-outlined">deployed_code</span><span class="forActive"></span></span>
                                        <span class="itemDot itemDot6" data-tab="6"><span class="icon material-symbols-outlined">preview</span><span class="forActive"></span></span>
                                    </div>
                                    <div class="contentCircle">
                                        <div class="CirItem title-box active CirItem1"><h2 class="gredient-text-color"><span>Scoping</span></h2><p>Learn how we gather complete project requirement, map the accurate resources and plan milestone and delivery.</p></div>
                                        <div class="CirItem title-box CirItem2"><h2 class="gredient-text-color"><span>Cost Estimation</span></h2><p>Get the complete project module wise cost breakdown with maintenance and support plan.</p></div>
                                        <div class="CirItem title-box CirItem3"><h2 class="gredient-text-color"><span>Development</span></h2><p>Our agile development process ensure timely development and delivery plan each module wise including dependency analysis.</p></div>
                                        <div class="CirItem title-box CirItem4"><h2 class="gredient-text-color"><span>QA & Testing</span></h2><p>We conduct rigorous testing at every stage of development, including functional, performance, and security testing. By identifying and resolving issues early.</p></div>
                                        <div class="CirItem title-box CirItem5"><h2 class="gredient-text-color"><span>Deployment</span></h2><p>Whether on-premises or in the cloud, our devops team do cost optimization with minimal disruption. Our team configures the environment, integrates necessary tools.</p></div>
                                        <div class="CirItem title-box CirItem6"><h2 class="gredient-text-color"><span>Maintenance</span></h2><p>We offer ongoing maintenance and support services to keep your solution running optimally. This includes regular updates, performance monitoring, and prompt issue resolution.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-products solutions-new">
                <div class="section-title content" data-aos="fade-up">
                    <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-box-open"></i> What We Build</span>
                    <h2 class="text-center">Powerful Products.<br /><span class="ab-grad">Smarter Solutions.</span></h2>
                    <div class="ab-line ab-line-center"></div>
                    <p class="text-center">Our customized digital & AI software solutions empower various business verticals and have become the backbone of operational processes. Our solutions are secure, data privacy-compliant, and built with the latest technologies.</p>
                </div>
                <div class="custom-slider-container">
                    <div class="portfolio-section">
                        <div class="portfolio-wrapper swiper portfolio-slider solutions-slider">
                            <div class="swiper-wrapper">
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/crm-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/c1a97aec-b39b-420b-9ccf-c7710fc5f9e1.png" alt="CRM Software" loading="lazy" /></span><span class="sol-card-name">CRM Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/erp-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/10eaf587-f276-4acf-8dac-9da50035d8a3.png" alt="ERP Software" loading="lazy" /></span><span class="sol-card-name">ERP Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/hr-payroll-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/d06de9ae-c2b5-47db-94d0-a5f6c8ea55d3.png" alt="HR &amp; Payroll Software" loading="lazy" /></span><span class="sol-card-name">HR &amp; Payroll Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/school-management-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/18b81570-1c04-4076-a7fb-fde6348395dc.png" alt="School Management Software" loading="lazy" /></span><span class="sol-card-name">School Management Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/hospital-management-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/3aee678b-d9b8-4a7d-984a-bbfb47a01861.png" alt="Hospital Management Software" loading="lazy" /></span><span class="sol-card-name">Hospital Management Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/food-ordering-system') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/f31884b3-8fd9-4971-9077-f12f41d00ab9.png" alt="Food Ordering System" loading="lazy" /></span><span class="sol-card-name">Food Ordering System <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/inventory-management') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/dd0bd76b-6c34-4eca-9f40-8e5dfc50c391.png" alt="Inventory Management" loading="lazy" /></span><span class="sol-card-name">Inventory Management <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/car-rental-system') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/53de3600-b8d1-42d9-9450-9f2bd184ee72.png" alt="Car Rental System" loading="lazy" /></span><span class="sol-card-name">Car Rental System <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/accounting-billing-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/3cb3e44f-4406-448c-bba8-ca8d8c341f25.png" alt="Accounting &amp; Billing Software" loading="lazy" /></span><span class="sol-card-name">Accounting &amp; Billing Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/restaurant-management') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/694f9b46-45ea-4e21-8082-53d05037fcb5.png" alt="Restaurant Management" loading="lazy" /></span><span class="sol-card-name">Restaurant Management <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/hotel-management-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/cac66b1e-0777-459c-91ec-011e79c7cc2b.png" alt="Hotel Management Software" loading="lazy" /></span><span class="sol-card-name">Hotel Management Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/job-portal') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/6f761ded-73c6-4b51-bbc9-84f68df4f581.png" alt="Job Portal" loading="lazy" /></span><span class="sol-card-name">Job Portal <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/logistics-fleet-management') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/fb4441e9-7c2c-4499-9bd6-0422f43f5083.png" alt="Logistics &amp; Fleet Management" loading="lazy" /></span><span class="sol-card-name">Logistics &amp; Fleet Management <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/e-commerce-platform') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/3be7240c-d78f-45af-b961-59a06f29308f.png" alt="E-Commerce Platform" loading="lazy" /></span><span class="sol-card-name">E-Commerce Platform <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/real-estate-crm') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/031c0617-c935-4525-bced-b0f4a21d9c27.png" alt="Real Estate CRM" loading="lazy" /></span><span class="sol-card-name">Real Estate CRM <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/pos-retail-management') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/730a60a1-2c0e-499d-bb4d-62d1691a99cc.png" alt="POS &amp; Retail Management" loading="lazy" /></span><span class="sol-card-name">POS &amp; Retail Management <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/on-demand-home-services') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/beaa2a69-debb-417a-9b28-9e4a12778349.png" alt="On-Demand Home Services" loading="lazy" /></span><span class="sol-card-name">On-Demand Home Services <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/project-management-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/467c0b3d-a139-4e6b-ab10-5185f85850b5.png" alt="Project Management Software" loading="lazy" /></span><span class="sol-card-name">Project Management Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/learning-management-system') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/53237fca-c734-4df5-93ac-2ccc44c2716a.png" alt="Learning Management System" loading="lazy" /></span><span class="sol-card-name">Learning Management System <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/appointment-booking') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/11bd2a38-5a96-4020-b746-ab11d255e983.png" alt="Appointment &amp; Booking" loading="lazy" /></span><span class="sol-card-name">Appointment &amp; Booking <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                <div class="portfolio-item swiper-slide"><a href="{{ url('solutions/custom-business-software') }}" class="sol-card"><span class="sol-card-img"><img src="uploads/solutions/9b7e300b-2d88-458c-8e48-2064ca7ea750.png" alt="Custom Business Software" loading="lazy" /></span><span class="sol-card-name">Custom Business Software <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-end mt-2 mt-md-5">
                    <div class="slider-btns-wrap">
                        <div class="arrow blue-arrow swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="arrow blue-arrow swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                </div>
            </section>

            <section class="technology-we-work techstack">
                <div class="techstack-bg"></div>
                <div class="container">
                    <div class="section-title content">
                        <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-code"></i> Our Tech Stack</span>
                        <h2 class="text-center">Absolutely, We have thoroughly mastered the technologies you prefer.</h2>
                        <div class="ab-line ab-line-center"></div>
                        <p class="text-center">Our exceptionally skilled IT specialists are proficient in both classic and modern programming languages, as well as frameworks. We aim for excellence, choosing only the top-tier candidates when selecting our IT specialists.</p>
                    </div>
                </div>
                <div class="technology-slider-wrap">
                    <div class="continue-slider tech-slider">
                        <div class="swiper slide-left">
                            <div class="swiper-wrapper">
                                <div class="list swiper-slide"><span class="ts-name">HTML5</span></div>
                                <div class="list swiper-slide"><span class="ts-name">CSS3</span></div>
                                <div class="list swiper-slide"><span class="ts-name">JavaScript</span></div>
                                <div class="list swiper-slide"><span class="ts-name">React.js</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Next.js</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Vue.js</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Angular</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Bootstrap</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Tailwind CSS</span></div>
                                <div class="list swiper-slide"><span class="ts-name">PHP</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Laravel</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Node.js</span></div>
                            </div>
                        </div>
                        <div class="swiper slide-right" dir="rtl">
                            <div class="swiper-wrapper">
                                <div class="list swiper-slide"><span class="ts-name">Python</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Django</span></div>
                                <div class="list swiper-slide"><span class="ts-name">.NET</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Java</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Spring Boot</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Android</span></div>
                                <div class="list swiper-slide"><span class="ts-name">iOS</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Flutter</span></div>
                                <div class="list swiper-slide"><span class="ts-name">React Native</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Kotlin</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Swift</span></div>
                                <div class="list swiper-slide"><span class="ts-name">AWS</span></div>
                            </div>
                        </div>
                        <div class="swiper slide-left">
                            <div class="swiper-wrapper">
                                <div class="list swiper-slide"><span class="ts-name">Microsoft Azure</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Google Cloud</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Docker</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Kubernetes</span></div>
                                <div class="list swiper-slide"><span class="ts-name">CI/CD</span></div>
                                <div class="list swiper-slide"><span class="ts-name">GitHub Actions</span></div>
                                <div class="list swiper-slide"><span class="ts-name">MySQL</span></div>
                                <div class="list swiper-slide"><span class="ts-name">PostgreSQL</span></div>
                                <div class="list swiper-slide"><span class="ts-name">MongoDB</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Microsoft SQL Server</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Firebase</span></div>
                                <div class="list swiper-slide"><span class="ts-name">Redis</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="clients-section">
                <div class="clients-blob clients-blob-a"></div>
                <div class="clients-blob clients-blob-b"></div>
                <span class="bg-float bg-float-a"><i class="fa-solid fa-handshake"></i></span>
                <span class="bg-float bg-float-b"><i class="fa-solid fa-globe"></i></span>
                <span class="bg-float bg-float-c"><i class="fa-solid fa-shield-halved"></i></span>
                <div class="container">
                    <div class="section-title content">
                        <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-handshake"></i> Trusted Worldwide</span>
                        <h2 class="text-center">Our <span class="gredient-text">Partners & Clients</span></h2>
                        <div class="ab-line ab-line-center"></div>
                        <p class="text-center">We partner with leading technology companies and serve enthusiastic clients across the globe, delivering secure, scalable, and modern solutions that help businesses grow faster.</p>
                    </div>
                    <div class="clients-logo-marquee">
                        <div class="clm-row clm-left">
                            <div class="clm-track">
                                <span class="clm-item"><img src="uploads/clients/2d79fc3e-2db3-4e0a-a1db-71645132d0ea.png" alt="kliquick" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/a093b020-9aeb-45b3-9857-ba3fe8263eed.png" alt="sANSAPOTE" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/61d88d7c-dde7-41d1-aba0-2bfd5079900e.png" alt="cASHEW" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/b237ebd4-7985-40f2-b61f-19fa6a19488c.png" alt="hACKPLOIT" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/7a7c83a2-4d5a-44eb-85eb-d98c488b8407.png" alt="mEDI" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/3eb413cf-3c1e-4684-837c-ec20c82be2ce.png" alt="pRO" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/2d79fc3e-2db3-4e0a-a1db-71645132d0ea.png" alt="kliquick" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/a093b020-9aeb-45b3-9857-ba3fe8263eed.png" alt="sANSAPOTE" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/61d88d7c-dde7-41d1-aba0-2bfd5079900e.png" alt="cASHEW" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/b237ebd4-7985-40f2-b61f-19fa6a19488c.png" alt="hACKPLOIT" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/7a7c83a2-4d5a-44eb-85eb-d98c488b8407.png" alt="mEDI" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/3eb413cf-3c1e-4684-837c-ec20c82be2ce.png" alt="pRO" loading="lazy" /></span>
                            </div>
                        </div>
                        <div class="clm-row clm-right">
                            <div class="clm-track">
                                <span class="clm-item"><img src="uploads/clients/2d79fc3e-2db3-4e0a-a1db-71645132d0ea.png" alt="kliquick" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/a093b020-9aeb-45b3-9857-ba3fe8263eed.png" alt="sANSAPOTE" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/61d88d7c-dde7-41d1-aba0-2bfd5079900e.png" alt="cASHEW" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/b237ebd4-7985-40f2-b61f-19fa6a19488c.png" alt="hACKPLOIT" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/7a7c83a2-4d5a-44eb-85eb-d98c488b8407.png" alt="mEDI" loading="lazy" /></span>
                                <span class="clm-item"><img src="uploads/clients/3eb413cf-3c1e-4684-837c-ec20c82be2ce.png" alt="pRO" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/2d79fc3e-2db3-4e0a-a1db-71645132d0ea.png" alt="kliquick" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/a093b020-9aeb-45b3-9857-ba3fe8263eed.png" alt="sANSAPOTE" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/61d88d7c-dde7-41d1-aba0-2bfd5079900e.png" alt="cASHEW" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/b237ebd4-7985-40f2-b61f-19fa6a19488c.png" alt="hACKPLOIT" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/7a7c83a2-4d5a-44eb-85eb-d98c488b8407.png" alt="mEDI" loading="lazy" /></span>
                                <span class="clm-item" aria-hidden="true"><img src="uploads/clients/3eb413cf-3c1e-4684-837c-ec20c82be2ce.png" alt="pRO" loading="lazy" /></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="industries-road-section">
                <div class="container position-relative">
                    <div class="section-title content">
                        <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-building-shield"></i> What We Power</span>
                        <h2 class="text-center">Industries <span class="gredient-text">We Serve</span></h2>
                        <div class="ab-line ab-line-center"></div>
                        <p class="text-center">Driving digital transformation across every sector — from healthcare and education to logistics and manufacturing.</p>
                    </div>
                </div>
                <div class="ir-scene">
                    <div class="ir-clouds">
                        <span class="ir-cloud" style="left: 3%; top: 12%; animation-duration: 18s; animation-delay: 0s;"></span>
                        <span class="ir-cloud" style="left: 22%; top: 26%; animation-duration: 25s; animation-delay: -5s;"></span>
                        <span class="ir-cloud" style="left: 41%; top: 40%; animation-duration: 32s; animation-delay: -10s;"></span>
                        <span class="ir-cloud" style="left: 60%; top: 54%; animation-duration: 39s; animation-delay: -15s;"></span>
                        <span class="ir-cloud" style="left: 79%; top: 24%; animation-duration: 18s; animation-delay: -20s;"></span>
                    </div>
                    <div class="ir-sun"></div>
                    <div class="ir-track">
                        <a href="{{ url('industries/healthcare') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-heartbeat"></i></span><span class="ir-name">Healthcare</span></span><span class="ir-building ir-b1"></span></a>
                        <a href="{{ url('industries/ecommerce-retail') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-shopping-bag"></i></span><span class="ir-name">E-Commerce &amp; Retail</span></span><span class="ir-building ir-b2"></span></a>
                        <a href="{{ url('industries/real-estate') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-building"></i></span><span class="ir-name">Real Estate</span></span><span class="ir-building ir-b3"></span></a>
                        <a href="{{ url('industries/education-elearning') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-graduation-cap"></i></span><span class="ir-name">Education &amp; E-Learning</span></span><span class="ir-building ir-b0"></span></a>
                        <a href="{{ url('industries/finance-banking') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-university"></i></span><span class="ir-name">Finance &amp; Banking</span></span><span class="ir-building ir-b1"></span></a>
                        <a href="{{ url('industries/travel-hospitality') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-plane"></i></span><span class="ir-name">Travel &amp; Hospitality</span></span><span class="ir-building ir-b2"></span></a>
                        <a href="{{ url('industries/logistics-supply-chain') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-truck"></i></span><span class="ir-name">Logistics &amp; Supply Chain</span></span><span class="ir-building ir-b3"></span></a>
                        <a href="{{ url('industries/manufacturing') }}" class="ir-stop"><span class="ir-label"><span class="ir-pin"><i class="fas fa-industry"></i></span><span class="ir-name">Manufacturing</span></span><span class="ir-building ir-b0"></span></a>
                        <a href="{{ url('industries/healthcare') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-heartbeat"></i></span><span class="ir-name">Healthcare</span></span><span class="ir-building ir-b1"></span></a>
                        <a href="{{ url('industries/ecommerce-retail') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-shopping-bag"></i></span><span class="ir-name">E-Commerce &amp; Retail</span></span><span class="ir-building ir-b2"></span></a>
                        <a href="{{ url('industries/real-estate') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-building"></i></span><span class="ir-name">Real Estate</span></span><span class="ir-building ir-b3"></span></a>
                        <a href="{{ url('industries/education-elearning') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-graduation-cap"></i></span><span class="ir-name">Education &amp; E-Learning</span></span><span class="ir-building ir-b0"></span></a>
                        <a href="{{ url('industries/finance-banking') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-university"></i></span><span class="ir-name">Finance &amp; Banking</span></span><span class="ir-building ir-b1"></span></a>
                        <a href="{{ url('industries/travel-hospitality') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-plane"></i></span><span class="ir-name">Travel &amp; Hospitality</span></span><span class="ir-building ir-b2"></span></a>
                        <a href="{{ url('industries/logistics-supply-chain') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-truck"></i></span><span class="ir-name">Logistics &amp; Supply Chain</span></span><span class="ir-building ir-b3"></span></a>
                        <a href="{{ url('industries/manufacturing') }}" class="ir-stop" aria-hidden="true"><span class="ir-label"><span class="ir-pin"><i class="fas fa-industry"></i></span><span class="ir-name">Manufacturing</span></span><span class="ir-building ir-b0"></span></a>
                    </div>
                    <div class="ir-car">
                        <span class="ir-car-cabin"><span class="ir-car-window ir-w1"></span><span class="ir-car-window ir-w2"></span></span>
                        <span class="ir-car-body"><span class="ir-car-light"></span></span>
                        <span class="ir-wheel ir-wheel-front"></span>
                        <span class="ir-wheel ir-wheel-back"></span>
                    </div>
                    <div class="ir-road"></div>
                </div>
            </section>

            <section class="our-testimonial testimonial-v3 t-light-bg">
                <div class="testimonial-v3-blob blob-a"></div>
                <div class="testimonial-v3-blob blob-b"></div>
                <div class="testimonial-v3-blob blob-c"></div>
                <span class="t-float t-float-a"><i class="fa-solid fa-heart"></i></span>
                <span class="t-float t-float-b"><i class="fa-solid fa-star"></i></span>
                <span class="t-float t-float-c"><i class="fa-solid fa-quote-right"></i></span>
                <div class="container position-relative">
                    <div class="row align-items-center g-4 g-lg-5">
                        <div class="col-lg-4">
                            <div class="testimonial-v3-head t-head-start">
                                <span class="testimonial-v3-badge"><i class="fa-solid fa-heart"></i> Client Love</span>
                                <h2>What Our Amazing Clients Say About Us</h2>
                            </div>
                            <div class="t-stats-box">
                                <div class="t-stat" data-aos="zoom-in"><div class="t-stat-num"><span class="stat-count" data-count="300">0</span>+</div><div class="t-stat-label">Happy Clients</div></div>
                                <div class="t-stat" data-aos="zoom-in" data-aos-delay="80"><div class="t-stat-num"><span class="stat-count" data-count="500">0</span>+</div><div class="t-stat-label">Projects Delivered</div></div>
                                <div class="t-stat" data-aos="zoom-in" data-aos-delay="160"><div class="t-stat-num"><i class="fa-solid fa-star" style="color:#feff06;"></i> 4.9</div><div class="t-stat-label">Average Rating</div></div>
                                <div class="t-stat" data-aos="zoom-in" data-aos-delay="240"><div class="t-stat-num">24/7</div><div class="t-stat-label">Support Available</div></div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="t-carousel-wrap">
                                <div class="swiper t-carousel" id="testimonialCarousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-card testimonial-card-home testimonial-card-v3 grad-blue">
                                                <span class="tc-quote-mark"><i class="fa-solid fa-quote-left"></i></span>
                                                <div class="tc-top">
                                                    <div class="tc-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                                    <span class="tc-verified"><i class="fa-solid fa-circle-check"></i> Verified</span>
                                                </div>
                                                <p class="testimonial-para tc-text">"Antops Technologies delivered an exceptional web application that exceeded our expectations. Their team was professional, responsive, and highly skilled."</p>
                                                <div class="tc-bottom">
                                                    <div class="tc-detail"><h3>John Smith</h3><p>CEO, TechCorp Inc.</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card testimonial-card-home testimonial-card-v3 grad-violet">
                                                <span class="tc-quote-mark"><i class="fa-solid fa-quote-left"></i></span>
                                                <div class="tc-top">
                                                    <div class="tc-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                                    <span class="tc-verified"><i class="fa-solid fa-circle-check"></i> Verified</span>
                                                </div>
                                                <p class="testimonial-para tc-text">"Working with Antops was a game-changer for our business. They built a stunning mobile app that our users love. Highly recommended!"</p>
                                                <div class="tc-bottom">
                                                    <div class="tc-detail"><h3>Sarah Johnson</h3><p>Founder, DigitalEdge Solutions</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card testimonial-card-home testimonial-card-v3 grad-teal">
                                                <span class="tc-quote-mark"><i class="fa-solid fa-quote-left"></i></span>
                                                <div class="tc-top">
                                                    <div class="tc-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star fa-star-half-stroke"></i></div>
                                                    <span class="tc-verified"><i class="fa-solid fa-circle-check"></i> Verified</span>
                                                </div>
                                                <p class="testimonial-para tc-text">"The Antops team has deep technical expertise. They understood our complex requirements and delivered a scalable solution on time."</p>
                                                <div class="tc-bottom">
                                                    <div class="tc-detail"><h3>Michael Brown</h3><p>CTO, InnovateTech</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card testimonial-card-home testimonial-card-v3 grad-coral">
                                                <span class="tc-quote-mark"><i class="fa-solid fa-quote-left"></i></span>
                                                <div class="tc-top">
                                                    <div class="tc-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                                    <span class="tc-verified"><i class="fa-solid fa-circle-check"></i> Verified</span>
                                                </div>
                                                <p class="testimonial-para tc-text">"Our online presence transformed after Antops redesigned our website. Traffic increased by 200% and conversions doubled."</p>
                                                <div class="tc-bottom">
                                                    <div class="tc-detail"><h3>Emily Davis</h3><p>Marketing Director, GrowthLab</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-carousel-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="blog-section blog-section-new">
                <span class="bg-float bg-float-a"><i class="fa-solid fa-pen-nib"></i></span>
                <span class="bg-float bg-float-b"><i class="fa-solid fa-newspaper"></i></span>
                <span class="bg-float bg-float-c"><i class="fa-solid fa-lightbulb"></i></span>
                <div class="container">
                    <div class="section-title content">
                        <span class="ab-kicker ab-kicker-center"><i class="fa-solid fa-newspaper"></i> Latest Insights</span>
                        <h2 class="text-center">Recent <span class="gredient-text">Blogs Post</span></h2>
                        <div class="ab-line ab-line-center"></div>
                        <p class="text-center">Stay updated with the latest happenings in the world of emerging technologies.</p>
                    </div>
                    <div class="row row-gap-gutter section-content-gap">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <a href="{{ url('blog/top-web-development-trends-2024') }}" class="blog-card-new" data-aos="fade-up">
                                <div class="blog-card-img">
                                    <img src="assets/images/nw/home/home-blog.png" alt="Top Web Development Trends in 2024" loading="lazy" />
                                    <span class="blog-card-badge">Web Development</span>
                                    <!-- <span class="blog-card-date"><i class="fa-regular fa-calendar me-1"></i>26 Aug 2026</span> -->
                                </div>
                                <div class="blog-card-body">
                                    <h3>Top Web Development Trends in 2024</h3>
                                    <p>Discover the latest trends shaping the web development landscape.</p>
                                    <span class="blog-card-link">Read More <i class="fa-solid fa-arrow-right ms-1"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <a href="{{ url('blog/why-business-needs-mobile-app') }}" class="blog-card-new" data-aos="fade-up">
                                <div class="blog-card-img">
                                    <img src="assets/images/nw/home/home-blog.png" alt="Why Your Business Needs a Mobile App" loading="lazy" />
                                    <span class="blog-card-badge">Technology</span>
                                    <!-- <span class="blog-card-date"><i class="fa-regular fa-calendar me-1"></i>24 Aug 2026</span> -->
                                </div>
                                <div class="blog-card-body">
                                    <h3>Why Your Business Needs a Mobile App</h3>
                                    <p>Learn why mobile apps are essential for modern businesses.</p>
                                    <span class="blog-card-link">Read More <i class="fa-solid fa-arrow-right ms-1"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <a href="{{ url ('blog/importance-of-ui-ux-design') }}" class="blog-card-new" data-aos="fade-up">
                                <div class="blog-card-img">
                                    <img src="assets/images/nw/home/home-blog.png" alt="The Importance of UI/UX in Digital Products" loading="lazy" />
                                    <span class="blog-card-badge">UI/UX Design</span>
                                    <!-- <span class="blog-card-date"><i class="fa-regular fa-calendar me-1"></i>21 Aug 2026</span> -->
                                </div>
                                <div class="blog-card-body">
                                    <h3>The Importance of UI/UX in Digital Products</h3>
                                    <p>How great design can make or break your digital product.</p>
                                    <span class="blog-card-link">Read More <i class="fa-solid fa-arrow-right ms-1"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ ('blog') }}" class="btn btn-blue-2 py-2 radius-0">View All Articles <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="faq-quote-section" id="faq-quote">
                <span class="bg-float bg-float-a"><i class="fa-solid fa-circle-question"></i></span>
                <span class="bg-float bg-float-b"><i class="fa-solid fa-envelope-open-text"></i></span>
                <span class="bg-float bg-float-c"><i class="fa-solid fa-paper-plane"></i></span>
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-12 col-lg-6">
                            <div class="section-title content">
                                <span class="ab-kicker"><i class="fa-solid fa-circle-question"></i> Have Questions?</span>
                                <h2 class="text-center text-lg-start">Frequently Asked <span class="gredient-text">Questions</span></h2>
                                <div class="ab-line"></div>
                                <p class="text-center text-lg-start">Find quick answers to common questions about our services, process, and engagement models.</p>
                            </div>
                            <div class="faq-accordion">
                                <div class="faq-accordion-item">
                                    <button class="faq-accordion-btn" type="button" aria-expanded="false">
                                        <span>What services does Antops Technologies offer?</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div class="faq-accordion-answer">
                                        <p>We offer a comprehensive range of digital services including web development, mobile app development, UI/UX design, digital marketing, SEO optimization, and custom software solutions.</p>
                                    </div>
                                </div>
                                <div class="faq-accordion-item">
                                    <button class="faq-accordion-btn" type="button" aria-expanded="false">
                                        <span>How long does it take to build a website?</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div class="faq-accordion-answer">
                                        <p>The timeline depends on the project complexity. A basic website takes 2-4 weeks, while complex web applications can take 8-16 weeks. We provide a detailed timeline during the project planning phase.</p>
                                    </div>
                                </div>
                                <div class="faq-accordion-item">
                                    <button class="faq-accordion-btn" type="button" aria-expanded="false">
                                        <span>Do you provide ongoing support?</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div class="faq-accordion-answer">
                                        <p>Yes, we offer comprehensive maintenance and support packages to ensure your digital solutions continue to perform optimally after launch.</p>
                                    </div>
                                </div>
                                <div class="faq-accordion-item">
                                    <button class="faq-accordion-btn" type="button" aria-expanded="false">
                                        <span>What is your pricing model?</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div class="faq-accordion-answer">
                                        <p>We offer flexible pricing models including fixed-price projects, hourly rates, and dedicated team arrangements. Each project is custom-quoted based on your specific requirements.</p>
                                    </div>
                                </div>
                                <div class="faq-accordion-item">
                                    <button class="faq-accordion-btn" type="button" aria-expanded="false">
                                        <span>Can you work with existing systems?</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div class="faq-accordion-answer">
                                        <p>Absolutely! Our team excels at integrating with existing systems, APIs, and legacy applications. We ensure seamless connectivity with your current technology stack.</p>
                                    </div>
                                </div>
                                <div class="faq-accordion-item">
                                    <button class="faq-accordion-btn" type="button" aria-expanded="false">
                                        <span>What technologies do you specialize in?</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <div class="faq-accordion-answer">
                                        <p>We specialize in a wide range of technologies including PHP/Laravel, JavaScript/Node.js, React, Flutter, Swift, Kotlin, MySQL, MongoDB, and cloud platforms like AWS and Azure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ url('faqs') }}" class="btn btn-blue-2 py-2 radius-0">View All FAQs <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="quote-form-card">
                                <div class="quote-form-head">
                                    <span class="gredient-text">Request a Quote</span>
                                    <h3>Tell Us About Your Project</h3>
                                    <p>Fill in the details below and our team will get back to you within 24 hours.</p>
                                </div>
                                <form id="quoteForm" method="POST" action="https://antops.ryvoratechnologies.com/contact">
                                    <input type="hidden" name="_token" value="46FxLx6UZkDaq4KCVOKK91VwviSCKREyEUdkP4Hx">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="quote-label" for="quoteName">Your Name *</label>
                                            <input type="text" id="quoteName" name="name" class="quote-input" placeholder="John Doe" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="quote-label" for="quoteEmail">Email Address *</label>
                                            <input type="email" id="quoteEmail" name="email" class="quote-input" placeholder="john@example.com" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="quote-label" for="quoteCompany">Company</label>
                                            <input type="text" id="quoteCompany" name="company" class="quote-input" placeholder="Company Name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="quote-label" for="quoteSubject">Service Needed</label>
                                            <select id="quoteSubject" name="subject" class="quote-input">
                                                <option value="">Select a service...</option>
                                                <option value="UI/UX Design">UI/UX Design</option>
                                                <option value="Website Design">Website Design</option>
                                                <option value="Mobile App UI/UX Design">Mobile App UI/UX Design</option>
                                                <option value="Landing Page Design">Landing Page Design</option>
                                                <option value="Website Development">Website Development</option>
                                                <option value="Web Application Development">Web Application Development</option>
                                                <option value="E-Commerce Development">E-Commerce Development</option>
                                                <option value="CMS Development">CMS Development</option>
                                                <option value="Android App Development">Android App Development</option>
                                                <option value="iOS App Development">iOS App Development</option>
                                                <option value="Flutter App Development">Flutter App Development</option>
                                                <option value="React Native App Development">React Native App Development</option>
                                                <option value="Custom Software Development">Custom Software Development</option>
                                                <option value="ERP Software Development">ERP Software Development</option>
                                                <option value="CRM Software Development">CRM Software Development</option>
                                                <option value="SEO">SEO</option>
                                                <option value="Social Media Marketing">Social Media Marketing</option>
                                                <option value="Cloud Hosting Services">Cloud Hosting Services</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="quote-label" for="quoteMessage">Project Details *</label>
                                            <textarea id="quoteMessage" name="message" class="quote-input" rows="4" placeholder="Tell us about your project or requirements..." required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="quote-submit-btn" id="quoteSubmitBtn">
                                                <span class="btn-text">Submit Request <i class="fa-solid fa-paper-plane ms-2"></i></span>
                                                <span class="btn-spinner d-none"><span class="spinner-border spinner-border-sm me-2"></span>Sending...</span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div id="quoteAlert" class="quote-alert d-none"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // FAQ accordion toggle
    document.querySelectorAll('.faq-accordion-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = btn.closest('.faq-accordion-item');
            var isOpen = item.classList.contains('open');

            document.querySelectorAll('.faq-accordion-item.open').forEach(function (el) {
                if (el !== item) {
                    el.classList.remove('open');
                    var b = el.querySelector('.faq-accordion-btn');
                    if (b) b.setAttribute('aria-expanded', 'false');
                }
            });

            if (isOpen) {
                item.classList.remove('open');
                btn.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>
@endpush