@extends('layouts.app')

@section('title', 'Internship Program | Antops Technologies')
@section('meta_description', 'Kickstart your career at Antops Technologies. Apply for internships in Web Development, App Development, UI/UX Design, Digital Marketing, AI/ML and more.')
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
.internship-page { font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', sans-serif; }
.internship-page * { box-sizing: border-box; }

.in-reveal{opacity:0;transform:translateY(38px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.in-reveal-left{opacity:0;transform:translateX(-45px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.in-reveal-right{opacity:0;transform:translateX(45px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.in-reveal-scale{opacity:0;transform:scale(.9);transition:opacity .6s cubic-bezier(.22,1,.36,1),transform .6s cubic-bezier(.22,1,.36,1)}
.in-visible{opacity:1;transform:none}
.in-st1{transition-delay:.05s}.in-st2{transition-delay:.12s}.in-st3{transition-delay:.19s}
.in-st4{transition-delay:.26s}.in-st5{transition-delay:.33s}.in-st6{transition-delay:.40s}

@keyframes inFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-13px)}}
.in-float{animation:inFloat 4.5s ease-in-out infinite}
.in-float-d{animation:inFloat 5.5s ease-in-out 1.2s infinite}

.in-kicker{color:#CF171F;font-weight:800;font-size:12px;text-transform:uppercase;letter-spacing:2.5px;display:inline-flex;align-items:center;gap:10px}
.in-kicker::before{content:'';width:28px;height:2px;background:linear-gradient(90deg,#CF171F,#B0171F);border-radius:2px}
.in-line{width:62px;height:3px;background:linear-gradient(90deg,#CF171F,#B0171F);margin:14px auto 0;border-radius:3px}
.in-grad{background:linear-gradient(135deg,#CF171F,#B0171F);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

.in-card{transition:all .45s cubic-bezier(.22,1,.36,1);position:relative;overflow:hidden}
.in-card::before{content:'';position:absolute;top:0;left:0;width:4px;height:0;background:linear-gradient(180deg,#CF171F,#B0171F);transition:height .45s ease;z-index:2}
.in-card:hover::before{height:100%}
.in-card:hover{transform:translateY(-9px);box-shadow:0 30px 60px rgba(207,23,31,.15)!important}
.in-icon-tile{transition:all .35s cubic-bezier(.22,1,.36,1)}
.in-card:hover .in-icon-tile{transform:scale(1.07) rotate(-4deg);box-shadow:0 12px 28px rgba(207,23,31,.32)}

.in-input{border-radius:12px;padding:13px 16px;font-size:14px;border:1.5px solid #e3e9f3;transition:all .3s;background:#f9fafc;color:#1e293b;width:100%}
.in-input:focus{border-color:#CF171F;box-shadow:0 0 0 4px rgba(207,23,31,.12);background:#fff;outline:none}
.in-input::placeholder{color:#94a3b8}
.form-select.in-input{background-position:right .9rem center}
</style>
@endpush

@section('content')
<main>

<div class="internship-page">

    {{-- ========== HERO ========== --}}
    <section style="background:linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);padding:150px 0 90px;position:relative;overflow:hidden;">
        <div style="position:absolute;width:460px;height:460px;top:-170px;right:-140px;background:radial-gradient(circle,rgba(207,23,31,.14),transparent 70%);border-radius:50%;"></div>
        <div style="position:absolute;width:320px;height:320px;bottom:-130px;left:-120px;background:radial-gradient(circle,rgba(207,23,31,.1),transparent 70%);border-radius:50%;"></div>
        <div class="in-float" style="position:absolute;width:12px;height:12px;top:28%;right:13%;background:#CF171F;border-radius:50%;"></div>
        <div class="in-float-d" style="position:absolute;width:8px;height:8px;top:58%;left:7%;background:rgba(207,23,31,.55);border-radius:50%;"></div>

        <div class="container" style="position:relative;z-index:2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <nav aria-label="breadcrumb" class="in-reveal" style="margin-bottom:14px;">
                        <ol class="breadcrumb mb-0" style="background:transparent;">
                            <li class="breadcrumb-item"><a href="index.html" style="color:#CF171F;text-decoration:none;"><i class="fas fa-home me-1" style="font-size:12px;"></i>Home</a></li>
                            <li class="breadcrumb-item"><a href="careers.html" style="color:#CF171F;text-decoration:none;">Careers</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color:#8C1116;">Internship</li>
                        </ol>
                    </nav>
                    <div class="in-reveal" style="margin-bottom:16px;">
                        <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(207,23,31,.1);border:1px solid rgba(207,23,31,.28);color:#CF171F;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:1.4px;padding:7px 18px;border-radius:30px;">
                            <i class="fas fa-graduation-cap" style="font-size:13px;"></i>Learn. Build. Grow.
                        </span>
                    </div>
                    <h1 class="in-reveal" style="color:#8C1116;font-size:46px;font-weight:800;line-height:1.14;margin:0 0 14px;">Kickstart Your Career With the <span style="color:#CF171F;">Antops Internship Program</span></h1>
                    <p class="in-reveal" style="color:#374151;font-size:16px;line-height:1.9;max-width:640px;margin-bottom:28px;">
                        Work on real projects, learn from industry experts, and gain hands-on experience in the latest technologies. Our internship program is designed to turn talented students and graduates into job-ready professionals.
                    </p>
                    <div class="in-reveal d-flex flex-wrap gap-2" style="margin-bottom:32px;">
                        <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                            <i class="fas fa-tools" style="color:#CF171F;font-size:13px;"></i>Hands-On Learning
                        </span>
                        <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                            <i class="fas fa-user-tie" style="color:#CF171F;font-size:13px;"></i>Real Projects
                        </span>
                        <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                            <i class="fas fa-award" style="color:#CF171F;font-size:13px;"></i>Internship Certificate
                        </span>
                        <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid #e2e8f0;padding:7px 15px;border-radius:30px;font-size:13px;font-weight:500;color:#334155;box-shadow:0 2px 8px rgba(0,0,0,.04);">
                            <i class="fas fa-briefcase" style="color:#CF171F;font-size:13px;"></i>PTO Opportunities
                        </span>
                    </div>
                    <div class="in-reveal d-flex flex-wrap gap-3">
                        <a href="#in-apply" class="btn rounded-pill px-5 py-3 fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;font-size:15px;box-shadow:0 12px 30px rgba(207,23,31,.32);">
                            Apply for Internship <i class="fas fa-arrow-down ms-2"></i>
                        </a>
                        <a href="careers.html" class="btn rounded-pill px-5 py-3 fw-bold" style="background:#CF171F;color:#fff;font-size:15px;box-shadow:0 12px 30px rgba(207,23,31,.32);">
                            View Full-Time Roles <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="in-reveal-right" style="position:relative;">
                        <div style="background:#fff;border-radius:26px;padding:38px;box-shadow:0 30px 75px rgba(176,23,31,.15);border:1px solid rgba(207,23,31,.09);">
                            <div style="display:flex;align-items:center;gap:12px;margin-bottom:22px;">
                                <div style="width:52px;height:52px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:15px;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 22px rgba(207,23,31,.3);">
                                    <i class="fas fa-graduation-cap" style="color:#fff;font-size:22px;"></i>
                                </div>
                                <div>
                                    <div style="color:#8C1116;font-weight:800;font-size:16px;">Program Highlights</div>
                                    <div style="color:#CF171F;font-size:12px;font-weight:600;">What you get</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                                <div style="width:38px;height:38px;min-width:38px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:11px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-user-graduate" style="color:#CF171F;font-size:15px;"></i></div>
                                <div>
                                    <div style="color:#8C1116;font-weight:700;font-size:13px;">Mentorship</div>
                                    <div style="color:#6a7280;font-size:12px;">1:1 guidance from senior engineers &amp; designers</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                                <div style="width:38px;height:38px;min-width:38px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:11px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-laptop-code" style="color:#CF171F;font-size:15px;"></i></div>
                                <div>
                                    <div style="color:#8C1116;font-weight:700;font-size:13px;">Live Projects</div>
                                    <div style="color:#6a7280;font-size:12px;">Ship real features used by actual clients</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                                <div style="width:38px;height:38px;min-width:38px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:11px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-calendar-check" style="color:#CF171F;font-size:15px;"></i></div>
                                <div>
                                    <div style="color:#8C1116;font-weight:700;font-size:13px;">3–6 Months</div>
                                    <div style="color:#6a7280;font-size:12px;">Flexible, learn-while-you-work format</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                                <div style="width:38px;height:38px;min-width:38px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:11px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-certificate" style="color:#CF171F;font-size:15px;"></i></div>
                                <div>
                                    <div style="color:#8C1116;font-weight:700;font-size:13px;">Certificate</div>
                                    <div style="color:#6a7280;font-size:12px;">Verified internship &amp; experience letter</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" style="padding:11px 0;border-bottom:1px dashed #e8ecf4;">
                                <div style="width:38px;height:38px;min-width:38px;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:11px;display:flex;align-items:center;justify-content:center;"><i class="fas fa-id-badge" style="color:#CF171F;font-size:15px;"></i></div>
                                <div>
                                    <div style="color:#8C1116;font-weight:700;font-size:13px;">PTO Offer</div>
                                    <div style="color:#6a7280;font-size:12px;">Full-time job offer for top performers</div>
                                </div>
                            </div>
                        </div>
                        <div class="in-float" style="position:absolute;bottom:-18px;right:-10px;background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;border-radius:16px;padding:14px 22px;box-shadow:0 16px 40px rgba(207,23,31,.4);text-align:center;">
                            <div style="font-size:24px;font-weight:800;">100+</div>
                            <div style="font-size:11px;opacity:.9;">Interns Trained</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== TRACKS ========== --}}
    <section style="background:#fff;padding:100px 0;">
        <div class="container">
            <div class="text-center mb-5">
                <div class="in-reveal">
                    <span class="in-kicker" style="justify-content:center;">Internship Tracks</span>
                    <h2 style="color:#8C1116;font-weight:800;font-size:40px;margin:14px 0 6px;">Choose Your <span class="in-grad">Learning Path</span></h2>
                    <p style="color:#6a7280;font-size:16px;margin-top:8px;">Pick the domain you're passionate about and start building.</p>
                    <div class="in-line"></div>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st1" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-code" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">Web Development</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Frontend &amp; backend development with HTML, CSS, JS, React, Laravel and more.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st2" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-mobile-alt" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">App Development</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Build cross-platform and native mobile apps that people love to use.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st3" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-pen-nib" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">UI/UX Design</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Learn user research, wireframing, prototyping and modern design systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st4" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-bullhorn" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">Digital Marketing</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">SEO, social media, content strategy, paid ads and growth analytics.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st5" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-robot" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">AI &amp; Machine Learning</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Explore intelligent systems, data modeling and real-world AI applications.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st6" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-database" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">Data Analytics</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Turn raw data into insights with SQL, Python, Power BI and visualization tools.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st1" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-shield-alt" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">Cyber Security</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Learn secure coding, ethical hacking fundamentals and vulnerability assessment.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="in-reveal in-card bg-white p-4 h-100 in-st2" style="border-radius:20px;border:1px solid #eef1f7;box-shadow:0 10px 32px rgba(0,0,0,.04);text-align:center;">
                        <div class="in-icon-tile" style="width:62px;height:62px;margin:0 auto;background:linear-gradient(135deg,rgba(207,23,31,.12),rgba(176,23,31,.12));border-radius:17px;display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-cloud" style="color:#CF171F;font-size:25px;"></i>
                        </div>
                        <h5 style="color:#8C1116;font-weight:800;font-size:16px;margin:16px 0 8px;">Cloud &amp; DevOps</h5>
                        <p style="color:#6a7280;font-size:13px;line-height:1.75;margin:0;">Deploy, monitor and scale applications with AWS, Docker and CI/CD pipelines.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========== WHY INTERN + ELIGIBILITY ========== --}}
    <section style="background:#f8f9fc;padding:100px 0;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="in-reveal-left">
                        <span class="in-kicker">Why Intern at Antops?</span>
                        <h2 style="color:#8C1116;font-weight:800;font-size:36px;margin:14px 0 18px;">An Internship That Actually <span class="in-grad">Prepares You</span></h2>
                        <p style="color:#4a5568;line-height:1.9;font-size:15px;margin-bottom:24px;">
                            We treat interns like real team members, not coffee-runners. You'll contribute to live projects, receive structured feedback and leave with a portfolio you can be proud of.
                        </p>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-chalkboard-teacher" style="color:#CF171F;font-size:13px;"></i></div>
                                    <span style="color:#374151;font-weight:600;font-size:13px;">Expert Mentors</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-code-branch" style="color:#CF171F;font-size:13px;"></i></div>
                                    <span style="color:#374151;font-weight:600;font-size:13px;">Real Code Reviews</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-users" style="color:#CF171F;font-size:13px;"></i></div>
                                    <span style="color:#374151;font-weight:600;font-size:13px;">Team Collaboration</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-file-alt" style="color:#CF171F;font-size:13px;"></i></div>
                                    <span style="color:#374151;font-weight:600;font-size:13px;">Portfolio Building</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-headset" style="color:#CF171F;font-size:13px;"></i></div>
                                    <span style="color:#374151;font-weight:600;font-size:13px;">Dedicated Guidance</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:36px;height:36px;min-width:36px;background:rgba(207,23,31,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-trophy" style="color:#CF171F;font-size:13px;"></i></div>
                                    <span style="color:#374151;font-weight:600;font-size:13px;">Awards &amp; Recognition</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in-reveal-right" style="background:#fff;border-radius:24px;padding:38px;box-shadow:0 25px 70px rgba(176,23,31,.12);border:1px solid #eef1f7;">
                        <span class="in-kicker">Eligibility</span>
                        <h4 style="color:#8C1116;font-weight:800;font-size:22px;margin:12px 0 18px;">Who Can Apply?</h4>
                        <div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <i class="fas fa-check-circle" style="color:#22c55e;font-size:15px;margin-top:2px;"></i>
                                <span style="color:#4b5563;font-size:14px;">Current B.E./B.Tech, B.Sc., MCA, BCA, or equivalent students</span>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <i class="fas fa-check-circle" style="color:#22c55e;font-size:15px;margin-top:2px;"></i>
                                <span style="color:#4b5563;font-size:14px;">Final-year graduates &amp; recent pass-outs</span>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <i class="fas fa-check-circle" style="color:#22c55e;font-size:15px;margin-top:2px;"></i>
                                <span style="color:#4b5563;font-size:14px;">Self-motivated learners with a passion for tech</span>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <i class="fas fa-check-circle" style="color:#22c55e;font-size:15px;margin-top:2px;"></i>
                                <span style="color:#4b5563;font-size:14px;">Basic knowledge of your chosen domain</span>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <i class="fas fa-check-circle" style="color:#22c55e;font-size:15px;margin-top:2px;"></i>
                                <span style="color:#4b5563;font-size:14px;">Ability to commit 3–6 months (part or full time)</span>
                            </div>
                        </div>
                        <a href="#in-apply" class="btn w-100 fw-bold text-white" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;padding:14px;font-size:15px;box-shadow:0 10px 30px rgba(207,23,31,.3);">
                            Apply Now <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== APPLICATION FORM ========== --}}
    <section style="background:linear-gradient(140deg,#0a0f1e 0%,#101f46 55%,#B0171F 100%);padding:100px 0;position:relative;overflow:hidden;" id="in-apply">
        <div style="position:absolute;width:380px;height:380px;top:-140px;right:-90px;background:radial-gradient(circle,rgba(207,23,31,.22),transparent 70%);border-radius:50%;"></div>
        <div class="in-float" style="position:absolute;width:9px;height:9px;top:22%;left:14%;background:rgba(207,23,31,.5);border-radius:50%;"></div>
        <div class="in-float-d" style="position:absolute;width:6px;height:6px;bottom:25%;left:42%;background:rgba(255,255,255,.3);border-radius:50%;"></div>

        <div class="container" style="position:relative;z-index:2;">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="in-reveal-left">
                        <span class="in-kicker" style="color:#8ab6ff;">Start Today</span>
                        <h2 style="color:#fff;font-weight:800;font-size:38px;margin:12px 0 18px;">Apply for the Internship Program</h2>
                        <p style="color:rgba(255,255,255,.68);font-size:16px;line-height:1.9;margin-bottom:30px;">
                            Fill in your details below and our HR team will reach out within 3–5 working days. Shortlisted candidates move to a quick online interview.
                        </p>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                        <i class="fas fa-bolt" style="color:#4ade80;font-size:13px;"></i>
                                    </div>
                                    <span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Apply in 2 minutes</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                        <i class="fas fa-inbox" style="color:#4ade80;font-size:13px;"></i>
                                    </div>
                                    <span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Response within 5 days</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                        <i class="fas fa-video" style="color:#4ade80;font-size:13px;"></i>
                                    </div>
                                    <span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Online screening interview</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div style="width:34px;height:34px;min-width:34px;background:rgba(74,222,128,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                        <i class="fas fa-calendar-alt" style="color:#4ade80;font-size:13px;"></i>
                                    </div>
                                    <span style="color:rgba(255,255,255,.85);font-size:14px;font-weight:500;">Flexible to join</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in-reveal-right" style="background:#fff;border-radius:24px;padding:40px;box-shadow:0 35px 90px rgba(0,0,0,.4);">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:6px;">
                            <div style="width:48px;height:48px;background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:14px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="fas fa-paper-plane" style="color:#fff;font-size:19px;"></i>
                            </div>
                            <h4 style="color:#8C1116;font-weight:800;margin:0;font-size:18px;">Internship Application</h4>
                        </div>
                        <p style="color:#6a7280;font-size:13px;margin:12px 0 22px;">All fields marked * are required. We'll never share your details.</p>

                        <form id="inApplyForm" method="POST" action="contact.html">
                            @csrf
                            <input type="hidden" name="subject" value="Internship Application">
                            <div class="row g-3">
                                <div class="col-md-6"><input type="text" name="name" class="form-control in-input" placeholder="Full Name *" required></div>
                                <div class="col-md-6"><input type="email" name="email" class="form-control in-input" placeholder="Email Address *" required></div>
                                <div class="col-md-6"><input type="tel" name="phone" class="form-control in-input" placeholder="Phone Number *" required></div>
                                <div class="col-md-6"><input type="text" name="company" class="form-control in-input" placeholder="College / University"></div>
                                <div class="col-12">
                                    <select name="message" class="form-select in-input" required>
                                        <option value="" disabled selected>Select Your Track *</option>
                                        <option value="Internship - Web Development">Web Development</option>
                                        <option value="Internship - App Development">App Development</option>
                                        <option value="Internship - UI/UX Design">UI/UX Design</option>
                                        <option value="Internship - Digital Marketing">Digital Marketing</option>
                                        <option value="Internship - AI & Machine Learning">AI &amp; Machine Learning</option>
                                        <option value="Internship - Data Analytics">Data Analytics</option>
                                        <option value="Internship - Cyber Security">Cyber Security</option>
                                        <option value="Internship - Cloud & DevOps">Cloud &amp; DevOps</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn w-100 text-white fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:12px;padding:15px;font-size:15px;">
                                        <i class="fas fa-paper-plane me-2"></i> Submit Application
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="inApplyAlert" class="d-none mt-3" style="border-radius:10px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== CTA ========== --}}
    <section style="padding:60px 0;background:#0b1120;">
        <div class="container text-center">
            <div class="in-reveal-scale">
                <h2 style="color:#fff;font-weight:800;font-size:34px;">Your Future Starts Here</h2>
                <p style="color:rgba(255,255,255,.7);font-size:17px;margin:12px 0 24px;">Join an internship that fast-tracks your career in technology.</p>
                <a href="#in-apply" class="btn rounded-pill px-5 py-3 fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;font-size:15px;box-shadow:0 12px 30px rgba(207,23,31,.32);">
                    Apply for Internship <i class="fas fa-arrow-up ms-2"></i>
                </a>
            </div>
        </div>
    </section>

</div>
</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* Smooth scroll for #anchor links */
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var t = document.querySelector(this.getAttribute('href'));
            if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        });
    });

    /* Reveal on scroll */
    var els = document.querySelectorAll('.internship-page .in-reveal, .internship-page .in-reveal-left, .internship-page .in-reveal-right, .internship-page .in-reveal-scale');
    if ('IntersectionObserver' in window) {
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) { if (entry.isIntersecting) { entry.target.classList.add('in-visible'); obs.unobserve(entry.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        els.forEach(function (el) { obs.observe(el); });
    } else { els.forEach(function (el) { el.classList.add('in-visible'); }); }
});
</script>

<script>
$(document).ready(function () {
    $('#inApplyForm').on('submit', function (e) {
        e.preventDefault();
        var $form = $(this);
        var $alert = $('#inApplyAlert');
        var $btn = $form.find('button[type="submit"]');
        var originalBtn = $btn.html();

        $btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Sending...');
        $alert.removeClass('d-none alert-success alert-danger').addClass('alert alert-info').html('<i class="fas fa-info-circle me-2"></i> Sending...');

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            success: function (r) {
                $alert.removeClass('alert-info alert-danger').addClass('alert alert-success');
                $alert.html('<i class="fas fa-check-circle me-2"></i>' + (r.message || 'Application submitted!'));
                $form[0].reset();
                $btn.html('<i class="fas fa-check me-2"></i> Submitted!');
                setTimeout(function () {
                    $btn.html(originalBtn);
                    $alert.addClass('d-none');
                }, 5000);
            },
            error: function (xhr) {
                $alert.removeClass('alert-info alert-success').addClass('alert alert-danger');
                var msg = 'Something went wrong. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    msg = Object.values(xhr.responseJSON.errors).flat().join(' ');
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                $alert.html('<i class="fas fa-exclamation-circle me-2"></i>' + msg);
                $btn.html(originalBtn);
            },
            complete: function () {
                $btn.prop('disabled', false);
            }
        });
    });
});
</script>
@endpush