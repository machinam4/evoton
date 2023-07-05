@extends('Layouts.base')
@section('page_title', 'Services')
@section('contents')

    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1 class="display-5 fw-bold">We are Development Experts</h1>
                    <p class="lead">Seamlessly actualize client-based users after out-of-the-box value. Globally embrace
                        strategic data through frictionless expertise.</p>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <!--features grid section start-->
    <section class="feature-section bg-light ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-grid">
                        <div class="feature-card bg-white shadow-sm highlight-card rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-primary-soft mb-32">
                                <i class="fal fa-analytics icon-sm text-primary"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Web Development</h3>
                                <p>Are you looking to enhance your online presence and captivate your audience?</p>
                                <p>With Evoton, you'll unlock a world of possibilities to create stunning and dynamic
                                    websites that leave a lasting impression.</p>
                                <h6 class="mt-4">Included with...</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Streamlined
                                        Design Process
                                    </li>
                                    <li class="py-1"><i
                                            class="fad fa-check-circle me-2 text-primary"></i>Mobile-Responsive Design
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>SEO Optimization
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>E-Commerce
                                        Integration
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Reliable Hosting
                                        and Support
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Join the Evoton
                                        Community
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ Route('websites') }}" class="link-with-icon text-decoration-none mt-3">View Details
                                <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-success-soft mb-32">
                                <i class="fal fa-file-chart-line icon-sm text-success"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">EvoSMS BULK SMS</h3>
                                <p class="mb-0">With our powerful platform, you can effortlessly connect with your target
                                    audience, increase brand visibility, and drive conversions.</p>
                            </div>
                            <a href="{{ Route('bulksms') }}" class="link-with-icon text-decoration-none mt-3">View Details
                                <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-danger-soft mb-32">
                                <i class="fal fa-user-friends icon-sm text-danger"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Evoton Hosting</h3>
                                <p class="mb-0">Our reliable and feature-rich hosting solutions are designed to enhance
                                    your website's performance, speed, and security.</p>
                            </div>
                            <a href="{{ Route('hosting') }}" class="link-with-icon text-decoration-none mt-3">View Details
                                <i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <i class="fal fa-spell-check icon-sm text-dark"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Web & Mobile</h3>
                                <p class="mb-0">Credibly disintermediate functional processes for team driven
                                    action.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-warning-soft mb-32">
                                <i class="fal fa-cog icon-sm text-warning"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Cloud Services</h3>
                                <p class="mb-0">Dynamically develop ubiquitous opportunities whereas relationships.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--features grid section end-->

@endsection
