@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Meta Tags')

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
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputMetaTagsTitle">Title</label>
                                        <input type="text" name="metaTagsTitle" class="form-control" id="InputMetaTagsTitle" value="{{ $metaTags->title ? $metaTags->title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputMetaTagsDescription">Description</label>
                                        <input type="text" name="metaTagsDescription" class="form-control" id="InputMetaTagsDescription" value="{{ $metaTags->description ? $metaTags->description : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputMetaTagsKeywords">Keywords</label>
                                        <input type="text" name="metaTagsKeywords" class="form-control" id="InputMetaTagsKeywords" value="{{ $metaTags->keywords ? $metaTags->keywords : '' }}">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveMetaTags()">Salvar modificações Meta Tags</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formMetaTagsPage.js") }}"></script>
        <!-- /.content -->
        @endsection
