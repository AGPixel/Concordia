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

            @include('components.footersite',['args'=> $index_text,'contact'=> $contact])

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
