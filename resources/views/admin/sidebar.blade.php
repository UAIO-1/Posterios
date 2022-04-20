<link rel="stylesheet" href="{{ asset('css/admin/sidebar.css') }}">

<div class="sidenav">
    <div class="sidebar-header">
        <img src="{{ asset('image/logo-posterios-blue.PNG') }}" alt="logo posterios">
    </div>
    <div class="users mt-3">
       <div class="row">
            <div class="col-md-3">
                @if (Auth::user()->gender == "Male")
                    <img src="{{ asset('image/user-male.png') }}" alt="profile picture" class="profile-picture">
                @else
                    <img src="{{ asset('image/user-female.png') }}" alt="profile picture" class="profile-picture">
                @endif
            </div>
            <div class="col">
                <h6 class="text-muted">{{ Auth::user()->name }}</h6>
                <span class="text-success">• Online</span>
            </div>
       </div>
    </div>
    <div class="mt-4">
        <ul class="list-unstyled">
            <li class="mb-2">
                <a href="/admin.dashboard">
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="#about">
                    Users
                </a>
            </li>
            <li class="mb-2">
                <a href="#about">
                    Projects
                </a>
            </li>
            <li class="mb-2">
                <a href="#about">
                    Forum
                </a>
            </li>
            <li class="fixed-bottom p-3" style="max-width: 15%">
                <a href="#about">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>
