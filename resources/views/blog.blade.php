@extends('layouts.app')

@section('title', 'Blog | Antops Technologies')
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
  .pg-card-img{position:relative;height:220px;overflow:hidden;}
  .pg-card-img img{width:100%;height:100%;object-fit:cover;transition:transform .6s ease;}
  .pg-card:hover .pg-card-img img{transform:scale(1.08);}
  .pg-card-placeholder{width:100%;height:100%;background:linear-gradient(135deg,#e0e7ff,#c7d2fe);display:flex;align-items:center;justify-content:center;}
  .pg-date-badge{position:absolute;top:14px;left:14px;background:#fff;border-radius:10px;padding:8px 12px;text-align:center;box-shadow:0 4px 14px rgba(0,0,0,.1);z-index:2;line-height:1;}
  .pg-date-badge .day{display:block;font-size:22px;font-weight:800;color:#B0171F;line-height:1.1;}
  .pg-date-badge .month{display:block;font-size:11px;text-transform:uppercase;color:#CF171F;font-weight:600;letter-spacing:.5px;}
  .pg-cat-badge{position:absolute;top:14px;right:14px;background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;font-size:11px;font-weight:600;padding:5px 14px;border-radius:20px;text-transform:uppercase;letter-spacing:.5px;z-index:2;}
  .pg-card-body{padding:24px;flex:1;display:flex;flex-direction:column;}
  .pg-card-title{font-size:17px;font-weight:700;color:#8C1116;margin-bottom:10px;line-height:1.45;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;}
  .pg-card-excerpt{font-size:14px;color:#5a6a8a;line-height:1.7;flex:1;}
  .pg-card-link{display:inline-flex;align-items:center;gap:6px;color:#CF171F;font-weight:600;font-size:14px;text-decoration:none;margin-top:14px;transition:gap .3s ease;}
  .pg-card-link:hover{gap:10px;color:#B0171F;}
  .pg-sidebar-card{background:#fff;border:1px solid #e8edf5;border-radius:14px;padding:28px;margin-bottom:24px;}
  .pg-sidebar-card h5{font-size:16px;font-weight:700;color:#8C1116;margin-bottom:18px;display:flex;align-items:center;gap:8px;}
  .pg-sidebar-card h5 i{color:#CF171F;font-size:14px;}
  .pg-search-input{width:100%;border:1.5px solid #e0e5ef;border-radius:10px;padding:12px 16px;font-size:14px;color:#8C1116;transition:border-color .3s;background:#f7f9fc;outline:none;}
  .pg-search-input:focus{border-color:#CF171F;background:#fff;}
  .pg-search-btn{position:absolute;right:4px;top:50%;transform:translateY(-50%);background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;border:none;border-radius:8px;padding:10px 16px;cursor:pointer;transition:transform .3s;}
  .pg-search-btn:hover{transform:translateY(-50%) scale(1.05);}
  .pg-cat-item{display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid #f0f2f7;text-decoration:none;transition:background .2s;border-radius:6px;}
  .pg-cat-item:last-child{border-bottom:none;}
  .pg-cat-item span{font-size:14px;color:#5a6a8a;transition:color .3s;}
  .pg-cat-item:hover span{color:#CF171F;}
  .pg-cat-count{background:#f0f4ff;color:#CF171F;font-size:12px;font-weight:700;padding:3px 10px;border-radius:20px;}
  .pg-recent-item{display:flex;gap:14px;margin-bottom:16px;text-decoration:none;}
  .pg-recent-item:last-child{margin-bottom:0;}
  .pg-recent-thumb{width:64px;height:64px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#e0e7ff;}
  .pg-recent-thumb img{width:100%;height:100%;object-fit:cover;}
  .pg-recent-thumb i{display:flex;align-items:center;justify-content:center;width:100%;height:100%;color:#CF171F;opacity:.5;font-size:20px;}
  .pg-recent-info{display:flex;flex-direction:column;justify-content:center;}
  .pg-recent-info .title{font-size:14px;font-weight:600;color:#8C1116;line-height:1.4;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;}
  .pg-recent-info .date{font-size:12px;color:#5a6a8a;margin-top:4px;}
  .pg-tag-link{display:inline-block;background:#f0f4ff;color:#CF171F;font-size:12px;font-weight:600;padding:6px 14px;border-radius:20px;text-decoration:none;transition:all .3s;border:1px solid transparent;}
  .pg-tag-link:hover{background:#CF171F;color:#fff;}
  .pg-empty{text-align:center;padding:80px 0;}
  .pg-empty i{font-size:56px;color:#d0d5e2;margin-bottom:18px;}
  .pg-empty h4{font-weight:700;color:#8C1116;margin-bottom:8px;}
  .pg-empty p{color:#5a6a8a;font-size:15px;}
  .pg-cta{background:linear-gradient(135deg,#8C1116 0%,#B0171F 60%,#8C1116 100%);color:#fff;position:relative;overflow:hidden;}
  .pg-cta::after{content:'';position:absolute;top:-50%;left:-60%;width:50%;height:200%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.07),transparent);transform:skewX(-20deg);animation:pgShine 5s ease-in-out infinite;}
  @keyframes pgShine{0%,100%{left:-60%;}50%{left:120%;}}
  .pg-btn{display:inline-flex;align-items:center;gap:8px;padding:14px 34px;border-radius:8px;font-weight:600;font-size:.95rem;text-decoration:none;transition:all .3s ease;border:none;cursor:pointer;}
  .pg-btn-primary{background:#CF171F;color:#fff;}
  .pg-btn-primary:hover{background:#B0171F;color:#fff;transform:translateY(-2px);}
  .pg-btn-white{background:#fff;color:#B0171F;}
  .pg-btn-white:hover{background:#f0f4ff;transform:translateY(-2px);}
  .pg-section{padding:90px 0;}
  .pg-section-light{background:#f7f9fc;}
  @media(max-width:767.98px){.pg-hero{padding:120px 0 60px;}.pg-section{padding:60px 0;}}
</style>
@endpush

@section('content')
<main>

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
      <span>Blog</span>
    </div>
    <div class="pg-reveal">
      <div class="pg-kicker">Insights &amp; Articles</div>
      <h1 class="display-5 fw-bold mb-3">Our <span class="pg-grad">Blog</span></h1>
      <p class="lead col-lg-7" style="color:#5a6a8a;">
        Stay informed with the latest technology trends, industry insights, and expert perspectives from the Antops team.
      </p>
    </div>
  </div>
</section>

{{-- ========== BLOG LIST + SIDEBAR ========== --}}
<section class="pg-section pg-section-light">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-8">
        <div class="row g-4">

          {{-- Blog Card 1 --}}
          <div class="col-md-6 pg-reveal">
            <a href="blog/top-web-development-trends-2024.html" style="text-decoration:none;">
              <div class="pg-card">
                <div class="pg-card-img">
                  <div class="pg-card-placeholder">
                    <i class="fas fa-newspaper" style="font-size:42px;color:#fff;opacity:.6;"></i>
                  </div>
                  <div class="pg-date-badge">
                    <span class="day">26</span>
                    <span class="month">Aug</span>
                  </div>
                  <span class="pg-cat-badge">Web Development</span>
                </div>
                <div class="pg-card-body">
                  <h5 class="pg-card-title">Top Web Development Trends in 2024</h5>
                  <p class="pg-card-excerpt">Discover the latest trends shaping the web development landscape.</p>
                  <span class="pg-card-link">Read More <i class="fas fa-arrow-right"></i></span>
                </div>
              </div>
            </a>
          </div>

          {{-- Blog Card 2 --}}
          <div class="col-md-6 pg-reveal">
            <a href="blog/why-business-needs-mobile-app.html" style="text-decoration:none;">
              <div class="pg-card">
                <div class="pg-card-img">
                  <div class="pg-card-placeholder">
                    <i class="fas fa-newspaper" style="font-size:42px;color:#fff;opacity:.6;"></i>
                  </div>
                  <div class="pg-date-badge">
                    <span class="day">24</span>
                    <span class="month">Aug</span>
                  </div>
                  <span class="pg-cat-badge">Technology</span>
                </div>
                <div class="pg-card-body">
                  <h5 class="pg-card-title">Why Your Business Needs a Mobile App</h5>
                  <p class="pg-card-excerpt">Learn why mobile apps are essential for modern businesses.</p>
                  <span class="pg-card-link">Read More <i class="fas fa-arrow-right"></i></span>
                </div>
              </div>
            </a>
          </div>

          {{-- Blog Card 3 --}}
          <div class="col-md-6 pg-reveal">
            <a href="blog/importance-of-ui-ux-design.html" style="text-decoration:none;">
              <div class="pg-card">
                <div class="pg-card-img">
                  <div class="pg-card-placeholder">
                    <i class="fas fa-newspaper" style="font-size:42px;color:#fff;opacity:.6;"></i>
                  </div>
                  <div class="pg-date-badge">
                    <span class="day">21</span>
                    <span class="month">Aug</span>
                  </div>
                  <span class="pg-cat-badge">UI/UX Design</span>
                </div>
                <div class="pg-card-body">
                  <h5 class="pg-card-title">The Importance of UI/UX in Digital Products</h5>
                  <p class="pg-card-excerpt">How great design can make or break your digital product.</p>
                  <span class="pg-card-link">Read More <i class="fas fa-arrow-right"></i></span>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>

      {{-- Sidebar --}}
      <div class="col-lg-4">
        {{-- Search --}}
        <div class="pg-sidebar-card pg-reveal">
          <h5><i class="fas fa-search"></i> Search</h5>
          <form action="blog.html" method="GET">
            <div style="position:relative;">
              <input type="text" name="search" class="pg-search-input" placeholder="Search articles..." value="">
              <button type="submit" class="pg-search-btn"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>

        {{-- Categories --}}
        <div class="pg-sidebar-card pg-reveal">
          <h5><i class="fas fa-folder-open"></i> Categories</h5>
          <a href="blog0e11.html?category=digital-marketing" class="pg-cat-item">
            <span>Digital Marketing</span>
            <span class="pg-cat-count">0</span>
          </a>
          <a href="blog998d.html?category=technology" class="pg-cat-item">
            <span>Technology</span>
            <span class="pg-cat-count">1</span>
          </a>
          <a href="blog7b7d.html?category=ui-ux-design" class="pg-cat-item">
            <span>UI/UX Design</span>
            <span class="pg-cat-count">1</span>
          </a>
          <a href="blog1ff4.html?category=web-development" class="pg-cat-item">
            <span>Web Development</span>
            <span class="pg-cat-count">1</span>
          </a>
        </div>

        {{-- Recent Posts --}}
        <div class="pg-sidebar-card pg-reveal">
          <h5><i class="fas fa-clock"></i> Recent Posts</h5>
          <a href="blog/top-web-development-trends-2024.html" class="pg-recent-item">
            <div class="pg-recent-thumb"><i class="fas fa-file-alt"></i></div>
            <div class="pg-recent-info">
              <span class="title">Top Web Development Trends in 2024</span>
              <span class="date">Aug 26, 2026</span>
            </div>
          </a>
          <a href="blog/why-business-needs-mobile-app.html" class="pg-recent-item">
            <div class="pg-recent-thumb"><i class="fas fa-file-alt"></i></div>
            <div class="pg-recent-info">
              <span class="title">Why Your Business Needs a Mobile App</span>
              <span class="date">Aug 24, 2026</span>
            </div>
          </a>
          <a href="blog/importance-of-ui-ux-design.html" class="pg-recent-item">
            <div class="pg-recent-thumb"><i class="fas fa-file-alt"></i></div>
            <div class="pg-recent-info">
              <span class="title">The Importance of UI/UX in Digital Products</span>
              <span class="date">Aug 21, 2026</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ========== CTA BAND ========== --}}
<section class="pg-cta py-5">
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center justify-content-between text-center text-md-start">
      <div class="col-lg-7 mb-4 mb-md-0 pg-reveal-left">
        <h2 class="fw-bold text-white mb-2">Stay Updated With Tech Trends</h2>
        <p class="mb-0" style="color:rgba(255,255,255,.7);">Subscribe to our newsletter and never miss an update on the latest in technology.</p>
      </div>
      <div class="col-lg-5 text-center text-md-end pg-reveal-right">
        <a href="contact.html" class="pg-btn pg-btn-white me-2">Get In Touch <i class="fas fa-arrow-right"></i></a>
        <a href="services.html" class="pg-btn" style="border:2px solid #fff;color:#fff;background:transparent;">Our Services <i class="fas fa-play-circle"></i></a>
      </div>
    </div>
  </div>
</section>

</main>
@endsection

@push('scripts')
<script>
(function(){
  var obs=new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){e.target.classList.add('pg-visible');obs.unobserve(e.target);}
    });
  },{threshold:0.12,rootMargin:'0px 0px -40px 0px'});
  document.querySelectorAll('.pg-reveal,.pg-reveal-left,.pg-reveal-right,.pg-reveal-scale').forEach(function(el){obs.observe(el);});
})();
</script>
@endpush