<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @include('components.headmetatags',[ 'arg_object' => $contact ])

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
            <header class="header-page v-dark-head dsn-header-animation pb-80 p-relative">

                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                    <img class="cover-bg-img" src="{{asset("assets/img/bg.svg")}}" alt="">
                </div>

                <div class="p-relative container dsn-hero-parallax-title h-100">
                    <div class="p-relative d-flex align-items-center w-100  h-100 ">

                        <div class="box-content d-flex flex-column z-index-1">
                            <h1 class="title-lg text-upper">{{isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Fale connosco" : "Contact us" : "Fale connosco" }}</h1>
                            <div class="contact-links d-flex flex-column w-50 mt-50">
                                @if(isset($contact->email1))
                                <a href="malito:{{ $contact->email1 }}" class="sm-title-block text-upper d-flex justify-content-between align-items-center">{{ $contact->email1 }}
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                @endif
                                @if(isset($contact->email2))
                                <a href="tel:{{ $contact->email2 }}" class="sm-title-block text-upper d-flex justify-content-between align-items-center">b{{ $contact->email2 }}
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                @endif
                            </div>
                        </div>


                    </div>
                </div>

                <div class="footer-head w-100 p-relative mt-80 z-index-2">
                    <div class="container d-flex justify-content-between">
                        <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">

                            <a class="button v-dark background-section" href="#page_wrapper" rel="nofollow" data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
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

                <div class="">

                    <!-- ========== Contact  ========== -->
                    <div class="p-relative contact-form over-hidden section-padding">
                        <div class="p-relative container ">
                            <div class="d-grid grid-md-2" data-dsn-gap="30px 30px">
                                <div class="box-info d-grid">
                                    <div class="box-title background-section has-border-radius p-relative over-hidden">
                                        <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                                            <img class="cover-bg-img" src="{{asset("assets/img/bg.svg")}}" alt="">
                                        </div>
                                        <h2 class="title text-upper p-relative">{{ $contact->contact_form_title ? $contact->contact_form_title : 'contact_form_title' }}</h2>
                                    </div>

                                    <div class="info background-section has-border-radius p-relative over-hidden">
                                        <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                                            <img class="cover-bg-img" src="{{asset("assets/img/bg.svg")}}" alt="">
                                        </div>

                                        <div class="p-relative">
                                            <div class="mb-20">
                                                <h4 class="title-block mb-15">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Horário" : "Business Hours" : "Horário" }}</h4>
                                                <p>
                                                    @if(isset($contact->business_hours1))
                                                    {{ $contact->business_hours1 }}
                                                    @endif
                                                    <br>
                                                    @if(isset($contact->business_hours2))
                                                    {{ $contact->business_hours2 }}
                                                    @endif
                                                    <br>
                                                    @if(isset($contact->business_hours3))
                                                    {{ $contact->business_hours3 }}
                                                    @endif
                                                </p>
                                            </div>

                                            <div class="">
                                                <h4 class="title-block mb-15">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Morada" : "Address" : "Morada" }}</h4>
                                                <p>
                                                    @if(isset($contact->address1))
                                                    {{ $contact->address1 }}
                                                    @endif
                                                    <br>
                                                    @if(isset($contact->address2))
                                                    {{ $contact->address2 }}
                                                    @endif
                                                    <br>
                                                    @if(isset($contact->address3))
                                                    {{ $contact->address3 }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-form background-section p-relative over-hidden box-padding has-border-radius">
                                    <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                                        <img class="cover-bg-img" src="{{asset("assets/img/bg.svg")}}" alt="">
                                    </div>
                                    <div class="dsn-form form-box d-flex flex-column p-relative">
                                        <form id="contact-form" class="form w-100" method="post" action="contact.php" data-toggle="validator">
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

                <!-- ========== Map  ========== -->
                <div class="map-custom hv-80" data-dsn-lat="{{ $contact->map_lat ? $contact->map_lat : '1.5073509'}}" data-dsn-len="{{ $contact->map_len ? $contact->map_len : '-0.1277583'}}" data-dsn-zoom="14">
                </div>
                <!-- ========== End Map  ========== -->

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
