@extends('layouts.app')
@section('content')
    <section class="breadcrumnd-banner cmn-bg overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="black mb-lg-4 mb-md-3 mb-2">
                        Primary school
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
                            Primary school </li>
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
                <img src="{{ asset('images/prp.png') }}" alt="img" class="w-100 round10">
            </div>
            <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
                <h4 class="custom-title black mb-lg-3 mb-2">
                    Discover the power of education Knowledge is the key
                </h4>
                <p class="pra mb-30">
                    Education during the junior secondary years is crucial for developing the skills and knowledge necessary
                    for future academic and personal success. Our junior secondary program is designed to challenge students
                    and inspire a lifelong passion for learning.
                </p>
                <div class="d-flex justify-content-between mb-40">
                    <ul>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Empowering Young Minds: Education is the foundation for success, empowering students with the
                            knowledge they need to excel.
                        </li>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Comprehensive Learning Experience: Our approach to education encompasses formal learning in a
                            structured environment, fostering academic excellence and social development.
                        </li>
                    </ul>
                    <ul>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Comprehensive Learning Experience: Our curriculum covers a wide range of subjects, ensuring
                            students receive a well-rounded education.
                        </li>
                        <li class="d-flex align-items-center gap-xl-3 gap-2 pra">
                            <i class="fa-solid fa-chevron-right p5-clr"></i>
                            Shaping Future Generations: We play a vital role in nurturing the leaders of tomorrow. Our
                            program not only focuses on academic excellence but also instills values such as responsibility,
                            integrity, and respect.
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-center g-xl-4 g-3 mb-60">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-thumb-middile w-100">
                            <img src="{{ asset('images/pri.png') }}" alt="img" class="w-100 round10">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-thumb-middile w-100">
                            <img src="{{ asset('images/2.png') }}" alt="img" class="w-100 round10">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="details-thumb-middile w-100">
                            <img src="{{ asset('images/pri2.png') }}" alt="img" class="w-100 round10">
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
                                Access quality education from the comfort of your home. Our Online Classes are designed to
                                be interactive, engaging, and flexible, ensuring that students can learn at their own pace
                                and convenience. Whether catching up or getting ahead, our online platform provides the
                                tools and support needed for success. </p>
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
                                reaches their full potential. </p>
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
                                education. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont-box mb-30 wow fadeInUp" data-wow-delay=".4s">
                <h4 class="black mb-lg-3 mb-2">
                    Primary School Services
                </h4>
                <p class="pra">
                    Our primary school program is designed to provide a comprehensive and engaging education that nurtures
                    young minds. We focus on building strong foundational skills while encouraging curiosity and a love for
                    learning.
                </p>
            </div>
            <div class="row align-items-center g-lg-4 g-3 wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-6 col-md-6">
                    <div class="see-content">
                        <ul class="d-grid gap-xl-4 gap-lg-2 gap-md-1">
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                We shape future generations by fostering a love for learning and critical thinking.
                            </li>
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                Our curriculum covers a wide range of subjects, ensuring a well-rounded education.
                            </li>
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                We prepare students for future academic success and personal growth.
                            </li>
                            <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                                <i class="fa-solid fa-angles-right p5-clr"></i>
                                We provide a supportive environment that encourages exploration and creativity.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="">
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
                        <img src="{{ asset('images/ilis.png') }}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('images/aservices/stay-shape.png') }}" alt="img" class="stay-element">
    </section>
@endsection
