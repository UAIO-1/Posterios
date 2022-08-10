@extends('layouts.adminLayouts')
@section('title', 'Pending Verification • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/admin/verifikasiuser.css') }}">

<div class="container2">
    <div class="row">
        <div class="col-md-2">
            @include('admin.sidebar')
        </div>

        <div class="col-md-9">
            <div class="mt-lg-4">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Username" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="mb-4">
                <h6>Pending ({{ $pendingCount }})</h6>
            </div>

            <div class="row row-cols-5">
                @if(isset($users))
                @foreach ($users as $u)
                    <div class="col">
                        <label>
                            <a href="#modalDetailPending_{{ $u->id }}" data-bs-toggle="modal" data-bs-target="#modalDetailPending_{{ $u->id }}" style="text-decoration: none; color:#000;">
                                <input type="radio" name="recommendation" value="A" class="card-input-element">
                                <div class="card p-3 card-input" style="width: 15rem;border-radius: 20px">
                                    <div class="d-flex justify-content-center">
                                        @if ($u->image == null)
                                            @if ($u->gender == "Male")
                                                <img src="{{ asset('image/user-male.png') }}" class="card-img-top profilepicture" alt="profile picture">
                                            @else
                                                <img src="{{ asset('image/user-female.png') }}" class="card-img-top profilepicture" alt="profile picture">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/'.$u->image) }}" class="card-img-top profilepicture" alt="profile picture">
                                        @endif
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $u->name }}</h5>
                                        <p class="card-text">
                                            <small style="font-size: 14px">({{ $u->email }})</small>
                                        </p>
                                        <p class="card-text">
                                            <small style="font-size: 14px">{{ $u->role }}</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </label>
                        @include('admin.modalDetailPending')
                    </div>
                @endforeach
                @endif
            </div>
        </div>





    </div>
</div>

