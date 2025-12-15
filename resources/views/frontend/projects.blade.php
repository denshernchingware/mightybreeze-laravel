@extends('frontend.master')
@section('content')
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
        data-parallax-background-ratio="0.5" style="background-image: url(images/project-hero.png)">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Projects</h1>
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


    <section class="position-relative">
        <div class="container">
            <div class="row align-items-center mb-4"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
                    <h3 class="text-dark-gray fw-700 mb-0 ls-minus-2px">Projects</h3>
                </div>
                <div class="col-xl-7 tab-style-04 text-center text-xl-end">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs justify-content-center justify-content-xl-end border-0 fw-500">
                        <li class="nav active"><a data-filter="*" href="#">All</a></li>
                        <li class="nav">
                            <a data-filter=".borehole" href="#">Borehole</a>
                        </li>
                        <li class="nav">
                            <a data-filter=".irrigation" href="#">Irrigation</a>
                        </li>
                        <li class="nav">
                            <a data-filter=".solar" href="#">Solar Installation</a>
                        </li>
                        <li class="nav">
                            <a data-filter=".pump" href="#">Bush Pump</a>
                        </li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
            <div class="row"
                data-anime='{  "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12 filter-content p-md-0">
                    <ul
                        class="portfolio-modern portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        {{-- from admin --}}

                        <li class="grid-item  solar transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-two.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Borehole Solars
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Solar-Driven Borehole Pump Installation.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- end project item --}}
                        <!-- start portfolio item -->

                        <li class="grid-item  solar transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-three.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Home Solar Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Residential Solar Power Setup.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </li>

                        <!-- start portfolio item -->

                        <li class="grid-item  irrigation transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-four.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Irrigation System
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Water-Saving Irrigation Solution.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- end project item --}}

                        <!-- start portfolio item -->

                        <li class="grid-item  irrigation transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-five.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Drip Irrigation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Precision Crop Watering Solution.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- end project item --}}

                        <!-- start portfolio item -->

                        <li class="grid-item selected pump transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-six.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Bush Pump
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Reliable hand-operated water pump.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- end project item --}}

                        <!-- start portfolio item -->

                        <li class="grid-item  borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-seven.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Pump Setup
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Ensures stable household water flow.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- end project item --}}

                        <!-- start portfolio item -->

                        <li class="grid-item  borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-eight.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Borehole Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Efficient borehole storage system.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </li>

                        {{-- end project item --}}

                        <!-- start portfolio item -->

                        <li class="grid-item solar transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-nine.jpg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Home Solar Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Efficient rooftop solar installation.
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- end project item --}}
                        <!-- start portfolio item -->

                        <li class="grid-item  solar borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-ten.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Borehole and Solar
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Sustainable Borehole and Solar System
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        {{-- project 11 start --}}
                        <li class="grid-item  solar transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-eleven.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Home Solar Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Affordable Home Solar Systems
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 11 end --}}
                        {{-- project 12 start --}}
                        <li class="grid-item  borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-twelve.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Borehole Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Efficient Borehole Installation Project
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 12 end --}}


                        {{-- project 13 start --}}
                        <li class="grid-item  borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-thirteen.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Pump Setup
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Efficient Water Pump Installation
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 13 end --}}
                        {{-- project 14 start --}}
                        <li class="grid-item  solar transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-forteen.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Home Solar Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Affordable Home Solar Systems
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 14 end --}}
                        {{-- project 15 start --}}
                        <li class="grid-item  borehole solar transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-15.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Borehole and Solar
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Integrated Water–Solar Solutions
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 15 end --}}
                        {{-- project 16 start --}}
                        <li class="grid-item  borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-16.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Pump Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Durable Water Pump Systems
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 16 end --}}
                        {{-- project 17 start --}}
                        <li class="grid-item  borehole transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-17.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Pump Installation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Durable Water Pump Systems
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 17 end --}}
                        {{-- project 18 start --}}
                        <li class="grid-item  irrigation transition-inner-all">


                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="{{ asset('images/project-18.jpeg') }}" alt="" />
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div
                                        class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                Drip Irrigation
                                            </div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                Efficient Water-Saving Irrigation System
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <i
                                                class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        {{-- project 18 end --}}
                        {{-- project 19 & > (from admin panel) --}}
                        @foreach ($projects as $project)
                            <li class="grid-item {{ $project->category }} transition-inner-all">
                                <div class="portfolio-box">

                                    <div class="portfolio-image border-radius-4px">
                                        <img src="{{ asset('uploads/' . $project->image) }}" alt="image">
                                    </div>

                                    <div class="portfolio-hover box-shadow-extra-large">
                                        <div
                                            class="bg-white d-flex align-items-center align-self-end text-start
                            border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">

                                            <div class="me-auto">
                                                <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">
                                                    {{ $project->title }}
                                                </div>

                                                <div class="fw-700 text-dark-gray text-uppercase lh-initial">
                                                    {{ $project->description }}
                                                </div>
                                            </div>

                                            <div class="ms-auto">
                                                <i
                                                    class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
