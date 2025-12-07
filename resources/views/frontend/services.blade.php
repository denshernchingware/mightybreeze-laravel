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
<section class='py-2'>
     <div class="container py-2">
                <h3 class="text-dark-gray fw-700 ls-minus-1px mb-0">Services</h3>
            </div>
</section>
<section class="py-2 " style="color: #717580">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT IMAGE (fixed using ratio) -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="" style="">   <!-- FIXED SIZE -->
          <img src="{{asset('images/main-serv.png')}}" class="img-fluid rounded object-fit-cover" alt="Service Image">
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-md-6 ml-4">

        <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Borehole</h3>

        <div class="accordion" id="boreholeAccordion">

          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item1">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item2">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                Pump Installation
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <!-- ADD MORE ITEMS IF YOU WANT -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item3">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                Pump Installation
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="item4">
              <button class="accordion-button collapsed acc-btn "  type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                Pump Installation
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

           <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

                <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>



        </div>



      </div>
    </div>
  </div>
</section>

<section class="py-2 " style="color: #717580">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT IMAGE (fixed using ratio) -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="" style="">   <!-- FIXED SIZE -->
          <img src="{{asset('images/irrigation-main.png')}}" class="img-fluid rounded object-fit-cover" alt="Service Image">
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-md-6 ml-4">

        <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Solar Installation</h3>

        <div class="accordion" id="boreholeAccordion">

          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item1">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item2">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                Pump Installation
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <!-- ADD MORE ITEMS IF YOU WANT -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item3">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                Pump Installation
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="item4">
              <button class="accordion-button collapsed acc-btn "  type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                Pump Installation
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

           <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

                <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>



        </div>



      </div>
    </div>
  </div>
</section>

<section class="py-2 " style="color: #717580">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT IMAGE (fixed using ratio) -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="" style="">   <!-- FIXED SIZE -->
          <img src="{{asset('images/irr-serv.webp')}}" class="img-fluid rounded object-fit-cover" alt="Service Image">
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-md-6 ml-4">

        <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Irrigation</h3>

        <div class="accordion" id="boreholeAccordion">

          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item1">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item2">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                Pump Installation
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <!-- ADD MORE ITEMS IF YOU WANT -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item3">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                Pump Installation
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="item4">
              <button class="accordion-button collapsed acc-btn "  type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                Pump Installation
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

           <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

                <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>



        </div>



      </div>
    </div>
  </div>
</section>

<section class="py-2 " style="color: #717580">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT IMAGE (fixed using ratio) -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="" style="">   <!-- FIXED SIZE -->
          <img src="{{asset('images/bush-pump-serv-main.png')}}" class="img-fluid rounded object-fit-cover" alt="Service Image">
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-md-6 ml-4">

        <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Bush Pump</h3>

        <div class="accordion" id="boreholeAccordion">

          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item1">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item2">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                Pump Installation
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <!-- ADD MORE ITEMS IF YOU WANT -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item3">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                Pump Installation
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="item4">
              <button class="accordion-button collapsed acc-btn "  type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                Pump Installation
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

           <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>

                <div class="accordion-item">
            <h2 class="accordion-header" id="item5">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Borehole Drilling
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                High-quality drilling for homes, farms, and businesses.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="item6">
              <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Pump Installation
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
              <div class="accordion-body">
                Reliable pump setup ensuring proper water pressure.
              </div>
            </div>
          </div>



        </div>



      </div>
    </div>
  </div>
</section>


@endsection
