@extends('frontend.master')
@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
        data-parallax-background-ratio="0.5"  style="background-image: url('{{ asset('images/contact-main.jpg') }}');">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Contact us</h1>
                </div>
                <div class="down-section text-center"
                    data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" class="section-link">
                        <div class="text-white">
                            <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section id="down-section">
        <div class="container">
            <div class="row align-items-end justify-content-center mb-6 text-center text-lg-start sm-mb-8">
                <div class="col-xl-5 col-lg-7 col-md-10 md-mb-25px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">How
                        can help we you?</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px mb-0">Have a project in mind? Get in touch!</h3>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-5 col-md-10 last-paragraph-no-margin" style="color:#717580">
                    <p class="w-90 lg-w-100"
                        data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        We're here to help and answer any question you might have. We look forward to hearing from you. Any
                        need help you please contact us or meet to office with coffee.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 mb-6 sm-mb-8"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col md-mb-30px text-center text-sm-start">
                    <span
                        class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i
                            class="feather icon-feather-map-pin d-inline-block icon-small me-10px"></i>Office
                        location</span>
                    <div class="last-paragraph-no-margin" style="color:#717580">
                        <p>No.3 New Davies Way<br> Prospect, Waterfalls, Harare</p>
                    </div>
                </div>
                <div class="col md-mb-30px text-center text-sm-start">
                    <span
                        class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i
                            class="feather icon-feather-mail d-inline-block icon-small me-10px"></i>Send a message</span>
                    <a href="mailto:info@mightybreeze.co.zw">info@mightybreeze.co.zw</a>
                </div>
                <div class="col xs-mb-30px text-center text-sm-start">
                    <span
                        class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i
                            class="feather icon-feather-phone d-inline-block icon-small me-10px"></i>Call us directly</span>
                    <a href="tel:+263718995907">+263 71 899 5907</a><br>
                    <a href="tel:+263771060581">+263 77 106 0581</a><br>
                    <a href="tel:+263772466985">+263 77 246 6985</a>
                </div>
                <div class="col text-center text-sm-start">
                    <span
                        class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i
                            class="feather icon-feather-users d-inline-block icon-small me-10px"></i>Join our team</span>
                    <a href="mailto:info@mightybreeze.co.zw">info@mightybreeze.co.zw</a>
                </div>
            </div>


        </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section
        class="d-none d-lg-block position-relative one-half-screen sm-small-screen overflow-hidden border border-radius-top-lr lg-border-radius-0px"
        data-parallax-background-ratio="0.5"
        style="background-image: url('{{ asset('images/test-main.png') }}');">
        <div class="opacity-light bg-dark-gray"></div>
        <div
            class="fs-225 ls-minus-10px alt-font text-gradient-orange-sky-blue fw-600 position-absolute left-minus-25px bottom-minus-50px sm-ls-minus-5px sm-bottom-minus-20px sm-fs-200 xs-left-minus-10px xs-fs-130">
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white position-relative z-index-0 sm-pt-0">
        <div class="container-fluid overlap-section p-0">
            <div class="row g-0 justify-content-end overlap-section-one-fourth">
                <div class="col-md-6">

                   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d60740.399590244844!2d30.966292775692327!3d-17.91932426900632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s3%20New%20Davies%20Prospect%20Waterfalls%2C%20Harare!5e0!3m2!1sen!2sin!4v1767043873989!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>
            <div class="container-fluid overflow-hidden position-relative pt-6 sm-pt-40px">
                <img src="images/testimonial.png" class="position-absolute top-0 left-minus-300px z-index-minus-1"
                    data-bottom-top="transform: rotate(0deg) translateY(0)"
                    data-top-bottom="transform:rotate(-15deg) translateY(0)" alt="" />
                <div class="row justify-content-center mb-2 sm-mb-3">
                    <div class="col-lg-6 text-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span
                            class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-quartz-light-transparent d-inline-block">Get
                            in touch with us</span>
                        <h3 class="text-dark-gray fw-700 ls-minus-1px">How we can help you?</h3>
                    </div>
                </div>
                @include('frontend.layout.form')
            </div>
    </section>
@endsection
