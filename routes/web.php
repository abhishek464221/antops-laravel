<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/our-process', function () {
    return view('our-process');
})->name('our-process');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

Route::get('/internship', function () {
    return view('internship');
})->name('internship');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/news-events', function () {
    return view('news-events');
})->name('news-events');

Route::get('/success-stories', function () {
    return view('success-stories');
})->name('success-stories'); 

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

/* =====================================================
   SERVICES — Sub pages (services.services.*)
   Path: resources/views/services/services/*.blade.php
   ===================================================== */

Route::get('/services/uiux-design', function () {
    return view('services.uiux-design');
})->name('services.uiux-design');

Route::get('/services/mobile-app-uiux-design', function () {
    return view('services.mobile-app-uiux-design');
})->name('services.mobile-app-uiux-design');

Route::get('/services/dashboard-admin-panel-design', function () {
    return view('services.dashboard-admin-panel-design');
})->name('services.dashboard-admin-panel-design'); 

Route::get('/services/graphic-design', function () {
    return view('services.graphic-design');
})->name('services.graphic-design'); 

Route::get('/services/website-design', function () {
    return view('services.website-design');
})->name('services.website-design'); 


Route::get('/services/landing-page-design', function () {
    return view('services.landing-page-design');
})->name('services.landing-page-design'); 

Route::get('/services/logo-brand-identity-design', function () {
    return view('services.logo-brand-identity-design');
})->name('services.logo-brand-identity-design'); 

Route::get('/services/prototyping-wireframing', function () {
    return view('services.prototyping-wireframing');
})->name('services.prototyping-wireframing'); 

Route::get('/services/website-development', function () {
    return view('services.website-development');
})->name('services.website-development'); 

Route::get('/services/e-commerce-development', function () {
    return view('services.e-commerce-development');
})->name('services.e-commerce-development'); 

Route::get('/services/saas-application-development', function () {
    return view('services.saas-application-development');
})->name('services.saas-application-development'); 

Route::get('/services/api-development-integration', function () {
    return view('services.api-development-integration');
})->name('services.api-development-integration'); 

Route::get('/services/web-application-development', function () {
    return view('services.web-application-development');
})->name('services.web-application-development'); 

Route::get('/services/cms-development', function () {
    return view('services.cms-development');
})->name('services.cms-development'); 

Route::get('/services/web-portal-development', function () {
    return view('services.web-portal-development');
})->name('services.web-portal-development'); 

Route::get('/services/progressive-web-app-development', function () {
    return view('services.progressive-web-app-development');
})->name('services.progressive-web-app-development'); 

Route::get('/services/android-app-development', function () {
    return view('services.android-app-development');
})->name('services.android-app-development'); 

Route::get('/services/flutter-app-development', function () {
    return view('services.flutter-app-development');
})->name('services.flutter-app-development'); 

Route::get('/services/e-commerce-app-development', function () {
    return view('services.e-commerce-app-development');
})->name('services.e-commerce-app-development'); 

Route::get('/services/business-enterprise-app-development', function () {
    return view('services.business-enterprise-app-development');
})->name('services.business-enterprise-app-development'); 

Route::get('/services/ios-app-development', function () {
    return view('services.ios-app-development');
})->name('services.ios-app-development'); 

Route::get('/services/react-native-app-development', function () {
    return view('services.react-native-app-development');
})->name('services.react-native-app-development'); 


Route::get('/services/on-demand-app-development', function () {
    return view('services.on-demand-app-development');
})->name('services.on-demand-app-development'); 


Route::get('/services/mobile-app-maintenance-support', function () {
    return view('services.mobile-app-maintenance-support');
})->name('services.mobile-app-maintenance-support'); 


Route::get('/services/custom-software-development', function () {
    return view('services.custom-software-development');
})->name('services.custom-software-development'); 


Route::get('/services/crm-software-development', function () {
    return view('services.crm-software-development');
})->name('services.crm-software-development'); 


Route::get('/services/school-management-software', function () {
    return view('services.school-management-software');
})->name('services.school-management-software'); 


Route::get('/services/inventory-management-software', function () {
    return view('services.inventory-management-software');
})->name('services.inventory-management-software'); 


Route::get('/services/erp-software-development', function () {
    return view('services.erp-software-development');
})->name('services.erp-software-development'); 


Route::get('/services/hrms-software-development', function () {
    return view('services.hrms-software-development');
})->name('services.hrms-software-development'); 


Route::get('/services/hospital-management-software', function () {
    return view('services.hospital-management-software');
})->name('services.hospital-management-software'); 

Route::get('/services/billing-pos-software', function () {
    return view('services.billing-pos-software');
})->name('services.billing-pos-software'); 

Route::get('/services/search-engine-optimization-seo', function () {
    return view('services.search-engine-optimization-seo');
})->name('services.search-engine-optimization-seo'); 

Route::get('/services/google-ads-ppc-management', function () {
    return view('services.google-ads-ppc-management');
})->name('services.google-ads-ppc-management'); 

Route::get('/services/content-marketing', function () {
    return view('services.content-marketing');
})->name('services.content-marketing'); 

Route::get('/services/online-reputation-management', function () {
    return view('services.online-reputation-management');
})->name('services.online-reputation-management'); 

Route::get('/services/local-seo-services', function () {
    return view('services.local-seo-services');
})->name('services.local-seo-services'); 

Route::get('/services/social-media-marketing', function () {
    return view('services.social-media-marketing');
})->name('services.social-media-marketing'); 

Route::get('/services/branding-brand-identity', function () {
    return view('services.branding-brand-identity');
})->name('services.branding-brand-identity'); 

Route::get('/services/conversion-rate-optimization-cro', function () {
    return view('services.conversion-rate-optimization-cro');
})->name('services.conversion-rate-optimization-cro'); 

Route::get('/services/cloud-hosting-services', function () {
    return view('services.cloud-hosting-services');
})->name('services.cloud-hosting-services'); 

Route::get('/services/dedicated-server-hosting', function () {
    return view('services.dedicated-server-hosting');
})->name('services.dedicated-server-hosting'); 

Route::get('/services/aws-cloud-services', function () {
    return view('services.aws-cloud-services');
})->name('services.aws-cloud-services'); 

Route::get('/services/server-management-security', function () {
    return view('services.server-management-security');
})->name('services.server-management-security'); 

Route::get('/services/vps-hosting', function () {
    return view('services.vps-hosting');
})->name('services.vps-hosting'); 

Route::get('/services/domain-business-email', function () {
    return view('services.domain-business-email');
})->name('services.domain-business-email'); 


Route::get('/services/cloud-migration-services', function () {
    return view('services.cloud-migration-services');
})->name('services.cloud-migration-services'); 


Route::get('/services/website-backup-maintenance', function () {
    return view('services.website-backup-maintenance');
})->name('services.website-backup-maintenance'); 



Route::get('/solutions/crm-software', function () {
    return view('solutions.crm-software');
})->name('solutions.crm-software'); 


Route::get('/solutions/erp-software', function () {
    return view('solutions.erp-software');
})->name('solutions.erp-software'); 


Route::get('/solutions/accounting-billing-software', function () {
    return view('solutions.accounting-billing-software');
})->name('solutions.accounting-billing-software'); 

Route::get('/solutions/appointment-booking', function () {
    return view('solutions.appointment-booking');
})->name('solutions.appointment-booking'); 

Route::get('/solutions/e-commerce-platform', function () {
    return view('solutions.e-commerce-platform');
})->name('solutions.e-commerce-platform'); 

Route::get('/solutions/food-ordering-system', function () {
    return view('solutions.food-ordering-system');
})->name('solutions.food-ordering-system'); 

Route::get('/solutions/hotel-management-software', function () {
    return view('solutions.hotel-management-software');
})->name('solutions.hotel-management-software'); 

Route::get('/solutions/hospital-management-software', function () {
    return view('solutions.hospital-management-software');
})->name('solutions.hospital-management-software'); 

Route::get('/solutions/hr-payroll-software', function () {
    return view('solutions.hr-payroll-software');
})->name('solutions.hr-payroll-software'); 

Route::get('/solutions/inventory-management', function () {
    return view('solutions.inventory-management');
})->name('solutions.inventory-management'); 

Route::get('/solutions/job-portal', function () {
    return view('solutions.job-portal');
})->name('solutions.job-portal'); 

Route::get('/solutions/learning-management-system', function () {
    return view('solutions.learning-management-system');
})->name('solutions.learning-management-system'); 

Route::get('/solutions/logistics-fleet-management', function () {
    return view('solutions.logistics-fleet-management');
})->name('solutions.logistics-fleet-management'); 

Route::get('/solutions/on-demand-home-services', function () {
    return view('solutions.on-demand-home-services');
})->name('solutions.on-demand-home-services'); 

Route::get('/solutions/pos-retail-management', function () {
    return view('solutions.pos-retail-management');
})->name('solutions.pos-retail-management'); 

Route::get('/solutions/project-management-software', function () {
    return view('solutions.project-management-software');
})->name('solutions.project-management-software'); 

Route::get('/solutions/real-estate-crm', function () {
    return view('solutions.real-estate-crm');
})->name('solutions.real-estate-crm'); 

Route::get('/solutions/restaurant-management', function () {
    return view('solutions.restaurant-management');
})->name('solutions.restaurant-management'); 

Route::get('/solutions/school-management-software', function () {
    return view('solutions.school-management-software');
})->name('solutions.school-management-software'); 



Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/angular', function () {
    return view('technology.angular');
})->name('technology.angular'); 

Route::get('/technology/aws', function () {
    return view('technology.aws');
})->name('technology.aws'); 

Route::get('/technology/bootstrap', function () {
    return view('technology.bootstrap');
})->name('technology.bootstrap'); 

Route::get('/technology/css3', function () {
    return view('technology.css3');
})->name('technology.css3'); 

Route::get('/technology/cicd', function () {
    return view('technology.cicd');
})->name('technology.cicd'); 

Route::get('/technology/django-development-services', function () {
    return view('technology.django-development-services');
})->name('technology.django-development-services'); 

Route::get('/technology/docker', function () {
    return view('technology.docker');
})->name('technology.docker'); 

Route::get('/technology/firebase', function () {
    return view('technology.firebase');
})->name('technology.firebase'); 

Route::get('/technology/flutter', function () {
    return view('technology.flutter');
})->name('technology.flutter'); 

Route::get('/technology/github-actions', function () {
    return view('technology.github-actions');
})->name('technology.github-actions'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 

Route::get('/technology/android', function () {
    return view('technology.android');
})->name('technology.android'); 



