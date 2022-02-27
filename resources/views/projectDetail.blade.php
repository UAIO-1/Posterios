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
        .i1{
            border: 2px dashed rgba(0, 0, 0, 0.3);
            width: 50%;
        }
        .input-group-text{
            background-color: #43536a;
            color:white;
        }
        .name:hover{
            transition: 0.5s;
            transform:scale(1.5);
            text-decoration: none;
            box-shadow: 1px 1px 5px 0 rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }
        .vid{
            background-color: #43536a;
            color:white;
            border-radius: 10px;
        }

        .vid:hover{
            color: transparent;
            cursor: pointer;
        }

        h3:hover::before{
            color: red;
            padding-left: 70px;
            content: "Replace Videos";
        }

    </style>
</head>
<body>
    @include('navbar')

    <div class="mt-xl-5">
        @foreach ($projects as $p)
            <form action={{ url('/updateProject') }} method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3 container d-flex align-items-center justify-content-center">
                    <a href="/profile" class="ml-2 name">
                        <span class="input-group-text text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            {{ $p->username }}
                        </span>
                    </a>
                    <input type="text" class="form-control text-center i1 w-50" value="{{ $p->project_title }}" name="project_title">
                </div>
                <div class="mb-3 card-header bg-transparent border-0 row g-0">
                    <div class="col-2" id="item1">
                            <img src="{{ asset('storage/'.$p->project_image) }}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="img-fluid rounded image-detail" width="100%" alt="Project Image">

                    </div>
                    <div class="col-7" id="item2">
                        <label><strong>Description</strong></label>
                        <textarea rows="9" cols="70" class="form-control i1" name="project_description">{{ $p->project_description }}</textarea>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="mb-3 col-md-4">
                        <span class="input-group-text">Links</span>
                        <input type="text" class="form-control" value="{{ $p->project_link }}" name="project_link">
                    </div>
                    <div class="mb-3 col-md-2">
                        @if ($p->project_category == "Science")
                            <span class="input-group-text">Category: <span class="ml-2 badge badge-warning">{{ $p->project_category }}</span></span>
                        @elseif($p->project_category == "Technology")
                            <span class="input-group-text">Category: <span class="ml-2 badge badge-info">{{ $p->project_category }}</span></span>
                        @elseif($p->project_category == "Engineering")
                            <span class="input-group-text">Category: <span class="ml-2 badge badge-danger">{{ $p->project_category }}</span></span>
                        @else
                            <span class="input-group-text">Category: <span class="ml-2 badge badge-success">{{ $p->project_category }}</span></span>
                        @endif
                        <select class="form-select" name="project_category">
                            <option value="Science">Science</option>
                            <option value="Technology">Technology</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Mathematics">Mathematics</option>
                        </select>
                    </div>
                </div>

                <div>
                    <h3 class="container text-center mt-xl-5 vid" data-bs-toggle="modal" data-bs-target="#exampleModalvideo">Videos</h3>
                    <div class="d-flex align-items-center justify-content-center">
                        <video src="{{ asset('storage/'.$p->project_video) }}" controls width="1000px" height="400px"></video>
                    </div>
                </div>

                <input type="submit" class="btn btn-success" value="Update">
            </form>

        @endforeach
    </div>


</body>
</html>
