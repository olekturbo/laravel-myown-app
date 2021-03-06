@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logowanie</div>
                @if ($errors->has('msg'))
                    <div class="alert alert-warning">
                        {{ $errors->first('msg') }}
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Adres e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Hasło</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Zapamiętaj mnie
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-template">
                                    Zaloguj
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Nie pamiętasz hasła?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logowanie przez Providera</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <a href="{{ route('provider.login', 'github') }}"  class="btn btn-social btn-github"><span class="fab fa-github"></span> Github</a>
                        </div>
                        <div class="col-md-3 text-center">
                            <a href="{{ route('provider.login', 'google') }}"  class="btn btn-social btn-google"><span class="fab fa-google"></span> Google</a>
                        </div>
                        <div class="col-md-3 text-center">
                            <a href="{{ route('provider.login', 'facebook') }}"  class="btn btn-social btn-facebook"><span class="fab fa-facebook"></span> Facebook</a>
                        </div>
                        <div class="col-md-3 text-center">
                            <a href="{{ route('provider.login', 'twitter') }}"  class="btn btn-social btn-twitter"><span class="fab fa-twitter"></span> Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
