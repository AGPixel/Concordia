@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Index Page')

        @section('conteudo')
        <!-- Colocado esse style somente por enquanto, mudar depois. -->
        <style>
            .card-body {
                padding-bottom: 0em !important;
                padding-top: 0.5em !important;
            }

            .first-card-body {
                padding-top: 1.5em !important;
            }

            .last-card-body {
                padding-bottom: 1em !important;
            }

        </style>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form id="quickForm">
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Title',
                                    'id_input_text' => 'InputAboutTitle',
                                    'arg_value' => $args->about_title ? $args->about_title : '',
                                    'arg_value_eng' => $args->about_title_eng ? $args->about_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Description',
                                    'id_input_text' => 'InputAboutDescription',
                                    'arg_value' => $args->about_description ? $args->about_description : '',
                                    'arg_value_eng' => $args->about_description_eng ? $args->about_description_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image About',
                                        'id_img_file' => 'InputAboutImg',
                                        'id_text_file' => 'ImageAboutPreview',
                                        'arg_value' => $args->about_img ? asset("../storage/$args->about_img") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Number 1',
                                    'id_input_text' => 'InputAboutNum1',
                                    'arg_value' => $args->about_num_1 ? $args->about_num_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Description 1',
                                    'id_input_text' => 'InputAboutDescription1',
                                    'arg_value' => $args->about_description_1 ? $args->about_description_1 : '',
                                    'arg_value_eng' => $args->about_description_1_eng ? $args->about_description_1_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Number 2',
                                    'id_input_text' => 'InputAboutNum2',
                                    'arg_value' => $args->about_num_2 ? $args->about_num_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Description 2',
                                    'id_input_text' => 'InputAboutDescription2',
                                    'arg_value' => $args->about_description_2 ? $args->about_description_2 : '',
                                    'arg_value_eng' => $args->about_description_2_eng ? $args->about_description_2_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Number 3',
                                    'id_input_text' => 'InputAboutNum3',
                                    'arg_value' => $args->about_num_3 ? $args->about_num_3 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Description 3',
                                    'id_input_text' => 'InputAboutDescription3',
                                    'arg_value' => $args->about_description_3 ? $args->about_description_3 : '',
                                    'arg_value_eng' => $args->about_description_3_eng ? $args->about_description_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image About 3',
                                        'id_img_file' => 'InputAboutImg3',
                                        'id_text_file' => 'ImageAboutImg3Preview',
                                        'arg_value' => $args->about_img_3 ? asset("../storage/$args->about_img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Title',
                                    'id_input_text' => 'InputServiceTitle',
                                    'arg_value' => $args->service_title ? $args->service_title : '',
                                    'arg_value_eng' => $args->service_title_eng ? $args->service_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Title 1',
                                    'id_input_text' => 'InputServiceTitle1',
                                    'arg_value' => $args->service_title_1 ? $args->service_title_1 : '',
                                    'arg_value_eng' => $args->service_title_1_eng ? $args->service_title_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Description 1',
                                    'id_input_text' => 'InputServiceDescription1',
                                    'arg_value' => $args->service_description_1 ? $args->service_description_1 : '',
                                    'arg_value_eng' => $args->service_description_1_eng ? $args->service_description_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Title 2',
                                    'id_input_text' => 'InputServiceTitle2',
                                    'arg_value' => $args->service_title_2 ? $args->service_title_2 : '',
                                    'arg_value_eng' => $args->service_title_2_eng ? $args->service_title_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Description 2',
                                    'id_input_text' => 'InputServiceDescription2',
                                    'arg_value' => $args->service_description_2 ? $args->service_description_2 : '',
                                    'arg_value_eng' => $args->service_description_2_eng ? $args->service_description_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Title 3',
                                    'id_input_text' => 'InputServiceTitle3',
                                    'arg_value' => $args->service_title_3 ? $args->service_title_3 : '',
                                    'arg_value_eng' => $args->service_title_3_eng ? $args->service_title_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Service Description 3',
                                    'id_input_text' => 'InputServiceDescription3',
                                    'arg_value' => $args->service_description_3 ? $args->service_description_3 : '',
                                    'arg_value_eng' => $args->service_description_3_eng ? $args->service_description_3_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Projects Title',
                                    'id_input_text' => 'InputPortifolioTitle',
                                    'arg_value' => $args->portifolio_title ? $args->portifolio_title : '',
                                    'arg_value_eng' => $args->portifolio_title_eng ? $args->portifolio_title_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Frame Number 1',
                                    'id_input_text' => 'InputFrameNumber1',
                                    'arg_value' => $args->frame_number_1 ? $args->frame_number_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Frame Legend 1',
                                    'id_input_text' => 'InputFrameLegend1',
                                    'arg_value' => $args->frame_legend_1 ? $args->frame_legend_1 : '',
                                    'arg_value_eng' => $args->frame_legend_1_eng ? $args->frame_legend_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Frame Description 1',
                                    'id_input_text' => 'InputFrameDescription1',
                                    'arg_value' => $args->frame_description_1 ? $args->frame_description_1 : '',
                                    'arg_value_eng' => $args->frame_description_1_eng ? $args->frame_description_1_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Frame Number 2',
                                    'id_input_text' => 'InputFrameNumber2',
                                    'arg_value' => $args->frame_number_2 ? $args->frame_number_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Frame Legend 2',
                                    'id_input_text' => 'InputFrameLegend2',
                                    'arg_value' => $args->frame_legend_2 ? $args->frame_legend_2 : '',
                                    'arg_value_eng' => $args->frame_legend_2_eng ? $args->frame_legend_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Frame Description 2',
                                    'id_input_text' => 'InputFrameDescription2',
                                    'arg_value' => $args->frame_description_2 ? $args->frame_description_2 : '',
                                    'arg_value_eng' => $args->frame_description_2_eng ? $args->frame_description_2_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Testimonials Title',
                                    'id_input_text' => 'InputTestimonialsTitle',
                                    'arg_value' => $args->testimonials_title ? $args->testimonials_title : '',
                                    'arg_value_eng' => $args->testimonials_title_eng ? $args->testimonials_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Testimonials Description',
                                    'id_input_text' => 'InputTestimonialsDescription',
                                    'arg_value' => $args->testimonials_description ? $args->testimonials_description : '',
                                    'arg_value_eng' => $args->testimonials_description_eng ? $args->testimonials_description_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Testimonials Number 1',
                                    'id_input_text' => 'InputTestimonialsNum1',
                                    'arg_value' => $args->testimonials_number_1 ? $args->testimonials_number_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Testimonials Description 1',
                                    'id_input_text' => 'InputTestimonialsDescription1',
                                    'arg_value' => $args->testimonials_description_1 ? $args->testimonials_description_1 : '',
                                    'arg_value_eng' => $args->testimonials_description_1_eng ? $args->testimonials_description_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Testimonials Image 1',
                                        'id_img_file' => 'InputTestimonialsImg1',
                                        'id_text_file' => 'InputTestimonialsImg1Preview',
                                        'arg_value' => $args->testimonials_img_1 ? asset("../storage/$args->testimonials_img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Testimonials Company 1',
                                    'id_input_text' => 'InputTestimonialsCompany1',
                                    'arg_value' => $args->testimonials_company_1 ? $args->testimonials_company_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Testimonials Name 1',
                                    'id_input_text' => 'InputTestimonialsName1',
                                    'arg_value' => $args->testimonials_name_1 ? $args->testimonials_name_1 : '' ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Testimonials Number 2',
                                    'id_input_text' => 'InputTestimonialsNum2',
                                    'arg_value' => $args->testimonials_number_2 ? $args->testimonials_number_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Testimonials Description 2',
                                    'id_input_text' => 'InputTestimonialsDescription2',
                                    'arg_value' => $args->testimonials_description_2 ? $args->testimonials_description_2 : '',
                                    'arg_value_eng' => $args->testimonials_description_2_eng ? $args->testimonials_description_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Testimonials Image 2',
                                        'id_img_file' => 'InputTestimonialsImg2',
                                        'id_text_file' => 'InputTestimonialsImg2Preview',
                                        'arg_value' => $args->testimonials_img_2 ? asset("../storage/$args->testimonials_img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Testimonials Company 2',
                                    'id_input_text' => 'InputTestimonialsCompany2',
                                    'arg_value' => $args->testimonials_company_2 ? $args->testimonials_company_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Testimonials Name 2',
                                    'id_input_text' => 'InputTestimonialsName2',
                                    'arg_value' => $args->testimonials_name_2 ? $args->testimonials_name_2 : '' ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Title',
                                    'id_input_text' => 'InputEmployeeTitle',
                                    'arg_value' => $args->employee_title ? $args->employee_title : '',
                                    'arg_value_eng' => $args->employee_title_eng ? $args->employee_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Name 1',
                                    'id_input_text' => 'InputEmployeeName1',
                                    'arg_value' => $args->employee_name_1 ? $args->employee_name_1 : '',
                                    'arg_value_eng' => $args->employee_name_1_eng ? $args->employee_name_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Work 1',
                                    'id_input_text' => 'InputEmployeeWork1',
                                    'arg_value' => $args->employee_work_1 ? $args->employee_work_1 : '',
                                    'arg_value_eng' => $args->employee_work_1_eng ? $args->employee_work_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Employee Image 1',
                                        'id_img_file' => 'InputEmployeeImg1',
                                        'id_text_file' => 'InputEmployeeImg1Preview',
                                        'arg_value' => $args->employee_img_1 ? asset("../storage/$args->employee_img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Facebook 1',
                                    'id_input_text' => 'InputEmployeeUrlFacebook1',
                                    'arg_value' => $args->employee_url_facebook_1 ? $args->employee_url_facebook_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Instagram 1',
                                    'id_input_text' => 'InputEmployeeUrlInstagram1',
                                    'arg_value' => $args->employee_url_instagram_1 ? $args->employee_url_instagram_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Twitter 1',
                                    'id_input_text' => 'InputEmployeeUrlTwitter1',
                                    'arg_value' => $args->employee_url_twitter_1 ? $args->employee_url_twitter_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Name 2',
                                    'id_input_text' => 'InputEmployeeName2',
                                    'arg_value' => $args->employee_name_2 ? $args->employee_name_2 : '',
                                    'arg_value_eng' => $args->employee_name_2_eng ? $args->employee_name_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Work 2',
                                    'id_input_text' => 'InputEmployeeWork2',
                                    'arg_value' => $args->employee_work_2 ? $args->employee_work_2 : '',
                                    'arg_value_eng' => $args->employee_work_2_eng ? $args->employee_work_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Employee Image 2',
                                        'id_img_file' => 'InputEmployeeImg2',
                                        'id_text_file' => 'InputEmployeeImg2Preview',
                                        'arg_value' => $args->employee_img_2 ? asset("../storage/$args->employee_img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Facebook 2',
                                    'id_input_text' => 'InputEmployeeUrlFacebook2',
                                    'arg_value' => $args->employee_url_facebook_2 ? $args->employee_url_facebook_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Instagram 2',
                                    'id_input_text' => 'InputEmployeeUrlInstagram2',
                                    'arg_value' => $args->employee_url_instagram_2 ? $args->employee_url_instagram_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Twitter 2',
                                    'id_input_text' => 'InputEmployeeUrlTwitter2',
                                    'arg_value' => $args->employee_url_twitter_2 ? $args->employee_url_twitter_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Name 3',
                                    'id_input_text' => 'InputEmployeeName3',
                                    'arg_value' => $args->employee_name_3 ? $args->employee_name_3 : '',
                                    'arg_value_eng' => $args->employee_name_3_eng ? $args->employee_name_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Employee Work 3',
                                    'id_input_text' => 'InputEmployeeWork3',
                                    'arg_value' => $args->employee_work_3 ? $args->employee_work_3 : '',
                                    'arg_value_eng' => $args->employee_work_3_eng ? $args->employee_work_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Employee Image 3',
                                        'id_img_file' => 'InputEmployeeImg3',
                                        'id_text_file' => 'InputEmployeeImg3Preview',
                                        'arg_value' => $args->employee_img_3 ? asset("../storage/$args->employee_img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Facebook 3',
                                    'id_input_text' => 'InputEmployeeUrlFacebook3',
                                    'arg_value' => $args->employee_url_facebook_3 ? $args->employee_url_facebook_3 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Instagram 3',
                                    'id_input_text' => 'InputEmployeeUrlInstagram3',
                                    'arg_value' => $args->employee_url_instagram_3 ? $args->employee_url_instagram_3 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Employee Twitter 3',
                                    'id_input_text' => 'InputEmployeeUrlTwitter3',
                                    'arg_value' => $args->employee_url_twitter_3 ? $args->employee_url_twitter_3 : '' ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Background Image',
                                        'id_img_file' => 'InputBrandsBgImg',
                                        'id_text_file' => 'InputBrandsBgImgPreview',
                                        'arg_value' => $args->brands_bg_img ? asset("../storage/$args->brands_bg_img") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Image 1',
                                        'id_img_file' => 'InputBrandsImg1',
                                        'id_text_file' => 'InputBrandsImg1Preview',
                                        'arg_value' => $args->brands_img_1 ? asset("../storage/$args->brands_img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Image 2',
                                        'id_img_file' => 'InputBrandsImg2',
                                        'id_text_file' => 'InputBrandsImg2Preview',
                                        'arg_value' => $args->brands_img_2 ? asset("../storage/$args->brands_img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Image 3',
                                        'id_img_file' => 'InputBrandsImg3',
                                        'id_text_file' => 'InputBrandsImg3Preview',
                                        'arg_value' => $args->brands_img_3 ? asset("../storage/$args->brands_img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Image 4',
                                        'id_img_file' => 'InputBrandsImg4',
                                        'id_text_file' => 'InputBrandsImg4Preview',
                                        'arg_value' => $args->brands_img_4 ? asset("../storage/$args->brands_img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Image 5',
                                        'id_img_file' => 'InputBrandsImg5',
                                        'id_text_file' => 'InputBrandsImg5Preview',
                                        'arg_value' => $args->brands_img_5 ? asset("../storage/$args->brands_img_5") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Brands Image 6',
                                        'id_img_file' => 'InputBrandsImg6',
                                        'id_text_file' => 'InputBrandsImg6Preview',
                                        'arg_value' => $args->brands_img_6 ? asset("../storage/$args->brands_img_6") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Final Title',
                                    'id_input_text' => 'InputFinalTitle',
                                    'arg_value' => $args->final_title ? $args->final_title : '',
                                    'arg_value_eng' => $args->final_title_eng ? $args->final_title_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Sign Title',
                                    'id_input_text' => 'InputSignTitle',
                                    'arg_value' => $args->sign_title ? $args->sign_title : '',
                                    'arg_value_eng' => $args->sign_title_eng ? $args->sign_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Sign Description',
                                    'id_input_text' => 'InputSignDescription',
                                    'arg_value' => $args->sign_description ? $args->sign_description : '',
                                    'arg_value_eng' => $args->sign_description_eng ? $args->sign_description_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Sign Rolling',
                                    'id_input_text' => 'InputSignRolling',
                                    'arg_value' => $args->sign_rolling ? $args->sign_rolling : '',
                                    'arg_value_eng' => $args->sign_rolling_eng ? $args->sign_rolling_eng : ''
                                    ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Social Facebook',
                                    'id_input_text' => 'InputSocialFacebook',
                                    'arg_value' => $args->social_url_facebook ? $args->social_url_facebook : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Social Instagram',
                                    'id_input_text' => 'InputSocialInstagram',
                                    'arg_value' => $args->social_url_instagram ? $args->social_url_instagram : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Social Twitter',
                                    'id_input_text' => 'InputSocialTwitter',
                                    'arg_value' => $args->social_url_twitter ? $args->social_url_twitter : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Social Linkedin',
                                    'id_input_text' => 'InputSocialLinkedin',
                                    'arg_value' => $args->social_url_linkedin ? $args->social_url_linkedin : '' ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Contact Telephone',
                                    'id_input_text' => 'InputContactTelephone',
                                    'arg_value' => $args->contact_telephone ? $args->contact_telephone : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Contact Cellphone',
                                    'id_input_text' => 'InputContactCellphone',
                                    'arg_value' => $args->contact_cellphone ? $args->contact_cellphone : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Contact Email',
                                    'id_input_text' => 'InputContactEmail',
                                    'arg_value' => $args->contact_email ? $args->contact_email : '' ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Navigation Title 1',
                                    'id_input_text' => 'InputNavigationTitle1',
                                    'arg_value' => $args->navigation_title_1 ? $args->navigation_title_1 : '',
                                    'arg_value_eng' => $args->navigation_title_1_eng ? $args->navigation_title_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Navigation Url 1',
                                    'id_input_text' => 'InputNavigationUrl1',
                                    'arg_value' => $args->navigation_url_1 ? $args->navigation_url_1 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Navigation Title 2',
                                    'id_input_text' => 'InputNavigationTitle2',
                                    'arg_value' => $args->navigation_title_2 ? $args->navigation_title_2 : '',
                                    'arg_value_eng' => $args->navigation_title_2_eng ? $args->navigation_title_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Navigation Url 2',
                                    'id_input_text' => 'InputNavigationUrl2',
                                    'arg_value' => $args->navigation_url_2 ? $args->navigation_url_2 : '' ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Navigation Title 3',
                                    'id_input_text' => 'InputNavigationTitle3',
                                    'arg_value' => $args->navigation_title_3 ? $args->navigation_title_3 : '',
                                    'arg_value_eng' => $args->navigation_title_3_eng ? $args->navigation_title_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body last-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Navigation Url 3',
                                    'id_input_text' => 'InputNavigationUrl3',
                                    'arg_value' => $args->navigation_url_3 ? $args->navigation_url_3 : '' ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveIndexPage()">Salvar modificações Index Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formIndexPage.js") }}"></script>
        <!-- /.content -->
        @endsection
