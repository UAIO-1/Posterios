<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Exhibition & Forum Discussion • Posterios</title>
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
                        <a href="/login" data-bs-toggle="modal" data-bs-target="#loginmodal" class="btn getstart-btn ml-2">Start Posting</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="stem" class="gambar-depan">
                </div>
            </div>

            <div class="container">
                <h1 class="text-center"><strong class="head">Our Services</strong></h1>
                <div class="row row-cols-2 g-4 mt-lg-1">
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cast text-success" viewBox="0 0 16 16">
                                    <path d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"/>
                                    <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z"/>
                                  </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-success"><strong>1. Showcase</strong></h4>
                                <p class="card-text">Setiap proyek yang Anda posting akan ditampilkan di dalam aplikasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-warning"><strong>2. Kelas</strong></h4>
                                <p class="card-text">Masuk ke kelas yang dibuat oleh Guru Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-left-text-fill text-danger" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-danger"><strong>3. Forum</strong></h4>
                                <p class="card-text">Bertanya dan berdiskusi dengan orang lain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check2-all text-primary" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                  </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-primary"><strong>4. Feedback</strong></h4>
                                <p class="card-text">Memberikan atau mendapatkan umpan balik proyek yang diposting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-data-fill text-secondary" viewBox="0 0 16 16">
                                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-secondary"><strong>5. Evaluasi</strong></h4>
                                <p class="card-text">Memberikan atau mendapatkan penilaian non / akademis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-plus-fill text-info" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-info"><strong>6. Wishlist</strong></h4>
                                <p class="card-text">Menyimpan Proyek yang Anda sukai ke dalam profile Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-2 mt-xl-5" style="background-color: #259df3">
                <div class="container">
                    <h1 class="text-center text-light"><strong class="head">Showcase</strong></h1>
                    <div class="row row-cols-1 g-4">
                        @foreach ($projects as $p)
                        @php($diffInDays = \Carbon\Carbon::parse($p->created_at)->diffInDays())
                        @if($diffInDays < 7)
                            <div class="col">
                                <a href="/projectDetail/{{ $p->id }}">
                                    <div class="card bg-dark text-white" style="max-width: 18rem">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img" alt="project image">
                                        <div class="card-img-overlay">
                                        <h5 class="card-title">{{ $p->project_title }}</h5>
                                        <p class="card-text">{{ $p->project_category }} • {{ $p->project_subcategory }}</p>
                                        <p class="card-text">Posted by {{ $p->name }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @endforeach
                    </div>
                    {{ $projects->links() }}
                </div>
            </div>

            <div class="container mt-xl-5">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                        <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                    </svg>
                    <h3><strong class="head">Tentang Posterios</strong></h3>
                </div>
                <div class="text-center">
                    <p style="max-width: 100%; word-wrap:break-word">
                        Posterios adalah sebuah tempat atau perantara bagi siswa dan guru maupun pengguna lainnya untuk proses pengumpulan tugas atau proyek
                        dan juga berfungsi sebagai penyaluran minat dan bakat siswa melalui karya-karya yang dibuat yang dapat dilihat dan dinilai orang banyak.
                        Posterios juga menyediakan fitur penilaian pada setiap proyek agar siswa mengetahui seberapa baik tugas atau proyek yang dibuat dan guru
                        dan pengguna lain dapat memberikan umpan balik berupa nilai, kekurangan maupun kelebihan proyek dan rekomendasi bagi siswa.
                    </p>
                </div>
            </div>

            <div class="container mt-xl-5 mb-xl-5">
                <h3 class="text-center"><strong class="head">Ingin Bergabung?</strong></h3>
                <p class="text-muted text-center">gabung bersama Posterios <a href="/register" class="text-primary">sekarang</a></p>
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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#kyc" class="btn getstart-btn ml-2">Start Posting</a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3">
                <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="stem" class="gambar-depan">
            </div>
        </div>
        @include('modalKYC')

        <div class="container">
            <h1 class="text-center"><strong class="head">Our Services</strong></h1>
            <div class="row row-cols-2 g-4 mt-lg-1">
                <div class="col">
                    <div class="card card-service" style="width: 18rem;">
                        <div class="p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cast text-success" viewBox="0 0 16 16">
                                <path d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"/>
                                <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z"/>
                              </svg>
                        </div>
                        <div class="card-body">
                            <h4 class="text-success"><strong>1. Showcase</strong></h4>
                            <p class="card-text">Setiap proyek yang Anda posting akan ditampilkan di dalam aplikasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-service" style="width: 18rem;">
                        <div class="p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus-fill text-warning" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h4 class="text-warning"><strong>2. Kelas</strong></h4>
                            <p class="card-text">Masuk ke kelas yang dibuat oleh Guru Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-service" style="width: 18rem;">
                        <div class="p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-left-text-fill text-danger" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h4 class="text-danger"><strong>3. Forum</strong></h4>
                            <p class="card-text">Bertanya dan berdiskusi dengan orang lain.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-service" style="width: 18rem;">
                        <div class="p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check2-all text-primary" viewBox="0 0 16 16">
                                <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                              </svg>
                        </div>
                        <div class="card-body">
                            <h4 class="text-primary"><strong>4. Feedback</strong></h4>
                            <p class="card-text">Memberikan atau mendapatkan umpan balik proyek yang diposting.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-service" style="width: 18rem;">
                        <div class="p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-data-fill text-secondary" viewBox="0 0 16 16">
                                <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h4 class="text-secondary"><strong>5. Evaluasi</strong></h4>
                            <p class="card-text">Memberikan atau mendapatkan penilaian non / akademis.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-service" style="width: 18rem;">
                        <div class="p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-plus-fill text-info" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                            </svg>
                        </div>
                        <div class="card-body">
                            <h4 class="text-info"><strong>6. Wishlist</strong></h4>
                            <p class="card-text">Menyimpan Proyek yang Anda sukai ke dalam profile Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2 mt-xl-5" style="background-color: #259df3">
            <div class="container">
                <h1 class="text-center text-light"><strong class="head">Showcase</strong></h1>
                <div class="row row-cols-1 g-4">
                    @foreach ($projects as $p)
                    @php($diffInDays = \Carbon\Carbon::parse($p->created_at)->diffInDays())
                    @if($diffInDays < 7)
                        <div class="col">
                            <a href="/projectDetail/{{ $p->id }}">
                                <div class="card bg-dark text-white" style="max-width: 18rem">
                                    <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img" alt="project image">
                                    <div class="card-img-overlay">
                                    <h5 class="card-title">{{ $p->project_title }}</h5>
                                    <p class="card-text">{{ $p->project_category }} • {{ $p->project_subcategory }}</p>
                                    <p class="card-text">Posted by {{ $p->name }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    @endforeach
                </div>
                {{ $projects->links() }}
            </div>
        </div>

        <div class="container mt-xl-5">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                    <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                </svg>
                <h3><strong class="head">Tentang Posterios</strong></h3>
            </div>
            <div class="text-center">
                <p style="max-width: 100%; word-wrap:break-word">
                    Posterios adalah sebuah tempat atau perantara bagi siswa dan guru maupun pengguna lainnya untuk proses pengumpulan tugas atau proyek
                    dan juga berfungsi sebagai penyaluran minat dan bakat siswa melalui karya-karya yang dibuat yang dapat dilihat dan dinilai orang banyak.
                    Posterios juga menyediakan fitur penilaian pada setiap proyek agar siswa mengetahui seberapa baik tugas atau proyek yang dibuat dan guru
                    dan pengguna lain dapat memberikan umpan balik berupa nilai, kekurangan maupun kelebihan proyek dan rekomendasi bagi siswa.
                </p>
            </div>
        </div>

        <div class="container mt-xl-5 mb-xl-5">
            <h3 class="text-center"><strong class="head">Ingin Bergabung?</strong></h3>
            <p class="text-muted text-center">gabung bersama Posterios <a href="/register" class="text-primary">sekarang</a></p>
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
                        <a href="/post" class="btn getstart-btn ml-2">Start Posting</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center stem">
                    <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="welcome image" class="gambar-depan">
                </div>
            </div>

            <div class="container">
                <h1 class="text-center"><strong class="head">Our Services</strong></h1>
                <div class="row row-cols-2 g-4 mt-lg-1">
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cast text-success" viewBox="0 0 16 16">
                                    <path d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"/>
                                    <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z"/>
                                  </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-success"><strong>1. Showcase</strong></h4>
                                <p class="card-text">Setiap proyek yang Anda posting akan ditampilkan di dalam aplikasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-warning"><strong>2. Kelas</strong></h4>
                                <p class="card-text">Masuk ke kelas yang dibuat oleh Guru Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-left-text-fill text-danger" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-danger"><strong>3. Forum</strong></h4>
                                <p class="card-text">Bertanya dan berdiskusi dengan orang lain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check2-all text-primary" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                  </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-primary"><strong>4. Feedback</strong></h4>
                                <p class="card-text">Memberikan atau mendapatkan umpan balik proyek yang diposting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard-data-fill text-secondary" viewBox="0 0 16 16">
                                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-secondary"><strong>5. Evaluasi</strong></h4>
                                <p class="card-text">Memberikan atau mendapatkan penilaian non / akademis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service" style="width: 18rem;">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-plus-fill text-info" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                </svg>
                            </div>
                            <div class="card-body">
                                <h4 class="text-info"><strong>6. Wishlist</strong></h4>
                                <p class="card-text">Menyimpan Proyek yang Anda sukai ke dalam profile Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-2 mt-xl-5" style="background-color: #259df3">
                <div class="container">
                    <h1 class="text-center text-light"><strong class="head">Showcase</strong></h1>
                    <div class="row row-cols-1 g-4">
                        @foreach ($projects as $p)
                        @php($diffInDays = \Carbon\Carbon::parse($p->created_at)->diffInDays())
                        @if($diffInDays < 7)
                            <div class="col">
                                <a href="/projectDetail/{{ $p->id }}">
                                    <div class="card bg-dark text-white" style="max-width: 18rem">
                                        <img src="{{ asset('storage/'.$p->project_image) }}" class="card-img" alt="project image">
                                        <div class="card-img-overlay">
                                        <h5 class="card-title">{{ $p->project_title }}</h5>
                                        <p class="card-text">{{ $p->project_category }} • {{ $p->project_subcategory }}</p>
                                        <p class="card-text">Posted by {{ $p->name }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @endforeach
                    </div>
                    {{ $projects->links() }}
                </div>
            </div>

            <div class="container mt-xl-5">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                        <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                    </svg>
                    <h3><strong class="head">Tentang Posterios</strong></h3>
                </div>
                <div class="text-center">
                    <p style="max-width: 100%; word-wrap:break-word">
                        Posterios adalah sebuah tempat atau perantara bagi siswa dan guru maupun pengguna lainnya untuk proses pengumpulan tugas atau proyek
                        dan juga berfungsi sebagai penyaluran minat dan bakat siswa melalui karya-karya yang dibuat yang dapat dilihat dan dinilai orang banyak.
                        Posterios juga menyediakan fitur penilaian pada setiap proyek agar siswa mengetahui seberapa baik tugas atau proyek yang dibuat dan guru
                        dan pengguna lain dapat memberikan umpan balik berupa nilai, kekurangan maupun kelebihan proyek dan rekomendasi bagi siswa.
                    </p>
                </div>
            </div>

            <div class="container mt-xl-5 mb-xl-5">
                <h3 class="text-center"><strong class="head">Ingin Bergabung?</strong></h3>
                <p class="text-muted text-center">gabung bersama Posterios <a href="/register" class="text-primary">sekarang</a></p>
            </div>



        @endif
    </body>
</html>

