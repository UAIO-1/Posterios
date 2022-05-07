@extends('layout')
@section('title', 'Project Showcase • Posterios')
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
                        Publikasikan karya Anda untuk menjadi karya terbaik di sini!
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
                        <div>
                            <a href="/myProfile/{{ $p->user_id }}" class="username">
                                <h5>
                                    @if ($p->image == null)
                                        @if ($p->gender == "Male")
                                            <img src="{{ asset('image/user-male.png') }}" alt="profile picture" class="profile-picture">
                                        @else
                                            <img src="{{ asset('image/user-female.png') }}" alt="profile picture" class="profile-picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('storage/'.$p->image) }}" alt="profile picture" class="profile-picture">
                                    @endif
                                    {{ $p->name }}
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@elseif (Auth::check() & AUth::user()->status == null)

    <div class="header">
        <div class="container mt-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Project Showcase</h1>
                    <p class="slogan text-muted">
                        Publikasikan karya Anda untuk menjadi karya terbaik di sini!
                        Posterios selalu menyediakan kategori yang dibutuhkan siswa dalam membuat karya!
                    </p>
                    <div style="margin-top: 20px">
                        <a href="" data-bs-toggle="modal" data-bs-target="#kyc" class="publish-but" type="button">
                            Mulai Posting
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 17 17">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @include('modalKYC')
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
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="/myProfile/{{ $p->user_id }}" class="username">
                                    <h5>
                                        @if ($p->image == null)
                                            @if ($p->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" alt="profile picture" class="profile-picture">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" alt="profile picture" class="profile-picture">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$p->image) }}" alt="profile picture" class="profile-picture">
                                        @endif
                                        {{ $p->name }}
                                    </h5>
                                </a>
                            </div>
                            <div>
                                @if (in_array($p->id, $wishlists))
                                    <a href="/wishlistDeleteDetail/{{ $wishes->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                        </svg>
                                    </a>
                                @else
                                    <form action={{ url('/addToWishlists') }} method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="project_id" value="{{ $p->id }}">
                                        <button type="submit" class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
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
                        Publikasikan karya Anda untuk menjadi karya terbaik di sini!
                        Posterios selalu menyediakan kategori yang dibutuhkan siswa dalam membuat karya!
                    </p>
                    <div style="margin-top: 20px">
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
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="/myProfile/{{ $p->user_id }}" class="username">
                                    <h5>
                                        @if ($p->image == null)
                                            @if ($p->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" alt="profile picture" class="profile-picture">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" alt="profile picture" class="profile-picture">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$p->image) }}" alt="profile picture" class="profile-picture">
                                        @endif
                                        {{ $p->name }}
                                    </h5>
                                </a>
                            </div>
                            <div>
                                @if (in_array($p->id, $wishlists))
                                    <a href="/wishlistDeleteDetail/{{ $wishes->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                        </svg>
                                    </a>
                                @else
                                    <form action={{ url('/addToWishlists') }} method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="project_id" value="{{ $p->id }}">
                                        <button type="submit" class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
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

