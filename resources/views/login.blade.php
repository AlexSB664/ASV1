<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Amigos Secretos | Login</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AS</h1>

            </div>
            <h3>Bienvenido a Amigos Secretos</h3>
            <p>Amigos Secretos es la aplicacion WEB favorita de todos para hacer intercambio de regalos.
            </p>
            <p>Entra para poder organizar intercambios de una manera divertida y totalmente anonima.</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Olvidaste tu contraseña?</small></a>
                <p class="text-muted text-center"><small>No tienes cuenta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="">Registrate!!!</a>
            </form>
            <p class="m-t"> <small>Bootstrap 4 &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>