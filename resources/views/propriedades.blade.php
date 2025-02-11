<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ isset($metaTags->description) ? $metaTags->description : 'Description' }}">
    <meta name="keywords" content="{{ isset($metaTags->keywords) ? $metaTags->keywords : 'Keywords' }}">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($metaTags->title) ? $metaTags->title : 'Concordia' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" />
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
            <header class="header-page v-dark-head dsn-header-animation pb-60 pt-section p-relative">
            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">

                <!-- ========== Portfolio ========== -->
                <div class="p-relative work-massonary-grid mb-section">
                    <div class="p-relative">
                        <div class="root-posts has-filter">

                            <div class="dsn-container">
                                <div class="dsn-posts hover-box-item d-grid grid-lg-3 dsn-isotope use-filter" data-dsn-gap="30px">

                                    <article class="dsn-item-post grid-item over-hidden p-relative brand fashion">

                                        <div class="box-image-bg has-border-radius w-100 h-v-70 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2021</span>
                                            </div>
                                            <img src="assets/img/portfolio/project1/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">UX / UI
                                                            Design</span>
                                                        <span class="background-section heading-color">Architecture</span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">Binge x <br> The Iconic <span class="fw-200">©
                                                                2021</span></a>
                                                    </h2>
                                                </div>

                                                <a href="project-1.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                    <article class="dsn-item-post grid-item over-hidden p-relative sports photography">

                                        <div class="box-image-bg has-border-radius w-100 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2024</span>
                                            </div>

                                            <img src="assets/img/portfolio/project2/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">Character design
                                                        </span>
                                                        <span class="background-section heading-color">Digital Art
                                                        </span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-1.html" class="effect-ajax init-color" data-dsn-ajax="work">Me <br> Myself and i <span class="fw-200">© 2024</span></a>
                                                    </h2>
                                                </div>

                                                <a href="project-2.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                    <article class="dsn-item-post grid-item over-hidden p-relative fashion photography">

                                        <div class="box-image-bg has-border-radius w-100 h-v-60 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2017</span>
                                            </div>

                                            <img src="assets/img/portfolio/project3/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">Photography
                                                        </span>
                                                        <span class="background-section heading-color">branding </span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-3.html" class="effect-ajax init-color" data-dsn-ajax="work">YOUR <br> DREAM CAR <span class="fw-200">© 2024</span></a>
                                                    </h2>
                                                </div>

                                                <a href="project-3.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                    <article class="dsn-item-post grid-item over-hidden p-relative brand sports">

                                        <div class="box-image-bg has-border-radius w-100 h-350 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2019</span>
                                            </div>

                                            <img src="assets/img/portfolio/project4/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">Photography
                                                        </span>
                                                        <span class="background-section heading-color">branding </span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-4.html" class="effect-ajax init-color" data-dsn-ajax="work">BThe <br> Hills - Nissan <span class="fw-200">© 2019</span></a>
                                                    </h2>
                                                </div>

                                                <a href="project-4.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                    <article class="dsn-item-post grid-item over-hidden p-relative fashion">

                                        <div class="box-image-bg has-border-radius w-100 h-500 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2022</span>
                                            </div>

                                            <img src="assets/img/portfolio/project5/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">Photography
                                                        </span>
                                                        <span class="background-section heading-color">Architecture
                                                        </span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-5.html" class="effect-ajax init-color" data-dsn-ajax="work">Church <br> Copenhagen Denmark</a>
                                                    </h2>
                                                </div>

                                                <a href="project-5.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                    <article class="dsn-item-post grid-item over-hidden p-relative brand photography">

                                        <div class="box-image-bg has-border-radius w-100 h-500 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2024</span>
                                            </div>

                                            <img src="assets/img/portfolio/project6/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">Photography
                                                        </span>
                                                        <span class="background-section heading-color">Architecture
                                                        </span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-6.html" class="effect-ajax init-color" data-dsn-ajax="work">LOST <br> RENDER <span class="fw-200">©
                                                                2023</span></a>
                                                    </h2>
                                                </div>

                                                <a href="project-6.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                    <article class="dsn-item-post grid-item over-hidden p-relative brand sports">

                                        <div class="box-image-bg has-border-radius w-100 h-500 over-hidden before-z-index">
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">2021</span>
                                            </div>

                                            <img src="assets/img/portfolio/project7/1.jpg" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        <span class="background-section heading-color">Architecture
                                                        </span>
                                                        <span class="background-section heading-color">Interior Design
                                                        </span>
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-7.html" class="effect-ajax init-color" data-dsn-ajax="work">Samokat <br> office <span class="fw-200">© 2021</span></a>
                                                    </h2>
                                                </div>

                                                <a href="project-7.html" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20">
                                                    <span class="icon background-section v-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                            </path>
                                                        </svg>
                                                    </span>

                                                </a>

                                            </div>
                                        </div>

                                    </article>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ========== End Portfolio ========== -->

                <section class="next-page background-section pt-section pb-50">
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
