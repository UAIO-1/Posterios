@extends('layout')
@section('title', 'Posterios - Reset Password')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/resetpassword.css') }}">

<div class="container">
    <h1 style="color: #2834ae">Posterios</h1>
    <p>Enter the email address associated with yor account and we'll send you a link to reset your password.</p>

    @if (session('status'))
        <div class="alert alert-success" role="alert" style="max-width: 500px">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email" class="col-md-4 col-form-label text-md-right"><strong>{{ __('E-Mail Address') }}</strong></label>
        </div>
        <div>
            <div class="form-group row">
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group row mb-0 mt-4">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>

    <div class="link">
        <small>Don't have an account? <a href="/register">Sign Up</a></small>
    </div>
</div>

