<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


@if(!Auth::check())

    <header>
        <img src="{{ asset('image/logo-posterios-white.png') }}" class="logo" alt="posterios logo">
        <nav>
            <ul class="nav__links">
                <li><a href="/">Home</a></li>
                <li><a href="#">Post</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#" class="btn log" data-bs-toggle="modal" data-bs-target="#loginmodal">Sign In</a></li>
                <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header border-0 d-flex justify-content-center align-items-center">
                            <h5 class="modal-title" style="color: #259df3">Sign In</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="container" method="post" action={{url('/doLogin')}}>
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <h6 class="text-muted">Email Address</h6>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <h6 class="text-muted">Password</h6>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3 text-center">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="remember">
                                    <label for="flexCheckDefault">Remember Me</label>
                                </div>
                                <div class="text-center">
                                    <p><span class="text-muted">Don't have an account?</span> <a href="/register" style="color: #7b849e"><u>Sign Up</u></a></p>
                                </div>
                                <div class="d-flex justify-content-end mt-lg-4">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input class="btn text-light ml-2 w-25" style="background-color: #259df3" type="submit" value="Login">
                                </div>
                            </form>

                        </div>

                      </div>
                    </div>
                  </div>
            </ul>
        </nav>
    </header>

@else

    <header>
        <img src="{{ asset('image/logo-posterios-white.png') }}" class="logo" alt="posterios logo">
        <nav>
            <ul class="nav__links">
                <li><a href="/">Home</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Forum</a></li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, <strong>{{ Auth::user()->username }}</strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/myProfile">My Profile</a></li>
                            <li><a class="dropdown-item" href="/changepassword/{{ Auth::user()->id }}">Change My Password</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
    </header>




@endif
