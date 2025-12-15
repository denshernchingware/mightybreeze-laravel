@extends('frontend.master')
@section('content')
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
        data-parallax-background-ratio="0.5" style="background-image: url(images/services-main.png)">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Services</h1>
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
    <section class="py-2 " style="color: #717580">
        <div class="container">
            <div class="row align-items-start">

                <!-- LEFT IMAGE (fixed using ratio) -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="" style="">
                        <img src="{{ asset('images/main-serv.png') }}" class="img-fluid rounded object-fit-cover"
                            alt="Service Image">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-md-6 ml-4">

                    <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px mt-2">Borehole Services</h3>

                    <div class="accordion" id="boreholeAccordion">



                        <!-- Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item1">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1">
                                    Borehole Siting
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    This service involves identifying the best location to drill a borehole using geological
                                    surveys and groundwater detection methods. The goal is to find a spot with reliable
                                    underground water. Proper siting reduces the risk of drilling a dry or low-yield hole.
                                    It ensures the project becomes successful and cost-effective.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item2">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2">
                                    Borehole Drilling
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Drilling is the process of creating a deep hole to reach underground water. It is done
                                    using drilling rigs that ensure accurate depth and stable formation. The service
                                    includes casing the hole and preparing it for pumping. This guarantees a long-lasting
                                    and efficient water supply system.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item3">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3">
                                    Borehole Deepening
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Deepening improves an existing borehole by increasing its depth when water levels drop.
                                    It helps restore water yield without needing a new borehole. The process is
                                    cost-friendly and extends the life of the water source. It ensures consistent water
                                    availability throughout the year.
                                </div>
                            </div>
                        </div>

                        <!-- Item 4-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item4">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4">
                                    Borehole Flashing
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Flashing cleans the borehole using high-pressure water to remove mud, debris, and
                                    blockages. This improves water flow and pump efficiency. It also helps maintain clean
                                    water output. Regular flashing prevents long-term borehole damage.
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item5">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5">
                                    Borehole Recasing (Manual)
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Recasing involves replacing damaged or worn-out casing to protect the borehole’s
                                    structure. It prevents contamination, collapsing, and sand intrusion. The process
                                    strengthens the borehole and extends its lifespan. It also ensures the pump operates
                                    smoothly.
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item7">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7">
                                    Borehole Capacity Test
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    This test measures how much water the borehole can produce per hour. It helps choose the
                                    correct pump size and prevents pump burnout. Knowing the capacity ensures stable
                                    long-term supply. It is essential before installing pumps or tanks.
                                </div>
                            </div>
                        </div>

                        <!-- Item 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item8">
                                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8">
                                    Pump Fishing
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Pump fishing is the recovery of pumps that are stuck, dropped, or lost inside the
                                    borehole. Specialized tools are used to safely pull them out without damaging the
                                    borehole. It prevents the need to drill a new hole. The service restores the borehole to
                                    normal operation.
                                </div>
                            </div>
                        </div>

                        <!-- Item 9 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item9">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse9">
                                    Tanks and Tank Stand Installation
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    This service includes setting up water storage tanks and strong stands for elevation.
                                    Elevated tanks improve water pressure naturally. Proper installation ensures safety,
                                    stability, and long-term durability. It is suitable for homes, farms, and institutions.
                                </div>
                            </div>
                        </div>

                        <!-- Item 10 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item10">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse10">
                                    Borehole Repair
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Borehole repair addresses mechanical faults, casing issues, low water flow, or pump
                                    problems. The aim is to restore full functionality and efficiency. Repairs include
                                    cleaning, fixing structural issues, and replacing broken parts. It ensures reliable,
                                    uninterrupted water supply.
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
                    <div class="" style=""> <!-- FIXED SIZE -->
                        <img src="{{ asset('images/irrigation-main.png') }}" class="img-fluid rounded object-fit-cover"
                            alt="Service Image">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->

                <div class="col-md-6 ml-4">

                    <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Solar Installation</h3>


                    <div class="accordion" id="boreholeAccordiony">

                        <!-- Item 11 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item11">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse11">
                                    Solar Boreholes
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Solar boreholes use solar panels to power water pumps. This reduces electricity and fuel
                                    costs completely. The system is efficient for farms, homes, and rural areas. It provides
                                    a reliable, eco-friendly, and low-maintenance water solution.
                                </div>
                            </div>
                        </div>

                        <!-- Item 12 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item12">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse12">
                                    Home Solar System
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    A home solar setup provides electricity using solar panels, inverters, and batteries. It
                                    reduces monthly electricity bills and provides backup during outages. The system powers
                                    lights, appliances, and household electronics. It is reliable, sustainable, and
                                    long-term
                                </div>
                            </div>
                        </div>

                        <!-- Item 13 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item13">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse13">
                                    Solar Geyser Installation
                                </button>
                            </h2>
                            <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Solar geysers use sunlight to heat water for household use. They reduce electricity
                                    consumption for hot water by a large margin. The system is safe, efficient, and low
                                    maintenance. It offers consistent hot water throughout the year.
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
                    <div class="" style=""> <!-- FIXED SIZE -->
                        <img src="{{ asset('images/irrigation-serv-mainy.png') }}"
                            class="img-fluid rounded object-fit-cover" alt="Service Image">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-md-6 ml-4">

                    <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Irrigation</h3>

                    <div class="accordion" id="boreholeAccordion">

                        <!-- Item 14 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item14">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse14">
                                    Drip Irrigation
                                </button>
                            </h2>
                            <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Drip irrigation delivers water directly to plant roots through pipes and emitters. It
                                    saves water by minimizing wastage and evaporation. The system increases crop yields and
                                    reduces weeds. It is ideal for gardens, farms, and nurseries.
                                </div>
                            </div>
                        </div>

                        <!-- Item 15 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item15">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse15">
                                    Overhead Irrigation
                                </button>
                            </h2>
                            <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    This system sprays water over crops like artificial rain. It covers large areas quickly
                                    and is easy to operate. Overhead irrigation is useful for gardens, fields, and lawn
                                    watering. It improves crop growth and ensures uniform water distribution.
                                </div>
                            </div>
                        </div>

                        <!-- Item 16 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item16">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse16">
                                    Lawn and Garden Irrigation
                                </button>
                            </h2>
                            <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    These systems automate watering for lawns, flowers, and garden areas. They maintain
                                    healthy plant growth without overwatering. The setup improves landscape appearance and
                                    reduces manual work. It is ideal for homes, parks, and commercial spaces.
                                </div>
                            </div>
                        </div>

                        <!-- Item 17 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item17">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse17">
                                    Fishponds
                                </button>
                            </h2>
                            <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    Installation and setup of water systems for fishponds. It includes pumps, filtration,
                                    and water movement control. Proper installation keeps fish healthy and water clean. It
                                    supports long-term fish farming operations.
                                </div>
                            </div>
                        </div>

                        <!-- Item 18 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item18">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse18">
                                    Irrigation Services
                                </button>
                            </h2>
                            <div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    General irrigation solutions including pipeline installation, pump setup, and system
                                    maintenance. These services ensure efficient water supply for crops and gardens. The
                                    goal is to improve productivity and reduce water wastage. It covers both household and
                                    commercial needs
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
                    <div class="" style=""> <!-- FIXED SIZE -->
                        <img src="{{ asset('images/bush-pump-serv-main.png') }}"
                            class="img-fluid rounded object-fit-cover" alt="Service Image">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-md-6 ml-4">

                    <h3 class="mb-3  text-dark-gray fw-700 ls-minus-1px">Bush Pump</h3>

                    <div class="accordion" id="boreholeAccordion">

                        <!-- Item 19 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item19">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse19">
                                    Bush Pump Installation
                                </button>
                            </h2>
                            <div id="collapse19" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    This involves installing a durable, hand-operated pump that works without electricity.
                                    Bush pumps are ideal for rural or community settings. They provide clean, reliable water
                                    with very low maintenance needs. The system is strong and long-lasting
                                </div>
                            </div>
                        </div>

                        <!-- Item 20 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="item20">
                                <button class="accordion-button collapsed acc-btn" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse20">
                                    Pump & Engine Installation
                                </button>
                            </h2>
                            <div id="collapse20" class="accordion-collapse collapse" data-bs-parent="#boreholeAccordion">
                                <div class="accordion-body">
                                    This includes installing pumps powered by engines or motors for strong water delivery.
                                    It ensures correct alignment, pressure setup, and secure connections. The service is
                                    important for boreholes, irrigation, and water transfer. It guarantees efficient and
                                    stable pump performance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
