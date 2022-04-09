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
                        Publish your work in school to be the best work here!
                        Project Showcase always provides the categories that students in various schools need!
                    </p>
                    <div style="margin-top: 30px">
                        <a href="/post" class="publish-but" type="button">Publish Your Project</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/showcase.png') }}" alt="showcase" class="showcase">
                </div>
            </div>
        </div>
    </div>

    <div class="container2 search">
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-6">
                <form action="{{ url('filterProject') }}" method="get">
                    <div>
                        <h5><strong>Sort By</strong></h5>
                    </div>
                    <select id="main3" class="select-category-forum">
                        <option>Select Category</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                        <option value="Seni">Seni</option>
                    </select>
                    <select name="project_select" id="sub3" class="select-category-forum">
                        <option value="Digital Design">Select Sub Category</option>
                    </select>
                    <input type="submit" value="Set Filter" class="search-but">
                </form>
            </div>
        </div>
    </div>

    <hr>

    <div class="p-5" style="margin-top: 50px">
        <div class="row row-cols-0 row-cols-md-5 g-4">
            @foreach ($projects as $p)
                <div class="col">
                    <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                        <div class="card">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="project image">
                                <div class="card-body">
                                <h5 class="card-title">{{ $p->project_title }}</h5>
                                @include('badgeCategory')
                                <p class="card-text text-muted">{{ Str::limit($p->project_description, 100, '...')}}</p>
                                <div class="mt-2">
                                    <a href="" class="username">
                                        @if ($users->image == null)
                                            @if ($users->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" alt="posterios male" width="25px" height="25px" class="profile-picture" style="border-radius: 10px">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" alt="posterios female" width="25px" height="25px" class="profile-picture" style="border-radius: 10px">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$users->image) }}" alt="profile picture" class="profile-picture">
                                        @endif
                                        <small>{{ $p->name }}</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
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
                        Publish your work in school to be the best work here!
                        Project Showcase always provides the categories that students in various schools need!
                    </p>
                    <div style="margin-top: 30px">
                        <a href="/post" class="publish-but" type="button">Publish Your Project</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/showcase.png') }}" alt="showcase" class="showcase">
                </div>
            </div>
        </div>
    </div>

    <div class="container2 search">
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-6">
                <form action="{{ url('filterProject') }}" method="get">
                    <div>
                        <h5><strong>Sort By</strong></h5>
                    </div>
                    <select id="main3" class="select-category-forum">
                        <option>Select Category</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                        <option value="Seni">Seni</option>
                    </select>
                    <select name="project_select" id="sub3" class="select-category-forum">
                        <option value="Digital Design">Select Sub Category</option>
                    </select>
                    <input type="submit" value="Set Filter" class="search-but">
                </form>
            </div>
        </div>
    </div>


    <div class="p-5" style="margin-top: 50px">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($projects as $p)
                <div class="col">
                    <a href="/projectDetail/{{ $p->id }}" class="project-detail">
                        <div class="card border-0">
                            <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="project image">
                            <div class="card-body card-img-overlay">
                                <h4 class="card-title">{{ $p->project_title }}</h4>
                                @include('badgeCategory')
                            </div>
                        </div>
                    </a>
                    <div class="mt-2">
                        <a href="" class="username">
                            @if ($users->image == null)
                                @if ($users->gender == "Male")
                                    <img src="{{ asset('image/user-male.png') }}" alt="posterios male" width="25px" height="25px" class="profile-picture" style="border-radius: 10px">
                                @else
                                    <img src="{{ asset('image/user-female.png') }}" alt="posterios female" width="25px" height="25px" class="profile-picture" style="border-radius: 10px">
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

