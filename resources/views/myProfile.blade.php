@extends('layout')
@section('title', 'Posterios - Project Exhibition & Forum Discussion')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/myProfile.css') }}">



@include('navbar')


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
                <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
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
            <div class="tab-pane fade show active" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">

            </div>

            <div class="tab-pane fade mt-4" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                <div class="row row-cols-1 row-cols-3">
                    @foreach ($projects as $p)
                    <div class="col">
                        <div class="card mb-3 card-project" style="max-width: 540px;">
                            <a href="/projectDetailGuest/{{ $p->id }}" class="project-detail">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="img-fluid rounded-start projectimage p-3" alt="project image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->project_title }}</h5>
                                            @include('badgeCategory')
                                            @php
                                                Carbon\Carbon::setLocale('id');
                                            @endphp
                                            <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>
            <div class="tab-pane fade" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                ...
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
                <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
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
            <div class="tab-pane fade mt-4" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                <div class="row row-cols-1 row-cols-3">
                    @foreach ($projects as $p)
                    <div class="col">
                        <div class="card mb-3 card-project" style="max-width: 540px;">
                            <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="img-fluid rounded-start projectimage p-3" alt="project image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->project_title }}</h5>
                                            @include('badgeCategory')
                                            @php
                                                Carbon\Carbon::setLocale('id');
                                            @endphp
                                            <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>
            <div class="tab-pane fade" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                ...
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
        <h6><strong>Tentang Saya:</strong></h6>
        <p class="aboutme">{{ $u->aboutme }}</p>
    </div>

    <div class="container mt-xl-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="wishlist-tab" data-bs-toggle="tab" data-bs-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                        <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                    </svg>
                    Wishlist
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
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
            <div class="tab-pane fade show active" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">

            </div>

            <div class="tab-pane fade mt-4" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                @if (isset($projects))
                <div class="row row-cols-1 row-cols-3">
                    @foreach ($projects as $p)
                    <div class="col">
                        <div class="card mb-3 card-project" style="max-width: 540px;">
                            <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="img-fluid rounded-start projectimage p-3" alt="project image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->project_title }}</h5>
                                            @include('badgeCategory')
                                            @php
                                                Carbon\Carbon::setLocale('id');
                                            @endphp
                                            <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                    Tidak ada proyek yang diposting.
                @endif
            </div>
            <div class="tab-pane fade" id="forums" role="tabpanel" aria-labelledby="forums-tab">
                ...
            </div>
        </div>
    </div>



@endif


@endforeach
