<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @include('components.headmetatags',[ 'arg_object' => $args ])

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
            bottom: 0;
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

        span .word {
            height: 1.15em !important;
        }

        .dsn-service .title .word {
            height: 1.37em !important;
        }

        .dsn-testimonials .title .word {
            height: 1.37em !important;
        }

        .section-title {
            height: auto !important;
        }

        .prev-paginate {
            border: 0px !important;
            padding-right: 1em !important;
        }

        .prev-paginate .dsn-icon {
            height: 100%;
        }

        .next-paginate {
            border: 0px !important;
            padding-right: 1em !important;
        }

        .next-paginate .dsn-icon {
            height: 100%;
        }

        .length-testimonial-description {
            font-size: 18px !important;
        }

        .text-size-about-us-description {
            font-size: 18px;
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

    <div class="modal fade modal-show-terms" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Aceitação dos Termos de Uso</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Ao acessar e utilizar este site, você concorda em cumprir e estar vinculado aos termos e condições estabelecidos nesta página. Caso não concorde com os termos, solicitamos que não utilize o site. O site Concordia reserva-se o direito de modificar, alterar ou atualizar os termos de uso a qualquer momento, e recomendamos que você revise esta página periodicamente para manter-se informado sobre as alterações.</p>
                </div>
                <div class="modal-footer justify-content-between modal-terms-buttons">
                    <button type="button" class="btn btn-default bt-modal-term-no" data-dismiss="modal" onclick="document.getElementById('modal-lg').style.display = 'none'">Não aceito</button>
                    <button type="button" class="btn btn-primary bt-modal-term-accept" onclick="document.getElementById('modal-lg').style.display = 'none'">Aceito</button>
                </div>
            </div>
        </div>
    </div>

    <main id="main_root" class="main-root">

        <!-- ========== Menu ========== -->
        @include('components.sitemenu',['menuWorks'=>$menuWorks])
        <!-- ========== End Menu ========== -->

        <div id="dsn-scrollbar">
            <!-- ========== Slider Parallax ========== -->
            <header class="dsn-section-padding v-dark-head h-100-v p-relative">
                <div class="main-slider has-horizontal  active-nav-slider dsn-webgl has-paginate dsn-header-animation" data-dsn-webgl='{"displacement" : "assets/img/displacement/10.jpg"}' data-dsn-option='{"direction":"horizontal","allowTouchMove":true,"watchSlidesProgress":true,"grabCursor":true,"mousewheel":false}'>

                    <div class="content-slider slide-inner h-100 over-hidden">
                        <div class="bg-container p-absolute dsn-hero-parallax-img  w-100 h-100 z-index-1">
                            <div class="swiper swiper-container  h-100">
                                <div class="swiper-wrapper">
                                    @foreach($projects as $id => $project)
                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 before-z-index" data-overlay="6">
                                            <img loading="lazy" src="{{ isset($project->img_begin) ? asset("../storage/$project->img_begin") : asset("/assets/img/portfolio/project4/1.jpg")}}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                        </div>
                                        <div class="slide-content p-absolute">
                                            <h2 class="title-lg has-box-mod p-relative">
                                                <a data-dsn-split="chars" class="effect-ajax text-upper" href="project-4.html" data-dsn-ajax="slider">
                                                    {{ $project->title }}
                                                </a>
                                            </h2>

                                            <div class="d-flex  justify-content-between align-items-center w-100 mt-30">
                                                <div class="cat head-meta p-0">
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

                                                <p class="item description">
                                                    <span class="text-upper"><span>{{ $project->employee_job_1 ? $project->employee_job_1 : ''}}</span> {{ $project->employee_1 ? $project->employee_1 : ''}}</span>
                                                </p>

                                                <div class="dsn-btn dsn-btn-shape d-inline-flex d-flex no-padding text-upper">
                                                    @if(isset($project->url_project))
                                                    <a class="button effect-ajax" href="{{ $project->url_project }}" target="_blank">
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
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="dsn-slider-content dsn-container  dsn-hero-parallax-title p-relative h-100 w-100  d-flex align-items-end w-100 h-100 z-index-2">
                        </div>

                        <div class="progress-nav mt-40">
                            <div class="progress-w">
                                <div class="progress-w-after"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-num">
                        <span class="sup active swiper-pagination-custom">01</span>
                    </div>
                    <div class="dsn-nex-prev v-dark-head d-flex">
                        <div class="prev">
                            <div class="dsn-wrapper h-100"></div>
                            <h5 class="heading-color">
                                {{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "ANTERIOR" : "PREV" : "ANTERIOR" }}
                            </h5>
                        </div>

                        <div class="next dsn-active">
                            <div class="dsn-wrapper h-100"></div>
                            <h5 class="heading-color">
                                {{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "PRÓXIMO" : "NEXT" : "PRÓXIMO" }}
                            </h5>
                        </div>
                    </div>

                </div>
            </header>
            <!-- ========== End Slider Parallax ========== -->

            <div id="page_wrapper" class="wrapper">

                <!-- ========== About Us ========== -->
                <section class="about-section section-padding p-relative">
                    <div class="container">
                        <div class="d-grid grid-lg-2">
                            <div class="box-text p-relative">
                                <div class="bg-pattern p-absolute w-100 "></div>
                                <h2 class="title mb-30 dsn-fill">
                                    <span style="padding-left:0%;" data-dsn-animation='{"from":{"paddingLeft":"0%"},"to":{"paddingLeft":"5%"},"responsive":["tablet","desktop"]}'>
                                        {{ $args->about_title ? $args->about_title : 'about_title' }}
                                    </span>
                                </h2>
                                <p class="dsn-up">
                                    {{ $args->about_description ? $args->about_description : 'about_description' }}
                                </p>

                                <div class="dsn-btn dsn-btn-shape mt-30 d-flex">

                                    <a class="button background-theme effect-ajax" href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/sobre" : "/eng/sobre" : "/pt/sobre" }}">
                                        <span class="title-btn p-relative  z-index-1 heading-color" data-animate-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "SOBRE NÓS" : "ABOUT US" : "SOBRE NÓS" }}">
                                            <span>{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "SOBRE NÓS" : "ABOUT US" : "SOBRE NÓS" }}</span>
                                        </span>
                                    </a>

                                    <span class="icon background-theme">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </span>

                                </div>
                            </div>

                            <div class="corner-box over-hidden">
                                <div class="corner__lb"></div>
                                <div class="box-img h-100 img-box-parallax before-z-index dsn-animate dsn-effect-down" data-dsn-triggerhook="bottom" data-dsn-grid="move-up" data-overlay="0">
                                    <img class="cover-bg-img" src="{{ $args->about_img ? asset("../storage/$args->about_img") : asset("/assets/img/hero.jpg") }}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="experience d-flex justify-content-between background-section mt-30 d-flex dsn-layout-fade-up">

                            <div class="facts-inner p-10 d-grid grid-lg-2 gap-10 d-grid-no-space">
                                <div class="fact-item background-main has-border-radius p-30 dsn-up">
                                    <h3 class="title d-flex align-items-start justify-content-center">
                                        {{ $args->about_num_1 ? $args->about_num_1 : 'about_num_1' }}
                                    </h3>
                                    <p class="text-upper mt-20 v-light background-main p-5 text-center heading-color">
                                        {{ $args->about_description_1 ? $args->about_description_1 : 'about_description_1' }}
                                    </p>
                                </div>

                                <div class="fact-item background-main has-border-radius p-30 dsn-up">
                                    <h3 class="title d-flex align-items-start justify-content-center">
                                        {{ $args->about_num_2 ? $args->about_num_2 : 'about_num_2' }}
                                    </h3>
                                    <p class="text-upper mt-20 v-light background-main p-5 text-center heading-color">
                                        {{ $args->about_description_2 ? $args->about_description_2 : 'about_description_2' }}
                                    </p>
                                </div>

                            </div>

                            <div class="box-video dsn-up">
                                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0 dsn-hero-parallax-img before-z-index h-100" data-overlay="5">
                                    <img class="cover-bg-img" src="{{ $args->about_img_3 ? asset("../storage/$args->about_img_3") : asset("/assets/img/bg-video.jpg") }}" alt="">
                                </div>
                                <div class="ex d-flex align-items-end h-100 p-relative z-index-1">
                                    <h2 class="title theme-color dsn-animate-number">
                                        <span class="animate-number">
                                            {{ $args->about_num_3 ? $args->about_num_3 : 'about_num_3' }}
                                        </span>
                                    </h2>
                                    <span class="ml-5 text-upper heading-color">
                                        {{ $args->about_description_3 ? $args->about_description_3 : 'about_description_3' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========== End About Us ========== -->

                <!-- ==========  Service ========== -->
                <section class="dsn-service padding-service section-padding background-section hover-box-item dsn-layout-fade-up">
                    <div class="container">
                        <div class="section-title dsn-fill mb-70 d-flex flex-column">
                            <span class="sub-heading mb-5">{{ $args->pre_title_1 ? $args->pre_title_1 : 'pre_title_1' }}</span>
                            <h2 class="title ">
                                {{ $args->service_title ? $args->service_title : 'service_title' }}
                            </h2>
                        </div>
                    </div>

                    <div class="container">
                        <div class="d-grid grid-lg-3 grid-md-2 dsn-icon-theme-color">
                            <div class="service-item grid-item background-main has-border-radius p-relative">
                                <div class="service-item-inner dsn-up">

                                    <h4 class="title-block">
                                        {{ $args->service_title_1 ? $args->service_title_1 : 'service_title_1' }}
                                    </h4>
                                    <p class="mt-30">
                                        {{ $args->service_description_1 ? $args->service_description_1 : 'service_description_1' }}
                                    </p>

                                    <div class="number mt-50">
                                        <div class="big-text">01</div>
                                    </div>

                                    <div class="icon">
                                        @if(isset($args->service_img_1))
                                        <img class="cover-bg-img w-h-10-em" src="{{ asset("../storage/$args->service_img_1") }}" alt="">
                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 61" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27 8.5V26.5C27 30.0898 24.0899 33 20.5 33C16.9102 33 14 30.0899 14 26.5V8.5C14 4.91015 16.9102 2 20.5 2C24.0899 2 27 4.91015 27 8.5ZM12 8.5C12 3.80558 15.8056 0 20.5 0C25.1944 0 29 3.80558 29 8.5V26.5C29 31.1944 25.1944 35 20.5 35C15.8056 35 12 31.1944 12 26.5V8.5ZM41.5 22C44.5376 22 47 19.5376 47 16.5C47 13.4624 44.5376 11 41.5 11C38.4624 11 36 13.4624 36 16.5C36 19.5376 38.4624 22 41.5 22ZM41.5 24C45.6421 24 49 20.6421 49 16.5C49 12.3579 45.6421 9 41.5 9C37.3579 9 34 12.3579 34 16.5C34 20.6421 37.3579 24 41.5 24ZM42.8632 58.6403C39.1021 60.1982 35.071 61 31 61C26.929 61 22.8979 60.1982 19.1368 58.6403C15.3757 57.0824 11.9583 54.7989 9.07968 51.9203C6.20107 49.0417 3.91763 45.6243 2.35973 41.8632C0.801836 38.1021 0 34.071 0 30V29H0.999999L7.5 29L7.5 31L2.01725 31C2.13687 34.4672 2.87779 37.8876 4.20749 41.0978C5.66487 44.6163 7.801 47.8132 10.4939 50.5061C13.1868 53.199 16.3837 55.3351 19.9022 56.7925C23.4206 58.2499 27.1917 59 31 59C34.8083 59 38.5794 58.2499 42.0978 56.7925C45.6163 55.3351 48.8132 53.199 51.5061 50.5061C54.199 47.8132 56.3351 44.6163 57.7925 41.0978C59.1222 37.8877 59.8631 34.4672 59.9828 31L33.5 31V29L61 29H62V30C62 34.071 61.1982 38.1021 59.6403 41.8632C58.0824 45.6243 55.7989 49.0417 52.9203 51.9203C50.0417 54.7989 46.6243 57.0824 42.8632 58.6403Z" fill="#121212"></path>
                                        </svg>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="service-item grid-item background-main has-border-radius p-relative">
                                <div class="service-item-inner dsn-up">

                                    <h4 class="title-block">
                                        {{ $args->service_title_2 ? $args->service_title_2 : 'service_title_2' }}
                                    </h4>
                                    <p class="mt-30">
                                        {{ $args->service_description_2 ? $args->service_description_2 : 'service_description_2' }}
                                    </p>

                                    <div class="number mt-50">
                                        <div class="big-text">02</div>
                                    </div>

                                    <div class="icon">
                                        @if(isset($args->service_img_2))
                                        <img class="cover-bg-img w-h-10-em" src="{{ asset("../storage/$args->service_img_2") }}" alt="">
                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill="none">
                                            <path d="M30.0115 7.23803e-06C24.723 -0.00367286 19.5281 1.39604 14.9573 4.05635C14.2603 4.47264 13.573 4.90839 12.9147 5.3634C7.44186 9.15007 3.38539 14.6509 1.38526 20.9984C-0.614867 27.3458 -0.444969 34.1786 1.86838 40.4188C1.96519 40.7092 2.08145 40.9899 2.19762 41.2706C2.39124 41.7482 2.59467 42.2131 2.80765 42.6649C2.8851 42.8391 2.96255 43.0135 3.04968 43.1877C5.89744 49.0029 10.5494 53.7411 16.3114 56.695C22.0734 59.6489 28.6363 60.6601 35.0202 59.5776C41.4041 58.4951 47.2666 55.377 51.7327 50.6887C56.1988 46.0004 59.0289 39.9934 59.8004 33.5645C59.8876 32.8771 59.9553 32.1802 59.9843 31.4831C59.9843 30.9894 59.9843 30.515 59.9843 30.0116C59.9843 22.0587 56.8278 14.4309 51.208 8.8038C45.5881 3.17665 37.9644 0.010269 30.0115 7.23803e-06ZM1.93621 30.0116C1.93916 25.2663 3.14495 20.5993 5.44066 16.4464C7.73637 12.2934 11.0471 8.7901 15.0639 6.26368C18.2802 7.83988 20.9705 10.315 22.8088 13.3891C22.0143 13.9806 21.4205 14.8014 21.1073 15.7411C20.7941 16.6807 20.7767 17.6939 21.0574 18.6438C21.3382 19.5936 21.9035 20.4345 22.6772 21.053C23.4509 21.6714 24.3955 22.0376 25.3839 22.1021C25.3839 22.3345 25.3839 22.5571 25.3839 22.7895C25.38 24.5233 25.129 26.2478 24.6385 27.9108C16.7655 30.074 9.55333 34.1592 3.64979 39.7993C2.49553 36.6661 1.91506 33.3505 1.93621 30.0116ZM23.8835 30.147C22.4514 33.4234 20.0952 36.2115 17.1034 38.1699C14.1117 40.1283 10.6139 41.1722 7.03819 41.174C6.40763 41.176 5.77747 41.1436 5.15042 41.077C10.4659 36.0325 16.878 32.288 23.8835 30.1373V30.147ZM30.0115 58.0869C24.8848 58.0846 19.8567 56.6786 15.4723 54.0213C11.088 51.3641 7.51493 47.5571 5.14073 43.0133C5.77 43.0714 6.39928 43.1102 7.07696 43.1102C11.2855 43.1049 15.3886 41.7934 18.8203 39.3571C22.252 36.9207 24.8431 33.4795 26.236 29.5081C36.8666 26.8406 48.0935 27.9458 57.9999 32.6351C57.3459 39.6025 54.1135 46.0746 48.9361 50.7828C43.7587 55.491 37.0095 58.0958 30.0115 58.0869ZM58.0869 30.5635C48.3041 26.105 37.327 24.9859 26.8458 27.3783C27.1992 25.8708 27.3811 24.3282 27.388 22.7798C27.388 22.4603 27.388 22.1408 27.388 21.8117C28.4446 21.4145 29.3293 20.6607 29.8889 19.6804C30.4485 18.7001 30.6478 17.5551 30.4526 16.4433C30.2573 15.3315 29.6797 14.3229 28.8196 13.5919C27.9595 12.8609 26.8709 12.4537 25.7422 12.4404C25.3766 12.4407 25.0123 12.4861 24.6578 12.5758C22.8395 9.47138 20.2392 6.89784 17.1162 5.11168C21.3949 2.88658 26.1747 1.80118 30.9948 1.96011C35.8149 2.11904 40.513 3.51693 44.6358 6.01905C48.7587 8.52117 52.1673 12.0431 54.5335 16.2455C56.8997 20.4478 58.1435 25.1889 58.145 30.0116C58.0869 30.1858 58.0772 30.3698 58.0675 30.5538L58.0869 30.5635Z">
                                            </path>
                                        </svg>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="service-item grid-item background-main has-border-radius p-relative">
                                <div class="service-item-inner dsn-up">

                                    <h4 class="title-block">
                                        {{ $args->service_title_3 ? $args->service_title_3 : 'service_title_3' }}
                                    </h4>
                                    <p class="mt-30">
                                        {{ $args->service_description_3 ? $args->service_description_3 : 'service_description_3' }}
                                    </p>

                                    <div class="number mt-50">
                                        <div class="big-text">03</div>
                                    </div>

                                    <div class="icon">
                                        @if(isset($args->service_img_3))
                                        <img class="cover-bg-img w-h-10-em" src="{{ asset("../storage/$args->service_img_3") }}" alt="">
                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 61" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27 8.5V26.5C27 30.0898 24.0899 33 20.5 33C16.9102 33 14 30.0899 14 26.5V8.5C14 4.91015 16.9102 2 20.5 2C24.0899 2 27 4.91015 27 8.5ZM12 8.5C12 3.80558 15.8056 0 20.5 0C25.1944 0 29 3.80558 29 8.5V26.5C29 31.1944 25.1944 35 20.5 35C15.8056 35 12 31.1944 12 26.5V8.5ZM41.5 22C44.5376 22 47 19.5376 47 16.5C47 13.4624 44.5376 11 41.5 11C38.4624 11 36 13.4624 36 16.5C36 19.5376 38.4624 22 41.5 22ZM41.5 24C45.6421 24 49 20.6421 49 16.5C49 12.3579 45.6421 9 41.5 9C37.3579 9 34 12.3579 34 16.5C34 20.6421 37.3579 24 41.5 24ZM42.8632 58.6403C39.1021 60.1982 35.071 61 31 61C26.929 61 22.8979 60.1982 19.1368 58.6403C15.3757 57.0824 11.9583 54.7989 9.07968 51.9203C6.20107 49.0417 3.91763 45.6243 2.35973 41.8632C0.801836 38.1021 0 34.071 0 30V29H0.999999L7.5 29L7.5 31L2.01725 31C2.13687 34.4672 2.87779 37.8876 4.20749 41.0978C5.66487 44.6163 7.801 47.8132 10.4939 50.5061C13.1868 53.199 16.3837 55.3351 19.9022 56.7925C23.4206 58.2499 27.1917 59 31 59C34.8083 59 38.5794 58.2499 42.0978 56.7925C45.6163 55.3351 48.8132 53.199 51.5061 50.5061C54.199 47.8132 56.3351 44.6163 57.7925 41.0978C59.1222 37.8877 59.8631 34.4672 59.9828 31L33.5 31V29L61 29H62V30C62 34.071 61.1982 38.1021 59.6403 41.8632C58.0824 45.6243 55.7989 49.0417 52.9203 51.9203C50.0417 54.7989 46.6243 57.0824 42.8632 58.6403Z" fill="#121212"></path>
                                        </svg>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- ========== End Service ========== -->

                <!-- ==========  Work ========== -->
                <section class="our-work section-margin has-parallax-image ">

                    <div class="container">
                        <div class="section-title dsn-fill mb-70 d-flex flex-column">
                            <span class="sub-heading mb-5">{{ $args->pre_title_2 ? $args->pre_title_2 : 'pre_title_2' }}</span>
                            <h2 class="title ">{{ $args->portifolio_title ? $args->portifolio_title : 'portifolio_title' }}</h2>
                        </div>
                    </div>

                    <div class="dsn-cards root-posts img-h80">
                        <div class="dsn-grid-layout dsn-grid dsn-posts dsn-post-type-cards use-horizontal-scroll box-image-normal" data-dsn-option='{"speed":10,"start":"0"}'>
                            @foreach($portifolios as $id => $portifolio)
                            <article class="dsn-item-post grid-item h-max-content over-hidden p-relative z-index-2">
                                <div class="box-image-bg w-100 over-hidden before-z-index dsn-swiper-parallax-transform has-border-radius" data-overlay="7">
                                    <img src="{{ isset($portifolio->img_1) ? asset("../storage/$portifolio->img_1") : asset("/assets/img/portfolio/project1/1.jpg")}}" class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                </div>
                                <div class="content d-flex flex-column p-absolute bottom-0 left-0 w-100 p-20 z-index-1">
                                    <div class="cat p-0 d-flex">
                                        @if(isset($portifolio->type_1))
                                        <span class="background-main heading-color">{{ $portifolio->type_1 }}</span>
                                        @endif
                                        @if(isset($portifolio->type_2))
                                        <span class="background-main heading-color">{{ $portifolio->type_2 }}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-15">
                                        <h2 class="post-title word-wrap d-inline-block title-block text-upper text-upper">
                                            <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}{{ $portifolio->id }}" class="effect-ajax" data-dsn-ajax="work">{{ $portifolio->title }}</a>
                                        </h2>
                                        <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}portifolio/{{ $portifolio->id }}" class="dsn-btn dsn-btn-shape d-flex background-section border-circle effect-ajax">
                                            <span class="icon v-dark background-section">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- ========== End Work ========== -->

                <!-- ==========  Award ========== -->
                <div class="section-seat section-padding background-section p-relative ">
                    <div class="p-absolute top-0 left-0 bottom-0 w-100">
                        <div class="img-box-parallax before-z-index h-100" data-overlay="4" data-dsn-grid="move-up">
                            <img src="{{ isset($args->frame_img) ? asset("../storage/$args->frame_img") : asset("/assets/img/img-seat.jpg")}}" class="has-bigger-scale cover-bg-img has-direction" alt="">
                        </div>
                    </div>
                    <div class="bg-line"></div>

                    <div class="container z-index-1 p-relative">
                        <div class="p-relative d-grid grid-lg-2 align-items-center justify-content-center text-center ml-auto mr-auto ">


                            <div class="ex content-blure has-border-radius">
                                <h2 class="big-text">{{ $args->frame_num_1 ? $args->frame_num_1 : 'frame_num_1' }}</h2>
                                <h5 class="text-upper fw-bold mt-15">{{ $args->frame_legend_1 ? $args->frame_legend_1 : 'frame_legend_1' }}</h5>
                                <p class="mt-30 ml-auto mr-auto text-upper">{{ $args->frame_description_1 ? $args->frame_description_1 : 'frame_description_1' }}</p>
                            </div>

                            <div class="ex content-blure has-border-radius">
                                <h2 class="big-text">{{ $args->frame_num_2 ? $args->frame_num_2 : 'frame_num_2' }}</h2>
                                <h5 class="text-upper fw-bold mt-15">{{ $args->frame_legend_2 ? $args->frame_legend_2 : 'frame_legend_2' }}</h5>
                                <p class="mt-30 ml-auto mr-auto text-upper">{{ $args->frame_description_2 ? $args->frame_description_2 : 'frame_description_2' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End Award ========== -->

                <!-- ========== ABOUT US ========== -->

                <div class="section-margin text-center">
                    <div class="container">
                        <h3 class="title text-upper mb-30">{{ $args->about_us_title ? $args->about_us_title : 'about_us_description' }}</h3>
                        <p class="max-w750 text-size-about-us-description">
                            @php
                            if($args->about_us_description) {
                            echo $args->about_us_description;
                            } else {
                            echo "about_us_description";
                            }
                            @endphp
                        </p>
                    </div>
                </div>

                <!-- ========== End ABOUT US ========== -->

                <!-- ==========   testimonials ========== -->
                <section class="dsn-testimonials testimonials-small full-testimonials section-margin dsn-swiper" data-dsn-option='{"spaceBetween":30,"centeredSlides":false,"direction":"horizontal","autoHeight":false,"slideToClickedSlide":false,"grabCursor":true,"mousewheel":false,"loop":true,"parallax":false,"slidesPerGroup":1,"slidesPerView":2,"speed":1000,"effect":"card"}'>
                    <div class="container">
                        <div class="section-title dsn-fill d-flex flex-column mb-70">
                            <span class="sub-heading mb-5">{{ $args->pre_title_3 ? $args->pre_title_3 : 'pre_title_3' }}</span>
                            <h2 class="title ">{{ $args->testimonials_title ? $args->testimonials_title : 'testimonials_title' }}</h2>
                            <p class="mt-20">{{ $args->testimonials_description ? $args->testimonials_description : 'testimonials_description' }}</p>
                        </div>
                        <div class="testimonials-inner d-flex over-hidden">
                            <div class="prev-paginate">
                                <span class="dsn-icon dsn-icon-heading-color background-section">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="">
                                        <path d="M6.81496 0.699692L7.66349 1.54822L2.31371 6.898L16.4017 6.88707L16.4008 8.08442L2.31278 8.09535L7.65426 13.4368L6.80442 14.2867L0.0161911 7.49846L6.81496 0.699692Z" fill=""></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="swiper swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach($testimonials as $id => $testimonial)
                                    @if($testimonial->show == "homepage")
                                    <div class="swiper-slide testimonal-item background-section has-border-radius d-flex flex-column align-items-center">
                                        <div class="content">
                                            <div class="rating">
                                                <h3 class="heading">{{ $testimonial->num ? $testimonial->num : 'testimonials_num_1' }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                    </svg>
                                                </h3>

                                                <p class="text-upper">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "de 5 estrelas" : "out of 5 stars" : "de 5 estrelas" }}</p>
                                            </div>

                                            <p class="title-block mt-50 length-testimonial-description">
                                                {{ $testimonial->description ? $testimonial->description : 'testimonials_description_1' }}
                                            </p>

                                            <div class="quote mt-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 40 30" fill="none">
                                                    <path d="M0 0V30L15.0025 15V0H0Z" fill="#030104"></path>
                                                    <path d="M24.9961 0V30L39.9986 15V0H24.9961Z" fill="#030104">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="box-authoer w-100 v-light background-main p-20">
                                            <div class="authoer d-flex">
                                                <div class="text background-section">
                                                    <h5>{{ $testimonial->company ? $testimonial->company : 'testimonials_company_1' }}</h5>
                                                    <span>{{ $testimonial->name ? $testimonial->name : 'testimonials_name_1' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                </div>
                            </div>
                            <div class="next-paginate">
                                <span class="dsn-icon dsn-icon-heading-color background-section">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="">
                                        <path d="M10.185 0.699692L9.33651 1.54822L14.6863 6.898L0.598282 6.88707L0.599212 8.08442L14.6872 8.09535L9.34574 13.4368L10.1956 14.2867L16.9838 7.49846L10.185 0.699692Z" fill=""></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ==========  End testimonials ========== -->

                <!-- ========== Team ==========  Pegar as oportunidades e mostra-las -->
                <section class="dsn-team section-padding background-section">
                    <div class="container">
                        <div class="section-title dsn-fill mb-70 d-flex flex-column">
                            <span class="sub-heading mb-5">{{ $args->pre_title_4 ? $args->pre_title_4 : 'pre_title_4' }}</span>
                            <h2 class="title ">
                                {{ $args->employee_title ? $args->employee_title : 'Oportunidades' }}
                            </h2>
                        </div>
                    </div>

                    <div class="container">
                        <div class="d-grid grid-lg-3 grid-md-2">
                            <div class="team-item d-flex align-items-end">
                                <a href="{{ $args->employee_url_1 ? $args->employee_url_1 : '#' }}">
                                    <div class="box-img">
                                        <img class="cover-bg-img has-border-radius" src="{{ $args->employee_img_1 ? asset("../storage/$args->employee_img_1") : asset("/assets/img/team/1.jpg")}}" alt="">
                                    </div>
                                    <div class="content d-flex justify-content-between w-100">
                                        <div class="text">
                                            <h4 class="title-block text-upper mb-5">
                                                {{ $args->employee_name_1 ? $args->employee_name_1 : 'title' }}
                                            </h4>
                                            <span>
                                                {{ $args->employee_work_1 ? $args->employee_work_1 : 'description' }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="team-item d-flex align-items-end">
                                <a href="{{ $args->employee_url_2 ? $args->employee_url_2 : '#' }}">
                                    <div class="box-img">
                                        <img class="cover-bg-img has-border-radius" src="{{ $args->employee_img_2 ? asset("../storage/$args->employee_img_2") : asset("/assets/img/team/1.jpg")}}" alt="">
                                    </div>
                                    <div class="content d-flex justify-content-between w-100">
                                        <div class="text">
                                            <h4 class="title-block text-upper mb-5">
                                                {{ $args->employee_name_2 ? $args->employee_name_2 : 'title' }}
                                            </h4>
                                            <span>
                                                {{ $args->employee_work_2 ? $args->employee_work_2 : 'description' }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="team-item d-flex align-items-end">
                                <a href="{{ $args->employee_url_3 ? $args->employee_url_3 : '#' }}">
                                    <div class="box-img">
                                        <img class="cover-bg-img has-border-radius" src="{{ $args->employee_img_3 ? asset("../storage/$args->employee_img_3") : asset("/assets/img/team/1.jpg")}}" alt="">
                                    </div>
                                    <div class="content d-flex justify-content-between w-100">
                                        <div class="text">
                                            <h4 class="title-block text-upper mb-5">
                                                {{ $args->employee_name_3 ? $args->employee_name_3 : 'title' }}
                                            </h4>
                                            <span>
                                                {{ $args->employee_work_3 ? $args->employee_work_3 : 'description' }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--
                            @ foreach($oportunidades as $id => $oportunidade)
                            <div class="team-item d-flex align-items-end">
                                <div class="box-img">
                                    <img class="cover-bg-img has-border-radius" src="{ { $oportunidade->img_1 ? asset("../storage/$oportunidade->img_1") : asset("/assets/img/team/1.jpg")}}" alt="">
                                </div>
                                <div class="content d-flex justify-content-between w-100">
                                    <div class="text">
                                        <h4 class="title-block text-upper mb-5">
                                            { { $oportunidade->title_1 ? $oportunidade->title_1 : 'title_1' }}
                                        </h4>
                                        <span>
                                            { { $oportunidade->description ? $oportunidade->description : 'description' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @ endforeach
                            -->
                        </div>
                    </div>
                </section>
                <!-- ========== End Team ========== -->

                <!-- ========== Brand ========== -->
                @if(isset($args->brands_bg_img))
                <div class="dsn-brand brand-radu p-relative section-padding background-section dsn-skew-scroll">
                    <div class="p-absolute top-0 left-0 bottom-0 w-100 h-100">
                        <div class="img-box-parallax before-z-index w-100 h-100 p-absolute top-0 bottom-0 left-0" data-overlay="7" data-dsn-grid="move-up">
                            <img src="{{ asset("../storage/$args->brands_bg_img") }}" class="has-bigger-scale cover-bg-img has-direction" alt="">
                        </div>
                    </div>
                    <div class="container">
                        <div class="brand-inner d-grid grid-md-2 grid-lg-4  align-items-center p-relative z-index-1">
                            <div class="brand-boxs d-flex flex-column align-items-end">
                                @if(isset($args->brands_img_1))
                                <div class="brand-item brand-item-lg content-blure">
                                    <img src="{{ asset("../storage/$args->brands_img_1") }}" alt="">
                                </div>
                                @endif
                                @if(isset($args->brands_img_2))
                                <div class="brand-item brand-item-sm content-blure mt-30">
                                    <img src="{{ asset("../storage/$args->brands_img_2") }}" alt="">
                                </div>
                                @endif
                            </div>

                            <div class="brand-boxs d-flex flex-column align-items-start">
                                @if(isset($args->brands_img_5))
                                <div class="brand-item brand-item-lg content-blure">
                                    <img src="{{ asset("../storage/$args->brands_img_5") }}" alt="">
                                </div>
                                @endif
                                @if(isset($args->brands_img_6))
                                <div class="brand-item brand-item-sm content-blure mt-30">
                                    <img src="{{ asset("../storage/$args->brands_img_6") }}" alt="">
                                </div>
                                @endif
                            </div>

                            <div class="brand-boxs d-flex flex-column align-items-start">
                                @if(isset($args->brands_img_3))
                                <div class="brand-item brand-item-lg content-blure">
                                    <img src="{{ asset("../storage/$args->brands_img_3") }}" alt="">
                                </div>
                                @endif
                                @if(isset($args->brands_img_4))
                                <div class="brand-item brand-item-sm content-blure mt-30">
                                    <img src="{{ asset("../storage/$args->brands_img_4") }}" alt="">
                                </div>
                                @endif
                            </div>

                            <div class="brand-boxs d-flex flex-column align-items-start">
                                @if(isset($args->brands_img_5))
                                <div class="brand-item brand-item-lg content-blure">
                                    <img src="{{ asset("../storage/$args->brands_img_5") }}" alt="">
                                </div>
                                @endif
                                @if(isset($args->brands_img_6))
                                <div class="brand-item brand-item-sm content-blure mt-30">
                                    <img src="{{ asset("../storage/$args->brands_img_6") }}" alt="">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- ========== End Brand ========== -->

                <section class="next-page v-dark section-padding">
                    <div class="container">
                        <div class="tob-box d-flex justify-content-between align-items-end border-bottom pb-50 mb-50">
                            <h2 class="title text-upper">{{ $args->final_title ? $args->final_title : 'final_title' }}</h2>

                            <div class="dsn-btn dsn-btn-shape d-flex">

                                <a class="button background-main v-light effect-ajax" href="contact.html">
                                    <span class="title-btn p-relative  z-index-1 heading-color" data-animate-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Vamos falar!" : "Let's talk!" : "Vamos falar!" }}">
                                        <span>{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Vamos falar!" : "Let's talk!" : "Vamos falar!" }}</span>
                                    </span>
                                </a>

                                <span class="icon background-main v-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>

                            </div>
                        </div>
                    </div>

                    <div class="dsn-container dsn-right-container over-hidden">
                        <div class="bottom-box ">
                            <div class="d-grid custom-width">
                                <div class="text">
                                    <h4 class="title-block mb-15">{{ $args->sign_title ? $args->sign_title : 'sign_title' }}</h4>
                                    <p>{{ $args->sign_description ? $args->sign_description : 'sign_description' }}</p>
                                </div>

                                <div class="p-relative dsn-marquee over-hidden" data-dsn-option='{"speed":0,"duplicatedNumber":7,"duration":7000,"gap":60,"delayBeforeStart":1000,"direction":"left","duplicated":true,"pauseOnHover":false,"startVisible":true,"pauseOnCycle":false,"allowCss3Support":true}'>
                                    <h2 class="dsn-text-marquee d-flex title-lg">{{ $args->sign_rolling ? $args->sign_rolling : 'sign_rolling' }}</h2>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>

            </div>

            @include('components.footersite',['args'=> $args,'contact'=> $contact])

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
