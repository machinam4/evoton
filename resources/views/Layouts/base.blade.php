<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Evoton.themetags.com/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 06:46:14 GMT -->

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167933131-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-167933131-2');
    </script>


    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@evoton">
    <meta name="twitter:creator" content="@evoton">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('page_title') | Evoton - Software & IT Solutions  ">
    <meta name="twitter:description"
        content="Evoton Software is one of the few IT system integration, professional service and software development companies in East Africa that works with Enterprise systems and companies. As a privately owned company, Evoton Software provides IT Consultancy, software design and development as well as professional services and hardware deployment and maintenance.">
    <meta name="twitter:image" content="{{ asset('assets/img/evoto_logo_square.webp') }}">

    <!--facebook og-->
    <meta property="og:url" content="/">
    <meta name="twitter:title" content="@yield('page_title') | Evoton - Software & IT Solutions  ">
    <meta property="og:description"
        content="Evoton Software is one of the few IT system integration, professional service and software development companies in East Africa that works with Enterprise systems and companies. As a privately owned company, Evoton Software provides IT Consultancy, software design and development as well as professional services and hardware deployment and maintenance.">
    <meta property="og:image" content="{{ asset('assets/img/evoto_logo_square.webp') }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/img/evoto_logo_square.webp') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="Evoton Software is one of the few IT system integration, professional service and software development companies in East Africa that works with Enterprise systems and companies. As a privately owned company, Evoton Software provides IT Consultancy, software design and development as well as professional services and hardware deployment and maintenance.">
    <meta name="author" content="Evoton">
    <meta name="keywords"
        content="Evoton, Softwares, Kenya, Tanzania, Software Developers, Web developers, Application Developers, Apps, Android apps, ">
    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/img/evoton_logo1.webp') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>@yield('page_title') | Evoton - Software & IT Solutions</title>

    <!--google fonts-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">-->

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{ asset('assets/img/evoton_logo1.webp') }}" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ asset('assets/img/logo_plain.png') }}" alt="logo"
                            class="img-fluid logo-white" />
                        <img src="{{ asset('assets/img/logo_plain.png') }}" alt="logo"
                            class="img-fluid logo-color" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <span class="far fa-bars" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="{{ Route('home') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ Route('services') }}" class="nav-link">Services</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Downloadables</h6>
                                            <a href="header.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-bars"></i></span>
                                                <div class="drop-title">E-books</div>
                                            </a>
                                            <a href="hero-sections.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-browser"></i></span>
                                                <div class="drop-title">Infographics</div>
                                            </a>
                                            <a href="testimonials.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-address-card"></i></span>
                                                <div class="drop-title">Reports</div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Press</h6>
                                            <a href="pricing-style.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-usd-square"></i></span>
                                                <div class="drop-title">Fintech</div>
                                            </a>
                                            <a href="accordions.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-th-list"></i></span>
                                                <div class="drop-title">Cryptography</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Technologies</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full-3">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Mobile</h6>
                                            <a href="about-us.html" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                                <div class="drop-title">Android</div>
                                            </a>
                                            <a href="contact-us.html" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-address-book"></i></span>
                                                <div class="drop-title">Apple IOS</div>
                                            </a>
                                            <a href="contact-us.html" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-address-book"></i></span>
                                                <div class="drop-title">Windows</div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item bg-light">
                                            <h6 class="drop-heading">Web</h6>
                                            <a href="support.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-life-ring"></i></span>
                                                <div class="drop-title">Web Apps</div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                            <h6 class="drop-heading">Artificial Inteligence (AI)</h6>
                                            <a href="support.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-life-ring"></i></span>
                                                <div class="drop-title">Data Science</div>
                                            </a>
                                            <a href="support.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-life-ring"></i></span>
                                                <div class="drop-title">Computer Vision</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Industries</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full-3">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Healthcare</h6>
                                            <a href="header.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-bars"></i></span>
                                                <div class="drop-title">Navigations</div>
                                            </a>
                                            <a href="hero-sections.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-browser"></i></span>
                                                <div class="drop-title">Hero Sections</div>
                                            </a>
                                            <a href="testimonials.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-address-card"></i></span>
                                                <div class="drop-title">Testimonials</div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">FinTech</h6>
                                            <a href="pricing-style.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-usd-square"></i></span>
                                                <div class="drop-title">Pricing Style</div>
                                            </a>
                                            <a href="accordions.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-th-list"></i></span>
                                                <div class="drop-title">Accordions</div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                            <a href="#"><img src="{{ asset('assets/img/feature-img3.jpg') }}"
                                                    alt="add" class="img-fluid rounded-custom" /></a>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li><a href="pricing.html" class="nav-link">Blog</a></li>
                            <li><a href="pricing.html" class="nav-link">Portfolio</a></li> --}}
                            <li><a href="{{ Route('contact') }}" class="nav-link">Contact Us</a></li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">Useful Links</h6>
                                            <a href="about-us.html" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                                <div class="drop-title">About Us</div>
                                            </a>
                                            <a href="{{Route('contact')}}" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-address-book"></i></span>
                                                <div class="drop-title">Contact Us</div>
                                            </a>
                                            <a href="career.html" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-graduation-cap"></i></span>
                                                <div class="drop-title">Careers</div>
                                            </a>
                                            <a href="integrations.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-rocket-launch"></i></span>
                                                <div class="drop-title">Integrations</div>
                                            </a>
                                            <a href="integration-single.html" class="dropdown-link px-0">
                                                <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                                <div class="drop-title">Integration Single</div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item radius-right-side bg-light">
                                            <h6 class="drop-heading">Utility Pages</h6>
                                            <a href="support.html" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-life-ring"></i></span>
                                                <div class="drop-title">Help Center</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="{{ Route('contact') }}" class="btn btn-primary">Get In Touch</a>
                    </div>

                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ asset('assets/img/logo_plain.png" alt="logo" class="img-fluid ps-2') }}" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="far fa-close"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-half">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 1</div>
                                                <p>It's for <strong>SaaS Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p><strong>Web Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing</p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>

                                        <a href="index-6.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-7.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">7</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Data Analysis</div>
                                                <p>Software &amp; <strong>Data Analysis</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-8.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">8</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing Two</div>
                                                <p>Software &amp; <strong>App Landing Two</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-9.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">9</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">IT Solution</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-10.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">10</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Cyber Security</div>
                                                <p>Cyber Security <strong>Landing Page</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                11
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p><strong>Crypto Currency</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-12.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                12
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Game Solutions</div>
                                                <p><strong>Game Server</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-13.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                13
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p><strong>Payment Gateway</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-14.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                14
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Digital Marketing</div>
                                                <p><strong>Digital Marketing</strong> landing page</p>
                                            </div>
                                        </a>
                                        </a>
                                        <a href="index-15.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                15
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Conference & Event</div>
                                                <p><strong>Conference & Event</strong> landing</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ Route('services') }}" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-browser"></i></span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-address-card"></i></span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bolt"></i></span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-eject"></i></span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-hourglass-start"></i></span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong></p>

                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p><strong>Web Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing</p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-6.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-7.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">8</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Data Analysis</div>
                                                <p>Software & <strong>Data Analysis</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-8.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">9</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing Two</div>
                                                <p>Software & <strong>App Landing Two</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-9.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">10</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">IT Solution</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-10.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">11</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Cyber Security</div>
                                                <p>Cyber Security <strong>Landing Page</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                12
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p><strong>Crypto Currency</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-13.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                13
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p><strong>Payment Gateway</strong> landing page</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-browser"></i></span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-address-card"></i></span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bolt"></i></span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-eject"></i></span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-hourglass-start"></i></span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="pricing-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-usd-square"></i></span>
                                            <div class="drop-title">Pricing Style</div>
                                        </a>
                                        <a href="accordions.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-list"></i></span>
                                            <div class="drop-title">Accordions</div>
                                        </a>
                                        <a href="features.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-chart-network"></i></span>
                                            <div class="drop-title">Features</div>
                                        </a>
                                        <a href="footers.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-closed-captioning"></i></span>
                                            <div class="drop-title">Footers</div>
                                        </a>
                                        <a href="team.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user"></i></span>
                                            <div class="drop-title">Our Team</div>
                                        </a>
                                        <a href="integration-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                            <div class="drop-title">Integration Style</div>
                                        </a>
                                        <a href="blog-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Blog Style</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                        <a href="#"><img
                                                src="{{ asset('assets/img/feature-img3.jpg" alt="add" class="img-fluid rounded-custom') }}" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Useful Links</h6>
                                        <a href="about-us.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                            <div class="drop-title">About Us</div>
                                        </a>
                                        <a href="contact-us.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-address-book"></i></span>
                                            <div class="drop-title">Contact Us</div>
                                        </a>
                                        <a href="services.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services</div>
                                        </a>
                                        <a href="service-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-server"></i></span>
                                            <div class="drop-title">Services Single</div>
                                        </a>
                                        <a href="blog.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Our Latest News</div>
                                        </a>
                                        <a href="blog-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">News Details</div>
                                        </a>
                                        <a href="career.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-graduation-cap"></i></span>
                                            <div class="drop-title">Career</div>
                                        </a>
                                        <a href="career-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-user-graduate"></i></span>
                                            <div class="drop-title">Career Single</div>
                                        </a>
                                        <a href="integrations.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-rocket-launch"></i></span>
                                            <div class="drop-title">Integrations</div>
                                        </a>
                                        <a href="integration-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                            <div class="drop-title">Integration Single</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item radius-right-side bg-light">
                                        <h6 class="drop-heading">Utility Pages</h6>
                                        <a href="style-guide.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Style Guide</div>
                                        </a>
                                        <a href="support.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-life-ring"></i></span>
                                            <div class="drop-title">Help Center</div>
                                        </a>
                                        <a href="support-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-headset"></i></span>
                                            <div class="drop-title">Help Details</div>
                                        </a>
                                        <a href="request-demo.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-laptop-code"></i></span>
                                            <div class="drop-title">Request for Demo</div>
                                        </a>
                                        <a href="login.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-sign-in"></i></span>
                                            <div class="drop-title">User Login</div>
                                        </a>
                                        <a href="register.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user-plus"></i></span>
                                            <div class="drop-title">User SignUp</div>
                                        </a>
                                        <a href="password-reset.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-trash-undo"></i></span>
                                            <div class="drop-title">Recovery Account</div>
                                        </a>
                                        <a href="404.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-exclamation-triangle"></i></span>
                                            <div class="drop-title">404 Page</div>
                                        </a>
                                        <a href="coming-soon.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-clock"></i></span>
                                            <div class="drop-title">Coming Soon</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.html" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
        <!--header end-->
        <!--header section end-->

        @yield('contents')

        <!--customer review tab section start-->
        <section class="testimonial-section ptb-120 bg-light">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate
                                alternative architectures with accurate schemas.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}"
                                                alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="{{ asset('assets/img/testimonial/1.jpg') }}"
                                                    class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Brain M.</h6>
                                                    <small>Dj Storm the Great</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>The best Web Developers!</h6>
                                                I am really impressed by the quality of services I received from Evoton
                                                Softwares. You were right on schedule, charged reasonable prices, were
                                                professional and courteous in dealings, and delivered items well before
                                                time. I have got a good e-commerce site for my products. My revenue has
                                                increased because of Evoton and I will definitely use your services
                                                again.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="{{ asset('assets/img/testimonial/quotes.svg') }}"
                                                alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}"
                                                alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="{{ asset('assets/img/testimonial/3.jpg') }}"
                                                    class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Pauline V.</h6>
                                                    <small>CEO at Acred Investments</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Satisfied by the First Version.</h6>
                                                We would like to express our satisfaction on the cooperation regarding
                                                the development of our web application. Devaiah and the development team
                                                did a very professional job. We are satisfied with the solution given to
                                                us and with the communication flow through the project.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="{{ asset('assets/img/testimonial/quotes.svg') }}"
                                                alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}"
                                                alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="{{ asset('assets/img/testimonial/2.jpg') }}"
                                                    class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Spokesperson</h6>
                                                    <small>Coffi Construction Limited</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Professional and Timely</h6>
                                                I wanted to take a moment to thank you for the services your team has
                                                provided. Your team has been a pleasure to work with, professional and
                                                timely. The only delay in work that we have experienced has been due to
                                                our own lack of organization managing our projects, not yours. Job well
                                                done and I hope we can continue to grow together.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="{{ asset('assets/img/testimonial/quotes.svg') }}"
                                                alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}"
                                                alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="{{ asset('assets/img/testimonial/4.jpg') }}"
                                                    class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Daniel M.</h6>
                                                    <small>Founder and CTO Topnet Fibre</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Best ISP site!</h6>
                                                Under tight deadlines and with high expectations, Evoton Softwares was a
                                                pleasure to partner with, on a high profile political campaign website.
                                                Professional, conscientious and thoroughly competent - I wouldn't
                                                hesitate in recommending them to other agencies.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="{{ asset('assets/img/testimonial/quotes.svg') }}"
                                                alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}"
                                                alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="{{ asset('assets/img/testimonial/5.jpg') }}"
                                                    class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Victor G.</h6>
                                                    <small>CEO NetMtaani</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Top Notch News Site!</h6>
                                                We have worked with Evoton Softwares on various projects, and find that
                                                they provide quality service and expertise for our programming needs. It
                                                is rare to find a service provider with such professional consistency -
                                                they are a valued service provider to our business!
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="{{ asset('assets/img/testimonial/quotes.svg') }}"
                                                alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--customer review tab section end-->

        <!--cat subscribe start-->
        <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading" data-aos="fade-up">
                                <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                                <h2>Let???s choose the best technology for your business</h2>
                                <p>We can help you to create your dream website and application for better business
                                    revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="contact-us.html" class="btn btn-primary">Contact Us</a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up"
                                data-aos-delay="100">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Web & Mobile</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Artificial
                                        Intelligence</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cloud Services</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Payments &
                                        Subscriptions</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section>
        <!--cat subscribe end-->
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="{{ asset('assets/img/logo_plain.png') }}" alt="logo"
                                        class="img-fluid logo-white">
                                    <img src="{{ asset('assets/img/logo_plain.png') }}" alt="logo"
                                        class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required=""
                                        autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Primary Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="about-us.html" class="text-decoration-none">About Us</a></li>
                                            <li><a href="services.html" class="text-decoration-none">Services</a></li>
                                            <li><a href="career.html" class="text-decoration-none">Career</a></li>
                                            <li><a href="integrations.html"
                                                    class="text-decoration-none">Integrations</a>
                                            </li>
                                            <li><a href="integration-single.html"
                                                    class="text-decoration-none">Integration Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="pricing.html" class="text-decoration-none">Pricing</a></li>
                                            <li><a href="blog.html" class="text-decoration-none">Blog</a></li>
                                            <li><a href="blog-single.html" class="text-decoration-none">Blog
                                                    Details</a></li>
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a>
                                            </li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career
                                                    Single</a>
                                            </li>
                                            <li><a href="service-single.html" class="text-decoration-none">Services
                                                    Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Template</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a>
                                            </li>
                                            <li><a href="support.html" class="text-decoration-none">Support</a></li>
                                            <li><a href="support-single.html" class="text-decoration-none">Support
                                                    Single</a></li>
                                            <li><a href="team.html" class="text-decoration-none">Our Team</a></li>
                                            <li><a href="client-review.html" class="text-decoration-none">Customer
                                                    Review</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career
                                                    Single</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; {{ now()->year }} Evoton Rights Reserved. Designed
                                    By <a href="https://evoton.co.ke/" class="text-decoration-none">Evoton</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->


    </div>



    <!--build:js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--endbuild-->
</body>


</html>
