@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Propriedades')

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

            .bt-width {
                width: 5.5em !important;
            }

            .action-bts {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                align-items: center;
            }

            .m-top-0 {
                margin-top: 0px !important;
            }

            .m-bot-1em {
                margin-bottom: 1em !important;
            }

            .bt-width-toogle {
                width: 3em !important;
            }

            .col-flex {
                display: flex;
                flex-direction: row-reverse;
            }

        </style>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                    </div>
                    <div class="col-md-2 col-flex m-bot-1em">
                        <button type="button" class="btn btn-info btn-block btn-flat bt-width" onclick="newPropriedade()">
                            <i class="fa fa-plus"></i>
                            &nbsp;Novo
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($propriedades as $id => $propriedade)
                                        <tr>
                                            <td>{{ $propriedade->id }}</td>
                                            <td>{{ $propriedade->title }}</td>
                                            <td>{{ $propriedade->description }}</td>
                                            <td>
                                                @if($propriedade->active)
                                                <button type="button" class="btn btn-success btn-block btn-flat bt-width-toogle" onclick="updateActivePropriedade({{$propriedade}})">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-danger btn-block btn-flat bt-width-toogle" onclick="updateActivePropriedade({{$propriedade}})">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                @endif
                                            </td>
                                            <td class="action-bts">
                                                <button type="button" class="btn btn-info btn-block btn-flat bt-width" onclick="editPropriedade({{$propriedade}})">
                                                    <i class="fa fa-pen"></i>
                                                    &nbsp;Edit
                                                </button>
                                                <button type="button" class="btn btn-danger btn-block btn-flat bt-width m-top-0" onclick="deletePropriedade({{$propriedade}})">
                                                    <i class="fa fa-trash"></i>
                                                    &nbsp;Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formListPropriedadePage.js") }}"></script>
        <!-- /.content -->
        @endsection
