@extends('layouts.app')
@section('titulo','Área Restrita')
@section('conteudo')
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url({{asset('admin/assets/images/big/auth-bg.jpg')}}) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-12 col-md-12 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="{{asset('admin/assets/images/big/icon.png')}}" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Área Restrita</h2>
                        <p class="text-center">sistema desenvolvido para gestão website.</p>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" class="text-dark">{{ __('Seu Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password" class="text-dark">{{ __('Sua Senha') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-dark">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection