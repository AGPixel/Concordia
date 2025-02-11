@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Project Page')

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
                                        <label for="InputProjectTitle">Title</label>
                                        <input type="text" name="projectTitle" class="form-control" id="InputProjectTitle" value="{{ isset($project->title) ? $project->title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectDescription">Description</label>
                                        <input type="text" name="projectDescription" class="form-control" id="InputProjectDescription" value="{{ isset($project->description) ? $project->description : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectWork1">Work 1</label>
                                        <input type="text" name="projectWork1" class="form-control" id="InputProjectWork1" value="{{ isset($project->work_1) ? $project->work_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectWork2">Work 2</label>
                                        <input type="text" name="projectWork2" class="form-control" id="InputProjectWork2" value="{{ isset($project->work_2) ? $project->work_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectWork3">Work 3</label>
                                        <input type="text" name="projectWork3" class="form-control" id="InputProjectWork3" value="{{ isset($project->work_3) ? $project->work_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectUrlProject">Url Project</label>
                                        <input type="text" name="projectUrlProject" class="form-control" id="InputProjectUrlProject" value="{{ isset($project->url_project) ? $project->url_project : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImgBegin">Image Begin</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $project->img_begin ? asset("../storage/$project->img_begin") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputProjectImgBegin">
                                                <label class="custom-file-label disable" for="InputProjectImgBegin" id="ImageProjectImgBeginPreview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectTitleEmployee">Title Employee</label>
                                        <input type="text" name="projectTitleEmployee" class="form-control" id="InputProjectTitleEmployee" value="{{ isset($project->title_employee) ? $project->title_employee : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployee1">Employee 1</label>
                                        <input type="text" name="projectEmployee1" class="form-control" id="InputProjectEmployee1" value="{{ isset($project->employee_1) ? $project->employee_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployeeJob1">Employee Job 1</label>
                                        <input type="text" name="projectEmployeeJob1" class="form-control" id="InputProjectEmployeeJob1" value="{{ isset($project->employee_job_1) ? $project->employee_job_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployee2">Employee 2</label>
                                        <input type="text" name="projectEmployee2" class="form-control" id="InputProjectEmployee2" value="{{ isset($project->employee_2) ? $project->employee_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployeeJob2">Employee Job 2</label>
                                        <input type="text" name="projectEmployeeJob2" class="form-control" id="InputProjectEmployeeJob2" value="{{ isset($project->employee_job_2) ? $project->employee_job_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployee3">Employee 3</label>
                                        <input type="text" name="projectEmployee3" class="form-control" id="InputProjectEmployee3" value="{{ isset($project->employee_3) ? $project->employee_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployeeJob3">Employee Job 3</label>
                                        <input type="text" name="projectEmployeeJob3" class="form-control" id="InputProjectEmployeeJob3" value="{{ isset($project->employee_job_3) ? $project->employee_job_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployee4">Employee 4</label>
                                        <input type="text" name="projectEmployee4" class="form-control" id="InputProjectEmployee4" value="{{ isset($project->employee_4) ? $project->employee_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectEmployeeJob4">Employee Job 4</label>
                                        <input type="text" name="projectEmployeeJob4" class="form-control" id="InputProjectEmployeeJob4" value="{{ isset($project->employee_job_4) ? $project->employee_job_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImg1">Image 1</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $project->img_1 ? asset("../storage/$project->img_1") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputProjectImg1">
                                                <label class="custom-file-label disable" for="InputProjectImg1" id="ImageProjectImg1Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImg2">Image 2</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $project->img_2 ? asset("../storage/$project->img_2") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputProjectImg2">
                                                <label class="custom-file-label disable" for="InputProjectImg2" id="ImageProjectImg2Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImg3">Image 3</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $project->img_3 ? asset("../storage/$project->img_3") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputProjectImg3">
                                                <label class="custom-file-label disable" for="InputProjectImg3" id="ImageProjectImg3Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImg4">Image 4</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $project->img_4 ? asset("../storage/$project->img_4") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputProjectImg4">
                                                <label class="custom-file-label disable" for="InputProjectImg4" id="ImageProjectImg4Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImageDescription4">Image Description 4</label>
                                        <input type="text" name="projectImageDescription4" class="form-control" id="InputProjectImageDescription4" value="{{ isset($project->image_description_4) ? $project->image_description_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImg5">Image 5</label><br>
                                        <img class="m-bot-05 image_preview" src="{{ $project->img_5 ? asset("../storage/$project->img_5") : asset("/assets/img/sem_foto.png") }}" alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputProjectImg5">
                                                <label class="custom-file-label disable" for="InputProjectImg5" id="ImageProjectImg5Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputProjectImageDescription5">Image Description 5</label>
                                        <input type="text" name="projectImageDescription5" class="form-control" id="InputProjectImageDescription5" value="{{ isset($project->image_description_5) ? $project->image_description_5 : '' }}">
                                    </div>
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
