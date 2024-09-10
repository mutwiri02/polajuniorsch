<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Chris">
    <meta name="description" content="Pola junior Group of school">
    <!-- ======== Page title ============ -->
    <title>pola junior</title>
    <!-- ========== Stylesheets ========== -->

    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="img/faveicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="css/animate.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="css/nice-select.css">
    {{-- //Tailwind css --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.
    link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/lib.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
        referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--<< Main.css >>-->
    <link rel="stylesheet" href="css/main.css">
    @vite(['resources/css/app.css', 'resources/js/viewport.jquery.js'])
    @vite(['resources/css/animate.css', 'resources/js/jquery-3.7.1.min.js'])
    @vite(['resources/css/all.min.css', 'resources/js/bootstrap.bundle.min.js'])
    @vite(['resources/css/icomoon.css', 'resources/js/jquery.nice-select.min.js'])
    @vite(['resources/css/magnific-popup.css', 'resources/js/jquery.meanmenu.min.js'])
    @vite(['resources/css/swiper-bundle.min.css', 'resources/js/jquery.meanmenu.min.js'])
    @vite(['resources/css/nice-select.css', 'resources/js/swiper-bundle.min.js'])
    @vite(['resources/css/main.css', 'resources/js/jquery.counterup.min.js'])
    @vite(['resources/css/bootstrap.min.css', 'resources/js/jquery.meanmenu.min.js'])
    @vite(['resources/css/bootstrap.min.css', 'resources/js/jquery.magnific-popup.min.js'])
    @vite(['resources/css/bootstrap.min.css', 'resources/js/wow.min.js'])
    @vite(['resources/css/bootstrap.min.css', 'resources/js/main.js'])


    <!--<< All JS Plugins >>-->


</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <span></span>
        <span></span>
        <span class="man-pre">
            <img src="{{ asset('images/logo/logo1.png') }}" class="logo" alt="Logo">
        </span>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="/">
                                <img src="{{ asset('images/logo1.png') }}" alt="Logo">
                            </a>

                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">kitengela |kisaju |mombasa</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@polajunior.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 06am -02pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">(629) 555-0129</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="/contact" class="theme-btn p2-bg text-center">
                                <span>
                                    Get A Quote
                                    <span class="ani-arrow">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Top Section Start -->
    <div class="header-top-section d-lg-block d-none">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>
                        <i class="fal fa-map-marker-alt"></i>
                        (629) 555-0129
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="info@example.com" class="link">info@polajunior.com</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="#" class="link">Kitengela |kisaju <span clas>|mombasa</span></a>
                    </li>
                </ul>
                <div class="social-wrapper d-flex align-items-center">
                    <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                    <a href="#" class="white">
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="#" class="white"><i class="white fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="white"><i class="white fa-brands fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 white-bg">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="/" class="header-logo">
                                <img src="{{ asset('images/logo/logo1.png') }}" class="logo" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="/">
                                                Home
                                            </a>

                                        <li>
                                            <a href="/about">About Us</a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                Academics
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="/Kindergarten">kindergaten</a></li>
                                                <li><a href="/Pre-school">Pre-school</a></li>
                                                <li><a href="/junior">Junior school</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="blog.html">
                                                Explore
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="/social-responsibility">social Responsibility</a></li>
                                                <li><a href="/Mental-wellbeing">Mental wellbeing</a></li>
                                                <li><a href="/sports">Sports</a></li>
                                                <li><a href="/clubs">Clubs and programs</a></li>
                                                <li><a href="/Facilities">Facilities</a></li>

                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Admissions
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="Admissions">Overview</a></li>
                                                <li><a href="/about">Term Dates</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <a href="#0" class="search-trigger search-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>

                        <div class="header-button d-sm-block d-none">
                            <a href="/contact" class="theme-btn p5-bg">
                                <span>
                                    Enroll Today
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




    @yield('content')



    <!--<< Footer Section Start >>-->
    <footer class="footer-section overflow-hidden position-relative footer-style1 white-bg">
        <div class="footer-widgets-wrapper">
            <div class="container">
                <div class="row g-md-4 g-4 justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget">
                            <div class="widget-heads">
                                <a href="index.html" class="footer-logo">
                                    <img class="w-1/2" src="{{ asset('images/logo/logo.png') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p class="pre-pragraph">
                                    Yes, there are many notable ma corporate the a od businesses Informati worldwide
                                </p>
                                <div class="social-wrapper d-flex align-items-center">
                                    <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                                    <a href="#" class="white">
                                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    <a href="#" class="white"><i
                                            class="white fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="white"><i
                                            class="white fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4 class="white">Pages</h4>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="/about">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    {{-- <a href="service.html">
                                        Latest Service
                                    </a> --}}
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Latest Blog And News
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact">
                                        Our Creative Team Member
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4 class="white">Contact Us</h4>
                            </div>
                            <ul class="list-area list-contact">
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span class="lited">
                                        Kitengela ,along Deliverance Road
                                    </span>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="info@polajunior.com" class="link">info@polajunior.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="#" class="link">0721...</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div
                    class="footer-wrapper d-md-flex d-grid gap-md-0 gap-2 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                    <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                        &copy; polajunioracademy
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        | All Rights Reserved
                    </p>
                    <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a href="/contact">
                                Terms & Condition
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" id="scrollUp" class="scroll-icon">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- Element -->
        <img src="{{ asset('images/footer/f-apple.png') }}" alt="img" class="footer-apple position-absolute">
        <img src="{{ asset('images/footer/f-cut.png') }}" alt="img" class="footer-cut position-absolute">
        <!-- Element -->
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/lib.min.js"
        integrity="sha512-RvN+lf9eEJk7fBnvek1rObds6iM+1ISrAYdGOxz7MNa+1NNnudZMfsTQzlNPplOuqTIOK8tOwc8J3ZwAjzPXig=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
