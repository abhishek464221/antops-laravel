<style>
.top-bar { background: #B0171F; font-family: 'Inter'; font-size: 13px; color: #fff;
    border-bottom: 2px solid #CF171F; box-shadow: 0 2px 10px rgba(38,66,124,.15); }
.top-bar a { color: #fff; text-decoration: none; transition: color .3s; }
.top-bar a:hover { color: #CF171F; }
.top-bar .top-inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
.top-bar .top-left, .top-bar .top-right { display: flex; align-items: center; gap: 22px; flex-wrap: wrap; }
.top-bar .top-item { display: inline-flex; align-items: center; gap: 7px; padding: 8px 0; }
.top-bar .top-item i { color: #CF171F; font-size: 13px; }
.top-bar .top-social { display: inline-flex; gap: 14px; }
.top-bar .top-social a { color: #fff; font-size: 13px; transition: color .3s, transform .3s; }
.top-bar .top-social a:hover { color: #CF171F; transform: translateY(-1px); }

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
                    <a href="https://www.facebook.com/antopstechnologies" target="_blank"><i class="fab fa-facebook-f"></i></a>                    <a href="https://x.com/antopstech" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>                    <a href="https://www.instagram.com/antopstechnologies/" target="_blank"><i class="fab fa-instagram"></i></a>                    <a href="https://www.linkedin.com/company/antops-technologies/" target="_blank"><i class="fab fa-linkedin-in"></i></a>                </span>
            </div>
        </div>
    </div>
</div>
    <header class="header inner-page for-desktop">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between">
                <a class="logo" href="index.php">
                    <img src="assets/images/ryvora-logo.png" alt="Antops Technologies" class="logo-light" />
                    <img src="assets/images/ryvora-logo.png" alt="Antops Technologies" class="logo-dark" />
                </a>
                <div class="mobile-sidebar-backdrop"></div>
                <div class="main-menu">
                    <div class="close-btn close-menu"><i class="fa fa-times"></i></div>
                    <ul class="menu">
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
                                                        <li>
                                                            <a href="{{ route('about') }}">About Us
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                                <a href="{{ route('our-process') }}">Our Process
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('careers') }}">Careers
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('clients') }}">Clients
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('internship') }}">Internship
                                                                <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="list-links">
                                                    <div class="list-link-title">
                                                        <div class="mb-2 about-company-h4">Resources</div>
                                                    </div>
                                                    <ul class="list-columns">
                                                        <li>
                                                            <a href="{{ route('blog') }}">Blog
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('faqs') }}">FAQs
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('news-events') }}">News & Events
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('success-stories') }}">Success Stories
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('industries') }}">Industries
                                  <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="about-company-right-heading">Think Digital. Think Antops.</div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="counter-card">
                                                        <div class="icon">
                                                            <img src="assets/images/icons/year-of-experience.php" alt="" />
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
                                                            <img src="assets/images/icons/projects-completed.php" alt="" />
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
                                                            <img src="assets/images/icons/client-relationship.php" alt="" />
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
                                                            <img src="assets/images/icons/client-relationship.php" alt="" />
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
                        <li class="menu-item has-children">
                            <a href="services.php">Services
                  <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <div class="mega-menu services">
                                <div class="container">
                                    <div class="inner d-flex">
                                        <div class="left-links">
                                            <div class="megamenu-verticle-menu">
                                                <div class="megamenu-verticle-tab-list">
                                                    <div class="blue-title heading-font text-primary-blue">
                                                        Our Services
                                                    </div>
                                                    <ul id="service-tab" role="tablist">
                                                        <li class="service-tab-item active" data-bs-toggle="tab" data-bs-target="#svc-tab-1" type="button" role="tab" aria-selected="true">
                                                            <i class="fas fa-paint-brush" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>UI/UX Design
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                        </li>
                                                                                                                <li
                                                            class="service-tab-item "
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#svc-tab-2"
                                                            type="button"
                                                            role="tab"
                                                            aria-selected="false"><i class="fas fa-globe" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Web Application Development
                                <i class="fa-solid fa-chevron-right"></i>
                                                        </li>
                                                                                                                <li
                                                            class="service-tab-item "
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#svc-tab-3"
                                                            type="button"
                                                            role="tab"
                                                            aria-selected="false"><i class="fas fa-mobile-alt" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Mobile Application Development
                                <i class="fa-solid fa-chevron-right"></i>
                                                        </li>
                                                                                                                <li
                                                            class="service-tab-item "
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#svc-tab-4"
                                                            type="button"
                                                            role="tab"
                                                            aria-selected="false"><i class="fas fa-laptop-code" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Software Development
                                <i class="fa-solid fa-chevron-right"></i>
                                                        </li>
                                                                                                                <li
                                                            class="service-tab-item "
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#svc-tab-5"
                                                            type="button"
                                                            role="tab"
                                                            aria-selected="false"><i class="fas fa-bullhorn" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Digital Marketing &amp; Branding
                                <i class="fa-solid fa-chevron-right"></i>
                                                        </li>
                                                                                                                <li
                                                            class="service-tab-item "
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#svc-tab-6"
                                                            type="button"
                                                            role="tab"
                                                            aria-selected="false"><i class="fas fa-cloud" style="font-size:16px;color:#CF171F;margin-right:6px;"></i>Cloud &amp; Hosting
                                <i class="fa-solid fa-chevron-right"></i>
                                                        </li>
                                                                                                            </ul>
                                                </div>
                                                <div
                                                    class="megamenu-verticle-tab-content tab-content"
                                                    id="service-tabContent">
                                                                                                        <div
                                                        class="service-verticle-tab-contentItem tab-pane fade active show"
                                                        id="svc-tab-1"
                                                        role="tabpanel">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-wrap">
                                                                <div class="top-content">
                                                                    <div class="megamenu-main-heading"><i class="fas fa-paint-brush" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>UI/UX Design</div>
                                                                    <p>Crafting intuitive, user-centered interfaces that delight users and drive conversions.</p>
                                                                </div>
                                                                <ul class="list-columns">
                                                                                                                                        <li>
                                                                        <a href="{{ route('services.uiux-design') }}">UI/UX Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/website-design.php">Website Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/mobile-app-uiux-design.php">Mobile App UI/UX Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/landing-page-design.php">Landing Page Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/dashboard-admin-panel-design.php">Dashboard &amp; Admin Panel Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/logo-brand-identity-design.php">Logo &amp; Brand Identity Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/graphic-design.php">Graphic Design
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/prototyping-wireframing.php">Prototyping &amp; Wireframing
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                    </ul>
                                                            </div>
                                                            <div class="bottom-content">
                                                                <div class="service-menu-card bg-pink-1">
                                                                    <div class="wrap">
                                                                        <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                        <p>Think Digital. Think Antops.</p>
                                                                    </div>
                                                                    <a href="services.php" class="btn btn-blue-2 py-2 radius-0">View All Service
                                      <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        <div
                                                        class="service-verticle-tab-contentItem tab-pane fade "
                                                        id="svc-tab-2"
                                                        role="tabpanel">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-wrap">
                                                                <div class="top-content">
                                                                    <div class="megamenu-main-heading"><i class="fas fa-globe" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Web Application Development</div>
                                                                    <p>Building scalable, high-performance web apps and portals for modern businesses.</p>
                                                                </div>
                                                                <ul class="list-columns">
                                                                                                                                        <li>
                                                                        <a href="services/website-development.php">Website Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/web-application-development.php">Web Application Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/e-commerce-development.php">E-Commerce Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/cms-development.php">CMS Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/saas-application-development.php">SaaS Application Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/web-portal-development.php">Web Portal Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/api-development-integration.php">API Development &amp; Integration
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/progressive-web-app-development.php">Progressive Web App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                    </ul>
                                                            </div>
                                                            <div class="bottom-content">
                                                                <div class="service-menu-card bg-pink-1">
                                                                    <div class="wrap">
                                                                        <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                        <p>Think Digital. Think Antops.</p>
                                                                    </div>
                                                                    <a href="services.php" class="btn btn-blue-2 py-2 radius-0">View All Service
                                      <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        <div
                                                        class="service-verticle-tab-contentItem tab-pane fade "
                                                        id="svc-tab-3"
                                                        role="tabpanel">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-wrap">
                                                                <div class="top-content">
                                                                    <div class="megamenu-main-heading"><i class="fas fa-mobile-alt" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Mobile Application Development</div>
                                                                    <p>Native and cross-platform mobile apps that engage users on iOS and Android.</p>
                                                                </div>
                                                                <ul class="list-columns">
                                                                                                                                        <li>
                                                                        <a href="services/android-app-development.php">Android App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/ios-app-development.php">iOS App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/flutter-app-development.php">Flutter App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/react-native-app-development.php">React Native App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/e-commerce-app-development.php">E-Commerce App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/on-demand-app-development.php">On-Demand App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/business-enterprise-app-development.php">Business &amp; Enterprise App Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/mobile-app-maintenance-support.php">Mobile App Maintenance &amp; Support
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                    </ul>
                                                            </div>
                                                            <div class="bottom-content">
                                                                <div class="service-menu-card bg-pink-1">
                                                                    <div class="wrap">
                                                                        <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                        <p>Think Digital. Think Antops.</p>
                                                                    </div>
                                                                    <a href="services.php" class="btn btn-blue-2 py-2 radius-0">View All Service
                                      <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        <div
                                                        class="service-verticle-tab-contentItem tab-pane fade "
                                                        id="svc-tab-4"
                                                        role="tabpanel">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-wrap">
                                                                <div class="top-content">
                                                                    <div class="megamenu-main-heading"><i class="fas fa-laptop-code" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Software Development</div>
                                                                    <p>Custom-built software solutions including ERP, CRM, HRMS and more.</p>
                                                                </div>
                                                                <ul class="list-columns">
                                                                                                                                        <li>
                                                                        <a href="services/custom-software-development.php">Custom Software Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/erp-software-development.php">ERP Software Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/crm-software-development.php">CRM Software Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/hrms-software-development.php">HRMS Software Development
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/school-management-software.php">School Management Software
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/hospital-management-software.php">Hospital Management Software
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/inventory-management-software.php">Inventory Management Software
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/billing-pos-software.php">Billing &amp; POS Software
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                    </ul>
                                                            </div>
                                                            <div class="bottom-content">
                                                                <div class="service-menu-card bg-pink-1">
                                                                    <div class="wrap">
                                                                        <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                        <p>Think Digital. Think Antops.</p>
                                                                    </div>
                                                                    <a href="services.php" class="btn btn-blue-2 py-2 radius-0">View All Service
                                      <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        <div
                                                        class="service-verticle-tab-contentItem tab-pane fade "
                                                        id="svc-tab-5"
                                                        role="tabpanel">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-wrap">
                                                                <div class="top-content">
                                                                    <div class="megamenu-main-heading"><i class="fas fa-bullhorn" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Digital Marketing &amp; Branding</div>
                                                                    <p>Data-driven marketing strategies to boost visibility, traffic and ROI.</p>
                                                                </div>
                                                                <ul class="list-columns">
                                                                                                                                        <li>
                                                                        <a href="services/search-engine-optimization-seo.php">Search Engine Optimization (SEO)
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/local-seo-services.php">Local SEO Services
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/google-ads-ppc-management.php">Google Ads &amp; PPC Management
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/social-media-marketing.php">Social Media Marketing
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/content-marketing.php">Content Marketing
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/branding-brand-identity.php">Branding &amp; Brand Identity
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/online-reputation-management.php">Online Reputation Management
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/conversion-rate-optimization-cro.php">Conversion Rate Optimization (CRO)
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                    </ul>
                                                            </div>
                                                            <div class="bottom-content">
                                                                <div class="service-menu-card bg-pink-1">
                                                                    <div class="wrap">
                                                                        <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                        <p>Think Digital. Think Antops.</p>
                                                                    </div>
                                                                    <a href="services.php" class="btn btn-blue-2 py-2 radius-0">View All Service
                                      <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        <div
                                                        class="service-verticle-tab-contentItem tab-pane fade "
                                                        id="svc-tab-6"
                                                        role="tabpanel">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-wrap">
                                                                <div class="top-content">
                                                                    <div class="megamenu-main-heading"><i class="fas fa-cloud" style="font-size:20px;color:#CF171F;margin-right:8px;"></i>Cloud &amp; Hosting</div>
                                                                    <p>Reliable cloud infrastructure, hosting and server management services.</p>
                                                                </div>
                                                                <ul class="list-columns">
                                                                                                                                        <li>
                                                                        <a href="services/cloud-hosting-services.php">Cloud Hosting Services
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/vps-hosting.php">VPS Hosting
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/dedicated-server-hosting.php">Dedicated Server Hosting
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/domain-business-email.php">Domain &amp; Business Email
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/aws-cloud-services.php">AWS Cloud Services
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/cloud-migration-services.php">Cloud Migration Services
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/server-management-security.php">Server Management &amp; Security
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                        <li>
                                                                        <a href="services/website-backup-maintenance.php">Website Backup &amp; Maintenance
                                        <i class="fa-solid fa-arrow-right menu-arrow"></i>
                                                                        </a>
                                                                    </li>
                                                                                                                                    </ul>
                                                            </div>
                                                            <div class="bottom-content">
                                                                <div class="service-menu-card bg-pink-1">
                                                                    <div class="wrap">
                                                                        <div class="menu-heading-h4">Digital Excellence Delivered</div>
                                                                        <p>Think Digital. Think Antops.</p>
                                                                    </div>
                                                                    <a href="services.php" class="btn btn-blue-2 py-2 radius-0">View All Service
                                      <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    </div>
                                            </div>
                                            <div
                                                class="panel-group"
                                                id="accordion-1"
                                                role="tablist"
                                                aria-multiselectable="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="portfolio.php">Our Work</a>
                        </li>
                        <li class="menu-item has-children">
                            <a href="javascript:void(0);">Solutions
                  <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <div class="mega-menu solutions-we-have">
                                <div class="container">
                                    <div class="inner d-flex">
                                        <div class="left-links">
                                            <div class="blue-title heading-font text-primary-blue">
                                                Digital & AI Software Solutions
                                            </div>
                                            <div class="list-links-wrap">
                                                                                                                                                <div class="list-links">
                                                    <ul class="list-columns">
                                                                                                                <li><a href="solutions/crm-software.php"><img src="uploads/solutions/icons/icon-d947159f-b7cc-46ff-8f11-8db95e665d10.png" alt="CRM Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>CRM Software</span><p>Manage leads, customers, sales and follow-ups with a powerful CRM.</p></div></a></li>
                                                                                                                <li><a href="solutions/erp-software.php"><img src="uploads/solutions/icons/icon-5393acea-b1e2-4149-bbe2-b5e8d19c3270.png" alt="ERP Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>ERP Software</span><p>Manage business operations with a complete ERP solution.</p></div></a></li>
                                                                                                                <li><a href="solutions/hr-payroll-software.php"><img src="uploads/solutions/icons/icon-5931bf24-06a0-4611-b14b-90d760980d05.png" alt="HR &amp; Payroll Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>HR &amp; Payroll Software</span><p>Manage employee records, attendance, leave and payroll.</p></div></a></li>
                                                                                                                <li><a href="solutions/school-management-software.php"><img src="uploads/solutions/icons/icon-02bd8563-f78e-4d63-82b7-51d440897fe2.png" alt="School Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>School Management Software</span><p>Manage admissions, students, attendance and exams.</p></div></a></li>
                                                                                                                <li><a href="solutions/hospital-management-software.php"><img src="uploads/solutions/icons/icon-01757ded-3906-4127-bda7-832810bc46e2.png" alt="Hospital Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Hospital Management Software</span><p>Manage patients, appointments, staff and hospital operations.</p></div></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <ul class="list-columns">
                                                                                                                <li><a href="solutions/food-ordering-system.php"><img src="uploads/solutions/icons/icon-a487e24d-b7b9-4db2-92bc-ac6aacee35a1.png" alt="Food Ordering System" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Food Ordering System</span><p>multi-vendor food ordering with online payments</p></div></a></li>
                                                                                                                <li><a href="solutions/inventory-management.php"><img src="uploads/solutions/icons/icon-393e63d1-a10d-4df6-b35e-5763026ee9e8.png" alt="Inventory Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Inventory Management</span><p>Track stock, purchases, sales and warehouses with ease.</p></div></a></li>
                                                                                                                <li><a href="solutions/car-rental-system.php"><img src="uploads/solutions/icons/icon-8c93dcfe-ca98-4f13-b227-e93d40760a70.png" alt="Car Rental System" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Car Rental System</span><p>Vehicle booking, fleet management, for car ...</p></div></a></li>
                                                                                                                <li><a href="solutions/accounting-billing-software.php"><img src="uploads/solutions/icons/icon-653adc45-eb80-4b6f-a586-0f6e391c8c62.png" alt="Accounting &amp; Billing Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Accounting &amp; Billing Software</span><p>Manage accounts, invoices, expenses and financial reports.</p></div></a></li>
                                                                                                                <li><a href="solutions/restaurant-management.php"><img src="uploads/solutions/icons/icon-789f2dc7-dfea-43a1-816f-2f6eaa466760.png" alt="Restaurant Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Restaurant Management</span><p>Manage orders, billing, menu and restaurant operations.</p></div></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <ul class="list-columns">
                                                                                                                <li><a href="solutions/hotel-management-software.php"><img src="uploads/solutions/icons/icon-4ac6669b-bca9-48af-85e4-126d394cff59.png" alt="Hotel Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Hotel Management Software</span><p>Manage rooms, bookings, guests and hotel operations.</p></div></a></li>
                                                                                                                <li><a href="solutions/job-portal.php"><img src="uploads/solutions/icons/icon-7519619b-df96-4da1-97fd-8caabb96d01a.png" alt="Job Portal" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Job Portal</span><p>tracking portals for recruitment platforms and corporate hiring.</p></div></a></li>
                                                                                                                <li><a href="solutions/logistics-fleet-management.php"><img src="uploads/solutions/icons/icon-2c5cded0-3dbf-40b7-b1d9-8c1e9e086be4.png" alt="Logistics &amp; Fleet Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Logistics &amp; Fleet Management</span><p>Track vehicles, shipments, routes and maintenance.</p></div></a></li>
                                                                                                                <li><a href="solutions/e-commerce-platform.php"><img src="uploads/solutions/icons/icon-78c1bd6f-bf85-4e3c-853d-8e2168669563.png" alt="E-Commerce Platform" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>E-Commerce Platform</span><p>Launch and manage your online store with ease.</p></div></a></li>
                                                                                                                <li><a href="solutions/real-estate-crm.php"><img src="uploads/solutions/icons/icon-187d537a-07a8-4c0f-9953-8e215b08878d.png" alt="Real Estate CRM" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Real Estate CRM</span><p>Manage property leads, clients, listings and site visits.</p></div></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <ul class="list-columns">
                                                                                                                <li><a href="solutions/pos-retail-management.php"><img src="uploads/solutions/icons/icon-eae3f800-48c6-4e04-96dc-65e589c8cef3.png" alt="POS &amp; Retail Management" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>POS &amp; Retail Management</span><p>Manage billing, sales, products and retail operations.</p></div></a></li>
                                                                                                                <li><a href="solutions/on-demand-home-services.php"><img src="uploads/solutions/icons/icon-9cc91067-5646-4dbd-ae42-53b8b8c4d928.png" alt="On-Demand Home Services" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>On-Demand Home Services</span><p>Multi-service home services marketplace with booking</p></div></a></li>
                                                                                                                <li><a href="solutions/project-management-software.php"><img src="uploads/solutions/icons/icon-c8aea6eb-4a6e-469f-8b90-7da34d220431.png" alt="Project Management Software" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Project Management Software</span><p>Plan, track and manage projects, tasks and teams.</p></div></a></li>
                                                                                                                <li><a href="solutions/learning-management-system.php"><img src="uploads/solutions/icons/icon-df333413-b730-44e6-9483-b396c52a0718.png" alt="Learning Management System" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Learning Management System</span><p>Create, manage and deliver online courses with ease.</p></div></a></li>
                                                                                                                <li><a href="solutions/appointment-booking.php"><img src="uploads/solutions/icons/icon-131bf431-0b2d-4809-94d5-9701ac63dc78.png" alt="Appointment &amp; Booking" style="width:24px;height:24px;object-fit:contain;margin-right:8px;"><div class="content"><span>Appointment &amp; Booking</span><p>Manage appointments, schedules, staff and bookings.</p></div></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item has-children">
                            <a href="technologies.php">Technologies
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
                                                                                                                <li><a href="technology/html5.php">HTML5<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/css3.php">CSS3<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/javascript.php">JavaScript<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/reactjs.php">React.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/next.php">Next.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/vuejs.php">Vue.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/angular.php">Angular<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/bootstrap.php">Bootstrap<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/tailwind-css.php">Tailwind CSS<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <div class="list-link-title"><div class="technology-menu-heading mb-2">Backend</div></div>
                                                    <ul class="list-columns">
                                                                                                                <li><a href="technology/php-development-services.php">PHP<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/laravel-development-services.php">Laravel<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/nodejs-development-services.php">Node.js<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/python-development-services.php">Python<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/django-development-services.php">Django<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/net-development-services.php">.NET<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/java-development-services.php">Java<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/spring-boot-development-services.php">Spring Boot<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <div class="list-link-title"><div class="technology-menu-heading mb-2">Database Technologies</div></div>
                                                    <ul class="list-columns">
                                                                                                                <li><a href="technology/mysql.php">MySQL<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/postgresql.php">PostgreSQL<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/mongodb.php">MongoDB<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/microsoft-sql-server.php">Microsoft SQL Server<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/firebase.php">Firebase<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/redis.php">Redis<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <div class="list-link-title"><div class="technology-menu-heading mb-2">Cloud &amp; DevOps</div></div>
                                                    <ul class="list-columns">
                                                                                                                <li><a href="technology/aws.php">AWS<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/microsoft-azure.php">Microsoft Azure<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/google-cloud.php">Google Cloud<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/docker.php">Docker<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/kubernetes.php">Kubernetes<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/cicd.php">CI/CD<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/github-actions.php">GitHub Actions<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                                <div class="list-links">
                                                    <div class="list-link-title"><div class="technology-menu-heading mb-2">Mobile App Development</div></div>
                                                    <ul class="list-columns">
                                                                                                                <li><a href="technology/android.php">Android<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/ios.php">iOS<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/flutter.php">Flutter<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/react-native.php">React Native<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/kotlin.php">Kotlin<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                                <li><a href="technology/swift.php">Swift<i class="fa-solid fa-arrow-right menu-arrow"></i></a></li>
                                                                                                            </ul>
                                                </div>
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item has-children resources-nav">
                            <a href="javascript:void(0);">Resources
                  <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <div class="resources-dropdown">
                                <ul>
                                    <li><a href="blog.php"><i class="fa-solid fa-chevron-right"></i> Blog</a></li>
                                    <li><a href="faqs.php"><i class="fa-solid fa-chevron-right"></i> FAQs</a></li>
                                    <li><a href="news-events.php"><i class="fa-solid fa-chevron-right"></i> News &amp; Events</a></li>
                                    <li><a href="success-stories.php"><i class="fa-solid fa-chevron-right"></i> Success Stories</a></li>
                                    <li><a href="industries.php"><i class="fa-solid fa-chevron-right"></i> Industries</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="right-button">
                    <a href="get-quote.php" class="btn py-2" style="background:#CF171F; color:#fff; border-radius:4px;">Get Quote</a>
                    <a class="mobile-menu-toggle" href="javascript:void(0);">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </div>
            </div>
        </div>
    </header>  