@extends('layouts.app')
@section('content')
    <section class="bannerv2-section position-relative fix" id="scrollUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9">
                    <div class="herov2-content position-relative">
                        <h1 class="mb-lg-4 mb-3 wow fadeInUp" data-wow-delay=".3s">
                            Building a Better <br> Future through
                        </h1>
                        <p class="mb-40 text-md pra wow fadeInUp" data-wow-delay=".5s">
                            Creating a strong foundation for <span class="font-bold">success and growth </span>is at the
                            heart of everything we do. Our
                            commitment to excellence is unwavering, and we believe that every student deserves the
                            opportunity to thrive. We strive to inspire and empower each individual to reach their full
                            potential, both academically and personally. Through a nurturing and supportive environment, we
                            encourage curiosity, foster creativity, and build the confidence needed for lifelong learning.
                            Our dedicated faculty and staff are committed to guiding students on their journey, ensuring
                            they are well-prepared to meet the challenges of the future and contribute positively to
                            society.



                        </p>
                        <div class="heros-btn">
                            <a href="/about" class="theme-btn round100 p2-bg">
                                <span class="white fw-medium">
                                    Read More
                                </span>
                            </a>
                        </div>
                        <!-- Element -->
                        <img src="{{ asset('images/abanner/reg.png') }}" alt="img" class="small-aregtengle">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element -->
        {{--        --------------------------------------> --}}
        <img src="{{ asset('images/abanner/kyte.png') }}" alt="img" class="banner-kyte">
        <img src="{{ asset('images/app2.png') }} " alt="img" class="banner-shape wow fadeInLeft" data-wow-delay=".3s">
        <img src="{{ asset('images/abanner/banner-shadow.png') }}" alt="img" class="banner-shadow">
    </section>
    <x-about>

    </x-about>
    <x-services></x-services>
    <x-blog></x-blog>
@endsection
