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
                                    <div class="form-group">
                                        <label for="InputAboutTitle1">About Title 1</label>
                                        <input type="text" name="aboutTitle1" class="form-control" id="InputAboutTitle1" value="{{ $about->about_title_1 ? $about->about_title_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutTitle2">About Title 2</label>
                                        <input type="text" name="aboutTitle2" class="form-control" id="InputAboutTitle2" value="{{ $about->about_title_2 ? $about->about_title_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutImg1">Image About 1: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutImg1">
                                                <label class="custom-file-label disable" for="InputAboutImg1" id="ImageAbout1">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutImg2">Image About 2: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutImg2">
                                                <label class="custom-file-label disable" for="InputAboutImg2" id="ImageAbout2">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutImg3">Image About 3: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutImg3">
                                                <label class="custom-file-label disable" for="InputAboutImg3" id="ImageAbout3">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutImg4">Image About 4: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutImg4">
                                                <label class="custom-file-label disable" for="InputAboutImg4" id="ImageAbout4">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceTitle">About Service Title</label>
                                        <input type="text" name="aboutServiceTitle" class="form-control" id="InputAboutServiceTitle" value="{{ $about->about_service_title ? $about->about_service_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutService1">About Service 1</label>
                                        <input type="text" name="aboutService1" class="form-control" id="InputAboutService1" value="{{ $about->about_service_1 ? $about->about_service_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceImg1">About Service Image 1: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutServiceImg1">
                                                <label class="custom-file-label disable" for="InputAboutServiceImg1" id="aboutServiceImg1">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutService2">About Service 2</label>
                                        <input type="text" name="aboutService2" class="form-control" id="InputAboutService2" value="{{ $about->about_service_2 ? $about->about_service_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceImg2">About Service Image 2: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutServiceImg2">
                                                <label class="custom-file-label disable" for="InputAboutServiceImg2" id="aboutServiceImg2">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutService3">About Service 3</label>
                                        <input type="text" name="aboutService3" class="form-control" id="InputAboutService3" value="{{ $about->about_service_3 ? $about->about_service_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceImg3">About Service Image 3: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutServiceImg3">
                                                <label class="custom-file-label disable" for="InputAboutServiceImg3" id="aboutServiceImg3">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutService4">About Service 4</label>
                                        <input type="text" name="aboutService4" class="form-control" id="InputAboutService4" value="{{ $about->about_service_4 ? $about->about_service_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceImg4">About Service Image 4: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutServiceImg4">
                                                <label class="custom-file-label disable" for="InputAboutServiceImg4" id="aboutServiceImg4">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutService5">About Service 5</label>
                                        <input type="text" name="aboutService5" class="form-control" id="InputAboutService5" value="{{ $about->about_service_5 ? $about->about_service_5 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceImg5">About Service Image 5: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutServiceImg5">
                                                <label class="custom-file-label disable" for="InputAboutServiceImg5" id="aboutServiceImg5">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutService6">About Service 6</label>
                                        <input type="text" name="aboutService6" class="form-control" id="InputAboutService6" value="{{ $about->about_service_6 ? $about->about_service_6 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutServiceImg6">About Service Image 6: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutServiceImg6">
                                                <label class="custom-file-label disable" for="InputAboutServiceImg6" id="aboutServiceImg6">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceTitle">About Experience Title</label>
                                        <input type="text" name="aboutExperienceTitle" class="form-control" id="InputAboutExperienceTitle" value="{{ $about->about_experience_title ? $about->about_experience_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceTitle1">About Experience Title 1</label>
                                        <input type="text" name="aboutExperienceTitle1" class="form-control" id="InputAboutExperienceTitle1" value="{{ $about->about_experience_title_1 ? $about->about_experience_title_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceDescription1">About Experience Description 1</label>
                                        <input type="text" name="aboutExperienceDescription1" class="form-control" id="InputAboutExperienceDescription1" value="{{ $about->about_experience_description_1 ? $about->about_experience_description_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceData1">About Experience Data 1</label>
                                        <input type="text" name="aboutExperienceData1" class="form-control" id="InputAboutExperienceData1" value="{{ $about->about_experience_data_1 ? $about->about_experience_data_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceTitle2">About Experience Title 2</label>
                                        <input type="text" name="aboutExperienceTitle2" class="form-control" id="InputAboutExperienceTitle2" value="{{ $about->about_experience_title_2 ? $about->about_experience_title_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceDescription2">About Experience Description 2</label>
                                        <input type="text" name="aboutExperienceDescription2" class="form-control" id="InputAboutExperienceDescription2" value="{{ $about->about_experience_description_2 ? $about->about_experience_description_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceData2">About Experience Data 2</label>
                                        <input type="text" name="aboutExperienceData2" class="form-control" id="InputAboutExperienceData2" value="{{ $about->about_experience_data_2 ? $about->about_experience_data_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceTitle3">About Experience Title 3</label>
                                        <input type="text" name="aboutExperienceTitle3" class="form-control" id="InputAboutExperienceTitle3" value="{{ $about->about_experience_title_3 ? $about->about_experience_title_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceDescription3">About Experience Description 3</label>
                                        <input type="text" name="aboutExperienceDescription3" class="form-control" id="InputAboutExperienceDescription3" value="{{ $about->about_experience_description_3 ? $about->about_experience_description_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceData3">About Experience Data 3</label>
                                        <input type="text" name="aboutExperienceData3" class="form-control" id="InputAboutExperienceData3" value="{{ $about->about_experience_data_3 ? $about->about_experience_data_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceTitle4">About Experience Title 4</label>
                                        <input type="text" name="aboutExperienceTitle4" class="form-control" id="InputAboutExperienceTitle4" value="{{ $about->about_experience_title_4 ? $about->about_experience_title_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceDescription4">About Experience Description 4</label>
                                        <input type="text" name="aboutExperienceDescription4" class="form-control" id="InputAboutExperienceDescription4" value="{{ $about->about_experience_description_4 ? $about->about_experience_description_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutExperienceData4">About Experience Data 4</label>
                                        <input type="text" name="aboutExperienceData4" class="form-control" id="InputAboutExperienceData4" value="{{ $about->about_experience_data_4 ? $about->about_experience_data_4 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutBrandsTitle">About Brands Title</label>
                                        <input type="text" name="aboutBrandsTitle" class="form-control" id="InputAboutBrandsTitle" value="{{ $about->about_brands_title ? $about->about_brands_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutBrandsImg1">About Brands Image 1: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutBrandsImg1">
                                                <label class="custom-file-label disable" for="InputAboutBrandsImg1" id="aboutBrandsImg1">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutBrandsImg2">About Brands Image 2: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutBrandsImg2">
                                                <label class="custom-file-label disable" for="InputAboutBrandsImg2" id="aboutBrandsImg2">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutBrandsImg3">About Brands Image 3: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutBrandsImg3">
                                                <label class="custom-file-label disable" for="InputAboutBrandsImg3" id="aboutBrandsImg3">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutBrandsImg4">About Brands Image 4: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutBrandsImg4">
                                                <label class="custom-file-label disable" for="InputAboutBrandsImg4" id="aboutBrandsImg4">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAboutBrandsDescription">About Brands Description</label>
                                        <input type="text" name="aboutBrandsDescription" class="form-control" id="InputAboutBrandsDescription" value="{{ $about->about_brands_description ? $about->about_brands_description : '' }}">
                                    </div>
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
