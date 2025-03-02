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

    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
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
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_2,'type' => $propriedade->type_2,'title' => $propriedade->title_2 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_3,'type' => $propriedade->type_3,'title' => $propriedade->title_3 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_4,'type' => $propriedade->type_4,'title' => $propriedade->title_4 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_5,'type' => $propriedade->type_5,'title' => $propriedade->title_5 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_6,'type' => $propriedade->type_6,'title' => $propriedade->title_6 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_7,'type' => $propriedade->type_7,'title' => $propriedade->title_7 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_8,'type' => $propriedade->type_8,'title' => $propriedade->title_8 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_9,'type' => $propriedade->type_9,'title' => $propriedade->title_9 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_10,'type' => $propriedade->type_10,'title' => $propriedade->title_10 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_11,'type' => $propriedade->type_11,'title' => $propriedade->title_11 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_12,'type' => $propriedade->type_12,'title' => $propriedade->title_12 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_13,'type' => $propriedade->type_13,'title' => $propriedade->title_13 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_14,'type' => $propriedade->type_14,'title' => $propriedade->title_14 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_15,'type' => $propriedade->type_15,'title' => $propriedade->title_15 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_16,'type' => $propriedade->type_16,'title' => $propriedade->title_16 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_17,'type' => $propriedade->type_17,'title' => $propriedade->title_17 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_18,'type' => $propriedade->type_18,'title' => $propriedade->title_18 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_19,'type' => $propriedade->type_19,'title' => $propriedade->title_19 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_20,'type' => $propriedade->type_20,'title' => $propriedade->title_20 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_21,'type' => $propriedade->type_21,'title' => $propriedade->title_21 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_22,'type' => $propriedade->type_22,'title' => $propriedade->title_22 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_23,'type' => $propriedade->type_23,'title' => $propriedade->title_23 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_24,'type' => $propriedade->type_24,'title' => $propriedade->title_24 ])
                        @include('components.galeryportifolio',[ 'img' => $propriedade->img_25,'type' => $propriedade->type_25,'title' => $propriedade->title_25 ])
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
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="d-grid" data-dsn-gap="0px 30px">
                                            <div class="form-group dsn-up">
                                                <div class="entry-box">
                                                    <input id="form_name" type="text" name="name" placeholder="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Digite o seu nome" : "Type your name" : "Digite o seu nome" }}" required="required" data-error="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "nome é obrigatório." : "name is required." : "nome é obrigatório." }}" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group dsn-up">
                                                <div class="entry-box">
                                                    <input id="form_email" type="email" name="email" placeholder="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Digite o seu endereço de e-mail" : "Type your Email Address" : "Digite o seu endereço de e-mail" }}" required="required" data-error="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "E-mail válido é obrigatório." : "Valid email is required." : "E-mail válido é obrigatório." }}" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group dsn-up">
                                            <div class="entry-box">
                                                <textarea id="form_message" class="form-control" name="message" rows="7" placeholder="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Mensagem" : "Message" : "Mensagem" }}" required="required" data-error="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Por favor, deixe-nos uma mensagem." : "Please,leave us a message." : "Por favor, deixe-nos uma mensagem." }}"></textarea>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div id="returnFeedback"></div>
                                        <div class="h-captcha" data-sitekey="{{ $dataSiteKey }}"></div>

                                        <div class="d-flex dsn-up w-100">
                                            <div class="image-zoom move-circle w-100" data-dsn="parallax">
                                                <button class="background-theme w-100 bt-concordia-send" onclick="sendEmail()">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Enviar mensagem" : "Send Message" : "Enviar mensagem" }}</button>
                                            </div>
                                        </div>
                                    </div>
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

            @include('components.footersite',['args'=> $index_text,'contact'=> $contact])

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
    <script src="{{ asset("/js/formContactHomePage.js") }}"></script>
</body>

</html>
