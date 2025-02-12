@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','About Page')

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
                                    'title' => 'About Title 1',
                                    'id_input_text' => 'InputAboutTitle1',
                                    'arg_value' => $about->about_title_1 ? $about->about_title_1 : '',
                                    'arg_value_eng' => $about->about_title_1_eng ? $about->about_title_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Title 2',
                                    'id_input_text' => 'InputAboutTitle2',
                                    'arg_value' => $about->about_title_2 ? $about->about_title_2 : '',
                                    'arg_value_eng' => $about->about_title_2_eng ? $about->about_title_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image About 1',
                                        'id_img_file' => 'InputAboutImg1',
                                        'id_text_file' => 'ImageAbout1',
                                        'arg_value' => $about->about_img_1 ? asset("../storage/$about->about_img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image About 2',
                                        'id_img_file' => 'InputAboutImg2',
                                        'id_text_file' => 'ImageAbout2',
                                        'arg_value' => $about->about_img_2 ? asset("../storage/$about->about_img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image About 3',
                                        'id_img_file' => 'InputAboutImg3',
                                        'id_text_file' => 'ImageAbout3',
                                        'arg_value' => $about->about_img_3 ? asset("../storage/$about->about_img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image About 4',
                                        'id_img_file' => 'InputAboutImg4',
                                        'id_text_file' => 'ImageAbout4',
                                        'arg_value' => $about->about_img_4 ? asset("../storage/$about->about_img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service Title',
                                    'id_input_text' => 'InputAboutServiceTitle',
                                    'arg_value' => $about->about_service_title ? $about->about_service_title : '',
                                    'arg_value_eng' => $about->about_service_title_eng ? $about->about_service_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service 1',
                                    'id_input_text' => 'InputAboutService1',
                                    'arg_value' => $about->about_service_1 ? $about->about_service_1 : '',
                                    'arg_value_eng' => $about->about_service_1_eng ? $about->about_service_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Service Image 1',
                                        'id_img_file' => 'InputAboutServiceImg1',
                                        'id_text_file' => 'aboutServiceImg1',
                                        'arg_value' => $about->about_service_img_1 ? asset("../storage/$about->about_service_img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service 2',
                                    'id_input_text' => 'InputAboutService2',
                                    'arg_value' => $about->about_service_2 ? $about->about_service_2 : '',
                                    'arg_value_eng' => $about->about_service_2_eng ? $about->about_service_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Service Image 2',
                                        'id_img_file' => 'InputAboutServiceImg2',
                                        'id_text_file' => 'aboutServiceImg2',
                                        'arg_value' => $about->about_service_img_2 ? asset("../storage/$about->about_service_img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service 3',
                                    'id_input_text' => 'InputAboutService3',
                                    'arg_value' => $about->about_service_3 ? $about->about_service_3 : '',
                                    'arg_value_eng' => $about->about_service_3_eng ? $about->about_service_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Service Image 3',
                                        'id_img_file' => 'InputAboutServiceImg3',
                                        'id_text_file' => 'aboutServiceImg3',
                                        'arg_value' => $about->about_service_img_3 ? asset("../storage/$about->about_service_img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service 4',
                                    'id_input_text' => 'InputAboutService4',
                                    'arg_value' => $about->about_service_4 ? $about->about_service_4 : '',
                                    'arg_value_eng' => $about->about_service_4_eng ? $about->about_service_4_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Service Image 4',
                                        'id_img_file' => 'InputAboutServiceImg4',
                                        'id_text_file' => 'aboutServiceImg4',
                                        'arg_value' => $about->about_service_img_4 ? asset("../storage/$about->about_service_img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service 5',
                                    'id_input_text' => 'InputAboutService5',
                                    'arg_value' => $about->about_service_5 ? $about->about_service_5 : '',
                                    'arg_value_eng' => $about->about_service_5_eng ? $about->about_service_5_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Service Image 5',
                                        'id_img_file' => 'InputAboutServiceImg5',
                                        'id_text_file' => 'aboutServiceImg5',
                                        'arg_value' => $about->about_service_img_5 ? asset("../storage/$about->about_service_img_5") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Service 6',
                                    'id_input_text' => 'InputAboutService6',
                                    'arg_value' => $about->about_service_6 ? $about->about_service_6 : '',
                                    'arg_value_eng' => $about->about_service_6_eng ? $about->about_service_6_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Service Image 6',
                                        'id_img_file' => 'InputAboutServiceImg6',
                                        'id_text_file' => 'aboutServiceImg6',
                                        'arg_value' => $about->about_service_img_6 ? asset("../storage/$about->about_service_img_6") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Title',
                                    'id_input_text' => 'InputAboutExperienceTitle',
                                    'arg_value' => $about->about_experience_title ? $about->about_experience_title : '',
                                    'arg_value_eng' => $about->about_experience_title_eng ? $about->about_experience_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Title 1',
                                    'id_input_text' => 'InputAboutExperienceTitle1',
                                    'arg_value' => $about->about_experience_title_1 ? $about->about_experience_title_1 : '',
                                    'arg_value_eng' => $about->about_experience_title_1_eng ? $about->about_experience_title_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Description 1',
                                    'id_input_text' => 'InputAboutExperienceDescription1',
                                    'arg_value' => $about->about_experience_description_1 ? $about->about_experience_description_1 : '',
                                    'arg_value_eng' => $about->about_experience_description_1_eng ? $about->about_experience_description_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Experience Data 1',
                                    'id_input_text' => 'InputAboutExperienceData1',
                                    'arg_value' => $about->about_experience_data_1 ? $about->about_experience_data_1 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Title 2',
                                    'id_input_text' => 'InputAboutExperienceTitle2',
                                    'arg_value' => $about->about_experience_title_2 ? $about->about_experience_title_2 : '',
                                    'arg_value_eng' => $about->about_experience_title_2_eng ? $about->about_experience_title_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Description 2',
                                    'id_input_text' => 'InputAboutExperienceDescription2',
                                    'arg_value' => $about->about_experience_description_2 ? $about->about_experience_description_2 : '',
                                    'arg_value_eng' => $about->about_experience_description_2_eng ? $about->about_experience_description_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Experience Data 2',
                                    'id_input_text' => 'InputAboutExperienceData2',
                                    'arg_value' => $about->about_experience_data_2 ? $about->about_experience_data_2 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Title 3',
                                    'id_input_text' => 'InputAboutExperienceTitle3',
                                    'arg_value' => $about->about_experience_title_3 ? $about->about_experience_title_3 : '',
                                    'arg_value_eng' => $about->about_experience_title_3_eng ? $about->about_experience_title_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Description 3',
                                    'id_input_text' => 'InputAboutExperienceDescription3',
                                    'arg_value' => $about->about_experience_description_3 ? $about->about_experience_description_3 : '',
                                    'arg_value_eng' => $about->about_experience_description_3_eng ? $about->about_experience_description_3_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Experience Data 3',
                                    'id_input_text' => 'InputAboutExperienceData3',
                                    'arg_value' => $about->about_experience_data_3 ? $about->about_experience_data_3 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Title 4',
                                    'id_input_text' => 'InputAboutExperienceTitle4',
                                    'arg_value' => $about->about_experience_title_4 ? $about->about_experience_title_4 : '',
                                    'arg_value_eng' => $about->about_experience_title_4_eng ? $about->about_experience_title_4_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Experience Description 4',
                                    'id_input_text' => 'InputAboutExperienceDescription4',
                                    'arg_value' => $about->about_experience_description_4 ? $about->about_experience_description_4 : '',
                                    'arg_value_eng' => $about->about_experience_description_4_eng ? $about->about_experience_description_4_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'About Experience Data 4',
                                    'id_input_text' => 'InputAboutExperienceData4',
                                    'arg_value' => $about->about_experience_data_4 ? $about->about_experience_data_4 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Brands Title',
                                    'id_input_text' => 'InputAboutBrandsTitle',
                                    'arg_value' => $about->about_brands_title ? $about->about_brands_title : '',
                                    'arg_value_eng' => $about->about_brands_title_eng ? $about->about_brands_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Brands Image 1',
                                        'id_img_file' => 'InputAboutBrandsImg1',
                                        'id_text_file' => 'aboutBrandsImg1',
                                        'arg_value' => $about->about_brands_img_1 ? asset("../storage/$about->about_brands_img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Brands Image 2',
                                        'id_img_file' => 'InputAboutBrandsImg2',
                                        'id_text_file' => 'aboutBrandsImg2',
                                        'arg_value' => $about->about_brands_img_2 ? asset("../storage/$about->about_brands_img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Brands Image 3',
                                        'id_img_file' => 'InputAboutBrandsImg3',
                                        'id_text_file' => 'aboutBrandsImg3',
                                        'arg_value' => $about->about_brands_img_3 ? asset("../storage/$about->about_brands_img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'About Brands Image 4',
                                        'id_img_file' => 'InputAboutBrandsImg4',
                                        'id_text_file' => 'aboutBrandsImg4',
                                        'arg_value' => $about->about_brands_img_4 ? asset("../storage/$about->about_brands_img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'About Brands Description',
                                    'id_input_text' => 'InputAboutBrandsDescription',
                                    'arg_value' => $about->about_brands_description ? $about->about_brands_description : '',
                                    'arg_value_eng' => $about->about_brands_description_eng ? $about->about_brands_description_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveAboutPage()">Salvar modificações About Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formAboutPage.js") }}"></script>
        <!-- /.content -->
        @endsection
