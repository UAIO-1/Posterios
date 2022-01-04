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

            <h1 class="container text-center s2">Look Here!</h1>
            <p class="text-center" style="font-size: 17px">Posterios divides into categories for projects such as <span class="badge bg-warning">Science</span>
                , <span class="badge bg-info">Technology</span> , <span class="badge bg-danger">Engineering</span> , <span class="badge bg-success">Mathematics</span></p>


            @include('footer')

        @endif
    </body>
</html>

