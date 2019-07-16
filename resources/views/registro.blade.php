<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Amigo Secreto | Registro</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AS</h1>

            </div>
            <h3>Registrate en Amigo Secreto</h3>
            <p>Por favor llena los siguientes campos para crear una cuenta.</p>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre Completo" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Verificar Contraseña" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Acepto los terminos de uso y legales </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registrar</button>

                <p class="text-muted text-center"><small>Ya tienes cuenta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('web.login') }}">Login</a>
            </form>
            <p class="m-t"> <small>Bootstrap 4 &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script type="text/javascript" src="{{ asset('js/iCheck/icheck.min.js') }}"></script>
   	<script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
