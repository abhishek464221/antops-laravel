<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="author" content="Antops Technologies">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <title>@yield('title', 'Antops Technologies - Think Digital. Think Antops.')</title>
    <meta name="description" content="@yield('meta_description', 'Antops Technologies is a premium digital solutions agency offering web development, mobile apps, UI/UX design, and digital marketing services.')">
    <meta name="keywords" content="@yield('meta_keywords', 'web development, mobile apps, UI/UX design, AI development, digital marketing, technology solutions')">

    {{-- ✅ FIXED: Use asset() helper everywhere --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/fav-icon.png') }}">
    <link rel="apple-touch-icon" sizes="32x32" href="{{ asset('assets/images/fav-icon.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ryvora-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ryvora-responsive.css') }}">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap">

    {{-- GLOBAL TYPOGRAPHY + SECTION TITLE ANIMATION --}}
    <style>
        @media (min-width: 1200px) {
            .section-title h1.heading-first {
                font-size: 40px; line-height: 44px; margin-bottom: 30px;
                font-weight: 700; font-family: var(--heading-font);
            }
        }
        hero-section { background-color: #000 }
        @media (min-width: 1400px) { .hero-section .hero-content-wrap span.banner-head-title-1 { font-size: 20px; } }
        @media (min-width: 1200px) { .hero-section .hero-content-wrap span.banner-head-title-1 { font-size: 16px; } }
        @media (min-width: 992px)  { .hero-section .hero-content-wrap span.banner-head-title-1 { font-size: 20px; } }
        @media (min-width: 768px)  { .hero-section .hero-content-wrap span.banner-head-title-1 { font-size: 20px; } }

        html, body {
            font-family: 'Open Sans', system-ui, -apple-system, 'Segoe UI', sans-serif !important;
            color: #333;
        }
        body, p, a, li, ul, ol, small, label, button, input, textarea, select {
            font-family: 'Open Sans', system-ui, -apple-system, 'Segoe UI', sans-serif !important;
            font-size: 15px;
        }
        p, .ab-text { color: #333; font-size: 15px; line-height: 30px; }
        h1, h2, h3, h4, h5, h6, span, .section-title h1, .section-title h2, .pg-hero h1, .sv-hero h1,
        .display-1, .display-2, .display-3, .display-4, .display-5, .display-6, .sv-title, .heading-font, .section-title {
            font-family: 'Nunito', 'Open Sans', system-ui, -apple-system, 'Segoe UI', sans-serif !important;
        }
        .material-symbols-outlined, .material-symbols-rounded, .material-symbols-sharp, .fa, .fas, .far, .fab, .fa-solid, .fa-regular, .fa-brands { font-family: inherit; }
        .material-symbols-outlined { font-family: 'Material Symbols Outlined' !important; }

        h1, .pg-hero h1, .display-5 { font-size: clamp(30px, 4.2vw, 46px) !important; line-height: 1.18 !important; }
        h2, .section-title h2 { font-size: clamp(24px, 2.9vw, 34px) !important; line-height: 1.22 !important; }
        h3 { font-size: clamp(20px, 2vw, 24px) !important; }
        h4, h5, h6 { line-height: 1.35 !important; }
        .home-banner-title, .home-banner-title * { font-family: 'Open Sans', sans-serif !important; }
        .home-banner-title { font-size: clamp(32px, 4.6vw, 54px) !important; line-height: 1.15 !important; }

        @keyframes rvLineFlow { 0% { background-position: 0% center; } 100% { background-position: 200% center; } }
        .pg-line, .sv-line, .sv-underline {
            width: 62px !important; height: 3px !important; border-radius: 3px !important;
            background: linear-gradient(90deg, #B0171F, #CF171F, #CF171F, #B0171F) !important;
            background-size: 200% 100% !important;
            animation: rvLineFlow 4s linear infinite !important;
        }
        .section-title h1, .section-title h2 { position: relative; padding-bottom: 16px; }
        .section-title h1::after, .section-title h2::after {
            content: ''; position: absolute; bottom: 0; left: 0; height: 3px; width: 54px; border-radius: 3px;
            background: linear-gradient(90deg, #B0171F, #CF171F, #CF171F, #B0171F);
            background-size: 200% 100%;
            animation: rvLineFlow 4s linear infinite;
        }
        .section-title h1.text-center::after, .section-title h2.text-center::after { left: 50%; transform: translateX(-50%); }
        .section-title h1.text-start::after, .section-title h2.text-start::after { left: 0; transform: none; }
        .section-title h1.text-lg-start::after, .section-title h2.text-lg-start::after { left: 0; transform: none; }
        .pg-hero h1 { position: relative; display: inline-block; padding-bottom: 18px; }
        .pg-hero h1::after {
            content: ''; position: absolute; bottom: 0; left: 0; height: 3px; width: 62px; border-radius: 3px;
            background: linear-gradient(90deg, #B0171F, #CF171F, #CF171F, #B0171F);
            background-size: 200% 100%;
            animation: rvLineFlow 4s linear infinite;
        }
        .pg-hero { text-align: left; }
    </style>

    {{-- FORM / CAPTCHA STYLES --}}
    <style>
        .CaptchaWrap { background: #ffdbdb; color: #e6392a; font-size: 20px; font-weight: 600;
            margin-right: 30px; padding: 5px 25px; border-radius: 3px; filter: blur(1px); }
        .impField { color: red; }
        .validationError { color: red; margin-top: 3px; display: inline-block; }
        .form-group.captcha-group img { height: 30px; }
        .contact-us-section .formDiv { padding: 0 30px 30px; }
        .contact-us-right-content.contact-form > div:nth-child(2) { padding: 0px 30px 30px; }
        .get-in-touch-form > div:nth-child(2) { padding: 0px 30px 30px; }
        #ExtraMenuBtn { cursor: pointer; }
        .hire-developer-form .hire-developer-cta .iti__selected-dial-code { color: #ffffff !important; }
        .hire-developer-form .hire-developer-cta .txtHireContact { padding-right: 36px !important; }
        .ViewMoreSkills { cursor: pointer !important; }
        @media (min-width:1200px) { #ExtraMenuBtn { display: none !important; } }
        @media (min-width:0px) and (max-width:1199px) {
            #ExtraMenuBtn { display: inline-flex; } #ExtraMenu { display: none; }
            .contact-us-right-content.contact-form > div:nth-child(2) { padding: 0 15px 15px; }
            .get-in-touch-form > div:nth-child(2) { padding: 0 15px 15px; }
        }
    </style>

    @stack('styles')

    {{-- ✅ FIXED: jQuery path --}}
    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    {{-- ✅ FIXED: all script paths --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/ryvora-script.js') }}"></script>
    <script src="{{ asset('assets/js/InputValidator.js') }}"></script>
    <script src="{{ asset('assets/aos/aos.js') }}"></script>

    {{-- GLOBAL INIT SCRIPTS --}}
    <script>
        $(document).ready(function () {
            $(".developer-card").each(function () {
                var ele = $(this);
                var ExtraLi = "";
                var ListElement = ele.find(".tech-list li");
                var ListLength = ListElement.length;
                var attrDataList = "";
                if (ListLength > 6) {
                    for (let i = 6; i < ListLength; i++) {
                        ExtraLi += $(ListElement[i]).html() + " ";
                        attrDataList += $(ListElement[i]).text().trim() + "|";
                        $(ListElement[i]).remove();
                    }
                    ele.find(".tech-list").attr("data-link-list", attrDataList.replace(/^\|+|\|+$/g, ''));
                    ele.find(".tech-list").append("<li class='ViewMoreSkills'><span>+" + (parseInt(ListLength) - 6) + "</span></li>");
                }
            });
            $(document.body).on("click", ".ViewMoreSkills", function () {
                var ele = $(this);
                var linkList = ele.parent().attr("data-link-list");
                if (linkList && linkList !== "") {
                    var SplitList = linkList.split('|');
                    if (SplitList.length > 0) {
                        for (var s of SplitList) { ele.parent().append("<li>" + s + "</li>"); }
                        ele.remove();
                    }
                }
            });
            $(document.body).on("click", "#ExtraMenuBtn", function () {
                $("#ExtraMenu").show(); $(this).remove();
            });
            var URL = '';
            $(".URLWrap").append(URL);
            DecimalInputValidator && DecimalInputValidator.init('.decimalInput');
            TaxValidator && TaxValidator.init('.taxPercentInput');
            OnlyNumbersValidator && OnlyNumbersValidator.init('.numberOnlyInput,.onlyNum,.numberonly');
            OnlyAlphabetsValidator && OnlyAlphabetsValidator.init('.alphabetsOnlyInput,.acceptOnlyAlpha');
        });
        AOS.init({ duration: 700, easing: 'ease-out-cubic', once: true, offset: 60 });
    </script>

    @stack('scripts')
</body>
</html>