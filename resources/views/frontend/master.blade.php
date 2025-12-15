<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos." />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}" />

    <!-- Google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Revolution slider CSS -->
    <link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}" />
    <link rel="stylesheet" href="{{ asset('revolution/css/layers.css') }}" />
    <link rel="stylesheet" href="{{ asset('revolution/css/navigation.css') }}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('demos/corporate/corporate.css') }}" />
</head>


<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
    <div class="box-layout">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
                <div class="container-fluid">
                    <div class="col-auto col-xl-3 col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/mightybreeze-logo.png') }}" class="default-logo"
                                alt="" />
                            <img src="{{ asset('images/mightybreeze-logo.png') }}" class="alt-logo" alt="" />
                            <img src="{{ asset('images/mightybreeze-logo.png') }}" class="mobile-logo"
                                alt="" />
                        </a>
                    </div>
                    <div class="col-auto col-xl-6 col-lg-8 menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('testimonial') }}"
                                        class="nav-link">Testimonials</a></li>
                                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0 header-icon ">


                        <div class="header-button ms-20px d-none d-xl-inline-block">
                            <a href="{{ route('contact') }}"
                                class="btn btn-rounded btn-transparent-light-gray border-1 btn-medium  text-transform-none">
                                <span>
                                    <span class="btn-double-text fw-600" data-text="Free consultation">Get Started
                                        Now</span>

                                </span>
                            </a>
                        </div>
                    </div>
                </div>
    </div>
    </nav>
    <!-- end navigation -->
    </header>
    <!-- end header -->
    @yield('content')

    <!-- start footer -->
    <footer class="p-0 fs-16 border-top border-color-extra-medium-gray bg-blue">
        <div class="container">
            <div class="row justify-content-center pt-6 sm-pt-40px">

                <!-- Column 1 -->
                <div class="col-6 col-md-3 mb-4 text-xl-start text-lg-center">
                    <p class="lh-30 w-90 xl-w-100 mx-lg-auto mx-xl-0">
                        <b>DRILL WITH MIGHTYBREEZE</b>
                    </p>
                    <p>Mon - Sat 8:00 - 17:30,</p>
                    <p class="mt">Sunday - CLOSED</p>

                    <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                        <ul class="medium-icon dark">
                            <li><a class="facebook text-white"
                                    href="https://www.facebook.com/profile.php?id=61561185104947&amp;mibextid=ZbWKwL"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="twitter text-white" href="#"><i class="fa-brands fa-twitter"></i></li>
                            <li class="instagram text-white" href="#"><i class="fa-brands fa-instagram"></i>
                            </li>
                            <li class="linkedin text-white" href="#"><i class="fa-brands fa-linkedin"></i></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-6 col-md-3 mb-4">
                    <span class="fs-17 fw-600 d-block mb-5px">Company</span>
                    <ul class="text-white">
                        <li><a href="{{ route('about') }}">Who we are</a></li>
                        <li><a href="{{ route('services') }}">Our services</a></li>
                        <li><a href="{{ route('testimonial') }}">Our clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-6 col-md-3 mb-4">
                    <span class="fs-17 fw-600 d-block mb-5px">Services</span>
                    <ul class="text-white">
                        <li>Borehole Drilling</li>
                        <li>Solar Installation</li>
                        <li>Irrigation</li>
                        <li>Bush Pumps</li>
                    </ul>
                </div>

                <!-- Column 4 -->
                <div class="col-6 col-md-3 mb-4">
                    <span class="fs-17 fw-600 d-block mb-5px">Contact Us</span>
                    <ul class="text-white">
                        <li><a href="tel:+263718995907">+263 71 899 5907</a></li>
                        <li><a href="tel:+263771060581">+263 77 106 0581</a></li>
                        <li><a href="tel:+263772466985">+263 77 246 6985</a></li>
                    </ul>
                </div>

            </div>

            <!-- Divider -->
            <div class="row justify-content-center align-items-center pt-2">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                </div>

                <!-- Copyright -->
                <div class="col-lg-5 pt-35px pb-35px md-pt-0 text-center text-lg-start">
                    <p>&copy; 2025 Proudly Powered By
                        <a href="https://www.dmtechnologies.co.zw/" target="_blank"
                            class="text-white fw-600 text-decoration-line-bottom">DM Technologies</a>
                    </p>
                </div>
            </div>

        </div>
    </footer>

    <!-- end footer -->
    <div class="position-fixed bottom-0 end-0 m-4" style="z-index:999;">
        <a href="https://wa.me/1234567890" target="_blank"
            class="d-flex align-items-center justify-content-center bg-success rounded-circle shadow"
            style="width:60px; height:60px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white"
                viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 8.048 0C3.603 0 .044 3.558.044 7.996c0 1.41.365 2.79 1.057 4.007L0 16l4.107-1.077a7.96 7.96 0 0 0 3.94 1.034h.003c4.445 0 8.004-3.558 8.004-7.996a7.84 7.84 0 0 0-2.453-5.631zM8.05 14.562a6.54 6.54 0 0 1-3.337-.913l-.239-.142-2.434.638.651-2.373-.156-.244a6.47 6.47 0 0 1-1.01-3.464c0-3.583 2.915-6.498 6.506-6.498a6.48 6.48 0 0 1 6.506 6.498c0 3.584-2.916 6.498-6.507 6.498zm3.722-4.864c-.203-.102-1.203-.593-1.39-.661-.187-.068-.323-.102-.458.102s-.525.661-.645.797c-.119.136-.237.153-.44.051a5.28 5.28 0 0 1-1.551-.957 5.76 5.76 0 0 1-.998-1.246c-.119-.203-.013-.313.09-.415.093-.092.204-.238.306-.356.102-.119.136-.204.204-.34.068-.137.034-.255-.017-.356-.051-.102-.458-1.102-.628-1.508-.166-.398-.335-.34-.458-.34-.119-.017-.255-.017-.39-.017a.75.75 0 0 0-.543.255c-.187.203-.712.694-.712 1.69s.729 1.962.83 2.102c.102.136 1.434 2.187 3.475 3.063.485.209.863.333 1.157.425.485.153.924.132 1.272.08.389-.059 1.203-.49 1.372-.964.17-.474.17-.882.119-.964-.051-.085-.187-.136-.39-.238z" />
            </svg>
        </a>
    </div>

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    </div>
    <!-- javascript libraries -->
    <!-- JS Files -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/vendors.min.js') }}"></script>

    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script>
        var tpj = jQuery;
        var revapi7;
        var $ = jQuery.noConflict();
        tpj(document).ready(function() {
            if (tpj("#demo-corporate-slider").revolution == undefined) {
                revslider_showDoubleJqueryError("#demo-corporate-slider");
            } else {
                revapi7 = tpj("#demo-corporate-slider")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        /* sets the Slider's default timeline */
                        delay: 9000,
                        /* options are 'auto', 'fullwidth' or 'fullscreen' */
                        sliderLayout: "fullscreen",
                        /* RESPECT ASPECT RATIO */
                        autoHeight: "off",
                        /* options that disable autoplay */
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "reverse",
                            onHoverStop: "off",
                            arrows: {
                                enable: true,
                                style: "hesperiden",
                                rtl: false,
                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 500,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                left: {
                                    container: "slider",
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 50,
                                    v_offset: 0,
                                },
                                right: {
                                    container: "slider",
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 50,
                                    v_offset: 0,
                                },
                            },
                            bullets: {
                                enable: true,
                                style: "hermes",
                                tmp: "",
                                direction: "horizontal",
                                rtl: false,

                                container: "layergrid",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 12,

                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 0,
                                hide_over: 500,
                                hide_delay: true,
                                hide_delay_mobile: 500,
                            },
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: true,
                            },
                        },
                        responsiveLevels: [1240, 1024, 768, 480],
                        visibilityLevels: [1240, 1024, 768, 480],
                        gridwidth: [1240, 1024, 768, 480],
                        gridheight: [930, 850, 900, 850],
                        /* Lazy Load options are "all", "smart", "single" and "none" */
                        lazyType: "smart",
                        spinner: "spinner0",
                        parallax: {
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 400,
                            levels: [
                                5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5,
                            ],
                        },
                        shadow: 0,
                        shuffle: "off",
                        fullScreenAutoWidth: "on",
                        fullScreenAlignForce: "on",
                        fullScreenOffsetContainer: "nav",
                        fullScreenOffset: "",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            }
        }); /*ready*/
    </script>
    <script>
        // Add page-loaded class after content is ready to prevent blinking
        revapi7.on("revolution.slide.onloaded", function() {
            tpj("#slider").addClass("revslider-loaded");
        });
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
