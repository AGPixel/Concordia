<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ isset($metaTags->description) ? $metaTags->description : 'Description' }}">
    <meta name="keywords" content="{{ isset($metaTags->keywords) ? $metaTags->keywords : 'Keywords' }}">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($metaTags->title) ? $metaTags->title : 'Concordia' }} - Sobre</title>

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
            height: 1.16em !important;
            padding-top: 4px;
        }

        .m-top-0px {
            margin-top: 0px !important;
        }

        .word {
            height: 1.35em !important;
            padding-top: 4px;
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
                <!-- ========== Award Scroll Right ========== -->
                <div class="img-under-header p-relative">
                    <div class="dsn-marque p-relative h-100 over-hidden">
                        <div class="dsn-grid-layout  dsn-grid section-image section-move-image use-horizontal-scroll-image" data-dsn-option='{"speed":1,"start":"100%","end":"0%","pin":false}'>
                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_1 ? asset("../storage/$about->about_img_1") : asset("/assets/img/img-arc1.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_2 ? asset("../storage/$about->about_img_2") : asset("/assets/img/img-arc2.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_3 ? asset("../storage/$about->about_img_3") : asset("/assets/img/img-arc3.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_4 ? asset("../storage/$about->about_img_4") : asset("/assets/img/img-arc4.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_2 ? asset("../storage/$about->about_img_2") : asset("/assets/img/img-arc2.jpg")}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="dsn-marque p-relative h-100 over-hidden mt-20">
                        <div class="dsn-grid-layout  dsn-grid section-image section-move-image use-horizontal-scroll-image move-left" data-dsn-option='{"speed":1,"start":"100%","end":"0%","pin":false}'>
                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_1 ? asset("../storage/$about->about_img_1") : asset("/assets/img/img-arc1.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_2 ? asset("../storage/$about->about_img_2") : asset("/assets/img/img-arc2.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_3 ? asset("../storage/$about->about_img_3") : asset("/assets/img/img-arc3.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_4 ? asset("../storage/$about->about_img_4") : asset("/assets/img/img-arc4.jpg")}}" alt="">
                                </div>
                            </div>

                            <div class="grid-item">
                                <div class="image-item h-100">
                                    <img class="cover-bg-img has-border-radius" src="{{ $about->about_img_3 ? asset("../storage/$about->about_img_3") : asset("/assets/img/img-arc3.jpg")}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class=" over-hidden box-text has-border-radius v-middle d-flex align-items-center justify-content-center text-center dsn-fill">
                        <h2 class="title-lg"><span class="fw-200">{{ $about->about_title_1 ? $about->about_title_1 : 'Seamless' }}</span><br>{{ $about->about_title_2 ? $about->about_title_2 : 'Experience' }}</h2>
                    </div>
                </div>
                <!-- ========== End Award Scroll Right========== -->


                <!-- ========== Service========== -->
                <section class="services-lest-hover not-filter dsn-filter p-relative section-margin">
                    <div class="container">
                        <div class="section-title mb-70 d-flex flex-column">
                            <span class="sub-heading mb-10 dsn-fill">{{ $about->about_pre_title_1 ? $about->about_pre_title_1 : 'about_pre_title_1' }}</span>

                            <h2 class="title dsn-fill">{{ $about->about_service_title ? $about->about_service_title : 'Find a service That works for you' }}</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="dsn-cards">
                            <div class="dsn-posts dsn-style-hover-list dsn-layout-fade-up" data-dsn-fx="2">

                                @if(isset($about->about_service_1))
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up" data-img="{{ $about->about_service_img_1 ? asset("../storage/$about->about_service_img_1") : asset("/assets/img/services/1.jpg")}}">
                                    <h2 class="title"><a href="#" class="effect-ajax">{{ $about->about_service_1 }}</a></h2>
                                    <span class="number">01</span>
                                </div>
                                @endif
                                @if(isset($about->about_service_2))
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up" data-img="{{ $about->about_service_img_2 ? asset("../storage/$about->about_service_img_2") : asset("/assets/img/services/2.jpg")}}">
                                    <h2 class="title"><a href="#" class="effect-ajax">{{ $about->about_service_2 }}</a></h2>
                                    <span class="number">02</span>
                                </div>
                                @endif
                                @if(isset($about->about_service_3))
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up" data-img="{{ $about->about_service_img_3 ? asset("../storage/$about->about_service_img_3") : asset("/assets/img/services/3.jpg")}}">
                                    <h2 class="title"><a href="#" class="effect-ajax">{{ $about->about_service_3 }}</a></h2>
                                    <span class="number">03</span>
                                </div>
                                @endif
                                @if(isset($about->about_service_4))
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up" data-img="{{ $about->about_service_img_4 ? asset("../storage/$about->about_service_img_4") : asset("/assets/img/services/4.jpg")}}">
                                    <h2 class="title"><a href="#" class="effect-ajax">{{ $about->about_service_4 }}</a></h2>
                                    <span class="number">04</span>
                                </div>
                                @endif
                                @if(isset($about->about_service_5))
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up" data-img="{{ $about->about_service_img_5 ? asset("../storage/$about->about_service_img_5") : asset("/assets/img/services/5.jpg")}}">
                                    <h2 class="title"><a href="#" class="effect-ajax">{{ $about->about_service_5 }}</a></h2>
                                    <span class="number">05</span>
                                </div>
                                @endif
                                @if(isset($about->about_service_6))
                                <div class="item d-flex p-relative box-hover-image dsn-style-hover dsn-up" data-img="{{ $about->about_service_img_6 ? asset("../storage/$about->about_service_img_6") : asset("/assets/img/services/6.jpg")}}">
                                    <h2 class="title"><a href="#" class="effect-ajax">{{ $about->about_service_6 }}</a></h2>
                                    <span class="number">06</span>
                                </div>
                                @endif
                                <div class="dsn-up d-inline-flex">
                                    <div class="dsn-btn dsn-btn-shape  d-flex no-padding text-upper">

                                        <a class="button" href="#">
                                            <span class="title-btn p-relative  z-index-1" data-animate-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Explorar todos os serviços" : "Explore All Services" : "Explorar todos os serviços" }}">
                                                <span>{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Explorar todos os serviços" : "Explore All Services" : "Explorar todos os serviços" }}</span>
                                            </span>
                                        </a>

                                        <span class="icon background-main theme-color">
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
                </section>
                <!-- ========== End Service========== -->


                <!-- ========== award========== -->
                <section class="dsn-award section-padding section-margin background-section">
                    <div class="container">
                        <div class="box-text d-flex flex-column justify-content-center">
                            <div class="section-title d-flex flex-column mb-70 dsn-fill">
                                <h2 class="title">{{ $about->about_experience_title ? $about->about_experience_title : '10 Years of Experience' }}</h2>
                            </div>

                            @if(isset($about->about_experience_title_1) && isset($about->about_experience_description_1) && isset($about->about_experience_data_1))
                            <div class="award-item p-relative dsn-up">
                                <div class="d-grid grid-half-1">
                                    <div class="date">{{ $about->about_experience_data_1 }}</div>

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h4 class="title-block mb-5">{{ $about->about_experience_title_1 }}</h4>
                                            <p>{{ $about->about_experience_description_1 }}</p>
                                        </div>
                                        <img src="assets/img/awwards/trophy.png" alt="">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(isset($about->about_experience_title_2) && isset($about->about_experience_description_2) && isset($about->about_experience_data_2))
                            <div class="award-item p-relative dsn-up">
                                <div class="d-grid grid-half-1">
                                    <div class="date">{{ $about->about_experience_data_2 }}</div>

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h4 class="title-block mb-5">{{ $about->about_experience_title_2 }}</h4>
                                            <p>{{ $about->about_experience_description_2 }}</p>
                                        </div>
                                        <img src="assets/img/awwards/trophy.png" alt="">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(isset($about->about_experience_title_3) && isset($about->about_experience_description_3) && isset($about->about_experience_data_3))
                            <div class="award-item p-relative dsn-up">
                                <div class="d-grid grid-half-1">
                                    <div class="date">{{ $about->about_experience_data_3 }}</div>

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h4 class="title-block mb-5">{{ $about->about_experience_title_3 }}</h4>
                                            <p>{{ $about->about_experience_description_3 }}</p>
                                        </div>
                                        <img src="assets/img/awwards/trophy.png" alt="">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(isset($about->about_experience_title_4) && isset($about->about_experience_description_4) && isset($about->about_experience_data_4))
                            <div class="award-item p-relative dsn-up">
                                <div class="d-grid grid-half-1">
                                    <div class="date">{{ $about->about_experience_data_4 }}</div>

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h4 class="title-block mb-5">{{ $about->about_experience_title_4 }}</h4>
                                            <p>{{ $about->about_experience_description_4 }}</p>
                                        </div>
                                        <img src="assets/img/awwards/trophy.png" alt="">
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="dsn-up">
                                <div class="dsn-btn dsn-btn-shape d-flex">

                                    <a class="button background-main v-dark effect-ajax" href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/contato" : "/eng/contato" : "/pt/contato" }}" data-dsn-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contate-nos" : "Contact Us" : "Contate-nos" }}">
                                        <span class="title-btn text-upper p-relative  z-index-1 heading-color" data-animate-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contate-nos" : "Contact Us" : "Contate-nos" }}">
                                            <span>{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contate-nos" : "Contact Us" : "Contate-nos" }}</span>
                                        </span>
                                    </a>

                                    <span class="icon background-main v-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </span>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- ========== End award========== -->


                <!-- ========== testimonial========== -->
                <section class="testimonal-personal section-margin dsn-swiper" data-dsn-option='{"spaceBetween":30,"centeredSlides":false,"grabCursor":true,"loop":true,"speed":1000}'>
                    <div class="container">
                        <div class="d-flex">
                            <div class="prev-paginate">
                                <span class="dsn-icon dsn-icon-heading-color background-section">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="">
                                        <path d="M6.81496 0.699692L7.66349 1.54822L2.31371 6.898L16.4017 6.88707L16.4008 8.08442L2.31278 8.09535L7.65426 13.4368L6.80442 14.2867L0.0161911 7.49846L6.81496 0.699692Z" fill=""></path>
                                    </svg>
                                </span>
                            </div>

                            <div class="swiper-container swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonal-item text-center d-flex flex-column justify-content-center align-items-center">
                                        <div class="box-img">
                                            <div class="box-content" data-swiper-parallax-opacity="0">
                                                <h3 class="title m-top-0px">“{{ $args->testimonials_description_1 ? $args->testimonials_description_1 : 'testimonials_description_1' }}”</h3>

                                                <div class="auther mt-20">
                                                    <h5 class="text-upper mb-5">{{ $args->testimonials_company_1 ? $args->testimonials_company_1 : 'testimonials_company_1' }}</h5>
                                                    <span class="text-upper">{{ $args->testimonials_name_1 ? $args->testimonials_name_1 : 'testimonials_name_1' }}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonal-item text-center d-flex flex-column justify-content-center align-items-center">
                                        <div class="box-img">
                                            <div class="box-content" data-swiper-parallax-opacity="0">
                                                <h3 class="title m-top-0px">“{{ $args->testimonials_description_2 ? $args->testimonials_description_2 : 'testimonials_description_2' }}”</h3>

                                                <div class="auther mt-20">
                                                    <h5 class="text-upper mb-5">{{ $args->testimonials_company_2 ? $args->testimonials_company_2 : 'testimonials_company_2' }}</h5>
                                                    <span class="text-upper">{{ $args->testimonials_name_2 ? $args->testimonials_name_2 : 'testimonials_name_2' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide testimonal-item text-center d-flex flex-column justify-content-center align-items-center">
                                        <div class="box-img">
                                            <div class="box-content" data-swiper-parallax-opacity="0">
                                                <h3 class="title m-top-0px">“{{ $args->testimonials_description_3 ? $args->testimonials_description_3 : 'testimonials_description_3' }}”</h3>

                                                <div class="auther mt-20">
                                                    <h5 class="text-upper mb-5">{{ $args->testimonials_company_3 ? $args->testimonials_company_3 : 'testimonials_company_3' }}</h5>
                                                    <span class="text-upper">{{ $args->testimonials_name_3 ? $args->testimonials_name_3 : 'testimonials_name_3' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                <!-- ========== End testimonial ========== -->

                <!-- ==========  Brand ========== -->
                <section class="brands background-section section-padding">
                    <div class="container">

                        <div class="section-title text-center d-flex flex-column mb-30">
                            <span class="sub-heading dsn-fill ml-auto mr-auto mb-5">{{ $about->about_pre_title_2 ? $about->about_pre_title_2 : 'about_pre_title_2' }}</span>

                            <h2 class="title dsn-fill">
                                {{ $about->about_brands_title }}
                            </h2>
                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-center ">
                            <div class="box-brands max-w750 dsn-swiper dsn-up" data-dsn-option='{"spaceBetween":50,"centeredSlides":false,"direction":"horizontal","autoHeight":false,"slideToClickedSlide":false,"grabCursor":true,"mousewheel":false,"loop":false,"parallax":false,"slidesPerView":4,"speed":1000,"effect":"slide"}'>
                                <div class="brand-inner">
                                    <div class="swiper-container swiper">
                                        <div class="swiper-wrapper">
                                            @if(isset($about->about_brands_img_1))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_1") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_2))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_2") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_3))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_3") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_4))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_4") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_1))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_1") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_2))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_2") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_3))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_3") }}" alt="">
                                            </div>
                                            @endif
                                            @if(isset($about->about_brands_img_4))
                                            <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                                <img src="{{ asset("../storage/$about->about_brands_img_4") }}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="max-w570 text-center mt-20 dsn-up">
                                {{ $about->about_brands_description }}
                            </p>

                            <div class="dsn-up">
                                <div class="dsn-btn dsn-btn-shape d-flex mt-20">

                                    <a class="button background-main v-dark" href="#">
                                        <span class="title-btn text-upper p-relative  z-index-1 heading-color" data-animate-text="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Junta-se a eles" : "Join them" : "Junta-se a eles" }}">
                                            <span>{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Junta-se a eles" : "Join them" : "Junta-se a eles" }}</span>
                                        </span>
                                    </a>

                                    <span class="icon background-main v-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </span>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- ========== End Brand========== -->

                <!-- ========== Team ========== -->
                <section class="dsn-team section-padding background-section">
                    <div class="container">
                        <div class="section-title dsn-fill mb-70 d-flex flex-column">
                            <span class="sub-heading mb-5">{{ $about->about_pre_title_3 ? $about->about_pre_title_3 : 'about_pre_title_3' }}</span>
                            <h2 class="title ">
                                {{ $args->employee_title ? $args->employee_title : 'employee_title' }}
                            </h2>
                        </div>
                    </div>

                    <div class="container">
                        <div class="d-grid grid-lg-3 grid-md-2">
                            <div class="team-item d-flex align-items-end">
                                <div class="box-img">
                                    <img class="cover-bg-img has-border-radius" src="{{ $args->employee_img_1 ? asset("../storage/$args->employee_img_1") : asset("/assets/img/team/1.jpg")}}" alt="">
                                </div>
                                <div class="content d-flex justify-content-between w-100">
                                    <div class="text">
                                        <h4 class="title-block text-upper mb-5">
                                            {{ $args->employee_name_1 ? $args->employee_name_1 : 'employee_name_1' }}
                                        </h4>
                                        <span>
                                            {{ $args->employee_work_1 ? $args->employee_work_1 : 'employee_work_1' }}
                                        </span>
                                    </div>
                                    <div class="social-inner d-flex">
                                        <h6 class="theme-color">SOCIAL MEDIA</h6>
                                        <div class="social d-flex flex-column background-section">
                                            <a href="{{ $args->employee_url_facebook_1 ? $args->employee_url_facebook_1 : 'employee_url_facebook_1' }}" class="social-item">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>

                                            <a href="{{ $args->employee_url_instagram_1 ? $args->employee_url_instagram_1 : 'employee_url_instagram_1' }}" class="social-item">
                                                <i class="fab fa-instagram"></i>
                                            </a>

                                            <a href="{{ $args->employee_url_twitter_1 ? $args->employee_url_twitter_1 : 'employee_url_twitter_1' }}" class="social-item">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="team-item d-flex align-items-end">
                                <div class="box-img has-border-radius">
                                    <img class="cover-bg-img has-border-radius" src="{{ $args->employee_img_2 ? asset("../storage/$args->employee_img_2") : asset("/assets/img/team/2.jpg")}}" alt="">
                                </div>
                                <div class="content d-flex justify-content-between w-100">
                                    <div class="text">
                                        <h4 class="title-block text-upper mb-5">
                                            {{ $args->employee_name_2 ? $args->employee_name_2 : 'employee_name_2' }}
                                        </h4>
                                        <span>
                                            {{ $args->employee_work_2 ? $args->employee_work_2 : 'employee_work_2' }}
                                        </span>
                                    </div>
                                    <div class="social-inner d-flex">
                                        <h6 class="theme-color">SOCIAL MEDIA</h6>
                                        <div class="social d-flex flex-column background-section">
                                            <a href="{{ $args->employee_url_facebook_2 ? $args->employee_url_facebook_2 : 'employee_url_facebook_2' }}" class="social-item">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>

                                            <a href="{{ $args->employee_url_instagram_2 ? $args->employee_url_instagram_2 : 'employee_url_instagram_2' }}" class="social-item">
                                                <i class="fab fa-instagram"></i>
                                            </a>

                                            <a href="{{ $args->employee_url_twitter_2 ? $args->employee_url_twitter_2 : 'employee_url_twitter_2' }}" class="social-item">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="team-item d-flex align-items-end">
                                <div class="box-img">
                                    <img class="cover-bg-img has-border-radius" src="{{ $args->employee_img_3 ? asset("../storage/$args->employee_img_3") : asset("/assets/img/team/3.jpg")}}" alt="">
                                </div>
                                <div class="content w-100 d-flex justify-content-between">
                                    <div class="text">
                                        <h4 class="title-block text-upper mb-5">
                                            {{ $args->employee_name_3 ? $args->employee_name_3 : 'employee_name_3' }}
                                        </h4>
                                        <span>
                                            {{ $args->employee_work_3 ? $args->employee_work_3 : 'employee_work_3' }}
                                        </span>
                                    </div>
                                    <div class="social-inner d-flex">
                                        <h6 class="theme-color">SOCIAL MEDIA</h6>
                                        <div class="social d-flex flex-column background-section">
                                            <a href="{{ $args->employee_url_facebook_3 ? $args->employee_url_facebook_3 : 'employee_url_facebook_3' }}" class="social-item">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>

                                            <a href="{{ $args->employee_url_instagram_3 ? $args->employee_url_instagram_3 : 'employee_url_instagram_3' }}" class="social-item">
                                                <i class="fab fa-instagram"></i>
                                            </a>

                                            <a href="{{ $args->employee_url_twitter_3 ? $args->employee_url_twitter_3 : 'employee_url_twitter_3' }}" class="social-item">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========== End Team ========== -->

                <footer class="footer background-section v-dark pt-60">
                    <div class="container p-relative">
                        <div class="d-grid grid-lg-4 grid-md-3">
                            <div class="logo-wrap">
                                <div class="logo d-flex">
                                    <img src="{{ asset("/assets/img/logo-light.png") }}" alt="" class="logo">
                                </div>
                                <svg class="shape-one" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_13_104)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0H0C16.5684 0 30 13.4314 30 30V0Z" fill="#0E0E0E" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13_104">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg class="shape-two" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30C13.4316 0 0 13.4314 0 30V0Z" fill="#0E0E0E" />
                                </svg>

                            </div>

                            <div class="footer-links">
                                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                                    Navigation Links</h4>
                                <ul>
                                    <li class="text-upper">
                                        <a href="{{ $args->navigation_url_1 ? $args->navigation_url_1 : '#' }}">{{ $args->navigation_title_1 ? $args->navigation_title_1 : 'navigation_title_1' }}</a>
                                    </li>
                                    <li class="text-upper">
                                        <a href="{{ $args->navigation_url_2 ? $args->navigation_url_2 : '#' }}">{{ $args->navigation_title_2 ? $args->navigation_title_2 : 'navigation_title_2' }}</a>
                                    </li>
                                    <li class="text-upper">
                                        <a href="{{ $args->navigation_url_3 ? $args->navigation_url_3 : '#' }}">{{ $args->navigation_title_3 ? $args->navigation_title_3 : 'navigation_title_3' }}</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="footer-contact">
                                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                                    CONTACT Info</h4>

                                <div class="col-contact">
                                    <p>
                                        <strong>T</strong>
                                        :{{ $args->contact_telephone ? $args->contact_telephone : '+000 000 0000' }}
                                    </p>
                                    <p class="mt-10">
                                        <strong>F</strong>
                                        :{{ $args->contact_cellphone ? $args->contact_cellphone : '+000 000 0000' }}
                                    </p>
                                    <p class="over-hidden mt-10">
                                        <strong>E</strong> :
                                        <a class="link-hover" href="#" data-hover-text="{{ $args->contact_email ? $args->contact_email : 'email@email.com' }}">
                                            {{ $args->contact_email ? $args->contact_email : 'email@email.com' }}
                                        </a>
                                    </p>
                                </div>

                            </div>

                            <div class="footer-socials">
                                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                                    socials Links</h4>
                                <ul class="dsn-socials box-social">
                                    <li>
                                        <a href="{{ $args->social_url_facebook ? $args->social_url_facebook : 'social_url_facebook' }}" target="_blank" class="background-main">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $args->social_url_instagram ? $args->social_url_instagram : 'social_url_instagram' }}" target="_blank" class="background-main">
                                            <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $args->social_url_twitter ? $args->social_url_twitter : 'social_url_twitter' }}" target="_blank" class="background-main">
                                            <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

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
