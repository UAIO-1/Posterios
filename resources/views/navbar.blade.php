<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


@if(!Auth::check())

    <header>
        <h5><img src="{{ asset('image/icon-logo.PNG') }}" class="logo" alt="posterios logo"> Posterios</h5>
        <nav>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
        </nav>
        <a class="log" href="/login"><button class="login-btn">Login</button></a>
    </header>

@else

    <nav class="d-flex justify-content-between">
        <div>
            <ul class="nav-links-logo">
                <li><a href="/">POSTERIOS</a></li>
            </ul>
        </div>
        <div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
        </div>
        <div>
            <div class="dropdown">
                <a class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, <strong>{{ Auth::user()->username }}</strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/myProfile">My Profile</a></li>
                    <li><a class="dropdown-item" href="/changepassword/{{ Auth::user()->id }}">Change My Password</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>


@endif
