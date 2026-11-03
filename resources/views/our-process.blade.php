@extends('layouts.app')

@section('title', 'Our Process | Antops Technologies')
@section('meta_description', 'Discover our proven development process — from discovery and planning to design, development, testing and launch. A transparent, client-first methodology.')
@section('meta_keywords', 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')

@push('styles')

<style>
.op-reveal{opacity:0;transform:translateY(38px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.op-reveal-left{opacity:0;transform:translateX(-45px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.op-reveal-right{opacity:0;transform:translateX(45px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.op-reveal-scale{opacity:0;transform:scale(.9);transition:opacity .6s cubic-bezier(.22,1,.36,1),transform .6s cubic-bezier(.22,1,.36,1)}
.op-visible{opacity:1;transform:none}
.op-st1{transition-delay:.05s}.op-st2{transition-delay:.12s}.op-st3{transition-delay:.19s}
.op-st4{transition-delay:.26s}.op-st5{transition-delay:.33s}.op-st6{transition-delay:.40s}

@keyframes opFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-13px)}}
.op-float{animation:opFloat 4.5s ease-in-out infinite}
.op-float-d{animation:opFloat 5.5s ease-in-out 1.2s infinite}

.op-kicker{color:#CF171F;font-weight:800;font-size:12px;text-transform:uppercase;letter-spacing:2.5px;display:inline-flex;align-items:center;gap:10px}
.op-kicker::before{content:'';width:28px;height:2px;background:linear-gradient(90deg,#CF171F,#B0171F);border-radius:2px}
.op-line{width:62px;height:3px;background:linear-gradient(90deg,#CF171F,#B0171F);margin:14px auto 0;border-radius:3px}
.op-grad{background:linear-gradient(135deg,#CF171F,#B0171F);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

@keyframes opRing{0%{box-shadow:0 0 0 0 rgba(207,23,31,.45)}70%{box-shadow:0 0 0 16px rgba(207,23,31,0)}100%{box-shadow:0 0 0 0 rgba(207,23,31,0)}}
.op-step{transition:transform .4s cubic-bezier(.22,1,.36,1)}
.op-step:hover{transform:translateY(-6px)}
.op-step-visible.op-visible .op-step-num{animation:opRing .8s ease-out}
.op-step-num{transition:all .4s cubic-bezier(.22,1,.36,1)}
.op-step:hover .op-step-num{transform:translateY(-7px) scale(1.06);box-shadow:0 20px 42px rgba(207,23,31,.4)!important}

.op-card{transition:all .45s cubic-bezier(.22,1,.36,1);position:relative;overflow:hidden}
.op-card::before{content:'';position:absolute;top:0;left:0;width:4px;height:0;background:linear-gradient(180deg,#CF171F,#B0171F);transition:height .45s ease;z-index:2}
.op-card:hover::before{height:100%}
.op-card:hover{transform:translateY(-9px);box-shadow:0 30px 60px rgba(207,23,31,.15)!important}
.op-icon-tile{transition:all .35s cubic-bezier(.22,1,.36,1)}
.op-card:hover .op-icon-tile{transform:scale(1.07) rotate(-4deg);box-shadow:0 12px 28px rgba(207,23,31,.32)}

.op-timeline{position:relative}
.op-timeline::before{content:'';position:absolute;top:0;bottom:0;left:50%;width:2px;background:linear-gradient(180deg,rgba(207,23,31,.4),rgba(207,23,31,.06));transform:translateX(-50%)}
.op-timeline-item{position:relative}
@media(max-width:991px){.op-timeline::before{left:15px;transform:none}}
</style>
@endpush

@section('content')
<main>

{{-- ========== HERO ========== --}}
<section style="background:linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);padding:150px 0 90px;position:relative;overflow:hidden;">
    <div style="position:absolute;width:460px;height:460px;top:-170px;right:-140px;background:radial-gradient(circle,rgba(207,23,31,.14),transparent 70%);border-radius:50%;"></div>
    <div style="position:absolute;width:320px;height:320px;bottom:-130px;left:-120px;background:radial-gradient(circle,rgba(207,23,31,.1),transparent 70%);border-radius:50%;"></div>
    <div class="op-float" style="position:absolute;width:12px;height:12px;top:28%;right:13%;background:#CF171F;border-radius:50%;"></div>
    <div class="op-float-d" style="position:absolute;width:8px;height:8px;top:58%;left:7%;background:rgba(207,23,31,.55);border-radius:50%;"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="op-reveal" style="margin-bottom:14px;">
                    <ol class="breadcrumb mb-0" style="background:transparent;">
                        <li class="breadcrumb-item"><a href="index.html" style="color:#CF171F;text-decoration:none;"><i class="fas fa-home me-1" style="font-size:12px;"></i>Home</a></li>
                        <li class="breadcrumb-item"><a href="about.html" style="color:#CF171F;text-decoration:none;">About Us</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#8C1116;">Our Process</li>
                    </ol>
                </nav>
                <div class="op-reveal" style="margin-bottom:16px;">
                    <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(207,23,31,.1);border:1px solid rgba(207,23,31,.28);color:#CF171F;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1.4px;padding:7px 18px;border-radius:30px;">
                        <i class="fas fa-cogs" style="font-size:13px;"></i>Proven Methodology
                    </span>
                </div>
                <h1 class="op-reveal" style="color:#8C1116;font-size:46px;font-weight:800;line-height:1.14;margin:0 0 14px;">Our <span style="color:#CF171F;">Process</span> — Delivering Excellence, Step by Step</h1>
                <p class="op-reveal" style="color:#374151;font-size:16px;line-height:1.9;max-width:640px;margin-bottom:28px;">
                    A structured, transparent and agile methodology that turns your idea into a high-quality digital product. From first conversation to final launch, we keep you informed and involved at every step.
                </p>
                <div class="op-reveal d-flex flex-wrap gap-2" style="margin-bottom:32px;">
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-bullseye" style="color:#CF171F;font-size:13px;"></i>Requirement Aligned
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-chart-line" style="color:#CF171F;font-size:13px;"></i>Milestone Driven
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-users-cog" style="color:#CF171F;font-size:13px;"></i>Dedicated Team
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-sync-alt" style="color:#CF171F;font-size:13px;"></i>Regular Updates
                    </span>
                </div>
                <div class="op-reveal d-flex flex-wrap gap-3">
                    <a href="#op-steps" class="btn rounded-pill px-5 py-3 fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;font-size:15px;box-shadow:0 12px 30px rgba(207,23,31,.32);">
                        See How We Work <i class="fas fa-arrow-down ms-2"></i>
                    </a>
                    <a href="contact.html" class="btn rounded-pill px-5 py-3 fw-bold" style="background:#CF171F;color:#fff;font-size:15px;box-shadow:0 12px 30px rgba(207,23,31,.32);">
                        Start a Project <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="op-reveal-right" style="position:relative;">
                    <div style="background:#fff;border-radius:26px;padding:38px;box-shadow:0 30px 75px rgba(176,23,31,.15);border:1px solid rgba(207,23,31,.09);">
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
                            <div style="display:flex;align-items:center;gap:12px;">
                                <div style="width:50px;height:50px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:15px;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 22px rgba(207,23,31,.3);">
                                    <i class="fas fa-route" style="color:#fff;font-size:20px;"></i>
                                </div>
                                <div>
                                    <div style="color:#8C1116;font-weight:800;font-size:16px;">6-Step Journey</div>
                                    <div style="color:#CF171F;font-size:12px;font-weight:600;">Discovery → Launch</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                            <div style="width:34px;height:34px;min-width:34px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#CF171F;font-weight:800;font-size:12px;">01</div>
                            <div>
                                <div style="color:#8C1116;font-weight:700;font-size:13px;">Discovery</div>
                                <div style="color:#6a7280;font-size:12px;">Understand goals, audience &amp; requirements</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                            <div style="width:34px;height:34px;min-width:34px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#CF171F;font-weight:800;font-size:12px;">02</div>
                            <div>
                                <div style="color:#8C1116;font-weight:700;font-size:13px;">Planning</div>
                                <div style="color:#6a7280;font-size:12px;">Roadmap, scope, tech stack &amp; timeline</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                            <div style="width:34px;height:34px;min-width:34px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#CF171F;font-weight:800;font-size:12px;">03</div>
                            <div>
                                <div style="color:#8C1116;font-weight:700;font-size:13px;">Design</div>
                                <div style="color:#6a7280;font-size:12px;">UX, UI mockups &amp; interactive prototypes</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                            <div style="width:34px;height:34px;min-width:34px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#CF171F;font-weight:800;font-size:12px;">04</div>
                            <div>
                                <div style="color:#8C1116;font-weight:700;font-size:13px;">Development</div>
                                <div style="color:#6a7280;font-size:12px;">Agile sprints with code reviews</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                            <div style="width:34px;height:34px;min-width:34px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#CF171F;font-weight:800;font-size:12px;">05</div>
                            <div>
                                <div style="color:#8C1116;font-weight:700;font-size:13px;">Testing</div>
                                <div style="color:#6a7280;font-size:12px;">QA, QA audits &amp; UAT sign-offs</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                            <div style="width:34px;height:34px;min-width:34px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#CF171F;font-weight:800;font-size:12px;">06</div>
                            <div>
                                <div style="color:#8C1116;font-weight:700;font-size:13px;">Launch</div>
                                <div style="color:#6a7280;font-size:12px;">Deployment, training &amp; support</div>
                            </div>
                        </div>
                    </div>
                    <div class="op-float" style="position:absolute;bottom:-18px;right:-10px;background:linear-gradient(135deg,#CF171F,#f59e0b);color:#fff;border-radius:16px;padding:14px 22px;box-shadow:0 16px 40px rgba(207,23,31,.4);text-align:center;">
                        <div style="font-size:24px;font-weight:800;">100%</div>
                        <div style="font-size:11px;opacity:.9;">On-Time Delivery</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========== 6 STEPS ========== --}}
<section style="background:#fff;padding:100px 0;" id="op-steps">
    <div class="container">
        <div class="text-center mb-5">
            <div class="op-reveal">
                <span class="op-kicker" style="justify-content:center;">How We Work</span>
                <h2 style="color:#8C1116;font-weight:800;font-size:40px;margin:14px 0 6px;">A Proven 6-Step <span class="op-grad">Development Process</span></h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Structure that keeps every project on track, on budget and on time.</p>
                <div class="op-line"></div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st1" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div class="op-icon-tile" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                            <i class="fas fa-search" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <div style="color:#e8ecf6;font-size:42px;font-weight:800;line-height:1;">01</div>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:19px;margin:20px 0 10px;">Discovery &amp; Research</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">We dig into your business, customers and competitors to define clear goals, success metrics and technical feasibility.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st2" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div class="op-icon-tile" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                            <i class="fas fa-map" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <div style="color:#e8ecf6;font-size:42px;font-weight:800;line-height:1;">02</div>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:19px;margin:20px 0 10px;">Planning &amp; Strategy</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">We create a detailed roadmap — scope, architecture, tech stack, milestones and timelines so you know exactly what happens and when.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st3" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div class="op-icon-tile" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                            <i class="fas fa-pencil-ruler" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <div style="color:#e8ecf6;font-size:42px;font-weight:800;line-height:1;">03</div>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:19px;margin:20px 0 10px;">Design &amp; Prototyping</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">Beautiful, user-centric UI/UX designs with interactive prototypes so you can visualise and approve the experience before we build.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st4" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div class="op-icon-tile" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                            <i class="fas fa-code" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <div style="color:#e8ecf6;font-size:42px;font-weight:800;line-height:1;">04</div>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:19px;margin:20px 0 10px;">Agile Development</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">Short, focused sprints with frequent code reviews, demos and weekly updates. Your feedback is baked in as we build.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st5" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div class="op-icon-tile" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                            <i class="fas fa-vial" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <div style="color:#e8ecf6;font-size:42px;font-weight:800;line-height:1;">05</div>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:19px;margin:20px 0 10px;">Testing &amp; QA</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">Rigorous functional, performance, security and usability testing. Bugs are squashed before they ever reach your users.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st6" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div class="op-icon-tile" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                            <i class="fas fa-rocket" style="color:#fff;font-size:24px;"></i>
                        </div>
                        <div style="color:#e8ecf6;font-size:42px;font-weight:800;line-height:1;">06</div>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:19px;margin:20px 0 10px;">Launch &amp; Support</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">Smooth deployment, staff training and documentation — plus ongoing maintenance, monitoring and iterations whenever you need them.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ========== ENGAGEMENT MODELS ========== --}}
<section style="background:#f8f9fc;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="op-reveal">
                <span class="op-kicker" style="justify-content:center;">Engagement Models</span>
                <h2 style="color:#8C1116;font-weight:800;font-size:40px;margin:14px 0 6px;">Flexible Ways to <span class="op-grad">Work With Us</span></h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Pick the model that fits your project and budget.</p>
                <div class="op-line"></div>
            </div>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st1" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                    <div class="op-icon-tile" style="width:66px;height:66px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:18px;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-hourglass-half" style="color:#CF171F;font-size:26px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin:18px 0 4px;">Hourly Basis</h5>
                    <p style="color:#CF171F;font-size:13px;font-weight:600;margin-bottom:14px;">Best for small tasks</p>
                    <div style="text-align:left;">
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Pay as you go</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Full transparency</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Flexible scope</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Total control</span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st2" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                    <div class="op-icon-tile" style="width:66px;height:66px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:18px;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-clipboard-check" style="color:#CF171F;font-size:26px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin:18px 0 4px;">Fixed Price</h5>
                    <p style="color:#CF171F;font-size:13px;font-weight:600;margin-bottom:14px;">Best for defined scope</p>
                    <div style="text-align:left;">
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Clear pricing</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Fixed timeline</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Zero surprises</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Milestone based</span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st3" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                    <div class="op-icon-tile" style="width:66px;height:66px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:18px;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-users" style="color:#CF171F;font-size:26px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin:18px 0 4px;">Dedicated Team</h5>
                    <p style="color:#CF171F;font-size:13px;font-weight:600;margin-bottom:14px;">Best for long-term projects</p>
                    <div style="text-align:left;">
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Your own team</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Full ownership</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Daily reports</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Direct communication</span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="op-reveal op-card bg-white p-5 h-100 op-st4" style="border-radius:22px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                    <div class="op-icon-tile" style="width:66px;height:66px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:18px;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-rocket" style="color:#CF171F;font-size:26px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin:18px 0 4px;">Product Development</h5>
                    <p style="color:#CF171F;font-size:13px;font-weight:600;margin-bottom:14px;">Best for startups</p>
                    <div style="text-align:left;">
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Idea to MVP</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Product strategy</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Iterative builds</span></div>
                        <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:#4ade80;font-size:13px;"></i><span style="color:#4b5563;font-size:13px;">Scale on demand</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ========== TIMELINE ========== --}}
<section style="background:#0b1120;padding:100px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;width:420px;height:420px;bottom:-170px;left:-130px;background:radial-gradient(circle,rgba(207,23,31,.16),transparent 70%);border-radius:50%;"></div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="text-center mb-5">
            <div class="op-reveal">
                <span class="op-kicker" style="justify-content:center;color:#8ab6ff;">Lifecycle</span>
                <h2 style="color:#fff;font-weight:800;font-size:40px;margin:14px 0 6px;">From Kickoff to <span style="color:#8ab6ff;">Long-Term Growth</span></h2>
                <p style="color:rgba(255,255,255,.6);font-size:16px;margin-top:8px;">We don't disappear after launch — we help you iterate and grow.</p>
                <div class="op-line"></div>
            </div>
        </div>
        <div class="op-timeline">
            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="op-reveal-left d-flex" style="gap:20px;padding-left:0;">
                        <div style="position:relative;z-index:2;flex-shrink:0;">
                            <div class="op-step-num" style="width:64px;height:64px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:22px;box-shadow:0 10px 28px rgba(207,23,31,.35);">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                        <div class="op-reveal-right flex-grow-1" style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:24px;">
                            <span style="display:inline-block;background:rgba(207,23,31,.15);color:#ffb08a;font-size:12px;font-weight:700;padding:5px 14px;border-radius:20px;margin-bottom:10px;">Week 0-2</span>
                            <h5 style="color:#fff;font-weight:800;font-size:18px;margin-bottom:8px;">Kickoff &amp; Discovery</h5>
                            <p style="color:rgba(255,255,255,.65);font-size:14px;line-height:1.75;margin:0;">Project onboarding, team assignments, requirement workshops and success criteria.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="op-reveal-left d-flex" style="gap:20px;padding-left:0;">
                        <div style="position:relative;z-index:2;flex-shrink:0;">
                            <div class="op-step-num" style="width:64px;height:64px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:22px;box-shadow:0 10px 28px rgba(207,23,31,.35);">
                                <i class="fas fa-palette"></i>
                            </div>
                        </div>
                        <div class="op-reveal-right flex-grow-1" style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:24px;">
                            <span style="display:inline-block;background:rgba(207,23,31,.15);color:#ffb08a;font-size:12px;font-weight:700;padding:5px 14px;border-radius:20px;margin-bottom:10px;">Week 2-4</span>
                            <h5 style="color:#fff;font-weight:800;font-size:18px;margin-bottom:8px;">Design &amp; Approval</h5>
                            <p style="color:rgba(255,255,255,.65);font-size:14px;line-height:1.75;margin:0;">UX research, wireframes, hi-fi mockups and final design sign-off.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="op-reveal-left d-flex" style="gap:20px;padding-left:0;">
                        <div style="position:relative;z-index:2;flex-shrink:0;">
                            <div class="op-step-num" style="width:64px;height:64px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:22px;box-shadow:0 10px 28px rgba(207,23,31,.35);">
                                <i class="fas fa-code-branch"></i>
                            </div>
                        </div>
                        <div class="op-reveal-right flex-grow-1" style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:24px;">
                            <span style="display:inline-block;background:rgba(207,23,31,.15);color:#ffb08a;font-size:12px;font-weight:700;padding:5px 14px;border-radius:20px;margin-bottom:10px;">Month 1-3</span>
                            <h5 style="color:#fff;font-weight:800;font-size:18px;margin-bottom:8px;">Build in Sprints</h5>
                            <p style="color:rgba(255,255,255,.65);font-size:14px;line-height:1.75;margin:0;">Agile development cycles with weekly demos, QA and your feedback loop.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="op-reveal-left d-flex" style="gap:20px;padding-left:0;">
                        <div style="position:relative;z-index:2;flex-shrink:0;">
                            <div class="op-step-num" style="width:64px;height:64px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:22px;box-shadow:0 10px 28px rgba(207,23,31,.35);">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="op-reveal-right flex-grow-1" style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:24px;">
                            <span style="display:inline-block;background:rgba(207,23,31,.15);color:#ffb08a;font-size:12px;font-weight:700;padding:5px 14px;border-radius:20px;margin-bottom:10px;">Month 3+</span>
                            <h5 style="color:#fff;font-weight:800;font-size:18px;margin-bottom:8px;">Launch &amp; Grow</h5>
                            <p style="color:rgba(255,255,255,.65);font-size:14px;line-height:1.75;margin:0;">Deployment, monitoring, analytics and iterative improvements based on real usage.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ========== CTA ========== --}}
<section style="padding:60px 0;background:#0b1120;">
    <div class="container">
        <div class="op-reveal-scale row align-items-center" style="background:linear-gradient(135deg,#B0171F 0%,#1a4590 50%,#CF171F 100%);border-radius:26px;overflow:hidden;box-shadow:0 38px 90px rgba(176,23,31,.48);position:relative;">
            <div style="position:absolute;top:0;left:-100%;width:55%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.16),transparent);transform:skewX(-20deg);animation:opFloat 5s ease-in-out infinite;"></div>
            <div class="col-lg-8 p-5" style="position:relative;z-index:1;">
                <h2 style="color:#fff;font-weight:800;font-size:33px;margin-bottom:12px;">Ready to Follow a Process That Works?</h2>
                <p style="color:rgba(255,255,255,.85);font-size:16px;margin-bottom:22px;">Let's kick off your project with a free consultation and a clear, actionable roadmap.</p>
                <a href="contact.html" class="btn rounded-pill px-5 py-3 fw-bold" style="background:#CF171F;color:#fff;font-size:15px;box-shadow:0 10px 30px rgba(207,23,31,.4);">
                    Get Free Consultation <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-4 p-0 d-none d-lg-block" style="position:relative;z-index:1;">
                <div style="background:rgba(0,0,0,.2);padding:32px 36px;display:flex;flex-direction:column;gap:13px;min-height:220px;justify-content:center;">
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;">
                        <span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>
                        Transparent Milestones
                    </span>
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;">
                        <span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>
                        Weekly Progress Demos
                    </span>
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;">
                        <span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>
                        Dedicated Project Manager
                    </span>
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;">
                        <span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>
                        Post-Launch Support
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var t = document.querySelector(this.getAttribute('href'));
            if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        });
    });
    var els = document.querySelectorAll('.op-reveal, .op-reveal-left, .op-reveal-right, .op-reveal-scale');
    if ('IntersectionObserver' in window) {
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) { if (entry.isIntersecting) { entry.target.classList.add('op-visible'); obs.unobserve(entry.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        els.forEach(function (el) { obs.observe(el); });
    } else { els.forEach(function (el) { el.classList.add('op-visible'); }); }
});
</script>
@endpush