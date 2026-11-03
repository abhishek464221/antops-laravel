@extends('layouts.app')

@section('title', 'News & Events | Antops Technologies')
@section('meta_description', 'Antops Technologies is a premium digital solutions agency offering web development, mobile apps, UI/UX design, and digital marketing services.')
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
.news-events-page { font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', sans-serif; }
.news-events-page * { box-sizing: border-box; }

.pg-hero{background:linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);padding:150px 0 90px;position:relative;overflow:hidden;}
.pg-hero .container{position:relative;z-index:2;}
.pg-float,.pg-float-d{position:absolute;border-radius:50%;opacity:.18;pointer-events:none;}
.pg-float{width:12px;height:12px;background:#CF171F;animation:pgFloat 4.5s ease-in-out infinite;}
.pg-float-d{width:9px;height:9px;background:#CF171F;animation:pgFloatD 5.5s ease-in-out 1.2s infinite;}
@keyframes pgFloat{0%,100%{transform:translateY(0) scale(1);}50%{transform:translateY(-18px) scale(1.15);}}
@keyframes pgFloatD{0%,100%{transform:translateY(0) scale(1);}50%{transform:translateY(14px) scale(1.1);}}
.pg-breadcrumb{padding:0 0 10px;}
.pg-breadcrumb a{color:#CF171F;text-decoration:none;font-size:.88rem;}
.pg-breadcrumb span{color:#8C1116;font-size:.88rem;font-weight:600;}
.pg-breadcrumb i{color:#5a6a8a;margin:0 6px;font-size:.72rem;}
.pg-reveal,.pg-reveal-left,.pg-reveal-right,.pg-reveal-scale{opacity:0;transition:opacity .7s ease,transform .7s ease;}
.pg-reveal{transform:translateY(36px);}
.pg-reveal-left{transform:translateX(-40px);}
.pg-reveal-right{transform:translateX(40px);}
.pg-reveal-scale{transform:scale(.92);}
.pg-visible{opacity:1;transform:translate(0) scale(1);}
.pg-kicker{text-transform:uppercase;font-size:12px;letter-spacing:2.5px;color:#CF171F;font-weight:700;display:flex;align-items:center;gap:12px;margin-bottom:12px;}
.pg-kicker::before{content:'';display:inline-block;width:28px;height:3px;background:linear-gradient(90deg,#CF171F,#CF171F);border-radius:2px;}
.pg-line{width:62px;height:3px;background:linear-gradient(90deg,#CF171F,#CF171F);border-radius:2px;margin:18px 0 24px;}
.pg-grad{background:linear-gradient(135deg,#B0171F,#CF171F);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}

.pg-card{background:#fff;border-radius:14px;border:1px solid #e8edf5;position:relative;overflow:hidden;transition:transform .35s ease,box-shadow .35s ease;display:flex;flex-direction:column;height:100%;}
.pg-card::before{content:'';position:absolute;left:4px;top:0;width:4px;height:0;background:linear-gradient(180deg,#CF171F,#CF171F);border-radius:2px;transition:height .4s ease;}
.pg-card:hover{transform:translateY(-9px);box-shadow:0 18px 48px rgba(176,23,31,.13);}
.pg-card:hover::before{height:100%;}

.pg-tab{display:inline-flex;align-items:center;gap:8px;padding:12px 26px;border-radius:30px;font-size:14px;font-weight:600;border:2px solid #e0e5ef;background:#fff;color:#5a6a8a;cursor:pointer;transition:all .3s ease;text-decoration:none;}
.pg-tab:hover{border-color:#CF171F;color:#CF171F;}
.pg-tab.pg-active{background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;border-color:transparent;}

.pg-empty{text-align:center;padding:80px 0;}
.pg-empty i{font-size:56px;color:#d0d5e2;margin-bottom:18px;}
.pg-empty h4{font-weight:700;color:#8C1116;margin-bottom:8px;}
.pg-empty p{color:#5a6a8a;font-size:15px;}

.pg-cta{background:linear-gradient(135deg,#8C1116 0%,#B0171F 60%,#8C1116 100%);color:#fff;position:relative;overflow:hidden;}
.pg-cta::after{content:'';position:absolute;top:-50%;left:-60%;width:50%;height:200%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.07),transparent);transform:skewX(-20deg);animation:pgShine 5s ease-in-out infinite;}
@keyframes pgShine{0%,100%{left:-60%;}50%{left:120%;}}
.pg-btn{display:inline-flex;align-items:center;gap:8px;padding:14px 34px;border-radius:8px;font-weight:600;font-size:.95rem;text-decoration:none;transition:all .3s ease;border:none;cursor:pointer;}
.pg-btn-white{background:#fff;color:#B0171F;}
.pg-btn-white:hover{background:#f0f4ff;transform:translateY(-2px);}
.pg-section{padding:90px 0;}
.pg-section-light{background:#f7f9fc;}
@media(max-width:767.98px){.pg-hero{padding:120px 0 60px;}.pg-section{padding:60px 0;}}
</style>
@endpush

@section('content')
<main>

<div class="news-events-page">

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
                <span>News &amp; Events</span>
            </div>
            <div class="pg-reveal">
                <div class="pg-kicker">Latest Updates</div>
                <h1 class="display-5 fw-bold mb-3">News &amp; <span class="pg-grad">Events</span></h1>
                <p class="lead col-lg-7" style="color:#5a6a8a;">
                    Stay up to date with the latest company news, product launches, and upcoming industry events from Antops Technologies.
                </p>
            </div>
        </div>
    </section>

    {{-- ========== NEWS/EVENTS LIST ========== --}}
    <section class="pg-section pg-section-light">
        <div class="container">

            {{-- Filter tabs --}}
            @php
                $currentType = request('type', 'all');
            @endphp
            <div class="pg-reveal text-center mb-5">
                <div class="d-flex justify-content-center flex-wrap gap-2">
                    <a href="{{ route('news-events') }}"
                       class="pg-tab {{ $currentType === 'all' ? 'pg-active' : '' }}">
                        <i class="fas fa-th-large"></i> All
                    </a>
                    <a href="{{ route('news-events') }}?type=news"
                       class="pg-tab {{ $currentType === 'news' ? 'pg-active' : '' }}">
                        <i class="fas fa-newspaper"></i> News
                    </a>
                    <a href="{{ route('news-events') }}?type=event"
                       class="pg-tab {{ $currentType === 'event' ? 'pg-active' : '' }}">
                        <i class="fas fa-calendar-alt"></i> Events
                    </a>
                </div>
            </div>

            {{-- Empty state (no data yet) --}}
            <div class="pg-empty pg-reveal">
                <i class="fas fa-newspaper"></i>
                <h4>No News or Events</h4>
                <p>Check back soon for updates.</p>
            </div>

        </div>
    </section>

    {{-- ========== CTA ========== --}}
    <section class="pg-cta py-5">
        <div class="container position-relative" style="z-index:2;">
            <div class="row align-items-center justify-content-between text-center text-md-start">
                <div class="col-lg-7 mb-4 mb-md-0 pg-reveal-left">
                    <h2 class="fw-bold text-white mb-2">Stay in the Loop</h2>
                    <p class="mb-0" style="color:rgba(255,255,255,.7);">Get the latest news and event updates delivered straight to your inbox.</p>
                </div>
                <div class="col-lg-4 text-center pg-reveal-right">
                    <a href="contact.html" class="pg-btn pg-btn-white">
                        <i class="fas fa-envelope"></i> Contact Us
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
            if (e.isIntersecting) { e.target.classList.add('pg-visible'); obs.unobserve(e.target); }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.news-events-page .pg-reveal, .news-events-page .pg-reveal-left, .news-events-page .pg-reveal-right, .news-events-page .pg-reveal-scale')
        .forEach(function (el) { obs.observe(el); });
})();
</script>
@endpush