@extends('layout')
@section('title', 'Forum Discussion • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/forum.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

@include('navbar')

@if (!Auth::check())

<div class="header">
    <div class="container-start">
        <div class="text-center text-light">
            <h1 class="display-1">Forum Discussion</h1>
            <p class="mt-4 slogan text-center">
                Forum diskusi disediakan dalam beberapa kategori
                 yang memudahkan Anda untuk memilih proyek sesuai keinginan.
                Berdiskusi dengan orang lain tentang pelajaran Anda.
            </p>
        </div>
        <div class="mt-xl-5">

        </div>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <div class="card card-filter-forum p-3 border-0">
        <form action="{{ url('filterForum') }}" method="get">
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
                    <select id="main2" class="form-select">
                        <option>Pilih Kategori</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                        <option value="Seni">Seni</option>
                    </select>
                </div>
                <div class="col">
                    <select name="forum_select" id="sub2" class="form-select">
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

<div class="mt-xl-5 mb-xl-5" style="margin-left: 50px; margin-right: 50px;">
    <div class="row row-cols-2 g-4">
        @foreach ($forums as $f)
            <div class="col">
                <a href="/forumDetail/{{ $f->id }}" style="text-decoration: none;color: #000;">
                    <div class="card card-forum">
                        <h5 class="card-header">
                            @include('badgeCategoryForum')
                        </h5>
                        <div class="card-body">
                        <h4 class="card-title">{{ $f->forum_title }}</h4>
                        <p class="card-text text-muted">{{ Str::limit($f->forum_message, '50', '...') }}</p>
                        <a href="/forumDetail/{{ $f->id }}" class="btn btn-primary mt-2">See more</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@elseif (Auth::check() & AUth::user()->status == null)

<div class="header">
    <div class="container-start">
        <div class="text-center text-light">
            <h1 class="display-1">Forum Discussion</h1>
            <p class="mt-4 slogan text-center">
                Forum diskusi disediakan dalam beberapa kategori
                 yang memudahkan Anda untuk memilih proyek sesuai keinginan.
                Berdiskusi dengan orang lain tentang pelajaran Anda.
            </p>
        </div>
        <div class="mt-xl-5">
            <div class="text-center">
                <a href="#" class="createforum-but" data-bs-toggle="modal" data-bs-target="#kyc" type="button">
                    Buat Forum
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 17 17">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                </a>
            </div>
        @include('modalKYC')
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <div class="card card-filter-forum p-3 border-0">
        <form action="{{ url('filterForum') }}" method="get">
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
                    <select id="main2" class="form-select">
                        <option>Pilih Kategori</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                        <option value="Seni">Seni</option>
                    </select>
                </div>
                <div class="col">
                    <select name="forum_select" id="sub2" class="form-select">
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

<div class="mt-xl-5 mb-xl-5" style="margin-left: 50px; margin-right: 50px;">
    <div class="row row-cols-2 g-4">
        @foreach ($forums as $f)
            <div class="col">
                <a href="/forumDetail/{{ $f->id }}" style="text-decoration: none;color: #000;">
                    <div class="card card-forum">
                        <h5 class="card-header">
                            @include('badgeCategoryForum')
                        </h5>
                        <div class="card-body">
                        <h4 class="card-title">{{ $f->forum_title }}</h4>
                        <p class="card-text text-muted">{{ Str::limit($f->forum_message, '50', '...') }}</p>
                        <a href="/forumDetail/{{ $f->id }}" class="btn btn-primary mt-2">See more</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


@else


<div class="header">
        <div class="container-start">
            <div class="text-center text-light">
                <h1 class="display-1">Forum Discussion</h1>
                <p class="mt-4 slogan text-center">
                    Forum diskusi disediakan dalam beberapa kategori
                     yang memudahkan Anda untuk memilih proyek sesuai keinginan.
                    Berdiskusi dengan orang lain tentang pelajaran Anda.
                </p>
            </div>
            <div class="mt-xl-5">
                <div class="text-center">
                    <a href="#" class="createforum-but" data-bs-toggle="modal" data-bs-target="#createForumModal" type="button">
                        Buat Forum
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 17 17">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="createForumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                            <h5 class="modal-title" id="createForumModal">Create General Forum</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="container" method="post" action={{url('/postForum')}} enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">

                                    <div class="mb-3">
                                        <label class="text-muted">Judul Forum</label><span class="text-danger">*</span>
                                        <input type="text" name="forum_title" class="form-control">
                                    </div>

                                    <div class="row row-cols-2">
                                        <div class="col mb-3">
                                            <label class="form-label text-muted">Kategori</label> <span class="text-danger">*</span>
                                            <select class="ml-4 form-select" id="main" name="forum_category">
                                                <option selected disabled>Pilih Kategori</option>
                                                <option value="Teknologi">Teknologi</option>
                                                <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                                <option value="Seni">Seni</option>
                                            </select>
                                        </div>

                                        <div class="col mb-3">
                                            <label class="form-label text-muted">Sub Kategori</label> <span class="text-danger">*</span>
                                            <select name="forum_subcategory" class="ml-4 form-select" id="sub">
                                                <option selected disabled>Pilih Sub Kategori</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="mb-3">
                                        <label class="text-muted">Pesan</label><span class="text-danger">*</span>
                                        <textarea name="forum_message" class="form-control" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-muted">Gambar</label>
                                        <input class="form-control" type="file" name="forum_image" accept="image/jpg, image/jpeg, image/png" multiple>
                                    </div>


                                    <div class="d-flex justify-content-end mt-lg-4">
                                        <button type="button" class="btn text-muted" data-bs-dismiss="modal">Tutup</button>
                                        <input class="ml-2 w-25 create-forum-modal-but" type="submit" value="Buat">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="card card-filter-forum p-3 border-0">
            <form action="{{ url('filterForum') }}" method="get">
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
                        <select id="main2" class="form-select">
                            <option>Pilih Kategori</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="forum_select" id="sub2" class="form-select">
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

    <div class="mt-xl-5 mb-xl-5" style="margin-left: 50px; margin-right: 50px;">
        <div class="row row-cols-2 g-4">
            @foreach ($forums as $f)
                <div class="col">
                    <a href="/forumDetail/{{ $f->id }}" style="text-decoration: none;color: #000;">
                        <div class="card card-forum">
                            <h5 class="card-header">
                                @include('badgeCategoryForum')
                            </h5>
                            <div class="card-body">
                            <h4 class="card-title">{{ $f->forum_title }}</h4>
                            <p class="card-text text-muted">{{ Str::limit($f->forum_message, '50', '...') }}</p>
                            <a href="/forumDetail/{{ $f->id }}" class="btn btn-primary mt-2">See more</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endif

<script>
    $(document).ready(function() {

        $("#main").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub").html("<option value='Digital Desain'>Digital Desain</option><option value='Programming'>Programming</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub").html("<option value='Komputer dan Jaringan'>Komputer dan Jaringan</option>");
            } else if (val == "Seni") {
                $("#sub").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });

    $(document).ready(function() {

        $("#main2").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub2").html("<option value='Digital Desain'>Digital Desain</option><option value='Programming'>Programming</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub2").html("<option value='Komputer dan Jaringan'>Komputer dan Jaringan</option>");
            } else if (val == "Seni") {
                $("#sub2").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });
</script>
