@extends('Layouts.base')
@section('page_title', 'Hosting')
@section('contents')

    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="display-5 fw-bold">Reliable and Affordable Web Hosting at Evoton</h3>
                    <p class="lead">Affordable Web Hosting Solutions at Evoton: Starting from Just Ksh 2,500 /Year</p>
                </div>
                <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                    <a href="request-demo.html" class="btn btn-primary me-3">Get Started</a>
                    <a href="{{ Route('contact') }}" class="btn btn-outline-primary">Pricing</a>
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
                        <h2>Drive Success with Reliable, High-Performance Web Hosting</h2>
                        <p>Welcome to Evoton, your trusted partner for affordable web hosting solutions. With our rock-solid
                            infrastructure, blazing-fast servers, and wallet-friendly prices starting as low as 2500 per
                            year, we empower businesses of all sizes to establish a robust online presence without breaking
                            the bank.
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
                                <h3 class="h5 mb-2">Unbeatable Affordability</h3>
                                <p>At Evoton, we believe that exceptional web hosting shouldn't cost a fortune. Our
                                    budget-friendly pricing plans, starting from just Ksh.2,500 per year, ensure that you
                                    get the most bang for your buck without compromising on quality or performance.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 2</span>
                                <h3 class="h5 mb-2">Lightning-Fast Speed</h3>
                                <p>Don't let slow loading times hinder your online success. Evoton's state-of-the-art
                                    servers and optimized infrastructure deliver blazing-fast website speeds, providing your
                                    visitors with an exceptional user experience that keeps them engaged and coming back for
                                    more.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-layer-group fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 3</span>
                                <h3 class="h5 mb-2">Reliable Uptime</h3>
                                <p> Downtime can be disastrous for your online business. Evoton guarantees industry-leading
                                    uptime, ensuring that your website remains accessible 24/7. Trust our robust
                                    infrastructure to keep your website up and running, so you never miss out on valuable
                                    opportunities.
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
                                <h3 class="h5 mb-2">Scalability Made Easy</h3>
                                <p>As your business grows, your hosting needs may evolve. Evoton offers scalable solutions
                                    that can adapt to your changing requirements. Seamlessly upgrade your hosting plan as
                                    your website traffic increases, without any hassle or disruption.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 5</span>
                                <h3 class="h5 mb-2">Intuitive Control Panel</h3>
                                <p> Take full control of your hosting environment with Evoton's user-friendly control panel.
                                    Easily manage your domains, email accounts, databases, and more, all from a single,
                                    intuitive interface. No technical expertise required!
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4 mb-lg-0">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-truck fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 6</span>
                                <h3 class="h5 mb-2">Exceptional Customer Support</h3>
                                <p>At Evoton, we prioritize customer satisfaction. Our dedicated support team is available
                                    24/7 to address your queries, resolve any issues promptly, and provide expert guidance.
                                    Your success is our top priority.
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
