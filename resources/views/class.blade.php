@extends('layout')
@section('title', 'Class • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/class.css') }}">

@include('navbar')


@if (!Auth::check())



@elseif(Auth::check() && Auth::user()->role == "Student" && Auth::user()->status == "Approved")

    <div class="header">
        <div class="container">

            <div class="text-light text-center">
                <h1 class="display-1">Welcome to Class!</h1>
                <p>
                    Masuk ke kelas Anda untuk mempermudah mengumpulkan tugas dan proyek Anda. <br>
                    Proyek yang dikumpulkan dalam kelas juga dapat dilihat oleh orang lain secara terpisah.
                </p>
            </div>

            <div class="d-flex justify-content-center" style="margin-top: 150px">
                <div class="card p-3">
                    <p class="text-dark">Cari Kelas</p>
                    <form class="d-flex" method="GET">
                        <input class="form-control me-2 w-100" type="search" placeholder="Kode Kelas" name="s_class" aria-label="Search">
                        <button class="btn btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <div class="" style="margin-top: 100px; margin-left: 50px; margin-right: 50px;">
        <div class="row row-cols-4 g-4">
            @foreach ($class as $c)
            <div class="col">
                    <a href="/classDetail/{{ $c->id }}" style="text-decoration: none; color: #000">
                    <div class="card">
                        <h5 class="card-header"><strong>#{{ $c->class_code }}</strong></h5>
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $c->class_name }}</strong></h5>
                            <small class="text-muted">Kelas {{ $c->class_grade }}</small>
                            <p class="card-text">{{ Str::limit($c->class_description, '100', '...')  }}</p>

                            @if (in_array($c->id, $join))
                                <small class="text-success"><em>Bergabung</em></small>
                            @else
                                <form action={{ url('/joinClass') }} method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="class_id" value="{{ $c->id }}">
                                    <input type="hidden" name="class_code" value="{{ $c->class_code }}">
                                    <input type="submit" class="btn btn-primary" value="Gabung">
                                </form>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


@else

<div class="header">
    <div class="container">

        <div class="text-light text-center">
            <h1 class="display-1">Welcome to Class!</h1>
            <p>
                Buatlah kelas untuk mempermudah penilaian dan pengumpulan proyek. <br>
                Proyek yang dikumpulkan dalam kelas juga dapat dilihat oleh orang lain secara terpisah.
            </p>
        </div>

        <div class="text-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#buatKelas" class="createclass-but" type="button">
                <span class="m-1">Buat Kelas</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 17 17">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
            </a>
        </div>

        @include('profile.modalBuatKelas')

        <div class="d-flex justify-content-center" style="margin-top: 100px">
            <div class="card p-3">
                <p class="text-dark">Cari Kelas</p>
                <form class="d-flex" method="GET">
                    <input class="form-control me-2 w-100" type="search" placeholder="Kode Kelas" name="s_class" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="" style="margin-top: 100px; margin-left: 50px; margin-right: 50px;">
    <div class="row row-cols-4 g-4">
        @foreach ($class as $c)
        <div class="col">
                <a href="/classDetail/{{ $c->id }}" style="text-decoration: none; color: #000">
                <div class="card">
                    <h5 class="card-header"><strong>#{{ $c->class_code }}</strong></h5>
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $c->class_name }}</strong></h5>
                        <small class="text-muted">Kelas {{ $c->class_grade }}</small>
                        <p class="card-text">{{ Str::limit($c->class_description, '100', '...')  }}</p>
                        @if (in_array($c->id, $classes))
                            <small class="text-success"><em>dibuat oleh Anda</em></small>
                        @else

                        @endif
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endif
