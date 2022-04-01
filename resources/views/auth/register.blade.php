@extends('layout')
@section('title', 'Posterios - Create An Account')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/register.css') }}">


<div class="container mt-xl-5">
    <div class="row">
        <div class="col-md-6 text-light">
            <div class="logo-head">
                <img src="{{ asset('image/icon-logo-white.png') }}" class="p-2" alt="posterios logo" width="200px" height="200px">
                <span class="brand">POSTERIOS</span>
                <h5>Join and feel the convenience of posting at Posterios</h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="text-center mt-lg-4">
                    <h1><strong>Sign Up</strong></h1>
                    <small class="text-muted">Already have an account? <a href="/" style="color: #259df3">Sign In</a></small>
                </div>
                <form method="POST" action="{{ route('register') }}" class="p-5">
                    @csrf

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                             </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

