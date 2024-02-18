<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena</title>
    <link rel="website icon" type="png" href="{{ asset('assets_front/images/arena.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header-image">
        <!--navbar-->
        <div class="big-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="d-flex justify-content-between w-100 mx-auto">
                        <div class="my-auto">
                            <a class="navbar-brand" href="{{ route('index') }}">
                                <img src="{{ asset('assets_front/images/logo-arena.png') }}" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="my-auto">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            tour platform
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach ($platforms as $key => $platform)
                                                <li><a class="dropdown-item"
                                                        href="{{ route('platforms', $platform->slug) }}">{{ $platform->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('industries') }}">
                                            <span> tour by industry</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            more
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('about-us') }}">About</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('creative-services') }}">Creative
                                                    Services</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('success-stories') }}">Success
                                                    Stories</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('partner') }}">Partner With
                                                    Us</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('marketplace') }}">Marketplace</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact-us') }}">
                                            <span>Contact Us</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('careers') }}">
                                            <span>careers</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-auto">
                            <a href="{{ route('contact-us') }}">
                                <button type="submit" class="btn rounded-0 w-100 button-nav">GET A
                                    QUOTE
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--end navbar-->

        <div class="small-nav mob">
            <nav class="navbar navbar-dark fixed-top" style="background-color: #171717;">
                <div class="container-fluid">
                    <a class="navbar-brand mt-3" href="{{ route('index') }}">
                        <img src="{{ asset('assets_front/images/logo-arena.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                        aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                                <img src="{{ asset('assets_front/images/logo-arena.png') }}" alt="">
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        tour platform
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($platforms as $key => $platform)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('platforms', $platform->slug) }}">{{ $platform->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('industries') }}">
                                        <span> tour by industry</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        more
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('about-us') }}">About</a></li>
                                        <li><a class="dropdown-item" href="{{ route('creative-services') }}">Creative
                                                Services</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('success-stories') }}">Success
                                                Stories</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('partner') }}">Partner With
                                                Us</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('marketplace') }}">Marketplace</a></li>
                                        <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact-us') }}">
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('careers') }}">
                                        <span>careers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        ///
        <div class="d-flex justify-content-between header-content pc">
            <div>
                <button class="btn button rounded-0">
                    OUR ALL SERVICES
                </button>
            </div>
        </div>

        <div class="d-flex justify-content-between header-content-mob mob">
            <div>
                <button class="btn button  rounded-0">
                    OUR ALL SERVICES
                </button>
            </div>
        </div>

        <div class="row pc">
            <div class="col-xl-12">
                <!--
                <img src="{{ asset('assets_front/images/Untitled-1-Recovered.jpg') }}" style="width: 100%;">
            -->
                <video autoplay>
                    <source src="{{ asset('assets_front/images/003.mp4') }}" type="video/mp4" style="width: 100%;">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>

        <div class="row mob">
            <div class="col-xl-12">

                <img src="{{ asset('assets_front/images/Banner-mob.jpg') }}" style="width: 100%;">
            </div>
        </div>
        ///
    </header>

    <section class="our-clients mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <h6 class="text-center">
                    TRUSTED BY
                </h6>
            </div>
            <div class="row justify-content-center">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/18.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/18.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/18.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/18.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/51.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/51.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/51.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/51.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/9.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/9.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/9.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div>
                                        <div class="mx-auto image-client">
                                            <img src="{{ asset('assets_front/images/9.png') }}" style="width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="services mt-xl-5 mt-lg-5 mt-md-5">
        @foreach ($platforms as $key => $platform)
            <div class="row justify-content-center">
                @if ($key % 2 == 0)
                    <div class="col-xl-5 col-lg-5 col-md-5 my-auto">
                        <h3 class="mx-auto">
                            {{ $platform->title }}
                        </h3>
                        <p class="mx-auto">
                            $platform->subtitle
                        </p>
                        <div class="button-arrow">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('assets_front/images/arrow.png') }}">
                                <p>read more</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class=" image-container">
                            <img src="{{ asset($platform->img) }}">
                            <div class="overlay"></div>
                            <div class="overlay2"></div>
                            <a href="#">
                                <div class="circle-button">
                                    <p>DETAILS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class=" image-container">
                            <img src="{{ asset($platform->img) }}">
                            <div class="overlay"></div>
                            <div class="overlay2"></div>
                            <a href="#">
                                <div class="circle-button">
                                    <p>DETAILS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 my-auto">
                        <h3 class="mx-auto">
                            {{ $platform->title }}
                        </h3>
                        <p class="mx-auto">
                            $platform->subtitle
                        </p>
                        <div class="button-arrow">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('assets_front/images/arrow.png') }}">
                                <p>read more</p>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </section>

    <section class="icons mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <i class="fa-solid fa-hand-sparkles" style="font-size: 65px; color: #F79421;"></i>
                    <h3>10+</h3>
                    <p>years of experience</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <i class="fa-solid fa-people-group" style="font-size: 65px; color: #F79421;"></i>
                    <h3>50+</h3>
                    <p>trusted clients</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <i class="fa-regular fa-calendar-check" style="font-size: 65px; color: #F79421;"></i>
                    <h3>300+</h3>
                    <p>events</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <i class="fa-solid fa-trophy" style="font-size: 65px; color: #F79421;"></i>
                    <h3>200+</h3>
                    <p>acheievement</p>
                </div>
            </div>
        </div>
    </section>

    <section class="back-layer">
        <div class="row justify-content-center">
            <div>
                <a href="#" class="text-decoration-none">
                    <div class="circle-button-back-layer">
                        <p>ABOUT</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="projects mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto">
                    <h3>our Latest projects</h3>
                    <h2>OUR SUCCESSFUL
                        COMPLETE PROJECT
                    </h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto">
                    <p>
                        Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor Rorem ipsum dolor sit
                        ametconsectetur adipiscing eli.Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor
                        Rorem.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="services mt-xl-5 mt-lg-5 mt-md-5">
        @foreach ($projects as $key => $project)
            <div class="row justify-content-center">
                @if ($key % 2 == 0)
                    <div class="col-xl-5 col-lg-5 col-md-5 my-auto">
                        <h3 class="mx-auto">
                            {{ $project->title }}
                        </h3>
                        <p class="mx-auto">
                            $project->subtitle
                        </p>
                        <div class="button-arrow">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('assets_front/images/arrow.png') }}">
                                <p>read more</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class=" image-container">
                            <img src="{{ asset($project->img) }}">
                            <div class="overlay"></div>
                            <div class="overlay2"></div>
                            <a href="#">
                                <div class="circle-button">
                                    <p>DETAILS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class=" image-container">
                            <img src="{{ asset($project->img) }}">
                            <div class="overlay"></div>
                            <div class="overlay2"></div>
                            <a href="#">
                                <div class="circle-button">
                                    <p>DETAILS</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 my-auto">
                        <h3 class="mx-auto">
                            {{ $project->title }}
                        </h3>
                        <p class="mx-auto">
                            $project->subtitle
                        </p>
                        <div class="button-arrow">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('assets_front/images/arrow.png') }}">
                                <p>read more</p>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </section>

    <section class="client-say">
        <div class="container text-sm-center">
            <h6>
                what our clients say
            </h6>
            <div class="row justify-content-center">
                <div id="carouselExampleAutoplaying" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-7 col-md-7 mx-auto">
                                    <p>
                                        “Our office is something we are pleased with. We consider it the little magnet;
                                        it is wanting to come here and afterward difficult to leave it. Our office is
                                        additionally a big name.”
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-7 col-md-7 mx-auto">
                                    <p>
                                        “Our office is something we are pleased with. We consider it the little magnet;
                                        it is wanting to come here and afterward difficult to leave it. Our office is
                                        additionally a big name.”
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-7 col-md-7 mx-auto">
                                    <p>
                                        “Our office is something we are pleased with. We consider it the little magnet;
                                        it is wanting to come here and afterward difficult to leave it. Our office is
                                        additionally a big name.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <img src="{{ asset('assets_front/images/prev2.png') }}">
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                            <img src="{{ asset('assets_front/images/next2.png') }}">
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-9 col-lg-9 col-md-9 my-auto mx-auto">
                    <h3>BLOG & NEWS</h3>
                    <h2>READ BLOG AND
                        ARTICLE
                    </h2>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 my-auto mx-auto">
                    <button class="prev">
                        <img src="{{ asset('assets_front/images/prev2.png') }}">
                    </button>
                    <button class="next">
                        <img src="{{ asset('assets_front/images/next2.png') }}">
                    </button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="gallery">
                    <div class="multi-image-slider-container">
                        <div class="multi-image-slider">
                            <div class="slide">
                                <div class="blog-card">
                                    <div class="img-card">
                                        <img src="{{ asset('assets_front/images/prt1.jpg') }}" style="width: 100%;"
                                            class="rounded-3" alt="Slide 1">
                                    </div>
                                    <a class="btn button-card w-25" href="#" role="button">Tutorials</a>
                                    <h4>
                                        How to add a count up animation the webflow site.
                                    </h4>
                                    <p>
                                        Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor ert ten Rorem ipsum
                                        dolor sit ametconsectetur adipiscing eli.Rorem
                                    </p>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="blog-card">
                                    <div class="img-card">
                                        <img src="{{ asset('assets_front/images/prt2.jpg') }}" style="width: 100%;"
                                            class="rounded-3" alt="Slide 1">
                                    </div>
                                    <a class="btn button-card w-25" href="#" role="button">Tutorials</a>
                                    <h4>
                                        How to add a count up animation the webflow site.
                                    </h4>
                                    <p>
                                        Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor ert ten Rorem ipsum
                                        dolor sit ametconsectetur adipiscing eli.Rorem
                                    </p>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="blog-card">
                                    <div class="img-card">
                                        <img src="{{ asset('assets_front/images/prt3.jpg') }}" style="width: 100%;"
                                            class="rounded-3" alt="Slide 1">
                                    </div>
                                    <a class="btn button-card w-25" href="#" role="button">Tutorials</a>
                                    <h4>
                                        How to add a count up animation the webflow site.
                                    </h4>
                                    <p>
                                        Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor ert ten Rorem ipsum
                                        dolor sit ametconsectetur adipiscing eli.Rorem
                                    </p>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="blog-card">
                                    <div class="img-card">
                                        <img src="{{ asset('assets_front/images/prt1.jpg') }}" style="width: 100%;"
                                            class="rounded-3" alt="Slide 1">
                                    </div>
                                    <a class="btn button-card w-25" href="#" role="button">Tutorials</a>
                                    <h4>
                                        How to add a count up animation the webflow site.
                                    </h4>
                                    <p>
                                        Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor ert ten Rorem ipsum
                                        dolor sit ametconsectetur adipiscing eli.Rorem
                                    </p>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="blog-card">
                                    <div class="img-card">
                                        <img src="{{ asset('assets_front/images/prt2.jpg') }}" style="width: 100%;"
                                            class="rounded-3" alt="Slide 1">
                                    </div>
                                    <a class="btn button-card w-25" href="#" role="button">Tutorials</a>
                                    <h4>
                                        How to add a count up animation the webflow site.
                                    </h4>
                                    <p>
                                        Rorem ipsum dolor sit ametconsectetur adipiscing elit,tempor ert ten Rorem ipsum
                                        dolor sit ametconsectetur adipiscing eli.Rorem
                                    </p>
                                </div>
                            </div>
                            <!-- Add more slides as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ctaTitle mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <h2>
                        Get everything you need to
                        <span style="color: #F79421;">manage and grow</span>
                        your business.
                    </h2>
                    <a class="btn button-" href="#" role="button">Plans & pricing</a><br>
                    <small style="font-style: italic; color: #fff; font-weight: bold;">Plus, get a free trial. No
                        credit
                        card required.</small>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="me-3">
                            <span><i class="fa-solid fa-star" style="color: #F79421;"></i></span>
                            <span><i class="fa-solid fa-star" style="color: #F79421;"></i></span>
                            <span><i class="fa-solid fa-star" style="color: #F79421;"></i></span>
                            <span><i class="fa-solid fa-star" style="color: #F79421;"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke" style="color: #F79421;"></i></span>
                        </div>
                        <div>
                            <span style="color: #fff;">3,500+ Reviews</span>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <div class="me-4">
                            <img src="{{ asset('assets_front/images/capterra.png') }}" alt="">
                        </div>
                        <div class="me-4">
                            <img src="{{ asset('assets_front/images/getapp.png') }}" alt="">
                        </div>
                        <div class="me-4">
                            <img src="{{ asset('assets_front/images/software-advice.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('assets_front/images/top-rated-local.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-touch mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <h2>
                    get in touch
                    <i class="fa-solid fa-arrow-up-right-dots" style="color: #F79421!important;"></i>
                </h2>
            </div>
        </div>
    </section>

    <footer class="mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center mb-xl-3 mb-lg-3 mb-md-3 p-xl-4 p-lg-4 p-md-4">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <a class="navbar-brand logo mb-3" href="{{ route('index') }}">
                        <img src="{{ asset('assets_front/images/logo-arena.png') }}" alt="logo">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mob-view">
                    <ul class="mb-4">
                        <li>
                            <span>
                                OUR LOCATION
                            </span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                Saudi Arabia
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                Jorden
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                UAE
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                Canada
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                Egypt
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mob-view">
                    <ul class="mb-4">
                        <li>
                            <span>
                                CONTACT INFO
                            </span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                23 B, EL Mansour St, Maadi
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                info@arenahere.com
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                +0233044266
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mob-view">
                    <ul class="mb-4">
                        <li>
                            <span>
                                NEWSLATTER
                            </span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                contact us
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                about us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="color: #7d7d7d;">
            <div class="row justify-content-center p-3">
                <div class="col-xl-9 small-footer">
                    <small style="color: #7d7d7d; font-weight: bold;">© 2024 All Right Recived - Arena</small>
                </div>
                <div class="col-xl-3">
                    <div class="d-flex justify-content-center">
                        <div class="icon">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!--button-Up-->
    <div class="button-up shadow-lg">
        <span class="up">
            <i class="fa-solid fa-chevron-up"></i>
        </span>
    </div>

    <!-- script tags -->
    <script src="{{ asset('assets_front/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets_front/js/index.js') }}"></script>
</body>

</html>