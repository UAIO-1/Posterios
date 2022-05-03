<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

@if(!Auth::check())

    <header id="navbar">
        <img src="{{ asset('image/logo-posterios-white.png') }}" class="logo" alt="posterios logo">
        <nav>
            <ul class="nav__links">
                <li><a href="/">Home</a></li>
                <li><a href="/login" data-bs-toggle="modal" data-bs-target="#loginmodal">Post</a></li>
                <li><a href="/explore">Explore</a></li>
                <li><a href="/forum">Forum</a></li>
                <li><a href="/login">Class</a></li>
                <li><a href="/login" class="log" data-bs-toggle="modal" data-bs-target="#loginmodal">Sign In</a></li>
            </ul>
        </nav>
    </header>
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-0 d-flex justify-content-center align-items-center">
                <h5 class="modal-title" style="color: #259df3">Sign In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-lg-4">
                        <div>
                            <small class="text-muted">Don't have an account? <a href="/register" class="text-muted"><small><u>Sign up here</u></small></a></small>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                   <small>{{ __('Forgot Your Password?') }}</small>
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

@elseif (Auth::check() & AUth::user()->status == null)

<header id="navbar" class="sticky-top">
    <img src="{{ asset('image/logo-posterios-white.png') }}" class="logo" alt="posterios logo">
    <nav>
        <ul class="nav__links">
            <li><a href="/">Home</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#kyc">Post</a></li>
            <li><a href="/explore">Explore</a></li>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/class">Class</a></li>
            <li>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Auth::user()->image == null)
                            @if (Auth::user()->gender == "Male")
                                <img src="{{ asset('image/user-male.png') }}" alt="gambar profile" class="pp">
                            @else
                                <img src="{{ asset('image/user-female.png') }}" alt="gambar profile" class="pp">
                            @endif
                        @else
                            <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="gambar profile" class="pp">
                        @endif
                        <strong>{{ Auth::user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="/myProfile/{{ Auth::user()->id }}">My Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>

@include('modalKYC')

@else

    <header id="navbar" class="sticky-top">
        <img src="{{ asset('image/logo-posterios-white.png') }}" class="logo" alt="posterios logo">
        <nav>
            <ul class="nav__links">
                <li><a href="/">Home</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="/explore">Explore</a></li>
                <li><a href="/forum">Forum</a></li>
                <li><a href="/class">Class</a></li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Auth::user()->image == null)
                                @if (Auth::user()->gender == "Male")
                                    <img src="{{ asset('image/user-male.png') }}" alt="gambar profile" class="pp">
                                @else
                                    <img src="{{ asset('image/user-female.png') }}" alt="gambar profile" class="pp">
                                @endif
                            @else
                                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="gambar profile" class="pp">
                            @endif
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/myProfile/{{ Auth::user()->id }}">My Profile</a></li>
                            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>





@endif

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
        document.getElementById("navbar").style.backgroundColor  = "#2834ae";
      } else {
        document.getElementById("navbar").style.backgroundColor  = "#2834ae";
        document.getElementById("navbar").style.top = "-100px";
      }
      prevScrollpos = currentScrollPos;
    }


</script>
