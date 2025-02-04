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
    <style>
        .p-top-3em {
            padding-top: 3em;
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
                        <!-- video -->
                        <img class="cover-bg-img has-border-radius" src="assets/img/portfolio/project2/1.jpg" alt="">
                    </div>
                </div>

            </header>
            <!-- ========== End Header ========== -->

            <!-- inicio product -->
            <div id="page_wrapper" class="wrapper">

                <div class="box-move section-padding background-section">
                    <div class="container">
                        <div class="d-grid grid-half-1">

                            <div class="text pinned-scroll p-relative">
                                <div class=" pinned-element">
                                    <span class="sub-heading mb-15">Overview</span>
                                    <h3 class="title text-upper mb-30">The Challenge</h3>

                                    <p>Recognizing the brand's commitment to sustainability and natural ingredients, we
                                        crafted a visual and narrative identity that resonate deeply with eco-conscious
                                        consumers.</p>

                                </div>
                            </div>

                            <div class="box-img">
                                <div class="d-grid">
                                    <div class="img-item h-v-80">
                                        <img class="has-border-radius cover-bg-img" src="assets/img/portfolio/project2/2.jpg" alt="">
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
                                        <img src="assets/img/portfolio/project2/3.jpg" class="cover-bg-img" alt="" />
                                    </div>
                                </div>

                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img src="assets/img/portfolio/project2/4.jpg" class="cover-bg-img" alt="" />
                                    </div>
                                </div>

                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img src="assets/img/portfolio/project2/5.jpg" class="cover-bg-img" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">Headphone product?</h3>
                        <p class="max-w750">In order to create a more simple design, a unique brand concept was applied
                            to the headphone. Burberry makes products that are classy yet modern I decided to focus on
                            making a modern yet classy looking pair of headsets.
                            I looked for ways to design headphones that look good at any place and any time.</p>
                    </div>
                </div>
                <!-- end product -->

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
                <footer class="footer-personal v-light mt-50">
                    <div class="d-grid grid-md-3 align-items-center">
                        <div class="links">
                            <ul class="d-flex">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">ABOUT</a></li>
                                <li><a href="#">WORK</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                        </div>

                        <div class="dsn-logo main-logo d-flex align-items-center justify-content-center">
                            <div class="main-logo">
                                <a href="#" class="custom-logo-link main-brand effect-ajax">
                                    <img class="custom-logo logo-light" src="assets/img/logo-light.png" alt="">
                                    <img class="custom-logo logo-dark" src="assets/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="copyright">
                            <p class="over-hidden">
                                <strong>Copyright &copy; 2025{{ date("Y") == '2025' ? '' : '-'.date("Y") }} <a href="https://pixelinmotion.pt/" target="_blank">Pixel In Motion</a>.</strong> All rights reserved.
                            </p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>


    </main>

    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/plugins/dsn-grid.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
