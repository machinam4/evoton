@extends('Layouts.base')
@section('page_title', 'Services')
@section('contents')

    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{asset('assets/img/page-header-bg.svg')}}')no-repeat bottom left">
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
                                <h3 class="h5">Advanced analytics</h3>
                                <p>Synergistically pursue accurate initiatives without economically sound
                                    imperatives.</p>
                                <p> Professionally architect unique process improvements via optimal.</p>
                                <h6 class="mt-4">Included with...</h6>
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>High-converting
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Personal
                                        branding
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Modernized
                                        prospecting
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Clean and
                                        modern
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Showcasing
                                        success
                                    </li>
                                    <li class="py-1"><i class="fad fa-check-circle me-2 text-primary"></i>Bootstrap
                                        latest version
                                    </li>
                                </ul>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-success-soft mb-32">
                                <i class="fal fa-file-chart-line icon-sm text-success"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Automated Reports</h3>
                                <p class="mb-0">Synergistically pursue accurate initiatives without economically
                                    imperatives.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                            <div class="icon-box d-inline-block rounded-circle bg-danger-soft mb-32">
                                <i class="fal fa-user-friends icon-sm text-danger"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="h5">Product Design</h3>
                                <p class="mb-0">Quickly productize prospective value before collaborative benefits.</p>
                            </div>
                            <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i
                                    class="far fa-arrow-right"></i></a>
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
