@extends('layout')
@section('title', 'Project Detail • Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/projectdetail.css') }}">


@include('navbar')

@foreach ($projects as $p)

@if (!Auth::check())

@elseif(Auth::check() && Auth::user()->role == "Admin")






















@elseif(Auth::check() && Auth::user()->id != $p->user_id)

    <div class="container mt-xl-5">
        <div class="row">
            @foreach($projects as $p)
                <div class="col-md-6 col">
                    <img src="{{ asset('storage/'.$p->project_image) }}" alt="project picture" class="project-picture">
                </div>
                <div class="col-md-6 col">
                    <div>
                        <h1 class="project-title"><strong>{{ $p->project_title }}</strong></h1>
                        <div>
                            @if (in_array($p->id, $wishlists))
                                <a href="/wishlistDeleteDetail/{{ $wishses->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                                    </svg>
                                </a>
                            @else
                                <form action={{ url('/addToWishlists') }} method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="project_id" value="{{ $p->id }}">
                                    <button type="submit" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <p>
                        <em class="by">by</em>
                        <a href="/myProfile/{{ $p->user_id }}" class="username">{{ $p->name }}</a>
                    </p>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted"><em>{{ $p->project_category }} / {{ $p->project_subcategory }}</em></p>
                        @php
                            Carbon\Carbon::setLocale('id');
                        @endphp
                        <p class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                    </div>
                    <hr>

                    <div class="mt-4">
                        <h6><strong>Deskripsi Proyek:</strong></h6>
                        @if ($p->project_description == null)
                            <p class="text-muted"><em>tidak ada deskripsi.</em></p>
                        @else

                        @endif
                        <p class="project-description text-muted">{{ $p->project_description }}</p>
                    </div>
                    <div class="mt-4">
                        @if ($p->project_link == null)
                            <p><h6><strong>Tautan Proyek :</strong></h6> <em class="text-muted">tidak ada tautan.</em></p>
                        @else
                            <p><h6><strong>Tautan Proyek :</strong></h6> <a href="{{ $p->project_link }}" class="project-link" target="_blank">{{ $p->project_link }}</a></p>
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($p->project_video_link == null)
                            <p><h6><strong> Tautan Video :</strong></h6> <em class="text-muted">tidak ada tautan.</em></p>
                        @else
                            <p><h6><strong> Tautan Video :</strong></h6> <a href="{{ $p->project_video_link }}" class="project-link" target="_blank">{{ $p->project_video_link }}</a></p>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="mt-2 container">
                    <h6><strong>File Video : </strong></h6>
                    @if ($p->project_video == null)
                        <p class="text-muted"><em>tidak ada video.</em></p>
                    @else
                        <video src="{{ asset('storage/'.$p->project_video) }}" controls width="100%" height="100%"></video>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <div class="about text-light text-center p-3">
        <h4>Tentang Pertanyaan</h4>
        <p class="pertanyaan">
            Berikanlah saran, rekomendasi, penilaian, dan jawaban Anda terhadap proyek <strong>{{ $p->name }}.</strong>
            Penilaian yang masuk dapat menjadi pertimbangan bagi <strong>{{ $p->name }}</strong> untuk membuat proyek yang lebih baik.
        </p>
    </div>

    @if (in_array($p->id, $answers))
        <div class="mt-4">
            <p class="text-center">Anda telah memberikan saran, rekomendasi, penilaian, dan jawaban Anda terhadap proyek ini.</p>
        </div>
    @else
        <div class="mt-xl-5">
            <div class="container">
                @if ($p->project_subcategory == "Programming")
                    @include('pertanyaanTemplate.programming')
                @elseif($p->project_subcategory == "Digital Desain")
                    @include('pertanyaanTemplate.digitaldesain')
                @elseif($p->project_subcategory == "Komputer dan Jaringan")
                    @include('pertanyaanTemplate.komputerdanjaringan')
                @elseif($p->project_subcategory == "Seni Tari")
                    @include('pertanyaanTemplate.senitari')
                @elseif($p->project_subcategory == "Seni Musik")
                    @include('pertanyaanTemplate.senimusik')
                @elseif($p->project_subcategory == "Seni Lukis")
                    @include('pertanyaanTemplate.senilukis')
                @endif
            </div>
        </div>
    @endif

















@else

    <div class="container mt-xl-5">
        <div class="row">
            @foreach($projects as $p)
                <div class="col-md-6">
                    <img src="{{ asset('storage/'.$p->project_image) }}" alt="project picture" class="project-picture">
                </div>
                <div class="col-md-6">
                    <h1 class="project-title">{{ $p->project_title }}</h1>
                    <p>
                        <em class="by">by</em>
                        <a href="/myProfile/{{ $p->user_id }}" class="username">{{ $p->name }}</a>
                    </p>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted"><em>{{ $p->project_category }} / {{ $p->project_subcategory }}</em></p>
                        @php
                            Carbon\Carbon::setLocale('id');
                        @endphp
                        <p class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                    </div>
                    <hr>
                    <div>
                        <a href="#"  class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalEditProject">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil m-1" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                            Edit Proyek
                        </a>
                        <a href="#"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteProject">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                            Hapus Proyek
                        </a>
                    </div>
                    @include('profile.modalEditProject')
                    @include('profile.modalDeleteProject')
                    <div class="mt-4">
                        <h6><strong>Deskripsi Proyek:</strong></h6>
                        @if ($p->project_description == null)
                            <p class="text-muted"><em>tidak ada deskripsi.</em></p>
                        @else
                            <p class="project-description text-muted">{{ $p->project_description }}</p>
                        @endif
                    </div>
                    <div class="mt-4">
                        @if ($p->project_link == null)
                            <p><h6><strong>Tautan Proyek :</strong></h6> <em class="text-muted">tidak ada tautan.</em></p>
                        @else
                            <p><h6><strong>Tautan Proyek :</strong></h6> <a href="{{ $p->project_link }}" class="project-link" target="_blank">{{ $p->project_link }}</a></p>
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($p->project_video_link == null)
                            <p><h6><strong> Tautan Video :</strong></h6> <em class="text-muted">tidak ada tautan.</em></p>
                        @else
                            <p><h6><strong> Tautan Video :</strong></h6> <a href="{{ $p->project_video_link }}" class="project-link" target="_blank">{{ $p->project_video_link }}</a></p>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="mt-2 container">
                    <h6><strong>File Video : </strong></h6>
                    @if ($p->project_video == null)
                        <p class="text-muted"><em>tidak ada video.</em></p>
                    @else
                        <video src="{{ asset('storage/'.$p->project_video) }}" controls width="100%" height="100%"></video>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <div class="about text-light text-center p-3">
        <h4>Feedback Proyekmu!</h4>
        <p class="pertanyaan">
           Semua pengguna lain yang memberikan saran, rekomendasi, penilaian, dan jawaban terhadap proyek Anda akan muncul di sini.
        </p>
    </div>

    <div class="mt-lg-4 p-3">
        <div class="row row-cols-5 g-3">
            @foreach ($questions as $q)
                <div class="col">
                    <a href="#modalFeedbackDetail_{{ $q->id }}" data-bs-toggle="modal" data-bs-target="#modalFeedbackDetail_{{ $q->id }}" class="card-detail">
                        <div class="card card2">

                            @if ($q->recommendation == "A")
                                <div class="row row-cols-2 p-5">
                                    <div class="col">
                                        <img src="{{ asset('image/A.png') }}" alt="success" class="card-img-top">
                                    </div>
                                    <div class="col">
                                        <div class="text-center">
                                            <h3>Nilai:</h3>
                                            @if ($q->points > 90)
                                                <h1 class="text-success display-3">{{ $q->points }}</h1>
                                            @elseif($q->points > 75)
                                                <h1 class="text-success display-3">{{ $q->points }}</h1>
                                            @elseif($q->points > 65)
                                                <h1 class="text-warning display-3">{{ $q->points }}</h1>
                                            @else
                                                <h1 class="text-danger display-3">{{ $q->points }}</h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <small class="text-muted text-center"><em>dari</em></small>
                                <small class="text-center"><em class="name">{{ $q->name }}</em></small>
                                <p class="text-center rec">Kamu sangat cocok dibidang ini. Teruslah berkarya sampai menjadi sukses!</p>

                            @elseif ($q->recommendation == "B")

                                <div class="row row-cols-2 p-5">
                                    <div class="col">
                                        <img src="{{ asset('image/B.png') }}" alt="power" class="card-img-top">
                                    </div>
                                    <div class="col">
                                        <div class="text-center">
                                            <h3>Nilai:</h3>
                                            @if ($q->points > 90)
                                                <h1 class="text-success display-3">{{ $q->points }}</h1>
                                            @elseif($q->points > 75)
                                                <h1 class="text-success display-3">{{ $q->points }}</h1>
                                            @elseif($q->points > 65)
                                                <h1 class="text-warning display-3">{{ $q->points }}</h1>
                                            @else
                                                <h1 class="text-danger display-3">{{ $q->points }}</h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <small class="text-muted text-center"><em>dari</em></small>
                                <small class="text-center"><em class="name">{{ $q->name }}</em></small>
                                <p class="text-center rec">Kamu harus lebih banyak berlatih, harus banyak membuat proyek, harus banyak belajar dari orang lain.</p>

                            @else

                                <div class="row row-cols-2 p-5">
                                    <div class="col">
                                        <img src="{{ asset('image/C.png') }}" alt="spirit" class="card-img-top">
                                    </div>
                                    <div class="col">
                                        <div class="text-center">
                                            <h3>Nilai:</h3>
                                            @if ($q->points > 90)
                                                <h1 class="text-success display-3">{{ $q->points }}</h1>
                                            @elseif($q->points > 75)
                                                <h1 class="text-success display-3">{{ $q->points }}</h1>
                                            @elseif($q->points > 65)
                                                <h1 class="text-warning display-3">{{ $q->points }}</h1>
                                            @else
                                                <h1 class="text-danger display-3">{{ $q->points }}</h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <small class="text-muted text-center"><em>dari</em></small>
                                <small class="text-center"><em class="name">{{ $q->name }}</em></small>
                                <p class="text-center rec">Semangat terus jangan menyerah, asah terus kemampuanmu.</p>
                            @endif
                        </div>
                    </a>
                    @include('profile.modalFeedbackDetail')
                </div>

            @endforeach
        </div>
    </div>




@endif

@endforeach
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
