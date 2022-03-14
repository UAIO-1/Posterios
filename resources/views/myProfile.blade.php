@extends('layout')
@section('title', 'Posterios - Profile')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/myProfile.css') }}">



@if (!Auth::check())
    <div class="header">

    </div>
@else

    <div class="header">
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
                        <h3 class="username text-center">{{ $u->username }}</h3>
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
                <div class="col-md-6">

                </div>
                @endforeach
            </div>
        </div>
    </div>




@endif


