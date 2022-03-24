@extends('layout')
@section('title', 'Posterios - Forum Discussion')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/forum.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


@if (!Auth::check())



@else
@include('navbar')
<div class="header">
        <div class="mt-lg-4">
            <div class="text-center text-light">
                <h1 class="display-1">Forum Discussion</h1>
                <p class="mt-4 slogan text-center">Forum diskusi disediakan dalam beberapa kategori yang memudahkan Anda untuk memilih project sesuai dengan keinginan Anda.</p>
            </div>
            <div class="mt-xl-5">
                <div class="text-center">
                    <a href="#" class="createforum-but" data-bs-toggle="modal" data-bs-target="#createForumModal">Create General Forum</a>
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
                                    <input type="hidden" name="username" value="{{ Auth::user()->username }}">

                                    <div class="mb-3">
                                        <label class="text-muted">Title</label> <span class="text-danger">*</span>
                                        <input type="text" name="forum_title" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-muted">Category</label> <span class="text-danger">*</span>
                                        <select name="forum_category" class="ml-4 form-select" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                            <option selected disabled>Open this select menu</option>
                                            <option disabled>----- Science -----</option>
                                                <option value="Biologi">Biologi</option>
                                                <option value="Fisika">Fisika</option>
                                                <option value="Kimia">Kimia</option>
                                            <option disabled>----- Technology -----</option>
                                                <option value="Coding">Coding</option>
                                                <option value="Digital Desain">Digital Desain</option>
                                                <option value="Game">Game</option>
                                            <option disabled>----- Engineering -----</option>
                                                <option value="Mesin">Mesin</option>
                                                <option value="Komputer dan Jaringan">Komputer dan Jaringan</option>
                                                <option value="Konstruksi">Konstruksi</option>
                                            <option disabled>----- Art -----</option>
                                                <option value="Lukis">Lukis</option>
                                                <option value="Musik">Musik</option>
                                                <option value="Tari">Tari</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-muted">Forum Message</label> <span class="text-danger">*</span>
                                        <textarea name="forum_message" class="form-control" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-muted">Image</label>
                                        <input class="form-control" type="file" name="forum_image" accept="image/jpg, image/jpeg, image/png">
                                    </div>


                                    <div class="d-flex justify-content-end mt-lg-4">
                                        <button type="button" class="btn text-muted" data-bs-dismiss="modal">Close</button>
                                        <input class="ml-2 w-25 create-forum-modal-but" type="submit" value="Create">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-xl-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h4><span style="color: #1fd09e"><strong>General</strong></span> <span style="color: #7b849e">Forum</span></h4>
                    </div>
                    <div class="col-md-6 mb-3">
                        <p class="text-muted">General Forum adalah tempat semua diskusi yang telah dibuat</p>
                    </div>
                    @foreach ($forums as $f)
                        <a href="/forumDetail/{{ $f->id }}" class="forum-detail">
                            <div class="card mb-3 border-0 rounded-0" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        @if ($f->forum_image == null)
                                            <img src="{{ asset('image/forum-icon-green.png') }}" class="img-fluid rounded-start p-4" alt="forum icon">
                                        @else
                                            <img src="{{ $f->forum_image }}" class="img-fluid rounded-start" alt="forum image">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                        <h5 class="card-title"><strong>{{Str::limit($f->forum_title, 25, '...')}}</strong></h5>
                                        <p class="card-text">{{Str::limit($f->forum_message, 100, '...')}}</p>
                                        <p class="card-text"><small class="text-muted">{{ $f->forum_category }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h4><span style="color: #259df3"><strong>Project</strong></span> <span style="color: #7b849e">Forum</span></h4>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted">Project Forum adalah tempat diskusi yang diintegrasi dalam project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- <div class="filter">
            <form action="" method="GET" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <select name="" id="main">
                            <option value="">Select Category</option>
                            <option value="Sains">Sains</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="" id="sub">
                            <option value="">Select One</option>
                        </select>
                    </div>
                </div>
            </form>
        </div> --}}


@endif

{{-- <script>
    $(document).ready(function() {

        $("#main").change(function() {
            var val = $(this).val();
            if (val == "Sains") {
                $("#sub").html("<option value='Fisika'>Fisika</option><option value='Kimia'>Kimia</option><option value='Biologi'>Biologi</option>");
            } else if (val == "Teknologi") {
                $("#sub").html("<option value='User Interface'>Design / User Interface</option><option value='Game'>Game</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
            } else if (val == "Seni") {
                $("#sub").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
            }
        });

    });
</script> --}}
