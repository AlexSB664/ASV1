@extends('layouts.auth')
@section('title')
Login
@endsection

@section('content')
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AS</h1>

            </div>
            <h3>Bienvenido a Amigos Secretos</h3>
            <p>Amigos Secretos es la aplicacion WEB favorita de todos para hacer intercambio de regalos.
            </p>
            <p>Entra para poder organizar intercambios de una manera divertida</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" placeholder="Correo" required="" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong><font color="red">No existe cuenta vinculada al correo</font></strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong><font color="red">Correo o contraseña invalido</font></strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{ route('password.request') }}"><small>Olvidaste tu contraseña?</small></a>
                <p class="text-muted text-center"><small>No tienes cuenta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Registrate!!!</a>
            </form>
            <p class="m-t"> <small>Bootstrap 4 &copy; 2019</small> </p>
        </div>
    </div>
@endsection
