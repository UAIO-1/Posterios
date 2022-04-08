@extends('layout')
@section('title', 'Posterios - Project')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/projectdetail.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@include('navbar')

@if (!Auth::check())

    <div class="container">
        @foreach ($projects as $p)
        <div class="border-0 p-5">
            <div class="row">
                <div class="col-md-5 mr-2">
                    <img src="{{ asset('storage/'.$p->project_image) }}" alt="project image" class="project-image">
                </div>
                <div class="col-md-5 col-detail">
                    <div>
                        <h1 class="project-title"><strong>{{ $p->project_title }}</strong></h1>
                    </div>
                    <div class="mb-2">
                        <small class="text-muted"><em>{{ $p->project_subcategory }}</em></small>
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




        <div class="row row-overview">
            <div class="col-md-8">
                <div class="mb-2">
                    <h4 class="text-secondary mb-4">{{ $p->project_title }}</h4>
                    <small class="text-muted"> Project Link: <a href="{{ $p->project_link }}" target="_blank" class="text-primary link"><em>click here</em></a></small>
                    <br>
                    <p class="text-secondary project-description mt-1">{{ $p->project_description }}</p>
                </div>
                <div class="mt-xl-5">
                    <h3 class="mb-3"><u>Pertanyaan</u></h3>
                    <p class="text-muted">Anda harus sign in terlebih dahulu sebelum menjawab pertanyaan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-over">
                    <div class="card-body text-light">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                            </svg>
                            Overview
                        </p>
                        <hr>
                            <div class="d-flex justify-content-center align-items-center">
                                @if ($users->image == null)
                                    @if ($p->gender == "Male")
                                        <img src="{{ asset('image/user-male.png') }}" alt="posterios male" class="pp">
                                    @else
                                        <img src="{{ asset('image/user-female.png') }}" alt="posterios female" class="pp">
                                    @endif
                                @else
                                    <img src="{{ asset('storage/'.$users->image) }}" alt="profile picture" class="pp">
                                @endif
                            </div>
                            <div class="text-center mt-lg-4">
                                <h6 class="username">{{ $p->name }}</h6>
                            </div>
                            <div class="text-center mt-lg-4">
                                <a href="/myProfile/{{ $users->id }}" class="viewprofile">View Profile</a>
                            </div>
                        <hr>
                    </div>
                </div>
            </div>

            </div>
        </div>
        @endforeach
    </div>


@else

        <div class="container">
            @foreach ($projects as $p)
            <div class="card border-0 p-5">
                <div class="row">
                    <div class="col-md-5 mr-2">
                        <img src="{{ asset('storage/'.$p->project_image) }}" alt="project image" class="project-image">
                    </div>
                    <div class="col-md-5 col-detail">
                        <div>
                            <h1 class="project-title"><strong>{{ $p->project_title }}</strong></h1>
                        </div>
                        <div class="mb-2">
                            <small class="text-muted"><em>{{ $p->project_subcategory }}</em></small>
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




            <div class="row row-overview">
                <div class="col-md-8">
                    <div class="mb-2">
                        <h4 class="text-secondary mb-4">{{ $p->project_title }}</h4>
                        <small class="text-muted"> Project Link: <a href="{{ $p->project_link }}" target="_blank" class="text-primary link"><em>click here</em></a></small>
                        <br>
                        <p class="text-secondary project-description mt-1">{{ $p->project_description }}</p>
                    </div>
                    <div class="mt-xl-5">
                        <h3 class="mb-3"><u>Pertanyaan</u></h3>
                        @if ($p->project_subcategory == "Programming")
                            @include('pertanyaanTemplate.programming')
                        @elseif ($p->project_subcategory == "Digital Desain")
                            @include('pertanyaanTemplate.digitaldesain')
                        @elseif ($p->project_subcategory == "Komputer dan Jaringan")
                            @include('pertanyaanTemplate.komputerdanjaringan')
                        @elseif ($p->project_subcategory == "Seni Musik")
                            @include('pertanyaanTemplate.senimusik')
                        @elseif ($p->project_subcategory == "Seni Lukis")
                            @include('pertanyaanTemplate.senilukis')
                        @elseif ($p->project_subcategory == "Seni Tari")
                            @include('pertanyaanTemplate.senitari')
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-over">
                        <div class="card-body text-light">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                    <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                                Overview
                            </p>
                            <hr>
                                <div class="d-flex justify-content-center align-items-center">
                                    @if ($users->image == null)
                                        @if ($p->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" alt="posterios male" class="pp">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" alt="posterios female" class="pp">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$users->image) }}" alt="profile picture" class="pp">
                                    @endif
                                </div>
                                <div class="text-center mt-lg-4">
                                    <h6 class="username">{{ $p->name }}</h6>
                                </div>
                                <div class="text-center mt-lg-4">
                                    <a href="/myProfile/{{ $users->id }}" class="viewprofile">View Profile</a>
                                </div>
                                <hr>
                                <div>
                                    <p>Action</p>
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-light p-3 w-100"  data-bs-toggle="modal" data-bs-target="#exampleModalEditProject">Edit this project
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        @include('profile.modalEditProject')
                                    </div>
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-outline-light p-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteProject">Delete this project
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                            </svg>
                                        </a>
                                        @include('profile.modalDeleteProject')
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            @endforeach
        </div>

@endif
