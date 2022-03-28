@extends('layout')
@section('title', 'Posterios - Forum Discussion')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/forum.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


@if (!Auth::check())



@else

@include('navbar')
<div class="header">
        <div class="container-start">
            <div class="text-center text-light">
                <h1 class="display-1">Forum Discussion</h1>
                <p class="mt-4 slogan text-center">Discussion forums are provided in several categories that make it easier for you to choose a project according to your wishes.</p>
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
                                        <select class="ml-4 form-select" id="main">
                                            <option selected disabled>Select Category</option>
                                            <option value="Teknologi">Teknologi</option>
                                            <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                            <option value="Seni">Seni</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-muted">Sub Category</label> <span class="text-danger">*</span>
                                        <select name="forum_category" class="ml-4 form-select" id="sub">
                                            <option selected disabled>Select Sub Category</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label class="text-muted">Forum Message</label> <span class="text-danger">*</span>
                                        <textarea name="forum_message" class="form-control" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-muted">Image</label>
                                        <input class="form-control" type="file" name="forum_image" accept="image/jpg, image/jpeg, image/png" multiple>
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

    <div class="container2 search">
        <div class="row">
            <div class="col-md-5">
                <form method="get">
                    <div>
                        <h6><strong>Enter a Title</strong></h6>
                    </div>
                    <input type="text" class="search-title-forum" name="search_title" placeholder="What are you looking for?">
                    <input type="submit" value="Search" class="search-but">
                </form>
            </div>
            <div class="col-md-6">
                <form action="{{ url('filterForum') }}" method="get">
                    <div>
                        <h6><strong>Sort By</strong></h6>
                    </div>
                    <select id="main2" class="select-category-forum">
                        <option>Select Category</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                        <option value="Seni">Seni</option>
                    </select>
                    <select name="forum_select" id="sub2" class="select-category-forum">
                        <option value="Digital Design">Select Sub Category</option>
                    </select>
                    <input type="submit" value="Filter" class="search-but">
                </form>
            </div>
        </div>
    </div>


    <div class="container2 forum-content">
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
                                <div class="card mb-3 border-0 rounded-0" style="max-width: 720px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            @if ($f->forum_image == null)
                                                <img src="{{ asset('image/forum-icon-green.png') }}" class="img-fluid rounded-start p-4" alt="forum icon">
                                            @else
                                                <img src="{{ asset('storage/'.$f->forum_image) }}" class="img-fluid rounded-start p-4" alt="forum image">
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

@endif

<script>
    $(document).ready(function() {

        $("#main").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub").html("<option value='Coding'>Coding</option><option value='Digital Desain'>Digital Desain</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub").html("<option value='Komputer dan Jaringan'>Teknik Komputer dan Jaringan</option><option value='Teknik Kelistrikan'>Teknik Kelistrikan</option>");
            } else if (val == "Seni") {
                $("#sub").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });

    $(document).ready(function() {

        $("#main2").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub2").html("<option value='Coding'>Coding</option><option value='Digital Desain'>Digital Desain</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub2").html("<option value='Komputer dan Jaringan'>Teknik Komputer dan Jaringan</option><option value='Teknik Kelistrikan'>Teknik Kelistrikan</option>");
            } else if (val == "Seni") {
                $("#sub2").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });
</script>
