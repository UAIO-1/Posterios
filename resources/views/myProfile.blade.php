@extends('layout')
@section('title', 'Posterios - Project Exhibition & Forum Discussion')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/myProfile.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

@include('navbar')

@if(isset($users))
@foreach ($users as $u)


@if (!Auth::check())

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-6">
                    <h1 class="name">{{ $u->name }}
                    </h1>
                    <p class="teks">{{ $u->role }}</p>
                    <table>
                        <tr>
                            <th>Umur</th>
                            <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y years old') }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $u->gender }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            @if ($u->grade == null || $u->grade == "Select Grade")
                                <td></td>
                            @else
                                <td>{{ $u->grade }} SMA</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Sekolah</th>
                            <td>{{ $u->sekolah }}</td>
                        </tr>
                        <tr>
                            <th>Jurusan yang diminati</th>
                            <td>{{ $u->jurusan }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-xl-5">
        <h6><strong>Tentang Saya:</strong></h6>
        <p class="aboutme">{{ $u->aboutme }}</p>
    </div>

    <div class="container mt-xl-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                    </svg>
                    Proyek
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="forums-tab" data-bs-toggle="tab" data-bs-target="#forums" type="button" role="tab" aria-controls="forums" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Forum
                </button>
            </li>
        </ul>

        <div class="tab-content p-3" id="myTabContent">

            <div class="tab-pane fade mt-4 show active" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                    <div class="row row-cols-4 g-4">
                        @foreach ($projects as $p)
                            <div class="col">
                                <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $p->project_title }}</h5>
                                            <div class="text-center">
                                                @include('badgeCategory')
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

            <div class="tab-pane fade" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                @if (isset($forums))
                <div class="row row-cols-1 row-cols-4 g-4">
                    @foreach ($forums as $f)
                        <div class="col">
                            <a href="/forumDetail/{{ $f->id }}" class="project-detail">
                                <div class="card card-wishlist border-0" style="width: 18rem;">
                                    <img src="{{ asset('storage/'.$f->forum_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $f->forum_title }}</h5>
                                        <div class="text-center">
                                            {{-- @include('badgeCategory') --}}
                                        </div class="text-center">
                                        <div class="mt-2">
                                            @php
                                                Carbon\Carbon::setLocale('id');
                                            @endphp
                                            <p class="card-text text-center">
                                                <small class="text-muted">
                                                    {{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                Tidak ada proyek yang diposting.
            @endif
            </div>
        </div>
    </div>















@elseif(Auth::check() && Auth::user()->id != $u->id)


    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-6">
                    <h1 class="name">{{ $u->name }}
                    </h1>
                    <p class="teks">{{ $u->role }}</p>
                    <table>
                        <tr>
                            <th>Umur</th>
                            <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y years old') }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $u->gender }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            @if ($u->grade == null || $u->grade == "Select Grade")
                                <td></td>
                            @else
                                <td>{{ $u->grade }} SMA</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Sekolah</th>
                            <td>{{ $u->sekolah }}</td>
                        </tr>
                        <tr>
                            <th>Jurusan yang diminati</th>
                            <td>{{ $u->jurusan }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-xl-5">
        <h6><strong>Tentang Saya:</strong></h6>
        <p class="aboutme">{{ $u->aboutme }}</p>
    </div>

    <div class="container mt-xl-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                    </svg>
                    Proyek
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="forums-tab" data-bs-toggle="tab" data-bs-target="#forums" type="button" role="tab" aria-controls="forums" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Forum
                </button>
            </li>
        </ul>

        <div class="tab-content p-3" id="myTabContent">

            <div class="tab-pane fade mt-4 show active" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                    <div class="row row-cols-4 g-4">
                        @foreach ($projects as $p)
                            <div class="col">
                                <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $p->project_title }}</h5>
                                            <div class="text-center">
                                                @include('badgeCategory')
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

            <div class="tab-pane fade" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                @if (isset($forums))
                    <div class="row row-cols-4 g-4">
                        @foreach ($forums as $f)
                            <div class="col">
                                <a href="/forumDetail/{{ $f->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$f->forum_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $f->forum_title }}</h5>
                                            <div class="text-center">
                                                {{-- @include('badgeCategory') --}}
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>
        </div>
    </div>













@elseif (Auth::check() && Auth::user()->status == null)
<div class="header">
    @if(session('success-edit'))
        <div id="alert" class="alert alert-success m-4"><h5>{{ session('success-edit') }}</h5></div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-6">
                <h1 class="name">{{ $u->name }}
                    <span>
                        <sup>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kyc">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        </sup>
                    </span>
                </h1>
                {{-- @include('profile.modalEditProfile') --}}
                @include('modalKYC')
                <p class="teks">{{ $u->role }}</p>
                <table>
                    <tr>
                        <th>Umur</th>
                        <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y years old') }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $u->gender }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        @if ($u->grade == null || $u->grade == "Select Grade")
                            <td></td>
                        @else
                            <td>{{ $u->grade }} SMA</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Sekolah</th>
                        <td>{{ $u->sekolah }}</td>
                    </tr>
                    <tr>
                        <th>Jurusan yang diminati</th>
                        <td>{{ $u->jurusan }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container mt-xl-5">
    <h6><strong>Tentang Saya:</strong></h6>
    <p class="aboutme">{{ $u->aboutme }}</p>
</div>

<div class="container mt-xl-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                    <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                </svg>
                Proyek
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="wishlist-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                    <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                </svg>
                Wishlist
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="forums-tab" data-bs-toggle="tab" data-bs-target="#forums" type="button" role="tab" aria-controls="forums" aria-selected="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                Forum
            </button>
        </li>
    </ul>


    <div class="tab-content p-3" id="myTabContent">

        <div class="tab-pane fade mt-4 show active" id="projects" role="tabpanel" aria-labelledby="projects-tab">
            @if (isset($projects))
                <div class="row row-cols-4 g-4">
                    @foreach ($projects as $p)
                        <div class="col">
                            <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                <div class="card card-wishlist border-0" style="width: 18rem;">
                                    <img src="{{ asset('storage/'.$p->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $p->project_title }}</h5>
                                        <div class="text-center">
                                            @include('badgeCategory')
                                        </div class="text-center">
                                        <div class="mt-2">
                                            @php
                                                Carbon\Carbon::setLocale('id');
                                            @endphp
                                            <p class="card-text text-center">
                                                <small class="text-muted">
                                                    {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                Tidak ada proyek yang diposting.
            @endif
        </div>


        <div class="tab-pane fade mt-4" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
            @if (isset($wishlists))
                <div class="row row-cols-4 g-4">
                    @foreach ($wishlists as $w)
                        <div class="col">
                                <a href="/projectDetail/{{ $w->project_id }}" class="project-detail">
                                    <div class="card card-wishlist" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$w->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <div class="text-center mb-2">
                                                <a href="/wishlistDelete/{{ $w->w_id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <h5 class="card-title text-center">{{ $w->project_title }}</h5>
                                            <div class="text-center">
                                                @include('badgeCategoryWishlists')
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                    @endforeach
                </div>
            @else
                Tidak ada proyek yang diposting.
            @endif
        </div>

        <div class="tab-pane fade mt-4" id="forums" role="tabpanel" aria-labelledby="forums-tab">
            @if (isset($forums))
                <div class="row row-cols-4 g-4">
                    @foreach ($forums as $f)
                        <div class="col">
                            <a href="/forumDetail/{{ $f->id }}" class="project-detail">
                                <div class="card card-wishlist border-0" style="width: 18rem;">
                                    <img src="{{ asset('storage/'.$f->forum_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $f->forum_title }}</h5>
                                        <div class="text-center">
                                            {{-- @include('badgeCategory') --}}
                                        </div class="text-center">
                                        <div class="mt-2">
                                            @php
                                                Carbon\Carbon::setLocale('id');
                                            @endphp
                                            <p class="card-text text-center">
                                                <small class="text-muted">
                                                    {{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                Tidak ada proyek yang diposting.
            @endif
        </div>
    </div>
</div>

@elseif (Auth::check() && Auth::user()->role == "Teacher" && Auth::user()->status == "Approved")

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-6">
                    <h1 class="name">{{ $u->name }}
                        <span>
                            <sup>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#EditProfileModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                            </sup>
                        </span>
                    </h1>
                    @include('profile.modalEditProfile')
                    <p class="teks">{{ $u->role }}</p>
                    <table>
                        <tr>
                            <th>Umur</th>
                            <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y years old') }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $u->gender }}</td>
                        </tr>
                        <tr>
                            <th>Guru di Kelas</th>
                            @if ($u->grade == null || $u->grade == "Select Grade")
                                <td></td>
                            @else
                                <td>{{ $u->grade }} SMA</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Guru di Sekolah</th>
                            <td>{{ $u->sekolah }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-xl-5">
        <h6><strong>Tentang Saya:</strong></h6>
        <p class="aboutme">{{ $u->aboutme }}</p>
    </div>

    <div class="container mt-xl-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                    </svg>
                    Proyek
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="wishlist-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                        <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                    </svg>
                    Wishlist
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="forums-tab" data-bs-toggle="tab" data-bs-target="#forums" type="button" role="tab" aria-controls="forums" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Forum
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="class-tab" data-bs-toggle="tab" data-bs-target="#class" type="button" role="tab" aria-controls="class" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                    </svg>
                    Class
                </button>
            </li>
        </ul>


        <div class="tab-content p-3" id="myTabContent">

            <div class="tab-pane fade mt-4 show active" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                    <div class="row row-cols-4 g-4">
                        @foreach ($projects as $p)
                            <div class="col">
                                <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $p->project_title }}</h5>
                                            <div class="text-center">
                                                @include('badgeCategory')
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>


            <div class="tab-pane fade mt-4" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                @if (isset($wishlists))
                    <div class="row row-cols-4 g-4">
                        @foreach ($wishlists as $w)
                            <div class="col">
                                    <a href="/projectDetail/{{ $w->project_id }}" class="project-detail">
                                        <div class="card card-wishlist" style="width: 18rem;">
                                            <img src="{{ asset('storage/'.$w->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                            <div class="card-body">
                                                <div class="text-center mb-2">
                                                    <a href="/wishlistDelete/{{ $w->w_id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <h5 class="card-title text-center">{{ $w->project_title }}</h5>
                                                <div class="text-center">
                                                    @include('badgeCategoryWishlists')
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

            <div class="tab-pane fade mt-4" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                @if (isset($forums))
                    <div class="row row-cols-4 g-4">
                        @foreach ($forums as $f)
                            <div class="col">
                                <a href="/forumDetail/{{ $f->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$f->forum_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $f->forum_title }}</h5>
                                            <div class="text-center">
                                                {{-- @include('badgeCategory') --}}
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

            <div class="tab-pane fade mt-4" id="class" role="tabpanel" aria-labelledby="class-tab">
                    <div class="row row-cols-4 g-4">
                        @foreach ($classTeacher as $c)
                            <div class="col">
                                <a href="/classDetail/{{ $c->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $c->class_name }}</h5>
                                            <div class="mt-2">
                                                <p class="card-text">#{{ $c->class_code }}</p>
                                                <p class="card-text">Kelas {{ $c->class_grade }}</p>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
            </div>

        </div>
    </div>




@else

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-6">
                    <h1 class="name">{{ $u->name }}
                        <span>
                            <sup>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#EditProfileModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                            </sup>
                        </span>
                    </h1>
                    @include('profile.modalEditProfile')
                    <p class="teks">{{ $u->role }}</p>
                    <table>
                        <tr>
                            <th>Umur</th>
                            <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y years old') }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $u->gender }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            @if ($u->grade == null || $u->grade == "Select Grade")
                                <td></td>
                            @else
                                <td>{{ $u->grade }} SMA</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Sekolah</th>
                            <td>{{ $u->sekolah }}</td>
                        </tr>
                        <tr>
                            <th>Jurusan yang diminati</th>
                            <td>{{ $u->jurusan }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-xl-5">
        @include('profile.hitungRekomendasi')
        <h6 class="mt-4"><strong>Tentang Saya:</strong></h6>
        <p class="aboutme">{{ $u->aboutme }}</p>
    </div>

    <div class="container mt-xl-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                    </svg>
                    Proyek
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="wishlist-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                        <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                    </svg>
                    Wishlist
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="forums-tab" data-bs-toggle="tab" data-bs-target="#forums" type="button" role="tab" aria-controls="forums" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Forum
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="class-tab" data-bs-toggle="tab" data-bs-target="#class" type="button" role="tab" aria-controls="class" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                    </svg>
                    Class
                </button>
            </li>
        </ul>


        <div class="tab-content p-3" id="myTabContent">

            <div class="tab-pane fade mt-4 show active" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                    <div class="row row-cols-4 g-4">
                        @foreach ($projects as $p)
                            <div class="col">
                                <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $p->project_title }}</h5>
                                            <div class="text-center">
                                                @include('badgeCategory')
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>


            <div class="tab-pane fade mt-4" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                @if (isset($wishlists))
                    <div class="row row-cols-4 g-4">
                        @foreach ($wishlists as $w)
                            <div class="col">
                                    <a href="/projectDetail/{{ $w->project_id }}" class="project-detail">
                                        <div class="card card-wishlist" style="width: 18rem;">
                                            <img src="{{ asset('storage/'.$w->project_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                            <div class="card-body">
                                                <div class="text-center mb-2">
                                                    <a href="/wishlistDelete/{{ $w->w_id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <h5 class="card-title text-center">{{ $w->project_title }}</h5>
                                                <div class="text-center">
                                                    @include('badgeCategoryWishlists')
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

            <div class="tab-pane fade mt-4" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                @if (isset($forums))
                    <div class="row row-cols-4 g-4">
                        @foreach ($forums as $f)
                            <div class="col">
                                <a href="/forumDetail/{{ $f->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <img src="{{ asset('storage/'.$f->forum_image) }}" class="rounded-start project-image-wishlist p-3" alt="project image">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $f->forum_title }}</h5>
                                            <div class="text-center">
                                                {{-- @include('badgeCategory') --}}
                                            </div class="text-center">
                                            <div class="mt-2">
                                                @php
                                                    Carbon\Carbon::setLocale('id');
                                                @endphp
                                                <p class="card-text text-center">
                                                    <small class="text-muted">
                                                        {{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

            <div class="tab-pane fade mt-4" id="class" role="tabpanel" aria-labelledby="class-tab">
                @if (isset($class))
                    <div class="row row-cols-4 g-4">
                        @foreach ($class as $c)
                            <div class="col">
                                <a href="/classDetail/{{ $c->id }}" class="project-detail">
                                    <div class="card card-wishlist border-0" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $c->class_name }}</h5>
                                            <div class="mt-2">
                                                <p class="card-text">#{{ $c->class_code }}</p>
                                                <p class="card-text">Kelas {{ $c->class_grade }}</p>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>

        </div>
    </div>



@endif


@endforeach
@endif
