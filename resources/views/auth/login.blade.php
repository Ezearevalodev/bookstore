@extends('layouts.main')

@section('title', 'Login')

@section('contenido')

<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-5">
                <div class="card-header">
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.process') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="email">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group m-auto text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-3 mb-3 px-5">Iniciar sesión</button>
                        </div>

                        <div class="text-center">
                            <p>¿No tienes cuenta? <a href="{{ route('user.create.view') }}" class="text-blue">¡Regístrate!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
