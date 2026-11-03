@extends('layouts.app')

@section('title', 'Portfolio | Antops Technologies - Think Digital. Think Antops.')
@section('meta_description', 'Explore the portfolio of Antops Technologies - web development, mobile apps, UI/UX design and digital solutions across industries.')
@section('meta_keywords', 'portfolio, web development projects, mobile apps, UI/UX design, technology solutions, antops portfolio')

@push('styles')
<style>
/* ========== ANIMATED UNDERLINE (from original head) ========== */
@keyframes rvLineFlow {
    0%   { background-position: 0% center; }
    100% { background-position: 200% center; }
}

/* ========== BASE ========== */
.pg-grad{background:linear-gradient(135deg,#CF171F,#B0171F);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

/* ========== HERO ========== */
.pg-hero{
    background:linear-gradient(135deg,#f0f4ff,#e8f0fe 55%,#fdf0e6);
    padding:150px 0 70px;
    position:relative;
    overflow:hidden;
}

/* floats */
@keyframes pgFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-14px)}}
.pg-float,.pg-float-d{
    position:absolute; width:10px; height:10px;
    background:rgba(207,23,31,.35); border-radius:50%;
    animation:pgFloat 5s ease-in-out infinite; pointer-events:none;
}
.pg-float-d{width:7px;height:7px;background:rgba(207,23,31,.55);animation-duration:6.5s;animation-delay:1.2s}

/* breadcrumb */
.pg-hero .pg-breadcrumb{display:inline-flex;align-items:center;gap:9px;font-size:13px;margin-bottom:16px}
.pg-hero .pg-breadcrumb a{color:#CF171F;text-decoration:none;font-weight:600}
.pg-hero .pg-breadcrumb i{color:#c0c7d4;font-size:10px}
.pg-hero .pg-breadcrumb span{color:#8C1116;font-weight:600}

/* kicker */
.pg-kicker{
    color:#CF171F; font-weight:800; font-size:12px;
    text-transform:uppercase; letter-spacing:2.5px;
    display:inline-flex; align-items:center; gap:10px;
    margin-bottom:10px;
}
.pg-kicker::before{
    content:''; width:26px; height:2px;
    background:linear-gradient(90deg,#CF171F,#B0171F); border-radius:2px;
}

/* H1 with animated underline — THIS WAS MISSING */
.pg-hero h1,
.pg-hero h1.display-5{
    color:#8C1116;
    font-size:clamp(30px, 4.2vw, 46px) !important;
    line-height:1.18 !important;
    font-weight:800 !important;
    margin:0 0 14px;
    position:relative;
    display:inline-block;
    padding-bottom:18px;
}
.pg-hero h1::after{
    content:''; position:absolute; bottom:0; left:0;
    height:3px; width:62px; border-radius:3px;
    background:linear-gradient(90deg,#B0171F,#CF171F,#CF171F,#B0171F);
    background-size:200% 100%;
    animation:rvLineFlow 4s linear infinite;
}

/* lead paragraph */
.pg-hero p.lead{
    color:#4a5568 !important;
    font-size:16px !important;
    line-height:1.85 !important;
    margin:0;
    max-width:640px;
}

/* ========== REVEAL ========== */
.pg-reveal{opacity:0;transform:translateY(34px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.pg-reveal-left{opacity:0;transform:translateX(-40px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.pg-reveal-right{opacity:0;transform:translateX(40px);transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1)}
.pg-reveal-scale{opacity:0;transform:scale(.92);transition:opacity .6s cubic-bezier(.22,1,.36,1),transform .6s cubic-bezier(.22,1,.36,1)}
.pg-visible{opacity:1;transform:none}

/* ========== FILTER TABS ========== */
.pg-tab{
    border:2px solid #e2e7f1;
    background:#fff;
    color:#4b5563;
    font-size:13px;
    font-weight:600;
    padding:10px 22px;
    border-radius:30px;
    transition:all .3s cubic-bezier(.22,1,.36,1);
    cursor:pointer;
    line-height:1.2;
}
.pg-tab:hover{
    background:linear-gradient(135deg,#CF171F,#B0171F);
    border-color:transparent;
    color:#fff;
    box-shadow:0 10px 24px rgba(207,23,31,.28);
    transform:translateY(-2px);
}
.pg-tab-active{
    background:linear-gradient(135deg,#CF171F,#B0171F);
    border-color:transparent;
    color:#fff;
    box-shadow:0 10px 24px rgba(207,23,31,.28);
}

/* ========== SECTION ========== */
.pg-section{padding:60px 0 90px}
.pg-section-light{background:#f8f9fc}

/* ========== PROJECT CARD ========== */
.pg-project{
    display:block;
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    border:1px solid #eef1f7;
    box-shadow:0 10px 32px rgba(0,0,0,.04);
    text-decoration:none;
    transition:all .45s cubic-bezier(.22,1,.36,1);
    position:relative;
}
.pg-project::before{
    content:''; position:absolute; top:0; left:0;
    width:4px; height:0;
    background:linear-gradient(180deg,#CF171F,#B0171F);
    transition:height .45s ease; z-index:2;
}
.pg-project:hover::before{height:100%}
.pg-project:hover{transform:translateY(-9px);box-shadow:0 30px 60px rgba(207,23,31,.15)}

/* image wrapper */
.pg-proj-img{
    position:relative;
    overflow:hidden;
    aspect-ratio:16/10;
    background:#eef1f7;
    display:block;
}
.pg-proj-img img{
    width:100%; height:100%;
    object-fit:cover; display:block;
    transition:transform .55s cubic-bezier(.22,1,.36,1);
}
.pg-project:hover .pg-proj-img img{transform:scale(1.06)}

/* hover overlay */
.pg-proj-overlay{
    position:absolute; inset:0;
    background:linear-gradient(180deg,rgba(140,17,22,0) 35%,rgba(140,17,22,.85) 100%);
    display:flex; align-items:flex-end; justify-content:center;
    padding:16px; opacity:0; transition:opacity .35s;
}
.pg-project:hover .pg-proj-overlay{opacity:1}
.pg-proj-overlay span{
    color:#fff; font-size:13px; font-weight:700;
    display:inline-flex; align-items:center; gap:8px;
    transform:translateY(6px); transition:transform .35s;
}
.pg-project:hover .pg-proj-overlay span{transform:translateY(0)}
.pg-proj-overlay span i{transition:transform .3s}
.pg-project:hover .pg-proj-overlay span i{transform:translateX(4px)}

/* chips */
.pg-chip{
    display:inline-flex; align-items:center; gap:5px;
    background:rgba(207,23,31,.1);
    color:#CF171F;
    font-size:11px; font-weight:600;
    padding:3px 10px; border-radius:20px;
    letter-spacing:.3px;
}

/* title hover */
.pg-project h5{transition:color .3s}
.pg-project:hover h5{color:#CF171F !important}

/* ========== CTA ========== */
.pg-cta{
    background:linear-gradient(135deg,#0b1120,#101f46 60%,#B0171F);
    position:relative;
    overflow:hidden;
    padding:70px 0;
}
.pg-cta::before{
    content:''; position:absolute;
    width:420px; height:420px;
    top:-140px; right:-100px;
    background:radial-gradient(circle,rgba(207,23,31,.28),transparent 70%);
    border-radius:50%;
}
.pg-cta::after{
    content:''; position:absolute;
    width:280px; height:280px;
    bottom:-100px; left:-60px;
    background:radial-gradient(circle,rgba(74,222,128,.12),transparent 70%);
    border-radius:50%;
}
.pg-btn{
    display:inline-flex; align-items:center; gap:10px;
    font-weight:700; padding:15px 32px;
    border-radius:36px; text-decoration:none;
    transition:all .3s; font-size:15px;
    line-height:1.2;
}
.pg-btn-white{
    background:#fff; color:#8C1116;
    box-shadow:0 14px 34px rgba(0,0,0,.35);
}
.pg-btn-white:hover{
    background:#CF171F; color:#fff;
    transform:translateY(-2px);
    box-shadow:0 18px 40px rgba(207,23,31,.45);
}

/* ========== RESPONSIVE ========== */
@media (max-width: 991.98px){
    .pg-hero{padding:130px 0 60px}
    .pg-section{padding:50px 0 70px}
    .pg-cta{padding:55px 0}
}
@media (max-width: 767.98px){
    .pg-hero{padding:110px 0 50px}
    .pg-hero h1{font-size:30px !important}
    .pg-cta .pg-btn{padding:13px 24px;font-size:14px}
    .pg-tab{padding:9px 18px;font-size:12px}
}
</style>
@endpush

@section('content')

<!-- ========== HERO ========== -->
<section class="pg-hero">
    <div class="pg-float" style="top:18%;left:8%"></div>
    <div class="pg-float-d" style="top:32%;right:12%"></div>
    <div class="pg-float" style="bottom:22%;left:20%"></div>
    <div class="pg-float-d" style="top:60%;right:25%"></div>
    <div class="pg-float" style="top:45%;left:50%"></div>
    <div class="pg-float-d" style="bottom:30%;right:8%"></div>
    <div class="container">
        <div class="pg-breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Portfolio</span>
        </div>
        <div class="pg-reveal">
            <div class="pg-kicker">Our Work</div>
            <h1 class="display-5 fw-bold mb-3">Explore Our <span class="pg-grad">Portfolio</span></h1>
            <p class="lead col-lg-7">
                Showcasing our best projects across industries and technologies — real solutions, real impact.
            </p>
        </div>
    </div>
</section>

<!-- ========== FILTER TABS ========== -->
<section style="background:#fff;padding:35px 0 10px;">
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap gap-2 pg-reveal">
            <button class="pg-tab pg-tab-active" onclick="filterPortfolio('all',this)">All Projects</button>
            <button class="pg-tab" onclick="filterPortfolio('web-development',this)">Web Development</button>
            <button class="pg-tab" onclick="filterPortfolio('mobile-apps',this)">Mobile Apps</button>
            <button class="pg-tab" onclick="filterPortfolio('ui-ux-design',this)">UI/UX Design</button>
        </div>
    </div>
</section>

<!-- ========== PORTFOLIO GRID ========== -->
<section class="pg-section pg-section-light">
    <div class="container">
        <div class="row g-4">
            @php
            $projects = [
                [
                    'slug' => 'medjections-medical-research-mentorship-clinical-guidance-platform',
                    'img' => 'uploads/portfolios/4b9af48a-1f92-4e8e-9350-9f1d18e2cb94.png',
                    'title' => 'Medjections – Medical Research, Mentorship & Clinical Guidance Platform',
                    'excerpt' => 'A modern medical research and mentorship platform designed to help medical students,...',
                    'cat' => 'web-development',
                    'cat_label' => 'Web Development',
                    'featured' => true,
                    'tags' => ['Laravel'],
                ],
                [
                    'slug' => 'pro-bangalore-real-estate-property-listing-management-platform',
                    'img' => 'uploads/portfolios/37838ec1-2899-4a61-86af-a86fd5e05b64.png',
                    'title' => 'PRO Bangalore – Real Estate Property Listing & Management Platform',
                    'excerpt' => 'A modern real estate platform designed to help users discover residential, commercial...',
                    'cat' => 'web-development',
                    'cat_label' => 'Web Development',
                    'featured' => true,
                    'tags' => [],
                ],
            ];
            @endphp

            @foreach($projects as $p)
            <div class="col-lg-4 col-md-6 pg-proj-item pg-reveal" data-cat="{{ $p['cat'] }}">
                <a href="{{ url('portfolio/'.$p['slug']) }}" class="pg-project h-100">
                    <div class="pg-proj-img">
                        <img src="{{ asset($p['img']) }}" alt="{{ $p['title'] }}">
                        <div class="pg-proj-overlay">
                            <span>View Project <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span style="color:#CF171F;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;">{{ $p['cat_label'] }}</span>
                            @if($p['featured'])
                            <span class="pg-chip"><i class="fas fa-star" style="font-size:.7rem;"></i> Featured</span>
                            @endif
                        </div>
                        <h5 style="color:#8C1116;font-weight:700;margin:0 0 8px;font-size:17px;">{{ $p['title'] }}</h5>
                        <p style="color:#666;font-size:13px;line-height:1.65;margin:0;">{{ $p['excerpt'] }}</p>
                        @if(!empty($p['tags']))
                        <div class="d-flex flex-wrap gap-1 mt-3">
                            @foreach($p['tags'] as $tag)
                            <span class="pg-chip">{{ $tag }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section class="pg-cta">
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center justify-content-between text-center text-md-start">
            <div class="col-lg-7 mb-4 mb-md-0 pg-reveal-left">
                <div class="pg-kicker" style="color:#7eb8ff;">Let's Build Together</div>
                <h2 class="fw-bold text-white mb-2">Have a Project in Mind?</h2>
                <p class="mb-0" style="color:rgba(255,255,255,.7);">Let's discuss your idea and create something amazing together.</p>
            </div>
            <div class="col-lg-4 text-center pg-reveal-right">
                <a href="{{ url('contact') }}" class="pg-btn pg-btn-white">
                    Get Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function() {
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

function filterPortfolio(cat, btn) {
    document.querySelectorAll('.pg-tab').forEach(function(b) { b.classList.remove('pg-tab-active'); });
    btn.classList.add('pg-tab-active');
    document.querySelectorAll('.pg-proj-item').forEach(function(el) {
        var show = (cat === 'all' || el.dataset.cat === cat);
        el.style.display = show ? '' : 'none';
    });
}
</script>
@endpush