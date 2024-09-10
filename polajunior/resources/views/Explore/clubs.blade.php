@extends('layouts.app')
@section('content')
    <section class="relative h-96 mt-0 p-32 flex items-center justify-center flex-col bg-indigo-900 text-white ">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="text-white mb-lg-4 mb-md-3 mb-2">
                        Clubs and Programs
                    </h1>
                    <ul class="bread-list d-flex align-items-center gap-lg-4 gap-md-3 gap-2">
                        <li>
                            <a class="text-white font-medium decoration-white" href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Clubs and Programs
                        </li>
                    </ul>
                </div>
                {{-- <div class="breadcrumnd-thumb position-relative">
                    <img src="{{ asset('images/abanner/bread-thumb.png') }}" alt="img" class="mimg">
                    <img src="{{ asset('images/abanner/bread-child.png') }}" alt="img" class="bread-child">
                    <img src="{{ asset('images/abanner/bread-cat.png') }}" alt="img" class="bread-cat">
                </div> --}}
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto mb lg:px-0">
            <div class="bg-white p-6 lg:p-10 rounded-lg">
                <h2 class="text-teal-500 text-2xl md:text-3xl font-semibold mb-4">Extracurricular Clubs and Programs</h2>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    At our school, clubs and extracurricular programs are an essential part of holistic development. We
                    believe that learning extends beyond the classroom and includes exploring talents, developing interests,
                    and building character.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our mission is to offer a diverse range of clubs and programs that cater to the unique interests and
                    talents of every student. From sports teams to art clubs, debate teams, and STEM programs, our offerings
                    are designed to foster personal growth, teamwork, leadership, and creativity.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Whether it's learning a new instrument, honing public speaking skills, or participating in community
                    service, our clubs provide a platform for students to explore new horizons and develop lifelong skills.
                    Joining a club not only enhances academic performance but also instills values of responsibility,
                    communication, and resilience.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Over the years, students have excelled in a variety of activities. Our debate team has participated in
                    national-level competitions, and our sports teams consistently perform well in regional tournaments. The
                    coding club has also produced some of the brightest young minds in the tech world, with many members
                    achieving recognition at tech fairs and hackathons.
                </p>
                <p class="text-gray-700 text-sm md:text-base">
                    We invite every student to be part of these vibrant programs and discover their potential outside of
                    academics. Our clubs are driven by passion, creativity, and a commitment to fostering a well-rounded
                    educational experience. Explore your interests, connect with like-minded peers, and build skills that
                    will last a lifetime.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8 grid items-center grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column: List of Benefits -->
            <div class="space-y-4">
                <ul class="list-none space-y-3 leading-10">
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Taekwodo</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Swimming</span>
                    </li>

                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Archery</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Skating</span>
                    </li>
                    {{-- <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800"></span>
                    </li> --}}
                </ul>
            </div>
        </div>

        <hr>
    </section>
    {{-- Image gallery --}}

    {{-- <div class="grid grid-cols-2 mt-9 container md:grid-cols-3 gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
        </div>
    </div> --}}
@endsection
