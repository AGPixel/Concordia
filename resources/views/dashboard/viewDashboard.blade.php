@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Dashboard')

        @section('conteudo')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    conteudo aqui aaa
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        @endsection
