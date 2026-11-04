@extends('layouts.app')

@section('title', 'Contact Us | Antops Technologies')
@section('meta_description', 'Get in touch with Antops Technologies. Have a project idea or need support? Drop us a message — we reply within 24 hours.')
@section('meta_keywords', 'contact antops, hire developers, get a quote, digital agency contact, tech support')

@push('styles')
<style>
    .ct-hero {
        position: relative; overflow: hidden; padding: 150px 0 70px; text-align: center;
        background: linear-gradient(135deg, #B0171F 0%, #0a2f6d 100%);
    }
    .ct-hero-bg {
        position: absolute; inset: 0; pointer-events: none;
        background: radial-gradient(600px 300px at 85% 0%, rgba(207,23,31,.18), transparent 60%),
            radial-gradient(500px 260px at 10% 100%, rgba(255,255,255,.06), transparent 60%);
    }
    .ct-kicker {
        display: inline-flex; align-items: center; gap: 8px;
        background: linear-gradient(135deg, #CF171F, #F3636B); color: #B0171F;
        font-size: 12.5px; font-weight: 700; letter-spacing: 1.2px; text-transform: uppercase;
        padding: 8px 22px; border-radius: 50px; margin-bottom: 18px;
    }
    .ct-hero h1 { color: #fff; font-size: 40px; margin-bottom: 14px; }
    .ct-hero h1 .ct-gold { color: #CF171F; }
    .ct-hero p { color: rgba(255,255,255,.75); font-size: 16px; max-width: 620px; margin: 0 auto; }
    .ct-section { background: #f4f8ff; padding: 70px 0 90px; }
    .ct-form-card {
        background: #fff; border: 1px solid rgba(176,23,31,.08); border-radius: 20px;
        padding: 40px 38px; box-shadow: 0 24px 50px -24px rgba(176,23,31,.3);
    }
    .ct-form-card h3 { color: #B0171F; font-size: 24px; margin-bottom: 6px; }
    .ct-form-sub { color: #5a6b8c; font-size: 14px; margin-bottom: 26px; }
    .ct-label { display: block; color: #B0171F; font-size: 13px; font-weight: 600; margin-bottom: 7px; }
    .ct-input {
        width: 100%; padding: 12px 16px; border-radius: 10px;
        border: 1px solid rgba(176,23,31,.14); background: #f8faff;
        color: #333; font-size: 14.5px; outline: none; transition: all .3s ease;
    }
    .ct-input:focus { border-color: #CF171F; background: #fff; box-shadow: 0 0 0 3px rgba(207,23,31,.16); }
    .ct-submit-btn {
        width: 100%; padding: 15px 26px; border: none; border-radius: 12px;
        background: linear-gradient(135deg, #CF171F, #F3636B); color: #B0171F;
        font-size: 15.5px; font-weight: 700; cursor: pointer;
        box-shadow: 0 14px 30px -12px rgba(207,23,31,.6); transition: all .3s ease;
    }
    .ct-submit-btn:hover { transform: translateY(-3px); box-shadow: 0 20px 38px -12px rgba(207,23,31,.75); }
    .ct-info-card {
        display: flex; align-items: flex-start; gap: 16px;
        background: #fff; border: 1px solid rgba(176,23,31,.08); border-radius: 16px;
        padding: 20px 22px; margin-bottom: 16px;
        box-shadow: 0 14px 30px -20px rgba(176,23,31,.22);
        transition: transform .3s ease;
    }
    .ct-info-card:hover { transform: translateY(-4px); }
    .ct-info-icon {
        min-width: 48px; height: 48px; border-radius: 13px; display: grid; place-items: center;
        background: linear-gradient(135deg, #B0171F, #B0171F); color: #CF171F; font-size: 18px;
    }
    .ct-info-card h6 { color: #B0171F; font-size: 15px; margin-bottom: 4px; }
    .ct-info-card span, .ct-info-card a { color: #5a6b8c; font-size: 13.5px; line-height: 22px; }
    .ct-info-card a { color: #B0171F; font-weight: 600; }
    .ct-resources-card {
        background: #fff; border: 1px solid rgba(176,23,31,.08); border-radius: 16px;
        padding: 22px; margin-top: 22px;
        box-shadow: 0 14px 30px -20px rgba(176,23,31,.22);
    }
    .ct-resources-card h5, .ct-social-card h5 { color: #B0171F; font-size: 16px; margin-bottom: 16px; }
    .ct-resources-card h5 i, .ct-social-card h5 i { color: #CF171F; margin-right: 8px; }
    .ct-resources-card ul { list-style: none; margin: 0; padding: 0; }
    .ct-resources-card ul li { margin-bottom: 10px; }
    .ct-resources-card ul li:last-child { margin-bottom: 0; }
    .ct-resources-card ul li a {
        display: flex; align-items: center; gap: 10px;
        color: #333; font-size: 14px; font-weight: 600; transition: all .3s ease;
    }
    .ct-resources-card ul li a i { color: #CF171F; font-size: 11px; }
    .ct-resources-card ul li a:hover { color: #e39a00; padding-left: 6px; }
    .ct-social-card {
        background: #fff; border: 1px solid rgba(176,23,31,.08); border-radius: 16px;
        padding: 22px; margin-top: 16px;
        box-shadow: 0 14px 30px -20px rgba(176,23,31,.22);
    }
    .ct-social-btn {
        width: 42px; height: 42px; border-radius: 12px; display: grid; place-items: center;
        background: rgba(176,23,31,.06); color: #B0171F; transition: all .3s ease;
    }
    .ct-social-btn:hover { background: linear-gradient(135deg, #CF171F, #F3636B); color: #B0171F; transform: translateY(-3px); }

    @media (max-width: 991.98px) {
        .ct-hero { padding: 130px 0 55px; }
        .ct-hero h1 { font-size: 30px; }
        .ct-form-card { padding: 28px 20px; }
    }
</style>
@endpush

@section('content')

{{-- ================= HERO ================= --}}
<section class="ct-hero" data-aos="fade-down">
    <div class="ct-hero-bg"></div>
    <div class="container position-relative">
        <span class="ct-kicker"><i class="fa-solid fa-headset"></i> We're Here to Help</span>
        <h1>Contact <span class="ct-gold">Us</span></h1>
        <p>Have a question, a project idea, or need support? Drop us a message — we reply within 24 hours.</p>
    </div>
</section>

{{-- ================= FORM + INFO ================= --}}
<section class="ct-section">
    <div class="container">
        <div class="row g-4 g-lg-5">

            {{-- LEFT: FORM --}}
            <div class="col-lg-7" data-aos="fade-right">
                <div class="ct-form-card">
                    <h3>Send Us a Message</h3>
                    <p class="ct-form-sub">Fill out the form below and we'll get back to you within 24 hours.</p>

                    <form id="contactForm" method="POST" action="{{ url('contact') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="ct-label">Full Name *</label>
                                <input type="text" name="name" class="ct-input" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="ct-label">Email Address *</label>
                                <input type="email" name="email" class="ct-input" placeholder="john@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="ct-label">Subject</label>
                                <input type="text" name="subject" class="ct-input" placeholder="How can we help?">
                            </div>
                            <div class="col-12">
                                <label class="ct-label">Message *</label>
                                <textarea name="message" class="ct-input" rows="5" placeholder="Tell us about your project or inquiry..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="ct-submit-btn" id="contactSubmitBtn">
                                    <span class="btn-text">Send Message <i class="fas fa-paper-plane ms-2"></i></span>
                                    <span class="btn-spinner d-none">
                                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                        Sending...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="contactAlert" class="mt-3 d-none"></div>
                </div>
            </div>

            {{-- RIGHT: INFO / RESOURCES / SOCIAL --}}
            <div class="col-lg-5" data-aos="fade-left">

                <div class="ct-info-card">
                    <div class="ct-info-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h6>Email Us</h6>
                        <span><a href="mailto:info@antops.com">info@antops.com</a></span>
                    </div>
                </div>

                <div class="ct-info-card">
                    <div class="ct-info-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h6>Working Hours</h6>
                        <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
                    </div>
                </div>

                <div class="ct-resources-card">
                    <h5><i class="fa-solid fa-layer-group"></i> Resources</h5>
                    <ul>
                        <li><a href="{{ url('blog') }}"><i class="fa-solid fa-chevron-right"></i> Blog</a></li>
                        <li><a href="{{ url('faqs') }}"><i class="fa-solid fa-chevron-right"></i> FAQs</a></li>
                        <li><a href="{{ url('news-events') }}"><i class="fa-solid fa-chevron-right"></i> News &amp; Events</a></li>
                        <li><a href="{{ url('success-stories') }}"><i class="fa-solid fa-chevron-right"></i> Success Stories</a></li>
                        <li><a href="{{ url('industries') }}"><i class="fa-solid fa-chevron-right"></i> Industries</a></li>
                    </ul>
                </div>

                <div class="ct-social-card">
                    <h5><i class="fas fa-share-alt"></i> Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/antopstechnologies" target="_blank" class="ct-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/antopstech" target="_blank" class="ct-social-btn" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/antopstechnologies/" target="_blank" class="ct-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/antops-technologies/" target="_blank" class="ct-social-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        var $form  = $(this);
        var $btn   = $('#contactSubmitBtn');
        var $alert = $('#contactAlert');

        $btn.prop('disabled', true);
        $btn.find('.btn-text').addClass('d-none');
        $btn.find('.btn-spinner').removeClass('d-none');
        $alert.addClass('d-none');

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: $form.serialize(),
            dataType: 'json',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {
                $alert.removeClass('d-none alert-danger').addClass('alert alert-success');
                $alert.html('<i class="fas fa-check-circle me-2"></i>' + (response.message || 'Message sent successfully.'));
                $form[0].reset();
            },
            error: function (xhr) {
                $alert.removeClass('d-none alert-success').addClass('alert alert-danger');
                var msg = 'Something went wrong. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    msg = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                $alert.html('<i class="fas fa-exclamation-circle me-2"></i>' + msg);
            },
            complete: function () {
                $btn.prop('disabled', false);
                $btn.find('.btn-text').removeClass('d-none');
                $btn.find('.btn-spinner').addClass('d-none');
            }
        });
    });
});
</script>
@endpush