@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center contenedor">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header text-center">
                            <img src="{{ asset('img/logo.png')}}" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group text-center">
                                    <h2 class=""><strong>{{ __('S.G.S.')}}</strong></h2>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usuario">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('INGRESAR') }}
                                        </button>
                                    </div>
                                </div>
        
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
