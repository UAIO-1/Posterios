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
                        <a href="#" id="getstartbtn" class="btn getstart-btn">How To Start</a>
                        <a href="/login" data-bs-toggle="modal" data-bs-target="#loginmodal" class="btn startpost-btn ml-2">Start Posting</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="stem" class="gambar-depan">
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
                        <a href="#" id="getstartbtn" class="btn getstart-btn">How To Start</a>
                        <a href="/post" class="btn startpost-btn ml-2">Start Posting</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center stem">
                    <img src="{{ asset('image/gambar-depan-welcome.png') }}" alt="welcome image" class="gambar-depan">
                </div>
            </div>

        @endif
    </body>
</html>

