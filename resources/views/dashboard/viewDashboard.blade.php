@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','')

        @section('conteudo')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    Selecione no menu ao lado o que deseja fazer
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        @endsection
