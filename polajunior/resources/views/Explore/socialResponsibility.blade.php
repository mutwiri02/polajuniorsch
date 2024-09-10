@extends('layouts.app')
@section('content')
    <section class=" relative h-96 mt-0 p-32 flex items-center justify-center flex-col bg-indigo-700 text-white ">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="text-white mb-lg-4 mb-md-3 mb-2">
                        Social Responsibility
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
                            Social Responsibility </li>
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
        <div class="container mx-auto  mb lg:px-0">
            <div class="bg-white p-6 lg:p-10 rounded-lg">
                <h2 class="text-teal-500 text-2xl md:text-3xl font-semibold mb-4">Corporate Social Responsibility</h2>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    At our school, social responsibility is more than just a concept—it’s a commitment to making a
                    meaningful
                    difference in the lives of others. We believe that education extends beyond the classroom and into the
                    community, where we strive to cultivate a sense of compassion, empathy, and global citizenship in our
                    students.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our mission is to nurture well-rounded individuals who are not only academically excellent but also
                    socially
                    conscious. We actively engage in various initiatives that reflect our dedication to social
                    responsibility,
                    ensuring that our students understand the importance of giving back and contributing to the welfare of
                    society.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Over the years, we have been involved in numerous projects aimed at improving education and living
                    conditions in underserved areas. From providing scholarships to deserving students, supporting their
                    journey
                    through secondary school, to helping them achieve their dreams of higher education at national
                    universities,
                    our efforts have had a lasting impact on many lives.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    In addition to educational support, we have undertaken various infrastructure projects, including the
                    construction of classrooms, the installation of water supply systems, and the provision of essential
                    learning materials. Our current focus is on enhancing the educational environment at Nonkisitok Primary
                    School in Kajiado County, where we are working on building new classrooms and ensuring access to clean,
                    piped water.
                </p>
                <p class="text-gray-700 text-sm md:text-base">
                    We invite individuals, organizations, and institutions with a shared vision to join us in expanding
                    these
                    efforts. Together, we can create a ripple effect of positive change that aligns with the core values of
                    global citizenship and the United Nations Sustainable Development Goals. By investing in education and
                    community development, we are laying the foundation for a brighter future for all.
                </p>
            </div>
        </div>


        <hr>
    </section>
    {{-- Image gallery --}}

    {{-- <div class="grid grid-cols-2 mt-9 container md:grid-cols-3 gap-4">cd 
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg"
                alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
        </div>
    </div> --}}
@endsection
