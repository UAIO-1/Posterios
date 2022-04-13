@extends('layout')
@section('title', 'Posterios - Project')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/projectdetail.css') }}">


@include('navbar')

@foreach ($projects as $p)

@if (!Auth::check())

@elseif(Auth::check() && Auth::user()->role == "Admin")






















@elseif(Auth::check() && Auth::user()->id != $p->user_id)


    @if (in_array($p->id, $answers))

        <div class="container">
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
                            <p class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                        </div>
                        <hr>
                        <a href="" class="btn btn-outline-secondary">Add to Wishlist</a>
                        <div class="mt-4">
                            <h6><strong>Description :</strong></h6>
                            @if ($p->project_description == null)
                                <p class="text-muted"><em>tidak ada description.</em></p>
                            @else

                            @endif
                            <p class="project-description text-muted">{{ $p->project_description }}</p>
                        </div>
                        <div class="mt-4">
                            @if ($p->project_link == null)
                                <p><h6><strong>Source :</strong></h6> <em class="text-muted">tidak ada sumber.</em></p>
                            @else
                                <p><h6><strong>Source :</strong></h6> <a href="{{ $p->project_link }}" class="project-link" target="_blank">{{ $p->project_link }}</a></p>
                            @endif
                        </div>
                        <div class="mt-2">
                            @if ($p->project_video_link == null)
                                <p><h6><strong> Link Video :</strong></h6> <em class="text-muted">tidak ada link video.</em></p>
                            @else
                                <p><h6><strong> Link Video :</strong></h6> <a href="{{ $p->project_video_link }}" class="project-link" target="_blank">{{ $p->project_video_link }}</a></p>
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

        <div class="mt-4">
            <p class="text-center">Anda telah memberikan saran, rekomendasi, penilaian, dan jawaban Anda terhadap proyek ini.</p>
        </div>


    @else

        <div class="container">
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
                            <p class="text-muted">{{ Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</p>
                        </div>
                        <hr>
                        <a href="" class="btn btn-outline-secondary">Add to Wishlist</a>
                        <div class="mt-4">
                            <h6><strong>Description :</strong></h6>
                            @if ($p->project_description == null)
                                <p class="text-muted"><em>tidak ada description.</em></p>
                            @else

                            @endif
                            <p class="project-description text-muted">{{ $p->project_description }}</p>
                        </div>
                        <div class="mt-4">
                            @if ($p->project_link == null)
                                <p><h6><strong>Source :</strong></h6> <em class="text-muted">tidak ada sumber.</em></p>
                            @else
                                <p><h6><strong>Source :</strong></h6> <a href="{{ $p->project_link }}" class="project-link" target="_blank">{{ $p->project_link }}</a></p>
                            @endif
                        </div>
                        <div class="mt-2">
                            @if ($p->project_video_link == null)
                                <p><h6><strong> Link Video :</strong></h6> <em class="text-muted">tidak ada link video.</em></p>
                            @else
                                <p><h6><strong> Link Video :</strong></h6> <a href="{{ $p->project_video_link }}" class="project-link" target="_blank">{{ $p->project_video_link }}</a></p>
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

    <div class="container">
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
                        <h6><strong>Description :</strong></h6>
                        @if ($p->project_description == null)
                            <p class="text-muted"><em>tidak ada description.</em></p>
                        @else
                            <p class="project-description text-muted">{{ $p->project_description }}</p>
                        @endif
                    </div>
                    <div class="mt-4">
                        @if ($p->project_link == null)
                            <p><h6><strong>Source :</strong></h6> <em class="text-muted">tidak ada sumber.</em></p>
                        @else
                            <p><h6><strong>Source :</strong></h6> <a href="{{ $p->project_link }}" class="project-link" target="_blank">{{ $p->project_link }}</a></p>
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($p->project_video_link == null)
                            <p><h6><strong> Link Video :</strong></h6> <em class="text-muted">tidak ada link video.</em></p>
                        @else
                            <p><h6><strong> Link Video :</strong></h6> <a href="{{ $p->project_video_link }}" class="project-link" target="_blank">{{ $p->project_video_link }}</a></p>
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

    <div class="container">
        <div class="row row-cols-1 row-cols-3">
            @foreach ($questions as $q)
                <div class="card p-3 m-3">
                    <div>
                        <p>from: <a href="">{{ $q->name }}</a></p>
                    </div>
                    <div class="text-justify">
                        <small class="text-muted">Saran / Rekomendasi</small>
                        <p>{{ Str::limit($q->recommendation, 100, '...') }} <a href="">Read More</a></p>
                    </div>
                    <div>
                        <h5>Nilai:
                            @if ($q->points > 90)
                                <span class="text-success">{{ $q->points }}</span>
                            @elseif($q->points > 75)
                                <span class="text-success">{{ $q->points }}</span>
                            @elseif($q->points > 65)
                                <span class="text-warning">{{ $q->points }}</span>
                            @else
                                <span class="text-danger">{{ $q->points }}</span>
                            @endif
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endif

@endforeach
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
