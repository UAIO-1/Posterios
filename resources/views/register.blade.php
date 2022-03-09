@extends('layout')
@section('title', 'Posterios - Sign Up')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="header">
    <div class="row">
        <div class="col-md-6 text-light">
            <div class="word">
                <img src="{{ asset('image/icon-logo-white.png') }}" class="p-2" alt="posterios logo" width="200px" height="200px">
                <span class="brand">POSTERIOS</span>
                <h5>Join and feel the convenience of transacting at Posterior</h5>
                <p>The most complete project reference is only in the Posterior</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card border-0">
                <form class="container container-form box mt-4" method="post" action={{url('/registerPost')}}>
                    {{csrf_field()}}
                    <div class="text-center">
                        <h4>Sign Up Now</h4>
                        <h6 class="text-muted">Already have an account? <a href="/" class="signin">Sign In</a></h6>
                    </div>

                    <div class="form-group mb-3">
                        <small>Username</small>
                        <input class="form-control" type="text" name="username">
                        <small class="text-muted"><em>* 6 - 15 characters</em></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email">
                        <small class="text-muted"><em>e.g. posterios@example.com</em></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password">
                        <small class="text-muted"><em>* min. 8 characters</em></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Confirm Password</label>
                        <input class="form-control" type="password" name="confirmpassword">
                        <small class="text-muted"><em>* same as password</em></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" placeholder="Date of Birth">
                    </div>

                    <div class="d-flex justify-content-end align-items-center m-2">
                        <input type="submit" value="Register" class="btn text-light w-25" style="background-color: #259df3">
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

