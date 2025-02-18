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
                <div class="p-relative mb-section work-massonary-grid">
                    <div class="p-relative">
                        <div class="root-posts has-filter">
                            <div class="dsn-container">
                                <div class="dsn-posts hover-box-item d-grid grid-lg-2 dsn-isotope use-filter" data-dsn-gap="30px">

                                    @foreach($oportunidades as $id => $oportunidade)
                                    <article class="dsn-item-post grid-item over-hidden p-relative brand photography">

                                        <div class="box-image-bg has-border-radius w-100 h-v-70 over-hidden before-z-index">
                                            @if(isset($oportunidade->year))
                                            <div class="cat background-main d-flex p-absolute top-0 right-0">
                                                <svg class="top-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <svg class="bottom-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve">
                                                    <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                    </path>
                                                </svg>
                                                <span class="background-section heading-color">{{ $oportunidade->year }}</span>
                                            </div>
                                            @endif
                                            <img src="{{ isset($oportunidade->img_1) ? asset("../storage/$oportunidade->img_1") : 'assets/img/portfolio/project1/1.jpg' }}" class="cover-bg-img" alt="" />
                                        </div>

                                        <div class="post-content mt-20 p-relative z-index-1 d-flex flex-column">

                                            <div class="post-info d-flex justify-content-between">
                                                <div class="">
                                                    <div class="cat d-flex p-0 mb-5">
                                                        @if(isset($oportunidade->job_1))
                                                        <span class="background-section heading-color">{{ $oportunidade->job_1 }}</span>
                                                        @endif
                                                        @if(isset($oportunidade->job_2))
                                                        <span class="background-section heading-color">{{ $oportunidade->job_2 }}</span>
                                                        @endif
                                                    </div>

                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}oportunidade/{{ $oportunidade->id }}" class="effect-ajax init-color" data-dsn-ajax="{{ $oportunidade->title }}" title="{{ $oportunidade->title }}">{{ $oportunidade->title }}</a>
                                                    </h2>
                                                </div>

                                                <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}oportunidade/{{ $oportunidade->id }}" data-dsn-ajax="{{ $oportunidade->title }}" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20" data-dsn-text="{{ $oportunidade->title }}" title="{{ $oportunidade->title }}">
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
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ========== End Portfolio ========== -->
                <footer class="footer background-section v-dark pt-60">
                    <div class="container p-relative">
                        <div class="d-grid grid-lg-4 grid-md-3">
                            <div class="logo-wrap">
                                <div class="logo d-flex">
                                    <img src="{{ asset("/assets/img/logo-light.png") }}" alt="" class="logo">
                                </div>
                                <svg class="shape-one" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_13_104)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0H0C16.5684 0 30 13.4314 30 30V0Z" fill="#0E0E0E" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13_104">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg class="shape-two" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30C13.4316 0 0 13.4314 0 30V0Z" fill="#0E0E0E" />
                                </svg>

                            </div>

                            <div class="footer-links">
                                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                                    Navigation Links</h4>
                                <ul>
                                    <li class="text-upper">
                                        <a href="{{ $index_text->navigation_url_1 ? $index_text->navigation_url_1 : '#' }}">{{ $index_text->navigation_title_1 ? $index_text->navigation_title_1 : 'navigation_title_1' }}</a>
                                    </li>
                                    <li class="text-upper">
                                        <a href="{{ $index_text->navigation_url_2 ? $index_text->navigation_url_2 : '#' }}">{{ $index_text->navigation_title_2 ? $index_text->navigation_title_2 : 'navigation_title_2' }}</a>
                                    </li>
                                    <li class="text-upper">
                                        <a href="{{ $index_text->navigation_url_3 ? $index_text->navigation_url_3 : '#' }}">{{ $index_text->navigation_title_3 ? $index_text->navigation_title_3 : 'navigation_title_3' }}</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="footer-contact">
                                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                                    CONTACT Info</h4>

                                <div class="col-contact">
                                    <p>
                                        <strong>T</strong>
                                        :{{ $index_text->contact_telephone ? $index_text->contact_telephone : '+000 000 0000' }}
                                    </p>
                                    <p class="mt-10">
                                        <strong>F</strong>
                                        :{{ $index_text->contact_cellphone ? $index_text->contact_cellphone : '+000 000 0000' }}
                                    </p>
                                    <p class="over-hidden mt-10">
                                        <strong>E</strong> :
                                        <a class="link-hover" href="#" data-hover-text="{{ $index_text->contact_email ? $index_text->contact_email : 'email@email.com' }}">
                                            {{ $index_text->contact_email ? $index_text->contact_email : 'email@email.com' }}
                                        </a>
                                    </p>
                                </div>

                            </div>

                            <div class="footer-socials">
                                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                                    socials Links</h4>
                                <ul class="dsn-socials box-social">
                                    <li>
                                        <a href="{{ $index_text->social_url_facebook ? $index_text->social_url_facebook : 'social_url_facebook' }}" target="_blank" class="background-main">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $index_text->social_url_instagram ? $index_text->social_url_instagram : 'social_url_instagram' }}" target="_blank" class="background-main">
                                            <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $index_text->social_url_twitter ? $index_text->social_url_twitter : 'social_url_twitter' }}" target="_blank" class="background-main">
                                            <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="copyright background-main">
                        <div class="container d-flex align-items-center justify-content-between">
                            <strong>Copyright &copy; 2025{{ date("Y") == '2025' ? '' : '-'.date("Y") }} <a href="https://pixelinmotion.pt/" target="_blank">Pixel In Motion</a>.</strong> All rights reserved.
                            <div class="dsn-default-btn dsn-icon-heading-color">
                                <a class="dsn-btn dsn-border border-color-default background-transparent image-zoom move-circle has-icon-left dsn-parallax-hover" href="#main_root" rel="nofollow" data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="dsn-icon no-padding heading-color z-index-1 btn-icon-left">
                                            <svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M24.285,11.284L16,19.571l-8.285-8.288c-0.395-0.395-1.034-0.395-1.429,0  c-0.394,0.395-0.394,1.035,0,1.43l8.999,9.002l0,0l0,0c0.394,0.395,1.034,0.395,1.428,0l8.999-9.002  c0.394-0.395,0.394-1.036,0-1.431C25.319,10.889,24.679,10.889,24.285,11.284z" fill="#121313" id="Expand_More"></path>

                                            </svg>
                                        </span>
                                        <span class="title-btn p-relative  z-index-1 heading-color" data-animate-text="SCROLL TOP">
                                            <span>SCROLL TOP</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>

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
