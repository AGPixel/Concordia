@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Termos do Serviço')

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

                            <form id="quickForm">

                                @include('components.metatags',[ 'arg_object' => $serviceTerms ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title',
                                    'id_input_text' => 'InputServiceTermsTitle',
                                    'arg_value' => isset($serviceTerms->title) ? $serviceTerms->title : '',
                                    'arg_value_eng' => isset($serviceTerms->title_eng) ? $serviceTerms->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Content',
                                    'id_input_text' => 'InputServiceTermsContent',
                                    'arg_value' => isset($serviceTerms->content) ? $serviceTerms->content : '',
                                    'arg_value_eng' => isset($serviceTerms->content_eng) ? $serviceTerms->content_eng : ''
                                    ])
                                </div>s

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveServiceTerms()">Salvar modificações Service Terms</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formServiceTermsPage.js") }}"></script>
        <!-- /.content -->
        @endsection
