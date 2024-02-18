<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour platform</title>
    <link rel="website icon" type="png" href="{{ asset('assets_front/images/arena.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/tour-platform.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
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
                            <a class="navbar-brand" href="{{ route('/') }}">
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
                                            <li><a class="dropdown-item" href="review.html">Our Reviews</a></li>
                                            <li><a class="dropdown-item" href="{{ route('partner') }}">Partner With
                                                    Us</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('marketplace') }}">Marketplace</a></li>
                                            <li><a class="dropdown-item" href="support.html">Support</a></li>
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

        <div class="d-flex justify-content-between header-content text-center">
            <div>
                <h1>
                    {{ $platform->title }}
                </h1>
                <h2>{{ $platform->subtitle }}</h2>
                <p class="mx-auto">
                    {{ $platform->desc }}
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">Arena</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $platform->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row header-img">
            <div class="col-xl-12">
                <img src="{{ asset($platform->img) }}" style="width: 100%;">
            </div>
        </div>
    </header>

    <section class="tour-platform mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <img src="{{ asset('assets_front/images/prt1.jpg') }}" style="width: 100%;">
                </div>
                <div class="category col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        tour platform
                    </h3>
                    <ul>
                        <div class="d-flex justify-content-between">
                            <li>
                                <a>
                                    <span class="num">01</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">02</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>
                                <a>
                                    <span class="num">03</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">04</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>
                                <a>
                                    <span class="num">05</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">06</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>
                                <a>
                                    <span class="num">07</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">08</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>
                                <a>
                                    <span class="num">09</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">10</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>
                                <a>
                                    <span class="num">11</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">12</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <div class="d-flex justify-content-between">

                            <li>
                                <a>
                                    <span class="num">13</span> Marketing team
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="num">14</span> Marketing team
                                </a>
                            </li>
                        </div>
                        <li>
                            <a>
                                <span class="num">15</span> Marketing team
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h2>
                    Industry specific marketing programs and talent to help you...
                </h2>
            </div>

            @foreach ($details as $key => $detail)
                @if ($key % 2 == 0)
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto">
                            <h3>
                                {{ $detail->title }}
                            </h3>
                            <p>
                                {{ $detail->desc }}
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto">
                            <img src="{{ asset($detail->img) }}" style="width: 100%;">
                        </div>
                    </div>
                @else
                    <div class="row justify-content-between mt-5">
                        <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto">
                            <img src="{{ asset($detail->img) }}" style="width: 100%;">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 my-auto">
                            <h3 style="margin-left: 3.7rem;">
                                {{ $detail->title }}
                            </h3>
                            <p class="mx-auto">
                                {{ $detail->desc }}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <section class="more-details mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h2>
                    Here’s a list of things your team continually does to provide you maximum value
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="card-">
                        <div class="img-card">
                            <img src="{{ asset('assets_front/images/prt1.jpg') }}" style="width: 100%;"
                                class="rounded-3">
                        </div>
                        <h4>
                            Positive Attitude
                        </h4>
                        <p>
                            Attitude is about how we choose to look at every situation. It's about finding the wins in
                            the failures, the joy in the process and the happiness in the work
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="card-">
                        <div class="img-card">
                            <img src="{{ asset('assets_front/images/prt1.jpg') }}" style="width: 100%;"
                                class="rounded-3">
                        </div>
                        <h4>
                            Hard Work
                        </h4>
                        <p>
                            You can always count on your team to work their hardest. Effort is a key pillar of our
                            success, and we'll put that to work for you
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="card-">
                        <div class="img-card">
                            <img src="{{ asset('assets_front/images/prt1.jpg') }}" style="width: 100%;"
                                class="rounded-3">
                        </div>
                        <h4>
                            Top-Tier Performance
                        </h4>
                        <p>
                            With a positive attitude and focused effort, marketing performance is sure to shine through.
                            Your team is dedicated to helping your small business grow
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reasons mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <h2>
                6 reasons why you need Arena
            </h2>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        <span class="circle">
                            01
                        </span>
                        Creative Analysis
                    </h3>
                    <p>
                        Creative analysis is important. It is common for marketers to measure campaign performance at a
                        superficial level. But to fully understand it,
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        <span class="circle">
                            02
                        </span>
                        Creative Analysis
                    </h3>
                    <p>
                        Creative analysis is important. It is common for marketers to measure campaign performance at a
                        superficial level. But to fully understand it,
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        <span class="circle">
                            03
                        </span>
                        Creative Analysis
                    </h3>
                    <p>
                        Creative analysis is important. It is common for marketers to measure campaign performance at a
                        superficial level. But to fully understand it,
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        <span class="circle">
                            04
                        </span>
                        Creative Analysis
                    </h3>
                    <p>
                        Creative analysis is important. It is common for marketers to measure campaign performance at a
                        superficial level. But to fully understand it,
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        <span class="circle">
                            05
                        </span>
                        Creative Analysis
                    </h3>
                    <p>
                        Creative analysis is important. It is common for marketers to measure campaign performance at a
                        superficial level. But to fully understand it,
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <h3>
                        <span class="circle">
                            06
                        </span>
                        Creative Analysis
                    </h3>
                    <p>
                        Creative analysis is important. It is common for marketers to measure campaign performance at a
                        superficial level. But to fully understand it,
                    </p>
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
