<?php
class accesos_VI
{
    function __construct(){}

    function iniciarSesion()
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Empresa A</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        </head>
        <body class="hold-transition login-page">
        <body background="https://s3.amazonaws.com/nikeinc/assets/84769/NikeCNY2019_DB_CNY_BS_FIN_hd_1600.jpg">
        <div class="login-box">
        <div class="login-logo">
        <img src="http://2.bp.blogspot.com/-IqAtv_0r9Gs/VD8RNmjleUI/AAAAAAAAHZ4/_GfrQxq4vC4/s1600/640px-klutzy_the_crab.png" width="300" height="150">
        <b href="../../index2.html"><b><FONT SIZE=6 COLOR="white">S</FONT><FONT SIZE=6 COLOR="white">ENDAY </FONT> </b><b><FONT SIZE=6 COLOR="white">S</FONT><FONT SIZE=6 COLOR="white">TORE </FONT> </b>    
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">Iniciar Sesi&oacute;n</p>

            <form action="index.php" method="post">
                <div class="input-group mb-3">
                <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" name="clave" class="form-control" placeholder="Clave">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
            </div>
            <!-- /.login-card-body -->
        </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        </body>
        </html>

        <?php
    }
}
?>