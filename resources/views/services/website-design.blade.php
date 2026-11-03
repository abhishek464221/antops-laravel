@extends('layouts.app')

@section('title', 'Website Design Services | Antops Technologies')
@section('meta_description', 'Stunning, conversion-optimized website design services by Antops Technologies - custom UI/UX, mobile responsive, SEO-friendly and Figma/XD to HTML.')
@section('meta_keywords', 'website design services, custom website design, responsive web design, UI/UX design, Figma to HTML, SEO friendly website')

@push('styles')
<style>
/* Tech tab buttons */
.tech-tab-btn{
    padding:10px 24px;border-radius:30px;border:2px solid #e0e4ec;
    background:#fff;color:#555;font-weight:500;font-size:14px;
    cursor:pointer;transition:all .3s;
}
.tech-tab-btn.active{
    background:linear-gradient(135deg,#B0171F,#CF171F);
    color:#fff;border-color:transparent;
}
.tech-card{transition:all .3s;cursor:default;}
.tech-card:hover{transform:translateY(-4px);box-shadow:0 12px 28px rgba(207,23,31,.12)!important;}
.why-card{transition:all .3s;}
.why-card:hover{transform:translateY(-6px);box-shadow:0 16px 32px rgba(207,23,31,.1);border-color:rgba(207,23,31,.2)!important;}
.expertise-card{transition:all .3s;}
.expertise-card:hover{transform:translateY(-6px);box-shadow:0 20px 40px rgba(207,23,31,.12)!important;}
</style>
@endpush

@section('content')

<!-- ========== SECTION 1: HERO WITH FORM ========== -->
<section style="background:linear-gradient(135deg,#f0f4ff,#e8f0fe,#f0f4ff);padding:100px 0 60px;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-up">
                <span style="color:#2273f5;font-weight:600;font-size:14px;text-transform:uppercase;letter-spacing:1px;">Website Design</span>
                <h1 style="color:#8C1116;font-size:42px;font-weight:800;line-height:1.2;margin:10px 0 15px;">Stunning Website Design Services That Convert Visitors Into Customers</h1>
                <p style="color:#333;font-size:17px;line-height:1.8;">We create visually stunning, user-friendly, and conversion-optimized websites that reflect your brand identity. Our expert designers craft custom UI/UX experiences that engage visitors and drive measurable business results across all devices.</p>

                <div class="row g-3 mt-3">
                    <div class="col-6"><div class="d-flex gap-2"><i class="fas fa-check-circle" style="color:#CF171F;"></i><span style="color:#444;font-size:14px;">Custom UI/UX Design</span></div></div>
                    <div class="col-6"><div class="d-flex gap-2"><i class="fas fa-check-circle" style="color:#CF171F;"></i><span style="color:#444;font-size:14px;">Mobile Responsive</span></div></div>
                    <div class="col-6"><div class="d-flex gap-2"><i class="fas fa-check-circle" style="color:#CF171F;"></i><span style="color:#444;font-size:14px;">SEO Optimized</span></div></div>
                    <div class="col-6"><div class="d-flex gap-2"><i class="fas fa-check-circle" style="color:#CF171F;"></i><span style="color:#444;font-size:14px;">Figma/XD to HTML</span></div></div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div style="background:#fff;border-radius:20px;padding:30px;box-shadow:0 10px 40px rgba(0,0,0,0.08);">
                    <h4 style="color:#8C1116;font-weight:700;margin-bottom:5px;">Get a Free Quote</h4>
                    <p style="color:#666;font-size:13px;margin-bottom:20px;">Fill the form & our team will contact you within 24 hours.</p>
                    <form id="quoteForm">
                        @csrf
                        <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Your Name *" required style="border-radius:10px;padding:12px;"></div>
                        <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email Address *" required style="border-radius:10px;padding:12px;"></div>
                        <div class="mb-3"><input type="text" name="company" class="form-control" placeholder="Company Name" style="border-radius:10px;padding:12px;"></div>
                        <div class="mb-3">
                            <select name="service" class="form-select" style="border-radius:10px;padding:12px;">
                                <option>Website Design</option>
                                <option>Web Development</option>
                                <option>Mobile App</option>
                                <option>UI/UX Design</option>
                                <option>Digital Marketing</option>
                            </select>
                        </div>
                        <div class="mb-3"><textarea name="message" class="form-control" rows="3" placeholder="Tell us about your project..." style="border-radius:10px;padding:12px;"></textarea></div>
                        <button type="submit" class="btn w-100 text-white fw-bold" style="background:linear-gradient(135deg,#CF171F,#B0171F);border-radius:10px;padding:14px;">Submit Request <i class="fas fa-paper-plane ms-2"></i></button>
                    </form>
                    <div id="quoteAlert" class="d-none mt-3" style="border-radius:10px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== OVERVIEW: Left Image + Right Content ========== -->
<section style="background:#fff;padding:80px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                {{-- ⚠️ Verify actual extension: .jpg / .png / .webp (original file had .html) --}}
                <img src="{{ asset('assets/images/nw/services/digital-marketing/digital-marketing-home-banner.jpg') }}"
                     alt="Website Design Services"
                     class="img-fluid rounded-4 shadow-lg"
                     onerror="this.style.display='none'">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span style="color:#CF171F;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:1px;">Overview</span>
                <h2 style="color:#8C1116;font-weight:700;font-size:32px;margin-top:8px;margin-bottom:15px;">We Design Websites That <span style="color:#CF171F;">Drive Business Growth</span></h2>
                <p style="color:#555;line-height:1.9;font-size:15px;">At Antops Technologies, we understand that your website is the digital face of your business. Our expert design team combines creative excellence with strategic thinking to deliver websites that not only look stunning but also convert visitors into loyal customers.</p>
                <p style="color:#555;line-height:1.9;font-size:15px;">From custom UI/UX design to fully responsive layouts, we ensure every pixel serves a purpose. We follow a mobile-first approach with SEO-friendly coding practices to give your business the competitive edge it deserves.</p>
                <div class="row g-3 mt-3">
                    <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:35px;height:35px;background:rgba(207,23,31,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#CF171F;font-size:12px;"></i></div><span style="color:#444;font-weight:500;font-size:14px;">5+ Years Experience</span></div></div>
                    <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:35px;height:35px;background:rgba(207,23,31,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#CF171F;font-size:12px;"></i></div><span style="color:#444;font-weight:500;font-size:14px;">150+ Projects Delivered</span></div></div>
                    <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:35px;height:35px;background:rgba(207,23,31,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#CF171F;font-size:12px;"></i></div><span style="color:#444;font-weight:500;font-size:14px;">100% Client Satisfaction</span></div></div>
                    <div class="col-6"><div class="d-flex align-items-center gap-2"><div style="width:35px;height:35px;background:rgba(207,23,31,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-check" style="color:#CF171F;font-size:12px;"></i></div><span style="color:#444;font-weight:500;font-size:14px;">SEO Friendly Code</span></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== SECTION 2: WHY CHOOSE US ========== -->
<section style="background:#fff;padding:80px 0;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span style="color:#CF171F;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:1px;">Why Choose Us</span>
            <h2 style="color:#8C1116;font-weight:700;margin-top:8px;">We Create Websites That Drive Results</h2>
            <p style="color:#666;">Delivering exceptional design solutions with a client-first approach</p>
        </div>
        <div class="row g-4">
            @php
            $why = [
                ['fas fa-paint-brush','Creative Excellence','Our designers bring creativity and innovation to every project, ensuring your website stands out from competitors.'],
                ['fas fa-mobile-alt','Mobile-First Design','Every website we build is fully responsive and optimized for seamless performance across all devices.'],
                ['fas fa-search','SEO-Friendly Code','Clean, semantic HTML5 code structure that search engines love, helping you rank higher.'],
                ['fas fa-tachometer-alt','Fast Performance','Optimized images, minimal code, and best practices ensure lightning-fast load times.'],
                ['fas fa-headset','Dedicated Support','24/7 technical support and maintenance to keep your website running smoothly.'],
                ['fas fa-sync-alt','Unlimited Revisions','We work until you are 100% satisfied with the final design output.'],
            ];
            @endphp
            @foreach($why as $i => $w)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="p-4 h-100 why-card" style="border-radius:16px;border:1px solid #e8ecf4;">
                    <div class="mb-3" style="width:50px;height:50px;background:rgba(207,23,31,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="{{ $w[0] }}" style="color:#CF171F;font-size:22px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:600;">{{ $w[1] }}</h5>
                    <p style="color:#555;font-size:14px;line-height:1.7;">{{ $w[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== SECTION 3: OUR EXPERTISE ========== -->
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span style="color:#CF171F;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:1px;">Our Expertise</span>
            <h2 style="color:#8C1116;font-weight:700;margin-top:8px;">Website Design Services We Offer</h2>
        </div>
        <div class="row g-4">
            @php
            $expertise = [
                ['fas fa-pencil-ruler','UI/UX Design','User-centered interface design with intuitive navigation and engaging user experiences.'],
                ['fas fa-laptop-code','Responsive Web Design','Websites that look and function perfectly across desktop, tablet, and mobile devices.'],
                ['fas fa-rocket','Landing Page Design','High-converting landing pages optimized for campaigns and lead generation.'],
                ['fas fa-palette','Logo & Brand Identity','Complete brand identity with logo, color schemes, typography, and brand guidelines.'],
                ['fas fa-draw-polygon','Graphic Design','Professional graphics, banners, social media creatives for your brand.'],
                ['fas fa-file-alt','Figma/XD to HTML','Pixel-perfect conversion of your design files into responsive HTML/CSS websites.'],
            ];
            @endphp
            @foreach($expertise as $i => $e)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="bg-white p-4 h-100 expertise-card" style="border-radius:16px;box-shadow:0 2px 12px rgba(0,0,0,0.04);">
                    <div class="mb-3" style="width:55px;height:55px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:14px;display:flex;align-items:center;justify-content:center;">
                        <i class="{{ $e[0] }}" style="color:#fff;font-size:22px;"></i>
                    </div>
                    <h5 style="color:#8C1116;font-weight:600;">{{ $e[1] }}</h5>
                    <p style="color:#555;font-size:14px;line-height:1.7;">{{ $e[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== SECTION 4: CTA ========== -->
<section style="background:linear-gradient(135deg,#B0171F,#0a0a14);padding:70px 0;">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="text-white fw-bold mb-3">Ready to Get a Stunning Website?</h2>
        <p class="text-white-50 mb-4" style="font-size:18px;">Let's discuss your project and create a website that stands out from the competition.</p>
        <a href="{{ url('contact') }}" class="btn btn-light rounded-pill px-5 py-3 fw-bold" style="color:#B0171F;">Get Free Consultation <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
</section>

<!-- ========== SECTION 5: TECH STACK (Tabs) ========== -->
<section style="background:#fff;padding:80px 0;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span style="color:#CF171F;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:1px;">Our Tech Stack</span>
            <h2 style="color:#8C1116;font-weight:700;margin-top:8px;">Technologies We Use For Web Design</h2>
            <p style="color:#666;">Cutting-edge tools and technologies to build exceptional web experiences</p>
        </div>

        <div class="d-flex justify-content-center flex-wrap gap-2 mb-4" data-aos="fade-up">
            <button class="tech-tab-btn active" onclick="showTechTab('tab0', this)">Design Tools</button>
            <button class="tech-tab-btn" onclick="showTechTab('tab1', this)">Frontend</button>
            <button class="tech-tab-btn" onclick="showTechTab('tab2', this)">Frameworks</button>
            <button class="tech-tab-btn" onclick="showTechTab('tab3', this)">DevOps &amp; Tools</button>
        </div>

        <div id="techTabContent">
            {{-- TAB 0: Design Tools --}}
            <div class="tech-tab-pane" id="tab0" style="display:block;">
                <div class="row g-3">
                    @php
                    $designTools = [
                        ['fab fa-figma','Figma','UI/UX design & prototyping'],
                        ['fas fa-vector-square','Adobe XD','Vector-based design tool'],
                        ['fas fa-image','Photoshop','Image editing & graphics'],
                        ['fas fa-pen-nib','Illustrator','Vector graphics & icons'],
                        ['fas fa-pencil-ruler','Sketch','Digital design platform'],
                        ['fas fa-palette','Canva','Quick design & templates'],
                    ];
                    @endphp
                    @foreach($designTools as $t)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="bg-white p-4 d-flex align-items-center gap-3 tech-card" style="border-radius:14px;border:1px solid #e8ecf4;">
                            <div style="width:50px;height:50px;min-width:50px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                                <i class="{{ $t[0] }}" style="color:#fff;font-size:20px;"></i>
                            </div>
                            <div>
                                <h6 style="color:#8C1116;font-weight:600;margin:0;">{{ $t[1] }}</h6>
                                <small style="color:#888;">{{ $t[2] }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- TAB 1: Frontend --}}
            <div class="tech-tab-pane" id="tab1" style="display:none;">
                <div class="row g-3">
                    @php
                    $frontend = [
                        ['fab fa-html5','HTML5','Semantic markup'],
                        ['fab fa-css3-alt','CSS3','Modern styling'],
                        ['fab fa-js','JavaScript','Interactive functionality'],
                        ['fab fa-bootstrap','Bootstrap 5','Responsive framework'],
                        ['fas fa-wind','Tailwind CSS','Utility-first CSS'],
                        ['fas fa-code','jQuery','DOM manipulation'],
                    ];
                    @endphp
                    @foreach($frontend as $t)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="bg-white p-4 d-flex align-items-center gap-3 tech-card" style="border-radius:14px;border:1px solid #e8ecf4;">
                            <div style="width:50px;height:50px;min-width:50px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                                <i class="{{ $t[0] }}" style="color:#fff;font-size:20px;"></i>
                            </div>
                            <div>
                                <h6 style="color:#8C1116;font-weight:600;margin:0;">{{ $t[1] }}</h6>
                                <small style="color:#888;">{{ $t[2] }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- TAB 2: Frameworks --}}
            <div class="tech-tab-pane" id="tab2" style="display:none;">
                <div class="row g-3">
                    @php
                    $frameworks = [
                        ['fab fa-react','React.js','Component-based UI'],
                        ['fas fa-forward-step','Next.js','React framework'],
                        ['fab fa-vuejs','Vue.js','Progressive framework'],
                        ['fab fa-angular','Angular','Full MVC framework'],
                        ['fas fa-bolt','Svelte','Compiled framework'],
                        ['fas fa-mountain','Alpine.js','Lightweight reactivity'],
                    ];
                    @endphp
                    @foreach($frameworks as $t)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="bg-white p-4 d-flex align-items-center gap-3 tech-card" style="border-radius:14px;border:1px solid #e8ecf4;">
                            <div style="width:50px;height:50px;min-width:50px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                                <i class="{{ $t[0] }}" style="color:#fff;font-size:20px;"></i>
                            </div>
                            <div>
                                <h6 style="color:#8C1116;font-weight:600;margin:0;">{{ $t[1] }}</h6>
                                <small style="color:#888;">{{ $t[2] }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- TAB 3: DevOps & Tools --}}
            <div class="tech-tab-pane" id="tab3" style="display:none;">
                <div class="row g-3">
                    @php
                    $devops = [
                        ['fab fa-git-alt','Git','Version control'],
                        ['fas fa-laptop-code','VS Code','Code editor'],
                        ['fas fa-cubes','Webpack','Module bundler'],
                        ['fas fa-bolt-lightning','Vite','Build tool'],
                        ['fab fa-npm','NPM','Package manager'],
                        ['fab fa-chrome','Chrome DevTools','Debugging & testing'],
                    ];
                    @endphp
                    @foreach($devops as $t)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="bg-white p-4 d-flex align-items-center gap-3 tech-card" style="border-radius:14px;border:1px solid #e8ecf4;">
                            <div style="width:50px;height:50px;min-width:50px;background:linear-gradient(135deg,#B0171F,#CF171F);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                                <i class="{{ $t[0] }}" style="color:#fff;font-size:20px;"></i>
                            </div>
                            <div>
                                <h6 style="color:#8C1116;font-weight:600;margin:0;">{{ $t[1] }}</h6>
                                <small style="color:#888;">{{ $t[2] }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== SECTION 6: INDUSTRIES ========== -->
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span style="color:#CF171F;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:1px;">Industries We Serve</span>
            <h2 style="color:#8C1116;font-weight:700;margin-top:8px;">Web Design Solutions Across Industries</h2>
        </div>
        <div class="row g-3">
            @php
            $industries = ['Healthcare','Education & eLearning','Retail & E-Commerce','Real Estate','Banking & Finance','Manufacturing','Logistics & Transportation','Restaurant & Food','Travel & Hospitality','Automotive','Construction','Professional Services'];
            @endphp
            @foreach($industries as $i => $ind)
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                <div class="bg-white p-3 text-center" style="border-radius:12px;border:1px solid #e8ecf4;">
                    <i class="fas fa-check-circle" style="color:#CF171F;margin-right:6px;"></i>
                    <span style="color:#8C1116;font-weight:500;font-size:14px;">{{ $ind }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== SECTION 7: FAQ ========== -->
<section style="background:#fff;padding:80px 0;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span style="color:#CF171F;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:1px;">FAQ</span>
            <h2 style="color:#8C1116;font-weight:700;margin-top:8px;">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @php
                $faqs = [
                    ['How long does it take to design a website?','The timeline depends on complexity. A basic website takes 1-2 weeks, while complex projects can take 4-8 weeks. We provide a detailed timeline after project discussion.'],
                    ['Do you provide responsive design?','Yes! All our websites are fully responsive and mobile-friendly. We test across all major devices and screen sizes to ensure a seamless experience.'],
                    ['Can you redesign my existing website?','Absolutely! We specialize in website redesign. We analyze your current website, understand your goals, and create a modern, improved version.'],
                    ['What do you need from me to start?','We need your brand guidelines (if any), content, reference websites you like, and a clear understanding of your business goals and target audience.'],
                    ['Do you offer website maintenance?','Yes, we offer ongoing maintenance and support packages to keep your website updated, secure, and running smoothly after launch.'],
                ];
                @endphp
                @foreach($faqs as $i => $faq)
                <div class="mb-3" style="border:1px solid #e8ecf4;border-radius:12px;overflow:hidden;">
                    <button class="w-100 text-start p-4 border-0 bg-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}" style="color:#8C1116;font-weight:600;font-size:15px;">
                        {{ $faq[0] }} <i class="fas fa-chevron-down" style="color:#CF171F;"></i>
                    </button>
                    <div class="collapse" id="faq{{ $i }}"><div class="p-4 pt-0" style="color:#555;line-height:1.8;">{{ $faq[1] }}</div></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ========== SECTION 8: FINAL CTA ========== -->
<section style="background:linear-gradient(135deg,#B0171F,#CF171F);padding:80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="text-white fw-bold mb-2">Ready to Build a Scalable Web Application?</h2>
                <p class="text-white-50 mb-0" style="font-size:17px;">Get in touch with our experts and let's create something amazing together.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0" data-aos="fade-left">
                <a href="{{ url('contact') }}" class="btn btn-light rounded-pill px-5 py-3 fw-bold" style="color:#B0171F;">Start Your Project <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* Tech tab switching */
    window.showTechTab = function (tabId, btn) {
        document.querySelectorAll('.tech-tab-pane').forEach(function(p){ p.style.display = 'none'; });
        var target = document.getElementById(tabId);
        if (target) target.style.display = 'block';

        document.querySelectorAll('.tech-tab-btn').forEach(function(b){
            b.classList.remove('active');
        });
        btn.classList.add('active');
    };

    /* Quote form submit */
    var form = document.getElementById('quoteForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var $form = $(this), $btn = $form.find('button[type="submit"]'), $alert = $('#quoteAlert');
            $btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Sending...');
            $alert.removeClass('d-none alert-success alert-danger').addClass('alert-info').html('<i class="fas fa-info-circle me-2"></i> Sending...');

            $.ajax({
                url: '{{ url("contact") }}',
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function (r) {
                    $alert.removeClass('alert-info alert-danger').addClass('alert-success')
                        .html('<i class="fas fa-check-circle me-2"></i>' + (r.message || 'Thank you! We will contact you soon.'));
                    $form[0].reset();
                    $btn.html('<i class="fas fa-check me-2"></i> Sent!');
                    setTimeout(function () {
                        $btn.html('Submit Request <i class="fas fa-paper-plane ms-2"></i>');
                        $alert.addClass('d-none');
                    }, 5000);
                },
                error: function (xhr) {
                    $alert.removeClass('alert-info alert-success').addClass('alert-danger');
                    var msg = 'Something went wrong. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.errors) msg = Object.values(xhr.responseJSON.errors).flat().join(' ');
                    else if (xhr.responseJSON && xhr.responseJSON.message) msg = xhr.responseJSON.message;
                    $alert.html('<i class="fas fa-exclamation-circle me-2"></i>' + msg);
                    $btn.html('Submit Request <i class="fas fa-paper-plane ms-2"></i>');
                },
                complete: function () { $btn.prop('disabled', false); }
            });
        });
    }
});
</script>
@endpush