@extends('Layouts.base')
@section('page_title', 'Web Development')
@section('contents')

    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1 class="display-5 fw-bold"> Evoton Website Development <br> Boost Your Online Presence</h1>
                    <p class="lead">Empowering You to Create Stunning Websites That Captivate Your Audience.</p>
                </div>
                <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                    <a href="{{ Route('contact') }}" class="btn btn-primary me-3">Get a Quote</a>
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
                        <h2>Streamlined Design Process</h2>
                        <p>Are you looking to enhance your online presence and captivate your audience? Look no further than
                            Evoton, the leading software solution for website development. With Evoton, you'll unlock a
                            world of possibilities to create stunning and dynamic websites that leave a lasting impression.
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
                                <h3 class="h5 mb-2">Streamlined Design Process</h3>
                                <p>Evoton revolutionizes the website development process, making it seamless and efficient.
                                    Our intuitive interface allows you to effortlessly bring your vision to life. Whether
                                    you're a seasoned developer or a novice, Evoton empowers you to create professional
                                    websites with ease. Say goodbye to tedious coding and hello to a visually captivating
                                    online presence.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 2</span>
                                <h3 class="h5 mb-2">Unleash Creativity</h3>
                                <p>With Evoton's wide range of customizable templates, you have the freedom to express your
                                    creativity. Stand out from the crowd by selecting from an extensive collection of
                                    stunning themes and layouts, tailored to various industries and niches. Our powerful
                                    editing tools enable you to customize every aspect of your website, from fonts and
                                    colors to images and animations, ensuring your site is a true reflection of your brand.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-layer-group fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 3</span>
                                <h3 class="h5 mb-2">Mobile-Responsive Design</h3>
                                <p>In today's mobile-dominated world, a responsive website is vital. Evoton ensures that
                                    your website looks and functions flawlessly across all devices. From smartphones and
                                    tablets to laptops and desktops, your content will adapt seamlessly to provide an
                                    optimal user experience. With Evoton, your website will be ready to engage and impress
                                    visitors, no matter how they access it.
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
                                <h3 class="h5 mb-2">SEO Optimization</h3>
                                <p>A beautiful website is only effective if it can be found. Evoton incorporates built-in
                                    search engine optimization (SEO) features to boost your website's visibility. Drive
                                    organic traffic to your site by optimizing meta tags, URLs, and keywords effortlessly.
                                    Maximize your online reach and increase your chances of being discovered by potential
                                    customers with Evoton's powerful SEO tools.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 5</span>
                                <h3 class="h5 mb-2">E-Commerce Integration</h3>
                                <p>Looking to expand your business online? Evoton seamlessly integrates e-commerce
                                    functionality into your website. With our robust e-commerce tools, you can set up an
                                    online store, manage inventory, process payments securely, and provide a seamless
                                    shopping experience for your customers. Evoton empowers you to turn your website into a
                                    thriving online marketplace.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4 mb-lg-0">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-truck fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Section 6</span>
                                <h3 class="h5 mb-2">Reliable Hosting and Support</h3>
                                <p>Rest easy knowing that your website is in safe hands. Evoton offers reliable hosting
                                    services, ensuring your website is accessible and performs optimally at all times. Our
                                    dedicated support team is always ready to assist you, providing prompt responses to your
                                    queries and ensuring a smooth website development experience.
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
