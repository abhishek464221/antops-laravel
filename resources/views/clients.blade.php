@extends('layouts.app')

@section('title', 'Our Valued Clients | Antops Technologies')
@section('meta_description', 'See the companies that trust Antops Technologies with their digital products.')
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
/* ===== PAGE-SCOPED VARIABLES & RESET ===== */
.clients-page {
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
.clients-page *, .clients-page *::before, .clients-page *::after {
  box-sizing: border-box;
}

/* ===== HERO ===== */
.clients-page .pg-hero {
  background: linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);
  padding: 150px 0 90px;
  position: relative;
  overflow: hidden;
}
.clients-page .pg-hero .container { position: relative; z-index: 2; }

/* Floating dots */
.clients-page .pg-float,
.clients-page .pg-float-d {
  position: absolute; border-radius: 50%; opacity: .18; pointer-events: none;
}
.clients-page .pg-float {
  width: 12px; height: 12px; background: var(--brand);
  animation: cpgFloat 4.5s ease-in-out infinite;
}
.clients-page .pg-float-d {
  width: 9px; height: 9px; background: var(--brand-accent);
  animation: cpgFloatD 5.5s ease-in-out 1.2s infinite;
}
@keyframes cpgFloat {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-18px) scale(1.15); }
}
@keyframes cpgFloatD {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(14px) scale(1.1); }
}

/* Breadcrumb */
.clients-page .pg-breadcrumb { padding: 0 0 10px; }
.clients-page .pg-breadcrumb a { color: #CF171F; text-decoration: none; font-size: .88rem; }
.clients-page .pg-breadcrumb span { color: #8C1116; font-size: .88rem; font-weight: 600; }
.clients-page .pg-breadcrumb i { color: var(--text-muted); margin: 0 6px; font-size: .72rem; }

/* Reveal animation */
.clients-page .pg-reveal,
.clients-page .pg-reveal-left,
.clients-page .pg-reveal-right,
.clients-page .pg-reveal-scale {
  opacity: 0; transition: opacity .7s ease, transform .7s ease;
}
.clients-page .pg-reveal { transform: translateY(36px); }
.clients-page .pg-reveal-left { transform: translateX(-40px); }
.clients-page .pg-reveal-right { transform: translateX(40px); }
.clients-page .pg-reveal-scale { transform: scale(.92); }
.clients-page .pg-visible { opacity: 1; transform: translate(0) scale(1); }

/* Kicker */
.clients-page .pg-kicker {
  text-transform: uppercase; font-size: 12px; letter-spacing: 2.5px;
  color: #CF171F; font-weight: 700; display: flex; align-items: center; gap: 12px; margin-bottom: 12px;
}
.clients-page .pg-kicker::before {
  content: ''; display: inline-block; width: 28px; height: 3px;
  background: linear-gradient(90deg,#CF171F,#CF171F); border-radius: 2px;
}

/* Section line */
.clients-page .pg-line {
  width: 62px; height: 3px;
  background: linear-gradient(90deg,#CF171F,#CF171F);
  border-radius: 2px; margin: 18px 0 24px;
}
.clients-page .pg-line.mx-auto { margin-left: auto; margin-right: auto; }

/* Gradient text */
.clients-page .pg-grad {
  background: linear-gradient(135deg, var(--brand-dark), var(--brand));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Card */
.clients-page .pg-card {
  background: var(--white); border-radius: 14px; padding: 32px 28px;
  border: 1px solid #e8edf5; position: relative; overflow: hidden;
  transition: transform .35s ease, box-shadow .35s ease;
}
.clients-page .pg-card::before {
  content: ''; position: absolute; left: 4px; top: 0; width: 4px; height: 0;
  background: linear-gradient(180deg,#CF171F,#CF171F); border-radius: 2px;
  transition: height .4s ease;
}
.clients-page .pg-card:hover { transform: translateY(-9px); box-shadow: 0 18px 48px rgba(176,23,31,.13); }
.clients-page .pg-card:hover::before { height: 100%; }

/* Icon tile */
.clients-page .pg-icon-tile {
  width: 56px; height: 56px; border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; transition: transform .35s ease;
}
.clients-page .pg-icon-tile:hover { transform: rotate(6deg) scale(1.1); }

/* Stars */
.clients-page .pg-stars i { color: #F3636B; font-size: 14px; }

/* CTA dark */
.clients-page .pg-cta {
  background: linear-gradient(135deg, #8C1116 0%, #B0171F 60%, #8C1116 100%);
  color: var(--white); position: relative; overflow: hidden;
}
.clients-page .pg-cta::after {
  content: ''; position: absolute; top: -50%; left: -60%; width: 50%; height: 200%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,.07), transparent);
  transform: skewX(-20deg); animation: cpgShine 5s ease-in-out infinite;
}
@keyframes cpgShine {
  0%,100% { left: -60%; }
  50% { left: 120%; }
}

/* Sections */
.clients-page .pg-section { padding: 90px 0; }
.clients-page .pg-section-dark { background: #8C1116; color: var(--white); }
.clients-page .pg-section-light { background: var(--bg-light); }

/* Buttons */
.clients-page .pg-btn {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 14px 34px; border-radius: 8px; font-weight: 600; font-size: .95rem;
  text-decoration: none; transition: all .3s ease; border: none; cursor: pointer;
}
.clients-page .pg-btn-primary { background: var(--brand); color: var(--white); }
.clients-page .pg-btn-primary:hover { background: var(--brand-dark); color: var(--white); transform: translateY(-2px); }
.clients-page .pg-btn-white { background: var(--white); color: var(--brand-dark); }
.clients-page .pg-btn-white:hover { background: #f0f4ff; transform: translateY(-2px); }
.clients-page .pg-btn-outline { border: 2px solid var(--white); color: var(--white); background: transparent; }
.clients-page .pg-btn-outline:hover { background: var(--white); color: var(--brand-dark); }

/* Stats */
.clients-page .pg-stat { text-align: center; }
.clients-page .pg-stat-number { font-size: 3rem; font-weight: 800; line-height: 1; }
.clients-page .pg-stat-label { font-size: .95rem; color: rgba(255,255,255,.7); margin-top: 8px; }

/* Hero typography */
.clients-page .pg-hero .lead { color: var(--text-muted); }

/* Responsive */
@media (max-width: 767.98px) {
  .clients-page .pg-hero { padding: 120px 0 60px; }
  .clients-page .pg-section { padding: 60px 0; }
  .clients-page .pg-stat-number { font-size: 2.2rem; }
}
</style>
@endpush

@section('content')
<main>

<div class="clients-page">

    {{-- ========== HERO ========== --}}
    <section class="pg-hero">
        <div class="pg-float" style="top:18%;left:8%"></div>
        <div class="pg-float-d" style="top:32%;right:12%"></div>
        <div class="pg-float" style="bottom:22%;left:20%"></div>
        <div class="pg-float-d" style="top:60%;right:25%"></div>
        <div class="pg-float" style="top:45%;left:50%"></div>
        <div class="container">
            <div class="pg-breadcrumb">
                <a href="index.html">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Clients</span>
            </div>
            <div class="pg-reveal">
                <div class="pg-kicker">Our Clients</div>
                <h1 class="display-5 fw-bold mb-3">Our <span class="pg-grad">Valued Clients</span></h1>
                <p class="lead col-lg-7">
                    We partner with industry leaders across the globe, delivering technology solutions that drive growth, efficiency, and innovation.
                </p>
            </div>
        </div>
    </section>

    {{-- ========== CLIENTS GRID ========== --}}
    <section class="pg-section pg-section-light">
        <div class="container">
            <div class="pg-reveal">
                <div class="pg-kicker">Trusted Partners</div>
                <h2 class="fw-bold mb-2">Companies That <span class="pg-grad">Trust Us</span></h2>
                <div class="pg-line"></div>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card text-center h-100">
                        <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;color:#CF171F;">
                            <img src="uploads/clients/2d79fc3e-2db3-4e0a-a1db-71645132d0ea.png" alt="kliquick" style="max-width:48px;max-height:48px;object-fit:contain;">
                        </div>
                        <h5 class="fw-bold mb-2">kliquick</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card text-center h-100">
                        <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;color:#CF171F;">
                            <img src="uploads/clients/a093b020-9aeb-45b3-9857-ba3fe8263eed.png" alt="sANSAPOTE" style="max-width:48px;max-height:48px;object-fit:contain;">
                        </div>
                        <h5 class="fw-bold mb-2">sANSAPOTE</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card text-center h-100">
                        <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;color:#CF171F;">
                            <img src="uploads/clients/61d88d7c-dde7-41d1-aba0-2bfd5079900e.png" alt="cASHEW" style="max-width:48px;max-height:48px;object-fit:contain;">
                        </div>
                        <h5 class="fw-bold mb-2">cASHEW</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card text-center h-100">
                        <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;color:#CF171F;">
                            <img src="uploads/clients/b237ebd4-7985-40f2-b61f-19fa6a19488c.png" alt="hACKPLOIT" style="max-width:48px;max-height:48px;object-fit:contain;">
                        </div>
                        <h5 class="fw-bold mb-2">hACKPLOIT</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card text-center h-100">
                        <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;color:#CF171F;">
                            <img src="uploads/clients/7a7c83a2-4d5a-44eb-85eb-d98c488b8407.png" alt="mEDI" style="max-width:48px;max-height:48px;object-fit:contain;">
                        </div>
                        <h5 class="fw-bold mb-2">mEDI</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card text-center h-100">
                        <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;color:#CF171F;">
                            <img src="uploads/clients/3eb413cf-3c1e-4684-837c-ec20c82be2ce.png" alt="pRO" style="max-width:48px;max-height:48px;object-fit:contain;">
                        </div>
                        <h5 class="fw-bold mb-2">pRO</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========== STATS (DARK) ========== --}}
    <section class="pg-section pg-section-dark">
        <div class="container">
            <div class="pg-reveal text-center mb-5">
                <div class="pg-kicker" style="color:#7eb8ff;">Why Clients Choose Us</div>
                <h2 class="fw-bold text-white">Numbers That <span style="color:#CF171F;">Speak</span></h2>
                <div class="pg-line mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-stat">
                        <div class="pg-stat-number" style="color:#CF171F;" data-pg-count="100">0</div>
                        <div class="pg-stat-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-stat">
                        <div class="pg-stat-number" style="color:#CF171F;" data-pg-count="10">0</div>
                        <div class="pg-stat-label">Countries Served</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-stat">
                        <div class="pg-stat-number" style="color:#CF171F;" data-pg-count="500">0</div>
                        <div class="pg-stat-label">Projects Delivered</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pg-reveal">
                    <div class="pg-stat">
                        <div class="pg-stat-number" style="color:#CF171F;" data-pg-count="5">0</div>
                        <div class="pg-stat-label">Years of Excellence</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== TESTIMONIALS ========== --}}
    <section class="pg-section pg-section-light">
        <div class="container">
            <div class="pg-reveal text-center mb-5">
                <div class="pg-kicker">Testimonials</div>
                <h2 class="fw-bold">What Our Clients <span class="pg-grad">Say</span></h2>
                <div class="pg-line mx-auto"></div>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <i class="fas fa-quote-left mb-3" style="font-size:28px;color:#CF171F;opacity:.35;"></i>
                        <p class="flex-grow-1" style="color:var(--text-muted);font-size:.95rem;line-height:1.75;">
                            "Antops Technologies delivered an exceptional web application that exceeded our expectations. Their team was professional, responsive, and highly skilled."
                        </p>
                        <div class="pg-stars mt-3 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top">
                            <div class="pg-icon-tile" style="width:44px;height:44px;font-size:16px;background:#f0f4ff;color:#CF171F;flex-shrink:0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-bold" style="font-size:.92rem;">John Smith</div>
                                <div style="font-size:.8rem;color:var(--text-muted);">CEO at TechCorp Inc.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <i class="fas fa-quote-left mb-3" style="font-size:28px;color:#CF171F;opacity:.35;"></i>
                        <p class="flex-grow-1" style="color:var(--text-muted);font-size:.95rem;line-height:1.75;">
                            "Working with Antops was a game-changer for our business. They built a stunning mobile app that our users love. Highly recommended!"
                        </p>
                        <div class="pg-stars mt-3 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top">
                            <div class="pg-icon-tile" style="width:44px;height:44px;font-size:16px;background:#f0f4ff;color:#CF171F;flex-shrink:0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-bold" style="font-size:.92rem;">Sarah Johnson</div>
                                <div style="font-size:.8rem;color:var(--text-muted);">Founder at DigitalEdge Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pg-reveal">
                    <div class="pg-card h-100 d-flex flex-column">
                        <i class="fas fa-quote-left mb-3" style="font-size:28px;color:#CF171F;opacity:.35;"></i>
                        <p class="flex-grow-1" style="color:var(--text-muted);font-size:.95rem;line-height:1.75;">
                            "The Antops team has deep technical expertise. They understood our complex requirements and delivered a scalable solution on time."
                        </p>
                        <div class="pg-stars mt-3 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-stroke"></i>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top">
                            <div class="pg-icon-tile" style="width:44px;height:44px;font-size:16px;background:#f0f4ff;color:#CF171F;flex-shrink:0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="fw-bold" style="font-size:.92rem;">Michael Brown</div>
                                <div style="font-size:.8rem;color:var(--text-muted);">CTO at InnovateTech</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========== PARTNERS ========== --}}
    <section class="pg-section pg-section-light" style="padding-top:30px;">
        <div class="container">
            <div class="pg-reveal text-center mb-5">
                <div class="pg-kicker">Our Partners</div>
                <h2 class="fw-bold">Trusted <span class="pg-grad">Partners</span></h2>
                <div class="pg-line mx-auto"></div>
            </div>
            <div class="row g-4 justify-content-center pg-reveal-scale">
                <div class="col-lg-2 col-md-3 col-4 text-center">
                    <div class="pg-card d-flex align-items-center justify-content-center" style="padding:24px 16px;min-height:100px;">
                        <span class="fw-semibold" style="color:var(--text-muted);font-size:.85rem;">TechAlpha</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4 text-center">
                    <div class="pg-card d-flex align-items-center justify-content-center" style="padding:24px 16px;min-height:100px;">
                        <span class="fw-semibold" style="color:var(--text-muted);font-size:.85rem;">CodeNova</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4 text-center">
                    <div class="pg-card d-flex align-items-center justify-content-center" style="padding:24px 16px;min-height:100px;">
                        <span class="fw-semibold" style="color:var(--text-muted);font-size:.85rem;">DataSync</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4 text-center">
                    <div class="pg-card d-flex align-items-center justify-content-center" style="padding:24px 16px;min-height:100px;">
                        <span class="fw-semibold" style="color:var(--text-muted);font-size:.85rem;">CloudBase</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4 text-center">
                    <div class="pg-card d-flex align-items-center justify-content-center" style="padding:24px 16px;min-height:100px;">
                        <span class="fw-semibold" style="color:var(--text-muted);font-size:.85rem;">WebPulse</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4 text-center">
                    <div class="pg-card d-flex align-items-center justify-content-center" style="padding:24px 16px;min-height:100px;">
                        <span class="fw-semibold" style="color:var(--text-muted);font-size:.85rem;">AppForge</span>
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
                    <h2 class="fw-bold text-white mb-2">Ready to Become Our Next Success Story?</h2>
                    <p class="mb-0" style="color:rgba(255,255,255,.7);">Let's discuss how we can help your business grow with the right technology solutions.</p>
                </div>
                <div class="col-lg-4 text-center pg-reveal-right">
                    <a href="contact.html" class="pg-btn pg-btn-white">
                        Get in Touch <i class="fas fa-arrow-right"></i>
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
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.classList.add('pg-visible');
                obs.unobserve(e.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.clients-page .pg-reveal, .clients-page .pg-reveal-left, .clients-page .pg-reveal-right, .clients-page .pg-reveal-scale')
        .forEach(function (el) { obs.observe(el); });

    /* Counter animation */
    var counters = document.querySelectorAll('.clients-page [data-pg-count]');
    var cObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                var el = e.target;
                var target = parseInt(el.getAttribute('data-pg-count'), 10);
                var suffix = '+';
                var current = 0;
                var step = Math.max(1, Math.floor(target / 60));
                var timer = setInterval(function () {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    el.textContent = current + suffix;
                }, 25);
                cObs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    counters.forEach(function (c) { cObs.observe(c); });
})();
</script>
@endpush