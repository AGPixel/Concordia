<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @if(isset($oportunidades))
    @if(count($oportunidades) > 1)
    @include('components.headmetatags',[ 'arg_object' => $oportunidades ])
    @endif
    @endif

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">

    <style>
        .header-page {
            padding-top: 120px !important;
        }

        .w100-h100-percent {
            width: 100% !important;
            height: 100% !important;
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
                                            <a href="/pt/oportunidade/{{$oportunidade->title}}" class="w100-h100-percent dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20" data-dsn-text="{{ $oportunidade->title }}" title="{{ $oportunidade->title }}">
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
                                            </a>
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
                                                        <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}oportunidade/{{ $oportunidade->title }}" class="effect-ajax init-color" data-dsn-ajax="{{ $oportunidade->title }}" title="{{ $oportunidade->title }}">{{ $oportunidade->title }}</a>
                                                    </h2>
                                                </div>

                                                <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}oportunidade/{{ $oportunidade->title }}" data-dsn-ajax="{{ $oportunidade->title }}" class="dsn-btn dsn-btn-shape effect-ajax d-flex align-items-end mr-20" data-dsn-text="{{ $oportunidade->title }}" title="{{ $oportunidade->title }}">
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
