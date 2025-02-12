<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ isset($metaTags->description) ? $metaTags->description : 'Description' }}">
    <meta name="keywords" content="{{ isset($metaTags->keywords) ? $metaTags->keywords : 'Keywords' }}">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($metaTags->title) ? $metaTags->title : 'Concordia' }} - Serviço</title>

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

                <div class="container p-relative">
                    <div class="d-grid grid-sm-2 align-items-center">
                        <div class="p-relative img-box-parallax before-z-index has-popup">
                            <div class="effect-popup before-z-index h-v-70 " data-src="{{ isset($oportunidade->img_2) ? asset("../storage/$oportunidade->img_2") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($oportunidade->type_2) ?? $oportunidade->type_2 }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                                <img class="cover-bg-img has-border-radius" src="{{ isset($oportunidade->img_2) ? asset("../storage/$oportunidade->img_2") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            </div>
                            <div class="cap">
                                <span>{{ isset($oportunidade->type_2) ? $oportunidade->type_2 : ''}}</span>
                            </div>
                        </div>
                        <div class="p-relative img-box-parallax before-z-index has-popup">
                            <div class="effect-popup before-z-index h-v-70" data-src="{{ isset($oportunidade->img_3) ? asset("../storage/$oportunidade->img_3") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($oportunidade->type_3) ?? $oportunidade->type_3 }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                                <img class="cover-bg-img has-border-radius" src="{{ isset($oportunidade->img_3) ? asset("../storage/$oportunidade->img_3") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                            </div>
                            <div class="cap">
                                <span>{{ isset($oportunidade->type_3) ? $oportunidade->type_3 : '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container over-hidden mt-30">
                    <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">

                        <div class="effect-popup before-z-index h-100" data-src="{{ isset($oportunidade->img_4) ? asset("../storage/$oportunidade->img_4") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($oportunidade->type_4) ?? $oportunidade->type_4 }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                            <img class="cover-bg-img has-direction has-border-radius" src="{{ isset($oportunidade->img_4) ? asset("../storage/$oportunidade->img_4") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
                        </div>

                        <div class="cap">
                            <span>{{ isset($oportunidade->type_4) ? $oportunidade->type_4 : '' }}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="">

            <!-- ========== Contact  ========== -->
            <div class="p-relative contact-form over-hidden section-padding">
                <div class="p-relative container ">
                    <div class="d-grid" data-dsn-gap="30px 30px">
                        <div class="box-info d-grid">
                            <div class="box-title p-relative over-hidden">
                                <h2 class="title text-upper p-relative">{{ $contact->contact_form_title ? $contact->contact_form_title : 'contact_form_title' }}</h2>
                            </div>
                            <div class="dsn-form form-box d-flex flex-column p-relative">
                                <form id="contact-form" class="form w-100" method="post" action="contact.php" data-toggle="validator">
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="d-grid" data-dsn-gap="0px 30px">
                                            <div class="form-group dsn-up">
                                                <div class="entry-box">

                                                    <input id="form_name" type="text" name="name" placeholder="Type your name" required="required" data-error="name is required." />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group dsn-up">
                                                <div class="entry-box">

                                                    <input id="form_email" type="email" name="email" placeholder="Type your Email Address" required="required" data-error="Valid email is required." />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group dsn-up">
                                            <div class="entry-box">

                                                <textarea id="form_message" class="form-control" name="message" rows="7" placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="d-flex dsn-up w-100">
                                            <div class="image-zoom move-circle w-100" data-dsn="parallax">
                                                <input class="background-theme w-100" type="submit" value="Send Message">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="social-box border-bottom border-top mt-30 d-flex align-items-center justify-content-center">
                        <p class="heading-color">Available for work</p>

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

        <section class="next-page background-section pt-section pb-50 p-top-3em">

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
