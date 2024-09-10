@extends('layouts.app')
@section('content')
    <section class="relative h-96 mt-0 p-32 flex items-center justify-center flex-col bg-yellow-900 text-white ">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="text-white mb-lg-4 mb-md-3 mb-2">
                        Facilities </h1>
                    <ul class="bread-list d-flex align-items-center gap-lg-4 gap-md-3 gap-2">
                        <li>
                            <a class="text-white font-medium decoration-white " href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Facilities </li>
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
                <h2 class="text-teal-500 text-2xl md:text-3xl font-semibold mb-4">Our School Facilities</h2>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our school boasts state-of-the-art facilities designed to support both academic and extracurricular
                    excellence. From modern classrooms to advanced sports and recreation areas, we are committed to creating
                    an environment that fosters learning, growth, and well-being.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    The facilities at our school are tailored to provide students with access to everything they need to
                    excel academically, physically, and socially. Our school library, science labs, computer rooms, and arts
                    studios are fully equipped with the latest resources and technology to enhance the learning experience.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our classrooms are designed with both comfort and functionality in mind, incorporating modern technology
                    like interactive smart boards and high-speed internet. Additionally, the open spaces in the school offer
                    a relaxed environment for outdoor learning and extracurricular activities.
                </p>

                <p class="text-gray-700 text-sm md:text-base">
                    We are continuously improving our facilities to meet the evolving needs of our students and staff. Our
                    commitment to maintaining a world-class infrastructure is unwavering, and we believe that it plays a key
                    role in our students' overall success and well-being.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8 grid items-center grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column: List of Facilities -->
            <div class="space-y-4">
                <ul class="list-none space-y-3 leading-10">
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Library with digital resources</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Science and computer laboratories</span>
                    </li>


                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Skating rink and taekwondo training areas</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr>
    </section>

    {{-- Image gallery (can be included later if needed) --}}
@endsection
