@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Contact Page')

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
                                    <div class="form-group">
                                        <label for="InputWorkTitle">Title</label>
                                        <input type="text" name="workTitle" class="form-control" id="InputWorkTitle" value="{{ isset($work->title) ? $work->title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkDescription">Description</label>
                                        <input type="text" name="workDescription" class="form-control" id="InputWorkDescription" value="{{ isset($work->description) ? $work->description : '' }}">
                                    </div>
                                </div>
                                <!-- 11111 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg1">Image 1</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_1 ? asset("../storage/$work->img_1") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg1">
                                                <label class="custom-file-label disable" for="InputWorkImg1" id="ImageWorkImg1Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType1">Type 1</label>
                                        <input type="text" name="workType1" class="form-control" id="InputWorkType1" value="{{ isset($work->type_1) ? $work->type_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle1">Title 1</label>
                                        <input type="text" name="workTitle1" class="form-control" id="InputWorkTitle1" value="{{ isset($work->title_1) ? $work->title_1 : '' }}">
                                    </div>
                                </div>
                                <!-- 22222 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg2">Image 2</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_2 ? asset("../storage/$work->img_2") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg2">
                                                <label class="custom-file-label disable" for="InputWorkImg2" id="ImageWorkImg2Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType2">Type 2</label>
                                        <input type="text" name="workType2" class="form-control" id="InputWorkType2" value="{{ isset($work->type_2) ? $work->type_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle2">Title 2</label>
                                        <input type="text" name="workTitle2" class="form-control" id="InputWorkTitle2" value="{{ isset($work->title_2) ? $work->title_2 : '' }}">
                                    </div>
                                </div>
                                <!-- 33333 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg3">Image 3</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_3 ? asset("../storage/$work->img_3") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg3">
                                                <label class="custom-file-label disable" for="InputWorkImg3" id="ImageWorkImg3Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType3">Type 3</label>
                                        <input type="text" name="workType3" class="form-control" id="InputWorkType3" value="{{ isset($work->type_3) ? $work->type_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle3">Title 3</label>
                                        <input type="text" name="workTitle3" class="form-control" id="InputWorkTitle3" value="{{ isset($work->title_3) ? $work->title_3 : '' }}">
                                    </div>
                                </div>
                                <!-- 44444 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg4">Image 4</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_4 ? asset("../storage/$work->img_4") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg4">
                                                <label class="custom-file-label disable" for="InputWorkImg4" id="ImageWorkImg4Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType4">Type 4</label>
                                        <input type="text" name="workType4" class="form-control" id="InputWorkType4" value="{{ isset($work->type_4) ? $work->type_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle4">Title 4</label>
                                        <input type="text" name="workTitle4" class="form-control" id="InputWorkTitle4" value="{{ isset($work->title_4) ? $work->title_4 : '' }}">
                                    </div>
                                </div>
                                <!-- 55555 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg5">Image 5</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_5 ? asset("../storage/$work->img_5") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg5">
                                                <label class="custom-file-label disable" for="InputWorkImg5" id="ImageWorkImg5Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType5">Type 5</label>
                                        <input type="text" name="workType5" class="form-control" id="InputWorkType5" value="{{ isset($work->type_5) ? $work->type_5 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle5">Title 5</label>
                                        <input type="text" name="workTitle5" class="form-control" id="InputWorkTitle5" value="{{ isset($work->title_5) ? $work->title_5 : '' }}">
                                    </div>
                                </div>
                                <!-- 66666 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg6">Image 6</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_6 ? asset("../storage/$work->img_6") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg6">
                                                <label class="custom-file-label disable" for="InputWorkImg6" id="ImageWorkImg6Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType6">Type 6</label>
                                        <input type="text" name="workType6" class="form-control" id="InputWorkType6" value="{{ isset($work->type_6) ? $work->type_6 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle6">Title 6</label>
                                        <input type="text" name="workTitle6" class="form-control" id="InputWorkTitle6" value="{{ isset($work->title_6) ? $work->title_6 : '' }}">
                                    </div>
                                </div>
                                <!-- 77777 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorkImg7">Image 7</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $work->img_7 ? asset("../storage/$work->img_7") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorkImg7">
                                                <label class="custom-file-label disable" for="InputWorkImg7" id="ImageWorkImg7Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkType7">Type 7</label>
                                        <input type="text" name="workType7" class="form-control" id="InputWorkType7" value="{{ isset($work->type_7) ? $work->type_7 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputWorkTitle7">Title 7</label>
                                        <input type="text" name="workTitle7" class="form-control" id="InputWorkTitle7" value="{{ isset($work->title_7) ? $work->title_7 : '' }}">
                                    </div>
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
