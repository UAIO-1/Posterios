<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posterios - Change Password</title>
    <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card{
            border-radius: 5px;
            width: 35%;
        }

        .headercard{
            background-color: #43536a;
        }

     </style>
</head>
<body>
    @include('navbar')

    <div class="container card mt-xl-5 mb-3">
        <div class="row">
            <div class="card-header headercard text-center">
                <img src="{{ asset('image/logo-posterios-white.PNG') }}" alt="Posterios-logo" width="200px" height="40px">
                <h6 class="text-white mt-2">Project Exhibition & Forum Discussion</h6>
            </div>
            <div class="card-header bg-white">
                <div class="change">
                    <h5 class="text-center">Change Password</h5 class="text-center">
                </div>
            <div class="card-body">
                <div><strong>New Password</strong></div>
                <form action={{url('/changepassword')}} method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary float-right" value="Change">
                </form>
            </div>


        </div>
    </div>


</body>
</html>
