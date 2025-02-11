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

            <div class="over-hidden section-margin">
                <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">

                    <div class="effect-popup before-z-index h-100" data-src="assets/img/portfolio/project5/5.jpg" data-caption="Caption #3" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                        <img class="cover-bg-img has-direction" src="assets/img/portfolio/project5/5.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="section-margin">
                <div class="container">
                    <h3 class="title text-upper mb-30">Headphone product?</h3>
                    <p class="max-w750">PDF HAUS is a practical product design educational institution situated in
                        Korea.
                        PDF HAUS, which started from a designer community called PDF (Product Designer's Forum), was
                        able to sense the difficulties that students, designer-to-be or new designers, or other
                        non-majors interested in design are going through, and the passion in them.</p>
                </div>
            </div>

            <div id="page_wrapper" class="wrapper">

                <div class="container p-relative">
                    <div class="d-grid grid-sm-2 align-items-center">
                        <div class="p-relative img-box-parallax before-z-index has-popup">
                            <div class="effect-popup before-z-index h-v-70 " data-src="assets/img/portfolio/project5/3.jpg" data-caption="Caption #2" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                                <img class="cover-bg-img has-border-radius" src="assets/img/portfolio/project5/3.jpg" alt="">
                            </div>
                            <div class="cap">
                                <span>Caption</span>
                            </div>
                        </div>
                        <div class="p-relative img-box-parallax before-z-index has-popup">
                            <div class="effect-popup before-z-index h-v-70" data-src="assets/img/portfolio/project1/7.jpg" data-caption="Caption #3" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                                <img class="cover-bg-img has-border-radius" src="assets/img/portfolio/project5/4.jpg" alt="">
                            </div>
                            <div class="cap">
                                <span>Caption</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container over-hidden mt-30">
                    <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">

                        <div class="effect-popup before-z-index h-100" data-src="assets/img/portfolio/project5/2.jpg" data-caption="Caption #3" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                            <img class="cover-bg-img has-direction has-border-radius" src="assets/img/portfolio/project5/2.jpg" alt="">
                        </div>

                        <div class="cap">
                            <span>Caption</span>
                        </div>
                    </div>
                </div>

            </div>

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
