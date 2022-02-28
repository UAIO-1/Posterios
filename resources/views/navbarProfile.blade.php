<link rel="stylesheet" href="{{ asset('css/navbarProfile.css') }}">

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

            <header>
                <h5><img src="{{ asset('image/icon-logo.PNG') }}" class="logo" alt="posterios logo"> Posterios</h5>
                <nav>
                    <ul class="nav-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Post</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </nav>
                <div class="dropdown">
                    <button class="dropbtn">
                        Hi, {{ Auth::user()->username }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </button>
                    <div class="dropdown-content">
                        <a href="/myProfile">Profile</a>
                        <a href="/changepassword/{{ Auth::user()->id }}">Change Password</a>
                        <a href="/logout">Log Out</a>
                    </div>
                </div>
            </header>

@endif
