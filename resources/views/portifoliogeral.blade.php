<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    @if(isset($portifolios))
    @if(count($portifolios) > 1)
    @include('components.headmetatags',[ 'arg_object' => $portifolios ])
    @endif
    @endif

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link rel="stylesheet" href="{{asset("/assets/css/plugins.css")}}" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
    <style>
        .m-auto-m-top-1-5em {
            margin: auto;
            margin-top: 1.5em;
        }

        .left-column-descricao {
            float: left;
            width: 48%;
            margin-right: 4%;
        }

        .right-column-descricao {
            float: left;
            width: 48%;
        }

    </style>
</head>

<body class="v-dark dsn-ajax">

    @include('components.preloader')

    <svg width="0" height="0" class="p-absolute hidden">
        <defs>
            <filter id="buttonFilter">
                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur">
                </feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="buttonFilter"></feColorMatrix>
                <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop">
                </feComposite>
                <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
            </filter>
        </defs>
    </svg>

    <main id="main_root" class="main-root">

        <!-- ========== Menu ========== -->
        @include('components.sitemenu',['menuWorks'=>$menuWorks])
        <!-- ========== End Menu ========== -->

        <div id="dsn-scrollbar">

            <!-- ========== Header ========== -->
            <header class="header-page v-dark-head dsn-header-animation pb-80 pt-section p-relative">

                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                    <img class="cover-bg-img" src="assets/img/bg.svg" alt="">
                </div>

                <div class="p-relative container dsn-hero-parallax-title h-100">
                    <div class="p-relative d-flex align-items-center w-100  h-100 ">

                        <div class="box-content z-index-1">

                            <h1 class="title-lg text-upper">{{ $portifolioGeral->title ? $portifolioGeral->title : 'title' }}</h1>

                            @if(isset($portifolioGeral->column1))
                            <div class="contact-links w-50 mt-20 left-column-descricao w-100-when-mobile">
                                <p>{{ $portifolioGeral->column1 ? $portifolioGeral->column1 : 'column1' }}</p>
                            </div>
                            <div class="contact-links w-50 mt-20 right-column-descricao w-100-when-mobile">
                                <p>{{ $portifolioGeral->column2 ? $portifolioGeral->column2 : 'column2' }}</p>
                            </div>
                            @else
                            <div class="contact-links w-50 mt-20">
                                <p>{{ $portifolioGeral->description ? $portifolioGeral->description : 'description' }}</p>
                            </div>
                            @endif
                        </div>


                    </div>
                </div>

                <div class="footer-head w-100 p-relative mt-80 z-index-2">
                    <div class="container d-flex justify-content-between">
                        <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">
                        </div>

                        <div class="social-box d-flex align-items-center">

                            <ul class="dsn-socials box-social">
                                @if(isset($index_text->social_url_facebook))
                                <li>
                                    <a href="{{ $index_text->social_url_facebook }}" target="_blank" class="background-main">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                                    </a>
                                </li>
                                @endif
                                @if(isset($index_text->social_url_instagram))
                                <li>
                                    <a href="{{ $index_text->social_url_instagram }}" target="_blank" class="background-main">
                                        <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                                    </a>
                                </li>
                                @endif
                                @if(isset($index_text->social_url_twitter))
                                <li>
                                    <a href="{{ $index_text->social_url_twitter }}" target="_blank" class="background-main">
                                        <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">

                <!-- ========== Portfolio ========== -->
                <div class="our-work p-relative mb-section">
                    <div class="p-relative box-image-parallax dsn-style-cards">
                        <div class="root-posts has-filter">

                            <div class="dsn-filtering z-index-1 p-relative w-100 mb-70 pt-50 pb-50 border-bottom">

                                <div class="container">
                                    <div class="dsn-posts hover-box-item d-grid grid-md-2 dsn-isotope use-filter v-dark-head" data-dsn-gap="30px">

                                        @foreach($portifolios as $id => $portifolio)
                                        <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius brand sports">

                                            <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}portifolio/{{ $portifolio->title }}" class="effect-ajax init-color w-100" data-dsn-ajax="work" data-dsn-text="{{ $portifolio->title }}">
                                                <div class="box-content d-flex ">
                                                    <div class="img-cat w-100">
                                                        <div class="box-image-bg w-100 over-hidden h-350 before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                            <img src="{{ isset($portifolio->img_1) ? asset("../storage/$portifolio->img_1") : asset("/assets/img/portfolio/project1/1.jpg")}}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                        </div>

                                                        <div class="cat background-main d-flex p-absolute top-0 right-0 z-index-1">
                                                            <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                                <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                                </path>
                                                            </svg>
                                                            <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                                <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                                </path>
                                                            </svg>
                                                            @if(isset($portifolio->type_1_1))
                                                            <span class="background-main heading-color hide-portifolio-mobile">{{ $portifolio->type_1_1 }}</span>
                                                            @endif
                                                            @if(isset($portifolio->type_1_2))
                                                            <span class="background-main heading-color hide-portifolio-mobile">{{ $portifolio->type_1_2 }}</span>
                                                            @endif
                                                            <ul class="show-portifolio-mobile">
                                                                @if(isset($portifolio->type_1_1))
                                                                <li class="background-main heading-color">
                                                                    {{ $portifolio->type_1_1 }}
                                                                </li>
                                                                @endif
                                                                @if(isset($portifolio->type_1_2))
                                                                <li class="background-main heading-color">
                                                                    {{ $portifolio->type_1_2 }}
                                                                </li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="post-content p-30 v-dark-head p-relative z-index-1 d-flex flex-column p-absolute w-100 bottom-0">

                                                        <div class="post-info">
                                                            <h2 class="post-title word-wrap d-inline-block title-block">
                                                                {{ $portifolio->title }}
                                                                <!--
                                                        <a href="{ { isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}portifolio/{ { $portifolio->title }}" class="effect-ajax init-color" data-dsn-ajax="work">
                                                        </a>
                                                        -->
                                                            </h2>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </article>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ========== End Portfolio ========== -->

                    <div class="section-margin text-center">
                        <div class="container">
                            <h3 class="title text-upper mb-30">{{ $portifolioGeral->title_1 ? $portifolioGeral->title_1 : 'title_1' }}</h3>

                            <p class="max-w750 text-size-about-us-description">
                                @php
                                if($portifolioGeral->description_1) {
                                echo $portifolioGeral->description_1;
                                } else {
                                echo "description_1";
                                }
                                @endphp
                            </p>

                            <div class="dsn-btn dsn-btn-shape mt-30 d-flex m-auto-m-top-1-5em">

                                <a class="button background-main v-dark effect-ajax background-color-green" href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/contato" : "/eng/contato" : "/pt/contato" }}" data-dsn-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contacte-nos" : "Contact Us" : "Contacte-nos" }}">
                                    <span class="title-btn text-upper p-relative  z-index-1 heading-color" data-animate-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contacte-nos" : "Contact Us" : "Contacte-nos" }}">
                                        <span>{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contacte-nos" : "Contact Us" : "Contacte-nos" }}</span>
                                    </span>
                                </a>

                                <span class="icon background-theme">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>

                            </div>
                        </div>
                    </div>

                    @include('components.footersite',['args'=> $index_text,'contact'=> $contact])

                </div>

            </div>



    </main>
    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->


    <script src="{{ asset("/assets/js/jquery-3.7.1.min.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins.min.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/dsn-grid.min.js") }}"></script>
    <script src="{{ asset("/assets/js/custom.js") }}"></script>
    <script src="{{ asset("/js/jquery.js") }}"></script>
</body>

</html>
