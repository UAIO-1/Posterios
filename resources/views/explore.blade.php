@extends('layout')
@section('title', 'Posterios - Explore STEM')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/explore.css') }}">

@include('navbar')

@if (!Auth::check())

@else

    <div class="container mt-xl-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-3">Project Showcase</h1>
                <p>Project Showcase is provided in several categories that make it easier for you to choose the project according to your wishes.</p>
            </div>
            <div class="col-md-6">
                <img src="" alt="">
            </div>
        </div>
    </div>



        <div>
            <div class="row">
                @foreach ($projects as $p)
                    <div class="col-md-3 p-5">
                        <a href="/projectDetail/{{ $p->id }}" class="detail">
                            <div class="card border-0">
                                <img src="{{ asset('storage/'.$p->project_image) }}" alt="project image" class="project-image">
                                <div class="mt-2 p-3">
                                    <h4><strong>{{ $p->project_title }}</strong></h4>
                                    @if($p->project_category == "Science")
                                        <h6 class="badge bg-warning">{{ $p->project_category }}</h6>
                                    @elseif($p->project_category == "Technology")
                                        <h6 class="badge bg-primary">{{ $p->project_category }}</h6>
                                    @elseif($p->project_category == "Engineering")
                                        <h6 class="badge bg-danger">{{ $p->project_category }}</h6>
                                    @else
                                        <h6 class="badge bg-success">{{ $p->project_category }}</h6>
                                    @endif
                                </div>
                                {{-- <div class="p-3 profile">
                                    <div>
                                        <div class="text-left">
                                            <a href="/myProfile/{{ $p->user_id }}" class="username">
                                                <img src="{{ asset('storage/'.$users->image) }}" alt="user image" width="25px" height="25px">
                                                <small>{{ $p->username }}</small>
                                            </a>
                                            <span class="like">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                                <span class="text-muted">1.7k</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>



@endif
