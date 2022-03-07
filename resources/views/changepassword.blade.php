@extends('layout')
@section('title', 'Posterios - Change Password')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/changepassword.css') }}">

@include('navbar')

@if (!Auth::check())

@else

        <div class="mt-lg-4">
            <div class="card rounded-0 border-0">
                <h5 class="card-header text-light text-center" style="background-color: #87cf8d"><img src="{{ asset('image/logo-posterios-white.PNG') }}" alt="Posterios-logo" width="200px" height="40px"></h5>
                <div class="card-body">
                    <h5 class="text-center mb-4">Change Password</h5>
                    <div><strong>New Password</strong></div>
                    <form action={{url('/changepassword')}} method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <input class="form-control" type="password" name="password">
                        </div>
                        <input type="submit" class="btn text-light w-25" style="background-color: #87cf8d" value="Change">
                    </form>
                </div>
            </div>
        </div>

@endif
