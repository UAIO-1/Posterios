@extends('layout')
@section('title', 'Posterios - Project')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/projectdetail.css') }}">

@include('navbar')

@if (!Auth::check())

        <div class="container">
            @foreach ($projects as $p)
                <div class="row mt-lg-5">
                    <div class="col-md-6 mr-2">
                        <img src="{{ asset('storage/'.$p->project_image) }}" alt="project image" class="project-image">
                    </div>
                    <div class="col-md-8">
                        <h1 class="project-title">{{ $p->project_title }}</h1>
                        <div class="mb-2">
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
                        <div class="mb-2">
                            @if($p->project_status == null)
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            @endif
                        </div>
                        <div class="mb-2">
                            <h4>DESCRIPTION</h4>
                            <p class="text-muted project-description">{{ $p->project_description }}</p>
                        </div>
                        <a href="#" class="btn btn-dark w-100">Add to Wishlist</a>

                    </div>

                </div>


                <div class="mt-xl-5">
                    <div>
                        <div class="d-flex justify-content-between">
                            <h4>OVERVIEW</h4>
                            <small class="text-muted"><em>Posted {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</em></small>
                        </div>
                        <hr>
                        <div class="mb-2">
                            <h4>LINK</h4>
                            <div class="p-1">
                                <a href="{{ $p->project_link }}" target="_blank">{{ $p->project_link }}</a>
                            </div>
                        </div>
                        <div class="mb-2">
                            <h4>VIDEO</h4>
                            @if ($p->project_video == null)
                                <p class="p-1">No Videos</p>
                            @else
                                <video src="{{ asset('storage/'.$p->project_video) }}"class="project-video" controls></video>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


@else

        <div class="container">
            @foreach ($projects as $p)
                <div class="row">
                    <div class="col-md-5 mr-2">
                        <img src="{{ asset('storage/'.$p->project_image) }}" alt="project image" class="project-image">
                    </div>
                    <div class="col-md-5">
                        <div>
                            <h1 class="project-title"><strong>{{ $p->project_title }}</strong></h1>
                        </div>


                        <div class="mb-2">
                            <small class="text-muted"><em>{{ $p->project_category }}</em></small>
                        </div>

                        <div class="d-flex justify-content-end mt-lg-4">
                            <small class="text-muted"><em>Posted {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}} {{ $p->project_status }}</em></small>
                        </div>

                        <hr>

                        <div class="mb-2">
                            <small class="text-muted mb-3"><em>Video</em></small>
                            @if ($p->project_video == null)
                                <p class="p-1">No Videos</p>
                            @else
                                <video src="{{ asset('storage/'.$p->project_video) }}"class="project-video mt-lg-4 bg-dark" controls></video>
                            @endif
                        </div>

                    </div>
                </div>
        </div>

<hr>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <h4 class="text-secondary mb-4">{{ $p->project_title }}</h4>
                        <small class="text-muted"> Project Link: <a href="{{ $p->project_link }}" target="_blank" class="text-primary link"><em>click here</em></a></small>
                        <br>
                        <p class="text-secondary project-description mt-1">{{ $p->project_description }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-muted">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                    <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                                Overview
                            </p>
                            <hr>
                            @foreach ($users as $u)
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('storage/'.$u->image) }}" alt="user image" class="pp">
                                </div>
                                <div class="text-center">
                                    <h6><a href="/myProfile/{{ $p->user_id }}" class="username text-muted"><u><em>{{ $u->username }}</em></u></a></h6>
                                </div>
                                <hr>
                                <div>
                                    <p>Action</p>
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-success p-3 w-100"  data-bs-toggle="modal" data-bs-target="#exampleModalEditProject">Edit this project
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        @include('profile.modalEditProject')
                                    </div>
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-danger p-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteProject">Delete this project
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                            </svg>
                                        </a>
                                        @include('profile.modalDeleteProject')
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

@endif