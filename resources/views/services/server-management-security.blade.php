@extends('layouts.app')

@section('title', 'Server Management & Security Services | Antops Technologies')
@section('meta_description', 'Server management & security by Antops Technologies - setup, hardening, patching, monitoring & 24/7 protection for Linux and cloud servers, performed by experts.')
@section('meta_keywords', 'server management services, server security, server management company, server hardening, linux server management, server monitoring services')

@push('styles')
<style>
/* ========== BASE ========== */
.sv-kicker{color:#CF171F;font-weight:800;font-size:12px;text-transform:uppercase;letter-spacing:2.5px;display:inline-flex;align-items:center;gap:10px}
.sv-kicker::before{content:'';width:28px;height:2px;background:linear-gradient(90deg,#CF171F,#B0171F);border-radius:2px}
.sv-title{color:#8C1116;font-weight:800}
.sv-title small{font-size:15px;font-weight:600;color:#CF171F;letter-spacing:1px}

/* reveal */
.sv-reveal{opacity:0;transform:translateY(38px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.sv-reveal-left{opacity:0;transform:translateX(-45px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.sv-reveal-right{opacity:0;transform:translateX(45px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.sv-reveal-scale{opacity:0;transform:scale(.9);transition:opacity .6s cubic-bezier(.22,1,.36,1),transform .6s cubic-bezier(.22,1,.36,1)}
.sv-visible{opacity:1;transform:none}
.sv-st1{transition-delay:.05s}.sv-st2{transition-delay:.12s}.sv-st3{transition-delay:.19s}
.sv-st4{transition-delay:.26s}.sv-st5{transition-delay:.33s}.sv-st6{transition-delay:.40s}

/* hero bits */
@keyframes svFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-13px)}}
.sv-float{animation:svFloat 4.5s ease-in-out infinite}
.sv-float-d{animation:svFloat 5.5s ease-in-out 1.2s infinite}

/* form */
.sv-input{border-radius:12px;padding:13px 16px;font-size:14px;border:1.5px solid #e3e9f3;transition:all .3s;background:#f9fafc;color:#1e293b}
.sv-input:focus{border-color:#CF171F;box-shadow:0 0 0 4px rgba(207,23,31,.12);background:#fff;outline:none}
.sv-input::placeholder{color:#94a3b8}
.form-select.sv-input{background-position:right .9rem center}

/* generic cards */
.sv-card{transition:all .45s cubic-bezier(.22,1,.36,1);position:relative;overflow:hidden}
.sv-card::before{content:'';position:absolute;top:0;left:0;width:4px;height:0;background:linear-gradient(180deg,#CF171F,#B0171F);transition:height .45s ease;z-index:2}
.sv-card:hover::before{height:100%}
.sv-card:hover{transform:translateY(-9px);box-shadow:0 30px 60px rgba(207,23,31,.15)!important}
.sv-icon-tile{transition:all .35s cubic-bezier(.22,1,.36,1)}
.sv-card:hover .sv-icon-tile{transform:scale(1.07) rotate(-4deg);box-shadow:0 12px 28px rgba(207,23,31,.32)}

/* stats */
.sv-stat{transition:all .4s}
.sv-stat:hover{background:rgba(207,23,31,.14)}
.sv-stat-num{transition:all .4s}
.sv-stat:hover .sv-stat-num{transform:scale(1.14);text-shadow:0 0 24px rgba(127,179,255,.8)}

/* process */
@keyframes svStepRing{0%{box-shadow:0 0 0 0 rgba(207,23,31,.45)}70%{box-shadow:0 0 0 17px rgba(207,23,31,0)}100%{box-shadow:0 0 0 0 rgba(207,23,31,0)}}
.sv-step:hover{transform:translateY(-5px)}
.sv-step{transition:transform .4s cubic-bezier(.22,1,.36,1)}
.sv-step-visible.sv-visible .sv-step-num{animation:svStepRing .8s ease-out}
.sv-step-num{transition:all .4s cubic-bezier(.22,1,.36,1)}
.sv-step:hover .sv-step-num{transform:translateY(-7px) scale(1.06)}

/* CTA shine */
@keyframes svShine{0%{left:-100%}100%{left:135%}}
.sv-cta-banner{position:relative;overflow:hidden}
.sv-cta-shine{position:absolute;top:0;left:-100%;width:55%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.16),transparent);transform:skewX(-20deg);animation:svShine 5s ease-in-out infinite}

/* FAQ */
.sv-faq{border:1px solid #e6eaf2;border-radius:16px;overflow:hidden;background:#fff;transition:box-shadow .3s,border-color .3s}
.sv-faq:hover{border-color:#c7d4f5;box-shadow:0 10px 32px rgba(176,23,31,.07)}
.sv-faq-btn i{transition:transform .35s cubic-bezier(.22,1,.36,1)}
.sv-faq-btn[aria-expanded="true"] i{transform:rotate(180deg)}
.sv-faq-btn[aria-expanded="true"] .sv-faq-ic{background:#CF171F;color:#fff}

/* gradient text & section line */
.sv-grad{background:linear-gradient(135deg,#CF171F,#B0171F);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sv-line{width:62px;height:3px;background:linear-gradient(90deg,#CF171F,#B0171F);margin:14px auto 0;border-radius:3px}

/* industries */
@keyframes svIndIn{0%{transform:rotate(0) scale(1)}100%{transform:rotate(-6deg) scale(1.12)}}
.sv-ind{transition:all .4s cubic-bezier(.22,1,.36,1)}
.sv-ind:hover{transform:translateY(-8px);border-color:rgba(207,23,31,.45)!important;box-shadow:0 22px 48px rgba(207,23,31,.16)!important}
.sv-ind:hover .sv-ind-tile{animation:svIndIn .4s forwards}

/* tech */
.sv-tech{transition:all .35s cubic-bezier(.22,1,.36,1)}
.sv-tech:hover{transform:translateY(-6px);border-color:#CF171F!important;box-shadow:0 16px 40px rgba(207,23,31,.16)!important}
.sv-tech:hover i{transform:scale(1.18)}
.sv-tech i{transition:transform .35s}
.sv-tbtn{border:2px solid #e2e7f1;background:#fff;color:#4b5563;font-size:13px;font-weight:600}
.sv-tbtn.active,.sv-tbtn:hover{background:linear-gradient(135deg,#CF171F,#B0171F);border-color:transparent;color:#fff;box-shadow:0 10px 24px rgba(207,23,31,.28)}
</style>
@endpush

@section('content')

<!-- ========== 1. HERO ========== -->
<section style="background:linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);padding:150px 0 90px;position:relative;overflow:hidden;">
    <div style="position:absolute;width:460px;height:460px;top:-170px;right:-140px;background:radial-gradient(circle,rgba(207,23,31,.14),transparent 70%);border-radius:50%;"></div>
    <div style="position:absolute;width:320px;height:320px;bottom:-130px;left:-120px;background:radial-gradient(circle,rgba(207,23,31,.1),transparent 70%);border-radius:50%;"></div>
    <div class="sv-float" style="position:absolute;width:12px;height:12px;top:28%;right:13%;background:#CF171F;border-radius:50%;"></div>
    <div class="sv-float-d" style="position:absolute;width:8px;height:8px;top:58%;left:7%;background:rgba(207,23,31,.55);border-radius:50%;"></div>
    <div class="sv-float" style="position:absolute;width:6px;height:6px;bottom:24%;right:30%;background:#B0171F;border-radius:50%;animation-delay:1.5s;"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="sv-reveal" style="margin-bottom:12px;">
                    <ol class="breadcrumb mb-0" style="background:transparent;">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:#CF171F;text-decoration:none;"><i class="fas fa-home me-1" style="font-size:12px;"></i>Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('services') }}" style="color:#CF171F;text-decoration:none;">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#8C1116;">Server Management &amp; Security</li>
                    </ol>
                </nav>

                <div class="sv-reveal" style="margin-bottom:16px;">
                    <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(207,23,31,.1);border:1px solid rgba(207,23,31,.28);color:#CF171F;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1.4px;padding:7px 18px;border-radius:30px;">
                        <i class="fas fa-cloud" style="font-size:13px;"></i>Cloud &amp; Hosting
                    </span>
                </div>

                <h1 class="sv-reveal" style="color:#8C1116;font-size:46px;font-weight:800;line-height:1.14;margin:0 0 12px;">Server Management &amp; Security</h1>

                <p class="sv-reveal" style="color:#374151;font-size:16px;line-height:1.9;max-width:640px;margin-bottom:28px;">Server management and security services — setup, hardening, monitoring, patching and 24/7 protection for Linux and cloud servers.</p>

                <div class="sv-reveal d-flex flex-wrap gap-2" style="margin-bottom:32px;">
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-check-circle" style="color:#CF171F;font-size:13px;"></i>Custom Solutions
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-mobile-alt" style="color:#CF171F;font-size:13px;"></i>Mobile Responsive
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-search" style="color:#CF171F;font-size:13px;"></i>SEO Optimized
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-clock" style="color:#CF171F;font-size:13px;"></i>On-Time Delivery
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-shield-alt" style="color:#CF171F;font-size:13px;"></i>NDA Protected
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                        <i class="fas fa-headset" style="color:#CF171F;font-size:13px;"></i>24/7 Support
                    </span>
                </div>

                <div class="sv-reveal d-flex flex-wrap gap-3">
                    <a href="#sv-quote" class="btn rounded-pill px-5 py-3 fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;font-size:15px;box-shadow:0 12px 30px rgba(207,23,31,.32);">
                        Request a Demo <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="sv-reveal-right" style="background:#fff;border-radius:24px;padding:36px;box-shadow:0 30px 75px rgba(176,23,31,.15);border:1px solid rgba(207,23,31,.09);" id="sv-quote">
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:6px;">
                        <div style="width:48px;height:48px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:14px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:0 8px 20px rgba(207,23,31,.28);">
                            <i class="fas fa-rocket" style="color:#fff;font-size:19px;"></i>
                        </div>
                        <div>
                            <h4 style="color:#8C1116;font-weight:800;margin:0;font-size:18px;">Get a Free Quote</h4>
                            <span style="color:#CF171F;font-size:12px;font-weight:600;">Server Management &amp; Security</span>
                        </div>
                    </div>
                    <p style="color:#6a7280;font-size:13px;margin:14px 0 20px;">Fill the form & our team will contact you within 24 hours.</p>

                    <form id="svQuoteForm">
                        @csrf
                        <input type="hidden" name="subject" value="Server Management & Security - Quote Request">
                        <div class="mb-3"><input type="text" name="name" class="form-control sv-input" placeholder="Your Name *" required></div>
                        <div class="mb-3"><input type="email" name="email" class="form-control sv-input" placeholder="Work Email *" required></div>
                        <div class="mb-3"><input type="text" name="company" class="form-control sv-input" placeholder="Company Name"></div>
                        <div class="mb-3">
                            <select name="message" class="form-select sv-input" style="appearance:auto;" required>
                                <option value="" disabled selected>What are you looking for? *</option>
                                <option value="Quote for Server Management & Security">I want a quote / pricing</option>
                                <option value="Demo of Server Management & Security">I want a demo</option>
                                <option value="Custom Server Management & Security requirements">Custom requirements</option>
                                <option value="Have a question about Server Management & Security">Have a question</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 text-white fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;padding:14px;font-size:15px;">
                            <i class="fas fa-paper-plane me-2"></i> Submit Request
                        </button>
                    </form>
                    <div id="svQuoteAlert" class="d-none mt-3" style="border-radius:10px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== 2. STATS ========== -->
<section style="background:linear-gradient(135deg,#0b1120,#101f46);padding:46px 0;">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="sv-stat p-3" style="border-radius:14px;">
                    <div class="sv-stat-num" data-count="5+" style="color:#8ab6ff;font-size:34px;font-weight:800;">5+</div>
                    <div style="color:rgba(255,255,255,.62);font-size:13px;margin-top:2px;">Years in Business</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="sv-stat p-3" style="border-radius:14px;">
                    <div class="sv-stat-num" data-count="150+" style="color:#8ab6ff;font-size:34px;font-weight:800;">150+</div>
                    <div style="color:rgba(255,255,255,.62);font-size:13px;margin-top:2px;">Projects Delivered</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="sv-stat p-3" style="border-radius:14px;">
                    <div class="sv-stat-num" data-count="100+" style="color:#8ab6ff;font-size:34px;font-weight:800;">100+</div>
                    <div style="color:rgba(255,255,255,.62);font-size:13px;margin-top:2px;">Happy Clients</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="sv-stat p-3" style="border-radius:14px;">
                    <div class="sv-stat-num" data-count="24/7" style="color:#8ab6ff;font-size:34px;font-weight:800;">24/7</div>
                    <div style="color:rgba(255,255,255,.62);font-size:13px;margin-top:2px;">Technical Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== 3. OVERVIEW ========== -->
<section style="background:#fff;padding:100px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="sv-reveal-right">
                    <span class="sv-kicker">Overview</span>
                    <h2 class="sv-title" style="font-size:36px;margin:14px 0 18px;">Servers That Stay Up and Stay Safe</h2>
                    <div style="color:#4a5568;line-height:1.9;font-size:15px;"><p>A poorly managed server is a risk to your uptime, data and reputation. Our server management and security services keep your Linux and cloud servers configured, hardened, monitored and patched — so they perform reliably and resist attacks. From setup and hardening to 24/7 monitoring and rapid incident response, we handle your infrastructure with the care it deserves.</p></div>
                    <div class="row g-3 mt-4">
                        <div class="col-6"><div class="d-flex align-items-center gap-2 justify-content-center"><div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-users" style="color:#CF171F;font-size:13px;"></i></div><span style="color:#374151;font-weight:600;font-size:13px;">Dedicated Expert Team</span></div></div>
                        <div class="col-6"><div class="d-flex align-items-center gap-2 justify-content-center"><div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-layer-group" style="color:#CF171F;font-size:13px;"></i></div><span style="color:#374151;font-weight:600;font-size:13px;">Scalable &amp; Modern Solutions</span></div></div>
                        <div class="col-6"><div class="d-flex align-items-center gap-2 justify-content-center"><div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-lock" style="color:#CF171F;font-size:13px;"></i></div><span style="color:#374151;font-weight:600;font-size:13px;">Secure &amp; Reliable Delivery</span></div></div>
                        <div class="col-6"><div class="d-flex align-items-center gap-2 justify-content-center"><div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-sync-alt" style="color:#CF171F;font-size:13px;"></i></div><span style="color:#374151;font-weight:600;font-size:13px;">Support &amp; Maintenance</span></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== 4. WHAT WE OFFER ========== -->
<section style="background:#f8f9fc;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">What We Offer</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">Our Server Management Solutions</h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Complete server administration and security protection.</p>
                <div class="sv-line"></div>
            </div>
        </div>
        <div class="row g-4">
            @php
            $offers = [
                ['Server Setup & Configuration','Configured servers optimized for your stack.'],
                ['Security Hardening','Firewalls, SSH security and lock-down best practices.'],
                ['Monitoring & Alerts','24/7 uptime, resource and security monitoring.'],
                ['Patching & Updates','Regular OS and software security updates.'],
                ['Performance Tuning','Optimized configuration for speed and stability.'],
                ['Incident Response','Fast containment and recovery from issues.'],
            ];
            @endphp
            @foreach($offers as $i => $offer)
            <div class="col-lg-4 col-md-6">
                <div class="sv-reveal sv-card bg-white p-5 h-100 sv-st{{ ($i % 6) + 1 }}" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div class="sv-icon-tile mb-3" style="width:62px;height:62px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.24);">
                        <i class="fas fa-check" style="color:#fff;font-size:23px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin-bottom:9px;">{{ $offer[0] }}</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">{{ $offer[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== 5. WHAT'S INCLUDED ========== -->
<section style="background:#fff;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">What's Included</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">What's Included With Every Plan</h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Full protection and administration for your servers.</p>
                <div class="sv-line"></div>
            </div>
        </div>
        <div class="row g-4">
            @php
            $included = [
                ['Server Audit','Full security and performance review.'],
                ['Hardening & Patching','Protected against common attacks.'],
                ['24/7 Monitoring','Uptime and security alerts.'],
                ['Backup Management','Reliable scheduled backups.'],
                ['Performance Optimization','Speed and stability tuning.'],
                ['Proactive Support','Rapid response to any issue.'],
            ];
            @endphp
            @foreach($included as $i => $inc)
            <div class="col-lg-4 col-md-6">
                <div class="sv-reveal sv-card bg-white p-5 h-100 sv-st{{ ($i % 6) + 1 }}" style="border-radius:20px;background:linear-gradient(180deg,rgba(207,23,31,.02),#fff 30%);border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div class="sv-icon-tile mb-3" style="width:62px;height:62px;background:linear-gradient(135deg,#CF171F,#CF171F);border-radius:17px;display:flex;align-items:center;justify-content:center;box-shadow:0 9px 22px rgba(207,23,31,.2);">
                        <i class="fas fa-check-circle" style="color:#fff;font-size:23px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin-bottom:9px;">{{ $inc[0] }}</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">{{ $inc[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== 6. PROCESS ========== -->
<section style="background:#f8f9fc;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">How We Work</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">Our Server Management Process</h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Keeping your servers secure, stable and fast.</p>
                <div class="sv-line"></div>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @php
            $steps = [
                ['Audit','Review servers, security and performance.'],
                ['Harden','Apply security configurations and patches.'],
                ['Monitor','Set up 24/7 monitoring and alerts.'],
                ['Maintain','Apply regular updates and backups.'],
                ['Optimize','Tune for speed and stability.'],
                ['Respond','Handle issues before they escalate.'],
            ];
            @endphp
            @foreach($steps as $i => $step)
            <div class="col-lg-2 col-md-4 col-6 sv-step">
                <div class="sv-reveal sv-step-visible text-center p-3 sv-st{{ $i + 1 }}">
                    <div class="sv-step-num" style="width:84px;height:84px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;color:#fff;font-size:29px;font-weight:800;box-shadow:0 12px 32px rgba(207,23,31,.32);position:relative;">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        <span style="position:absolute;top:6px;right:8px;width:10px;height:10px;background:#CF171F;border:2px solid #fff;border-radius:50%;"></span>
                    </div>
                    <h6 style="color:#8C1116;font-weight:800;font-size:15px;margin-bottom:6px;">{{ $step[0] }}</h6>
                    <p style="color:#6a7280;font-size:12px;line-height:1.65;margin:0;">{{ $step[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== 7. WHY CHOOSE US ========== -->
<section style="background:#fff;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">Why Choose Antops</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">What Makes Us <span class="sv-grad">Different</span></h2>
                <div class="sv-line"></div>
            </div>
        </div>
        <div class="row g-4">
            @php
            $why = [
                ['fas fa-award','Proven Expertise','Years of experience delivering high-quality digital solutions across industries.'],
                ['fas fa-smile','Client-First Approach','Your goals shape our strategy. We build around your business, not templates.'],
                ['fas fa-cogs','Transparent Process','Clear timelines, regular updates and total visibility from kickoff to launch.'],
                ['fas fa-shield-alt','Quality Guaranteed','Rigorous testing and QA at every milestone so the final product just works.'],
                ['fas fa-hand-holding-usd','Competitive Pricing','Premium quality at practical budgets with flexible engagement models.'],
                ['fas fa-headset','Ongoing Support','We stay with you after launch with maintenance, updates and quick support.'],
            ];
            @endphp
            @foreach($why as $i => $w)
            <div class="col-lg-4 col-md-6">
                <div class="sv-reveal sv-card bg-white p-5 h-100 sv-st{{ $i + 1 }}" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);">
                    <div class="sv-icon-tile mb-3" style="width:60px;height:60px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:16px;display:flex;align-items:center;justify-content:center;">
                        <i class="{{ $w[0] }}" style="color:#CF171F;font-size:24px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:800;font-size:18px;margin-bottom:9px;">{{ $w[1] }}</h5>
                    <p style="color:#5a6478;font-size:14px;line-height:1.8;margin:0;">{{ $w[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== 8. INDUSTRIES ========== -->
<section style="background:#f8f9fc;padding:100px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;left:0;top:0;bottom:0;width:300px;background:radial-gradient(circle at 0 50%,rgba(207,23,31,.07),transparent 70%);"></div>
    <div class="container" style="position:relative;z-index:1;">
        <div class="text-center mb-5">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">Industries We Serve</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">Solutions Across <span class="sv-grad">Key Industries</span></h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">We help businesses in these industries unlock growth with tailor-made technology.</p>
                <div class="sv-line"></div>
            </div>
        </div>
        <div class="row g-4">
            @php
            $industries = [
                ['healthcare','fas fa-heartbeat','Healthcare'],
                ['ecommerce-retail','fas fa-shopping-bag','E-Commerce & Retail'],
                ['real-estate','fas fa-building','Real Estate'],
                ['education-elearning','fas fa-graduation-cap','Education & E-Learning'],
                ['finance-banking','fas fa-university','Finance & Banking'],
                ['travel-hospitality','fas fa-plane','Travel & Hospitality'],
                ['logistics-supply-chain','fas fa-truck','Logistics & Supply Chain'],
                ['manufacturing','fas fa-industry','Manufacturing'],
            ];
            @endphp
            @foreach($industries as $i => $ind)
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('industries/'.$ind[0]) }}" class="text-decoration-none">
                    <div class="sv-reveal sv-ind bg-white p-4 text-center h-100 sv-st{{ ($i % 6) + 1 }}" style="border-radius:18px;border:1px solid #eef1f7;box-shadow:0 8px 26px rgba(0,0,0,.04);height:100%;">
                        <div class="sv-ind-tile mb-3" style="width:64px;height:64px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:18px;display:flex;align-items:center;justify-content:center;">
                            <i class="{{ $ind[1] }}" style="color:#CF171F;font-size:26px;"></i>
                        </div>
                        <h6 style="color:#8C1116;font-weight:700;font-size:15px;margin:0;">{{ $ind[2] }}</h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== 9. TECHNOLOGIES ========== -->
<section style="background:#fff;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-4">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">Tech Stack</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">Technologies We <span class="sv-grad">Master</span></h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Modern, battle-tested tools we use to build your Server Management &amp; Security.</p>
                <div class="sv-line"></div>
            </div>
        </div>

        <div class="sv-reveal d-flex justify-content-center flex-wrap gap-2 mb-4">
            <button class="btn sv-tbtn active rounded-pill px-4 py-2" onclick="svFilterTech('all',this)">All Technologies</button>
            <button class="btn sv-tbtn rounded-pill px-4 py-2" onclick="svFilterTech('Frontend Technologies',this)">Frontend Technologies</button>
            <button class="btn sv-tbtn rounded-pill px-4 py-2" onclick="svFilterTech('Backend',this)">Backend</button>
            <button class="btn sv-tbtn rounded-pill px-4 py-2" onclick="svFilterTech('Mobile App Development',this)">Mobile App Development</button>
            <button class="btn sv-tbtn rounded-pill px-4 py-2" onclick="svFilterTech('Cloud & DevOps',this)">Cloud &amp; DevOps</button>
            <button class="btn sv-tbtn rounded-pill px-4 py-2" onclick="svFilterTech('Database Technologies',this)">Database Technologies</button>
        </div>

        <div class="row g-3">
            @php
            $techs = [
                ['Frontend Technologies','fa-brands fa-html5','HTML5'],
                ['Frontend Technologies','fa-brands fa-css3-alt','CSS3'],
                ['Frontend Technologies','fa-brands fa-js','JavaScript'],
                ['Frontend Technologies','fa-brands fa-react','React.js'],
                ['Frontend Technologies','fa-solid fa-rocket','Next.js'],
                ['Frontend Technologies','fa-brands fa-vuejs','Vue.js'],
                ['Frontend Technologies','fa-brands fa-angular','Angular'],
                ['Frontend Technologies','fa-brands fa-bootstrap','Bootstrap'],
                ['Frontend Technologies','fa-solid fa-wind','Tailwind CSS'],
                ['Backend','fa-brands fa-php','PHP'],
                ['Backend','fa-brands fa-laravel','Laravel'],
                ['Backend','fa-brands fa-node-js','Node.js'],
                ['Backend','fa-brands fa-python','Python'],
                ['Backend','fa-solid fa-layer-group','Django'],
                ['Backend','fa-solid fa-window-restore','.NET'],
                ['Backend','fa-brands fa-java','Java'],
                ['Backend','fa-solid fa-leaf','Spring Boot'],
                ['Mobile App Development','fa-brands fa-android','Android'],
                ['Mobile App Development','fa-brands fa-apple','iOS'],
                ['Mobile App Development','fa-solid fa-mobile-screen','Flutter'],
                ['Mobile App Development','fa-brands fa-react','React Native'],
                ['Mobile App Development','fa-solid fa-crown','Kotlin'],
                ['Mobile App Development','fa-solid fa-bolt','Swift'],
                ['Cloud & DevOps','fa-brands fa-aws','AWS'],
                ['Cloud & DevOps','fa-solid fa-cloud','Microsoft Azure'],
                ['Cloud & DevOps','fa-brands fa-google','Google Cloud'],
                ['Cloud & DevOps','fa-brands fa-docker','Docker'],
                ['Cloud & DevOps','fa-solid fa-boxes-stacked','Kubernetes'],
                ['Cloud & DevOps','fa-solid fa-rotate','CI/CD'],
                ['Cloud & DevOps','fa-brands fa-github','GitHub Actions'],
                ['Database Technologies','fa-solid fa-database','MySQL'],
                ['Database Technologies','fa-solid fa-database','PostgreSQL'],
                ['Database Technologies','fa-brands fa-envira','MongoDB'],
                ['Database Technologies','fa-solid fa-table','Microsoft SQL Server'],
                ['Database Technologies','fa-solid fa-fire','Firebase'],
                ['Database Technologies','fa-solid fa-bolt-lightning','Redis'],
            ];
            @endphp
            @foreach($techs as $i => $t)
            <div class="col-lg-2 col-md-3 col-6 sv-tech-item" data-cat="{{ $t[0] }}" style="transition:opacity .3s;">
                <div class="sv-reveal sv-tech bg-white p-3 text-center sv-st{{ ($i % 6) + 1 }}" style="border:1px solid #e8ecf4;border-radius:15px;height:100%;cursor:pointer;">
                    <i class="{{ $t[1] }}" style="font-size:30px;color:#CF171F;margin-bottom:9px;display:block;"></i>
                    <span style="color:#8C1116;font-weight:600;font-size:13px;">{{ $t[2] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== 10. CTA BANNER ========== -->
<section style="padding:55px 0;background:#0b1120;">
    <div class="container">
        <div class="sv-reveal-scale sv-cta-banner row align-items-center" style="background:linear-gradient(135deg,#B0171F 0%,#1a4590 50%,#CF171F 100%);border-radius:26px;overflow:hidden;box-shadow:0 38px 90px rgba(176,23,31,.48);">
            <div class="sv-cta-shine"></div>
            <div class="col-lg-8 p-5" style="position:relative;z-index:1;">
                <h2 style="color:#fff;font-weight:800;font-size:33px;margin-bottom:12px;">Let Experts Manage Your Servers</h2>
                <p style="color:rgba(255,255,255,.85);font-size:16px;margin-bottom:22px;">Get secure, monitored and always-on server management.</p>
                <a href="#sv-quote" class="btn rounded-pill px-5 py-3 fw-bold" style="background:#CF171F;color:#fff;font-size:15px;box-shadow:0 10px 30px rgba(207,23,31,.4);">
                    Get Server Management Quote <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-4 p-0 d-none d-lg-block" style="position:relative;z-index:1;">
                <div style="background:rgba(0,0,0,.2);padding:32px 36px;display:flex;flex-direction:column;gap:13px;min-height:220px;justify-content:center;">
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;"><span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>Dedicated Development Team</span>
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;"><span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>100% NDA Protected</span>
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;"><span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>On-Time Project Delivery</span>
                    <span style="color:#fff;font-size:14px;display:flex;align-items:center;gap:10px;"><span style="width:25px;height:25px;min-width:25px;background:rgba(74,222,128,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#4ade80;font-size:11px;"></i></span>24/7 Technical Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== 11. FAQ ========== -->
<section style="background:#fff;padding:100px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="sv-reveal">
                <span class="sv-kicker" style="justify-content:center;">FAQ</span>
                <h2 class="sv-title" style="font-size:40px;margin:14px 0 6px;">Frequently Asked Questions</h2>
                <p style="color:#6a7280;font-size:16px;margin-top:8px;">Answers to common questions about server management and security.</p>
                <div class="sv-line"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @php
                $faqs = [
                    ['What does server management include?','It includes setup, security hardening, updates and patching, backups, monitoring, performance tuning and fast resolution of issues.'],
                    ['Which servers do you manage?','We manage Linux servers (Ubuntu, CentOS, Debian), cloud instances on AWS and Google Cloud, VPS and dedicated servers.'],
                    ['Can you secure my existing server?','Yes. We audit your server, fix vulnerabilities, harden configuration and set up monitoring to protect it against attacks.'],
                    ['How fast do you respond if something goes wrong?','Our monitoring detects issues early and we respond rapidly — critical incidents are typically acknowledged within minutes on supported plans.'],
                    ['Do you handle backups?','Yes. We configure and manage reliable backups with restoration so your data is protected against loss.'],
                    ['Can you manage a server I already host elsewhere?','Yes. As long as we have appropriate access, we can manage servers hosted with any provider.'],
                ];
                @endphp
                @foreach($faqs as $i => $faq)
                <div class="sv-reveal sv-faq mb-3 sv-st{{ $i + 1 }}">
                    <button class="sv-faq-btn w-100 p-4 border-0 bg-transparent text-start d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#svfaq{{ $i }}" style="color:#8C1116;font-weight:600;font-size:15px;gap:12px;">
                        <span style="flex:1;">{{ $faq[0] }}</span>
                        <span class="sv-faq-ic" style="width:31px;height:31px;min-width:31px;background:rgba(207,23,31,.1);border-radius:50%;display:inline-flex;align-items:center;justify-content:center;transition:all .3s;">
                            <i class="fas fa-chevron-down" style="color:#CF171F;font-size:12px;"></i>
                        </span>
                    </button>
                    <div class="collapse" id="svfaq{{ $i }}"><div class="px-4 pb-4" style="color:#5a6478;line-height:1.85;font-size:14px;">{{ $faq[1] }}</div></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ========== 12. BOTTOM DEMO FORM ========== -->
<section style="background:linear-gradient(140deg,#0a0f1e 0%,#101f46 55%,#B0171F 100%);padding:100px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;width:380px;height:380px;top:-140px;right:-90px;background:radial-gradient(circle,rgba(207,23,31,.22),transparent 70%);border-radius:50%;"></div>
    <div class="sv-float" style="position:absolute;width:9px;height:9px;top:22%;left:14%;background:rgba(207,23,31,.5);border-radius:50%;"></div>
    <div class="sv-float-d" style="position:absolute;width:6px;height:6px;bottom:25%;left:42%;background:rgba(255,255,255,.3);border-radius:50%;"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="sv-reveal-left">
                    <span class="sv-kicker" style="color:#8ab6ff;">Ready to Get Started?</span>
                    <h2 style="color:#fff;font-weight:800;font-size:39px;margin:12px 0 18px;">Let's Discuss Your <span style="color:#8ab6ff;">Server Management &amp; Security</span> Requirements</h2>
                    <p style="color:rgba(255,255,255,.68);font-size:16px;line-height:1.9;margin-bottom:30px;">
                        Get a free consultation, detailed project roadmap and a transparent quote within 24 hours. Our experts will help you choose the right approach for your business.
                    </p>
                    <div class="row g-3">
                        <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-comments" style="color:#4ade80;font-size:13px;"></i></div><span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Free Consultation</span></div></div>
                        <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-tags" style="color:#4ade80;font-size:13px;"></i></div><span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Transparent Pricing</span></div></div>
                        <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-users" style="color:#4ade80;font-size:13px;"></i></div><span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Dedicated Team</span></div></div>
                        <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-bolt" style="color:#4ade80;font-size:13px;"></i></div><span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Quick Response</span></div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sv-reveal-right" style="background:#fff;border-radius:24px;padding:40px;box-shadow:0 35px 90px rgba(0,0,0,.4);">
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:6px;">
                        <div style="width:48px;height:48px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:14px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fas fa-calendar-check" style="color:#fff;font-size:19px;"></i>
                        </div>
                        <h4 style="color:#8C1116;font-weight:800;margin:0;font-size:18px;">Schedule a Demo</h4>
                    </div>
                    <p style="color:#6a7280;font-size:13px;margin:12px 0 22px;">We'll get back to you within 24 hours with a personalised walkthrough.</p>

                    <form id="svBottomForm">
                        @csrf
                        <input type="hidden" name="subject" value="Server Management & Security - Schedule Demo Request">
                        <div class="row g-3">
                            <div class="col-md-6"><input type="text" name="name" class="form-control sv-input" placeholder="Full Name *" required></div>
                            <div class="col-md-6"><input type="email" name="email" class="form-control sv-input" placeholder="Work Email *" required></div>
                            <div class="col-md-6"><input type="text" name="company" class="form-control sv-input" placeholder="Company Name"></div>
                            <div class="col-12">
                                <select name="message" class="form-select sv-input" style="appearance:auto;" required>
                                    <option value="" disabled selected>I'm interested in... *</option>
                                    <option value="Live demo of Server Management & Security">Live demo of this service</option>
                                    <option value="Custom development for my business">Custom development</option>
                                    <option value="Need pricing / consultation">Pricing / Consultation</option>
                                    <option value="Just exploring options">Just exploring</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn w-100 text-white fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;padding:15px;font-size:15px;">
                                    <i class="fas fa-calendar me-2"></i> Schedule My Demo
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="svBottomAlert" class="d-none mt-3" style="border-radius:10px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

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

    var revealEls = document.querySelectorAll('.sv-reveal, .sv-reveal-left, .sv-reveal-right, .sv-reveal-scale');
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) { entry.target.classList.add('sv-visible'); observer.unobserve(entry.target); }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { observer.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('sv-visible'); });
    }

    var counters = document.querySelectorAll('.sv-stat-num[data-count]');
    function animateCounter(el) {
        var raw = el.getAttribute('data-count');
        var num = parseInt(raw);
        if (isNaN(num)) return;
        var suffix = raw.replace(/[0-9]/g, '');
        var duration = 1800, st = null;
        function step(ts) {
            if (!st) st = ts;
            var progress = Math.min((ts - st) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(ease * num) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    if (counters.length && 'IntersectionObserver' in window) {
        var cObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) { if (entry.isIntersecting) { animateCounter(entry.target); cObs.unobserve(entry.target); } });
        }, { threshold: 0.5 });
        counters.forEach(function (c) { cObs.observe(c); });
    }

    window.svFilterTech = function (cat, btn) {
        document.querySelectorAll('.sv-tbtn').forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
        document.querySelectorAll('.sv-tech-item').forEach(function (el) {
            el.style.display = (cat === 'all' || el.dataset.cat === cat) ? 'block' : 'none';
        });
    };

    function bindForm(formId, alertId, btnHtml) {
        $(formId).on('submit', function (e) {
            e.preventDefault();
            var $form = $(this), $alert = $(alertId), $btn = $form.find('button[type="submit"]');
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
                    setTimeout(function () { $btn.html(btnHtml); $alert.addClass('d-none'); }, 5000);
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
    bindForm('#svQuoteForm', '#svQuoteAlert', '<i class="fas fa-paper-plane me-2"></i> Submit Request');
    bindForm('#svBottomForm', '#svBottomAlert', '<i class="fas fa-calendar me-2"></i> Schedule My Demo');
});
</script>
@endpush