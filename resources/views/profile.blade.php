@extends('layout')
@section('title', 'Posterios - Profile')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">

<style>
    .card{
        border-radius: 5px;
        width: 50%;
    }

    .headercard{
        background-color: #43536a;
    }

</style>

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
