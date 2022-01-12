<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posterios - Project Detail</title>
    <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projectdetail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        label{
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    @include('navbar')

    <div class="container">
        @foreach ($projects as $p)
            <div class="card border-0 mb-3 container" style="max-width: 90%;">
                <div class="row p-2">
                    <div class="p-5 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/'.$p->project_image) }}" class="img-fluid rounded image-detail" width="50%" height="30%" alt="Project Image">
                    </div>
                    <form action="" class="d-flex align-items-center justify-content-center">
                        {{ csrf_field() }}
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                                    <textarea class="form-control ml-4" rows="1">{{ $p->project_title }}</textarea>
                                </div>
                                <h5 class="card-title">{{ $p->project_title }}</h5>
                                <p class="card-text">
                                    <div>
                                        <small class="text-muted">Created At:</small><br>
                                        <small class="text-muted ml-4">{{ $p->created_at }}</small><br>
                                    </div>
                                    <div>
                                        <small class="text-muted">Last Update:</small><br>
                                        <small class="text-muted ml-4">{{ $p->updated_at }}</small><br>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


</body>
</html>
