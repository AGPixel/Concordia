@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Oportunidade')

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
                                    'title' => 'Title',
                                    'id_input_text' => 'InputOportunidadeTitle',
                                    'arg_value' => isset($oportunidade->title) ? $oportunidade->title : '',
                                    'arg_value_eng' => isset($oportunidade->title_eng) ? $oportunidade->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputOportunidadeDescription',
                                    'arg_value' => isset($oportunidade->description) ? $oportunidade->description : '',
                                    'arg_value_eng' => isset($oportunidade->description_eng) ? $oportunidade->description_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Year',
                                    'id_input_text' => 'InputOportunidadeYear',
                                    'arg_value' => isset($oportunidade->year) ? $oportunidade->year : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 1',
                                    'id_input_text' => 'InputOportunidadeJob1',
                                    'arg_value' => isset($oportunidade->job_1) ? $oportunidade->job_1 : '',
                                    'arg_value_eng' => isset($oportunidade->job_1_eng) ? $oportunidade->job_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 2',
                                    'id_input_text' => 'InputOportunidadeJob2',
                                    'arg_value' => isset($oportunidade->job_2) ? $oportunidade->job_2 : '',
                                    'arg_value_eng' => isset($oportunidade->job_2_eng) ? $oportunidade->job_2_eng : ''
                                    ])
                                </div>
                                <!-- 11111 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 1',
                                        'id_img_file' => 'InputOportunidadeImg1',
                                        'id_text_file' => 'ImageOportunidadeImg1Preview',
                                        'arg_value' => isset($oportunidade->img_1) ? asset("../storage/$oportunidade->img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Type 1',
                                    'id_input_text' => 'InputOportunidadeType1',
                                    'arg_value' => isset($oportunidade->type_1) ? $oportunidade->type_1 : '',
                                    'arg_value_eng' => isset($oportunidade->type_1_eng) ? $oportunidade->type_1_eng : ''
                                    ])
                                </div>
                                -->
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 1',
                                    'id_input_text' => 'InputOportunidadeTitle1',
                                    'arg_value' => isset($oportunidade->title_1) ? $oportunidade->title_1 : '',
                                    'arg_value_eng' => isset($oportunidade->title_1_eng) ? $oportunidade->title_1_eng : ''
                                    ])
                                </div>
                                <!-- 22222 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 2',
                                        'id_img_file' => 'InputOportunidadeImg2',
                                        'id_text_file' => 'ImageOportunidadeImg2Preview',
                                        'arg_value' => isset($oportunidade->img_2) ? asset("../storage/$oportunidade->img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Type 2',
                                    'id_input_text' => 'InputOportunidadeType2',
                                    'arg_value' => isset($oportunidade->type_2) ? $oportunidade->type_2 : '',
                                    'arg_value_eng' => isset($oportunidade->type_2_eng) ? $oportunidade->type_2_eng : ''
                                    ])
                                </div>
                                -->
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 2',
                                    'id_input_text' => 'InputOportunidadeTitle2',
                                    'arg_value' => isset($oportunidade->title_2) ? $oportunidade->title_2 : '',
                                    'arg_value_eng' => isset($oportunidade->title_2_eng) ? $oportunidade->title_2_eng : ''
                                    ])
                                </div>
                                <!-- 33333 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 3',
                                        'id_img_file' => 'InputOportunidadeImg3',
                                        'id_text_file' => 'ImageOportunidadeImg3Preview',
                                        'arg_value' => isset($oportunidade->img_3) ? asset("../storage/$oportunidade->img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Type 3',
                                    'id_input_text' => 'InputOportunidadeType3',
                                    'arg_value' => isset($oportunidade->type_3) ? $oportunidade->type_3 : '',
                                    'arg_value_eng' => isset($oportunidade->type_3_eng) ? $oportunidade->type_3_eng : ''
                                    ])
                                </div>
                                -->
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 3',
                                    'id_input_text' => 'InputOportunidadeTitle3',
                                    'arg_value' => isset($oportunidade->title_3) ? $oportunidade->title_3 : '',
                                    'arg_value_eng' => isset($oportunidade->title_3_eng) ? $oportunidade->title_3_eng : ''
                                    ])
                                </div>
                                <!-- 44444 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 4',
                                        'id_img_file' => 'InputOportunidadeImg4',
                                        'id_text_file' => 'ImageOportunidadeImg4Preview',
                                        'arg_value' => isset($oportunidade->img_4) ? asset("../storage/$oportunidade->img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Type 4',
                                    'id_input_text' => 'InputOportunidadeType4',
                                    'arg_value' => isset($oportunidade->type_4) ? $oportunidade->type_4 : '',
                                    'arg_value_eng' => isset($oportunidade->type_4_eng) ? $oportunidade->type_4_eng : ''
                                    ])
                                </div>
                                -->
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 4',
                                    'id_input_text' => 'InputOportunidadeTitle4',
                                    'arg_value' => isset($oportunidade->title_4) ? $oportunidade->title_4 : '',
                                    'arg_value_eng' => isset($oportunidade->title_4_eng) ? $oportunidade->title_4_eng : ''
                                    ])
                                </div>

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Contact Title',
                                    'id_input_text' => 'InputOportunidadeContactTitle',
                                    'arg_value' => isset($oportunidade->contact_title) ? $oportunidade->contact_title : '',
                                    'arg_value_eng' => isset($oportunidade->contact_title_eng) ? $oportunidade->contact_title_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveOportunidadePage({{ isset($oportunidade->id) ? $oportunidade->id : 0 }})">Salvar modificações Oportunidade Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formOportunidadePage.js") }}"></script>
        <!-- /.content -->
        @endsection
