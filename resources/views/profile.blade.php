<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posterios - Profile</title>
    <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card{
            border-radius: 20px;
        }
     </style>
</head>
<body>
    @include('navbar')

    @foreach ($users as $u)

    <div class="container card mt-xl-5 mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/icon-logo.PNG') }}" class="pp" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h1 class=" ml-2 card-title">{{ $u->username }}<span class="ml-lg-4"><a href="" class="btn btn-info p-2">Edit <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg></a></span></h1>
              <hr>
                <div class="text-center">
                    <h5>My Projects</h5>
                    <h1>76</h1>
                </div>
            </div>
          </div>

                <div class="ml-xl-5 mt-3">
                    <table>
                        <tr>
                            <td class="at">Email</td>
                            <td>{{ $u->email }}</td>
                        </tr>
                        <tr>
                            <td class="at">Gender</td>
                            <td>{{ $u->gender }}</td>
                        </tr>
                        <tr>
                            <td class="at">DOB</td>
                            <td>{{ $u->dob }}</td>
                        </tr>
                        <tr>
                            <td class="at">Role</td>
                            <td>{{ $u->role }}</td>
                         </tr>
                      </table>
                </div>



        </div>

      </div>

      @endforeach
</body>
</html>
