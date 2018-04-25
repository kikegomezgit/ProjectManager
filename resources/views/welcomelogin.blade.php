@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @if (Route::has('login'))
                 @auth
                 @else
                        <div class="middle-box text-center loginscreen animated fadeInDown">
                            <div>
                                <div>
                                    <div>
                                    <img src="http://www.bolpegas.com/Resources/Uploads/Image/57ed79e9d5433.png" alt="bank" height="150" width="150">
                                    </div>
                                </div>
                                <h3>Administracion Proyectos</h3>
                                <p>Para acceder ingresa tus credenciales
                                </p>
                                <p>Recuerda que las cuentas son solo creadas por el administrador del sistema</p>
                                <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary block full-width m-b">
                                            {{ __('Login') }}
                                    </button>
                                </form>
                            </div>
                        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


                 @endauth
                 @endif
            </div>
        </div>
    </div>
</div>
@endsection
