@extends('layout')
@section('title', 'Posterios - Project')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/projectdetail.css') }}">


@if (!Auth::check())

    <div class="header">
        @include('navbar')
        <div class="container">
            @foreach ($projects as $p)
                <div class="row mt-lg-5">
                    <div class="col-md-4 mr-2">
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
                        <div class="mb-4">
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
    </div>

@else

    <div class="header">
        @include('navbar')
        <div class="container">
            @foreach ($projects as $p)
                <div class="row mt-lg-5">
                    <div class="col-md-4 mr-2">
                        <img src="{{ asset('storage/'.$p->project_image) }}" alt="project image" class="project-image">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between">
                            <h1 class="project-title">{{ $p->project_title }}</h1>
                            <a href="" class="btn btn-warning p-3 w-25 text-light"  data-bs-toggle="modal" data-bs-target="#exampleModalEditProject">Edit
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                            @include('profile.modalEditProject')
                        </div>
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
                        <div class="mb-4">
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
    </div>

@endif



