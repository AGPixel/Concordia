<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concordia</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css") }}" type="text/css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css") }}" type="text/css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/adminlte.min.css") }}" type="text/css">

    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" type="text/css">
</head>
<body class="hold-transition login-page">

    @include('components.modalLoading')

    <div class="login-box">
        <div class="login-logo">
            <b>Concordia</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Faça o login para iniciar a sessão</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="buttom" class="btn btn-primary btn-block" onclick="logar('logar')">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <p class="mb-1">
                    <a href="/esqueci-senha">Esqueci a palavra passe</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/jquery/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("/bower_components/admin-lte/dist/js/adminlte.min.js") }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/sweetalert2/sweetalert2.min.js") }}"></script>

    <script src="{{ asset("/js/jquery.js") }}"></script>

    <script src="{{ asset("/js/login.js") }}"></script>
</body>
</html>
