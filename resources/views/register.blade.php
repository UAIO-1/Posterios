<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Started - Register</title>
    <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: #f5f5fa;
        }
        h1{
            font-family: 'Righteous', cursive;
        }
        .judul{
            font-family: 'ABeeZee', sans-serif;
        }
        input:focus::placeholder {
            color: transparent;
            transition: 0.2s;
        }
        strong{
            color: #43536a;
        }
    </style>
</head>
<body>

<div class="register-photo">
    <div class="form-container">
        <div class="image-holder text-center"><br><br><br><br><br>
            <img src="{{ asset('image/icon-logo-white.png') }}" alt="Posterios-logo" width="200px" height="200px">
            <h1 class="title">
                <span>P</span>
                <span>o</span>
                <span>s</span>
                <span>t</span>
                <span>e</span>
                <span>r</span>
                <span>i</span>
                <span>o</span>
                <span>s</span>
            </h1>
            <p class="judul">Project Exhibition & Forum Discussion</p>
            <p class="text-center slog">Posterios is a platform to show off and promote student creations widely. Everyone can learn through a project and build connections with people.</p>
        </div>
        <form class="container container-form box mt-4" method="post" action={{url('/registerPost')}}>
            {{csrf_field()}}
            <div>
            <h4 class="text-center"><strong>Create</strong> an account.</h4>
            <h6 class="text-center text-muted mb-4">Already have an account? <strong><a href="/login">Login</a></strong></h6>
            </div>

                    <div class="form-group">
                        <label><strong> Username</strong></label>
                        <input class="form-control" type="text" name="username" placeholder="Posterios">
                    </div>
                    <div class="form-group">
                        <label><strong>Email</strong></label>
                        <input class="form-control" type="email" name="email" placeholder="Posterios@example.com">
                    </div>
                    <div class="form-group">
                        <label><strong>Password</strong></label>
                        <input class="form-control" type="password" name="password" placeholder="At least 8 characters">
                    </div>
                    <div class="form-group">
                        <label><strong>Confirm Password</strong></label>
                        <input class="form-control" type="password" name="confirmpassword" placeholder="Same as password">
                    </div>
                    <div class="form-group">
                        <label><strong> Gender</strong></label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Male">
                          <label class="form-check-label">
                            Male
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Female">
                          <label class="form-check-label">
                            Female
                          </label>
                        </div>

                    </div>

                        <div class="form-group">
                            <label><strong>Date of Birth</strong></label>
                            <input type="date" name="dob" class="form-control" placeholder="Date of Birth">
                        </div>

                    <input type="submit" value="Register" class="btn btn-warning text-light w-100">

                  </form>




      </div>
  </div>

</body>
</html>
