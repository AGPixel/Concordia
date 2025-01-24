@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Trocar senha')

        @section('conteudo')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputOldPassword">Palavra passe antiga</label>
                                        <input type="password" name="OldPassword" class="form-control" id="InputOldPassword" placeholder="*****">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputNewPassword">Nova palavra passe</label>
                                        <input type="password" name="NewPassword" class="form-control" id="InputNewPassword" placeholder="*****">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputReNewPassword">Confirmação da nova palavra passe</label>
                                        <input type="password" name="ReNewPassword" class="form-control" id="InputReNewPassword" placeholder="*****">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="terms" class="custom-control-input" id="CheckTerms">
                                            <label class="custom-control-label" for="CheckTerms">Concordo com os <a href="#">termos do serviço</a>.</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="salvarNovaSenha()">Salvar nova palavra passe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formTrocarSenha.js") }}"></script>
        <!-- /.content -->
        @endsection
