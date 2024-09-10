@extends('layouts.app')
@section('content')
    <section class="breadcrumnd-banner cmn-bg overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="black mb-lg-4 mb-md-3 mb-2">
                        Contact Us
                    </h1>
                    <ul class="bread-list d-flex align-items-center gap-lg-4 gap-md-3 gap-2">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
                <div class="breadcrumnd-thumb position-relative">
                    <img src="assets/img/abanner/bread-thumb.png" alt="img" class="mimg">
                    <img src="assets/img/abanner/bread-child.png" alt="img" class="bread-child">
                    <img src="assets/img/abanner/bread-cat.png" alt="img" class="bread-cat">
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumnd Banner Start -->

    <!-- Contact Info Start -->
    <section class="contact-infosectionv1 space-top overflow-hidden space-bottom">
        <div class="container">
            <div class="row g-lg-4 g-3 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h5 class="black">
                            Location
                        </h5>
                        <a href="#" class="pra">
                            kitengela,kajiado </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h5 class="black">
                            Mail
                        </h5>
                        <a href="#" class="pra">
                            info@polajunior.com </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h5 class="black">
                            Contact
                        </h5>
                        <a href="#" class="pra">
                            0110407502
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map -->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.481570531967!2d36.957306785055934!3d-1.4831950319961735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f9f8c2ccaeed5%3A0x24fb1f9e8ff5cc20!2sPola%20Junior%20School!5e0!3m2!1sen!2ske!4v1722862888578!5m2!1sen!2ske"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Contact Infov2 -->
    <section class="contact-sectionv02 section-padding">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span class="sub-title wow fadeInUp p5-clr">
                    Contact
                </span>
                <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                    Unlock your potential with education
                </h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about-one-thumbs">
                        <div class="thumbs position-relative wow fadeInUp" data-wow-delay="1200">
                            <img src="{{ asset('images/naft.png') }}" alt="img" class="round10 main-img">
                            <!-- Element -->
                            <img src="{{ asset('images/about/lighing-cmn.png') }}" alt="img" class="about-light1">
                            <img src="{{ asset('images/about/arrows-cmn.png') }}" alt="img" class="about-arrows">
                        </div>
                        <div class="about-one-grow">
                            <div class="academy-box text-center mb-30 wow fadeInUp" data-wow-delay="1400">
                                <img src="{{ asset('images/about/grow.png') }}" alt="img">
                                <h4 class="black">
                                    Academy
                                </h4>
                                <p class="pra">
                                    Learning Ladder School
                                </p>
                            </div>
                            <div class="academy-box2 gra-border round10 wow fadeInUp" data-wow-delay="1600">
                                <div class="content">
                                    <h3>
                                        <span class="count">10</span>+
                                    </h3>
                                    <p>years of experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-contactF></x-contactF>
            </div>
        </div>
    </section>

    <!-- Stay Success Section Start -->
    <section class="stay-section pt-50 pb-50 cmn-bg overflow-hidden position-relative">
        <div class="container">
            <div class="row justify-content-between align-items-center g-4">
                <div class="col-lg-5 col-md-6 col-sm-7">
                    <div class="stay-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp black">
                                Stay With Us
                            </span>
                            <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                                The path to success starts with education
                            </h3>
                            <p class="mb-24 pra wow fadeInUp" data-wow-delay=".4s">
                                Education is the foundation upon which futures are built. By staying with us, you ensure
                                that your child receives the guidance and support needed to excel academically and
                                personally. Join us on the journey to success.
                            </p>
                            <a href="/contact" class="theme-btn round100 p2-bg py-3">
                                <span class="white fw-medium">
                                    Read More
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 me-xl-5 col-sm-5">
                    <div class="stay-thumb w-100">
                        <img src="{{ asset('images/js6.png') }}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('images/aservices/stay-shape.png') }}" alt="img" class="stay-element">
    </section>
@endsection
