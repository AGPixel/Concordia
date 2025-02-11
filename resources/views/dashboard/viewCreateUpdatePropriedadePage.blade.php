@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Propriedade Page')

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
                                        <label for="InputPropriedadeTitle">Title</label>
                                        <input type="text" name="propriedadeTitle" class="form-control" id="InputPropriedadeTitle" value="{{ isset($propriedade->title) ? $propriedade->title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeDescription">Description</label>
                                        <input type="text" name="propriedadeDescription" class="form-control" id="InputPropriedadeDescription" value="{{ isset($propriedade->description) ? $propriedade->description : '' }}">
                                    </div>
                                </div>
                                <!-- 11111 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg1">Image 1</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_1) ? asset("../storage/$propriedade->img_1") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg1">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg1" id="ImagePropriedadeImg1Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType1">Type 1</label>
                                        <input type="text" name="propriedadeType1" class="form-control" id="InputPropriedadeType1" value="{{ isset($propriedade->type_1) ? $propriedade->type_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle1">Title 1</label>
                                        <input type="text" name="propriedadeTitle1" class="form-control" id="InputPropriedadeTitle1" value="{{ isset($propriedade->title_1) ? $propriedade->title_1 : '' }}">
                                    </div>
                                </div>
                                <!-- 22222 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg2">Image 2</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_2) ? asset("../storage/$propriedade->img_2") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg2">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg2" id="ImagePropriedadeImg2Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType2">Type 2</label>
                                        <input type="text" name="propriedadeType2" class="form-control" id="InputPropriedadeType2" value="{{ isset($propriedade->type_2) ? $propriedade->type_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle2">Title 2</label>
                                        <input type="text" name="propriedadeTitle2" class="form-control" id="InputPropriedadeTitle2" value="{{ isset($propriedade->title_2) ? $propriedade->title_2 : '' }}">
                                    </div>
                                </div>
                                <!-- 33333 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg3">Image 3</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_3) ? asset("../storage/$propriedade->img_3") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg3">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg3" id="ImagePropriedadeImg3Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType3">Type 3</label>
                                        <input type="text" name="propriedadeType3" class="form-control" id="InputPropriedadeType3" value="{{ isset($propriedade->type_3) ? $propriedade->type_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle3">Title 3</label>
                                        <input type="text" name="propriedadeTitle3" class="form-control" id="InputPropriedadeTitle3" value="{{ isset($propriedade->title_3) ? $propriedade->title_3 : '' }}">
                                    </div>
                                </div>
                                <!-- 44444 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg4">Image 4</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_4) ? asset("../storage/$propriedade->img_4") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg4">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg4" id="ImagePropriedadeImg4Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType4">Type 4</label>
                                        <input type="text" name="propriedadeType4" class="form-control" id="InputPropriedadeType4" value="{{ isset($propriedade->type_4) ? $propriedade->type_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle4">Title 4</label>
                                        <input type="text" name="propriedadeTitle4" class="form-control" id="InputPropriedadeTitle4" value="{{ isset($propriedade->title_4) ? $propriedade->title_4 : '' }}">
                                    </div>
                                </div>
                                <!-- 55555 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg5">Image 5</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_5) ? asset("../storage/$propriedade->img_5") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg5">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg5" id="ImagePropriedadeImg5Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType5">Type 5</label>
                                        <input type="text" name="propriedadeType5" class="form-control" id="InputPropriedadeType5" value="{{ isset($propriedade->type_5) ? $propriedade->type_5 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle5">Title 5</label>
                                        <input type="text" name="propriedadeTitle5" class="form-control" id="InputPropriedadeTitle5" value="{{ isset($propriedade->title_5) ? $propriedade->title_5 : '' }}">
                                    </div>
                                </div>
                                <!-- 66666 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg6">Image 6</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_6) ? asset("../storage/$propriedade->img_6") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg6">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg6" id="ImagePropriedadeImg6Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType6">Type 6</label>
                                        <input type="text" name="propriedadeType6" class="form-control" id="InputPropriedadeType6" value="{{ isset($propriedade->type_6) ? $propriedade->type_6 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle6">Title 6</label>
                                        <input type="text" name="propriedadeTitle6" class="form-control" id="InputPropriedadeTitle6" value="{{ isset($propriedade->title_6) ? $propriedade->title_6 : '' }}">
                                    </div>
                                </div>
                                <!-- 77777 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeImg7">Image 7</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($propriedade->img_7) ? asset("../storage/$propriedade->img_7") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputPropriedadeImg7">
                                                <label class="custom-file-label disable" for="InputPropriedadeImg7" id="ImagePropriedadeImg7Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeType7">Type 7</label>
                                        <input type="text" name="propriedadeType7" class="form-control" id="InputPropriedadeType7" value="{{ isset($propriedade->type_7) ? $propriedade->type_7 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputPropriedadeTitle7">Title 7</label>
                                        <input type="text" name="propriedadeTitle7" class="form-control" id="InputPropriedadeTitle7" value="{{ isset($propriedade->title_7) ? $propriedade->title_7 : '' }}">
                                    </div>
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
