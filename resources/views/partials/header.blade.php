<style>
.top-bar { background: #B0171F; font-family: 'Inter'; font-size: 13px; color: #fff;
    border-bottom: 2px solid #CF171F; box-shadow: 0 2px 10px rgba(38,66,124,.15); }
.top-bar a { color: #fff; text-decoration: none; transition: color .3s; }
.top-bar a:hover {
    color: #fff;
    font-weight: 500;
}
.top-bar .top-inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
.top-bar .top-left, .top-bar .top-right { display: flex; align-items: center; gap: 22px; flex-wrap: wrap; }
.top-bar .top-item { display: inline-flex; align-items: center; gap: 7px; padding: 8px 0; }
.top-bar .top-item i { color: #CF171F; font-size: 13px; }
.top-bar .top-social { display: inline-flex; gap: 14px; }
.top-bar .top-social a { color: #fff; font-size: 15px; transition: color .3s, transform .3s; }
.top-bar .top-social a:hover { color: #ffffff; transform: translateY(-1px); }

.header { position: sticky !important; top: 0 !important; z-index: 99 !important;
    height: 75px !important; box-shadow: 0 6px 30px -8px rgba(38,66,124,.18);
    border-bottom: 3px solid transparent;
    border-image: linear-gradient(90deg, #B0171F, #CF171F, #B0171F) 1; align-items: stretch; }
.header .container { height: 100%; display: flex; align-items: center; }
.header .header-wrapper { width: 100%; display: flex !important; align-items: center !important; justify-content: space-between !important; padding: 0 !important; }
.header .logo { display: flex; align-items: center; padding: 0 !important; }
.header .logo img { height: 44px !important; width: auto !important; }
.header .main-menu { display: flex; align-items: center; margin: 0 auto; }
.header .main-menu .menu { display: flex; align-items: center; }
.header .main-menu .menu li { margin: 0 14px; }
.header .main-menu .menu > li > a { font-size: 15px !important; font-weight: 500 !important;
    font-family: 'Open Sans', sans-serif !important; color: #333 !important;
    padding-bottom: 0 !important; line-height: 30px; }
.header .main-menu .menu > li > a:before { bottom: -4px; }
.header .right-button { display: inline-flex; align-items: center; gap: 14px; }
.header .right-button a.btn { font-size: 15px !important; font-weight: 600 !important;
    font-family: 'Open Sans', sans-serif !important; padding: 10px 24px; display: inline-flex; align-items: center; }
.header .mobile-menu-toggle { display: inline-flex; align-items: center; }
.header .menu .mega-menu { font-size: 14px; }
.header .mega-menu { top: 75px !important; }
.header .mega-menu.services .megamenu-verticle-menu .megamenu-verticle-tab-content ul.list-columns {
    display: flex !important; flex-direction: row !important; flex-wrap: wrap !important;
    gap: 6px 16px !important; padding: 0 !important; margin: 0 !important; width: 100% !important; }
.header .mega-menu.services .megamenu-verticle-menu .megamenu-verticle-tab-content ul.list-columns li {
    width: calc(50% - 8px) !important; flex: 0 0 calc(50% - 8px) !important;
    margin: 0 !important; display: block !important; max-width: none !important; }
.header .resources-nav { position: relative; }
.resources-dropdown { position: absolute; top: calc(100% + 10px); left: 50%; transform: translateX(-50%);
    min-width: 230px; background: #fff; border-radius: 14px;
    box-shadow: 0 20px 44px -16px rgba(176,23,31,.3);
    border: 1px solid rgba(176,23,31,.08);
    opacity: 0; visibility: hidden; transition: .2s;
    padding: 10px 0; z-index: 10; }
.resources-nav:hover .resources-dropdown { opacity: 1; visibility: visible; }
.resources-dropdown::before { content: ""; position: absolute; top: -10px; left: 0; right: 0; height: 10px; }
.resources-dropdown ul { list-style: none; margin: 0; padding: 0; }
.resources-dropdown li a { display: flex; align-items: center; gap: 10px;
    padding: 10px 22px; color: #333; font-size: 14px; font-weight: 500;
    transition: all .2s ease; line-height: 22px; }
.resources-dropdown li a i { color: #CF171F; font-size: 12px; }
.resources-dropdown li a:hover { background: rgba(207,23,31,.1); color: #B0171F; padding-left: 28px; }
.internalPage { margin-top: 0 !important; }
@media (max-width: 1199px) {
    .resources-dropdown { position: static; opacity: 1; visibility: visible; transform: none;
        box-shadow: none; border: none; min-width: 0; padding: 0 0 10px 16px; }
    .resources-dropdown::before { display: none; }
    .resources-dropdown li a { padding: 8px 14px; font-size: 14px; }
    .header .main-menu .menu > li > a { font-size: 16px; }
    .header .main-menu .menu li.has-children > a::after { display: none; }
    .header .main-menu .menu li.has-children > a::before { display: none; }
    .header .main-menu .menu li.has-children .resources-dropdown { margin-top: 4px; }
    .megamenu-verticle-menu .megamenu-verticle-tab-list ul { display: flex !important; flex-wrap: wrap; gap: 8px; }
    .megamenu-verticle-menu .megamenu-verticle-tab-list ul > li {
        margin: 0 !important; padding: 7px 14px !important; width: auto !important;
        border: 1px solid #e3e8f2 !important; border-radius: 30px !important;
        font-size: 13px !important; background: #fff; color: #333; white-space: nowrap; }
    .megamenu-verticle-menu .megamenu-verticle-tab-list ul > li.active {
        background: linear-gradient(135deg, #B0171F, #B0171F) !important;
        color: #CF171F !important; border-color: #B0171F !important; }
    .megamenu-verticle-menu .megamenu-verticle-tab-list ul > li i.fa-chevron-right { display: none; }
    .header .mega-menu .list-columns li { width: calc(50% - 8px) !important; }
    .header .mega-menu { max-height: 72vh; overflow-y: auto; }
}
@media (max-width: 991.98px) {
    .top-bar .top-item.hours { display: none; }
    .header .logo img { width: 150px !important; height: auto !important; }
}
@media (max-width: 575.98px) {
    .top-bar .top-right { display: none; }
    .top-bar .top-left { margin: 0 auto; }
}

/* ================================================================
   FIX: Menu icons appearing BELOW text — force all on same line
   ================================================================ */

/* ---------- MAIN MENU ITEMS (Company, Services, etc.) ---------- */
.header .main-menu .menu > li > a {
    display: inline-flex !important;
    align-items: center !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    white-space: nowrap !important;
    gap: 6px !important;
}
.header .main-menu .menu > li > a > i.fa-chevron-down {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: auto !important;
    height: auto !important;
    min-width: 0 !important;
    font-size: 10px !important;
    line-height: 1 !important;
    margin: 0 !important;
    padding: 0 !important;
    position: static !important;
    vertical-align: middle !important;
    transform: none !important;
}

/* ---------- SERVICES MEGA-MENU TABS ---------- */
.megamenu-verticle-menu .service-tab-item {
    display: flex !important;
    align-items: center !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    white-space: nowrap !important;
    gap: 4px !important;
    width: 100% !important;
    cursor: pointer;
}
.megamenu-verticle-menu .service-tab-item > i {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: auto !important;
    height: auto !important;
    margin: 0 !important;
    padding: 0 !important;
    position: static !important;
    line-height: 1 !important;
    vertical-align: middle !important;
}
.megamenu-verticle-menu .service-tab-item > i.fa-chevron-right {
    margin-left: auto !important;
    font-size: 10px !important;
}

/* ---------- ABOUT-COMPANY LIST LINKS (arrow at end) ---------- */
.about-company .list-columns li > a {
    display: flex !important;
    align-items: center !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    justify-content: space-between !important;
    white-space: nowrap !important;
    gap: 6px !important;
}
.about-company .list-columns li > a > i.menu-arrow {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: auto !important;
    margin: 0 !important;
    font-size: 11px !important;
    line-height: 1 !important;
    position: static !important;
}

/* ---------- SERVICES TAB CONTENT LINKS (arrow at end) ---------- */
.megamenu-verticle-tab-content .list-columns li > a {
    display: flex !important;
    align-items: center !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    justify-content: space-between !important;
    white-space: nowrap !important;
    gap: 6px !important;
}
.megamenu-verticle-tab-content .list-columns li > a > i.menu-arrow {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: auto !important;
    margin: 0 !important;
    font-size: 11px !important;
    line-height: 1 !important;
}

/* ---------- SOLUTIONS MEGA-MENU (icon + content block) ---------- */
.mega-menu.solutions-we-have .list-columns li > a {
    display: flex !important;
    align-items: flex-start !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 8px !important;
}
.mega-menu.solutions-we-have .list-columns li > a > img {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: 24px !important;
    height: 24px !important;
    margin-top: 2px !important;
}
.mega-menu.solutions-we-have .list-columns li > a > .content {
    flex: 1 1 auto !important;
    min-width: 0 !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 2px !important;
}

/* ---------- TECHNOLOGIES MENU (arrow at end) ---------- */
.mega-menu.our-technologies .list-columns li > a {
    display: flex !important;
    align-items: center !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    justify-content: space-between !important;
    white-space: nowrap !important;
    gap: 6px !important;
}
.mega-menu.our-technologies .list-columns li > a > i.menu-arrow {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: auto !important;
    margin: 0 !important;
    font-size: 11px !important;
    line-height: 1 !important;
}

/* ---------- RESOURCES DROPDOWN ---------- */
.resources-dropdown li > a {
    display: flex !important;
    align-items: center !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 10px !important;
    white-space: nowrap !important;
}
.resources-dropdown li > a > i {
    display: inline-block !important;
    flex: 0 0 auto !important;
    width: auto !important;
    height: auto !important;
    margin: 0 !important;
    line-height: 1 !important;
}

/* ---------- GLOBAL SAFETY OVERRIDE ---------- */
/* Ensures NO theme rule can force icons to block/column again */
.header .main-menu .menu i,
.header .main-menu .menu .fa,
.header .main-menu .menu .fas,
.header .main-menu .menu .far,
.header .main-menu .menu .fab,
.header .main-menu .menu .fa-solid,
.header .main-menu .menu .fa-brands {
    display: inline-block !important;
    vertical-align: middle !important;
    flex-shrink: 0 !important;
}
</style>

<div class="top-bar">
    <div class="container">
        <div class="top-inner">
            <div class="top-left">
                <span class="top-item">
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="https://wa.me/916265497272" target="_blank">IND: +91 6265497272</a>
                </span>
                <span class="top-item">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+9728052653">USA: (972) 805 2653</a>
                </span>
                <span class="top-item">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+61480014926">AUS: (480) 014 926</a>
                </span>
                <span class="top-item">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:info@antops.com">info@antops.com</a>
                </span>
            </div>
            <div class="top-right">
                <span class="top-social">
                    <a href="https://www.facebook.com/antopstechnologies" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/antopstech" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com/antopstechnologies/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/antops-technologies/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </span>
            </div>
        </div>
    </div>
</div>

<header class="header inner-page for-desktop">
    <div class="container">
        <div class="header-wrapper d-flex align-items-center justify-content-between">
            {{-- ✅ Logo fixed --}}
            <a class="logo" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/ryvora-logo.png') }}" alt="Antops Technologies" class="logo-light" />
                <img src="{{ asset('assets/images/ryvora-logo.png') }}" alt="Antops Technologies" class="logo-dark" />
            </a>
            <div class="mobile-sidebar-backdrop"></div>
            <div class="main-menu">
                <div class="close-btn close-menu"><i class="fa fa-times"></i></div>
                <ul class="menu">
                    {{-- ==================== COMPANY ==================== --}}
                    <li class="menu-item has-children">
                        <a href="javascript:void(0);">Company
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="mega-menu about-company">
                            <div class="container">
                                <div class="inner d-flex">
                                    <div class="left-links">
                                        <div class="left-link-wrap">
                                            <div class="list-links">
                                                <div class="list-link-title">
                                                    <div class="mb-2 about-company-h4">The Company</div>
                                                </div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ route('about') }}">About Us<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('our-process') }}">Our Process<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('careers') }}">Careers<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('clients') }}">Clients<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('internship') }}">Internship<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <div class="list-link-title">
                                                    <div class="mb-2 about-company-h4">Resources</div>
                                                </div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ route('blog') }}">Blog<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('faqs') }}">FAQs<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('news-events') }}">News & Events<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('success-stories') }}">Success Stories<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ route('industries') }}">Industries<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="about-company-right-heading">Think Digital. Think Antops.</div>
                                            </div>
                                            {{-- ✅ Counter icons fixed --}}
                                            <div class="col-lg-6">
                                                <div class="counter-card">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icons/year-of-experience.png') }}" alt="" />
                                                    </div>
                                                    <div class="content">
                                                        <div class="about-counter-title">5+</div>
                                                        <p>Years in Business</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="counter-card">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icons/projects-completed.png') }}" alt="" />
                                                    </div>
                                                    <div class="content">
                                                        <div class="about-counter-title">150+</div>
                                                        <p>Projects Delivered</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="counter-card">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icons/client-relationship.png') }}" alt="" />
                                                    </div>
                                                    <div class="content">
                                                        <div class="about-counter-title">100+</div>
                                                        <p>Happy Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="counter-card">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/icons/client-relationship.png') }}" alt="" />
                                                    </div>
                                                    <div class="content">
                                                        <div class="about-counter-title">10+</div>
                                                        <p>Countries Served</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- ==================== SERVICES ==================== --}}
                    <li class="menu-item has-children">
                        <a href="{{ url('services') }}">Services
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="mega-menu services">
                            <div class="container">
                                <div class="inner d-flex">
                                    <div class="left-links">
                                        <div class="megamenu-verticle-menu">
                                            <div class="megamenu-verticle-tab-list">
                                                <div class="blue-title heading-font text-primary-blue">Our Services</div>
                                                <ul id="service-tab" role="tablist">
                                                    <li class="service-tab-item active" data-bs-toggle="tab" data-bs-target="#svc-tab-1" type="button" role="tab" aria-selected="true">
                                                        <i class="fas fa-paint-brush" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>UI/UX Design
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </li>
                                                    <li class="service-tab-item" data-bs-toggle="tab" data-bs-target="#svc-tab-2" type="button" role="tab" aria-selected="false">
                                                        <i class="fas fa-globe" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Web Application Development
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </li>
                                                    <li class="service-tab-item" data-bs-toggle="tab" data-bs-target="#svc-tab-3" type="button" role="tab" aria-selected="false">
                                                        <i class="fas fa-mobile-alt" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Mobile Application Development
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </li>
                                                    <li class="service-tab-item" data-bs-toggle="tab" data-bs-target="#svc-tab-4" type="button" role="tab" aria-selected="false">
                                                        <i class="fas fa-laptop-code" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Software Development
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </li>
                                                    <li class="service-tab-item" data-bs-toggle="tab" data-bs-target="#svc-tab-5" type="button" role="tab" aria-selected="false">
                                                        <i class="fas fa-bullhorn" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Digital Marketing &amp; Branding
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </li>
                                                    <li class="service-tab-item" data-bs-toggle="tab" data-bs-target="#svc-tab-6" type="button" role="tab" aria-selected="false">
                                                        <i class="fas fa-cloud" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Cloud &amp; Hosting
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="megamenu-verticle-tab-content tab-content" id="service-tabContent">
                                                {{-- Tab 1: UI/UX --}}
                                                <div class="service-verticle-tab-contentItem tab-pane fade active show" id="svc-tab-1" role="tabpanel">
                                                    <div class="tab-content-wrap">
                                                        <div class="content-wrap">
                                                            <div class="top-content">
                                                                <div class="megamenu-main-heading"><i class="fas fa-paint-brush" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>UI/UX Design</div>
                                                                <p>Crafting intuitive, user-centered interfaces that delight users and drive conversions.</p>
                                                            </div>
                                                            <ul class="list-columns">
                                                                <li><a href="{{ url('services/uiux-design') }}">UI/UX Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/website-design') }}">Website Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/mobile-app-uiux-design') }}">Mobile App UI/UX Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/landing-page-design') }}">Landing Page Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/dashboard-admin-panel-design') }}">Dashboard &amp; Admin Panel Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/logo-brand-identity-design') }}">Logo &amp; Brand Identity Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/graphic-design') }}">Graphic Design<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/prototyping-wireframing') }}">Prototyping &amp; Wireframing<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <div class="service-menu-card bg-pink-1">
                                                                <div class="wrap">
                                                                    <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                    <p>Think Digital. Think Antops.</p>
                                                                </div>
                                                                <a href="{{ url('services') }}" class="btn btn-blue-2 py-2 radius-0">View All Service<i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Tab 2: Web --}}
                                                <div class="service-verticle-tab-contentItem tab-pane fade" id="svc-tab-2" role="tabpanel">
                                                    <div class="tab-content-wrap">
                                                        <div class="content-wrap">
                                                            <div class="top-content">
                                                                <div class="megamenu-main-heading"><i class="fas fa-globe" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Web Application Development</div>
                                                                <p>Building scalable, high-performance web apps and portals for modern businesses.</p>
                                                            </div>
                                                            <ul class="list-columns">
                                                                <li><a href="{{ url('services/website-development') }}">Website Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/web-application-development') }}">Web Application Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/e-commerce-development') }}">E-Commerce Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/cms-development') }}">CMS Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/saas-application-development') }}">SaaS Application Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/web-portal-development') }}">Web Portal Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/api-development-integration') }}">API Development &amp; Integration<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/progressive-web-app-development') }}">Progressive Web App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <div class="service-menu-card bg-pink-1">
                                                                <div class="wrap">
                                                                    <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                    <p>Think Digital. Think Antops.</p>
                                                                </div>
                                                                <a href="{{ url('services') }}" class="btn btn-blue-2 py-2 radius-0">View All Service<i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Tab 3: Mobile --}}
                                                <div class="service-verticle-tab-contentItem tab-pane fade" id="svc-tab-3" role="tabpanel">
                                                    <div class="tab-content-wrap">
                                                        <div class="content-wrap">
                                                            <div class="top-content">
                                                                <div class="megamenu-main-heading"><i class="fas fa-mobile-alt" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Mobile Application Development</div>
                                                                <p>Native and cross-platform mobile apps that engage users on iOS and Android.</p>
                                                            </div>
                                                            <ul class="list-columns">
                                                                <li><a href="{{ url('services/android-app-development') }}">Android App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/ios-app-development') }}">iOS App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/flutter-app-development') }}">Flutter App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/react-native-app-development') }}">React Native App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/e-commerce-app-development') }}">E-Commerce App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/on-demand-app-development') }}">On-Demand App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/business-enterprise-app-development') }}">Business &amp; Enterprise App Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/mobile-app-maintenance-support') }}">Mobile App Maintenance &amp; Support<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <div class="service-menu-card bg-pink-1">
                                                                <div class="wrap">
                                                                    <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                    <p>Think Digital. Think Antops.</p>
                                                                </div>
                                                                <a href="{{ url('services') }}" class="btn btn-blue-2 py-2 radius-0">View All Service<i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Tab 4: Software --}}
                                                <div class="service-verticle-tab-contentItem tab-pane fade" id="svc-tab-4" role="tabpanel">
                                                    <div class="tab-content-wrap">
                                                        <div class="content-wrap">
                                                            <div class="top-content">
                                                                <div class="megamenu-main-heading"><i class="fas fa-laptop-code" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Software Development</div>
                                                                <p>Custom-built software solutions including ERP, CRM, HRMS and more.</p>
                                                            </div>
                                                            <ul class="list-columns">
                                                                <li><a href="{{ url('services/custom-software-development') }}">Custom Software Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/erp-software-development') }}">ERP Software Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/crm-software-development') }}">CRM Software Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/hrms-software-development') }}">HRMS Software Development<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/school-management-software') }}">School Management Software<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/hospital-management-software') }}">Hospital Management Software<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/inventory-management-software') }}">Inventory Management Software<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/billing-pos-software') }}">Billing &amp; POS Software<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <div class="service-menu-card bg-pink-1">
                                                                <div class="wrap">
                                                                    <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                    <p>Think Digital. Think Antops.</p>
                                                                </div>
                                                                <a href="{{ url('services') }}" class="btn btn-blue-2 py-2 radius-0">View All Service<i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Tab 5: Digital Marketing --}}
                                                <div class="service-verticle-tab-contentItem tab-pane fade" id="svc-tab-5" role="tabpanel">
                                                    <div class="tab-content-wrap">
                                                        <div class="content-wrap">
                                                            <div class="top-content">
                                                                <div class="megamenu-main-heading"><i class="fas fa-bullhorn" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Digital Marketing &amp; Branding</div>
                                                                <p>Data-driven marketing strategies to boost visibility, traffic and ROI.</p>
                                                            </div>
                                                            <ul class="list-columns">
                                                                <li><a href="{{ url('services/search-engine-optimization-seo') }}">Search Engine Optimization (SEO)<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/local-seo-services') }}">Local SEO Services<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/google-ads-ppc-management') }}">Google Ads &amp; PPC Management<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/social-media-marketing') }}">Social Media Marketing<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/content-marketing') }}">Content Marketing<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/branding-brand-identity') }}">Branding &amp; Brand Identity<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/online-reputation-management') }}">Online Reputation Management<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/conversion-rate-optimization-cro') }}">Conversion Rate Optimization (CRO)<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <div class="service-menu-card bg-pink-1">
                                                                <div class="wrap">
                                                                    <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                    <p>Think Digital. Think Antops.</p>
                                                                </div>
                                                                <a href="{{ url('services') }}" class="btn btn-blue-2 py-2 radius-0">View All Service<i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Tab 6: Cloud --}}
                                                <div class="service-verticle-tab-contentItem tab-pane fade" id="svc-tab-6" role="tabpanel">
                                                    <div class="tab-content-wrap">
                                                        <div class="content-wrap">
                                                            <div class="top-content">
                                                                <div class="megamenu-main-heading"><i class="fas fa-cloud" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Cloud &amp; Hosting</div>
                                                                <p>Reliable cloud infrastructure, hosting and server management services.</p>
                                                            </div>
                                                            <ul class="list-columns">
                                                                <li><a href="{{ url('services/cloud-hosting-services') }}">Cloud Hosting Services<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/vps-hosting') }}">VPS Hosting<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/dedicated-server-hosting') }}">Dedicated Server Hosting<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/domain-business-email') }}">Domain &amp; Business Email<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/aws-cloud-services') }}">AWS Cloud Services<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/cloud-migration-services') }}">Cloud Migration Services<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/server-management-security') }}">Server Management &amp; Security<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                <li><a href="{{ url('services/website-backup-maintenance') }}">Website Backup &amp; Maintenance<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <div class="service-menu-card bg-pink-1">
                                                                <div class="wrap">
                                                                    <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                    <p>Think Digital. Think Antops.</p>
                                                                </div>
                                                                <a href="{{ url('services') }}" class="btn btn-blue-2 py-2 radius-0">View All Service<i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-group" id="accordion-1" role="tablist" aria-multiselectable="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- ==================== OUR WORK ==================== --}}
                    <li class="menu-item">
                        <a href="{{ url('portfolio') }}">Our Work</a>
                    </li>

                    {{-- ==================== SOLUTIONS ==================== --}}
                    <li class="menu-item has-children">
                        <a href="javascript:void(0);">Solutions
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="mega-menu solutions-we-have">
                            <div class="container">
                                <div class="inner d-flex">
                                    <div class="left-links">
                                        <div class="blue-title heading-font text-primary-blue">Digital & AI Software Solutions</div>
                                        <div class="list-links-wrap">
                                            <div class="list-links">
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('solutions/crm-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-d947159f-b7cc-46ff-8f11-8db95e665d10.png') }}" alt="CRM Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>CRM Software</span><p>Manage leads, customers, sales and follow-ups with a powerful CRM.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/erp-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-5393acea-b1e2-4149-bbe2-b5e8d19c3270.png') }}" alt="ERP Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>ERP Software</span><p>Manage business operations with a complete ERP solution.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/hr-payroll-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-5931bf24-06a0-4611-b14b-90d760980d05.png') }}" alt="HR &amp; Payroll Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>HR &amp; Payroll Software</span><p>Manage employee records, attendance, leave and payroll.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/school-management-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-02bd8563-f78e-4d63-82b7-51d440897fe2.png') }}" alt="School Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>School Management Software</span><p>Manage admissions, students, attendance and exams.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/hospital-management-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-01757ded-3906-4127-bda7-832810bc46e2.png') }}" alt="Hospital Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Hospital Management Software</span><p>Manage patients, appointments, staff and hospital operations.</p></div></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('solutions/food-ordering-system') }}"><img src="{{ asset('uploads/solutions/icons/icon-a487e24d-b7b9-4db2-92bc-ac6aacee35a1.png') }}" alt="Food Ordering System" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Food Ordering System</span><p>multi-vendor food ordering with online payments</p></div></a></li>
                                                    <li><a href="{{ url('solutions/inventory-management') }}"><img src="{{ asset('uploads/solutions/icons/icon-393e63d1-a10d-4df6-b35e-5763026ee9e8.png') }}" alt="Inventory Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Inventory Management</span><p>Track stock, purchases, sales and warehouses with ease.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/car-rental-system') }}"><img src="{{ asset('uploads/solutions/icons/icon-8c93dcfe-ca98-4f13-b227-e93d40760a70.png') }}" alt="Car Rental System" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Car Rental System</span><p>Vehicle booking, fleet management, for car ...</p></div></a></li>
                                                    <li><a href="{{ url('solutions/accounting-billing-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-653adc45-eb80-4b6f-a586-0f6e391c8c62.png') }}" alt="Accounting &amp; Billing Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Accounting &amp; Billing Software</span><p>Manage accounts, invoices, expenses and financial reports.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/restaurant-management') }}"><img src="{{ asset('uploads/solutions/icons/icon-789f2dc7-dfea-43a1-816f-2f6eaa466760.png') }}" alt="Restaurant Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Restaurant Management</span><p>Manage orders, billing, menu and restaurant operations.</p></div></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('solutions/hotel-management-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-4ac6669b-bca9-48af-85e4-126d394cff59.png') }}" alt="Hotel Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Hotel Management Software</span><p>Manage rooms, bookings, guests and hotel operations.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/job-portal') }}"><img src="{{ asset('uploads/solutions/icons/icon-7519619b-df96-4da1-97fd-8caabb96d01a.png') }}" alt="Job Portal" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Job Portal</span><p>tracking portals for recruitment platforms and corporate hiring.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/logistics-fleet-management') }}"><img src="{{ asset('uploads/solutions/icons/icon-2c5cded0-3dbf-40b7-b1d9-8c1e9e086be4.png') }}" alt="Logistics &amp; Fleet Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Logistics &amp; Fleet Management</span><p>Track vehicles, shipments, routes and maintenance.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/e-commerce-platform') }}"><img src="{{ asset('uploads/solutions/icons/icon-78c1bd6f-bf85-4e3c-853d-8e2168669563.png') }}" alt="E-Commerce Platform" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>E-Commerce Platform</span><p>Launch and manage your online store with ease.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/real-estate-crm') }}"><img src="{{ asset('uploads/solutions/icons/icon-187d537a-07a8-4c0f-9953-8e215b08878d.png') }}" alt="Real Estate CRM" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Real Estate CRM</span><p>Manage property leads, clients, listings and site visits.</p></div></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('solutions/pos-retail-management') }}"><img src="{{ asset('uploads/solutions/icons/icon-eae3f800-48c6-4e04-96dc-65e589c8cef3.png') }}" alt="POS &amp; Retail Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>POS &amp; Retail Management</span><p>Manage billing, sales, products and retail operations.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/on-demand-home-services') }}"><img src="{{ asset('uploads/solutions/icons/icon-9cc91067-5646-4dbd-ae42-53b8b8c4d928.png') }}" alt="On-Demand Home Services" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>On-Demand Home Services</span><p>Multi-service home services marketplace with booking</p></div></a></li>
                                                    <li><a href="{{ url('solutions/project-management-software') }}"><img src="{{ asset('uploads/solutions/icons/icon-c8aea6eb-4a6e-469f-8b90-7da34d220431.png') }}" alt="Project Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Project Management Software</span><p>Plan, track and manage projects, tasks and teams.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/learning-management-system') }}"><img src="{{ asset('uploads/solutions/icons/icon-df333413-b730-44e6-9483-b396c52a0718.png') }}" alt="Learning Management System" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Learning Management System</span><p>Create, manage and deliver online courses with ease.</p></div></a></li>
                                                    <li><a href="{{ url('solutions/appointment-booking') }}"><img src="{{ asset('uploads/solutions/icons/icon-131bf431-0b2d-4809-94d5-9701ac63dc78.png') }}" alt="Appointment &amp; Booking" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Appointment &amp; Booking</span><p>Manage appointments, schedules, staff and bookings.</p></div></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- ==================== TECHNOLOGIES ==================== --}}
                    <li class="menu-item has-children">
                        <a href="{{ url('technologies') }}">Technologies
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="mega-menu our-technologies">
                            <div class="container">
                                <div class="inner d-flex">
                                    <div class="left-links">
                                        <div class="list-links-wrap">
                                            <div class="list-links">
                                                <div class="list-link-title"><div class="technology-menu-heading mb-2">Frontend Technologies</div></div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('technology/html5') }}">HTML5<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/css3') }}">CSS3<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/javascript') }}">JavaScript<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/reactjs') }}">React.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/next') }}">Next.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/vuejs') }}">Vue.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/angular') }}">Angular<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/bootstrap') }}">Bootstrap<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/tailwind-css') }}">Tailwind CSS<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <div class="list-link-title"><div class="technology-menu-heading mb-2">Backend</div></div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('technology/php-development-services') }}">PHP<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/laravel-development-services') }}">Laravel<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/nodejs-development-services') }}">Node.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/python-development-services') }}">Python<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/django-development-services') }}">Django<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/net-development-services') }}">.NET<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/java-development-services') }}">Java<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/spring-boot-development-services') }}">Spring Boot<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <div class="list-link-title"><div class="technology-menu-heading mb-2">Database Technologies</div></div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('technology/mysql') }}">MySQL<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/postgresql') }}">PostgreSQL<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/mongodb') }}">MongoDB<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/microsoft-sql-server') }}">Microsoft SQL Server<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/firebase') }}">Firebase<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/redis') }}">Redis<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <div class="list-link-title"><div class="technology-menu-heading mb-2">Cloud &amp; DevOps</div></div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('technology/aws') }}">AWS<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/microsoft-azure') }}">Microsoft Azure<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/google-cloud') }}">Google Cloud<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/docker') }}">Docker<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/kubernetes') }}">Kubernetes<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/cicd') }}">CI/CD<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/github-actions') }}">GitHub Actions<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="list-links">
                                                <div class="list-link-title"><div class="technology-menu-heading mb-2">Mobile App Development</div></div>
                                                <ul class="list-columns">
                                                    <li><a href="{{ url('technology/android') }}">Android<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/ios') }}">iOS<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/flutter') }}">Flutter<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/react-native') }}">React Native<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/kotlin') }}">Kotlin<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                    <li><a href="{{ url('technology/swift') }}">Swift<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </li>

                    {{-- ==================== RESOURCES ==================== --}}
                    <li class="menu-item has-children resources-nav">
                        <a href="javascript:void(0);">Resources
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="resources-dropdown">
                            <ul>
                                <li><a href="{{ url('blog') }}"><i class="fa-solid fa-chevron-right"></i> Blog</a></li>
                                <li><a href="{{ url('faqs') }}"><i class="fa-solid fa-chevron-right"></i> FAQs</a></li>
                                <li><a href="{{ url('news-events') }}"><i class="fa-solid fa-chevron-right"></i> News &amp; Events</a></li>
                                <li><a href="{{ url('success-stories') }}"><i class="fa-solid fa-chevron-right"></i> Success Stories</a></li>
                                <li><a href="{{ url('industries') }}"><i class="fa-solid fa-chevron-right"></i> Industries</a></li>
                            </ul>
                        </div>
                    </li>

                    {{-- ==================== CONTACT ==================== --}}
                    <li class="menu-item">
                        <a href="{{ url('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="right-button">
                <a href="{{ url('get-quote') }}" class="btn py-2" style="background:#CF171F; color:#fff; border-radius:4px;">Get Quote</a>
                <a class="mobile-menu-toggle" href="javascript:void(0);">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </div>
        </div>
    </div>
</header>