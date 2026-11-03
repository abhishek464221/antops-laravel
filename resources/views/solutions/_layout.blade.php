@extends('layouts.app')

@section('title', $sol['meta_title'])
@section('meta_description', $sol['meta_description'])
@section('meta_keywords', $sol['meta_keywords'])

@push('styles')
<style>
/* ========== SCROLL REVEAL ========== */
.sol-reveal{opacity:0;transform:translateY(40px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.sol-reveal.sol-visible{opacity:1;transform:translateY(0)}
.sol-reveal-left{opacity:0;transform:translateX(-50px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.sol-reveal-left.sol-visible{opacity:1;transform:translateX(0)}
.sol-reveal-right{opacity:0;transform:translateX(50px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.sol-reveal-right.sol-visible{opacity:1;transform:translateX(0)}
.sol-reveal-scale{opacity:0;transform:scale(.85);transition:opacity .6s cubic-bezier(.22,1,.36,1),transform .6s cubic-bezier(.22,1,.36,1)}
.sol-reveal-scale.sol-visible{opacity:1;transform:scale(1)}
.sol-stagger-1{transition-delay:.05s}.sol-stagger-2{transition-delay:.12s}.sol-stagger-3{transition-delay:.19s}
.sol-stagger-4{transition-delay:.26s}.sol-stagger-5{transition-delay:.33s}.sol-stagger-6{transition-delay:.40s}

/* ========== HERO ========== */
@keyframes solPulse{0%,100%{transform:scale(1);opacity:.18}50%{transform:scale(1.15);opacity:.3}}
@keyframes solFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-14px)}}
@keyframes solGlow{0%,100%{box-shadow:0 0 20px rgba(207,23,31,.25)}50%{box-shadow:0 0 45px rgba(207,23,31,.5)}}
.sol-hero-glow{animation:solPulse 5s ease-in-out infinite}
.sol-hero-float{animation:solFloat 4s ease-in-out infinite}
.sol-hero-float-delay{animation:solFloat 5s ease-in-out 1.2s infinite}
.sol-form-glow:hover{animation:solGlow 2s ease-in-out infinite}

/* ========== CARDS ========== */
.sol-card{transition:all .45s cubic-bezier(.22,1,.36,1);position:relative;overflow:hidden}
.sol-card:hover{transform:translateY(-12px);box-shadow:0 32px 65px rgba(207,23,31,.18)!important}
.sol-card::before{content:'';position:absolute;top:0;left:0;width:4px;height:0;background:linear-gradient(180deg,#CF171F,#B0171F);transition:height .4s ease;z-index:2}
.sol-card:hover::before{height:100%}
.sol-card::after{content:'';position:absolute;top:0;left:0;right:0;height:100%;background:linear-gradient(135deg,rgba(207,23,31,.04),transparent);opacity:0;transition:opacity .4s}
.sol-card:hover::after{opacity:1}

/* ========== ICON ========== */
.sol-icon-tile{transition:all .35s cubic-bezier(.22,1,.36,1)}
.sol-card:hover .sol-icon-tile{transform:scale(1.1) rotate(-4deg);box-shadow:0 12px 30px rgba(207,23,31,.3)}

/* ========== STAT COUNTER ========== */
.sol-stat-num{transition:all .4s}
.sol-stat:hover .sol-stat-num{transform:scale(1.15);color:#fff}
.sol-stat{transition:all .4s;border-radius:14px}
.sol-stat:hover{background:rgba(207,23,31,.15)}

/* ========== PROCESS ========== */
@keyframes solStepPulse{0%{box-shadow:0 0 0 0 rgba(207,23,31,.4)}70%{box-shadow:0 0 0 18px rgba(207,23,31,0)}100%{box-shadow:0 0 0 0 rgba(207,23,31,0)}}
.sol-step-enter.sol-visible .sol-step-num{animation:solStepPulse .6s ease-out}
.sol-step:hover .sol-step-num{transform:translateY(-8px) scale(1.08);box-shadow:0 20px 45px rgba(207,23,31,.4)}
.sol-step-num{transition:all .4s cubic-bezier(.22,1,.36,1)}
.sol-process-line{position:relative}
.sol-process-line::after{content:'';position:absolute;top:38px;left:calc(50% + 46px);width:calc(100% - 92px);height:2px;background:linear-gradient(90deg,#CF171F,rgba(207,23,31,.12))}
@media(max-width:991px){.sol-process-line::after{display:none}}

/* ========== FORM ========== */
.sol-form-input{border-radius:12px;padding:13px 16px;font-size:14px;border:1.5px solid #e3e8f0;transition:all .3s;background:#f9fafc}
.sol-form-input:focus{border-color:#CF171F;box-shadow:0 0 0 4px rgba(207,23,31,.1);background:#fff;outline:none}
.sol-form-input::placeholder{color:#9ca3af}

/* ========== FAQ ========== */
.sol-faq-item{border:1px solid #e5e9f2;border-radius:14px;overflow:hidden;background:#fff;transition:all .35s}
.sol-faq-item:hover{border-color:#c7d2f0;box-shadow:0 8px 30px rgba(176,23,31,.06)}
.sol-faq-btn i{transition:transform .35s cubic-bezier(.22,1,.36,1)}
.sol-faq-btn[aria-expanded="true"] i{transform:rotate(180deg)}
.sol-faq-btn[aria-expanded="true"] .sol-faq-q-icon{background:#CF171F;color:#fff}

/* ========== CTA BANNER ========== */
@keyframes solCtaShine{0%{left:-100%}100%{left:120%}}
.sol-cta-shine{position:absolute;top:0;left:-100%;width:60%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.1),transparent);transform:skewX(-20deg);animation:solCtaShine 4s ease-in-out infinite}
.sol-cta-banner{position:relative;overflow:hidden}
.sol-cta-banner:hover .sol-cta-shine{animation-duration:2s}

/* ========== MAGNETIC BUTTON ========== */
.sol-btn-magnetic{position:relative;overflow:hidden;transition:all .35s cubic-bezier(.22,1,.36,1)}
.sol-btn-magnetic::before{content:'';position:absolute;top:50%;left:50%;width:0;height:0;background:rgba(255,255,255,.15);border-radius:50%;transform:translate(-50%,-50%);transition:width .5s,height .5s}
.sol-btn-magnetic:hover::before{width:350px;height:350px}
.sol-btn-magnetic:hover{transform:translateY(-3px);box-shadow:0 14px 35px rgba(207,23,31,.4)}
.sol-btn-magnetic:active{transform:translateY(-1px)}

/* ========== GRADIENT TEXT ========== */
.sol-grad-text{background:linear-gradient(135deg,#CF171F,#B0171F);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

/* ========== SECTION DIVIDER ========== */
.sol-section-line{width:60px;height:3px;background:linear-gradient(90deg,#CF171F,#B0171F);margin:14px auto 0;border-radius:3px;position:relative;overflow:hidden}
.sol-section-line::after{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.6),transparent);animation:solCtaShine 3s ease-in-out infinite}

/* ========== HERO DOTS ========== */
.sol-hero-dot{position:absolute;border-radius:50%}
</style>
@endpush

@section('content')

<!-- ================= HERO ================= -->
<section style="background:linear-gradient(140deg,#0a0f1e 0%,#101f46 55%,#B0171F 100%);padding:170px 0 95px;position:relative;overflow:hidden;">
    <div class="sol-hero-dot sol-hero-glow" style="width:400px;height:400px;top:-140px;right:-100px;background:radial-gradient(circle,rgba(207,23,31,.2),transparent 70%);"></div>
    <div class="sol-hero-dot sol-hero-glow" style="width:250px;height:250px;bottom:-90px;left:5%;background:radial-gradient(circle,rgba(207,23,31,.14),transparent 70%);animation-delay:2s;"></div>
    <div class="sol-hero-dot sol-hero-float" style="width:12px;height:12px;top:28%;right:15%;background:#CF171F;"></div>
    <div class="sol-hero-dot sol-hero-float-delay" style="width:8px;height:8px;top:55%;left:12%;background:rgba(207,23,31,.5);"></div>
    <div class="sol-hero-dot sol-hero-float" style="width:6px;height:6px;bottom:30%;right:30%;background:rgba(255,255,255,.25);animation-delay:2.5s;"></div>
    <div class="sol-hero-dot sol-hero-float-delay" style="width:10px;height:10px;top:20%;left:30%;background:rgba(207,23,31,.35);"></div>

    <div class="container" style="position:relative;z-index:2;">
        <nav aria-label="breadcrumb" class="sol-reveal">
            <ol class="breadcrumb mb-3" style="background:transparent;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:rgba(255,255,255,.55);text-decoration:none;transition:color .2s;" onmouseover="this.style.color='#7fb3ff'" onmouseout="this.style.color='rgba(255,255,255,.55)'"><i class="fas fa-home me-1" style="font-size:12px;"></i>Home</a></li>
                <li class="breadcrumb-item"><span style="color:rgba(255,255,255,.55);">Solutions</span></li>
                <li class="breadcrumb-item active" aria-current="page" style="color:#fff;">{{ $sol['title'] }}</li>
            </ol>
        </nav>

        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="sol-reveal" style="margin-bottom:18px;">
                    <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(207,23,31,.12);border:1px solid rgba(207,23,31,.35);color:#7fb3ff;font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:1.2px;padding:7px 20px;border-radius:30px;">
                        <i class="fas fa-cube" style="font-size:14px;"></i>{{ $sol['hero_badge'] }}
                    </span>
                </div>

                <h1 class="sol-reveal" style="color:#fff;font-size:46px;font-weight:800;line-height:1.12;margin-bottom:16px;">
                    {{ $sol['hero_title'] }}
                </h1>

                <p class="sol-reveal" style="color:rgba(255,255,255,.68);font-size:17px;line-height:1.85;max-width:600px;margin-bottom:26px;">
                    {{ $sol['hero_description'] }}
                </p>

                <div class="sol-reveal d-flex flex-wrap gap-4" style="margin-bottom:32px;">
                    @foreach(['fa-shield-alt'=>'100% NDA Protected','fa-clock'=>'On-Time Delivery','fa-headset'=>'24/7 Support'] as $ic=>$txt)
                    <div class="d-flex align-items-center gap-2">
                        <div style="width:28px;height:28px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                            <i class="fas {{ $ic }}" style="color:#4ade80;font-size:12px;"></i>
                        </div>
                        <span style="color:rgba(255,255,255,.82);font-size:14px;font-weight:500;">{{ $txt }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="sol-reveal d-flex flex-wrap gap-3">
                    <a href="#solution-demo-form" class="sol-btn-magnetic btn rounded-pill px-5 py-3 fw-bold" style="background:#CF171F;color:#fff;font-size:15px;box-shadow:0 10px 30px rgba(207,23,31,.35);">
                        Request a Demo <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="#solution-features" class="sol-btn-magnetic btn rounded-pill px-5 py-3 fw-bold" style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.2);color:#fff;font-size:15px;">
                        Explore Features <i class="fas fa-chevron-down ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="sol-reveal-right sol-form-glow" style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);backdrop-filter:blur(16px);border-radius:24px;padding:36px;box-shadow:0 30px 80px rgba(0,0,0,.35);">
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;">
                        <div style="width:40px;height:40px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-play-circle" style="color:#fff;font-size:18px;"></i></div>
                        <h4 style="color:#fff;font-weight:700;margin:0;">Request a Demo</h4>
                    </div>
                    <p style="color:rgba(255,255,255,.55);font-size:13px;margin-bottom:22px;">Get a personalised walkthrough of this solution.</p>

                    <form id="solQuoteForm">
                        @csrf
                        <input type="hidden" name="subject" value="{{ $sol['form_subject'] }} - Demo Request">
                        <div class="mb-3"><input type="text" name="name" class="form-control sol-form-input" placeholder="Full Name *" required></div>
                        <div class="mb-3"><input type="email" name="email" class="form-control sol-form-input" placeholder="Work Email *" required></div>
                        <div class="mb-3"><input type="text" name="company" class="form-control sol-form-input" placeholder="Company Name"></div>
                        <div class="mb-3">
                            <select name="message" class="form-control sol-form-input" style="appearance:auto;" required>
                                <option value="" disabled selected>What are you looking for? *</option>
                                <option value="I want a demo of this solution">I want a demo</option>
                                <option value="I want a custom solution for my business">Custom solution</option>
                                <option value="I need a quote / pricing details">Pricing details</option>
                                <option value="I have a question before proceeding">Have a question</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 text-white fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;padding:14px;font-size:15px;">
                            <i class="fas fa-paper-plane me-2"></i> Submit Request
                        </button>
                    </form>
                    <div id="solQuoteAlert" class="d-none mt-3" style="border-radius:10px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= TRUST STRIP ================= -->
<section style="background:#0b1120;padding:30px 0;">
    <div class="container">
        <div class="row g-4 text-center">
            @foreach([['5+','Years in Business'],['150+','Projects Delivered'],['100+','Happy Clients'],['24/7','Technical Support']] as $s)
            <div class="col-6 col-lg-3">
                <div class="sol-stat p-3 text-center" style="cursor:default;">
                    <div class="sol-stat-num" style="color:#CF171F;font-size:30px;font-weight:800;" data-count="{{ $s[0] }}">{{ $s[0] }}</div>
                    <div style="color:rgba(255,255,255,.55);font-size:13px;margin-top:2px;">{{ $s[1] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= KEY FEATURES ================= -->
<section style="background:#fff;padding:100px 0;" id="solution-features">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sol-reveal">
                <span style="color:#CF171F;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:2px;">Key Features</span>
                <h2 style="color:#8C1116;font-weight:800;font-size:38px;margin-top:10px;">What Makes This Solution <span class="sol-grad-text">Powerful</span></h2>
                <div class="sol-section-line"></div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($sol['features'] as $i => $f)
            <div class="col-lg-4 col-md-6">
                <div class="sol-reveal sol-card bg-white p-5 h-100 sol-stagger-{{ ($i % 6) + 1 }}" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 35px rgba(0,0,0,.04);">
                    <div class="sol-icon-tile mb-3" style="width:60px;height:60px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:16px;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 20px rgba(207,23,31,.2);">
                        <i class="fas fa-check" style="color:#fff;font-size:22px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:700;font-size:18px;margin-bottom:8px;">{{ $f['title'] }}</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.75;margin:0;">{{ $f['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= OVERVIEW ================= -->
<section style="background:#f8f9fc;padding:100px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="sol-reveal-left" style="position:relative;">
                    <div style="position:absolute;top:-20px;left:-20px;width:120px;height:120px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.08));border-radius:24px;z-index:0;"></div>
                    <img src="{{ asset($sol['overview_image']) }}" alt="{{ $sol['title'] }}" class="img-fluid" style="border-radius:22px;box-shadow:0 35px 80px rgba(176,23,31,.18);position:relative;z-index:1;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sol-reveal-right">
                    <span style="color:#CF171F;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:2px;">Overview</span>
                    <h2 style="color:#8C1116;font-weight:800;font-size:34px;margin:12px 0 18px;">{{ $sol['overview_title'] }}</h2>
                    <div style="color:#4a5568;line-height:1.9;font-size:15px;">{!! $sol['overview_content'] !!}</div>
                    <div class="row g-3 mt-4">
                        @foreach($sol['overview_badges'] ?? ['Tailored to Your Business','Modern & Scalable Tech','Secure & Enterprise Ready','Dedicated Expert Team'] as $b)
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width:32px;height:32px;min-width:32px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#CF171F;font-size:11px;"></i></div>
                                <span style="color:#3c4657;font-weight:600;font-size:13px;">{{ $b }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= WHAT WE OFFER ================= -->
<section style="background:#fff;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sol-reveal">
                <span style="color:#CF171F;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:2px;">What We Offer</span>
                <h2 style="color:#8C1116;font-weight:800;font-size:38px;margin-top:10px;">{{ $sol['offers_title'] }}</h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">{{ $sol['offers_subtitle'] }}</p>
                <div class="sol-section-line"></div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($sol['offers'] as $i => $o)
            <div class="col-lg-4 col-md-6">
                <div class="sol-reveal sol-card bg-white p-5 h-100 sol-stagger-{{ ($i % 6) + 1 }}" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 35px rgba(0,0,0,.04);">
                    <div class="sol-icon-tile mb-3" style="width:60px;height:60px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:16px;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 20px rgba(207,23,31,.2);">
                        <i class="fas {{ $o['icon'] }}" style="color:#fff;font-size:22px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:700;font-size:18px;margin-bottom:8px;">{{ $o['title'] }}</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.75;margin:0;">{{ $o['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= PROCESS ================= -->
<section style="background:#f8f9fc;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sol-reveal">
                <span style="color:#CF171F;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:2px;">Our Process</span>
                <h2 style="color:#8C1116;font-weight:800;font-size:38px;margin-top:10px;">{{ $sol['process_title'] }}</h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">{{ $sol['process_subtitle'] }}</p>
                <div class="sol-section-line"></div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($sol['process_steps'] as $i => $step)
            <div class="col-lg-2 col-md-4 col-6 sol-step sol-process-line">
                <div class="sol-reveal sol-step-enter text-center p-3 sol-stagger-{{ ($i % 6) + 1 }}">
                    <div class="sol-step-num" style="width:78px;height:78px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;color:#fff;font-size:27px;font-weight:800;box-shadow:0 12px 35px rgba(207,23,31,.3);">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <h6 style="color:#8C1116;font-weight:700;font-size:15px;margin-bottom:6px;">{{ $step['title'] }}</h6>
                    <p style="color:#6a7280;font-size:12px;line-height:1.6;margin:0;">{{ $step['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= CTA BANNER ================= -->
<section style="padding:60px 0;background:#fff;">
    <div class="container">
        <div class="sol-reveal-scale sol-cta-banner row align-items-center" style="background:linear-gradient(135deg,#B0171F 0%,#1a4590 50%,#CF171F 100%);border-radius:24px;overflow:hidden;box-shadow:0 35px 90px rgba(176,23,31,.35);">
            <div class="sol-cta-shine"></div>
            <div class="col-lg-7 p-5" style="position:relative;z-index:1;">
                <h2 style="color:#fff;font-weight:800;font-size:32px;margin-bottom:12px;">{{ $sol['cta_title'] }}</h2>
                <p style="color:rgba(255,255,255,.82);font-size:16px;margin-bottom:20px;">{{ $sol['cta_description'] }}</p>
                <a href="#solution-demo-form" class="sol-btn-magnetic btn rounded-pill px-5 py-3 fw-bold" style="background:#CF171F;color:#fff;font-size:15px;">
                    Get Started <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-5 p-0 d-none d-lg-block" style="position:relative;z-index:1;">
                <div style="background:rgba(0,0,0,.18);padding:30px 36px;display:flex;flex-direction:column;gap:14px;min-height:210px;justify-content:center;">
                    @foreach(['Dedicated Development Team','100% NDA Protected','On-Time Project Delivery','24/7 Technical Support'] as $c)
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;">
                        <span style="width:24px;height:24px;min-width:24px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>{{ $c }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FAQ ================= -->
<section style="background:#f8f9fc;padding:100px 0;" id="solution-faq">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sol-reveal">
                <span style="color:#CF171F;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:2px;">FAQ</span>
                <h2 style="color:#8C1116;font-weight:800;font-size:38px;margin-top:10px;">Frequently Asked Questions</h2>
                <div class="sol-section-line"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @foreach($sol['faqs'] as $i => $faq)
                <div class="sol-reveal mb-3 sol-faq-item sol-stagger-{{ ($i % 6) + 1 }}">
                    <button class="sol-faq-btn w-100 p-4 border-0 bg-transparent text-start d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#sfq{{ $i }}" style="color:#8C1116;font-weight:600;font-size:15px;gap:12px;">
                        <span style="flex:1;">{{ $faq['q'] }}</span>
                        <span class="sol-faq-q-icon" style="width:30px;height:30px;min-width:30px;background:rgba(207,23,31,.1);border-radius:50%;display:inline-flex;align-items:center;justify-content:center;transition:all .3s;">
                            <i class="fas fa-chevron-down" style="color:#CF171F;font-size:12px;"></i>
                        </span>
                    </button>
                    <div class="collapse" id="sfq{{ $i }}"><div class="px-4 pb-4" style="color:#5a6478;line-height:1.8;font-size:14px;">{{ $faq['a'] }}</div></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ================= BOTTOM DEMO FORM ================= -->
<section style="background:linear-gradient(140deg,#0a0f1e 0%,#101f46 55%,#B0171F 100%);padding:100px 0;position:relative;overflow:hidden;" id="solution-demo-form">
    <div class="sol-hero-dot sol-hero-glow" style="width:350px;height:350px;top:-130px;right:-80px;background:radial-gradient(circle,rgba(207,23,31,.2),transparent 70%);"></div>
    <div class="sol-hero-dot sol-hero-float" style="width:8px;height:8px;top:20%;left:15%;background:rgba(207,23,31,.5);"></div>
    <div class="sol-hero-dot sol-hero-float-delay" style="width:6px;height:6px;bottom:25%;left:40%;background:rgba(255,255,255,.3);"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="sol-reveal-left">
                    <span style="color:#7fb3ff;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:2px;">Ready to Get Started?</span>
                    <h2 style="color:#fff;font-weight:800;font-size:38px;margin:14px 0 18px;">Let's Discuss Your <span class="sol-grad-text" style="-webkit-text-fill-color:transparent;background:linear-gradient(135deg,#7fb3ff,#a8d8ff);-webkit-background-clip:text;background-clip:text;">{{ $sol['title'] }}</span> Requirements</h2>
                    <p style="color:rgba(255,255,255,.65);font-size:16px;line-height:1.85;margin-bottom:30px;">
                        Get a free consultation, detailed project roadmap and a transparent quote within 24 hours. Our experts will help you choose the right approach for your business.
                    </p>
                    <div class="row g-3">
                        @foreach([['fa-comments','Free Consultation'],['fa-tags','Transparent Pricing'],['fa-users','Dedicated Team'],['fa-bolt','Quick Response']] as $b)
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width:32px;height:32px;min-width:32px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                    <i class="fas {{ $b[0] }}" style="color:#4ade80;font-size:13px;"></i>
                                </div>
                                <span style="color:rgba(255,255,255,.82);font-size:14px;font-weight:500;">{{ $b[1] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sol-reveal-right sol-form-glow" style="background:#fff;border-radius:24px;padding:40px;box-shadow:0 35px 90px rgba(0,0,0,.4);">
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;">
                        <div style="width:40px;height:40px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-calendar-check" style="color:#fff;font-size:18px;"></i></div>
                        <h4 style="color:#8C1116;font-weight:700;margin:0;">Schedule a Demo</h4>
                    </div>
                    <p style="color:#6a7280;font-size:13px;margin-bottom:24px;">We'll get back to you within 24 hours with a personalised walkthrough.</p>

                    <form id="solBottomForm">
                        @csrf
                        <input type="hidden" name="subject" value="{{ $sol['form_subject'] }} - Schedule Demo Request">
                        <div class="row g-3">
                            <div class="col-md-6"><input type="text" name="name" class="form-control sol-form-input" placeholder="Full Name *" required></div>
                            <div class="col-md-6"><input type="email" name="email" class="form-control sol-form-input" placeholder="Work Email *" required></div>
                            <div class="col-md-6"><input type="text" name="company" class="form-control sol-form-input" placeholder="Company Name"></div>
                            <div class="col-12">
                                <select name="message" class="form-control sol-form-input" style="appearance:auto;" required>
                                    <option value="" disabled selected>I'm interested in... *</option>
                                    <option value="Live demo of {{ $sol['title'] }}">Live demo of this solution</option>
                                    <option value="Custom development for my business">Custom development</option>
                                    <option value="Need pricing / consultation">Pricing / Consultation</option>
                                    <option value="Just exploring options">Just exploring</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="sol-btn-magnetic btn w-100 text-white fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;padding:15px;font-size:15px;">
                                    <i class="fas fa-calendar me-2"></i> Schedule My Demo
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="solBottomAlert" class="d-none mt-3" style="border-radius:10px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* smooth scroll */
    document.querySelectorAll('a[href^="#"]').forEach(function(a) {
        a.addEventListener('click', function(e) {
            var t = document.querySelector(this.getAttribute('href'));
            if (t) { e.preventDefault(); t.scrollIntoView({behavior:'smooth', block:'start'}); }
        });
    });

    /* reveal */
    var revealEls = document.querySelectorAll('.sol-reveal, .sol-reveal-left, .sol-reveal-right, .sol-reveal-scale');
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('sol-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function(el) { observer.observe(el); });
    } else {
        revealEls.forEach(function(el) { el.classList.add('sol-visible'); });
    }

    /* counters */
    var counters = document.querySelectorAll('.sol-stat-num[data-count]');
    function animateCounter(el) {
        var raw = el.getAttribute('data-count');
        var num = parseInt(raw);
        if (isNaN(num)) return;
        var suffix = raw.replace(/[0-9]/g, '');
        var duration = 1800, startTime = null;
        function step(ts) {
            if (!startTime) startTime = ts;
            var progress = Math.min((ts - startTime) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(ease * num) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    if (counters.length && 'IntersectionObserver' in window) {
        var cObs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) { animateCounter(entry.target); cObs.unobserve(entry.target); }
            });
        }, { threshold: 0.5 });
        counters.forEach(function(c) { cObs.observe(c); });
    }

    /* form submit */
    function bindSolForm(formId, alertId, btnText) {
        $(formId).on('submit', function (e) {
            e.preventDefault();
            var $form = $(this);
            var $alert = $(alertId);
            var $btn = $form.find('button[type="submit"]');
            $btn.prop('disabled', true);
            $btn.html('<span class="spinner-border spinner-border-sm me-2"></span> Sending...');
            $alert.removeClass('d-none').addClass('alert-info').html('<i class="fas fa-info-circle me-2"></i> Sending...');
            $.ajax({
                url: '{{ url("contact") }}',
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function (r) {
                    $alert.removeClass('alert-danger alert-info').addClass('alert-success');
                    $alert.html('<i class="fas fa-check-circle me-2"></i>' + (r.message || 'Thank you! We will contact you soon.'));
                    $form[0].reset();
                    $btn.html('<i class="fas fa-check me-2"></i> Sent!');
                    setTimeout(function(){ $btn.html(btnText); $alert.addClass('d-none'); }, 5000);
                },
                error: function (xhr) {
                    $alert.removeClass('alert-success alert-info').addClass('alert-danger');
                    var msg = 'Something went wrong. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.errors) msg = Object.values(xhr.responseJSON.errors).flat().join(' ');
                    else if (xhr.responseJSON && xhr.responseJSON.message) msg = xhr.responseJSON.message;
                    $alert.html('<i class="fas fa-exclamation-circle me-2"></i>' + msg);
                    $btn.html('<i class="fas fa-paper-plane me-2"></i> Try Again');
                },
                complete: function () { $btn.prop('disabled', false); }
            });
        });
    }
    bindSolForm('#solQuoteForm', '#solQuoteAlert', '<i class="fas fa-paper-plane me-2"></i> Submit Request');
    bindSolForm('#solBottomForm', '#solBottomAlert', '<i class="fas fa-calendar me-2"></i> Schedule My Demo');
});
</script>
@endpush