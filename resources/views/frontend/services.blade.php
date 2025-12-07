@extends('frontend.master')
@section('content')

   <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5" style="background-image: url(images/services-main.png)">
                <div class="opacity-extra-medium bg-blue-whale"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Services</h1>
                        </div>
                        <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
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


<section class="position-relative">
        <div class="container">
          <div
            class="row align-items-center mb-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'
          >
            <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
              <h3 class="text-dark-gray fw-700 mb-0 ls-minus-2px">Services</h3>
            </div>
            <div class="col-xl-7 tab-style-04 text-center text-xl-end">
              <!-- filter navigation -->
              <ul
                class="portfolio-filter nav nav-tabs justify-content-center justify-content-xl-end border-0 fw-500"
              >
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
          <div
            class="row"
            data-anime='{  "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'
          >
            <div class="col-12 filter-content p-md-0">
              <ul
                class="portfolio-modern portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
              >
                <li class="grid-sizer"></li>
                <!-- start portfolio item -->
                <li
                  class="grid-item selected pump transition-inner-all"
                >

                    <div class="portfolio-box">
                      <div class="portfolio-image border-radius-4px">
                        <img src="https://darrdrilling.com.au/wp-content/uploads/2021/09/a1-1024x822.jpeg" alt="" />
                      </div>
                      <div class="portfolio-hover box-shadow-extra-large">
                        <div
                          class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100"
                        >
                          <div class="me-auto">
                            <div
                              class="fs-12 fw-500 text-medium-gray text-uppercase lh-24"
                            >
                              clean, reliable, and independent water supply by drilling a professional borehole (private water well) on your property.
                            </div>


                        </div>

                      </div>

                    </div>
                    <div class="text-medium-gray">Borehole Drilling</div>

                </li>
                <!-- end portfolio item -->
              </ul>
            </div>
          </div>
        </div>
      </section>

@endsection
