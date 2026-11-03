@extends('layouts.app')

@section('title', 'Industries We Serve | Antops Technologies')
@section('meta_description', 'Explore the industry verticals Antops Technologies serves with specialized technology solutions.')
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
.industries-page {
  --brand-dark: #B0171F;
  --brand: #CF171F;
  --brand-accent: #CF171F;
  --text-dark: #8C1116;
  --text-muted: #5a6a8a;
  --bg-light: #f7f9fc;
  --white: #fff;
  font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', sans-serif;
  color: #1a1a2e;
}
.industries-page *,
.industries-page *::before,
.industries-page *::after {
  box-sizing: border-box;
}

/* ---- Hero ---- */
.industries-page .pg-hero {
  background: linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);
  padding: 150px 0 90px;
  position: relative;
  overflow: hidden;
}
.industries-page .pg-hero .container { position: relative; z-index: 2; }

/* ---- Floating dots ---- */
.industries-page .pg-float,
.industries-page .pg-float-d {
  position: absolute;
  border-radius: 50%;
  opacity: .18;
  pointer-events: none;
}
.industries-page .pg-float {
  width: 12px; height: 12px; background: var(--brand);
  animation: indFloat 4.5s ease-in-out infinite;
}
.industries-page .pg-float-d {
  width: 9px; height: 9px; background: var(--brand-accent);
  animation: indFloatD 5.5s ease-in-out 1.2s infinite;
}
@keyframes indFloat {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-18px) scale(1.15); }
}
@keyframes indFloatD {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(14px) scale(1.1); }
}

/* ---- Breadcrumb ---- */
.industries-page .pg-breadcrumb { padding: 0 0 10px; }
.industries-page .pg-breadcrumb a { color: #CF171F; text-decoration: none; font-size: .88rem; }
.industries-page .pg-breadcrumb span { color: #8C1116; font-size: .88rem; font-weight: 600; }
.industries-page .pg-breadcrumb i { color: var(--text-muted); margin: 0 6px; font-size: .72rem; }

/* ---- Reveal ---- */
.industries-page .pg-reveal,
.industries-page .pg-reveal-left,
.industries-page .pg-reveal-right,
.industries-page .pg-reveal-scale {
  opacity: 0;
  transition: opacity .7s ease, transform .7s ease;
}
.industries-page .pg-reveal { transform: translateY(36px); }
.industries-page .pg-reveal-left { transform: translateX(-40px); }
.industries-page .pg-reveal-right { transform: translateX(40px); }
.industries-page .pg-reveal-scale { transform: scale(.92); }
.industries-page .pg-visible { opacity: 1 !important; transform: translate(0) scale(1) !important; }

/* ---- Kicker ---- */
.industries-page .pg-kicker {
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
.industries-page .pg-kicker::before {
  content: '';
  display: inline-block;
  width: 28px;
  height: 3px;
  background: linear-gradient(90deg,#CF171F,#CF171F);
  border-radius: 2px;
}

/* ---- Section line ---- */
.industries-page .pg-line {
  width: 62px;
  height: 3px;
  background: linear-gradient(90deg,#CF171F,#CF171F);
  border-radius: 2px;
  margin: 18px 0 24px;
}
.industries-page .pg-line.mx-auto { margin-left: auto; margin-right: auto; }

/* ---- Gradient text ---- */
.industries-page .pg-grad {
  background: linear-gradient(135deg, var(--brand-dark), var(--brand));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* ---- Card ---- */
.industries-page .pg-card {
  background: var(--white);
  border-radius: 14px;
  padding: 32px 28px;
  border: 1px solid #e8edf5;
  position: relative;
  overflow: hidden;
  transition: transform .35s ease, box-shadow .35s ease;
}
.industries-page .pg-card::before {
  content: '';
  position: absolute;
  left: 4px;
  top: 0;
  width: 4px;
  height: 0;
  background: linear-gradient(180deg,#CF171F,#CF171F);
  border-radius: 2px;
  transition: height .4s ease;
}
.industries-page .pg-card:hover {
  transform: translateY(-9px);
  box-shadow: 0 18px 48px rgba(176,23,31,.13);
}
.industries-page .pg-card:hover::before { height: 100%; }

/* ---- Icon tile ---- */
.industries-page .pg-icon-tile {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  transition: transform .35s ease;
}
.industries-page .pg-icon-tile:hover { transform: rotate(6deg) scale(1.1); }

/* ---- CTA dark ---- */
.industries-page .pg-cta {
  background: linear-gradient(135deg, #8C1116 0%, #B0171F 60%, #8C1116 100%);
  color: var(--white);
  position: relative;
  overflow: hidden;
}
.industries-page .pg-cta::after {
  content: '';
  position: absolute;
  top: -50%;
  left: -60%;
  width: 50%;
  height: 200%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,.07), transparent);
  transform: skewX(-20deg);
  animation: indShine 5s ease-in-out infinite;
}
@keyframes indShine {
  0%,100% { left: -60%; }
  50% { left: 120%; }
}

/* ---- Utility ---- */
.industries-page .pg-section { padding: 90px 0; }
.industries-page .pg-section-dark { background: #8C1116; color: var(--white); }
.industries-page .pg-section-light { background: var(--bg-light); }

.industries-page .pg-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 34px;
  border-radius: 8px;
  font-weight: 600;
  font-size: .95rem;
  text-decoration: none;
  transition: all .3s ease;
  border: none;
  cursor: pointer;
}
.industries-page .pg-btn-primary { background: var(--brand); color: var(--white); }
.industries-page .pg-btn-primary:hover { background: var(--brand-dark); color: var(--white); transform: translateY(-2px); }
.industries-page .pg-btn-white { background: var(--white); color: var(--brand-dark); }
.industries-page .pg-btn-white:hover { background: #f0f4ff; transform: translateY(-2px); }

/* ---- Industry tint backgrounds per card ---- */
.industries-page .pg-tile-healthcare   { background: #e8f5e9; color: #2e7d32; }
.industries-page .pg-tile-ecommerce    { background: #e3f2fd; color: #1565c0; }
.industries-page .pg-tile-realestate   { background: #fff3e0; color: #e65100; }
.industries-page .pg-tile-education    { background: #f3e5f5; color: #7b1fa2; }
.industries-page .pg-tile-finance      { background: #e0f7fa; color: #00838f; }
.industries-page .pg-tile-travel       { background: #fce4ec; color: #c62828; }
.industries-page .pg-tile-logistics    { background: #ede7f6; color: #4527a0; }
.industries-page .pg-tile-manufacturing { background: #e8eaf6; color: #283593; }

@media (max-width: 767.98px) {
  .industries-page .pg-hero { padding: 120px 0 60px; }
  .industries-page .pg-section { padding: 60px 0; }
}
</style>
@endpush

@section('content')
<main>

<div class="industries-page">

    {{-- ========== HERO ========== --}}
    <section class="pg-hero">
        <div class="pg-float" style="top:18%;left:8%"></div>
        <div class="pg-float-d" style="top:32%;right:12%"></div>
        <div class="pg-float" style="bottom:22%;left:20%"></div>
        <div class="pg-float-d" style="top:55%;right:28%"></div>
        <div class="pg-float" style="top:40%;left:55%"></div>
        <div class="container">
            <div class="pg-breadcrumb">
                <a href="index.html">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Industries</span>
            </div>
            <div class="pg-reveal">
                <div class="pg-kicker">Industries</div>
                <h1 class="display-5 fw-bold mb-3">Industries <span class="pg-grad">We Serve</span></h1>
                <p class="lead col-lg-7" style="color:var(--text-muted);">
                    We deliver specialized technology solutions tailored to the unique challenges and opportunities across diverse industry verticals.
                </p>
            </div>
        </div>
    </section>

    {{-- ========== INDUSTRY GRID ========== --}}
    <section class="pg-section pg-section-light">
        <div class="container">
            <div class="pg-reveal">
                <div class="pg-kicker">Our Expertise</div>
                <h2 class="fw-bold mb-2">Solutions Built for <span class="pg-grad">Your Industry</span></h2>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-healthcare">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Healthcare</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            Custom healthcare software solutions for hospitals, clinics, and health-tech startups.
                        </p>
                        <a href="industries/healthcare.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-ecommerce">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h5 class="fw-bold mb-2">E-Commerce &amp; Retail</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            Scalable e-commerce platforms and retail management systems.
                        </p>
                        <a href="industries/ecommerce-retail.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-realestate">
                            <i class="fas fa-house-chimney"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Real Estate</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            Property management systems, listing platforms, and CRM solutions.
                        </p>
                        <a href="industries/real-estate.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-education">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Education &amp; E-Learning</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            LMS platforms, virtual classrooms, and Ed-Tech solutions.
                        </p>
                        <a href="industries/education-elearning.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-finance">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Finance &amp; Banking</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            Secure fintech applications, payment gateways, and banking software.
                        </p>
                        <a href="industries/finance-banking.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-travel">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Travel &amp; Hospitality</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            Booking engines, hotel management, and travel platforms.
                        </p>
                        <a href="industries/travel-hospitality.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-logistics">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Logistics &amp; Supply Chain</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            Fleet management, warehouse solutions, and supply chain optimization.
                        </p>
                        <a href="industries/logistics-supply-chain.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <div class="pg-icon-tile mb-4 pg-tile-manufacturing">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Manufacturing</h5>
                        <p class="flex-grow-1 mb-3" style="color:var(--text-muted);font-size:.9rem;line-height:1.7;">
                            ERP systems, production tracking, and industrial automation.
                        </p>
                        <a href="industries/manufacturing.html" class="pg-btn pg-btn-primary" style="padding:10px 22px;font-size:.85rem;">
                            Learn More <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========== WHY ANTops ========== --}}
    <section class="pg-section pg-section-dark">
        <div class="container">
            <div class="pg-reveal text-center mb-5">
                <div class="pg-kicker" style="color:#7eb8ff;">Why Antops</div>
                <h2 class="fw-bold text-white">What Sets Us <span style="color:#CF171F;">Apart</span></h2>
                <div class="pg-line mx-auto"></div>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card h-100" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1);">
                        <div class="pg-icon-tile mb-4" style="background:rgba(207,23,31,.2);color:#7eb8ff;">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">Domain Expertise</h5>
                        <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.7;">
                            Deep industry knowledge across verticals enables us to understand your business context, regulatory requirements, and market dynamics.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card h-100" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1);">
                        <div class="pg-icon-tile mb-4" style="background:rgba(207,23,31,.2);color:#CF171F;">
                            <i class="fas fa-wand-magic-sparkles"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">Custom Solutions</h5>
                        <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.7;">
                            No one-size-fits-all approach. We craft tailored solutions that align with your specific workflows, scale, and growth objectives.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card h-100" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1);">
                        <div class="pg-icon-tile mb-4" style="background:rgba(207,23,31,.2);color:#7eb8ff;">
                            <i class="fas fa-route"></i>
                        </div>
                        <h5 class="fw-bold text-white mb-2">End-to-End Delivery</h5>
                        <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.7;">
                            From strategy and design to development, deployment, and ongoing support — we own the entire lifecycle of your digital products.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========== CTA ========== --}}
    <section class="pg-cta py-5">
        <div class="container position-relative" style="z-index:2;">
            <div class="row align-items-center justify-content-between text-center text-md-start">
                <div class="col-lg-7 mb-4 mb-md-0 pg-reveal-left">
                    <h2 class="fw-bold text-white mb-2">Looking for Industry-Specific Solutions?</h2>
                    <p class="mb-0" style="color:rgba(255,255,255,.7);">Let's talk about how our expertise in your domain can accelerate your digital transformation.</p>
                </div>
                <div class="col-lg-4 text-center pg-reveal-right">
                    <a href="contact.html" class="pg-btn pg-btn-white">
                        Contact Us <i class="fas fa-arrow-right"></i>
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
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.classList.add('pg-visible');
                obs.unobserve(e.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.industries-page .pg-reveal, .industries-page .pg-reveal-left, .industries-page .pg-reveal-right, .industries-page .pg-reveal-scale')
        .forEach(function (el) { obs.observe(el); });
})();
</script>
@endpush