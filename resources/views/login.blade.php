<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Started - Login</title>
    <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: #f5f5fa;
            z-index: 0;
        }

        h1{
            opacity: 0.8;
            font-family: 'Secular One', sans-serif;
        }
        img:hover{
            opacity: 0.9;
            transition: 0.4s;
            box-shadow: 0 5px 5px 5px rgba(0,0,0,0.1)
        }
    </style>
</head>
<body>

    <div style="text-align:center" class="container">
        <form id="form_login" method="post" action={{url('/doLogin')}}>
            {{csrf_field()}}
            <h1>Welcome</h1>
            <a href="/"><img src="{{ asset('image/logo-posterios.PNG') }}" class="p-3 mt-lg-2 mb-lg-5" width="100%" height="25%" alt="Posterios-logo"></a>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="mt-3">
                <input class="btn1" type="submit" value="Login">
            </div>
            <div class="text-center mt-xl-5">
                <p class="text-muted">Don't have an account? <strong><a href="/register">Sign Up</a></strong></p>
            </div>

        </form>
    </div>

</body>
</html>
