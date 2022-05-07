@extends('layouts.adminLayouts')
@section('title', 'Dashboard • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/navbar.css') }}">


@include('admin.sidebar')

<nav class="text-light">
    <h5>Dashboard</h5>
</nav>

<div class="main mt-lg-4">


    <div class="container">



        <h6>Status Terkini</h6>
        <hr>
        <div class="row row-cols-4 p-3">
            <div class="col">
                <a href="/admin.users" style="text-decoration: none;color: #000">
                    <div class="card card-stat border-0 rounded-0" style="width: 18rem;">
                        <div class="card-body">
                            <small>
                                <span class="text-muted" style="font-size: 20px">Users</span>
                                <p class="user-count text-center">{{ $usersCount }}</p>
                            </small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/admin.projects" style="text-decoration: none;color: #000">
                    <div class="card card-stat border-0 rounded-0" style="width: 18rem;">
                        <div class="card-body">
                            <small>
                                <span class="text-muted" style="font-size: 20px">Projects</span>
                                <p class="project-count text-center">{{ $projectsCount }}</p>
                            </small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/admin.forums" style="text-decoration: none;color: #000">
                    <div class="card card-stat border-0 rounded-0" style="width: 18rem;">
                        <div class="card-body">
                            <small>
                                <span class="text-muted" style="font-size: 20px">Forums</span>
                                <p class="forum-count text-center">{{ $forumsCount }}</p>
                            </small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/admin.verifikasiuser" style="text-decoration: none;color: #000">
                    <div class="card card-stat border-0 rounded-0" style="width: 18rem;">
                        <div class="card-body">
                            <small>
                                <span class="text-muted" style="font-size: 20px">Pending Verification</span>
                                <p class="pending-count text-center">{{ $pendingCount }}</p>
                            </small>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-3 mt-4">

            <h6>Akun yang telah terdaftar dalam 30 hari</h6>
            <hr>
            <div class="card" style="height:300px;overflow:auto;">
                <table class="table">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Age</th>
                        <th scope="col">Role</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                            @php($diffInDays = \Carbon\Carbon::parse($u->created_at)->diffInDays())
                            @if($diffInDays < 30)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->gender }}</td>
                                    <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y') }}</td>
                                    <td>{{ $u->role }}</td>
                                    <td>{{ $u->grade }}</td>
                                    <td><a href="/admin.users/{{ $u->id }}">See Detail</a></td>
                                </tr>
                            @else
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="p-3 mt-4">

            <div class="row">
                <div class="col-md-8">
                    <div class="card p-3">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Projects</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Forums</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h6 class="text-muted">Proyek yang telah diposting dalam 30 hari</h6>
                                <div style="height:300px;overflow:auto;">
                                    <table class="table">
                                        <thead>
                                            <th scope="col">ID</th>
                                            <th scope="col">TItle</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Sub Category</th>
                                            <th scope="col">By</th>
                                            <th scope="col">Created</th>
                                            <th scope="col">Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $p)
                                                @php($diffInDays = \Carbon\Carbon::parse($p->created_at)->diffInDays())
                                                @if($diffInDays < 30)
                                                    <tr>
                                                        <td>{{ $p->id }}</td>
                                                        <td>{{ $p->project_title }}</td>
                                                        <td>{{ $p->project_category }}</td>
                                                        <td>{{ $p->project_subcategory }}</td>
                                                        <td>{{ $p->name }}</td>
                                                        <td>{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</td>
                                                        <td><a href="/admin.projects/{{ $p->id }}">See Detail</a></td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <h6 class="text-muted">Proyek yang telah diposting dalam 30 hari</h6>
                                <div style="height:300px;overflow:auto;">
                                    <table class="table">
                                        <thead>
                                            <th scope="col">ID</th>
                                            <th scope="col">TItle</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Sub Category</th>
                                            <th scope="col">By</th>
                                            <th scope="col">Created</th>
                                            <th scope="col">Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($forums as $f)
                                                @php($diffInDays = \Carbon\Carbon::parse($f->created_at)->diffInDays())
                                                @if($diffInDays < 30)
                                                    <tr>
                                                        <td>{{ $f->id }}</td>
                                                        <td>{{ $f->forum_title }}</td>
                                                        <td>{{ $f->forum_category }}</td>
                                                        <td>{{ $f->forum_subcategory }}</td>
                                                        <td>{{ $f->name }}</td>
                                                        <td>{{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}}</td>
                                                        <td><a href="/admin.forums/{{ $f->id }}">See Detail</a></td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-light" style="background: linear-gradient(to bottom, #5162ff, #259df3)">
                            <h4>Hari ini</h4>
                            <hr>
                            <div class="row row-cols-3">
                                <div class="col">
                                    <h5>Users</h5>
                                    @php($diffInDays = \Carbon\Carbon::parse($u->created_at)->diffInDays())
                                    @if($diffInDays < 1)
                                        <h3>+{{ $usersCount }}</h3>
                                    @else
                                        <h3>+0</h3>
                                    @endif
                                </div>
                                <div class="col">
                                    <h5>Projects</h5>
                                    @php($diffInDays = \Carbon\Carbon::parse($p->created_at)->diffInDays())
                                    @if($diffInDays < 1)
                                        <h3>+{{ $projectsCount }}</h3>
                                    @else
                                        <h3>+0</h3>
                                    @endif
                                </div>
                                <div class="col">
                                    <h5>Forums</h5>
                                    @php($diffInDays = \Carbon\Carbon::parse($u->created_at)->diffInDays())
                                    @if($diffInDays < 1)
                                        <h3>+{{ $forumsCount }}</h3>
                                    @else
                                        <h3>+0</h3>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>






    </div>



</div> {{-- main --}}

