@extends('layouts.app')

@section('content')
    <section class="breadcrumnd-banner cmn-bg overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="black mb-lg-4 mb-md-3 mb-2">
                        About Us
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
                            About Us
                        </li>
                    </ul>
                </div>
                <div class="breadcrumnd-thumb position-relative">
                    <img src="{{ asset('(images/back.png)') }}" alt="img" class="mimg">
                    <img src="{{ asset('images/back.png') }}" alt="img" class="bread-child">
                    <img src="{{ asset('images/abanner/bread-cat.png') }}" alt="img" class="bread-cat">
                    <img src="{{ asset('images/abanner/bread-cat.png') }}" alt="img" class="bread-cat">
                </div>
            </div>
        </div>
    </section>

    <x-about></x-about>


    <!-- Pricing Section Start -->
    <section class="testimonial-sectionv1 section-padding overflow-hidden white-bg">
        <div class="container">
            <div class="row g-2 justify-content-between mb-60">
                <div class="col-lg-4 col-md-5">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp p5-clr">
                            Clients Testimonial
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Unlocking the Power of Wonderworks Child
                        </h3>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6">
                    Use receiving accounts a number a currencies and get paid like a local Use receivin accounts a
                    number paid the most
                    beautiful think
                </div> --}}
            </div>
            <div class="testimonial-innerbox">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="swiper testimonial-slidewrap01">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item01">
                                        <div class="d-flex align-items-center justify-content-between gap-1">
                                            <div class="man-info d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/img/atestimonial/testimonial-small.png" alt="">
                                                </div>
                                                <div class="cont">
                                                    <h4 class="black mb-1">
                                                        John mutabari
                                                    </h4>
                                                    <span class="black fw-normal">
                                                        Parent
                                                    </span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('images/atestimonial/quote.png') }}" alt="img"
                                                class="quote-testi">
                                        </div>
                                        <p class="pra mt-24 mb-40">
                                            The educational tools provided have far surpassed my expectations. The quality
                                            and attention to detail are exceptional, and they have become an invaluable part
                                            of my child’s learning experience. I’m thrilled with the positive impact it has
                                            had on their education and daily routine.


                                        </p>
                                        <div class="ratting-area d-flex align-items-center gap-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <img src="{{ asset('images/aservices/stay-thumb.png') }}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('images/aservices/stay-shape.png') }}" alt="img" class="stay-element">
    </section>
@endsection
