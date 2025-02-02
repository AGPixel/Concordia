<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset("/assets/img/logo-32x32.png")}}" sizes="32x32" />
    <link rel="icon" href="{{asset("/assets/img/logo-192x192.png")}}" sizes="192x192" />

    <title>Concordia - Serviço</title>

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

            <!-- ========== Header ========== -->
            <header class="header-project dsn-header-animation p-relative over-hidden">

                <div class="p-relative container dsn-hero-parallax-title pb-60">
                    <div class="p-relative d-flex align-items-center w-100  h-100 ">

                        <div class="box-content w-100 d-flex flex-column z-index-1">

                            <h1 class="title-lg text-upper" data-dsn-ajax="title">
                                {{ $project->title }}
                            </h1>

                            <div class="d-flex justify-content-between align-items-center w-100 mt-30">
                                <div class="cat p-0">
                                    @if(isset($project->work_1))
                                    <span class="background-section heading-color">{{ $project->work_1 }}</span>
                                    @endif
                                    @if(isset($project->work_2))
                                    <span class="background-section heading-color">{{ $project->work_2 }}</span>
                                    @endif
                                    @if(isset($project->work_3))
                                    <span class="background-section heading-color">{{ $project->work_3 }}</span>
                                    @endif
                                </div>

                                <div class="item">
                                    <span class="text-upper"><span>{{ $project->employee_job_1 ? $project->employee_job_1 : ''}}</span> {{ $project->employee_1 ? $project->employee_1 : ''}}</span>
                                </div>

                                <div class="dsn-btn dsn-btn-shape d-inline-flex d-flex no-padding text-upper">

                                    @if(isset($project->url_project))
                                    <a class="button" href="{{ $project->url_project }}" target="_blank">
                                        <span class="title-btn p-relative  z-index-1" data-animate-text="View project">
                                            <span>View project</span>
                                        </span>
                                    </a>
                                    @endif
                                    <span class="icon background-section theme-color">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </span>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="pl-30 pr-30">
                    <div class="box-img p-relative before-z-index has-border-radius" data-overlay="7" data-dsn-grid="move-up">
                        <img class="cover-bg-img has-border-radius" src="{{ $project->img_begin ? asset("../storage/$project->img_begin") : asset("/assets/img/portfolio/project1/1.jpg") }}" alt="">
                    </div>
                </div>

            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">

                <div class="project-info section-margin">
                    <div class="container">
                        <div class="section-title dsn-fill mb-70 d-flex flex-column">
                            <span class="sub-heading mb-5">project info</span>
                            <h2 class="title ">{{ $project->title_employees ? $project->title_employees : ''}}</h2>
                        </div>

                        <ul class="dsn-style-list">
                            @if(isset($project->employee_job_1) && isset($project->employee_1))
                            <li class="d-flex justify-content-between align-items-center">
                                <h5 class="title-block body-color text-upper">{{ $project->employee_job_1 }}</h5>
                                <h4 class="title-block text-upper">{{ $project->employee_1 }}</h4>
                            </li>
                            @endif
                            @if(isset($project->employee_job_2) && isset($project->employee_2))
                            <li class="d-flex justify-content-between align-items-center">
                                <h5 class="title-block body-color text-upper">{{ $project->employee_job_2 }}</h5>
                                <h4 class="title-block text-upper">{{ $project->employee_2 }}</h4>
                            </li>
                            @endif
                            @if(isset($project->employee_job_3) && isset($project->employee_3))
                            <li class="d-flex justify-content-between align-items-center">
                                <h5 class="title-block body-color text-upper">{{ $project->employee_job_3 }}</h5>
                                <h4 class="title-block text-upper">{{ $project->employee_3 }}</h4>
                            </li>
                            @endif
                            @if(isset($project->employee_job_4) && isset($project->employee_4))
                            <li class="d-flex justify-content-between align-items-center">
                                <h5 class="title-block body-color text-upper">{{ $project->employee_job_4 }}</h5>
                                <h4 class="title-block text-upper">{{ $project->employee_4 }}</h4>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <section class="our-work section-margin not-filter dsn-filter " data-dsn-option='{"speed" : 15 , "start" : "-40px top"}'>
                    <div class="dsn-container">
                        <div class="dsn-cards">
                            <div class="dsn-posts flexibly-hover">
                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img src="{{ $project->img_1 ? asset("../storage/$project->img_1") : asset("/assets/img/portfolio/project1/2.jpg") }}" class="cover-bg-img" alt="" />
                                    </div>
                                </div>

                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img src="{{ $project->img_3 ? asset("../storage/$project->img_3") : asset("/assets/img/portfolio/project1/4.jpg") }}" class="cover-bg-img" alt="" />
                                    </div>
                                </div>

                                <div class="dsn-item-post grid-item p-relative">
                                    <div class="box-image-bg w-100 h-500">
                                        <img src="{{ $project->img_2 ? asset("../storage/$project->img_2") : asset("/assets/img/portfolio/project1/3.jpg") }}" class="cover-bg-img" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="over-hidden section-margin">
                    <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">

                        <div class="effect-popup before-z-index h-100" data-src="{{ $project->img_4 ? asset("../storage/$project->img_4") : asset("/assets/img/portfolio/project1/5.jpg") }}" data-caption="{{ $project->img_description_4 ? $project->img_description_4 : 'img_description_4'}}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                            <img class="cover-bg-img has-direction" src="{{ $project->img_4 ? asset("../storage/$project->img_4") : asset("/assets/img/portfolio/project1/5.jpg") }}" alt="">
                        </div>
                        <div class="cap"><span>{{ $project->img_description_4 ? $project->img_description_4 : 'img_description_4'}}</span></div>
                    </div>
                </div>

                <div class="container p-relative mb-section">
                    <div class="p-relative img-box-parallax before-z-index has-popup">
                        <div class="effect-popup before-z-index h-v-70 " data-src="{{ $project->img_5 ? asset("../storage/$project->img_5") : asset("/assets/img/portfolio/project1/6.jpg") }}" data-caption="{{ $project->img_description_5 ? $project->img_description_5 : 'img_description_5'}}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                            <img class="cover-bg-img has-border-radius" src="{{ $project->img_5 ? asset("../storage/$project->img_5") : asset("/assets/img/portfolio/project1/6.jpg") }}" alt="">
                        </div>
                        <div class="cap">
                            <span>{{ $project->img_description_5 ? $project->img_description_5 : 'img_description_5'}}</span>
                        </div>
                    </div>
                </div>

            </div>

            <section class="next-projects p-relative section-padding d-flex flex-column justify-content-center">
                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0 before-z-index" data-overlay="5" data-dsn-grid="move-up">
                    <img class="cover-bg-img" src="{{ $nextProject->img_1 ? asset("../storage/$nextProject->img_1") : asset("/assets/img/portfolio/project2/1.jpg") }}" alt="">
                </div>
                <div class="container p-relative">
                    <div class="box-content w-100 d-flex flex-column p-relative z-index-1">

                        <a href="/servico/{{ $nextProject->id }}" class="btn-arrow effect-ajax v-light background-main">
                            <span class="icon theme-color dsn-icon" data-dsn-iconSize="45px">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </span>
                        </a>

                        <h2 class="title-lg text-upper" data-dsn-ajax="title"><a href="/servico/{{ $nextProject->id }}" class="effect-ajax">{{ $nextProject->title }}</a></h2>


                        <div class="d-flex justify-content-between align-items-center w-100 mt-30">
                            <div class="cat p-0">
                                @if(isset($nextProject->work_1))
                                <span class="background-section heading-color">{{ $nextProject->work_1 }}</span>
                                @endif
                                @if(isset($nextProject->work_2))
                                <span class="background-section heading-color">{{ $nextProject->work_2 }}</span>
                                @endif
                                @if(isset($nextProject->work_3))
                                <span class="background-section heading-color">{{ $nextProject->work_3 }}</span>
                                @endif
                            </div>

                            <div class="item">
                                <span class="text-upper"><span>NEXT - </span> PROJECT</span>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
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
