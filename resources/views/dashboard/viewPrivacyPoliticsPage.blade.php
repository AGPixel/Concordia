@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Politicas de privacidade')

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

                                @include('components.metatags',[ 'arg_object' => $privacyPolitics ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title',
                                    'id_input_text' => 'InputPrivacyPoliticsTitle',
                                    'arg_value' => isset($privacyPolitics->title) ? $privacyPolitics->title : '',
                                    'arg_value_eng' => isset($privacyPolitics->title_eng) ? $privacyPolitics->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Content',
                                    'id_input_text' => 'InputPrivacyPoliticsContent',
                                    'arg_value' => isset($privacyPolitics->content) ? $privacyPolitics->content : '',
                                    'arg_value_eng' => isset($privacyPolitics->content_eng) ? $privacyPolitics->content_eng : ''
                                    ])
                                </div>s

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="savePrivacyPolitics()">Salvar modificações Politicas de privacidade</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formPrivacyPoliticsPage.js") }}"></script>
        <!-- /.content -->
        @endsection
