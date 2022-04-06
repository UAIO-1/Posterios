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



    {{-- <div class="header">
        @include('navbar')
        <div class="d-flex justify-content-between align-items-center">
            <div class="row">
                @foreach ($users as $u)
                <div class="col-md-2 text-light d-flex justify-content-center">
                    <div class="card bg-transparent border-0 p-2">
                        <div class="d-flex justify-content-center">
                            @if ($u->image == null)
                                <img src="{{ asset('image/icon-logo-white.png') }}" class="profilepicture" alt="profile picture">
                            @else
                                <img src="{{ asset('storage/'.$u->image) }}" class="profilepicture" alt="profile picture">
                            @endif
                        </div>
                        <h3 class="username text-center">{{ $u->name }}</h3>
                        <p class="aboutme">{{ $u->aboutme }}</p>
                        <a href="#" class="btn btn-light w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <h5 class="modal-title" style="color: #259df3" id="exampleModalLabel">Edit Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">
                                        <form  action={{ url('/editProfile') }} method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label text-muted">Profile Picture</label>
                                                <input class="form-control" type="file" id="formFile" name="image" accept="image/jpg, image/jpeg, image/png">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label text-muted">About Me</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="aboutme" rows="3">{{ $u->aboutme }}</textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <input type="submit" class="btn text-light" style="background-color: #259df3" value="Save Changes">
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <h5 class="text-light">My Projects</h5>
                        <hr style="border: 1px solid #fff">
                        @foreach ($projects as $p)
                            <div class="col-md-4">
                                <a href="/projectDetail/{{ $p->id }}" class="card-project-detail">
                                    <div class="card card-project mb-3 rounded-0 border-0 p-2" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top project-image rounded-0" alt="project image">
                                        <div class="card-body">
                                            <h5 class="project-title text-dark">{{ $p->project_title }}</h5>
                                            @if($p->project_category == "Science")
                                                <small class="badge bg-warning">{{ $p->project_category }}</small>
                                            @elseif ($p->project_category == "Technology")
                                                <small class="badge bg-info">{{ $p->project_category }}</small>
                                            @elseif ($p->project_category == "Engineering")
                                                <small class="badge bg-danger">{{ $p->project_category }}</small>
                                            @else
                                                <small class="badge bg-success">{{ $p->project_category }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <h5 class="text-light">My Forum</h5>
                        <hr style="border: 1px solid #fff">
                        @foreach ($forums as $f)
                        <div>
                            <a href="#" class="forum-list">
                                <h6><span>></span> {{Str::limit($f->forum_title, 15, '...')}}</h6>
                            </a>
                            <hr class="text-light">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}




@endif


