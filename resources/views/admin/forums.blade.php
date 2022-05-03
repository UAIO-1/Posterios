@extends('layouts.adminLayouts')
@section('title', 'Forums • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/admin/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/forums.css') }}">



<div class="container2">
    <div class="row">
        <div class="col-md-2">
            @include('admin.sidebar')
        </div>

        <div class="col-md-7">
            <div class="mt-lg-4">
                <form class="d-flex" method="GET">
                    <input class="form-control me-2" name="s_forum" type="search" placeholder="Search Forum" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="mb-4">
                <h6>Forums ({{ $forumsCount }})</h6>
            </div>

            <div class="row row-cols-4 g-4">
                @foreach ($forums as $f)
                    <div class="col">
                        <label>
                            <a href="/admin.forums/{{ $f->id }}" style="text-decoration: none; color:#000;">
                                <input type="radio" name="recommendation" value="A" class="card-input-element">
                                <div class="card p-3 card-input" style="width: 15rem;border-radius: 20px">
                                    <div class="d-flex justify-content-center">
                                        @if ($f->forum_image == null)
                                            <img src="{{ asset('image/chat-square-dots-fill.svg') }}" alt="forum image" class="card-img-top profilepicture">
                                        @else
                                            <img src="{{ asset('storage/'.$f->forum_image) }}" class="card-img-top profilepicture" alt="profile picture">
                                        @endif
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $f->forum_title }}</h5>
                                        <p class="card-text">
                                            <small><em> by : <a href="/admin.users/{{ $f->user_id }}">{{ $f->name }}</a></em></small>
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted" style="font-size: 14px">{{ $f->forum_category }} / {{ $f->forum_subcategory }}</small>
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
                @foreach ($forums2 as $f2)
                    <div class="d-flex justify-content-center">
                        @if ($f2->forum_image == null)
                            <img src="{{ asset('image/chat-square-dots-fill.svg') }}" alt="forum image" class="card-img-top profilepicture">
                        @else
                            <img src="{{ asset('storage/'.$f2->forum_image) }}" class="card-img-top profilepicture" alt="profile picture">
                        @endif
                    </div>
                    <div class="text-center mt-2">

                        <p><em>{{ $f2->forum_category }} / {{ $f2->forum_subcategory }}</em></p>
                        <small><em> by : <a href="/admin.users/{{ $f2->user_id }}">{{ $f2->name }}</a></em></small>
                    </div>
                    <div class="mt-lg-4">
                        <a href="#modalHapusForum_{{ $f2->id }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusForum_{{ $f2->id }}">Hapus Forum</a>
                    </div>
                    @include('admin.modalHapusForum')

                    <hr>
                    <div class="mt-lg-4">
                        <div class="d-flex justify-content-between">
                            <h5>Overview</h5>
                            @php
                                Carbon\Carbon::setLocale('id');
                            @endphp
                            <p class="text-muted">{{ Carbon\Carbon::parse($f2->created_at)->diffForHumans()}}</p>
                        </div>
                        <hr>
                        <h5>{{ $f2->forum_title }}</h5>
                        <div class="desc p-1" style="max-height: 300px;overflow: auto;">
                            <p class="text-muted">{{ $f2->forum_message }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</div>
