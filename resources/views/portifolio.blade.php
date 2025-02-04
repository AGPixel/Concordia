<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ isset($metaTags->description) ? $metaTags->description : 'Description' }}">
    <meta name="keywords" content="{{ isset($metaTags->keywords) ? $metaTags->keywords : 'Keywords' }}">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($metaTags->title) ? $metaTags->title : 'Concordia' }} - Portifolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link rel="stylesheet" href="{{asset("/assets/css/plugins.css")}}" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
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
            <header class="header-page v-dark-head dsn-header-animation pb-80 p-relative">

                <!--
                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                    <img class="cover-bg-img" src="assets/img/bg.svg" alt="">
                </div>
                -->

                <div class="p-relative container dsn-hero-parallax-title h-100">
                    <div class="p-relative d-flex align-items-center w-100  h-100 ">

                        <div class="box-content z-index-1">

                            <h1 class="title-lg text-upper">
                                {{ $work->title ? $work->title : 'title' }}
                            </h1>

                            <div class="contact-links w-50 mt-20">
                                <p>
                                    {{ $work->description ? $work->description : 'description' }}
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="footer-head w-100 p-relative mt-80 z-index-2">
                    <div class="container d-flex justify-content-between">
                        <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">

                            <a class="button v-dark background-section" href="#">
                                <span class="title-btn text-upper p-relative  z-index-1 heading-color" data-animate-text="Scroll Down">
                                    <span>Scroll Down</span>
                                </span>
                            </a>

                            <span class="icon v-dark background-section">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </span>

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
                <div class="p-relative mb-section">
                    <div class="p-relative box-image-parallax dsn-style-cards">
                        <div class="root-posts has-filter">

                            <!--
                            <div class="dsn-filtering z-index-1 p-relative w-100 mb-70 pt-50 pb-50 border-bottom">
                                <div class="filtering-t w-100">
                                    <div class="filtering-wrap w-100">
                                        <div class="filtering w-100">
                                            <div class="container">
                                                <button class="active" data-filter="*" type="button">
                                                    All
                                                </button>
                                                <button type="button" class="dsn-filter-category-production" data-filter=".brand , .category-brand">
                                                    Brand
                                                </button>
                                                <button type="button" class="dsn-filter-category-photography" data-filter=".photography , .category-photography">
                                                    Photography
                                                </button>
                                                <button type="button" class="sm-title-block dsn-filter-category-creative" data-filter=".sports , .category-sports">Sports
                                                </button>
                                                <button type="button" class="sm-title-block dsn-filter-category-creative" data-filter=".fashion , .category-fashion">Fashion
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->

                            <div class="container">
                                <div class="dsn-posts dsn-post-type-cards box-image-normal d-grid grid-md-2 dsn-isotope use-filter v-dark-head" data-dsn-gap="30px">
                                    @if(isset($work->img_1) && isset($work->type_1) && isset($work->title_1))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_1") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_1 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_1 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                    @if(isset($work->img_2) && isset($work->type_2) && isset($work->title_2))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_2") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_2 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_2 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                    @if(isset($work->img_3) && isset($work->type_3) && isset($work->title_3))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_3") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_3 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_3 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                    @if(isset($work->img_4) && isset($work->type_4) && isset($work->title_4))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_4") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_4 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_4 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                    @if(isset($work->img_5) && isset($work->type_5) && isset($work->title_5))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_5") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_5 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_5 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                    @if(isset($work->img_6) && isset($work->type_6) && isset($work->title_6))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_6") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_6 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_6 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                    @if(isset($work->img_7) && isset($work->type_7) && isset($work->title_7))
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">
                                        <div class="box-content">
                                            <div class="w-100">
                                                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative" data-overlay="7">
                                                    <img src="{{ asset("../storage/$work->img_7") }}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content background-section z-index-1 d-flex flex-column">
                                                <div class="post-info d-flex justify-content-between align-items-center p-20">
                                                    <div class="cat d-flex p-0">
                                                        <span class="background-main heading-color">{{ $work->type_7 }}</span>
                                                    </div>
                                                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">{{ $work->title_7 }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ========== End Portfolio ========== -->

                <section class="next-page background-section pt-section pb-50">
                    <div class="container">
                        <div class="tob-box d-flex justify-content-between align-items-end border-bottom pb-50 mb-50">
                            <h2 class="title text-upper">time to <br> roar! </h2>

                            <div class="dsn-btn dsn-btn-shape d-flex">

                                <a class="button background-main v-light" href="#">
                                    <span class="title-btn p-relative  z-index-1 heading-color" data-animate-text="Let's talk!">
                                        <span>Let's talk!</span>
                                    </span>
                                </a>

                                <span class="icon background-main v-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>

                            </div>
                        </div>
                    </div>

                    <div class="container over-hidden">
                        <div class="bottom-box ">
                            <div class="d-grid grid-md-3">
                                <div class="info-item">
                                    <h6 class="mb-10">Email Address</h6>
                                    <a class="text-upper" href="#">{{ $contact->footer_email ? $contact->footer_email : 'footer_email'}}</a>
                                </div>

                                <div class="info-item">
                                    <h6 class="mb-10">Call Info</h6>
                                    <a class="text-upper" href="#">{{ $contact->footer_call ? $contact->footer_call : 'footer_call'}}</a>
                                </div>

                                <div class="info-item">
                                    <h6 class="mb-10">Skype</h6>
                                    <a class="text-upper" href="#">{{ $contact->footer_skype ? $contact->footer_skype : 'footer_skype'}}</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        @include('components.sitefooter')
                    </div>
                </section>

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
</body>

</html>
