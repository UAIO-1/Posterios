<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posterios - Project Exhibition & Forum Discussion</title>
        <link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    </head>
    <body>


        @if(!Auth::check())

            <div class="header">
                @include('navbar')
                @include('welcome.effectbubble')
                <div class="container-header text-center text-light mt-lg-4">
                    <h2 class="title mb-4">Project Showcase And Forum Disccusion</h2>
                    <p class="mb-4 slogan">
                        Posterios adalah platform untuk memamerkan dan mempromosikan kreasi siswa secara luas. Setiap orang dapat belajar melalui sebuah proyek dan membangun koneksi dengan orang banyak.
                    </p>
                    <div>
                        {{-- <a href="#" id="getstartbtn" class="btn getstart-btn">How To Start</a> --}}
                        <a href="/login" data-bs-toggle="modal" data-bs-target="#loginmodal" class="btn getstart-btn ml-2">Start Posting</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="stem" class="gambar-depan">
                </div>
            </div>

            <div class="ml-xl-5 mt-xl-5 mb-xl-5">
                <div class="text-center">
                    <h1><strong>PROJECTS</strong></h1>
                </div>
                <hr>
                <div class="row row-cols-5">
                    @foreach ($projects as $p)
                        <div class="col">
                            <a href="/projectDetail/{{ $p->id }}" style="text-decoration: none; color: #000">
                                <div class="card" style="width: 20rem;">
                                    <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <p class="card-text">
                                        <h5>{{ $p->project_title }}</h5>
                                        @include('badgeCategory')
                                    </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $projects->links() }}
                </div>
            </div>

            <div class="bg-primary text-light">
                <div class="ml-xl-5 mt-xl-5 mb-xl-5">
                    <div class="text-center p-3">
                        <h1><strong>FORUM</strong></h1>
                        <hr>
                    </div>

                    <div class="row row-cols-5">
                        @foreach ($forums as $f)
                            <div class="col">
                                <a href="/projectDetail/{{ $f->id }}" style="text-decoration: none; color: #000">
                                    <div class="card" style="width: 20rem;">
                                        <img src="{{ asset('storage/'.$f->forum_image) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <p class="card-text">
                                            <h5>{{ $f->forum_title }}</h5>
                                            @include('badgeCategory')
                                        </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>

        @elseif(Auth::check() && Auth::user()->status == null)

        <div class="header">
            @include('navbar')
            @include('welcome.effectbubble')
            <div class="container-header text-center text-light mt-lg-4">
                <h2 class="title mb-4">Project Showcase And Forum Disccusion</h2>
                <p class="mb-4 slogan">
                    Posterios adalah platform untuk memamerkan dan mempromosikan kreasi siswa secara luas. Setiap orang dapat belajar melalui sebuah proyek dan membangun koneksi dengan orang banyak.
                </p>
                <div>
                    {{-- <a href="#" id="getstartbtn" class="btn getstart-btn">How To Start</a> --}}
                    <a href="#" data-bs-toggle="modal" data-bs-target="#kyc" class="btn getstart-btn ml-2">Start Posting</a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3">
                <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="stem" class="gambar-depan">
            </div>
        </div>
        @include('modalKYC')

        <div class="ml-xl-5 mt-xl-5 mb-xl-5">
            <div class="text-center">
                <h1><strong>PROJECTS</strong></h1>
            </div>
            <hr>
            <div class="row row-cols-5">
                @foreach ($projects as $p)
                    <div class="col">
                        <a href="/projectDetail/{{ $p->id }}" style="text-decoration: none; color: #000">
                            <div class="card" style="width: 20rem;">
                                <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">
                                    <h5>{{ $p->project_title }}</h5>
                                    @include('badgeCategory')
                                </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $projects->links() }}
            </div>
        </div>

        <div class="bg-primary text-light">
            <div class="ml-xl-5 mt-xl-5 mb-xl-5">
                <div class="text-center p-3">
                    <h1><strong>FORUM</strong></h1>
                    <hr>
                </div>

                <div class="row row-cols-5">
                    @foreach ($forums as $f)
                        <div class="col">
                            <a href="/projectDetail/{{ $f->id }}" style="text-decoration: none; color: #000">
                                <div class="card" style="width: 20rem;">
                                    <img src="{{ asset('storage/'.$f->forum_image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <p class="card-text">
                                        <h5>{{ $f->forum_title }}</h5>
                                        @include('badgeCategory')
                                    </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $projects->links() }}
                </div>
            </div>
        </div>


        @else

            <div class="header">
                @include('navbar')
                @include('welcome.effectbubble')
                <div class="container-header text-center text-light mt-lg-4">
                    <h2 class="title mb-4">Project Showcase And Forum Disccusion</h2>
                    <p class="mb-4 slogan">
                        Posterios adalah platform untuk memamerkan dan mempromosikan kreasi siswa secara luas. Setiap orang dapat belajar melalui sebuah proyek dan membangun koneksi dengan orang banyak.
                    </p>
                    <div>
                        {{-- <a href="#" id="getstartbtn" class="btn getstart-btn">How To Start</a> --}}
                        <a href="/post" class="btn getstart-btn ml-2">Start Posting</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center stem">
                    <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="welcome image" class="gambar-depan">
                </div>
            </div>


            <div class="ml-xl-5 mt-xl-5 mb-xl-5">
                <div class="text-center">
                    <h1><strong>PROJECTS</strong></h1>
                </div>
                <hr>
                <div class="row row-cols-5">
                    @foreach ($projects as $p)
                        <div class="col">
                            <a href="/projectDetail/{{ $p->id }}" style="text-decoration: none; color: #000">
                                <div class="card" style="width: 20rem;">
                                    <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <p class="card-text">
                                        <h5>{{ $p->project_title }}</h5>
                                        @include('badgeCategory')
                                    </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $projects->links() }}
                </div>
            </div>

            <div class="bg-primary text-light">
                <div class="ml-xl-5 mt-xl-5 mb-xl-5">
                    <div class="text-center p-3">
                        <h1><strong>FORUM</strong></h1>
                        <hr>
                    </div>

                    <div class="row row-cols-5">
                        @foreach ($forums as $f)
                            <div class="col">
                                <a href="/projectDetail/{{ $f->id }}" style="text-decoration: none; color: #000">
                                    <div class="card" style="width: 20rem;">
                                        <img src="{{ asset('storage/'.$f->forum_image) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <p class="card-text">
                                            <h5>{{ $f->forum_title }}</h5>
                                            @include('badgeCategory')
                                        </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>

        @endif
    </body>
</html>

