@extends('frontend.master')
@section('content')
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
        data-parallax-background-ratio="0.5" style="background-image: url(images/about-us-sec.png)">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">
                        About us
                    </h1>
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
    <section class="position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-xl-5 col-lg-6 md-mb-14 sm-mb-18 xs-mb-23 position-relative"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="w-75 sm-w-80" data-animation-delay="200" data-shadow-animation="true"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="images/about-one.png" alt="" class="border-radius-6px w-100" />
                        <div
                            class="position-absolute top-30px z-index-8 left-minus-90px lg-left-minus-25px sm-left-minus-0px lg-w-30">
                        </div>
                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px xs-w-55 bottom-minus-50px"
                        data-shadow-animation="true" data-animation-delay="100"
                        data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="images/contact-img.png" alt=""
                            class="border-radius-6px box-shadow-quadruple-large w-100" />
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="swiper position-relative magic-cursor"
                        data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "slide" }'>
                        <div class="swiper-wrapper mb-10px">
                            <!-- start text slider item -->
                            <div class="swiper-slide">
                                <span
                                    class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">About
                                    Us</span>
                                <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">
                                    MightyBreeze
                                </h3>
                                @include('frontend.layout.about')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/testimonial.png" class="position-absolute bottom-minus-50px right-minus-50px z-index-minus-1"
            data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)"
            alt="" />
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-tranquil-white pt-0 position-relative align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center row-about">
                <!-- TEXT COLUMN - LEFT -->
                <div class="col-xl-5 col-lg-6 position-relative z-index-1 order-1 order-lg-1">
                    <div class="icon-with-text-style-08 mb-20px"
                        data-anime='{ "el": "childs", "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-base-color me-15px">
                                <i class="bi bi-award d-inline-block icon-extra-medium text-dark-gray text-wt"></i>
                            </div>
                        </div>
                    </div>

                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-40px sm-mb-30px"
                        data-anime='{ "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        What Guides Our Work
                    </h2>

                    <!-- ACCORDION -->
                    <div class="accordion accordion-style-05" id="accordion-style-05"
                        data-anime='{ "el": "childs", "translateY": [-30, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>

                        <div class="accordion-item bg-white active-accordion">
                            <h3
                                class="number alt-font mb-0 text-base-color fw-400 text-outline text-outline-color-base-color">
                                01
                            </h3>
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-05-01"
                                    aria-expanded="true" data-bs-parent="#accordion-style-05">
                                    <div class="accordion-title fs-18 position-relative pe-0 text-dark-gray fw-600 mb-0">
                                        Our Mission
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-05-01" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-style-05">
                                <div class="accordion-body last-paragraph-no-margin" style="color: #717580">
                                    @foreach ($abouts as $about)
                                        <p>
                                            {{ $about->mission }}
                                        </p>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item bg-white">
                            <h3
                                class="number alt-font mb-0 text-base-color fw-400 text-outline text-outline-color-base-color">
                                02
                            </h3>
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-05-02"
                                    aria-expanded="false" data-bs-parent="#accordion-style-05">
                                    <div class="accordion-title fs-18 position-relative pe-0 text-dark-gray fw-600 mb-0">
                                        Our Vision
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-05-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-05">
                                <div class="accordion-body last-paragraph-no-margin" style="color: #717580">
                                    @foreach ($abouts as $about)
                                        <p>
                                            {{ $about->vision }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item bg-white">
                            <h3
                                class="number alt-font mb-0 text-base-color fw-400 text-outline text-outline-color-base-color">
                                03
                            </h3>
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-05-03"
                                    aria-expanded="false" data-bs-parent="#accordion-style-05">
                                    <div class="accordion-title fs-18 position-relative pe-0 text-dark-gray fw-600 mb-0">
                                        Our Values
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-05-03" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-05">
                                <div class="accordion-body last-paragraph-no-margin" style="color: #717580">
                                    @foreach ($abouts as $about)
                                        <p>
                                            {{ $about->values }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                    </div>
                </div>

                <!-- IMAGE COLUMN - RIGHT -->
                <div class="d-none d-lg-block col-xl-7 col-lg-6 text-center order-2 order-lg-2"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="position-relative md-mb-50px xs-mb-30px ps-50px outside-box-right-10 md-outside-box-right-0 lg-pe-0 atropos"
                        data-atropos>
                        <div class="atropos-scale">
                            <div class="atropos-rotate">
                                <div class="atropos-inner text-center w-100 overflow-visible">
                                    <div data-atropos-offset="-1" class="position-absolute right-0px">
                                        <img src="images/about-three.png" alt="" />
                                    </div>
                                    <img data-atropos-offset="1" class="position-relative z-index-9"
                                        src="images/demo-elearning-06.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
