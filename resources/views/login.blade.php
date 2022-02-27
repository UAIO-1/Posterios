@extends('layout')
@section('title', 'Posterios - Login')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="bg-image">
        <div class="card border-0 rounded-0 container mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-3 reg-sign text-center">
                    <img src="{{ asset('image/icon-logo-white.png') }}" width="100" height="100" alt="posterios logo">
                    <div>
                        <small>Posterios</small>
                    </div>
                    <h4 class="mt-lg-4">New Here?</h4>
                    <div>
                        <small>Sign Up and discover a great amount of opportunities!</small>
                    </div>
                    <a href="/register"><button class="but-reg mt-2">Sign Up</button></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form class="container" method="post" action={{url('/doLogin')}}>
                            {{csrf_field()}}
                            <h2 class="mb-5 text-center">Sign In</h2>
                            <div class="mb-3">
                                <h6>Email Address</h6>
                                <input type="email" name="email">
                            </div>
                            <div class="mb-3">
                                <h6>Password</h6>
                                <input type="password" name="password">
                            </div>
                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="remember">
                                <label for="flexCheckDefault">Remember Me</label>
                            </div>
                            <div>
                                <input class="login-submit-btn" type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

