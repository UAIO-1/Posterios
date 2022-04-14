@extends('layout')
@section('title', 'Posterios - Explore STEM')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/explore.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


@include('navbar')

@if (!Auth::check())

    <div class="header">
        <div class="container mt-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Project Showcase</h1>
                    <p class="slogan text-muted">
                        Publikasikan karya Anda di sekolah untuk menjadi karya terbaik di sini!
                        Posterios selalu menyediakan kategori yang dibutuhkan siswa dalam membuat karya!
                    </p>
                    <div style="margin-top: 20px">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="publish-but" type="button">
                            Mulai Posting
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 17 17">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/showcase.png') }}" alt="showcase" class="showcase">
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="card card-filter-forum p-3 border-0">
            <form action="{{ url('filterProject') }}" method="get">
                <div>
                    <h5>
                        <strong>Filter</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </h5>
                </div>
                <div class="row row-cols-2">
                    <div class="col">
                        <select id="main3" class="form-select">
                            <option>Pilih Kategori</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="project_select" id="sub3" class="form-select">
                            <option value="Digital Design">Pilih Sub Kategori</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="Atur Filter" class="filter-but">
                </div>
            </form>
        </div>
    </div>


    <div class="p-5 mt-lg-4">
        <div class="row row-cols-md-4 g-4">
            @foreach ($projects as $p)
                <div class="col">
                    <a href="/projectDetailGuest/{{ $p->id }}" class="project-detail">
                        <div class="card card-project border-0">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="project image">
                            <div class="card-body card-img-overlay text-center">
                                <div class="isi">
                                    <h3 class="card-title">{{ $p->project_title }}</h3>
                                    @include('badgeCategory')
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="mt-2">
                        <a href="/myProfile/{{ $p->user_id }}" class="username">
                            @if ($users->image == null)
                                @if ($users->gender == "Male")
                                    <img src="{{ asset('image/user-male.png') }}" alt="posterios male" width="25px" height="25px" class="profile-picture" style="border-radius: 10px">
                                @else
                                    <img src="{{ asset('image/user-female.png') }}" alt="posterios female" width="25px" height="25px" class="profile-picture" style="border-radius: 10px">
                                @endif
                            @else
                                <img src="{{ asset('storage/'.$users->image) }}" alt="profile picture"  width="25px" height="25px" class="profile-picture">
                            @endif
                            <small>{{ $p->name }}</small>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@else

    <div class="header">
        <div class="container mt-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Project Showcase</h1>
                    <p class="slogan text-muted">
                        Publikasikan karya Anda di sekolah untuk menjadi karya terbaik di sini!
                        Posterios selalu menyediakan kategori yang dibutuhkan siswa dalam membuat karya!
                    </p>
                    <div style="margin-top: 30px">
                        <a href="/post" class="publish-but" type="button">
                            Mulai Posting
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 17 17">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/showcase.png') }}" alt="showcase" class="showcase">
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="card card-filter-forum p-3 border-0">
            <form action="{{ url('filterProject') }}" method="get">
                <div>
                    <h5>
                        <strong>Filter</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </h5>
                </div>
                <div class="row row-cols-2">
                    <div class="col">
                        <select id="main3" class="form-select">
                            <option>Pilih Kategori</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="project_select" id="sub3" class="form-select">
                            <option value="Digital Design">Pilih Sub Kategori</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="Atur Filter" class="filter-but">
                </div>
            </form>
        </div>
    </div>


    <div class="p-5" style="margin-top: 50px">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($projects as $p)
                <div class="col">
                    <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                        <div class="card card-project border-0">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="project image">
                            <div class="card-body card-img-overlay">
                                <div class="isi">
                                    <h3 class="card-title">{{ $p->project_title }}</h3>
                                    @include('badgeCategory')
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="mt-2">
                        <a href="/myProfile/{{ $p->user_id }}" class="username">
                            @if ($users->image == null)
                                @if ($users->gender == "Male")
                                    <img src="{{ asset('image/user-male.png') }}" alt="posterios male" class="profile-picture" style="border-radius: 10px">
                                @else
                                    <img src="{{ asset('image/user-female.png') }}" alt="posterios female" class="profile-picture" style="border-radius: 10px">
                                @endif
                            @else
                                <img src="{{ asset('storage/'.$users->image) }}" alt="profile picture" class="profile-picture">
                            @endif
                            <small>{{ $p->name }}</small>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endif

<script>
    $(document).ready(function() {

        $("#main3").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub3").html("<option value='Digital Desain'>Digital Desain</option><option value='Programming'>Programming</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub3").html("<option value='Komputer dan Jaringan'>Komputer dan Jaringan</option>");
            } else if (val == "Seni") {
                $("#sub3").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });
</script>

