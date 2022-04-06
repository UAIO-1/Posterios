@extends('layout')
@section('title', 'Posterios - Profile')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/myProfile.css') }}">

@include('navbar')

@if (!Auth::check())
    <div class="header">

    </div>
@else

    <div class="header">
        <div class="container">
            @foreach ($users as $u)
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted teks">Hello, I am</p>
                        <h1 class="name">{{ $u->name }}</h1>
                        <p class="text-muted teks">{{ $u->role }}</p>
                        <div class="mt-4">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $u->email }}" type="button" target="_blank" class="contact-but">Contact Me</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if ($u->image == null)
                            @if ($u->gender == "Male")
                                <img src="{{ asset('image/user-male.png') }}" alt="posterios" class="profilepicture">
                            @else
                                <img src="{{ asset('image/user-female.png') }}" alt="posterios" class="profilepicture">
                            @endif
                        @else
                            <img src="{{ asset('storage/'.$u->image) }}" alt="profile picture" class="profilepicture">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-xl-5 aboutme text-light">
        <div class="text-center">
            <h1 class="display-6"><strong>About Me</strong></h1>
            <p class="about">{{ $u->aboutme }}</p>
        </div>
    </div>

    <div class="container mt-lg-4">
        <h4>My Wishlists</h4>
        <hr>
        <div class="row row-cols-1 row-cols-6">
            <div class="col">

            </div>
        </div>
    </div>

    <div class="container myproject">
        <div class="row">
            <div class="col-md-6">
                <h4>My Projects</h4>
                <hr>
                @foreach ($projects as $p)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="img-fluid rounded-start projectimage p-3" alt="project image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->project_title }}</h5>
                                @include('badgeCategory')
                                <p class="card-text"><small class="text-muted">Updated {{ Carbon\Carbon::parse($p->updated_at)->diffForHumans()}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4>My Forums</h4>
                <hr>
            </div>
        </div>
    </div>




@endif


