@extends('layouts.app')
@section('content')
    <section class=" relative h-96 mt-0 p-32 flex items-center justify-center flex-col bg-indigo-700 text-white ">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="text-white mb-lg-4 mb-md-3 mb-2">
                        Sports
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
                            Sports
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
                <h2 class="text-teal-500 text-2xl md:text-3xl font-semibold mb-4">Our Physical Education and Sports </h2>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    At our school, we believe that physical education and sports play an essential role in a student's
                    overall development. Our sports are designed to promote fitness, teamwork, and leadership while
                    helping students discover their athletic potential.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    We offer a wide range of sports activities, including soccer, basketball, volleyball, track and field,
                    swimming, and more. These are open to students of all skill levels, from beginners to advanced
                    athletes, ensuring that everyone has the opportunity to participate and grow.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our dedicated coaching staff works closely with students to develop their skills, build self-confidence,
                    and foster a love for physical activity. In addition to regular physical education classes, we also host
                    competitive sports events, inter-school tournaments, and after-school clubs for students who wish to
                    take their athletic interests further.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Recently, we have made significant investments in upgrading our sports facilities, including the
                    construction of a new gymnasium and the installation of state-of-the-art equipment for our fitness
                    . We are committed to providing our students with the best environment to pursue their athletic
                    passions.
                </p>
                <p class="text-gray-700 text-sm md:text-base">
                    Whether students are aiming for fitness, competition, or simply the joy of playing a sport, we offer a
                    supportive and challenging environment that encourages them to excel both on and off the field. Join us
                    in fostering a healthy and active lifestyle for our students!
                </p>
            </div>
        </div>
        <div class="container mx-auto px-4 py-8 grid items-center grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column: List of Benefits -->
            <div class="space-y-4">
                <ul class="list-none space-y-3 leading-10">
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Improved physical fitness and health through regular activity.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Development of teamwork and collaboration skills on and off the
                            field.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Enhanced leadership qualities through captaincy and team roles.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Boost in self-confidence and discipline through consistent
                            practice.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Learning to handle both victory and defeat with sportsmanship.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Fostering friendships and building a sense of community within
                            teams.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Enhancing strategic thinking and problem-solving during games.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Improved communication skills through team discussions and
                            collaboration.</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="text-indigo-500"><i class="fas fa-check"></i></span>
                        <span class="text-gray-800">Increased resilience and perseverance when facing challenges.</span>
                    </li>
                </ul>

            </div>

            <!-- Right Column: Sports Illustration -->
            <div class="flex justify-center items-center">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="892.34963" height="579.10966"
                    viewBox="0 0 892.34963 579.10966" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>fitness_stats</title>
                    <path
                        d="M837.481,708.97279l46.45777-69.08737-46.36275,76.51984.09695,7.77406q-5.08741.03879-10.076-.16943l2.3042-99.93046-.06313-.77093.085-.149.22054-9.44283-50.87674-73.8671,50.81671,66.79969.18034,1.99592,1.74041-75.50137-43.9438-76.58326,44.06895,63.31984-.46-156.41937.001-.52062.015.512L834.60258,486.732l40.04952-50.07621-39.91841,60.69646.87411,67.53422,36.85379-65.91084-36.71835,75.83953.48658,37.55243,53.59536-91.813L836.39275,625.468Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path
                        d="M993.83068,711.14892l46.45777-69.08736-46.36276,76.51983.09695,7.77406q-5.0874.03879-10.076-.16943l2.3042-99.93046-.06313-.77093.085-.149.22054-9.44282-50.87674-73.86711,50.81671,66.79969.18033,1.99592L988.354,535.32l-43.94379-76.58326,44.06894,63.31984-.46-156.41937.001-.52062.01495.512,2.91709,123.27952,40.04952-50.07621-39.9184,60.69646.8741,67.53422,36.85379-65.91084-36.71834,75.83953.48658,37.55243,53.59536-91.813L992.74239,627.64414Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <rect x="92" width="278.00787" height="376.03942" fill="#e6e6e6" />
                    <rect x="101.79647" y="13.25091" width="258.41494" height="349.5376" fill="#fff" />
                    <path
                        d="M480.07005,235.004H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path
                        d="M480.07005,294.63305H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path
                        d="M480.07005,354.26216H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path
                        d="M480.07005,413.89126H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path
                        d="M480.07005,473.52037H290.41637a5.79728,5.79728,0,0,1,0-11.59455H480.07005a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#e6e6e6" />
                    <path
                        d="M446.94277,235.004H289.58819a5.79728,5.79728,0,1,1,0-11.59455H446.94277a5.79728,5.79728,0,0,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M398.08,294.63305H289.58819a5.79727,5.79727,0,1,1,0-11.59455H398.08a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M338.45093,354.26216H289.58819a5.79728,5.79728,0,1,1,0-11.59455h48.86274a5.79728,5.79728,0,0,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M461.85005,413.89126H289.58819a5.79727,5.79727,0,1,1,0-11.59455H461.85005a5.79727,5.79727,0,0,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M423.75367,473.52037H289.58819a5.79728,5.79728,0,1,1,0-11.59455H423.75367a5.79728,5.79728,0,1,1,0,11.59455Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <rect y="563.74025" width="888" height="2" fill="#3f3d56" />
                    <path
                        d="M659.81305,431.35258s-6.28548-46.0935-16.76127-33.52254,0,31.42738,0,31.42738l8.38063,10.47579,8.38064-6.28547Z"
                        transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path
                        d="M684.955,446.01869s-20.95158-23.04675-25.1419-18.85643-16.76127,6.28548-14.66611,14.66611,46.09349,35.6177,46.09349,35.6177Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M684.955,446.01869s-20.95158-23.04675-25.1419-18.85643-16.76127,6.28548-14.66611,14.66611,46.09349,35.6177,46.09349,35.6177Z"
                        transform="translate(-153.82518 -160.44517)" opacity="0.1" />
                    <path
                        d="M804.379,443.92353V460.6848s2.09516,37.71286-10.47579,35.6177S787.61773,462.78,787.61773,462.78l2.09516-18.85643Z"
                        transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path
                        d="M798.09353,565.44274S816.95,594.775,823.23543,596.87012s39.808,20.95159,43.99834,39.808L896.566,674.391l-14.66611,18.85643s-67.04508-71.2354-85.90151-77.52088-37.71286-37.71286-37.71286-37.71286Z"
                        transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path
                        d="M649.33725,517.25409s-39.808,6.28547-33.52254,31.42738,67.04508,77.52088,67.04508,77.52088L684.955,638.7733l23.04675,4.19032,10.47579-10.4758-2.09515-6.28547S691.24043,603.1556,689.14527,594.775s-25.1419-41.90317-35.6177-43.99833l14.66611-8.38064Z"
                        transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path
                        d="M890.28052,674.391s-8.38064-12.57095,4.19031-10.4758,20.95159,4.19032,20.95159,12.571-10.47579,67.04508-23.04675,62.85476-2.09515-23.04675-2.09515-23.04675-6.28548-16.76127-10.4758-18.85643-4.19032-12.57095,0-12.57095S892.37567,678.58132,890.28052,674.391Z"
                        transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                    <path
                        d="M712.192,628.2975s0-10.47579,8.38063,0,12.571,18.85643,4.19032,25.14191S687.05011,674.391,687.05011,674.391s-31.42738,6.28547-27.23706-8.38064c0,0,20.95159-10.47579,20.95159-18.85643s0-23.04674,6.28547-18.85643S712.192,634.583,712.192,628.2975Z"
                        transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                    <path
                        d="M752,471.16059s29.33223,4.19032,27.23707,46.0935c0,0,37.71286,37.71286,27.23706,50.28381s-33.52254,35.6177-41.90317,29.33222S731.04845,542.396,731.04845,542.396s-58.66445,20.95159-69.14024,10.4758-20.95159-35.6177-20.95159-35.6177l52.379-27.23707Z"
                        transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                    <circle cx="516.46366" cy="166.14947" r="25.14191" fill="#9f616a" />
                    <path
                        d="M689.14527,328.6898s14.66611,23.04674,18.85643,25.1419-29.33222,23.04675-29.33222,23.04675,0-27.23707-10.4758-33.52254Z"
                        transform="translate(-153.82518 -160.44517)" fill="#9f616a" />
                    <path
                        d="M691.24043,351.73654s33.52254-10.47579,39.808,6.28548S752,406.21067,749.90488,427.16226s-6.28548,16.76127,0,23.04675,10.47579,2.09516,8.38063,10.47579-4.19032,8.38064-2.09516,12.57095-25.1419,18.85643-48.18865,20.95159L684.955,496.3025s0-37.71286-4.19031-46.09349-12.571-25.14191-12.571-31.42739V402.15078a63.6067,63.6067,0,0,1,8.38063-31.55779v0S689.14527,351.73654,691.24043,351.73654Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M716.38234,360.11718s77.52087,6.28547,85.90151,27.23706S814.8548,450.209,806.47416,450.209s-18.85643,4.19031-20.95158,0-10.4758-46.0935-12.571-46.0935S708.0017,397.83,708.0017,397.83,680.76464,364.3075,716.38234,360.11718Z"
                        transform="translate(-153.82518 -160.44517)" fill="#6c63ff" />
                    <path
                        d="M669.27866,320.36163s-6.67194-11.59461-15.01174-1.52364-21.907-8.43622-19.82426-12.38526,9.4377.17757,22.04213-3.94283,36.88462-12.51446,40.951,14.86728-5.61826,24.51117-5.61826,24.51117-4.43915-24.26318-8.45126-17.29375l-4.01211,6.96943-3.48019.85654Z"
                        transform="translate(-153.82518 -160.44517)" fill="#2f2e41" />
                </svg>
            </div>
        </div>

        <hr>
    </section>
    {{-- Image gallery --}}
    <h2 class="text-indigo-900 container mt-12 text-2xl md:text-3xl font-semibold mb-4">Our Physical Education and Sports
    </h2>

    <div class="grid grid-cols-2 mt-9 container md:grid-cols-3 gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
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
    </div>
@endsection
