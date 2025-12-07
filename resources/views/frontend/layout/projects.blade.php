

   <section class="position-relative">
        <div class="container">
          <div
            class="row align-items-center mb-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'
          >
            <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
              <h3 class="text-dark-gray fw-700 mb-0 ls-minus-2px">Projects</h3>
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
                {{-- from admin --}}
                <li
                  class="grid-item selected pump transition-inner-all">

                  <a href="">
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
                              Borehole drilling
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Strong foundation for lasting structures.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end portfolio item -->
                    <!-- start portfolio item -->

                <li
                  class="grid-item  solar transition-inner-all">


                    <div class="portfolio-box">
                      <div class="portfolio-image border-radius-4px">
                        <img src="{{asset('images/project-two.jpg')}}" alt="" />
                      </div>
                      <div class="portfolio-hover box-shadow-extra-large">
                        <div
                          class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100"
                        >
                          <div class="me-auto">
                            <div
                              class="fs-12 fw-500 text-medium-gray text-uppercase lh-24"
                            >
                              Borehole Solars
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Solar-Driven Borehole Pump Installation.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>

                </li>

                {{-- end project item--}}
                          <!-- start portfolio item -->

                <li
                  class="grid-item selected solar transition-inner-all">


                    <div class="portfolio-box">
                      <div class="portfolio-image border-radius-4px">
                        <img src="{{asset('images/project-three.jpg')}}" alt="" />
                      </div>
                      <div class="portfolio-hover box-shadow-extra-large">
                        <div
                          class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100"
                        >
                          <div class="me-auto">
                            <div
                              class="fs-12 fw-500 text-medium-gray text-uppercase lh-24"
                            >
                              Home Solar Installation
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Residential Solar Power Setup.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                         <!-- start portfolio item -->

                <li
                  class="grid-item selected irrigation transition-inner-all">


                    <div class="portfolio-box">
                      <div class="portfolio-image border-radius-4px">
                        <img src="{{asset("images/project-four.jpg")}}" alt="" />
                      </div>
                      <div class="portfolio-hover box-shadow-extra-large">
                        <div
                          class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100"
                        >
                          <div class="me-auto">
                            <div
                              class="fs-12 fw-500 text-medium-gray text-uppercase lh-24"
                            >
                              Irrigation System
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Water-Saving Irrigation Solution.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>

                </li>

                {{-- end project item--}}

                         <!-- start portfolio item -->

                <li
                  class="grid-item selected pump transition-inner-all">

                  
                    <div class="portfolio-box">
                      <div class="portfolio-image border-radius-4px">
                        <img src="{{asset('images/project-five.jpg')}}" alt="" />
                      </div>
                      <div class="portfolio-hover box-shadow-extra-large">
                        <div
                          class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100"
                        >
                          <div class="me-auto">
                            <div
                              class="fs-12 fw-500 text-medium-gray text-uppercase lh-24"
                            >
                              Borehole drilling
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Strong foundation for lasting structures.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                {{-- end project item--}}

                         <!-- start portfolio item -->

                <li
                  class="grid-item selected pump transition-inner-all">

                  <a href="">
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
                              Borehole drilling
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Strong foundation for lasting structures.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                {{-- end project item--}}

                         <!-- start portfolio item -->

                <li
                  class="grid-item selected pump transition-inner-all">

                  <a href="">
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
                              Borehole drilling
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Strong foundation for lasting structures.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                {{-- end project item--}}

                         <!-- start portfolio item -->

                <li
                  class="grid-item selected pump transition-inner-all">

                  <a href="">
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
                              Borehole drilling
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Strong foundation for lasting structures.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                {{-- end project item--}}

                         <!-- start portfolio item -->

                <li
                  class="grid-item selected pump transition-inner-all">

                  <a href="">
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
                              Borehole drilling
                            </div>
                            <div
                              class="fw-700 text-dark-gray text-uppercase lh-initial"
                            >
                              Strong foundation for lasting structures.
                            </div>
                          </div>
                          <div class="ms-auto">
                            <i
                              class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>

                {{-- end project item--}}


              </ul>
            </div>
          </div>
        </div>
      </section>
