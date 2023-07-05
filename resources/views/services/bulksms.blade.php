@extends('Layouts.base')
@section('page_title', 'Bulk SMS EvoSMS')
@section('contents')

    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="display-5 fw-bold">Reach, Engage, Succeed with Evoton's Powerful Bulk SMS Solutions</h3>
                    <p class="lead">Maximize Your Marketing Efforts and Connect with Your Audience Like Never Before</p>
                </div>
                <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                    <a href="https://bulksms.evoton.co.ke" class="btn btn-primary me-3">Get Started</a>
                    <a href="{{ Route('contact') }}" class="btn btn-outline-primary">Talk to Sales</a>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <!--our work process start-->
    <section class="work-process ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Introduction</h4>
                        <h2>Boost Your Business with Bulk SMS Solutions from Evoton</h2>
                        <p>Take advantage of our unbeatable prices and features for your SMS campaigns. With Evoton, you can
                            enjoy a one-time investment of only KSh 7,500 for a sender ID, and every SMS at a flat rate of
                            KSh 0.40 across all networks. No minimum purchase required, and no credit expiry, giving you
                            complete flexibility and control.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-12 order-1 order-lg-0">
                    <ul class="work-process-list list-unstyled">
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-folder-tree fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 1</span>
                                <h3 class="h5 mb-2">Unmatched Reach</h3>
                                <p>Instantly reach thousands of customers with a single click. Evoton's robust platform
                                    allows you to send personalized SMS campaigns to targeted audiences, ensuring maximum
                                    engagement and response.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 2</span>
                                <h3 class="h5 mb-2">Seamless Integration</h3>
                                <p> Integrate Evoton's powerful bulk SMS solution seamlessly into your existing systems.
                                    Whether you use CRM software, e-commerce platforms, or other business tools, Evoton
                                    offers easy integration to streamline your communication efforts.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-layer-group fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 3</span>
                                <h3 class="h5 mb-2">Personalized Messaging</h3>
                                <p> Tailor your messages to resonate with each recipient. Evoton's dynamic personalization
                                    options allow you to include customer names, relevant offers, and personalized details,
                                    resulting in higher open rates and conversions.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-12 order-1 order-lg-1">
                    <div class="img-wrap">
                        <img src="{{ asset('assets\img\websites\webdev1.jpg') }}" alt="work process"
                            class="img-fluid rounded-custom">
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                    <div class="img-wrap">
                        <img src="{{ asset('assets\img\websites\webdev2.jpg') }}" alt="work process"
                            class="img-fluid rounded-custom">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <ul class="work-process-list list-unstyled">
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-folder-tree fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 4</span>
                                <h3 class="h5 mb-2">Time-sensitive Campaigns</h3>
                                <p>With Evoton, you can schedule your SMS campaigns to be delivered at the perfect moment.
                                    Reach customers during peak hours, promote limited-time offers, and increase urgency for
                                    quick action.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 5</span>
                                <h3 class="h5 mb-2">Opt-in Management</h3>
                                <p> Ensure compliance with legal regulations and build a loyal customer base with Evoton's
                                    opt-in management tools. Easily handle opt-outs, maintain subscription lists, and
                                    provide customers with hassle-free ways to manage their preferences.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4 mb-lg-0">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-truck fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 6</span>
                                <h3 class="h5 mb-2">Dedicated Support</h3>
                                <p>Evoton is committed to your success. Our dedicated support team is available to assist
                                    you at every step, providing guidance, troubleshooting, and best practices to help you
                                    achieve your marketing goals.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--our work process end-->

@endsection
