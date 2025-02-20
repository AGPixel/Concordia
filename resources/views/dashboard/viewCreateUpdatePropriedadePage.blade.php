@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Propriedade')

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
                                    'id_input_text' => 'InputPropriedadeTitle',
                                    'arg_value' => isset($propriedade->title) ? $propriedade->title : '',
                                    'arg_value_eng' => isset($propriedade->title_eng) ? $propriedade->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputPropriedadeDescription',
                                    'arg_value' => isset($propriedade->description) ? $propriedade->description : '',
                                    'arg_value_eng' => isset($propriedade->description_eng) ? $propriedade->description_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Year',
                                    'id_input_text' => 'InputPropriedadeYear',
                                    'arg_value' => isset($propriedade->year) ? $propriedade->year : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 1',
                                    'id_input_text' => 'InputPropriedadeJob1',
                                    'arg_value' => isset($propriedade->job_1) ? $propriedade->job_1 : '',
                                    'arg_value_eng' => isset($propriedade->job_1_eng) ? $propriedade->job_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 2',
                                    'id_input_text' => 'InputPropriedadeJob2',
                                    'arg_value' => isset($propriedade->job_2) ? $propriedade->job_2 : '',
                                    'arg_value_eng' => isset($propriedade->job_2_eng) ? $propriedade->job_2_eng : ''
                                    ])
                                </div>
                                <!-- 11111 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 1',
                                        'id_img_file' => 'InputPropriedadeImg1',
                                        'id_text_file' => 'ImagePropriedadeImg1Preview',
                                        'arg_value' => isset($propriedade->img_1) ? asset("../storage/$propriedade->img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 1',
                                    'id_input_text' => 'InputPropriedadeType1',
                                    'arg_value' => isset($propriedade->type_1) ? $propriedade->type_1 : '',
                                    'arg_value_eng' => isset($propriedade->type_1_eng) ? $propriedade->type_1_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 1',
                                    'id_input_text' => 'InputPropriedadeLegend1',
                                    'arg_value' => isset($propriedade->legend_1) ? $propriedade->legend_1 : '',
                                    'arg_value_eng' => isset($propriedade->legend_1_eng) ? $propriedade->legend_1_eng : ''
                                    ])
                                </div>
                                -->
                                <!-- 22222 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 2',
                                        'id_img_file' => 'InputPropriedadeImg2',
                                        'id_text_file' => 'ImagePropriedadeImg2Preview',
                                        'arg_value' => isset($propriedade->img_2) ? asset("../storage/$propriedade->img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 2',
                                    'id_input_text' => 'InputPropriedadeType2',
                                    'arg_value' => isset($propriedade->type_2) ? $propriedade->type_2 : '',
                                    'arg_value_eng' => isset($propriedade->type_2_eng) ? $propriedade->type_2_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 2',
                                    'id_input_text' => 'InputPropriedadeLegend2',
                                    'arg_value' => isset($propriedade->legend_2) ? $propriedade->legend_2 : '',
                                    'arg_value_eng' => isset($propriedade->legend_2_eng) ? $propriedade->legend_2_eng : ''
                                    ])
                                </div>
                                -->
                                <!-- 33333 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 3',
                                        'id_img_file' => 'InputPropriedadeImg3',
                                        'id_text_file' => 'ImagePropriedadeImg3Preview',
                                        'arg_value' => isset($propriedade->img_3) ? asset("../storage/$propriedade->img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 3',
                                    'id_input_text' => 'InputPropriedadeType3',
                                    'arg_value' => isset($propriedade->type_3) ? $propriedade->type_3 : '',
                                    'arg_value_eng' => isset($propriedade->type_3_eng) ? $propriedade->type_3_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 3',
                                    'id_input_text' => 'InputPropriedadeLegend3',
                                    'arg_value' => isset($propriedade->legend_3) ? $propriedade->legend_3 : '',
                                    'arg_value_eng' => isset($propriedade->legend_3_eng) ? $propriedade->legend_3_eng : ''
                                    ])
                                </div>
                                -->
                                <!-- 44444 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 4',
                                        'id_img_file' => 'InputPropriedadeImg4',
                                        'id_text_file' => 'ImagePropriedadeImg4Preview',
                                        'arg_value' => isset($propriedade->img_4) ? asset("../storage/$propriedade->img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 4',
                                    'id_input_text' => 'InputPropriedadeType4',
                                    'arg_value' => isset($propriedade->type_4) ? $propriedade->type_4 : '',
                                    'arg_value_eng' => isset($propriedade->type_4_eng) ? $propriedade->type_4_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 4',
                                    'id_input_text' => 'InputPropriedadeLegend4',
                                    'arg_value' => isset($propriedade->legend_4) ? $propriedade->legend_4 : '',
                                    'arg_value_eng' => isset($propriedade->legend_4_eng) ? $propriedade->legend_4_eng : ''
                                    ])
                                </div>
                                -->
                                <!-- 55555 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 5',
                                        'id_img_file' => 'InputPropriedadeImg5',
                                        'id_text_file' => 'ImagePropriedadeImg5Preview',
                                        'arg_value' => isset($propriedade->img_5) ? asset("../storage/$propriedade->img_5") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 5',
                                    'id_input_text' => 'InputPropriedadeType5',
                                    'arg_value' => isset($propriedade->type_5) ? $propriedade->type_5 : '',
                                    'arg_value_eng' => isset($propriedade->type_5_eng) ? $propriedade->type_5_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 5',
                                    'id_input_text' => 'InputPropriedadeLegend5',
                                    'arg_value' => isset($propriedade->legend_5) ? $propriedade->legend_5 : '',
                                    'arg_value_eng' => isset($propriedade->legend_5_eng) ? $propriedade->legend_5_eng : ''
                                    ])
                                </div>
                                -->
                                <!-- 66666 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 6',
                                        'id_img_file' => 'InputPropriedadeImg6',
                                        'id_text_file' => 'ImagePropriedadeImg6Preview',
                                        'arg_value' => isset($propriedade->img_6) ? asset("../storage/$propriedade->img_6") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 6',
                                    'id_input_text' => 'InputPropriedadeType6',
                                    'arg_value' => isset($propriedade->type_6) ? $propriedade->type_6 : '',
                                    'arg_value_eng' => isset($propriedade->type_6_eng) ? $propriedade->type_6_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 6',
                                    'id_input_text' => 'InputPropriedadeLegend6',
                                    'arg_value' => isset($propriedade->legend_6) ? $propriedade->legend_6 : '',
                                    'arg_value_eng' => isset($propriedade->legend_6_eng) ? $propriedade->legend_6_eng : ''
                                    ])
                                </div>
                                -->
                                <!-- 77777 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 7',
                                        'id_img_file' => 'InputPropriedadeImg7',
                                        'id_text_file' => 'ImagePropriedadeImg7Preview',
                                        'arg_value' => isset($propriedade->img_7) ? asset("../storage/$propriedade->img_7") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 7',
                                    'id_input_text' => 'InputPropriedadeType7',
                                    'arg_value' => isset($propriedade->type_7) ? $propriedade->type_7 : '',
                                    'arg_value_eng' => isset($propriedade->type_7_eng) ? $propriedade->type_7_eng : ''
                                    ])
                                </div>
                                <!--
                                <div class="card-body first-card-body">
                                    @ include('components.inputtextpteng',[
                                    'title' => 'Legend 7',
                                    'id_input_text' => 'InputPropriedadeLegend7',
                                    'arg_value' => isset($propriedade->legend_7) ? $propriedade->legend_7 : '',
                                    'arg_value_eng' => isset($propriedade->legend_7_eng) ? $propriedade->legend_7_eng : ''
                                    ])
                                </div>
                                -->
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Contact Title',
                                    'id_input_text' => 'InputPropriedadeContactTitle',
                                    'arg_value' => isset($propriedade->contact_title) ? $propriedade->contact_title : '',
                                    'arg_value_eng' => isset($propriedade->contact_title_eng) ? $propriedade->contact_title_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="savePropriedadePage({{ isset($propriedade->id) ? $propriedade->id : 0 }})">Salvar modificações Propriedade Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formPropriedadePage.js") }}"></script>
        <!-- /.content -->
        @endsection
