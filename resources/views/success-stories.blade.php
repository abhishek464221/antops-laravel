@extends('layouts.app')

@section('title', 'Success Stories | Antops Technologies')
@section('meta_description', 'Real results, real impact. See how Antops Technologies has helped businesses transform with technology.')
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
.success-stories-page { font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', sans-serif; }
.success-stories-page * { box-sizing: border-box; }

/* Bootstrap-style weight utilities (Bootstrap 5.3 doesn't include numeric) */
.success-stories-page .fw-800 { font-weight: 800 !important; }
.success-stories-page .fw-700 { font-weight: 700 !important; }
.success-stories-page .fw-600 { font-weight: 600 !important; }

/* ---- Reveal on scroll ---- */
.success-stories-page .pg-reveal,
.success-stories-page .pg-reveal-left,
.success-stories-page .pg-reveal-right,
.success-stories-page .pg-reveal-scale {
  opacity: 0;
  transition: opacity .7s cubic-bezier(.22,1,.36,1), transform .7s cubic-bezier(.22,1,.36,1);
  will-change: opacity, transform;
}
.success-stories-page .pg-reveal { transform: translateY(36px); }
.success-stories-page .pg-reveal-left { transform: translateX(-40px); }
.success-stories-page .pg-reveal-right { transform: translateX(40px); }
.success-stories-page .pg-reveal-scale { transform: scale(.92); }
.success-stories-page .pg-visible { opacity: 1 !important; transform: translate(0) scale(1) !important; }

.success-stories-page .pg-st1 { transition-delay: .05s; }
.success-stories-page .pg-st2 { transition-delay: .12s; }
.success-stories-page .pg-st3 { transition-delay: .19s; }
.success-stories-page .pg-st4 { transition-delay: .26s; }

/* ---- Floating dots ---- */
@keyframes ssFloat {
  0%, 100% { transform: translateY(0) scale(1); }
  50%      { transform: translateY(-18px) scale(1.15); }
}
.success-stories-page .pg-float,
.success-stories-page .pg-float-d {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  animation: ssFloat 4.5s ease-in-out infinite;
}
.success-stories-page .pg-float-d { animation-delay: -1.2s; }

/* ---- Kicker ---- */
.success-stories-page .pg-kicker {
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2.5px;
  color: #CF171F;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 12px;
}
.success-stories-page .pg-kicker::before {
  content: '';
  display: inline-block;
  width: 28px;
  height: 3px;
  background: linear-gradient(90deg, #CF171F, #CF171F);
  border-radius: 2px;
}
.success-stories-page .pg-kicker.justify-content-center { justify-content: center; }

/* ---- Section line ---- */
.success-stories-page .pg-line {
  width: 62px;
  height: 3px;
  background: linear-gradient(90deg, #CF171F, #CF171F);
  border-radius: 2px;
  margin: 18px 0 24px;
}

/* ---- Gradient text ---- */
.success-stories-page .pg-grad {
  background: linear-gradient(135deg, #B0171F, #CF171F);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* ---- Card ---- */
.success-stories-page .pg-card {
  background: #fff;
  border-radius: 14px;
  border: 1px solid #e8edf5;
  position: relative;
  overflow: hidden;
  transition: transform .35s ease, box-shadow .35s ease;
}
.success-stories-page .pg-card::before {
  content: '';
  position: absolute;
  left: 4px;
  top: 0;
  width: 4px;
  height: 0;
  background: linear-gradient(180deg, #CF171F, #CF171F);
  border-radius: 2px;
  transition: height .4s ease;
  z-index: 2;
}
.success-stories-page .pg-card:hover {
  transform: translateY(-9px);
  box-shadow: 0 18px 48px rgba(176,23,31,.13);
}
.success-stories-page .pg-card:hover::before { height: 100%; }

/* ---- Portfolio ---- */
.success-stories-page .pg-portfolio-img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  display: block;
  transition: transform .5s ease;
}
.success-stories-page .pg-card:hover .pg-portfolio-img { transform: scale(1.05); }
.success-stories-page .pg-portfolio-badge {
  position: absolute;
  top: 14px;
  left: 14px;
  background: linear-gradient(135deg, #CF171F, #B0171F);
  color: #fff;
  font-size: 11px;
  font-weight: 700;
  padding: 5px 14px;
  border-radius: 20px;
  text-transform: uppercase;
  letter-spacing: .5px;
  z-index: 2;
}

/* ---- Quote icon + stars ---- */
.success-stories-page .pg-quote-icon {
  color: #CF171F;
  opacity: .35;
  font-weight: 800;
  line-height: 1;
  padding-left: 4px;
}
.success-stories-page .pg-stars i {
  color: #F59E0B;
  font-size: 14px;
  margin-right: 2px;
}

/* ---- Client badge ---- */
.success-stories-page .pg-client-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: #fff;
  border: 1px solid #e8edf5;
  border-radius: 30px;
  padding: 8px 20px;
  font-size: 13px;
  font-weight: 600;
  color: #5a6a8a;
  box-shadow: 0 4px 14px rgba(176,23,31,.06);
  transition: all .3s ease;
}
.success-stories-page .pg-client-badge:hover {
  border-color: rgba(207,23,31,.3);
  box-shadow: 0 8px 20px rgba(176,23,31,.1);
  transform: translateY(-2px);
}

/* ---- CTA band ---- */
.success-stories-page .pg-cta {
  background: linear-gradient(135deg, #8C1116 0%, #B0171F 60%, #8C1116 100%);
  color: #fff;
  position: relative;
  overflow: hidden;
  border-radius: 24px;
}
.success-stories-page .pg-cta::after {
  content: '';
  position: absolute;
  top: -50%;
  left: -60%;
  width: 50%;
  height: 200%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,.07), transparent);
  transform: skewX(-20deg);
  animation: ssShine 5s ease-in-out infinite;
}
@keyframes ssShine {
  0%, 100% { left: -60%; }
  50% { left: 120%; }
}

/* ---- Stat number ---- */
.success-stories-page .pg-stat-num {
  font-size: 2.4rem;
  line-height: 1;
  letter-spacing: -.5px;
}
@media (min-width: 768px) {
  .success-stories-page .pg-stat-num { font-size: 3rem; }
}
</style>
@endpush

@section('content')
<main>

<div class="success-stories-page">

    {{-- ========== HERO ========== --}}
    <section class="position-relative" style="background:linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);padding:150px 0 90px;overflow:hidden">
        <div class="pg-float" style="width:10px;height:10px;background:rgba(207,23,31,.15);top:30%;left:8%"></div>
        <div class="pg-float pg-float-d" style="width:16px;height:16px;background:rgba(207,23,31,.12);top:55%;left:18%"></div>
        <div class="pg-float" style="width:8px;height:8px;background:rgba(207,23,31,.18);top:22%;right:12%"></div>
        <div class="pg-float pg-float-d" style="width:14px;height:14px;background:rgba(176,23,31,.08);top:65%;right:8%"></div>
        <div class="pg-float" style="width:10px;height:10px;background:rgba(207,23,31,.1);top:80%;left:42%"></div>

        <div class="container position-relative" style="z-index:2">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <nav class="pg-reveal mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0" style="background:none;padding:0">
                            <li class="breadcrumb-item"><a href="index.html" style="color:#CF171F;text-decoration:none">Home</a></li>
                            <li class="breadcrumb-item active" style="color:#8C1116;font-weight:600">Success Stories</li>
                        </ol>
                    </nav>

                    <h1 class="pg-reveal pg-st1 display-4 fw-800 mb-3" style="color:#8C1116">
                        <span class="pg-grad">Success Stories</span>
                    </h1>
                    <p class="pg-reveal pg-st2 fs-5 mx-auto" style="max-width:640px;color:#4a5568;line-height:1.75">
                        Real results, real impact. See how we've helped businesses transform with technology.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== STATS STRIP ========== --}}
    <section style="background:linear-gradient(135deg,#0b1120,#101f46);padding:52px 0" class="position-relative overflow-hidden">
        <div class="pg-float" style="width:8px;height:8px;background:rgba(207,23,31,.12);top:20%;left:10%"></div>
        <div class="pg-float pg-float-d" style="width:12px;height:12px;background:rgba(207,23,31,.1);top:60%;right:15%"></div>

        <div class="container position-relative" style="z-index:2">
            <div class="row text-center gy-4">
                <div class="col-6 col-lg-3 pg-reveal pg-st1">
                    <div class="pg-stat-num text-white fw-800 pg-counter" data-count="150">0</div>
                    <div style="color:rgba(255,255,255,.55);font-size:14px;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin-top:6px">Projects Delivered</div>
                </div>
                <div class="col-6 col-lg-3 pg-reveal pg-st2">
                    <div class="pg-stat-num text-white fw-800 pg-counter" data-count="100">0</div>
                    <div style="color:rgba(255,255,255,.55);font-size:14px;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin-top:6px">Happy Clients</div>
                </div>
                <div class="col-6 col-lg-3 pg-reveal pg-st3">
                    <div class="pg-stat-num text-white fw-800 pg-counter" data-count="10">0</div>
                    <div style="color:rgba(255,255,255,.55);font-size:14px;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin-top:6px">Countries</div>
                </div>
                <div class="col-6 col-lg-3 pg-reveal pg-st4">
                    <div class="pg-stat-num text-white fw-800 pg-counter" data-count="5">0</div>
                    <div style="color:rgba(255,255,255,.55);font-size:14px;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin-top:6px">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== CASE STUDIES / PORTFOLIO ========== --}}
    <section class="py-5" style="padding-top:100px!important;padding-bottom:80px!important">
        <div class="container">
            <div class="text-center mb-5">
                <div class="pg-kicker justify-content-center pg-reveal">Portfolio</div>
                <div class="pg-line mx-auto pg-reveal pg-st1"></div>
                <h2 class="pg-reveal pg-st2 display-6 fw-800" style="color:#8C1116">
                    Our Work <span class="pg-grad">Speaks for Itself</span>
                </h2>
            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6 pg-reveal pg-st1">
                    <a href="portfolio/medjections-medical-research-mentorship-clinical-guidance-platform.html" class="text-decoration-none">
                        <div class="pg-card p-0 h-100">
                            <div class="position-relative">
                                <img src="uploads/portfolios/4b9af48a-1f92-4e8e-9350-9f1d18e2cb94.png" alt="Medjections – Medical Research, Mentorship &amp; Clinical Guidance Platform" class="pg-portfolio-img">
                                <span class="pg-portfolio-badge">Web Development</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-700 mb-2" style="color:#8C1116;font-size:18px">Medjections – Medical Research, Mentorship &amp; Clinical Guidance Platform</h5>
                                <p style="color:#6b7280;font-size:14px;line-height:1.7;margin-bottom:14px">
                                    A modern medical research and mentorship platform designed to help medical stude...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal pg-st2">
                    <a href="portfolio/pro-bangalore-real-estate-property-listing-management-platform.html" class="text-decoration-none">
                        <div class="pg-card p-0 h-100">
                            <div class="position-relative">
                                <img src="uploads/portfolios/37838ec1-2899-4a61-86af-a86fd5e05b64.png" alt="PRO Bangalore – Real Estate Property Listing &amp; Management Platform" class="pg-portfolio-img">
                                <span class="pg-portfolio-badge">Web Development</span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-700 mb-2" style="color:#8C1116;font-size:18px">PRO Bangalore – Real Estate Property Listing &amp; Management Platform</h5>
                                <p style="color:#6b7280;font-size:14px;line-height:1.7;margin-bottom:14px">
                                    A modern real estate platform designed to help users discover residential, comme...
                                </p>
                                <div class="d-flex align-items-center gap-2" style="color:#4a5568;font-size:13px">
                                    <i class="fas fa-user-circle" style="color:#CF171F"></i>
                                    <span class="fw-600">Deepak</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="text-center mt-5 pg-reveal">
                <a href="portfolio.html" class="btn btn-lg px-5 py-3 fw-700" style="border-radius:12px;background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;border:none;font-size:15px;letter-spacing:.5px;transition:transform .3s,box-shadow .3s" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 26px rgba(207,23,31,.3)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    View All Projects <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- ========== TESTIMONIALS ========== --}}
    <section class="py-5 position-relative" style="background:linear-gradient(180deg,#f8faff 0%,#ffffff 100%);padding-top:100px!important;padding-bottom:100px!important">
        <div class="pg-float" style="width:12px;height:12px;background:rgba(207,23,31,.08);top:15%;left:5%"></div>
        <div class="pg-float pg-float-d" style="width:8px;height:8px;background:rgba(207,23,31,.1);top:70%;right:7%"></div>

        <div class="container position-relative" style="z-index:2">
            <div class="text-center mb-5">
                <div class="pg-kicker justify-content-center pg-reveal">Testimonials</div>
                <div class="pg-line mx-auto pg-reveal pg-st1"></div>
                <h2 class="pg-reveal pg-st2 display-6 fw-800" style="color:#8C1116">
                    What Our <span class="pg-grad">Clients Say</span>
                </h2>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6 pg-reveal pg-st1">
                    <div class="pg-card h-100 d-flex flex-column p-4">
                        <div class="pg-quote-icon mb-3" style="font-size:52px;line-height:1">&ldquo;</div>
                        <p class="flex-grow-1" style="color:#4a5568;font-size:15px;line-height:1.8;margin-bottom:22px">
                            Antops Technologies delivered an exceptional web application that exceeded our expectations. Their team was professional, responsive, and highly skilled.
                        </p>
                        <div class="pg-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3" style="border-top:1px solid rgba(176,23,31,.06)">
                            <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg,#eaf0ff,#f5f8ff);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;color:#CF171F;flex-shrink:0;border:2px solid #eaf0ff">
                                J
                            </div>
                            <div>
                                <div class="fw-700" style="color:#8C1116;font-size:15px">John Smith</div>
                                <div style="color:#6b7280;font-size:13px">CEO, TechCorp Inc.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal pg-st2">
                    <div class="pg-card h-100 d-flex flex-column p-4">
                        <div class="pg-quote-icon mb-3" style="font-size:52px;line-height:1">&ldquo;</div>
                        <p class="flex-grow-1" style="color:#4a5568;font-size:15px;line-height:1.8;margin-bottom:22px">
                            Working with Antops was a game-changer for our business. They built a stunning mobile app that our users love. Highly recommended!
                        </p>
                        <div class="pg-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3" style="border-top:1px solid rgba(176,23,31,.06)">
                            <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg,#eaf0ff,#f5f8ff);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;color:#CF171F;flex-shrink:0;border:2px solid #eaf0ff">
                                S
                            </div>
                            <div>
                                <div class="fw-700" style="color:#8C1116;font-size:15px">Sarah Johnson</div>
                                <div style="color:#6b7280;font-size:13px">Founder, DigitalEdge Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal pg-st3">
                    <div class="pg-card h-100 d-flex flex-column p-4">
                        <div class="pg-quote-icon mb-3" style="font-size:52px;line-height:1">&ldquo;</div>
                        <p class="flex-grow-1" style="color:#4a5568;font-size:15px;line-height:1.8;margin-bottom:22px">
                            The Antops team has deep technical expertise. They understood our complex requirements and delivered a scalable solution on time.
                        </p>
                        <div class="pg-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star" style="opacity:.35"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3" style="border-top:1px solid rgba(176,23,31,.06)">
                            <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg,#eaf0ff,#f5f8ff);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;color:#CF171F;flex-shrink:0;border:2px solid #eaf0ff">
                                M
                            </div>
                            <div>
                                <div class="fw-700" style="color:#8C1116;font-size:15px">Michael Brown</div>
                                <div style="color:#6b7280;font-size:13px">CTO, InnovateTech</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal pg-st4">
                    <div class="pg-card h-100 d-flex flex-column p-4">
                        <div class="pg-quote-icon mb-3" style="font-size:52px;line-height:1">&ldquo;</div>
                        <p class="flex-grow-1" style="color:#4a5568;font-size:15px;line-height:1.8;margin-bottom:22px">
                            Our online presence transformed after Antops redesigned our website. Traffic increased by 200% and conversions doubled.
                        </p>
                        <div class="pg-stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3" style="border-top:1px solid rgba(176,23,31,.06)">
                            <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg,#eaf0ff,#f5f8ff);display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:800;color:#CF171F;flex-shrink:0;border:2px solid #eaf0ff">
                                E
                            </div>
                            <div>
                                <div class="fw-700" style="color:#8C1116;font-size:15px">Emily Davis</div>
                                <div style="color:#6b7280;font-size:13px">Marketing Director, GrowthLab</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========== TRUSTED BY / CLIENTS ========== --}}
    <section class="py-5" style="padding-top:80px!important;padding-bottom:100px!important">
        <div class="container">
            <div class="text-center mb-5">
                <div class="pg-kicker justify-content-center pg-reveal">Our Clients</div>
                <div class="pg-line mx-auto pg-reveal pg-st1"></div>
                <h2 class="pg-reveal pg-st2 display-6 fw-800" style="color:#8C1116">
                    Trusted by <span class="pg-grad">Industry Leaders</span>
                </h2>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3 pg-reveal pg-st3">

                <span class="pg-client-badge">
                    <img src="uploads/clients/2d79fc3e-2db3-4e0a-a1db-71645132d0ea.png" alt="kliquick" style="height:28px;width:auto;object-fit:contain">
                    kliquick
                </span>
                <span class="pg-client-badge">
                    <img src="uploads/clients/a093b020-9aeb-45b3-9857-ba3fe8263eed.png" alt="sANSAPOTE" style="height:28px;width:auto;object-fit:contain">
                    sANSAPOTE
                </span>
                <span class="pg-client-badge">
                    <img src="uploads/clients/61d88d7c-dde7-41d1-aba0-2bfd5079900e.png" alt="cASHEW" style="height:28px;width:auto;object-fit:contain">
                    cASHEW
                </span>
                <span class="pg-client-badge">
                    <img src="uploads/clients/b237ebd4-7985-40f2-b61f-19fa6a19488c.png" alt="hACKPLOIT" style="height:28px;width:auto;object-fit:contain">
                    hACKPLOIT
                </span>
                <span class="pg-client-badge">
                    <img src="uploads/clients/7a7c83a2-4d5a-44eb-85eb-d98c488b8407.png" alt="mEDI" style="height:28px;width:auto;object-fit:contain">
                    mEDI
                </span>
                <span class="pg-client-badge">
                    <img src="uploads/clients/3eb413cf-3c1e-4684-837c-ec20c82be2ce.png" alt="pRO" style="height:28px;width:auto;object-fit:contain">
                    pRO
                </span>

            </div>
        </div>
    </section>

    {{-- ========== CTA ========== --}}
    <section class="py-5" style="padding-top:40px!important;padding-bottom:100px!important">
        <div class="container">
            <div class="pg-cta p-5 p-lg-5 text-center position-relative" style="z-index:2">
                <div class="position-relative" style="z-index:2">
                    <div class="pg-kicker justify-content-center pg-reveal" style="color:rgba(255,255,255,.7)">
                        <span style="color:#60a5fa">Let's Talk</span>
                    </div>
                    <h2 class="pg-reveal pg-st1 display-6 fw-800 text-white mb-3">
                        Ready to Be Our Next<br class="d-none d-md-block">
                        <span style="color:#CF171F">Success Story?</span>
                    </h2>
                    <p class="pg-reveal pg-st2 mx-auto mb-4" style="max-width:520px;color:rgba(255,255,255,.65);font-size:16px;line-height:1.7">
                        Let's build something extraordinary together. Reach out today and let's start your transformation journey.
                    </p>
                    <a href="contact.html" class="pg-reveal pg-st3 btn btn-lg px-5 py-3 fw-700" style="border-radius:12px;background:linear-gradient(135deg,#CF171F,#ff8f5e);color:#fff;border:none;font-size:15px;letter-spacing:.5px;transition:transform .3s,box-shadow .3s" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 26px rgba(207,23,31,.35)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                        Get in Touch <i class="fas fa-arrow-right ms-2"></i>
                    </a>
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
    /* Reveal on scroll */
    var reveals = document.querySelectorAll('.success-stories-page .pg-reveal, .success-stories-page .pg-reveal-left, .success-stories-page .pg-reveal-right, .success-stories-page .pg-reveal-scale');
    if (reveals.length && 'IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('pg-visible'); io.unobserve(e.target); }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('pg-visible'); });
    }

    /* Counter animation */
    var counters = document.querySelectorAll('.success-stories-page .pg-counter');
    if (counters.length && 'IntersectionObserver' in window) {
        var cio = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    var el = e.target;
                    var target = parseInt(el.getAttribute('data-count'), 10) || 0;
                    var dur = 1800;
                    var startTime = null;
                    function step(ts) {
                        if (!startTime) startTime = ts;
                        var p = Math.min((ts - startTime) / dur, 1);
                        var eased = 1 - Math.pow(1 - p, 3);
                        el.textContent = Math.floor(eased * target) + '+';
                        if (p < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                    cio.unobserve(el);
                }
            });
        }, { threshold: 0.4 });
        counters.forEach(function (el) { cio.observe(el); });
    } else {
        counters.forEach(function (el) {
            var t = parseInt(el.getAttribute('data-count'), 10) || 0;
            el.textContent = t + '+';
        });
    }
})();
</script>
@endpush