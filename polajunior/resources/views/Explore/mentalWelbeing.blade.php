@extends('layouts.app')
@section('content')
    <section class="relative h-96 mt-0 p-32 flex items-center justify-center flex-col bg-indigo-700 text-white">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="text-white mb-lg-4 mb-md-3 mb-2">
                        Mental Wellbeing
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
                            Mental Wellbeing
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto mb lg:px-0">
            <div class="bg-white p-6 lg:p-10 rounded-lg">
                <h2 class="text-teal-500 text-2xl md:text-3xl font-semibold mb-4">Mental Wellbeing Initiatives</h2>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    At our school, mental wellbeing is a core focus, recognizing that a healthy mind is just as important
                    as academic achievement. We are dedicated to providing a nurturing environment that prioritizes the
                    mental and emotional health of both students and staff, ensuring a supportive space where individuals
                    can thrive.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our approach to mental wellbeing involves various programs and initiatives aimed at promoting
                    self-awareness, resilience, and emotional intelligence. Through workshops, counseling sessions, and
                    peer support groups, we empower students with the tools to manage stress, cope with challenges, and
                    foster healthy relationships.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    We believe in proactive care, offering resources and support to those who may be struggling with their
                    mental health. Our professional counseling team is always available to provide guidance and create
                    personalized plans to ensure the emotional well-being of every individual.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    In addition to one-on-one support, we organize mental health awareness campaigns, fostering an open
                    dialogue about the importance of mental health and breaking down the stigma associated with seeking
                    help. By integrating mindfulness practices into the curriculum and promoting balance in academics,
                    extracurricular activities, and personal time, we create a holistic environment for mental growth.
                </p>
                <p class="text-gray-700 text-sm md:text-base">
                    We invite parents, guardians, and community members to engage in our mental wellbeing initiatives,
                    understanding that mental health is a collaborative effort. Together, we can ensure that our students
                    grow into confident, balanced, and emotionally resilient individuals prepared for the complexities of
                    life.
                </p>
            </div>
        </div>

        <div class="flex items-center container justify-center">
            <div class="faq-thumb mr-7">
                <img src="{{ asset('images/student.png') }}" class="mr-7" alt="img">
            </div>

            <div class="col-lg-6 col-md-7">
                <div class="faq-content">
                    <div class="section-title mb-40">
                        <span class="sub-title wow fadeInUp p5-clr">
                            Frequently Asked Questions
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Mental Wellbeing at Our School
                        </h3>
                    </div>
                    <div class="tab-faq faq">
                        <div class="accordion-section d-grid gap-xxl-4 gap-lg-3 gap-2">
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        What mental wellbeing programs do you offer for students?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            We offer a variety of mental wellbeing programs, including mindfulness sessions,
                                            peer support groups,
                                            and access to professional counseling. Our goal is to provide emotional support
                                            and
                                            foster resilience
                                            in our students.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        How can students access counseling services?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            Students can access counseling services by visiting the school counselor’s
                                            office or
                                            booking an appointment online.
                                            We ensure confidentiality and a safe space for students to discuss their
                                            concerns.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        What initiatives are in place to support student mental health?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            We have several initiatives, including mental health awareness weeks, stress
                                            management workshops,
                                            and the integration of emotional learning in the curriculum. Our school
                                            encourages
                                            open conversations
                                            about mental health to reduce stigma.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        How do you ensure a supportive environment for mental wellbeing?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            We focus on creating a positive school culture by promoting respect, empathy,
                                            and
                                            inclusivity.
                                            Our staff is trained to recognize signs of mental distress and offer immediate
                                            support. We
                                            also provide ongoing professional development for teachers to create a holistic
                                            learning environment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
    </section>
@endsection
