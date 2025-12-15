@extends('frontend.master')
@section('content')
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
        data-parallax-background-ratio="0.5"
        style="background-image: url(https://agronoblog.com/wp-content/uploads/2024/04/DALL%C2%B7E-2024-04-26-12.59.54-A-highly-realistic-image-of-an-agricultural-field-using-an-irrigation-system-to-water-plants.-The-image-shows-an-expansive-field-under-a-clear-blue-sk-1024x585.webp)">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">
                        Customer stories
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
    <section id="down-section" class="position-relative">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 md-mb-60px"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <figure class="position-relative m-0 text-center text-md-center">
                        <img src="images/test-sec.png" alt="" />
                        <figcaption
                            class="position-absolute bg-white right-0px left-0px m-auto border-radius-6px p-25px xs-p-10px box-shadow-double-large bottom-minus-20px w-350px xs-w-290px text-start last-paragraph-no-margin">
                            <div class="row align-items-center justify-content-center text-dark-gray">
                                <div
                                    class="col-4 col-sm-5 pe-25px text-end border-end border-color-extra-medium-gray xs-pe-15px">
                                    <h2 class="mb-0 fs-50 fw-800 ls-minus-4px lh-40">4.9</h2>
                                </div>
                                <div class="col-7 ps-25px text-star last-paragraph-no-margin xs-ps-15px">
                                    <div
                                        class="review-star-icon fs-20 lh-22 d-inline-block text-gradient-orange-sky-blue xs-fs-16">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fs-16 lh-22 fw-600 d-block">Best rated Company</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 ps-6 md-ps-15px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px w-85 lg-w-100">
                        We strive to exceed expectations.
                    </h3>
                    <p class="w-85 lg-w-100 mb-30px sm-mb-25px" style="color:#717580">
                        At Mighty Breeze, we take pride in delivering dependable borehole drilling, irrigation, and solar
                        solutions that communities and businesses can trust. With over a decade of hands-on experience, we
                        engineer efficient, sustainable systems supported by expert service at every stage.
                    </p>


                </div>
            </div>
        </div>
        </div>

        </div>
    </section>
    <!-- end section -->

    @include('frontend.layout.testimonial')
    @include('frontend.layout.client')
    
@endsection
