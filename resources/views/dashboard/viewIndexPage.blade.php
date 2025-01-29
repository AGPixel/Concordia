@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Index Page')

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
                                        <label for="InputAboutTitle">About Title</label>
                                        <input type="text" name="aboutTitle" class="form-control" id="InputAboutTitle" value="{{ $args->about_title ? $args->about_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutDescription">About Description</label>
                                        <input type="text" name="aboutDescription" class="form-control" id="InputAboutDescription" value="{{ $args->about_description ? $args->about_description : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutImg">Image About: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutImg">
                                                <label class="custom-file-label disable" for="InputAboutImg" id="ImageAboutPreview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutNum1">About Number 1</label>
                                        <input type="text" name="aboutNum1" class="form-control" id="InputAboutNum1" value="{{ $args->about_num_1 ? $args->about_num_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutDescription1">About Description 1</label>
                                        <input type="text" name="aboutDescription1" class="form-control" id="InputAboutDescription1" value="{{ $args->about_description_1 ? $args->about_description_1 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutNum2">About Number 2</label>
                                        <input type="text" name="aboutNum2" class="form-control" id="InputAboutNum2" value="{{ $args->about_num_2 ? $args->about_num_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutDescription2">About Description 2</label>
                                        <input type="text" name="aboutDescription2" class="form-control" id="InputAboutDescription2" value="{{ $args->about_description_2 ? $args->about_description_2 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutNum3">About Number 3</label>
                                        <input type="text" name="aboutNum3" class="form-control" id="InputAboutNum3" value="{{ $args->about_num_3 ? $args->about_num_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutDescription3">About Description 3</label>
                                        <input type="text" name="aboutDescription3" class="form-control" id="InputAboutDescription3" value="{{ $args->about_description_3 ? $args->about_description_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputAboutImg3">Image About 3: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputAboutImg3">
                                                <label class="custom-file-label disable" for="InputAboutImg3" id="ImageAboutImg3Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceTitle">Service Title</label>
                                        <input type="text" name="serviceTitle" class="form-control" id="InputServiceTitle" value="{{ $args->service_title ? $args->service_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceTitle1">Service Title 1</label>
                                        <input type="text" name="serviceTitle1" class="form-control" id="InputServiceTitle1" value="{{ $args->service_title_1 ? $args->service_title_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceDescription1">Service Description 1</label>
                                        <input type="text" name="serviceDescription1" class="form-control" id="InputServiceDescription1" value="{{ $args->service_description_1 ? $args->service_description_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceTitle2">Service Title 2</label>
                                        <input type="text" name="serviceTitle2" class="form-control" id="InputServiceTitle2" value="{{ $args->service_title_2 ? $args->service_title_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceDescription2">Service Description 2</label>
                                        <input type="text" name="serviceDescription2" class="form-control" id="InputServiceDescription2" value="{{ $args->service_description_2 ? $args->service_description_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceTitle3">Service Title 3</label>
                                        <input type="text" name="serviceTitle3" class="form-control" id="InputServiceTitle3" value="{{ $args->service_title_3 ? $args->service_title_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputServiceDescription3">Service Description 3</label>
                                        <input type="text" name="serviceDescription3" class="form-control" id="InputServiceDescription3" value="{{ $args->service_description_3 ? $args->service_description_3 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputPortifolioTitle">Portifolio Title</label>
                                        <input type="text" name="portifolioTitle" class="form-control" id="InputPortifolioTitle" value="{{ $args->portifolio_title ? $args->portifolio_title : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFrameNumber1">Frame Number 1</label>
                                        <input type="text" name="frameNumber1" class="form-control" id="InputFrameNumber1" value="{{ $args->frame_number_1 ? $args->frame_number_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFrameLegend1">Frame Legend 1</label>
                                        <input type="text" name="frameLegend1" class="form-control" id="InputFrameLegend1" value="{{ $args->frame_legend_1 ? $args->frame_legend_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFrameDescription1">Frame Description 1</label>
                                        <input type="text" name="frameDescription1" class="form-control" id="InputFrameDescription1" value="{{ $args->frame_description_1 ? $args->frame_description_1 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFrameNumber2">Frame Number 2</label>
                                        <input type="text" name="frameNumber2" class="form-control" id="InputFrameNumber2" value="{{ $args->frame_number_2 ? $args->frame_number_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFrameLegend2">Frame Legend 2</label>
                                        <input type="text" name="frameLegend2" class="form-control" id="InputFrameLegend2" value="{{ $args->frame_legend_2 ? $args->frame_legend_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFrameDescription2">Frame Description 2</label>
                                        <input type="text" name="frameDescription2" class="form-control" id="InputFrameDescription2" value="{{ $args->frame_description_2 ? $args->frame_description_2 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsTitle">Testimonials Title</label>
                                        <input type="text" name="testimonialsTitle" class="form-control" id="InputTestimonialsTitle" value="{{ $args->testimonials_title ? $args->testimonials_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsDescription">Testimonials Description</label>
                                        <input type="text" name="testimonialsDescription" class="form-control" id="InputTestimonialsDescription" value="{{ $args->testimonials_description ? $args->testimonials_description : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsNum1">Testimonials Num 1</label>
                                        <input type="text" name="testimonialsNum1" class="form-control" id="InputTestimonialsNum1" value="{{ $args->testimonials_number_1 ? $args->testimonials_number_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsDescription1">Testimonials Description 1</label>
                                        <input type="text" name="testimonialsDescription1" class="form-control" id="InputTestimonialsDescription1" value="{{ $args->testimonials_description_1 ? $args->testimonials_description_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsImg1">Testimonials Image 1</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputTestimonialsImg1">
                                                <label class="custom-file-label" for="InputTestimonialsImg1" id="InputTestimonialsImg1Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsCompany1">Testimonials Company 1</label>
                                        <input type="text" name="testimonialsCompany1" class="form-control" id="InputTestimonialsCompany1" value="{{ $args->testimonials_company_1 ? $args->testimonials_company_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsName1">Testimonials Name 1</label>
                                        <input type="text" name="testimonialsName1" class="form-control" id="InputTestimonialsName1" value="{{ $args->testimonials_name_1 ? $args->testimonials_name_1 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsNum2">Testimonials Num 2</label>
                                        <input type="text" name="testimonialsNum2" class="form-control" id="InputTestimonialsNum2" value="{{ $args->testimonials_num_2 ? $args->testimonials_num_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsDescription2">Testimonials Description 2</label>
                                        <input type="text" name="testimonialsDescription2" class="form-control" id="InputTestimonialsDescription2" value="{{ $args->testimonials_description_2 ? $args->testimonials_description_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsImg2">Testimonials Image 2</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputTestimonialsImg2">
                                                <label class="custom-file-label" for="InputTestimonialsImg2" id="InputTestimonialsImg2Preview">Clique para escolher o arquivo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsCompany2">Testimonials Company 2</label>
                                        <input type="text" name="testimonialsCompany2" class="form-control" id="InputTestimonialsCompany2" value="{{ $args->testimonials_company_2 ? $args->testimonials_company_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputTestimonialsName2">Testimonials Name 2</label>
                                        <input type="text" name="testimonialsName2" class="form-control" id="InputTestimonialsName2" value="{{ $args->testimonials_name_2 ? $args->testimonials_name_2: '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeTitle">Employee Title</label>
                                        <input type="text" name="employeeTitle" class="form-control" id="InputEmployeeTitle" value="{{ $args->employee_title ? $args->employee_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeName1">Employee Name 1</label>
                                        <input type="text" name="employeeName1" class="form-control" id="InputEmployeeName1" value="{{ $args->employee_name_1 ? $args->employee_name_1: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeWork1">Employee Work 1</label>
                                        <input type="text" name="employeeWork1" class="form-control" id="InputEmployeeWork1" value="{{ $args->employee_work_1 ? $args->employee_work_1: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlFacebook1">Employee Facebook 1</label>
                                        <input type="text" name="employeeUrlFacebook1" class="form-control" id="InputEmployeeUrlFacebook1" value="{{ $args->employee_url_facebook_1 ? $args->employee_url_facebook_1: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlInstagram1">Employee Instagram 1</label>
                                        <input type="text" name="employeeUrlInstagram1" class="form-control" id="InputEmployeeUrlInstagram1" value="{{ $args->employee_url_instagram_1 ? $args->employee_url_instagram_1: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlTwitter1">Employee Twitter 1</label>
                                        <input type="text" name="employeeUrlTwitter1" class="form-control" id="InputEmployeeUrlTwitter1" value="{{ $args->employee_url_twitter_1 ? $args->employee_url_twitter_1: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeName2">Employee Name 2</label>
                                        <input type="text" name="employeeName2" class="form-control" id="InputEmployeeName2" value="{{ $args->employee_name_2 ? $args->employee_name_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeWork2">Employee Work 2</label>
                                        <input type="text" name="employeeWork2" class="form-control" id="InputEmployeeWork2" value="{{ $args->employee_work_2 ? $args->employee_work_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlFacebook2">Employee Facebook 2</label>
                                        <input type="text" name="employeeUrlFacebook2" class="form-control" id="InputEmployeeUrlFacebook2" value="{{ $args->employee_url_facebook_2 ? $args->employee_url_facebook_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlInstagram2">Employee Instagram 2</label>
                                        <input type="text" name="employeeUrlInstagram2" class="form-control" id="InputEmployeeUrlInstagram2" value="{{ $args->employee_url_instagram_2 ? $args->employee_url_instagram_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlTwitter2">Employee Twitter 2</label>
                                        <input type="text" name="employeeUrlTwitter2" class="form-control" id="InputEmployeeUrlTwitter2" value="{{ $args->employee_url_twitter_2 ? $args->employee_url_twitter_2: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeName3">Employee Name 3</label>
                                        <input type="text" name="employeeName3" class="form-control" id="InputEmployeeName3" value="{{ $args->employee_name_3 ? $args->employee_name_3: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeWork3">Employee Work 3</label>
                                        <input type="text" name="employeeWork3" class="form-control" id="InputEmployeeWork3" value="{{ $args->employee_work_3 ? $args->employee_work_3: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlFacebook3">Employee Facebook 3</label>
                                        <input type="text" name="employeeUrlFacebook3" class="form-control" id="InputEmployeeUrlFacebook3" value="{{ $args->employee_url_facebook_3 ? $args->employee_url_facebook_3: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlInstagram3">Employee Instagram 3</label>
                                        <input type="text" name="employeeUrlInstagram3" class="form-control" id="InputEmployeeUrlInstagram3" value="{{ $args->employee_url_instagram_3 ? $args->employee_url_instagram_3: '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmployeeUrlTwitter3">Employee Twitter 3</label>
                                        <input type="text" name="employeeUrlTwitter3" class="form-control" id="InputEmployeeUrlTwitter3" value="{{ $args->employee_url_twitter_3 ? $args->employee_url_twitter_3: '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksTitle">Works Title</label>
                                        <input type="text" name="worksTitle" class="form-control" id="InputWorksTitle" value="{{ $args->works_title ? $args->works_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksTitle1">Works Title 1</label>
                                        <input type="text" name="worksTitle1" class="form-control" id="InputWorksTitle1" value="{{ $args->works_title_1 ? $args->works_title_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksImg1">Works Image 1</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorksImg1">
                                                <label class="custom-file-label" for="InputWorksImg1" id="InputWorksImg1Preview">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksDate1">Works Date 1</label>
                                        <input type="text" name="worksDate1" class="form-control" id="InputWorksDate1" value="{{ $args->works_date_1 ? $args->works_date_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksDescription1">Works Description 1</label>
                                        <input type="text" name="worksDescription1" class="form-control" id="InputWorksDescription1" value="{{ $args->works_description_1 ? $args->works_description_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksTitle2">Works Title 2</label>
                                        <input type="text" name="worksTitle2" class="form-control" id="InputWorksTitle2" value="{{ $args->works_title_2 ? $args->works_title_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksImg2">Works Image 2</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorksImg2">
                                                <label class="custom-file-label" for="InputWorksImg2" id="InputWorksImg2Preview">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksDate2">Works Date 2</label>
                                        <input type="text" name="worksDate2" class="form-control" id="InputWorksDate2" value="{{ $args->works_date_2 ? $args->works_date_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksDescription2">Works Description 2</label>
                                        <input type="text" name="worksDescription2" class="form-control" id="InputWorksDescription2" value="{{ $args->works_description_2 ? $args->works_description_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksTitle3">Works Title 3</label>
                                        <input type="text" name="worksTitle3" class="form-control" id="InputWorksTitle3" value="{{ $args->works_title_3 ? $args->works_title_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksImg3">Works Image 3</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="InputWorksImg3">
                                                <label class="custom-file-label" for="InputWorksImg3" id="InputWorksImg3Preview">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksDate3">Works Date 3</label>
                                        <input type="text" name="worksDate3" class="form-control" id="InputWorksDate3" value="{{ $args->works_date_3 ? $args->works_date_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputWorksDescription3">Works Description 3</label>
                                        <input type="text" name="worksDescription3" class="form-control" id="InputWorksDescription3" value="{{ $args->works_description_3 ? $args->works_description_3 : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputFinalTitle">Final Title</label>
                                        <input type="text" name="finalTitle" class="form-control" id="InputFinalTitle" value="{{ $args->final_title ? $args->final_title : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputSignTitle">Sign Title</label>
                                        <input type="text" name="signTitle" class="form-control" id="InputSignTitle" value="{{ $args->sign_title ? $args->sign_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputSignDescription">Sign Description</label>
                                        <input type="text" name="signDescription" class="form-control" id="InputSignDescription" value="{{ $args->sign_description ? $args->sign_description : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputSignRolling">Sign Rolling</label>
                                        <input type="text" name="signRolling" class="form-control" id="InputSignRolling" value="{{ $args->sign_rolling ? $args->sign_rolling : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputSocialFacebook">Social Facebook</label>
                                        <input type="text" name="socialFacebook" class="form-control" id="InputSocialFacebook" value="{{ $args->social_url_facebook ? $args->social_url_facebook : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputSocialInstagram">Social Instagram</label>
                                        <input type="text" name="socialInstagram" class="form-control" id="InputSocialInstagram" value="{{ $args->social_url_instagram ? $args->social_url_instagram : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputSocialTwitter">Social Twitter</label>
                                        <input type="text" name="socialTwitter" class="form-control" id="InputSocialTwitter" value="{{ $args->social_url_twitter ? $args->social_url_twitter : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputContactTelephone">Contact Telephone</label>
                                        <input type="text" name="contactTelephone" class="form-control" id="InputContactTelephone" value="{{ $args->contact_telephone ? $args->contact_telephone : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputContactCellphone">Contact Cellphone</label>
                                        <input type="text" name="contactCellphone" class="form-control" id="InputContactCellphone" value="{{ $args->contact_cellphone ? $args->contact_cellphone : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputContactEmail">Contact Email</label>
                                        <input type="text" name="contactEmail" class="form-control" id="InputContactEmail" value="{{ $args->contact_email ? $args->contact_email : '' }}">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputNavigationTitle1">Navigation Title 1</label>
                                        <input type="text" name="navigationTitle1" class="form-control" id="InputNavigationTitle1" value="{{ $args->navigation_title_1 ? $args->navigation_title_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputNavigationUrl1">Navigation Url 1</label>
                                        <input type="text" name="navigationUrl1" class="form-control" id="InputNavigationUrl1" value="{{ $args->navigation_url_1 ? $args->navigation_url_1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputNavigationTitle2">Navigation Title 2</label>
                                        <input type="text" name="navigationTitle2" class="form-control" id="InputNavigationTitle2" value="{{ $args->navigation_title_2 ? $args->navigation_title_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputNavigationUrl2">Navigation Url 2</label>
                                        <input type="text" name="navigationUrl2" class="form-control" id="InputNavigationUrl2" value="{{ $args->navigation_url_2 ? $args->navigation_url_2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputNavigationTitle3">Navigation Title 3</label>
                                        <input type="text" name="navigationTitle3" class="form-control" id="InputNavigationTitle3" value="{{ $args->navigation_title_3 ? $args->navigation_title_3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body last-card-body">
                                    <div class="form-group">
                                        <label for="InputNavigationUrl3">Navigation Url 3</label>
                                        <input type="text" name="navigationUrl3" class="form-control" id="InputNavigationUrl3" value="{{ $args->navigation_url_3 ? $args->navigation_url_3 : '' }}">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveIndexPage()">Salvar modificações Index Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formIndexPage.js") }}"></script>
        <!-- /.content -->
        @endsection
