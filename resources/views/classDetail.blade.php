@extends('layout')
@section('title', 'My Class • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/classDetail.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

@include('navbar')

@if (!Auth::check())


<div class="mt-xl-5">
    <div class="row">
        <div class="col-md-8" style="margin-left: 50px">
            @foreach ($class as $c)
                <h1 class="display-2"><strong>{{ $c->class_name }}</strong></h1>
                <p class="text-muted" style="font-size: 20px">Kelas {{ $c->class_grade }} • #{{ $c->class_code }}</p>
                <p style="text-align: justify">{{ $c->class_description }}</p>
            <div>
                    @if ($stats->user_status == null)
                        <p class="text-danger">Waiting Approval</p>
                    @else
                        <a href="" class="postbtn" type="button" data-bs-toggle="modal" data-bs-target="#postingproyek">
                            Posting Proyek
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                        </a>
                    @endif
            </div>
            @include('profile.modalPostProyekKelas')
            @endforeach

            <hr>

            <div class="mt-lg-4">
                <div class="row row-cols-4 g-4">
                    @foreach ($projects as $p)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top projectimage" alt="project image">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $p->project_title }}</strong></h5>
                                @php
                                    Carbon\Carbon::setLocale('id');
                                @endphp
                                <p class="card-text">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                                <p><small>oleh <a href="/myProfile/{{ $p->user_id }}"><em>{{ $p->name }}</em></a></small></p>
                                <a href="/projectDetail/{{ $p->id }}" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-left: 50px">
            <div>
                <h6><strong>Host (1)</strong></h6>
                @foreach ($host as $h)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-3">
                                @if ($h->image == null)
                                    @if ($h->gender == "Male")
                                        <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                                    @else
                                        <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                                    @endif
                                @else
                                    <img src="{{ asset('storage/'.$h->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title"><strong>{{ $h->name }}</strong></h5>
                                <p class="card-text">
                                    {{ $h->role }}
                                    •
                                    @if ($h->status == "Approved")
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                    </svg>
                                    <span class="text-success">verified</span>
                                    @endif
                                </p>
                                <p class="card-text"><small class="text-muted">at {{ $h->sekolah }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                <div>
                    <h6><strong>Pending ({{ $statsCtr }})</strong></h6>
                </div>
                <div style="max-height: 200px;overflow: auto">
                @foreach ($statsUser as $u)
                    <a href="/myProfile/{{ $u->id }}" style="text-decoration: none; color:#000">
                        <div class="card mb-3" style="max-width: 540px; max-height: 100px">
                            <div class="row row-cols-auto g-0">
                                <div class="col p-3">
                                    @if ($u->image == null)
                                        @if ($u->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                    @endif
                                </div>
                                <div class="col">
                                    <div class="card-body" style="max-height: 5px">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <small class="card-title"><strong>{{ $u->name }}</strong>
                                                    •
                                                    @if ($u->status == "Approved")
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                                    </svg>
                                                    <span class="text-success">verified</span>
                                                    @endif
                                                </small>
                                                <p class="card-text">
                                                    {{ $u->role }} at {{ $u->sekolah }}
                                                </p>
                                            </div>
                                            <div class="p-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <div>
                <div>
                    <h6><strong>Anggota ({{ $usersCtr }})</strong></h6>
                </div>
                @foreach ($users as $u)
                    <a href="/myProfile/{{ $u->id }}" style="text-decoration: none; color:#000">
                        <div class="card mb-3" style="max-width: 540px; max-height: 100px">
                            <div class="row row-cols-auto g-0">
                                <div class="col p-3">
                                    @if ($u->image == null)
                                        @if ($u->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                    @endif
                                </div>
                                <div class="col">
                                    <div class="card-body" style="max-height: 5px">
                                        <small class="card-title"><strong>{{ $u->name }}</strong>
                                            •
                                            @if ($u->status == "Approved")
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                            </svg>
                                            <span class="text-success">verified</span>
                                            @endif
                                        </small>
                                        <p class="card-text">
                                            {{ $u->role }} at {{ $u->sekolah }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@elseif(Auth::check() && Auth::user()->role == "Teacher" && Auth::user()->status == "Approved")

<div class="mt-xl-5">
    <div class="row">
        <div class="col-md-8" style="margin-left: 50px">
            @foreach ($class as $c)
                <h1 class="display-2"><strong>{{ $c->class_name }}</strong></h1>
                <p class="text-muted" style="font-size: 20px">Kelas {{ $c->class_grade }} • #{{ $c->class_code }}</p>
                <p style="text-align: justify">{{ $c->class_description }}</p>

                <div class="d-flex justify-content-between">
                    <div>
                        <a href="" class="lihat-but m-1" data-bs-toggle="modal" data-bs-target="#daftarnilai" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                            Daftar Nilai
                        </a>
                    </div>
                    @include('profile.modalDaftarNilai')
                    <div>
                        <div>

                            <a href="/daftarNilai/{{ $c->id }}" class="nilai-but" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download m-1" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                                Export Nilai ke PDF
                            </a>
                            <a href="/daftarNilaiExcel/{{ $c->id }}" class="excel-but" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download m-1" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                                Export Nilai ke Excel
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
            <hr>


            <div class="mt-lg-4">
                <div class="row row-cols-4 g-4">
                    @foreach ($projects as $p)

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top projectimage" alt="project image">
                            <div class="d-flex justify-content-between">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ Str::limit($p->project_title, '6', '...') }}</strong></h5>
                                    @php
                                        Carbon\Carbon::setLocale('id');
                                    @endphp
                                    <p class="card-text">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                                    <p><small>oleh <a href="/myProfile/{{ $p->user_id }}"><em>{{ $p->name }}</em></a></small></p>
                                    <a href="/projectDetail/{{ $p->id }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                                <div class="p-3">
                                    @if (in_array($p->id, $doneNilai))
                                        <small class="badge bg-success">Sudah dinilai</small>
                                    @else
                                        <small class="badge bg-danger">Belum dinilai</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="col-md-3" style="margin-left: 50px">
            <div>
                <h6><strong>Host (1)</strong></h6>
                @foreach ($host as $h)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-3">
                                @if ($h->image == null)
                                    @if ($h->gender == "Male")
                                        <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                                    @else
                                        <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                                    @endif
                                @else
                                    <img src="{{ asset('storage/'.$h->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title"><strong>{{ $h->name }}</strong></h5>
                                <p class="card-text">
                                    {{ $h->role }}
                                    •
                                    @if ($h->status == "Approved")
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                    </svg>
                                    <span class="text-success">verified</span>
                                    @endif
                                </p>
                                <p class="card-text"><small class="text-muted">at {{ $h->sekolah }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                <div>
                    <h6><strong>Pending ({{ $statsCtr }})</strong></h6>
                </div>
                <div style="max-height: 200px;overflow: auto">
                @foreach ($statsUser as $u)
                    <a href="/myProfile/{{ $u->id }}" style="text-decoration: none; color:#000">
                        <div class="card mb-3" style="max-width: 540px; max-height: 100px">
                            <div class="row row-cols-auto g-0">
                                <div class="col p-3">
                                    @if ($u->image == null)
                                        @if ($u->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                    @endif
                                </div>
                                <div class="col">
                                    <div class="card-body" style="max-height: 5px">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <small class="card-title"><strong>{{ $u->name }}</strong>
                                                    •
                                                    @if ($u->status == "Approved")
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                                    </svg>
                                                    <span class="text-success">verified</span>
                                                    @endif
                                                </small>
                                                <p class="card-text">
                                                    {{ $u->role }} at {{ $u->sekolah }}
                                                </p>
                                            </div>
                                            <div class="p-2">
                                                <form action={{ url('/approveStudent') }} method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $u->id }}">
                                                    <input type="submit" class="btn btn-danger" value="Approved">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <div>
                <div>
                    <h6><strong>Anggota ({{ $usersCtr }})</strong></h6>
                </div>
                @foreach ($users as $u)
                    <a href="/myProfile/{{ $u->id }}" style="text-decoration: none; color:#000">
                        <div class="card mb-3" style="max-width: 540px; max-height: 100px">
                            <div class="row row-cols-auto g-0">
                                <div class="col p-3">
                                    @if ($u->image == null)
                                        @if ($u->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                    @endif
                                </div>
                                <div class="col">
                                    <div class="card-body" style="max-height: 5px">
                                        <small class="card-title"><strong>{{ $u->name }}</strong>
                                            •
                                            @if ($u->status == "Approved")
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                            </svg>
                                            <span class="text-success">verified</span>
                                            @endif
                                        </small>
                                        <p class="card-text">
                                            {{ $u->role }} at {{ $u->sekolah }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>


@elseif(Auth::check() && Auth::user()->role == "Student" && Auth::user()->status == "Approved")

    <div class="mt-xl-5">
        @if(session('success-buat'))
            <div id="alert" class="alert alert-success m-4"><h5>{{ session('success-buat') }}</h5></div>
        @endif
        <div class="row">
            <div class="col-md-8" style="margin-left: 50px">
                @foreach ($class as $c)
                    <h1 class="display-2"><strong>{{ $c->class_name }}</strong></h1>
                    <p class="text-muted" style="font-size: 20px">Kelas {{ $c->class_grade }} • #{{ $c->class_code }}</p>
                    <p style="text-align: justify">{{ $c->class_description }}</p>
                <div>
                        @if ($stats->user_status == null)
                            <p class="text-danger">Waiting Approval</p>
                        @else
                            <a href="" class="postbtn" type="button" data-bs-toggle="modal" data-bs-target="#postingproyek">
                                Posting Proyek
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                </svg>
                            </a>
                        @endif
                </div>
                @include('profile.modalPostProyekKelas')
                @endforeach

                <hr>

                <div class="mt-lg-4">
                    <div class="row row-cols-4 g-4">
                        @foreach ($projects as $p)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top projectimage" alt="project image">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $p->project_title }}</strong></h5>
                                    @php
                                        Carbon\Carbon::setLocale('id');
                                    @endphp
                                    <p class="card-text">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                                    <p><small>oleh <a href="/myProfile/{{ $p->user_id }}"><em>{{ $p->name }}</em></a></small></p>
                                    <a href="/projectDetail/{{ $p->id }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-3" style="margin-left: 50px">
                <div>
                    <h6><strong>Host (1)</strong></h6>
                    @foreach ($host as $h)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    @if ($h->image == null)
                                        @if ($h->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail" alt="profile picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$h->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $h->name }}</strong></h5>
                                    <p class="card-text">
                                        {{ $h->role }}
                                        •
                                        @if ($h->status == "Approved")
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                        </svg>
                                        <span class="text-success">verified</span>
                                        @endif
                                    </p>
                                    <p class="card-text"><small class="text-muted">at {{ $h->sekolah }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div>
                    <div>
                        <h6><strong>Pending ({{ $statsCtr }})</strong></h6>
                    </div>
                    <div style="max-height: 200px;overflow: auto">
                    @foreach ($statsUser as $u)
                        <a href="/myProfile/{{ $u->id }}" style="text-decoration: none; color:#000">
                            <div class="card mb-3" style="max-width: 540px; max-height: 100px">
                                <div class="row row-cols-auto g-0">
                                    <div class="col p-3">
                                        @if ($u->image == null)
                                            @if ($u->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                        @endif
                                    </div>
                                    <div class="col">
                                        <div class="card-body" style="max-height: 5px">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <small class="card-title"><strong>{{ $u->name }}</strong>
                                                        •
                                                        @if ($u->status == "Approved")
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                                        </svg>
                                                        <span class="text-success">verified</span>
                                                        @endif
                                                    </small>
                                                    <p class="card-text">
                                                        {{ $u->role }} at {{ $u->sekolah }}
                                                    </p>
                                                </div>
                                                <div class="p-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <div>
                    <div>
                        <h6><strong>Anggota ({{ $usersCtr }})</strong></h6>
                    </div>
                    @foreach ($users as $u)
                        <a href="/myProfile/{{ $u->id }}" style="text-decoration: none; color:#000">
                            <div class="card mb-3" style="max-width: 540px; max-height: 100px">
                                <div class="row row-cols-auto g-0">
                                    <div class="col p-3">
                                        @if ($u->image == null)
                                            @if ($u->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture-detail2" alt="profile picture">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                        @endif
                                    </div>
                                    <div class="col">
                                        <div class="card-body" style="max-height: 5px">
                                            <small class="card-title"><strong>{{ $u->name }}</strong>
                                                •
                                                @if ($u->status == "Approved")
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                                </svg>
                                                <span class="text-success">verified</span>
                                                @endif
                                            </small>
                                            <p class="card-text">
                                                {{ $u->role }} at {{ $u->sekolah }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endif

<script>
    setTimeout(function() {
        $('#alert').hide();
    }, 3000);
</script>
