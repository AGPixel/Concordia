<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @include('components.headmetatags',[ 'arg_object' => $propriedade ])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
    <style>
        .padding-left-0px {
            padding-left: 0px !important;
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
        @php
        //dd($propriedade);
        @endphp
        <div id="dsn-scrollbar">

            <!-- ========== Slider Parallax ========== -->
            <header class="dsn-section-padding v-dark-head h-100-v p-relative">
                <div class="copyright background-main">
                    <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">
                        <div class="effect-popup before-z-index h-100" data-src="{{ isset($propriedade->img_1) ? asset("../storage/$propriedade->img_1") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($propriedade->title_1) ? asset("../storage/$propriedade->title_1") : '' }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                            <img class="cover-bg-img has-direction" src="{{ isset($propriedade->img_1) ? asset("../storage/$propriedade->img_1") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== End Slider Parallax ========== -->

            <div id="page_wrapper" class="wrapper">
                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">{{ isset($propriedade->title) ? $propriedade->title : 'Titulo 1' }}</h3>
                        <p class="max-w750">
                            {{ isset($propriedade->description) ? $propriedade->description : 'Descrição 1' }}
                        </p>
                    </div>
                </div>



                <div class="container p-relative section-margin over-hidden">
                    <div class="gallery-portfolio">
                        @if(isset($propriedade->img_2))
                        <a class="link-pop fj-gallery-item" href="{{ isset($propriedade->img_2) ? asset("../storage/$propriedade->img_2") : 'assets/img/portfolio/project1/1.jpg' }}" data-fancybox="_1" data-caption="{{ isset($propriedade->title_2) ? $propriedade->title_2 : '' }}">
                            <img width="512" height="320" src="{{ isset($propriedade->img_2) ? asset("../storage/$propriedade->img_2") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            <div class="cap">
                                <span>{{ isset($propriedade->type_2) ? $propriedade->type_2 : '' }}</span>
                            </div>
                        </a>
                        @endif
                        @if(isset($propriedade->img_3))
                        <a class="link-pop fj-gallery-item" href="{{ isset($propriedade->img_3) ? asset("../storage/$propriedade->img_3") : 'assets/img/portfolio/project1/1.jpg' }}" data-fancybox="_1" data-caption="{{ isset($propriedade->title_3) ? $propriedade->title_3 : '' }}">
                            <img width="512" height="320" src="{{ isset($propriedade->img_3) ? asset("../storage/$propriedade->img_3") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            <div class="cap">
                                <span>{{ isset($propriedade->type_3) ? $propriedade->type_3 : '' }}</span>
                            </div>
                        </a>
                        @endif
                        @if(isset($propriedade->img_4))
                        <a class="link-pop fj-gallery-item" href="{{ isset($propriedade->img_4) ? asset("../storage/$propriedade->img_4") : 'assets/img/portfolio/project1/1.jpg' }}" data-fancybox="_1" data-caption="{{ isset($propriedade->title_4) ? $propriedade->title_4 : '' }}">
                            <img width="512" height="320" src="{{ isset($propriedade->img_4) ? asset("../storage/$propriedade->img_4") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            <div class="cap">
                                <span>{{ isset($propriedade->type_4) ? $propriedade->type_4 : '' }}</span>
                            </div>
                        </a>
                        @endif
                        @if(isset($propriedade->img_5))
                        <a class="link-pop fj-gallery-item" href="{{ isset($propriedade->img_5) ? asset("../storage/$propriedade->img_5") : 'assets/img/portfolio/project1/1.jpg' }}" data-fancybox="_1" data-caption="{{ isset($propriedade->title_5) ? $propriedade->title_5 : '' }}">
                            <img width="512" height="320" src="{{ isset($propriedade->img_5) ? asset("../storage/$propriedade->img_5") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            <div class="cap">
                                <span>{{ isset($propriedade->type_5) ? $propriedade->type_5 : '' }}</span>
                            </div>
                        </a>
                        @endif
                        @if(isset($propriedade->img_6))
                        <a class="link-pop fj-gallery-item" href="{{ isset($propriedade->img_6) ? asset("../storage/$propriedade->img_6") : 'assets/img/portfolio/project1/1.jpg' }}" data-fancybox="_1" data-caption="{{ isset($propriedade->title_6) ? $propriedade->title_6 : '' }}">
                            <img width="512" height="320" src="{{ isset($propriedade->img_6) ? asset("../storage/$propriedade->img_6") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            <div class="cap">
                                <span>{{ isset($propriedade->type_6) ? $propriedade->type_6 : '' }}</span>
                            </div>
                        </a>
                        @endif
                        @if(isset($propriedade->img_7))
                        <a class="link-pop fj-gallery-item" href="{{ isset($propriedade->img_7) ? asset("../storage/$propriedade->img_7") : 'assets/img/portfolio/project1/1.jpg' }}" data-fancybox="_1" data-caption="{{ isset($propriedade->title_7) ? $propriedade->title_7 : '' }}">
                            <img width="512" height="320" src="{{ isset($propriedade->img_7) ? asset("../storage/$propriedade->img_7") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            <div class="cap">
                                <span>{{ isset($propriedade->type_7) ? $propriedade->type_7 : '' }}</span>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="">
                <!-- ========== Contact  ========== -->
                <div class="p-relative contact-form over-hidden section-padding">
                    <div class="p-relative container ">
                        <div class="d-grid" data-dsn-gap="30px 30px">
                            <div class="box-info d-grid">
                                <div class="box-title p-relative over-hidden padding-left-0px">
                                    <h2 class="title text-upper p-relative">{{ $propriedade->contact_title ? $propriedade->contact_title : 'contact_title' }}</h2>
                                </div>
                                <div class="dsn-form form-box d-flex flex-column p-relative">
                                    <form id="contact-form" class="form w-100" method="post" action="contact.php" data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">
                                            <div class="d-grid" data-dsn-gap="0px 30px">
                                                <div class="form-group dsn-up">
                                                    <div class="entry-box">
                                                        <input id="form_name" type="text" name="name" placeholder="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Digite seu nome" : "Type your name" : "Digite seu nome" }}" required="required" data-error="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "nome é obrigatório." : "name is required." : "nome é obrigatório." }}" />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group dsn-up">
                                                    <div class="entry-box">
                                                        <input id="form_email" type="email" name="email" placeholder="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Digite seu endereço de e-mail" : "Type your Email Address" : "Digite seu endereço de e-mail" }}" required="required" data-error="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "E-mail válido é obrigatório." : "Valid email is required." : "E-mail válido é obrigatório." }}" />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="form-group dsn-up">
                                                <div class="entry-box">
                                                    <textarea id="form_message" class="form-control" name="message" rows="7" placeholder="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Conte-nos sobre você e o mundo" : "Tell us about you and the world" : "Conte-nos sobre você e o mundo" }}" required="required" data-error="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Por favor, deixe-nos uma mensagem." : "Please,leave us a message." : "Por favor, deixe-nos uma mensagem." }}"></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="d-flex dsn-up w-100">
                                                <div class="image-zoom move-circle w-100" data-dsn="parallax">
                                                    <input class="background-theme w-100" type="submit" value="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Enviar mensagem" : "Send Message" : "Enviar mensagem" }}">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="social-box border-bottom border-top mt-30 d-flex align-items-center justify-content-center">
                            <ul class="dsn-socials box-social">
                                @if(isset($index_text->social_url_facebook))
                                <li>
                                    <a href="{{ $index_text->social_url_facebook }}" target="_blank" class="background-section">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                                    </a>
                                </li>
                                @endif
                                @if(isset($index_text->social_url_instagram))
                                <li>
                                    <a href="{{ $index_text->social_url_instagram }}" target="_blank" class="background-section">
                                        <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                                    </a>
                                </li>
                                @endif
                                @if(isset($index_text->social_url_twitter))
                                <li>
                                    <a href="{{ $index_text->social_url_twitter }}" target="_blank" class="background-section">
                                        <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                    </a>
                                </li>
                                @endif
                                @if(isset($index_text->social_url_linkedin))
                                <li>
                                    <a href="{{ $index_text->social_url_linkedin }}" target="_blank" class="background-section">
                                        <i class="fab fa-linkedin" aria-hidden="true"></i> <span>LN</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ========== End Contact  ========== -->
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

    <script src="{{ asset("/assets/js/jquery-3.7.1.min.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins.min.js") }}"></script>
    <script src="{{ asset("/assets/js/plugins/dsn-grid.min.js") }}"></script>
    <script src="{{ asset("/assets/js/custom.js") }}"></script>
    <script src="{{ asset("/js/jquery.js") }}"></script>
</body>

</html>
