<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @include('components.headmetatags',[ 'arg_object' => $oportunidade ])

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
        @include('components.sitemenu',['menuWorks' => $menuWorks])
        <!-- ========== End Menu ========== -->

        <div id="dsn-scrollbar">
            @php
            //dd($oportunidade->type_2);
            @endphp
            <!-- ========== Slider Parallax ========== -->
            <header class="dsn-section-padding v-dark-head h-100-v p-relative">
                <div class="effect-popup before-z-index h-100" data-src="{{ isset($oportunidade->img_1) ? asset("../storage/$oportunidade->img_1") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="Caption #3" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                    <img class="cover-bg-img has-direction" src="{{ isset($oportunidade->img_1) ? asset("../storage/$oportunidade->img_1") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                </div>
            </header>
            <!-- ========== End Slider Parallax ========== -->

            <div class="section-margin">
                <div class="container">
                    <h3 class="title text-upper mb-30">{{ isset($oportunidade->title_1) ? $oportunidade->title_1 : 'Titulo 1' }}</h3>
                    <p class="max-w750">
                        {{ isset($oportunidade->description) ? $oportunidade->description : 'Descrição 1' }}
                    </p>
                </div>
            </div>

            <div id="page_wrapper" class="wrapper">
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_2, 'type_1' => $oportunidade->type_2,
                'img_2' => $oportunidade->img_3, 'type_2' => $oportunidade->type_3
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_3, 'type_1' => $oportunidade->type_3,
                'img_2' => $oportunidade->img_4, 'type_2' => $oportunidade->type_4
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_5, 'type_1' => $oportunidade->type_5,
                'img_2' => $oportunidade->img_6, 'type_2' => $oportunidade->type_6
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_7, 'type_1' => $oportunidade->type_7,
                'img_2' => $oportunidade->img_8, 'type_2' => $oportunidade->type_8
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_9, 'type_1' => $oportunidade->type_9,
                'img_2' => $oportunidade->img_10, 'type_2' => $oportunidade->type_10
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_11, 'type_1' => $oportunidade->type_11,
                'img_2' => $oportunidade->img_12, 'type_2' => $oportunidade->type_12
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_13, 'type_1' => $oportunidade->type_13,
                'img_2' => $oportunidade->img_14, 'type_2' => $oportunidade->type_14
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_15, 'type_1' => $oportunidade->type_15,
                'img_2' => $oportunidade->img_16, 'type_2' => $oportunidade->type_16
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_17, 'type_1' => $oportunidade->type_17,
                'img_2' => $oportunidade->img_18, 'type_2' => $oportunidade->type_18
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_19, 'type_1' => $oportunidade->type_19,
                'img_2' => $oportunidade->img_20, 'type_2' => $oportunidade->type_20
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_21, 'type_1' => $oportunidade->type_21,
                'img_2' => $oportunidade->img_22, 'type_2' => $oportunidade->type_22
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_23, 'type_1' => $oportunidade->type_23,
                'img_2' => $oportunidade->img_24, 'type_2' => $oportunidade->type_24
                ])
                @include('components.galeryoportunidade',
                [
                'img_1' => $oportunidade->img_25, 'type_1' => $oportunidade->type_25,
                'img_2' => null, 'type_2' => null
                ])

            </div>

        </div>

        <div class="">

            <!-- ========== Contact  ========== -->
            <div class="p-relative contact-form over-hidden section-padding">
                <div class="p-relative container ">
                    <div class="d-grid" data-dsn-gap="30px 30px">
                        <div class="box-info d-grid">
                            <div class="box-title p-relative over-hidden padding-left-0px">
                                <h2 class="title text-upper p-relative">{{ $oportunidade->contact_title ? $oportunidade->contact_title : 'contact_title' }}</h2>
                            </div>
                            <div class="dsn-form form-box d-flex flex-column p-relative">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="d-grid" data-dsn-gap="0px 30px">
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
