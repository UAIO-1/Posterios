@extends('layouts.adminLayouts')
@section('title', 'Users • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/admin/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/users.css') }}">


<div class="container2">
    <div class="row">
        <div class="col-md-2">
            @include('admin.sidebar')
        </div>

        <div class="col-md-7">
            <div class="mt-lg-4">
                <form class="d-flex" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search Username" name="s_user" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="mb-4">
                @if(isset($pendingCount))
                <h6>Pending Approval ({{ $pendingCount }})</h6>
                @endif
            </div>

            <div style="max-width: 1100px; overflow: auto;">
            <div class="row row-cols-4 g-4">
                @if(isset($pending))
                @foreach ($pending as $p)
                    <div class="col">
                        <div class="card p-3" style="width: 15rem;border-radius: 20px">
                            <div class="d-flex justify-content-center">
                                @if ($p->image == null)
                                    @if ($p->gender == "Male")
                                        <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture" alt="profile picture">
                                    @else
                                        <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture" alt="profile picture">
                                    @endif
                                @else
                                    <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                @endif
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $p->name }}</h5>
                                <p class="card-text">
                                    <small style="font-size: 14px">({{ $p->email }})</small>
                                </p>
                                <p class="card-text">
                                    <small style="font-size: 14px">{{ $p->role }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>

            <div class="mb-4 mt-lg-4">
                <h6>Users ({{ $usersCount }})</h6>
            </div>

            <div class="row row-cols-4 g-4">
                @if(isset($users))
                @foreach ($users as $u)
                    <div class="col">
                        <label>

                            <a href="/admin.users/{{ $u->id }}" style="text-decoration: none; color:#000;">
                                <input type="radio" name="recommendation" value="A" class="card-input-element">
                                <div class="card p-3 card-input" style="width: 15rem;border-radius: 20px">
                                    <div class="d-flex justify-content-center">
                                        @if ($u->image == null)
                                            @if ($u->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture" alt="profile picture">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture" alt="profile picture">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                        @endif
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $u->name }}</h5>
                                        <p class="card-text">
                                            <small style="font-size: 14px">({{ $u->email }})</small>
                                        </p>
                                        <p class="card-text">
                                            <small style="font-size: 14px">{{ $u->role }}</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </label>
                    </div>
                @endforeach
                @endif
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
                @if(isset($users2))
                @foreach ($users2 as $u2)
                    <div class="d-flex justify-content-center">
                        @if ($u2->image == null)
                            @if ($u2->gender == "Male")
                                <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                            @else
                                <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                            @endif
                        @else
                            <img src="{{ asset('storage/'.$u2->image) }}" class="card-img-top profilepicture" alt="profile picture">
                        @endif
                    </div>
                    <div class="text-center mt-2">
                        <h5>{{ $u2->name }}</h5>
                        <p><em>{{ $u2->role }}</em></p>
                        <p>
                            @if ($u2->gender == "Male")
                                <em>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male text-primary" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                    </svg>
                                    {{ $u2->gender }}
                                </em>
                            @else
                                <em>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female text-danger" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                                    </svg>
                                    {{ $u2->gender }}
                                </em>
                            @endif
                        </p>
                        <div class="mt-lg-3">
                            <a href="#modalHapusAkun_{{ $u2->id }}" data-bs-toggle="modal" data-bs-target="#modalHapusAkun_{{ $u2->id }}" class="btn btn-danger">Hapus Akun User</a>
                        </div>
                        @include('admin.modalHapusAkun')
                        <hr>
                        <div>
                            <table style="margin-left: auto; margin-right: auto;">
                                <tr>
                                    <th>Grade</th>
                                    <td class="p-2">{{ $u2->grade }}</td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td class="p-2">{{ $u2->jurusan }}</td>
                                </tr>
                                <tr>
                                    <th>Sekolah</th>
                                    <td class="p-2">{{ $u2->sekolah }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-2 text-center">
                        <div class="col">
                            <small>Total Projects:</small>
                            <h4>{{ $projects }}</h4>
                        </div>
                        <div class="col">
                            <small>Total Forums:</small>
                            <h4>{{ $projects }}</h4>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6>Projects</h6>
                        <hr>
                        <div style="height:300px;overflow:auto;">
                            @if(isset($projectsUser))
                            @foreach ($projectsUser as $ps)
                            <a href="/admin.projects/{{ $ps->id }}" style="color: #000;text-decoration: none">
                                <div class="card card-pro p-2 mb-2" style="border-radius: 10px">
                                    <small>{{ \Carbon\Carbon::parse($ps->created_at)->format('M d, Y') }}</small>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <small><strong>{{ $ps->project_title }}</strong></small>
                                        </div>
                                        <div>
                                            @include('admin.badgeCategoryAdmin')
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6>Forums</h6>
                        <hr>
                        <div style="height:300px;overflow:auto;">
                            @if(isset($forumUser))
                            @foreach ($forumUser as $ps)
                            <a href="/admin.projects/{{ $ps->id }}" style="color: #000;text-decoration: none">
                                <div class="card card-pro p-2 mb-2" style="border-radius: 10px">
                                    <small>{{ \Carbon\Carbon::parse($ps->created_at)->format('M d, Y') }}</small>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <small><strong>{{ $ps->project_title }}</strong></small>
                                        </div>
                                        <div>
                                            @include('admin.badgeCategoryAdmin')
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

