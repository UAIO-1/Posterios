<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posterios - Project Exhibition & Forum Discussion</title>
        <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/cardWelcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/news.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/font.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/welcome.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>


        </style>
    </head>
    <body>
        @if(!Auth::check())

            @include('navbar')

            <div class="bg-slogan pb-xl-5">
                @include('header')
            </div>

            @include('community')

            <h1 class="container text-center s2">Look Here!</h1>
            <p class="text-center" style="font-size: 17px">Posterios divides into categories for projects such as <span class="badge bg-warning">Science</span>
                , <span class="badge bg-info">Technology</span> , <span class="badge bg-danger">Engineering</span> , <span class="badge bg-success">Mathematics</span></p>


            @include('footer')

        @else

            @include('navbar')

            <div class="bg-slogan pb-xl-5">
                @include('header')
            </div>

            @include('community')

            <div>
                <h1 class="container text-center s2">Look Here!</h1>
                <p class="text-center" style="font-size: 17px">Posterios divides into categories for projects such as <span class="badge bg-warning">Science</span>
                    , <span class="badge bg-info">Technology</span> , <span class="badge bg-danger">Engineering</span> , <span class="badge bg-success">Mathematics</span></p>

                <div class="row">
                    @foreach ($projects as $p)
                    <div class="col-md-3">
                        <div class="card m-2">
                            <img src="{{ asset('storage/'.$p->project_image) }}" width="250px" height="250px" class="card-img bg-dark" alt="Project Image">
                            <div class="card-img-overlay">
                                <h3 class="card-title">{{ $p->project_title }}</h3>
                                @if ($p->project_description == null)
                                    <p class="card-text">No Description...</p>
                                @else
                                    <p class="card-text">{{Str::limit($p->project_description, 50, '...')}}</p>
                                @endif
                            </div>
                            <div class="card-footer">
                                <a href="" class="username-card">
                                    <span class="float-left" style="font-weight: bold">
                                        <img src="{{ asset('image/icon-logo.PNG') }}" width="25px" height="25px" style="border-radius: 30px" alt="Profile Picture">
                                        {{ $p->username }}
                                    </span>
                                </a>
                                <span class="float-right">
                                    @if ($p->project_category == "Science")
                                        <p class="card-text badge badge-warning text-white">{{ $p->project_category }}</p>
                                    @elseif ($p->project_category == "Technology")
                                        <p class="card-text badge badge-info">{{ $p->project_category }}</p>
                                    @elseif ($p->project_category == "Engineering")
                                        <p class="card-text badge badge-danger">{{ $p->project_category }}</p>
                                    @else
                                        <p class="card-text badge badge-success">{{ $p->project_category }}</p>
                                    @endif
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill wishlist" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- @include('footer') --}}

        @endif
    </body>
</html>

