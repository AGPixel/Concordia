<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @include('components.headmetatags',[ 'arg_object' => $work ])

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
            <header class="header-project dsn-header-animation p-relative over-hidden">
                <div class="pl-30 pr-30">
                    <div class="box-img p-relative before-z-index has-border-radius" data-overlay="3" data-dsn-grid="move-up">
                        <img class="cover-bg-img has-border-radius" src="{{ asset("../storage/$work->img_1") }}" alt="">
                    </div>
                </div>
            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">

                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">{{ $work->title ? $work->title : 'title' }}</h3>
                        <p class="max-w750">
                            {{ $work->description ? $work->description : 'description' }}
                        </p>
                    </div>
                </div>

                <div class="container p-relative section-margin over-hidden">
                    <div class="gallery-portfolio">
                        @include('components.galeryportifolio',[ 'img' => $work->img_1,'type' => $work->type_1_1,'title' => $work->title_1 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_2,'type' => $work->type_2_1,'title' => $work->title_2 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_3,'type' => $work->type_3_1,'title' => $work->title_3 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_4,'type' => $work->type_4_1,'title' => $work->title_4 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_5,'type' => $work->type_5_1,'title' => $work->title_5 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_6,'type' => $work->type_6_1,'title' => $work->title_6 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_7,'type' => $work->type_7_1,'title' => $work->title_7 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_8,'type' => $work->type_8_1,'title' => $work->title_8 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_9,'type' => $work->type_9_1,'title' => $work->title_9 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_10,'type' => $work->type_10_1,'title' => $work->title_10 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_11,'type' => $work->type_11_1,'title' => $work->title_11 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_12,'type' => $work->type_12_1,'title' => $work->title_12 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_13,'type' => $work->type_13_1,'title' => $work->title_13 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_14,'type' => $work->type_14_1,'title' => $work->title_14 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_15,'type' => $work->type_15_1,'title' => $work->title_15 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_16,'type' => $work->type_16_1,'title' => $work->title_16 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_17,'type' => $work->type_17_1,'title' => $work->title_17 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_18,'type' => $work->type_18_1,'title' => $work->title_18 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_19,'type' => $work->type_19_1,'title' => $work->title_19 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_20,'type' => $work->type_20_1,'title' => $work->title_20 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_21,'type' => $work->type_21_1,'title' => $work->title_21 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_22,'type' => $work->type_22_1,'title' => $work->title_22 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_23,'type' => $work->type_23_1,'title' => $work->title_23 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_24,'type' => $work->type_24_1,'title' => $work->title_24 ])
                        @include('components.galeryportifolio',[ 'img' => $work->img_25,'type' => $work->type_25_1,'title' => $work->title_25 ])
                    </div>
                </div>
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
        </div>



    </main>

    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->

    <script src="{{ asset("/assets/js/jquery-3.7.1.min.js") }}">
    </script>
    <script src="{{ asset("/assets/js/plugins.min.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/dsn-grid.min.js") }}"></script>
    <script src="{{ asset("/assets/js/custom.js") }}"></script>
    <script src="{{ asset("/js/jquery.js") }}"></script>
</body>

</html>
