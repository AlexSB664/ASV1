@extends('layouts.auth')
@section('title')
Registro
@endsection
@section('content')
    <script>
        var check = function() {
        if (document.getElementById('password').value == document.getElementById('password-confirm').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'las contraseñas coincide';
            document.getElementById("registrar").disabled = false;
            } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'las contraseñas no coincide';
            document.getElementById("registrar").disabled = true;
            }
        if (document.getElementById('password').value == "" && document.getElementById('password-confirm').value == ""){
                document.getElementById('message').innerHTML = '';
                document.getElementById("registrar").disabled = true;
            }
        }
    </script>
 <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AS</h1>

            </div>
            <h3>Registrate en Amigo Secreto</h3>
            <p>Por favor llena los siguientes campos para crear una cuenta.</p>
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre Completo" maxlength="100">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong><font color="red">El nombre no es valido</font></strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong><font color="red">Correo no valido</font></strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña" onkeyup='check();'>

                    <span id='message'></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Verifica Contraseña" onkeyup='check();'>
                </div>
                <button id="registrar" type="submit" class="btn btn-primary block full-width m-b" disabled="">Registrar</button>

                <p class="text-muted text-center"><small>Ya tienes cuenta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
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
@endsection
