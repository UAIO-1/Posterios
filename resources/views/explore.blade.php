@extends('layout')
@section('title', 'Posterios - Explore STEM')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/explore.css') }}">

@include('navbar')

@if (!Auth::check())

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
                <form method="get">
                    <div>
                        <h5><strong>Enter a Title</strong></h5>
                    </div>
                    <input type="text" class="search-title-forum" name="search_title" placeholder="What are you looking for?">
                    <input type="submit" value="Search" class="search-but">
                </form>
            </div>
            <div class="col-md-6">
                <form action="{{ url('filterForum') }}" method="get">
                    <div>
                        <h5><strong>Sort By</strong></h5>
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
                    <input type="submit" value="Set Filter" class="search-but">
                </form>
            </div>
        </div>
    </div>

    <hr>

    <div class="p-3" style="margin-top: 50px">
        <div class="row row-cols-0 row-cols-md-5 g-4">
            @foreach ($projects as $p)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="project image">
                            <div class="card-body">
                            <h5 class="card-title">{{ $p->project_title }}</h5>
                            @include('badgeCategory')
                            <p class="card-text text-muted">{{ Str::limit($p->project_description, 100, '...')}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endif
