<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @include('components.headmetatags',[ 'arg_object' => $servicoGeral ])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
    <style>
        .p-top-3em {
            padding-top: 3em;
        }

        .m-top-2em {
            margin-top: 2em !important;
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
        @include('components.sitemenu',['menuWorks' => $menuWorks])
        <!-- ========== End Menu ========== -->

        <div id="dsn-scrollbar">

            <!-- ========== Header ========== -->
            <header class="header-project dsn-header-animation p-relative over-hidden">

                <div class="pl-30 pr-30">
                    <div class="box-img p-relative before-z-index has-border-radius" data-overlay="5" data-dsn-grid="move-up">
                        @if($servicoGeral->video)
                        <video width="100%" autoplay loop muted>
                            <source src="{{ asset("../storage/$servicoGeral->video") }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        @else
                        <img class="cover-bg-img has-border-radius" src="assets/img/portfolio/project2/1.jpg" alt="">
                        @endif
                    </div>
                </div>

            </header>
            <!-- ========== End Header ========== -->

            <!-- inicio product -->
            @foreach($servicos as $id => $s)
            <div id="page_wrapper" class="wrapper">

                <div class="box-move section-padding background-section">
                    <div class="container">
                        <div class="d-grid grid-half-1">

                            <div class="text pinned-scroll p-relative">
                                <div class="">
                                    <!-- <div class=" pinned-element"> -->
                                    <span class="sub-heading mb-15">
                                        <!-- OBS: Estou sem tempo, da pra ficar melhor -->
                                        @if( $id == 0 )
                                        {{ $servicoGeral->pre_title_1 ? $servicoGeral->pre_title_1 : 'pre_title_1' }}
                                        @endif
                                        @if( $id == 1 )
                                        {{ $servicoGeral->pre_title_2 ? $servicoGeral->pre_title_2 : 'pre_title_2' }}
                                        @endif
                                        @if( $id == 2 )
                                        {{ $servicoGeral->pre_title_3 ? $servicoGeral->pre_title_3 : 'pre_title_3' }}
                                        @endif
                                    </span>
                                    <h3 class="title text-upper mb-30">{{ $s->title_1 ? $s->title_1 : 'title_1' }}</h3>

                                    <p>
                                        {{ $s->description_1 ? $s->description_1 : 'description_1' }}
                                    </p>


                                </div>
                                @if( $id > 0 )
                                <div class="m-top-2em">
                                    <div class="dsn-btn dsn-btn-shape d-flex">

                                        <a class="button background-main v-dark effect-ajax background-color-green" href="{{ $id == 1 ? 'propriedades' : 'oportunidades' }}" data-dsn-text="{{ ($id == 1 ? (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Propriedades' : 'Properties') : 'Propriedades') : (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Oportunidades' : 'Oportunities') : 'Oportunidades')) }}">
                                            <span class="title-btn text-upper p-relative  z-index-1 heading-color" data-animate-text="{{ ($id == 1 ? (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Propriedades' : 'Properties') : 'Propriedades') : (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Oportunidades' : 'Oportunities') : 'Oportunidades')) }}">
                                                <span>{{ ($id == 1 ? (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Ver Propriedades' : 'See Properties') : 'Ver Propriedades') : (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Ver Oportunidades' : 'See Oportunities') : 'Ver Oportunidades')) }}</span>
                                            </span>
                                        </a>

                                        <span class="icon background-main v-dark background-color-green">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                </path>
                                            </svg>
                                        </span>

                                    </div>
                                </div>
                                @else
                                <div class="m-top-2em">
                                    <div class="dsn-btn dsn-btn-shape d-flex">

                                        <a class="button background-main v-dark effect-ajax background-color-green" href="{{ $id == 1 ? 'portifolio' : 'portifolio' }}" data-dsn-text="{{ (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Ver Projectos' : 'See Projects') : 'Ver Projectos') }}">
                                            <span class="title-btn text-upper p-relative  z-index-1 heading-color" data-animate-text="{{ (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Ver Projectos' : 'See Projects') : 'Ver Projectos') }}">
                                                <span>{{ (isset($_COOKIE['language']) ? ($_COOKIE['language'] == 'pt' ? 'Ver Projectos' : 'See Projects') : 'Ver Projectos') }}</span>
                                            </span>
                                        </a>

                                        <span class="icon background-main v-dark background-color-green">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                </path>
                                            </svg>
                                        </span>

                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="box-img">
                                <div class="d-grid">
                                    <div class="img-item h-v-80">
                                        <img class="has-border-radius cover-bg-img" src="{{ isset($s->img_1) ? asset("../storage/$s->img_1") : asset("assets/img/portfolio/project2/2.jpg") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-work section-margin not-filter dsn-filter " data-dsn-option='{"speed" : 15 , "start" : "-40px top"}'>
                    <div class="dsn-container">
                        <div class="dsn-cards">
                            <div class="dsn-posts flexibly-hover gap-30">
                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img class="has-border-radius cover-bg-img" src="{{ isset($s->img_2) ? asset("../storage/$s->img_2") : asset("assets/img/portfolio/project2/3.jpg") }}" alt="">
                                    </div>
                                </div>

                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img class="has-border-radius cover-bg-img" src="{{ isset($s->img_3) ? asset("../storage/$s->img_3") : asset("assets/img/portfolio/project2/4.jpg") }}" alt="">
                                    </div>
                                </div>

                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img class="has-border-radius cover-bg-img" src="{{ isset($s->img_4) ? asset("../storage/$s->img_4") : asset("assets/img/portfolio/project2/5.jpg") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">{{ $s->title_2 ? $s->title_2 : 'title_2' }}</h3>
                        <p class="max-w750">
                            {{ $s->description_2 ? $s->description_2 : 'description_2' }}
                        </p>
                    </div>
                </div>

            </div>
            @endforeach
            <!-- end product -->

        </div>

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
