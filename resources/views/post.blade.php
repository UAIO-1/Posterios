<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posterios - Post Project</title>
    <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            height: 100%;
            background: linear-gradient(to bottom, #43536a 70%, #f5f5fa 30%);
        }
    </style>
</head>
<body>

    @include('navbar')

    <div class="box2 p-5 text-white" style="font-size: 30px">
        <div class="d-flex align-items-center justify-content-center">S</div>
        <div class="d-flex align-items-center justify-content-center">T</div>
        <div class="d-flex align-items-center justify-content-center">E</div>
        <div class="d-flex align-items-center justify-content-center">M</div>
        <div class="d-flex align-items-center justify-content-center">S</div>
        <div class="d-flex align-items-center justify-content-center">T</div>
        <div class="d-flex align-items-center justify-content-center">E</div>
        <div class="d-flex align-items-center justify-content-center">M</div>
        <div class="d-flex align-items-center justify-content-center">S</div>
        <div class="d-flex align-items-center justify-content-center">T</div>
        <div class="d-flex align-items-center justify-content-center">E</div>
        <div class="d-flex align-items-center justify-content-center">M</div>
    </div>

    <div class="text-white text-center">
        <p>
            In this post project, you need to fill out the form below. <br>
            There are 2 parts of the form. <br>
            The top section is a form that must be filled out. <br>
            The bottom of the form can be filled when you update the project.
        </p>
    </div>


    <form action="" class="container mt-lg-5 mb-xl-5" enctype="multipart/form-data">
        <div class="card mb-3 p-3">
            <div class="card-body">
                <h5 class="card-title text-center">Please fill out the form below to publish your work</h5>

                <div class="mb-3">
                    <label class="form-label">Title</label> <span class="text-danger">*</span>
                    <input type="text" class="form-control" name="title_project" placeholder="Enter a Project Title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label> <span class="text-danger">*</span>
                    <select class="form-select" name="category_project">
                        <option selected>Choose category ...</option>
                        <option value="Science">Science</option>
                        <option value="Technology">Technology</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Mathematics">Mathematics</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Image / Thumbnail</label> <span class="text-danger">*</span>
                    <input class="form-control" type="file" name="image_project">
                </div>

                <hr>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea class="form-control" name="description_project" placeholder="Enter a text"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" class="form-control" name="link_project" placeholder="Enter a valid link">
                </div>

                <div class="mb-3">
                    <label class="form-label">Video</label>
                    <input class="form-control" type="file" name="video_project">
                </div>

            </div>
        </div>
    </form>

    <footer class="text-center">
        <img src="{{ asset('image/icon-logo.PNG') }}" width="25px" height="25px" alt="Posterios-logo">
        <h6>Posterios 2022</h6>
    </footer>

</body>
</html>
