<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ isset($metaTags->description) ? $metaTags->description : 'Description' }}">
    <meta name="keywords" content="{{ isset($metaTags->keywords) ? $metaTags->keywords : 'Keywords' }}">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($metaTags->title) ? $metaTags->title : 'Concordia' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
    <style>
        .modal-show-terms {
            position: absolute;
            z-index: 100;
            background-color: black;
            padding: 1em;
        }

        .modal-terms-buttons {
            width: 100%;
            display: flex;
            justify-content: space-around;
            padding-top: 1em;
        }

        .bt-modal-term-no {
            width: 8.5em;
            height: 3em;
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            box-shadow: none;
            cursor: pointer;
        }

        .bt-modal-term-accept {
            width: 8.5em;
            height: 3em;
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            box-shadow: none;
            cursor: pointer;
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

            <!-- ========== Slider Parallax ========== -->
            <header class="dsn-section-padding v-dark-head h-100-v p-relative">
                <div class="copyright background-main">
                    <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">

                        <div class="effect-popup before-z-index h-100" data-src="assets/img/portfolio/project1/5.jpg" data-caption="Caption #3" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                            <img class="cover-bg-img has-direction" src="assets/img/portfolio/project3/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== End Slider Parallax ========== -->

            <div id="page_wrapper" class="wrapper">

                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">Headphone product?</h3>
                        <p class="max-w750">In order to create a more simple design, a unique brand concept was applied
                            to the headphone. Burberry makes products that are classy yet modern I decided to focus on
                            making a modern yet classy looking pair of headsets.
                            I looked for ways to design headphones that look good at any place and any time.</p>
                    </div>
                </div>



                <div class="container p-relative section-margin over-hidden">
                    <div class="gallery-portfolio">
                        <a class="link-pop fj-gallery-item" href="assets/img/portfolio/project3/3.jpg" data-fancybox="_1" data-caption="Caption #1">
                            <img src="assets/img/portfolio/project3/3.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop fj-gallery-item" href="assets/img/portfolio/project3/4.jpg" data-fancybox="_1" data-caption="Caption #2">
                            <img src="assets/img/portfolio/project3/4.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop fj-gallery-item" href="assets/img/portfolio/project3/5.jpg" data-fancybox="_1" data-caption="Caption #3">
                            <img src="assets/img/portfolio/project3/5.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop fj-gallery-item" href="assets/img/portfolio/project3/6.jpg" data-fancybox="_1" data-caption="Caption #4">
                            <img src="assets/img/portfolio/project3/6.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop fj-gallery-item" href="assets/img/portfolio/project3/7.jpg" data-fancybox="_1" data-caption="Caption #4">
                            <img src="assets/img/portfolio/project3/7.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop fj-gallery-item" href="assets/img/portfolio/project3/8.jpg" data-fancybox="_1" data-caption="Caption #4">
                            <img src="assets/img/portfolio/project3/8.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <footer class="footer background-section v-dark pt-60">
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
</body>

</html>
