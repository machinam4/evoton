@extends('Layouts.base')
@section('page_title', 'Services')
@section('contents')
    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-5">
                    <h1 class="display-5 fw-bold">Contact Us</h1>
                    <p class="lead">Seamlessly actualize client-based users after out-of-the-box value data through
                        frictionless expertise.</p>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <!--contact us promo section start-->
    <section class="contact-promo ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div
                        class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fad fa-comment-alt-lines fa-3x text-primary"></span>
                        <div class="contact-promo-info mb-4">
                            <h5>Chat with us</h5>
                            <p>We've got live Social Experts waiting to help you <strong>Monday to Friday</strong> from
                                <strong>9am to 5pm EST.</strong>
                            </p>
                        </div>
                        <a href="mailto:machina@evoton.co.ke" class="btn btn-link mt-auto">Chat with us</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div
                        class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fad fa-envelope fa-3x text-primary"></span>
                        <div class="contact-promo-info mb-4">
                            <h5>Email Us</h5>
                            <p>Simple drop us an email at <strong>machina@evoton.co.ke</strong>
                                and you'll receive a reply within 24 hours</p>
                        </div>
                        <a href="mailto:machina@evoton.co.ke" class="btn btn-primary mt-auto">Email Us</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div
                        class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fad fa-phone fa-3x text-primary"></span>
                        <div class="contact-promo-info mb-4">
                            <h5>Give us a call</h5>
                            <p>Give us a ring.Our Experts are standing by <strong>Monday to Friday</strong> from
                                <strong>9am to 5pm EAT.</strong>
                            </p>
                        </div>
                        <a href="tel:+254 758 309 015" class="btn btn-link mt-auto">+254 758 309 015</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo section end-->

    <!--contact us form start-->
    <section class="contact-us-form pt-60 pb-120"
        style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-heading">
                        <h2>Talk to Our Sales & Marketing Department Team</h2>
                        <p>Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via
                            standardized infrastructures.</p>
                    </div>
                    <form action="#" class="register-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">First name <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="firstName" required
                                        placeholder="First name" aria-label="First name">
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <label for="lastName" class="mb-1">Last name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="lastName" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="phone" required placeholder="Phone"
                                        aria-label="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" id="email" required placeholder="Email"
                                        aria-label="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="yourMessage" required placeholder="How can we help you?" style="height: 120px"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Get in Touch</button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="contact-us-img">
                        <img src="assets/img/contact-us-img-2.svg" alt="contact us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us form end-->

@endsection
