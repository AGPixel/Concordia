@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Testemunho')

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

                                @include('components.metatags',[ 'arg_object' => $testimonial ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Name',
                                    'id_input_text' => 'InputTestimonialName',
                                    'arg_value' => $testimonial->name ? $testimonial->name : '' ])
                                </div>

                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Company',
                                    'id_input_text' => 'InputTestimonialCompany',
                                    'arg_value' => $testimonial->company ? $testimonial->company : '' ])
                                </div>

                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Num',
                                    'id_input_text' => 'InputTestimonialNum',
                                    'arg_value' => $testimonial->num ? $testimonial->num : '' ])
                                </div>

                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputTestimonialDescription',
                                    'arg_value' => isset($testimonial->description) ? $testimonial->description : '',
                                    'arg_value_eng' => isset($testimonial->description_eng) ? $testimonial->description_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveTestimonialPage({{ isset($testimonial->id) ? $testimonial->id : 0 }})">Salvar modificações Testimonial Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formTestimonialPage.js") }}"></script>
        <!-- /.content -->
        @endsection
