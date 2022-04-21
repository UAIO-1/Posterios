@extends('layouts.adminLayouts')
@section('title', 'Projects • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/admin/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/projects.css') }}">



<div class="container2">
    <div class="row">
        <div class="col-md-2">
            @include('admin.sidebar')
        </div>

        <div class="col-md-7">
            <div class="mt-lg-4">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Projects" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="mb-4">
                <h6>Projects ({{ $projectsCount }})</h6>
            </div>

            <div class="row row-cols-4">
                @foreach ($projects as $p)
                    <div class="col">
                        <label>
                            <a href="/admin.projects/{{ $p->id }}" style="text-decoration: none; color:#000;">
                                <input type="radio" name="recommendation" value="A" class="card-input-element">
                                <div class="card p-3 card-input" style="width: 15rem;border-radius: 20px">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top profilepicture" alt="profile picture">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $p->project_title }}</h5>
                                        <p class="card-text">
                                            <small><em> by : <a href="/admin.users/{{ $p->user_id }}">{{ $p->name }}</a></em></small>
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted" style="font-size: 14px">{{ $p->project_category }} / {{ $p->project_subcategory }}</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>





        <div class="col-sm-1">
            <div class="vl"></div>
        </div>







        <div class="col-md-2 class-name" style="margin-left: -100px">
            <div class="mt-lg-4">
                <small style="color: #259df3">Detail:</small>
            </div>
            <div class="mt-lg-4">
                @foreach ($projects2 as $p2)
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/'.$p2->project_image) }}" class="card-img-top profilepicture" alt="profile picture">
                    </div>
                    <div class="text-center mt-2">
                        <h5>{{ $p2->project_title }}</h5>
                        <p><em>{{ $p2->project_category }} / {{ $p2->project_subcategory }}</em></p>
                        <small><em> by : <a href="/admin.users/{{ $p2->user_id }}">{{ $p2->name }}</a></em></small>
                    </div>
                    <div class="mt-lg-4">
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteProject">Hapus Proyek</a>
                    </div>
                    @include('profile.modalDeleteProject')

                    <hr>
                    <div class="mt-lg-4">
                        <div class="d-flex justify-content-between">
                            <h5>Overview</h5>
                            @php
                                Carbon\Carbon::setLocale('id');
                            @endphp
                            <p class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                        </div>
                        <h6>Deskripsi:</h6>
                        <div class="desc p-1" style="max-height: 300px;overflow: auto;">
                            <p class="text-muted">{{ $p2->project_description }}</p>
                        </div>
                        <div class="mt-4">
                            <h6>Tautan Proyek:</h6>
                            @if ($p2->project_link == null)
                                <small class="text-muted"><em>tidak ada tautan.</em></small>
                            @else
                                <p><a href="{{ $p2->project_link }}" target="_blank">{{ $p2->project_link }}</a></p>
                            @endif
                        </div>
                        <div class="mt-4">
                            <h6>Tautan Video:</h6>
                            @if ($p2->project_link == null)
                                <small class="text-muted"><em>tidak ada tautan.</em></small>
                            @else
                                <p><a href="{{ $p2->project_link }}" target="_blank">{{ $p2->project_link }}</a></p>
                            @endif
                        </div>
                        <div class="mt-4">
                            <h6>Video:</h6>
                            @if ($p2->project_video == null)
                                <p class="text-muted"><em>tidak ada video.</em></p>
                            @else
                                <video src="{{ asset('storage/'.$p->project_video) }}" controls width="150px" height="150px"></video>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="mt-4">
                    <h6>Feedback Proyek</h6>
                    <hr>
                    <div style="height:300px;overflow:auto;">
                        @foreach ($questions as $q)
                        <a href="#modalFeedbackDetail_{{ $q->id }}" data-bs-toggle="modal" data-bs-target="#modalFeedbackDetail_{{ $q->id }}" style="text-decoration: none;color:#000">
                            <div class="card card-pro p-2 mb-2" style="border-radius: 10px">
                                <small>{{ \Carbon\Carbon::parse($q->created_at)->format('M d, Y') }}</small>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small>Nilai:
                                            @if ($q->points > 90)
                                                <strong class="text-success">{{ $q->points }}</strong>
                                            @elseif($q->points > 75)
                                            <strong class="text-success">{{ $q->points }}</strong>
                                            @elseif($q->points > 65)
                                            <strong class="text-warning">{{ $q->points }}</strong>
                                            @else
                                            <strong class="text-danger">{{ $q->points }}</strong>
                                            @endif
                                        </small>
                                    </div>
                                    <div>
                                        @include('badgeCategory')
                                    </div>
                                </div>
                            </div>
                        </a>
                        @include('profile.modalFeedbackDetail')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
