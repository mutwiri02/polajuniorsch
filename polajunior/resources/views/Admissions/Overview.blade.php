@extends('layouts.app')
@section('content')
    <section class="relative h-96 mt-0 p-32 flex items-center justify-center flex-col bg-indigo-900 text-white">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="text-white mb-lg-4 mb-md-3 mb-2">
                        Admissions </h1>
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
                            Admissions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto mb lg:px-0">
            <div class="bg-white p-6 lg:p-10 rounded-lg">
                <h2 class="text-teal-500 text-2xl md:text-3xl font-semibold mb-4">Overview</h2>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    The Registrar’s Office at Pola junior academy is your primary point of contact for all admission and
                    student
                    record inquiries. It also acts as a liaison for external communications with embassies, universities,
                    and other institutions regarding student-related matters.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our admissions process ensures that we align the needs of each student with the opportunities offered at
                    Pola junior academy. Whether you’re applying for Kindergarten, Prep, or Secondary School, our admissions
                    procedure is designed to be seamless and thorough.
                </p>

                <h3 class="text-indigo-500 text-xl md:text-2xl font-semibold mb-4">Admission to Prep & Secondary School</h3>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Upon completing the registration process, students applying for the Prep and Secondary Sections will
                    need to take entrance exams. These assessments evaluate the student’s readiness and skills for the
                    academic year ahead.
                </p>

                <h3 class="text-indigo-500 text-xl md:text-2xl font-semibold mb-4">Admission to Kindergarten</h3>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Our Kindergarten provides the foundation for an exciting and enriching educational journey. We are
                    dedicated to fostering your child’s growth and building their confidence as they develop into unique
                    individuals. The curriculum emphasizes creativity, social interaction, and academic readiness.
                </p>

                <h3 class="text-indigo-500 text-xl md:text-2xl font-semibold mb-4">Pola junior academy Admission Checklist
                </h3>
                <ul class="list-disc pl-6 text-gray-700 text-sm md:text-base mb-4">
                    <li>Registration Fee – KShs. 5,000</li>
                    <li>Student Birth certificate</li>
                    <li>Entrance Exam for Prep & junior Secondary applicants</li>
                    <li>Offer of Admission based on available space and assessment results</li>
                </ul>

                <h3 class="text-indigo-500 text-xl md:text-2xl font-semibold mb-4">Offer of Admission</h3>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Admission decisions are made following a comprehensive evaluation of the applicant's abilities and our
                    capacity to support their needs.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    A formal offer of admission will be extended in writing once the student satisfies the entry
                    requirements and if spaces are available. While our academic year typically starts in September, we may
                    consider admissions in January, except for students entering Years 11 and 13.
                </p>

                <h3 class="text-indigo-500 text-xl md:text-2xl font-semibold mb-4">How to Apply</h3>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    To apply for your child’s place at Pola junior academy, please collect the registration forms from the
                    Registrar’s Office. You can also reach out to us for further assistance.
                </p>
                <p class="text-gray-700 text-sm md:text-base mb-4">
                    Dear prospective parent or guardian, if you would like to join the Pola junior academy family, please
                    fill
                    out the form via the link below, and one of our team members will get in touch with you.
                </p>
                <a href="#" class="text-white bg-indigo-500 px-4 py-2 rounded-lg">Enroll Now</a>
            </div>
        </div>
    </section>
@endsection
