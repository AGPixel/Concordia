<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">

    @include('components.headmetatags',[ 'arg_object' => $privacyPolitics ])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
    <style>
        @media only screen and (min-width: 992px) {
            .title-lg {
                font-size: 110px;
                line-height: 135px;
            }
        }

        span .word {
            height: 1.21em !important;
            padding-top: 4px;
        }

        .m-top-0px {
            margin-top: 0px !important;
        }

        .word {
            height: 1.4em !important;
            padding-top: 4px;
        }

        .h-100-v {
            min-height: 5em !important;
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

            <div id="page_wrapper" class="wrapper">

                <header class="dsn-section-padding v-dark-head h-100-v p-relative">

                </header>

                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">{{ $privacyPolitics->title ? $privacyPolitics->title : 'titulo' }}</h3>
                        <p class="max-w750">
                            {{ $privacyPolitics->content ? $privacyPolitics->content : 'conteudo' }}
                        </p>
                    </div>
                </div>

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
