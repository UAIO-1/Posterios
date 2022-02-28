@extends('layout')
@section('title', 'Posterios - Profile')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/myProfile.css') }}">


@if (!Auth::check())
    <div class="header">

    </div>
@else

    @foreach ($users as $u)

        <div class="header">
            @include('navbarProfile')
            <div class="content">
                <h1 class="username mb-3">Hi!, I'm {{ $u->username }}</h1>
                <h4 class="at mb-3">Student at <em>BINUS UNIVERSITY</em></h4>
                <h5 class="mb-3">Uploaded Project: <span class="total-project">{{ $myProjectsCount }}</span></h5>
            </div>
        </div>

    @endforeach

    <div class="container profile-section">
        <div class="row">
            <div class="col-md-6">
                @if ($u->image == null)
                    <img src="{{ asset('image/icon-logo.PNG') }}" class="profilepicture" alt="profile picture">
                @else
                    <img src="{{ asset('storage/'.$u->image) }}" class="profilepicture" alt="profile picture">
                @endif
            </div>
            <div class="col-md-6">
                <h1>About Me.</h1>
                <h5 class="text-secondary">Student at <em>BINUS UNIVERSITY</em></h5>
                <p class="text-muted">{{ $u->aboutme }}</p>
                <a href="#" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>


    <div class="bg-project">
        <div class="d-flex justify-content-end align-items-center">
            <span class="pro">Projects</span>
            <img src="{{ asset('image/project-profile.png') }}" width="250px" height="250px" alt="project">
        </div>
    </div>
        <div class="container project-section">
            <div class="row">
                @foreach ($projects as $p)
                    <div class="col-md-3">
                        <a href="/projectDetail/{{ $p->id }}" class="card-detail">
                            <div class="card mb-3 rounded-0 border-0" style="width: 18rem;">
                                <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top projectimage rounded-0" alt="project image">
                                <div class="card-body">
                                    <h4>{{ $p->project_title }}</h4>
                                    @if($p->project_category == "Science")
                                        <p class="badge bg-warning">{{ $p->project_category }}</p>
                                    @elseif ($p->project_category == "Technology")
                                        <p class="badge bg-info">{{ $p->project_category }}</p>
                                    @elseif ($p->project_category == "Engineering")
                                        <p class="badge bg-danger">{{ $p->project_category }}</p>
                                    @else
                                        <p class="badge bg-success">{{ $p->project_category }}</p>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

@endif


