@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Projetos')

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

                                @include('components.metatags',[ 'arg_object' => $work ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title',
                                    'id_input_text' => 'InputWorkTitle',
                                    'arg_value' => isset($work->title) ? $work->title : '',
                                    'arg_value_eng' => isset($work->title_eng) ? $work->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputWorkDescription',
                                    'arg_value' => isset($work->description) ? $work->description : '',
                                    'arg_value_eng' => isset($work->description_eng) ? $work->description_eng : ''
                                    ])
                                </div>
                                <!-- 11111 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 1',
                                        'id_img_file' => 'InputWorkImg1',
                                        'id_text_file' => 'ImageWorkImg1Preview',
                                        'arg_value' => isset($work->img_1) ? asset("../storage/$work->img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 1 1',
                                    'id_input_text' => 'InputWorkType11',
                                    'arg_value' => isset($work->type_1_1) ? $work->type_1_1 : '',
                                    'arg_value_eng' => isset($work->type_1_1_eng) ? $work->type_1_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 1 2',
                                    'id_input_text' => 'InputWorkType12',
                                    'arg_value' => isset($work->type_1_2) ? $work->type_1_2 : '',
                                    'arg_value_eng' => isset($work->type_1_2_eng) ? $work->type_1_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 1',
                                    'id_input_text' => 'InputWorkTitle1',
                                    'arg_value' => isset($work->title_1) ? $work->title_1 : '',
                                    'arg_value_eng' => isset($work->title_1_eng) ? $work->title_1_eng : ''
                                    ])
                                </div>
                                <!-- 22222 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 2',
                                        'id_img_file' => 'InputWorkImg2',
                                        'id_text_file' => 'ImageWorkImg2Preview',
                                        'arg_value' => isset($work->img_2) ? asset("../storage/$work->img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 2 1',
                                    'id_input_text' => 'InputWorkType21',
                                    'arg_value' => isset($work->type_2_1) ? $work->type_2_1 : '',
                                    'arg_value_eng' => isset($work->type_2_1_eng) ? $work->type_2_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 2 2',
                                    'id_input_text' => 'InputWorkType22',
                                    'arg_value' => isset($work->type_2_2) ? $work->type_2_2 : '',
                                    'arg_value_eng' => isset($work->type_2_2_eng) ? $work->type_2_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 2',
                                    'id_input_text' => 'InputWorkTitle2',
                                    'arg_value' => isset($work->title_2) ? $work->title_2 : '',
                                    'arg_value_eng' => isset($work->title_2_eng) ? $work->title_2_eng : ''
                                    ])
                                </div>
                                <!-- 33333 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 3',
                                        'id_img_file' => 'InputWorkImg3',
                                        'id_text_file' => 'ImageWorkImg3Preview',
                                        'arg_value' => isset($work->img_3) ? asset("../storage/$work->img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 3 1',
                                    'id_input_text' => 'InputWorkType31',
                                    'arg_value' => isset($work->type_3_1) ? $work->type_3_1 : '',
                                    'arg_value_eng' => isset($work->type_3_1_eng) ? $work->type_3_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 3 2',
                                    'id_input_text' => 'InputWorkType32',
                                    'arg_value' => isset($work->type_3_2) ? $work->type_3_2 : '',
                                    'arg_value_eng' => isset($work->type_3_2_eng) ? $work->type_3_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 3',
                                    'id_input_text' => 'InputWorkTitle3',
                                    'arg_value' => isset($work->title_3) ? $work->title_3 : '',
                                    'arg_value_eng' => isset($work->title_3_eng) ? $work->title_3_eng : ''
                                    ])
                                </div>
                                <!-- 44444 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 4',
                                        'id_img_file' => 'InputWorkImg4',
                                        'id_text_file' => 'ImageWorkImg4Preview',
                                        'arg_value' => isset($work->img_4) ? asset("../storage/$work->img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 4 1',
                                    'id_input_text' => 'InputWorkType41',
                                    'arg_value' => isset($work->type_4_1) ? $work->type_4_1 : '',
                                    'arg_value_eng' => isset($work->type_4_1_eng) ? $work->type_4_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 4 2',
                                    'id_input_text' => 'InputWorkType42',
                                    'arg_value' => isset($work->type_4_2) ? $work->type_4_2 : '',
                                    'arg_value_eng' => isset($work->type_4_2_eng) ? $work->type_4_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 4',
                                    'id_input_text' => 'InputWorkTitle4',
                                    'arg_value' => isset($work->title_4) ? $work->title_4 : '',
                                    'arg_value_eng' => isset($work->title_4_eng) ? $work->title_4_eng : ''
                                    ])
                                </div>
                                <!-- 55555 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 5',
                                        'id_img_file' => 'InputWorkImg5',
                                        'id_text_file' => 'ImageWorkImg5Preview',
                                        'arg_value' => isset($work->img_5) ? asset("../storage/$work->img_5") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 5 1',
                                    'id_input_text' => 'InputWorkType51',
                                    'arg_value' => isset($work->type_5_1) ? $work->type_5_1 : '',
                                    'arg_value_eng' => isset($work->type_5_1_eng) ? $work->type_5_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 5 2',
                                    'id_input_text' => 'InputWorkType52',
                                    'arg_value' => isset($work->type_5_2) ? $work->type_5_2 : '',
                                    'arg_value_eng' => isset($work->type_5_2_eng) ? $work->type_5_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 5',
                                    'id_input_text' => 'InputWorkTitle5',
                                    'arg_value' => isset($work->title_5) ? $work->title_5 : '',
                                    'arg_value_eng' => isset($work->title_5_eng) ? $work->title_5_eng : ''
                                    ])
                                </div>
                                <!-- 66666 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 6',
                                        'id_img_file' => 'InputWorkImg6',
                                        'id_text_file' => 'ImageWorkImg6Preview',
                                        'arg_value' => isset($work->img_6) ? asset("../storage/$work->img_6") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 6 1',
                                    'id_input_text' => 'InputWorkType61',
                                    'arg_value' => isset($work->type_6_1) ? $work->type_6_1 : '',
                                    'arg_value_eng' => isset($work->type_6_1_eng) ? $work->type_6_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 6 2',
                                    'id_input_text' => 'InputWorkType62',
                                    'arg_value' => isset($work->type_6_2) ? $work->type_6_2 : '',
                                    'arg_value_eng' => isset($work->type_6_2_eng) ? $work->type_6_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 6',
                                    'id_input_text' => 'InputWorkTitle6',
                                    'arg_value' => isset($work->title_6) ? $work->title_6 : '',
                                    'arg_value_eng' => isset($work->title_6_eng) ? $work->title_6_eng : ''
                                    ])
                                </div>
                                <!-- 77777 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 7',
                                        'id_img_file' => 'InputWorkImg7',
                                        'id_text_file' => 'ImageWorkImg7Preview',
                                        'arg_value' => isset($work->img_7) ? asset("../storage/$work->img_7") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 7 1',
                                    'id_input_text' => 'InputWorkType71',
                                    'arg_value' => isset($work->type_7_1) ? $work->type_7_1 : '',
                                    'arg_value_eng' => isset($work->type_7_1_eng) ? $work->type_7_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Type 7 2',
                                    'id_input_text' => 'InputWorkType72',
                                    'arg_value' => isset($work->type_7_2) ? $work->type_7_2 : '',
                                    'arg_value_eng' => isset($work->type_7_2_eng) ? $work->type_7_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 7',
                                    'id_input_text' => 'InputWorkTitle7',
                                    'arg_value' => isset($work->title_7) ? $work->title_7 : '',
                                    'arg_value_eng' => isset($work->title_7_eng) ? $work->title_7_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveWorkPage({{ isset($work->id) ? $work->id : 0 }})">Salvar modificações Work Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formWorkPage.js") }}"></script>
        <!-- /.content -->
        @endsection
