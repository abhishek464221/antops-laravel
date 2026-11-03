@extends('layouts.app')

@section('title', $tech['meta_title'])
@section('meta_description', $tech['meta_description'])
@section('meta_keywords', $tech['meta_keywords'] ?? 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')

@push('styles')
<style>
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --brand-dark: #B0171F;
  --brand: #CF171F;
  --brand-accent: #CF171F;
  --text-dark: #8C1116;
  --text-muted: #5a6a8a;
  --bg-light: #f7f9fc;
  --white: #fff;
}

body { font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', sans-serif; color: #1a1a2e; overflow-x: hidden; }

/* ── Hero ── */
.pg-hero {
  background: linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);
  padding: 150px 0 90px;
  position: relative;
  overflow: hidden;
}
.pg-hero .container { position: relative; z-index: 2; }

/* ── Floating dots ── */
.pg-float, .pg-float-d {
  position: absolute; border-radius: 50%; opacity: .18; pointer-events: none;
}
.pg-float {
  width: 12px; height: 12px; background: var(--brand);
  animation: pgFloat 4.5s ease-in-out infinite;
}
.pg-float-d {
  width: 9px; height: 9px; background: var(--brand-accent);
  animation: pgFloatD 5.5s ease-in-out 1.2s infinite;
}
@keyframes pgFloat {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-18px) scale(1.15); }
}
@keyframes pgFloatD {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(14px) scale(1.1); }
}

/* ── Breadcrumb ── */
.pg-breadcrumb { padding: 0 0 10px; }
.pg-breadcrumb a { color: #CF171F; text-decoration: none; font-size: .88rem; }
.pg-breadcrumb span { color: #8C1116; font-size: .88rem; font-weight: 600; }
.pg-breadcrumb i { color: var(--text-muted); margin: 0 6px; font-size: .72rem; }

/* ── Reveal ── */
.pg-reveal, .pg-reveal-left, .pg-reveal-right, .pg-reveal-scale {
  opacity: 0; transition: opacity .7s ease, transform .7s ease;
}
.pg-reveal { transform: translateY(36px); }
.pg-reveal-left { transform: translateX(-40px); }
.pg-reveal-right { transform: translateX(40px); }
.pg-reveal-scale { transform: scale(.92); }
.pg-visible { opacity: 1; transform: translate(0) scale(1); }

/* ── Kicker ── */
.pg-kicker {
  text-transform: uppercase; font-size: 12px; letter-spacing: 2.5px;
  color: #CF171F; font-weight: 700; display: flex; align-items: center; gap: 12px; margin-bottom: 12px;
}
.pg-kicker::before {
  content: ''; display: inline-block; width: 28px; height: 3px;
  background: linear-gradient(90deg,#CF171F,#CF171F); border-radius: 2px;
}

/* ── Gradient text ── */
.pg-grad {
  background: linear-gradient(135deg, var(--brand-dark), var(--brand));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* ── Card ── */
.pg-card {
  background: var(--white); border-radius: 14px; padding: 32px 28px;
  border: 1px solid #e8edf5; position: relative; overflow: hidden;
  transition: transform .35s ease, box-shadow .35s ease;
}
.pg-card::before {
  content: ''; position: absolute; left: 4px; top: 0; width: 4px; height: 0;
  background: linear-gradient(180deg,#CF171F,#CF171F); border-radius: 2px;
  transition: height .4s ease;
}
.pg-card:hover { transform: translateY(-9px); box-shadow: 0 18px 48px rgba(176,23,31,.13); }
.pg-card:hover::before { height: 100%; }

/* ── Icon tile ── */
.pg-icon-tile {
  width: 60px; height: 60px; border-radius: 16px;
  display: flex; align-items: center; justify-content: center;
  font-size: 26px; background: linear-gradient(135deg,#eef4ff,#dce8fc); color: var(--brand);
  transition: transform .35s ease, background .35s ease;
}
.pg-card:hover .pg-icon-tile { transform: rotate(6deg) scale(1.1); }

/* ── FAQ accordion ── */
.pg-faq-item { background: var(--white); border-radius: 14px; border: 1px solid #e8edf5; overflow: hidden; margin-bottom: 12px; }
.pg-faq-item .pg-faq-q {
  width: 100%; text-align: left; background: none; border: none; padding: 20px 24px; font-weight: 600;
  font-size: 15px; color: var(--text-dark); cursor: pointer; display: flex; align-items: center; gap: 14px;
  transition: color .3s;
}
.pg-faq-item .pg-faq-q:hover { color: var(--brand); }
.pg-faq-item .pg-faq-q i {
  margin-left: auto; width: 28px; min-width: 28px; height: 28px; border-radius: 50%;
  background: #f0f4ff; color: var(--brand); font-size: 12px; display: flex; align-items: center; justify-content: center;
  transition: transform .3s, background .3s;
}
.pg-faq-item.open .pg-faq-q i { transform: rotate(180deg); background: var(--brand); color: var(--white); }
.pg-faq-a { padding: 0 24px 20px; color: var(--text-muted); font-size: 14px; line-height: 1.8; display: none; }
.pg-faq-item.open .pg-faq-a { display: block; }

/* ── CTA dark ── */
.pg-cta {
  background: linear-gradient(135deg, #8C1116 0%, #B0171F 60%, #8C1116 100%);
  color: var(--white); position: relative; overflow: hidden;
}
.pg-cta::after {
  content: ''; position: absolute; top: -50%; left: -60%; width: 50%; height: 200%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,.07), transparent);
  transform: skewX(-20deg); animation: pgShine 5s ease-in-out infinite;
}
@keyframes pgShine {
  0%,100% { left: -60%; }
  50% { left: 120%; }
}

/* ── Utility ── */
.pg-section { padding: 90px 0; }
.pg-section-dark { background: #8C1116; color: var(--white); }
.pg-section-light { background: var(--bg-light); }

.pg-btn {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 14px 34px; border-radius: 8px; font-weight: 600; font-size: .95rem;
  text-decoration: none; transition: all .3s ease; border: none; cursor: pointer;
}
.pg-btn-primary { background: var(--brand); color: var(--white); }
.pg-btn-primary:hover { background: var(--brand-dark); color: var(--white); transform: translateY(-2px); }
.pg-btn-white { background: var(--white); color: var(--brand-dark); }
.pg-btn-white:hover { background: #f0f4ff; transform: translateY(-2px); }
.pg-btn-orange { background: var(--brand-accent); color: var(--white); }
.pg-btn-orange:hover { background: #e65c2d; color: var(--white); transform: translateY(-2px); }

@media (max-width: 767.98px) {
  .pg-hero { padding: 120px 0 60px; }
  .pg-section { padding: 60px 0; }
}
</style>
@endpush

@section('content')

<!-- ══════════════ HERO ══════════════ -->
<section class="pg-hero">
  <div class="pg-float" style="top:18%;left:8%"></div>
  <div class="pg-float-d" style="top:32%;right:12%"></div>
  <div class="pg-float" style="bottom:22%;left:20%"></div>
  <div class="pg-float-d" style="top:60%;right:25%"></div>
  <div class="container">
    <div class="pg-breadcrumb">
      <a href="{{ url('/') }}">Home</a>
      <i class="fas fa-chevron-right"></i>
      <a href="{{ url('technologies') }}">Technologies</a>
      <i class="fas fa-chevron-right"></i>
      <span>{{ $tech['title'] }}</span>
    </div>
    <div class="d-flex flex-wrap align-items-center gap-4 pg-reveal">
      <div class="pg-icon-tile" style="width:72px;height:72px;font-size:34px;background:var(--brand);color:var(--white);box-shadow:0 12px 36px rgba(207,23,31,.35);">
        <i class="{{ $tech['icon_class'] }}"></i>
      </div>
      <div>
        <h1 class="display-5 fw-bold mb-2" style="max-width:800px;">{{ $tech['hero_title'] }}</h1>
        <p class="lead col-lg-9 mb-0" style="color:var(--text-muted);">{{ $tech['hero_lead'] }}</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ ABOUT (Expertise) ══════════════ -->
<section class="pg-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-8 mx-auto text-center pg-reveal-right">
        <div class="pg-kicker">Our Expertise</div>
        <h2 class="fw-bold mb-3" style="color:var(--text-dark);">{{ $tech['expertise_title'] }}</h2>
        <div style="color:var(--text-muted);line-height:1.85;font-size:15px;">{!! $tech['expertise_content'] !!}</div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ FEATURES ══════════════ -->
<section class="pg-section pg-section-light">
  <div class="container">
    <div class="text-center mb-5 pg-reveal">
      <div class="pg-kicker justify-content-center">Core Capabilities</div>
      <h2 class="fw-bold" style="color:var(--text-dark);">{{ $tech['features_title'] }}</h2>
      <p class="col-lg-7 mx-auto" style="color:var(--text-muted);">{{ $tech['features_subtitle'] }}</p>
    </div>
    <div class="row g-4">
      @foreach($tech['features'] as $i => $f)
      <div class="col-lg-4 col-md-6 pg-reveal" style="transition-delay:{{ $i * 0.1 }}s;">
        <div class="pg-card h-100">
          <div class="pg-icon-tile mb-4" style="background:linear-gradient(135deg,rgba(207,23,31,.1),rgba(176,23,31,.08));">
            <i class="fas fa-check-circle"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:var(--text-dark);">{{ $f['title'] }}</h5>
          <p style="color:var(--text-muted);font-size:.92rem;line-height:1.7;margin:0;">{{ $f['description'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ══════════════ CTA MID ══════════════ -->
<section class="pg-section pg-section-dark">
  <div class="container position-relative">
    <div class="row align-items-center g-4">
      <div class="col-lg-7 pg-reveal-left">
        <h2 class="fw-bold text-white mb-3">{{ $tech['cta_mid_title'] }}</h2>
        <p style="color:rgba(255,255,255,.7);font-size:16px;line-height:1.7;">{{ $tech['cta_mid_text'] }}</p>
      </div>
      <div class="col-lg-5 text-lg-end pg-reveal-right">
        <div class="d-flex flex-wrap justify-content-lg-end gap-3">
          <span class="d-inline-flex align-items-center gap-2" style="color:rgba(255,255,255,.65);font-size:13px;"><i class="fas fa-check-circle" style="color:#4ade80;"></i> 100% NDA Protected</span>
          <span class="d-inline-flex align-items-center gap-2" style="color:rgba(255,255,255,.65);font-size:13px;"><i class="fas fa-check-circle" style="color:#4ade80;"></i> Flexible Hiring</span>
          <span class="d-inline-flex align-items-center gap-2" style="color:rgba(255,255,255,.65);font-size:13px;"><i class="fas fa-check-circle" style="color:#4ade80;"></i> On-Time Delivery</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ WHY CHOOSE ══════════════ -->
<section class="pg-section">
  <div class="container">
    <div class="text-center mb-5 pg-reveal">
      <div class="pg-kicker justify-content-center">The Antops Difference</div>
      <h2 class="fw-bold" style="color:var(--text-dark);">{{ $tech['why_title'] }}</h2>
      <p class="col-lg-7 mx-auto" style="color:var(--text-muted);">{{ $tech['why_subtitle'] }}</p>
    </div>
    <div class="row g-4">
      @foreach($tech['why_cards'] as $i => $c)
      <div class="col-lg-3 col-md-6 pg-reveal" style="transition-delay:{{ $i * 0.1 }}s;">
        <div class="pg-card h-100 text-center">
          <div class="pg-icon-tile mx-auto mb-4" style="background:#f0f4ff;"><i class="fas fa-star" style="color:var(--brand);"></i></div>
          <h5 class="fw-bold mb-2" style="color:var(--text-dark);">{{ $c['title'] }}</h5>
          <p style="color:var(--text-muted);font-size:.9rem;line-height:1.7;margin:0;">{{ $c['description'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ══════════════ FAQs ══════════════ -->
<section class="pg-section pg-section-light">
  <div class="container">
    <div class="text-center mb-5 pg-reveal">
      <div class="pg-kicker justify-content-center">FAQ</div>
      <h2 class="fw-bold" style="color:var(--text-dark);">Frequently Asked Questions</h2>
      <p style="color:var(--text-muted);">{{ $tech['faq_subtitle'] }}</p>
    </div>
    <div class="col-lg-8 mx-auto">
      @foreach($tech['faqs'] as $i => $faq)
      <div class="pg-faq-item pg-reveal" data-pg-faq style="transition-delay:{{ $i * 0.06 }}s;">
        <button class="pg-faq-q" onclick="this.parentElement.classList.toggle('open')">
          <span>{{ $faq['q'] }}</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="pg-faq-a">{{ $faq['a'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ══════════════ BOTTOM CTA ══════════════ -->
<section class="pg-cta py-5">
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center justify-content-between text-center text-md-start">
      <div class="col-lg-7 mb-4 mb-md-0 pg-reveal-left">
        <h2 class="fw-bold text-white mb-2">{{ $tech['cta_bottom_title'] }}</h2>
        <p class="mb-0" style="color:rgba(255,255,255,.7);">{{ $tech['cta_bottom_text'] }}</p>
      </div>
      <div class="col-lg-4 text-center pg-reveal-right">
        <a href="{{ url('contact') }}" class="pg-btn pg-btn-white">Get Free Consultation <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
(function() {
  if (!('IntersectionObserver' in window)) {
    document.querySelectorAll('.pg-reveal,.pg-reveal-left,.pg-reveal-right,.pg-reveal-scale').forEach(function(el) {
      el.classList.add('pg-visible');
    });
    return;
  }
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) {
        e.target.classList.add('pg-visible');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  document.querySelectorAll('.pg-reveal,.pg-reveal-left,.pg-reveal-right,.pg-reveal-scale').forEach(function(el) {
    obs.observe(el);
  });
})();
</script>
@endpush