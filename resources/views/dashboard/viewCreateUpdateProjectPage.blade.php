@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Serviço')

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
                                    'title' => 'Title 1',
                                    'id_input_text' => 'InputProjectTitle1',
                                    'arg_value' => isset($project->title_1) ? $project->title_1 : '',
                                    'arg_value_eng' => isset($project->title_1_eng) ? $project->title_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description 1',
                                    'id_input_text' => 'InputProjectDescription1',
                                    'arg_value' => isset($project->description_1) ? $project->description_1 : '',
                                    'arg_value_eng' => isset($project->description_1_eng) ? $project->description_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Url Project',
                                    'id_input_text' => 'InputProjectUrlProject',
                                    'arg_value' => isset($project->url_project) ? $project->url_project : '' ])
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image Begin',
                                        'id_img_file' => 'InputProjectImgBegin',
                                        'id_text_file' => 'InputProjectImgBeginPreview',
                                        'arg_value' => isset($project->img_begin) ? asset("../storage/$project->img_begin") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 1',
                                        'id_img_file' => 'InputProjectImg1',
                                        'id_text_file' => 'InputProjectImg1Preview',
                                        'arg_value' => isset($project->img_1) ? asset("../storage/$project->img_1") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 2',
                                        'id_img_file' => 'InputProjectImg2',
                                        'id_text_file' => 'InputProjectImg2Preview',
                                        'arg_value' => isset($project->img_2) ? asset("../storage/$project->img_2") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 3',
                                        'id_img_file' => 'InputProjectImg3',
                                        'id_text_file' => 'InputProjectImg3Preview',
                                        'arg_value' => isset($project->img_3) ? asset("../storage/$project->img_3") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        @include('components.inputimg',['flag' => 'pteng',
                                        'title' => 'Image 4',
                                        'id_img_file' => 'InputProjectImg4',
                                        'id_text_file' => 'InputProjectImg4Preview',
                                        'arg_value' => isset($project->img_4) ? asset("../storage/$project->img_4") : asset("/assets/img/sem_foto.png")])
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title 2',
                                    'id_input_text' => 'InputProjectTitle2',
                                    'arg_value' => isset($project->title_2) ? $project->title_2 : '',
                                    'arg_value_eng' => isset($project->title_2_eng) ? $project->title_2_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description 2',
                                    'id_input_text' => 'InputProjectDescription2',
                                    'arg_value' => isset($project->description_2) ? $project->description_2 : '',
                                    'arg_value_eng' => isset($project->description_2_eng) ? $project->description_2_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveProjectPage({{ isset($project->id) ? $project->id : 0 }})">Salvar modificações Project Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formProjectPage.js") }}"></script>
        <!-- /.content -->
        @endsection
