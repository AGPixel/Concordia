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
                                        <label for="InputOportunidadeTitle">Title</label>
                                        <input type="text" name="oportunidadeTitle" class="form-control" id="InputOportunidadeTitle" value="{{ isset($oportunidade->title) ? $oportunidade->title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeDescription">Description</label>
                                        <input type="text" name="oportunidadeDescription" class="form-control" id="InputOportunidadeDescription" value="{{ isset($oportunidade->description) ? $oportunidade->description : '' }}">
                                    </div>
                                </div>
                                <!-- 11111 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg1">Image 1</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_1) ? asset("../storage/$oportunidade->img_1") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg1">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg1" id="ImageOportunidadeImg1Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType1">Type 1</label>
                                        <input type="text" name="oportunidadeType1" class="form-control" id="InputOportunidadeType1" value="{{ isset($oportunidade->type_1) ? $oportunidade->type_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle1">Title 1</label>
                                        <input type="text" name="oportunidadeTitle1" class="form-control" id="InputOportunidadeTitle1" value="{{ isset($oportunidade->title_1) ? $oportunidade->title_1 : '' }}">
                                    </div>
                                </div>
                                <!-- 22222 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg2">Image 2</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_2) ? asset("../storage/$oportunidade->img_2") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg2">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg2" id="ImageOportunidadeImg2Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType2">Type 2</label>
                                        <input type="text" name="oportunidadeType2" class="form-control" id="InputOportunidadeType2" value="{{ isset($oportunidade->type_2) ? $oportunidade->type_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle2">Title 2</label>
                                        <input type="text" name="oportunidadeTitle2" class="form-control" id="InputOportunidadeTitle2" value="{{ isset($oportunidade->title_2) ? $oportunidade->title_2 : '' }}">
                                    </div>
                                </div>
                                <!-- 33333 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg3">Image 3</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_3) ? asset("../storage/$oportunidade->img_3") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg3">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg3" id="ImageOportunidadeImg3Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType3">Type 3</label>
                                        <input type="text" name="oportunidadeType3" class="form-control" id="InputOportunidadeType3" value="{{ isset($oportunidade->type_3) ? $oportunidade->type_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle3">Title 3</label>
                                        <input type="text" name="oportunidadeTitle3" class="form-control" id="InputOportunidadeTitle3" value="{{ isset($oportunidade->title_3) ? $oportunidade->title_3 : '' }}">
                                    </div>
                                </div>
                                <!-- 44444 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg4">Image 4</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_4) ? asset("../storage/$oportunidade->img_4") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg4">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg4" id="ImageOportunidadeImg4Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType4">Type 4</label>
                                        <input type="text" name="oportunidadeType4" class="form-control" id="InputOportunidadeType4" value="{{ isset($oportunidade->type_4) ? $oportunidade->type_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle4">Title 4</label>
                                        <input type="text" name="oportunidadeTitle4" class="form-control" id="InputOportunidadeTitle4" value="{{ isset($oportunidade->title_4) ? $oportunidade->title_4 : '' }}">
                                    </div>
                                </div>
                                <!-- 55555 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg5">Image 5</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_5) ? asset("../storage/$oportunidade->img_5") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg5">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg5" id="ImageOportunidadeImg5Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType5">Type 5</label>
                                        <input type="text" name="oportunidadeType5" class="form-control" id="InputOportunidadeType5" value="{{ isset($oportunidade->type_5) ? $oportunidade->type_5 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle5">Title 5</label>
                                        <input type="text" name="oportunidadeTitle5" class="form-control" id="InputOportunidadeTitle5" value="{{ isset($oportunidade->title_5) ? $oportunidade->title_5 : '' }}">
                                    </div>
                                </div>
                                <!-- 66666 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg6">Image 6</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_6) ? asset("../storage/$oportunidade->img_6") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg6">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg6" id="ImageOportunidadeImg6Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType6">Type 6</label>
                                        <input type="text" name="oportunidadeType6" class="form-control" id="InputOportunidadeType6" value="{{ isset($oportunidade->type_6) ? $oportunidade->type_6 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle6">Title 6</label>
                                        <input type="text" name="oportunidadeTitle6" class="form-control" id="InputOportunidadeTitle6" value="{{ isset($oportunidade->title_6) ? $oportunidade->title_6 : '' }}">
                                    </div>
                                </div>
                                <!-- 77777 -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeImg7">Image 7</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ isset($oportunidade->img_7) ? asset("../storage/$oportunidade->img_7") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputOportunidadeImg7">
                                                <label class="custom-file-label disable" for="InputOportunidadeImg7" id="ImageOportunidadeImg7Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeType7">Type 7</label>
                                        <input type="text" name="oportunidadeType7" class="form-control" id="InputOportunidadeType7" value="{{ isset($oportunidade->type_7) ? $oportunidade->type_7 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputOportunidadeTitle7">Title 7</label>
                                        <input type="text" name="oportunidadeTitle7" class="form-control" id="InputOportunidadeTitle7" value="{{ isset($oportunidade->title_7) ? $oportunidade->title_7 : '' }}">
                                    </div>
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
