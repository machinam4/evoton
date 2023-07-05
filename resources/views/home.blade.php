@extends('Layouts.base')
@section('page_title', 'Home')

@section('contents')
    <!--hero section start-->
    <section class="hero-section ptb-120 bg-dark text-white"
        style="background: url('{{ asset('assets/img/shape/dot-dot-wave-shape.svg') }}')no-repeat bottom left">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-xl-5 col-lg-5">
                    <div class="hero-content-wrap text-center text-xl-start text-lg-start mt-5 mt-lg-0 mt-xl-0"
                        data-aos="fade-up">
                        <h1 class="fw-bold display-5">Advanced Solutions for Business</h1>
                        <p class="lead">Need a software solution that’s right for you? Choose a digital product crafted to
                            answer the challenges of your industry. Empower your business with a state-of-the-art digital
                            solution, tailored to your needs and expectations.</p>
                        <div
                            class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                            <form id="subscribe-form" name="email-form"
                                class="hero-subscribe-form d-block d-lg-flex d-md-flex">
                                <input type="email" class="form-control me-2" name="Email" data-name="Email"
                                    placeholder="Enter Your Email Address" id="email-address" required="">
                                <input type="submit" value="Get in Touch" data-wait="Please wait..."
                                    class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                            </form>
                            <ul class="nav subscribe-feature-list mt-3 justify-content-lg-start justify-content-md-center">
                                <li class="nav-item">
                                    <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i>In-house
                                        Development</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>24/7 support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mt-lg-5 mt-4">
                    <div class="hero-img-wrap position-relative" data-aos="fade-up">
                        <div class="hero-screen-wrap">
                            <div class="phone-screen">
                                <img src="{{ asset('assets/img/screen/phone-screen.png') }}" alt="hero image"
                                    class="position-relative img-fluid">
                            </div>
                            <div class="mac-screen">
                                <img src="{{ asset('assets/img/screen/mac-screen.png') }}" alt="hero image"
                                    class="position-relative img-fluid rounded-custom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--customer section start-->
    <div class="customer-section pb-120 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <ul class="customer-logos-grid text-center list-unstyled mb-0">
                        <li>
                            <img src="{{ asset('assets/img/tools/laravel.png') }}" width="150" alt="laravel logo"
                                class="img-fluid  p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up" data-aos-delay="50">
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/tools/django.png') }}" width="150" alt="django logo"
                                class="img-fluid p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up" data-aos-delay="50">
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/tools/react.png') }}" width="150" alt="reactjs logo"
                                class="img-fluid p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up" data-aos-delay="50">
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/tools/vuejs.png') }}" width="150" alt="vuejs logo"
                                class="img-fluid p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up" data-aos-delay="50">
                        </li>
                    </ul>
                    <p class="text-center mt-lg-0 mt-0 mb-0" data-aos="fade-up" data-aos-delay="200">Trust Evoton to
                        transform your ideas into stunning and innovative digital experiences using the latest web
                        frameworks available.</p>
                </div>
            </div>
        </div>
    </div>
    <!--customer section end-->

    <!--services section start-->
    <section class="services-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Services</h4>
                        <h2>Unlock Your Digital Success with Evoton</h2>
                        <p>Welcome to Evoton, a leading software development company specializing in delivering cutting-edge
                            solutions to drive your digital success. With our expertise in website and app development, web
                            hosting, and bulk SMS services, we empower businesses like yours to thrive in the ever-evolving
                            digital landscape.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feature-grid">
                        <div class="feature-card border border-light border-2 bg-white rounded-custom p-5">
                            <div class="feature-icon rounded bg-primary mb-32">
                                <i class="fas fa-globe fa-2x text-white"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Web Development</h3>
                                <p>Stand out from the competition with our exceptional website development services.From
                                    responsive designs to seamless navigation, we ensure your online presence leaves a
                                    lasting impression.</p>
                                <h6 class="mt-4">Included with...</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i
                                            class="fas fa-check-circle me-2 text-primary"></i>Mobile-Responsive Design</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>
                                        SEO Optimization</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>E-Commerce
                                        Integration</li>
                                </ul>
                            </div>
                            <div class="action-btn mt-2 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="{{ Route('contact') }}" class="btn btn-primary me-3">Get a Quote</a>
                                <a href="{{ Route('websites') }}" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                        <div class="feature-card border border-light border-2 bg-white rounded-custom p-5">
                            <div class="feature-icon rounded bg-danger mb-32">
                                <i class="fas fa-file-text fa-2x text-white"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">EvoSMS Bulk SMS</h3>
                                <p class="mb-0">Reach and engage your target audience effectively with our powerful bulk
                                    SMS services.With advanced features and seamless integration, we help you achieve
                                    exceptional results.</p>
                                <h6 class="mt-4">Included with...</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Seamless
                                        Integration
                                    </li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Time-sensitive
                                        Campaigns</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Dedicated
                                        Support</li>
                                </ul>
                            </div>
                            <div class="action-btn mt-2 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="https://bulksms.evoton.co.ke" class="btn btn-primary me-3">Get started</a>
                                <a href="{{ Route('bulksms') }}" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                        <div class="feature-card border border-light border-2 bg-white rounded-custom p-5">
                            <div class="feature-icon rounded bg-success mb-32">
                                <i class="fas fa-spell-check fa-2x text-white"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Evoton Web Hosting</h3>
                                <p class="mb-0">Ensure your website remains fast, secure, and accessible with our
                                    reliable web hosting solutions.Evoton's hosting services guarantee maximum uptime, fast
                                    loading speeds, and top-notch security measures.</p>
                                <h6 class="mt-4">Included with...</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Lightning-Fast
                                        Speed</li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>99% Uptime
                                    </li>
                                    <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Intuitive
                                        Control Panel</li>
                                </ul>
                            </div>
                            <div class="action-btn mt-2 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="{{ Route('contact') }}" class="btn btn-primary me-3">Get started</a>
                                <a href="{{ Route('hosting') }}" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->

    <!--experience section start-->
    <section class="feature-section pt-60 pb-120 bg-dark text-white">
        <div class="container">
            <div class="row align-items-lg-center justify-content-between">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                    <div class="mb-4" data-aos="fade-up">
                        <h2>Experience your Product with Integration</h2>
                        <p>Evoton Software creates a fantastic brand experience that inspires loyalty and advocacy
                            underlying network and data integrations which brings companies together behind one unifying
                            interest. </p>
                    </div>
                    <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up" data-aos-delay="50">
                        <li>
                            <span class="d-block mb-4"><i class="fal fa-user fa-2x text-primary"></i></span>
                            <h3 class="h5">Customer analysis</h3>
                            <p>Evoton-software is able to visualize customers journey and build individual customer
                                profiles, gaining even deeper insights into each and every customer that has visited your
                                store.</p>
                        </li>
                        <li>
                            <span class="d-block mb-4"><i class="fal fa-watch fa-2x text-primary"></i></span>
                            <h3 class="h5">Real time metrics</h3>
                            <p>Interactively integrate extensible users resource. </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="pr-lg-4">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto"
                            data-aos="fade-up" data-aos-delay="50">
                            <img src="{{ asset('assets/img/dashboard-img.png') }}" alt="" class="img-fluid">
                            <div
                                class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--experience section end-->

    <!--highlight promo start-->
    <section class="promo-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h2>Everything We Do it With Love</h2>
                        <p>Progressively deploy market positioning catalysts for change and technically sound
                            authoritatively e-enable resource-leveling infrastructures. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4"
                        data-aos="fade-up" data-aos-delay="50">
                        <div class="promo-card-info">
                            <h3 class="display-5 fw-medium mb-4">50+</h3>
                            <h2 class="h5">Completed Projects</h2>
                            <p class="mb-0">As evoton-software we consider to approach a simple software product vision
                                statement, and then define a broad strokes plan that allows your software project to begin
                                to move forward in small increments. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="promo-card-info">
                            <h3 class="display-5 fw-medium mb-4">50+</h3>
                            <h2 class="h5">Happy Client</h2>
                            <p class="mb-0">Evoton software allow developers to engage with the customer or end users
                                directly, and freedom to make any changes that do not alter the scope of the project, goes a
                                long way in empowering them and making them happy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-0"
                        data-aos="fade-up" data-aos-delay="150">
                        <div class="promo-card-info">
                            <h3 class="display-5 fw-medium mb-4">90%</h3>
                            <h2 class="h5">24/7 Support</h2>
                            <p class="mb-0">As evoton-software we support our customers and help them find answers to
                                questions as soon as they come up—24/7 and in real-time. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--highlight promo end-->

    <!--feature section start-->
    <section class="feature-section-two pt-60 pb-120 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">Features</h4>
                        <h2>Powerful Solutions for Your Business Needs</h2>
                        <p>As evoton-software we become more complex and demanding companies to opt in for custom software
                            development as a solution to issues on many different fronts.
                            For one, evoton-software development gives your business the flexibility and compatibility to
                            scale up or down and tailor it specifically to your needs.
                            With this info, let’s dive in and find out why evoton-software development might be the best
                            solution for your business.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-bezier-curve text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Pixel Perfect Design</h3>
                                    <p>Progressively foster enterprise-wide systems whereas equity invested
                                        web-readiness harness installed.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-danger rounded me-4">
                                    <i class="fas fa-fingerprint text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Unique &amp; Minimal Design</h3>
                                    <p>Dramatically administrate progressive metrics without error-free globally
                                        simplify standardized.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                        <ul class="img-overlay-list list-unstyled position-absolute">
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                                data-aos-delay="50">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Project Management</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                                data-aos-delay="100">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Team Communication</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                                data-aos-delay="150">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">System Maintenance</h6>
                            </li>
                        </ul>
                        <img src="{{ asset('assets/img/feature-img3.jpg') }}" alt="feature image"
                            class="img-fluid rounded-custom" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--work process section start-->
    <section class="work-process ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h4 class="h5 text-primary">Process</h4>
                        <h2>We Follow Our Work Process</h2>
                        <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow functionalized
                            value whereas accurate e-commerce. </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0"
                        data-aos="fade-up" data-aos-delay="50">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">1</span>
                        </div>
                        <h3 class="h5">Research</h3>
                        <p class="mb-0">Uniquely pursue restore efficient for initiatives expanded.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">2</span>
                        </div>
                        <h3 class="h5">Designing</h3>
                        <p class="mb-0">Restore efficient human pursue for compelling initiatives.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0"
                        data-aos="fade-up" data-aos-delay="150">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">3</span>
                        </div>
                        <h3 class="h5">Building</h3>
                        <p class="mb-0">Continually enhance pursue compelling initiatives enhance.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">4</span>
                        </div>
                        <h3 class="h5">Deliver</h3>
                        <p class="mb-0">Uniquely for compelling initiatives expanded interactive.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--work process section end-->

    <!--integration section start-->
    <section class="integration-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">Integration</h4>
                        <h2>We Collaborate with Top Software Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="integration-wrapper position-relative w-100">
                        <!--animated shape start-->
                        <ul
                            class="position-absolute animate-element parallax-element shape-service z--1 d-none d-lg-none d-xl-block">

                            <li class="layer" data-depth="0.02">
                                <img src="{{ asset('assets/img/color-shape/feature-2.svg') }}" alt="shape"
                                    class="img-fluid position-absolute color-shape-2 z-5">
                            </li>
                            <li class="layer" data-depth="0.03">
                                <img src="{{ asset('assets/img/color-shape/feature-3.svg') }}" alt="shape"
                                    class="img-fluid position-absolute color-shape-3">
                            </li>
                        </ul>
                        <!--animated shape end-->
                        <ul class="integration-list list-unstyled mb-0">
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/figma.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Figma</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/facebook.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Facebook</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/sales-force.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Sales Force</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/atlassian.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Atlassian</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/dropbox-2.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">DropBox</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/evernote.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">EverNote</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/google-icon.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Google</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/slack.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Slack</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/google-analytics.png') }}"
                                        alt="integration" class="img-fluid">
                                    <h6 class="mb-0 mt-4">Google Analytics</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/google-drive.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Google Drive</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/hubspot.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Hubspot</h6>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/instagram.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Instagram</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/linkedin.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Linkedin</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/mailchimp.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">MailChimp</h6>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="single-integration">
                                    <img src="{{ asset('assets/img/integations/marekto.png') }}" alt="integration"
                                        class="img-fluid">
                                    <h6 class="mb-0 mt-4">Marekto</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--integration section end-->



@endsection
