@extends('layouts.app')
@section('content')
    <section class="breadcrumnd-banner cmn-bg overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="black mb-lg-4 mb-md-3 mb-2">
                        Junior secondary
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
                        <li>Junior Secondary</li>
                    </ul>
                </div>
                <div class="breadcrumnd-thumb position-relative">
                    <img src="{{ asset('images/abanner/bread-thumb.png') }}" alt="img" class="mimg">
                    <img src="{{ asset('images/abanner/bread-child.png') }}" alt="img" class="bread-child">
                    <img src="{{ asset('images/abanner/bread-cat.png') }}" alt="img" class="bread-cat">
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumnd Banner Start -->

    <!-- Service Details Section Start -->
    <section class="service-dtails overflow-hidden section-padding position-relative">
        <div class="container">
            <div class="details-thumb mb-30 w-100 wow fadeInUp" data-wow-delay=".2s">
                <img src="{{ asset('images/js1.png') }}" alt="img" class="w-100 round10">
            </div>
            <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
                <h4 class="custom-title black mb-lg-3 mb-2">
                    Discover the power of education Knowledge is the key
                </h4>
                <p class="pra mb-30">
                    There are many variations passages a This category focariatio of deign Redefining the an the concept
                    of living This
                    category focuses on the design and construction of bu a arrangement furniture and decorative
                    elements within them
                    focariatio of deign There are many variations passages a This category focariatio of deign
                    Redefining the an the concept
                    of living This category focuses on the design and construction of bu a arrangement furniture
                </p>
                <div class="d-flex justify-content-between mb-40">
                    <ul>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Education is the key to success. It empowers individuals with knowledge
                        </li>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Education encompasses formal learning in schools, colleges, and universities
                        </li>
                    </ul>
                    <ul>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Education opens doors to opportunities, fosters critical thinking, and promote
                        </li>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            It plays a vital role in shaping the future generation and promoting
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-center g-xl-4 g-3 mb-60">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-thumb-middile w-100">
                            <img src="{{ asset('images/js4.png') }}" alt="img" class="w-100 round10">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-thumb-middile w-100">
                            <img src="{{ asset('images/2.png') }}" alt="img" class="w-100 round10">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-thumb-middile w-100">
                            <img src="{{ asset('images/js3.png') }}" alt="img" class="w-100 round10">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center g-xl-4 g-3 mb-40">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-class-info w-100">
                            <div class="icon d-center">
                                <img src="{{ asset('images/aicon/car-icons1.png') }}" alt="img">
                            </div>
                            <h4 class="black mb-xl-3 mb-2">
                                Online Class
                            </h4>
                            <p class="pra">
                                Access quality education from the comfort of your home. Our Online Classes, powered by
                                SomaPlus, are designed to be interactive, engaging, and flexible, ensuring that students can
                                learn at their own pace and convenience. Whether catching up or getting ahead, our online
                                platform provides the tools and support needed for success.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-class-info w-100">
                            <div class="icon d-center">
                                <img src="{{ asset('images/aservices/sertd1.png') }}" alt="img">
                            </div>
                            <h4 class="black mb-xl-3 mb-2">
                                Special Tuition
                            </h4>
                            <p class="pra">
                                Tailored education to meet the unique needs of every student. Our Special Tuition program
                                offers personalized instruction to help students overcome challenges and excel in their
                                studies. With dedicated support and customized learning plans, we ensure every student
                                reaches their full potential.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-class-info w-100">
                            <div class="icon d-center">
                                <img src="{{ asset('images/aicon/car-icons5.png') }}" alt="img">
                            </div>
                            <h4 class="black mb-xl-3 mb-2">
                                Knowledge Hub
                            </h4>
                            <p class="pra">
                                A central resource for all things learning. The Knowledge Hub provides students with access
                                to a wide range of educational materials, from interactive lessons to in-depth tutorials.
                                It’s the perfect place to explore new topics, reinforce learning, and discover the joy of
                                education.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="cont-box mb-30 wow fadeInUp" data-wow-delay=".4s">
                <h4 class="black mb-lg-3 mb-2">
                    Why Choose Us
                </h4>
                <p class="pra">
                    At our institution, we believe that education is the foundation for a brighter future. We are committed
                    to nurturing young minds, fostering creativity, and developing the critical thinking skills necessary
                    for success in an ever-changing world.
                </p>
            </div>
            <div class="row align-items-center g-lg-4 g-3 wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-6 col-md-6">
                    <div class="see-content">
                        <ul class="d-grid gap-xl-4 gap-lg-2 gap-md-1">
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                We shape the future by nurturing the next generation, promoting strong values, and
                                encouraging lifelong learning.
                            </li>
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                Our curriculum encompasses both academic excellence and the development of essential life
                                skills, preparing students for success in school and beyond.
                            </li>
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                We open doors to opportunities, fostering critical thinking, creativity, and a love for
                                learning that lasts a lifetime.
                            </li>
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                Our supportive environment ensures that each student feels valued, respected, and empowered
                                to achieve their full potential.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="see-all-thumb w-100">
                        <img src="{{ asset('images/banner.png') }}" alt="img" class="w-100 round10">
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
                        <img src="{{ asset('images/js6.png') }}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('images/aservices/stay-shape.png') }}" alt="img" class="stay-element">
    </section>
@endsection
