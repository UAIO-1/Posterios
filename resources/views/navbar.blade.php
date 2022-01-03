<style>
    .usname{
        color: #43536a;
    }
    .usname:hover{
        text-decoration: none;
    }

    img{
        border-radius: 20px;
    }

    .dropbtn {
        background-color: white;
        color: black;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        background-color: white;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown-content a:hover{
        background-color: #43536a;
        color: white;
    }

    </style>

@if(!Auth::check())
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('image/logo-posterios.PNG') }}" alt="Posterios-Logo" width="250" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ideas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
@else
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('image/logo-posterios.PNG') }}" alt="Posterios-Logo" width="250" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ideas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="dropbtn"> <img src="{{ asset('image/icon-logo.PNG') }}" width="25px" height="25px" alt=""> {{ Auth::user()->username }}</button>
        <div class="dropdown-content">
          <a href="/profile">Profile</a>
          <a href="#">My Projects</a>
          <a href="/logout">Log Out</a>
        </div>
      </div>

    </div>
  </nav>
@endif
