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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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

        @foreach($users as $u)

            <div class="container card mt-xl-5 mb-3">
                <div class="row">
                    <div class="card-header headercard text-center">
                        <img src="{{ asset('image/logo-posterios-white.PNG') }}" alt="Posterios-logo" width="200px" height="40px">
                        <h6 class="text-white mt-2">Project Exhibition & Forum Discussion</h6>
                    </div>
                    <div class="card-header bg-white">
                        @if($u->image == null)
                            <img src="{{ asset('image/icon-logo.PNG') }}" alt="Profile Picture" class="profilepicture" width="150px" height="150px" style="border-radius: 10px;">
                        @else
                            <img src="{{ asset('storage/images/user/'.$u->image) }}" alt="Profile Picture" class="profilepicture" width="150px" height="150px" style="border-radius: 10px;">
                        @endif

                        <div class="change">
                            <a href="/editProfile" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Change Picture
                            </a>
                        </div>
                        @include('EditProfileModal')
                        <span class="name">
                           <table>
                               <tr>
                                   <th>Username</th>
                                   <td>{{ $u->username }}</td>
                               </tr>
                               <tr>
                                   <th>Age</th>
                                   <td>{{\Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y years old')}}</td>
                               </tr>
                               <tr>
                                    <th>Email</th>
                                    <td>{{ $u->email }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    @if($u->gender == "Male")
                                        <td class="text-primary"><strong>{{ $u->gender }}</strong></td>
                                    @else
                                        <td class="text-danger"><strong>{{ $u->gender }}</strong></td>
                                    @endif
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>
                                        @include('flag')
                                         {{ $u->country }}
                                    </td>
                                </tr>
                           </table>
                        </span>
                    </div>
                    <div class="card-body">
                        <div><strong>About Me</strong></div>
                        <form action={{url('/editAboutMe')}} method="post">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="aboutme" rows="3"> {{ $u->aboutme }}</textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Change">
                        </form>
                    </div>
                </div>
            </div>

        @endforeach





</body>
</html>
