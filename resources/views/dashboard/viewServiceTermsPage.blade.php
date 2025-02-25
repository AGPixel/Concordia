@include('components.header')
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

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

            .ck-editor__main .ck-content {
                height: 10em;
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
                                    <div class="form-group input-text-language-48percent m-left-4percent" id="serviceTermsContent">
                                        <img class="m-bot-05 image_bandeira" src="{{asset("../storage/pt.png")}}" alt="">
                                        <textarea style="height:auto!important" rows="20" name="content" id="InputServiceTermsContent">
                                        {{ isset($serviceTerms->content) ? $serviceTerms->content : '' }}
                                        </textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#InputServiceTermsContent'))
                                                .catch(error => {
                                                    console.error(error);
                                                });

                                        </script>
                                    </div>
                                    <div class="form-group input-text-language-48percent" id="serviceTermsContentEng">
                                        <img class="m-bot-05 image_bandeira" src="{{asset("../storage/eng.png")}}" alt="">
                                        <textarea style="height:auto!important" rows="20" name="content" id="InputServiceTermsContentEng">
                                        {{!! isset($serviceTerms->content_eng) ? $serviceTerms->content_eng : '' !!}}
                                        </textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#InputServiceTermsContentEng'))
                                                .catch(error => {
                                                    console.error(error);
                                                });

                                        </script>
                                    </div>
                                </div>

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
        <script src="{{ asset("/js/formServiceTermsPage.js") }}"></script>
        <!-- /.content -->
        @endsection
