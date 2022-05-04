@extends('layout')
@section('title', 'My Class • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/classDetail.css') }}">

@include('navbar')

@if (!Auth::check())

@elseif(Auth::check() && Auth::user()->role == "Teacher" && Auth::user()->status == "Approved")

    <div class="mt-xl-5">
        <div class="row">
            <div class="col-md-8" style="margin-left: 50px">
                @foreach ($class as $c)
                    <h1 class="display-2"><strong>{{ $c->class_name }}</strong></h1>
                    <p class="text-muted">Kelas {{ $c->class_grade }}</p>
                    <p style="text-align: justify">{{ $c->class_description }}</p>
                @endforeach
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>


@else


@endif
