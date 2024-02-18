<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our partner</title>
    <link rel="website icon" type="png" href="{{ asset('assets_front/images/arena.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/css/partner.css') }}">
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
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Marketing
                                                    Team</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Websites</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Ecommerce</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Payments</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Point of
                                                    Sale</a></li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">CRM</a></li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Forms</a></li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Email
                                                    Marketing</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Listings</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Reputation</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Social</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Content</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Ads</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('platforms') }}">Intelligence</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('platforms') }}">Mobile App</a>
                                            </li>
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

        <div class="d-flex justify-content-between header-content">
            <div>
                <h1>
                    our partner
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Arena</a></li>
                        <li class="breadcrumb-item active" aria-current="page">our partner</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row header-img">
            <div class="col-xl-12">
                <img src="{{ asset('assets_front/images/bread-bg.png') }}" style="width: 100%;">
            </div>
        </div>
    </header>

    <section class="partner mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <img src="{{ asset('assets_front/images/partner-hero.png') }}" style="width: 100%;">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 my-auto">
                    <h3>
                        Offer your customers, clients, or network an all-in-one platform
                    </h3>
                    <p>
                        Offer Arena the #1 marketing platform® for small business, to the businesses you serve
                        so they can better manage and grow their business from one platform—branded as your own.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="who-partner mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <h3 class="text-center">who we partner</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5 box">
                    <img src="{{ asset('assets_front/images/referral@2x.png') }}" style="width: 50px; height: 50px;">
                    <h3>Referral Partners</h3>
                    <p>
                        Refer your network to Arena and earn ongoing commissions. You focus on your expertise
                        while we provide added value by focusing on the areas you don't.
                    </p>
                </div>
                <div class="col-xl-5 col-lg-5 box">
                    <img src="{{ asset('assets_front/images/agency@2x.png') }}" style="width: 50px; height: 50px;">
                    <h3>Agency Partners</h3>
                    <p>
                        Leverage and brand our best-in-breed software platform at a discounted rate to fulfill the
                        marketing needs of your clients. We’ll support you while you work directly with your clients.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-program mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <h2 class="text-center">
                    Arena Partner Program benefits
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 box">
                    <img src="">
                    <h3>Web Development</h3>
                    <p>
                        Web development is the work involved in developing
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 box">
                    <img src="">
                    <h3>Web Development</h3>
                    <p>
                        Web development is the work involved in developing
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 box">
                    <img src="">
                    <h3>Web Development</h3>
                    <p>
                        Web development is the work involved in developing
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-xl-3 col-lg-3 box">
                    <img src="">
                    <h3>Web Development</h3>
                    <p>
                        Web development is the work involved in developing
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 box">
                    <img src="">
                    <h3>Web Development</h3>
                    <p>
                        Web development is the work involved in developing
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 box">
                    <img src="">
                    <h3>Web Development</h3>
                    <p>
                        Web development is the work involved in developing
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="partner mt-xl-5 mt-lg-5 mt-md-5 p-5" style="background-color: rgb(23, 23, 23);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 my-auto">
                    <h3>
                        Offer your customers, clients, or network an all-in-one platform
                    </h3>
                    <p>
                        Offer Arena the #1 marketing platform® for small business, to the businesses you serve
                        so they can better manage and grow their business from one platform—branded as your own.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <img src="{{ asset('assets_front/images/partner-hero.png') }}" style="width: 100%;">
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
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('assets_front/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets_front/js/index.js') }}"></script>
    <script src="{{ asset('assets_front/js/contact-us.js') }}"></script>
</body>

</html>
