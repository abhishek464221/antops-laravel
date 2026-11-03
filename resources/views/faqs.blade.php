@extends('layouts.app')

@section('title', 'FAQs | Antops Technologies')
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
.faqs-page { font-family: 'Montserrat', system-ui, -apple-system, 'Segoe UI', sans-serif; }
.faqs-page * { box-sizing: border-box; }

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
.pg-section{padding:90px 0;}
.pg-section-light{background:#f7f9fc;}
.pg-faq-tab{display:inline-flex;align-items:center;gap:8px;padding:12px 26px;border-radius:30px;font-size:14px;font-weight:600;border:2px solid #e0e5ef;background:#fff;color:#5a6a8a;cursor:pointer;transition:all .3s ease;text-decoration:none;}
.pg-faq-tab:hover{border-color:#CF171F;color:#CF171F;}
.pg-faq-tab.pg-active{background:linear-gradient(135deg,#CF171F,#B0171F);color:#fff;border-color:transparent;}
.pg-faq{border:1.5px solid #e8edf5;border-radius:16px;margin-bottom:14px;background:#fff;overflow:hidden;transition:box-shadow .3s ease;}
.pg-faq:hover{box-shadow:0 10px 34px rgba(176,23,31,.08);}
.pg-faq .accordion-button{font-size:16px;font-weight:600;color:#8C1116;padding:20px 58px 20px 24px;box-shadow:none;background:#fff;border:none;transition:color .3s;position:relative;width:100%;text-align:left;cursor:pointer;}
.pg-faq .accordion-button:not(.collapsed){color:#CF171F;background:#f7f9fc;}
.pg-faq .accordion-button::after{position:absolute;right:24px;top:50%;transform:translateY(-50%) rotate(0deg);transition:transform .3s ease;background-image:none;width:28px;height:28px;border-radius:50%;background:#f0f4ff;display:flex;align-items:center;justify-content:center;font-family:'Font Awesome 6 Free';font-weight:900;font-size:12px;color:#CF171F;content:'\f078';text-align:center;line-height:28px;}
.pg-faq .accordion-button:not(.collapsed)::after{transform:translateY(-50%) rotate(180deg);background:#CF171F;color:#fff;}
.pg-faq .accordion-body{background:#f9fafc;border-top:1px solid #f0f2f7;padding:20px 24px;}
.pg-faq .accordion-body p{margin:0;line-height:1.8;color:#5a6a8a;font-size:15px;}
.pg-faq-category-label{font-size:18px;font-weight:700;color:#8C1116;margin-bottom:20px;display:flex;align-items:center;gap:10px;}
.pg-faq-category-label i{color:#CF171F;font-size:16px;}
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
@media(max-width:767.98px){.pg-hero{padding:120px 0 60px;}.pg-section{padding:60px 0;}}
</style>
@endpush

@section('content')
<main>

<div class="faqs-page">

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
                <span>FAQs</span>
            </div>
            <div class="pg-reveal">
                <div class="pg-kicker">Help Center</div>
                <h1 class="display-5 fw-bold mb-3">Frequently Asked <span class="pg-grad">Questions</span></h1>
                <p class="lead col-lg-7" style="color:#5a6a8a;">
                    Find answers to the most common questions about our services, processes, and technology solutions.
                </p>
            </div>
        </div>
    </section>

    {{-- ========== FAQ LIST ========== --}}
    <section class="pg-section pg-section-light">
        <div class="container">

            {{-- Tabs --}}
            <div class="pg-reveal text-center mb-5">
                <div class="pg-faq-tabs d-flex justify-content-center flex-wrap gap-2" id="pgFaqTabs">
                    <button class="pg-faq-tab pg-active" data-pg-cat="all" onclick="pgFilterFaqs('all',this)">
                        <i class="fas fa-th-large"></i> All
                    </button>
                    <button class="pg-faq-tab" data-pg-cat="general" onclick="pgFilterFaqs('general',this)">
                        General
                    </button>
                </div>
            </div>

            {{-- General FAQ group --}}
            <div class="pg-faq-group pg-reveal" data-pg-group="general">
                <div class="pg-faq-category-label">
                    <i class="fas fa-folder"></i> General
                </div>
                <div class="accordion" id="pgFaqAccordion">

                    <div class="pg-faq">
                        <h2 class="accordion-header" id="pgFaqHead1">
                            <button class="accordion-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pgFaqBody1"
                                aria-expanded="true" aria-controls="pgFaqBody1">
                                What services does Antops Technologies offer?
                            </button>
                        </h2>
                        <div id="pgFaqBody1" class="accordion-collapse collapse show"
                            aria-labelledby="pgFaqHead1" data-bs-parent="#pgFaqAccordion">
                            <div class="accordion-body">
                                <p>We offer a comprehensive range of digital services including web development, mobile app development, UI/UX design, digital marketing, SEO optimization, and custom software solutions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pg-faq">
                        <h2 class="accordion-header" id="pgFaqHead2">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pgFaqBody2"
                                aria-expanded="false" aria-controls="pgFaqBody2">
                                How long does it take to build a website?
                            </button>
                        </h2>
                        <div id="pgFaqBody2" class="accordion-collapse collapse"
                            aria-labelledby="pgFaqHead2" data-bs-parent="#pgFaqAccordion">
                            <div class="accordion-body">
                                <p>The timeline depends on the project complexity. A basic website takes 2-4 weeks, while complex web applications can take 8-16 weeks. We provide a detailed timeline during the project planning phase.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pg-faq">
                        <h2 class="accordion-header" id="pgFaqHead3">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pgFaqBody3"
                                aria-expanded="false" aria-controls="pgFaqBody3">
                                Do you provide ongoing support?
                            </button>
                        </h2>
                        <div id="pgFaqBody3" class="accordion-collapse collapse"
                            aria-labelledby="pgFaqHead3" data-bs-parent="#pgFaqAccordion">
                            <div class="accordion-body">
                                <p>Yes, we offer comprehensive maintenance and support packages to ensure your digital solutions continue to perform optimally after launch.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pg-faq">
                        <h2 class="accordion-header" id="pgFaqHead4">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pgFaqBody4"
                                aria-expanded="false" aria-controls="pgFaqBody4">
                                What is your pricing model?
                            </button>
                        </h2>
                        <div id="pgFaqBody4" class="accordion-collapse collapse"
                            aria-labelledby="pgFaqHead4" data-bs-parent="#pgFaqAccordion">
                            <div class="accordion-body">
                                <p>We offer flexible pricing models including fixed-price projects, hourly rates, and dedicated team arrangements. Each project is custom-quoted based on your specific requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pg-faq">
                        <h2 class="accordion-header" id="pgFaqHead5">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pgFaqBody5"
                                aria-expanded="false" aria-controls="pgFaqBody5">
                                Can you work with existing systems?
                            </button>
                        </h2>
                        <div id="pgFaqBody5" class="accordion-collapse collapse"
                            aria-labelledby="pgFaqHead5" data-bs-parent="#pgFaqAccordion">
                            <div class="accordion-body">
                                <p>Absolutely! Our team excels at integrating with existing systems, APIs, and legacy applications. We ensure seamless connectivity with your current technology stack.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pg-faq">
                        <h2 class="accordion-header" id="pgFaqHead6">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pgFaqBody6"
                                aria-expanded="false" aria-controls="pgFaqBody6">
                                What technologies do you specialize in?
                            </button>
                        </h2>
                        <div id="pgFaqBody6" class="accordion-collapse collapse"
                            aria-labelledby="pgFaqHead6" data-bs-parent="#pgFaqAccordion">
                            <div class="accordion-body">
                                <p>We specialize in a wide range of technologies including PHP/Laravel, JavaScript/Node.js, React, Flutter, Swift, Kotlin, MySQL, MongoDB, and cloud platforms like AWS and Azure.</p>
                            </div>
                        </div>
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
                    <h2 class="fw-bold text-white mb-2">Still Have Questions?</h2>
                    <p class="mb-0" style="color:rgba(255,255,255,.7);">Our team is here to help. Reach out and we'll get back to you promptly.</p>
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
/* FAQ category filter — global so inline onclick works */
function pgFilterFaqs(cat, btn) {
    document.querySelectorAll('.faqs-page .pg-faq-tab').forEach(function (b) { b.classList.remove('pg-active'); });
    btn.classList.add('pg-active');
    document.querySelectorAll('.faqs-page .pg-faq-group').forEach(function (g) {
        g.style.display = (cat === 'all' || g.getAttribute('data-pg-group') === cat) ? '' : 'none';
    });
}

(function () {
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('pg-visible'); obs.unobserve(e.target); }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.faqs-page .pg-reveal, .faqs-page .pg-reveal-left, .faqs-page .pg-reveal-right, .faqs-page .pg-reveal-scale')
        .forEach(function (el) { obs.observe(el); });
})();
</script>
@endpush