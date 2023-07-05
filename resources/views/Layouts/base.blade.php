<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NN4M0TLBRV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NN4M0TLBRV');
    </script>

    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@evotonsoftware">
    <meta name="twitter:creator" content="@evotonsoftware">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Evoton - Creative SAAS Technology & IT Solutions  ">
    <meta name="twitter:description"
        content="Transforming Digital Experiences: Evoton - Your Leading Software, Web, and Mobile App Development, Hosting, and Bulk SMS Partner in Africa.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Evoton - Creative SAAS Technology & IT Solutions  ">
    <meta property="og:description"
        content="Transforming Digital Experiences: Evoton - Your Leading Software, Web, and Mobile App Development, Hosting, and Bulk SMS Partner in Africa">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="Transforming Digital Experiences: Evoton - Your Leading Software, Web, and Mobile App Development, Hosting, and Bulk SMS Partner in Africa">
    <meta name="author" content="Evoton">

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
                    <a href="{{ Route('home') }}"
                        class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ asset('assets/img/logo_plain.png') }}" alt="evoton logo"
                            class="img-fluid logo-white" />
                        <img src="{{ asset('assets/img/logo_plain.png') }}" alt="evoton logo"
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
                            <li><a href="{{ Route('bulksms') }}" class="nav-link">Bulk SMS</a></li>
                            <li><a href="{{ Route('hosting') }}" class="nav-link">Hosting</a></li>
                            <li><a href="{{ Route('contact') }}" class="nav-link">Contact Us</a></li>
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
                        <img src="{{ asset('assets/img/logo_plain.png') }}" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="far fa-close"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li><a href="{{ Route('home') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ Route('services') }}" class="nav-link">Services</a></li>
                        <li><a href="{{ Route('bulksms') }}" class="nav-link">Bulk SMS</a></li>
                        <li><a href="{{ Route('hosting') }}" class="nav-link">Hosting</a></li>
                        <li><a href="{{ Route('contact') }}" class="nav-link">Contact us</a></li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="{{ Route('contact') }}" class="btn btn-primary">Get Started</a>
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
                                <h2>Join the Evoton Community</h2>
                                <p>Unlock the potential of your website with Evoton. Join the ever-growing community of
                                    businesses, entrepreneurs, and developers who trust Evoton to create remarkable
                                    online
                                    experiences. Discover the power of Evoton's intuitive website development software
                                    and
                                    embark on a journey of endless possibilities.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="{{ Route('contact') }}" class="btn btn-primary">Contact Us</a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up"
                                data-aos-delay="100">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Get started today and
                                        take your
                                        online presence to new heights with Evoton.</span>
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
                                    By <a href="https://themetags.com/" class="text-decoration-none">Evoton</a></p>
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/64a58f8ccc26a871b0268d4e/1h4jbhga4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>


</html>
