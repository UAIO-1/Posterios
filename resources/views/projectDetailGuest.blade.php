@extends('layout')
@section('title', 'Project Detail | Posterios')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/projectdetailguest.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@include('navbar')

@if (!Auth::check())

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
                        <a href="" class="username">{{ $p->name }}</a>
                    </p>
                    <p class="text-muted"><em>{{ $p->project_category }} / {{ $p->project_subcategory }}</em></p>
                    <hr>
                    <div class="mt-4">
                        <h6>Description :</h6>
                        @if ($p->project_description == null)
                            <p class="text-muted"><em>tidak ada description.</em></p>
                        @else

                        @endif
                        <p class="project-description text-muted">{{ $p->project_description }}</p>
                    </div>
                    <div class="mt-4">
                        @if ($p->project_link == null)
                            <p><h6>Source :</h6> <em class="text-muted">tidak ada sumber.</em></p>
                        @else
                            <p><h6>Source :</h6> <a href="{{ $p->project_link }}" class="project-link" target="_blank">{{ $p->project_link }}</a></p>
                        @endif
                    </div>
                    <div class="mt-2">
                        <h6>Video : </h6>
                        @if ($p->project_video == null)
                            <p class="text-muted"><em>tidak ada video.</em></p>
                        @else
                            <video src="{{ asset('storage/'.$p->project_video) }}" controls></video>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="about text-light text-center p-3">
        <h4>Tentang Pertanyaan</h4>
        <p class="pertanyaan">
            Berikanlah saran, rekomendasi, penilaian, dan jawaban Anda terhadap project <strong>{{ $p->name }}.</strong>
            Penilaian yang masuk dapat menjadi pertimbangan bagi <strong>{{ $p->name }}</strong> untuk membuat proyek yang lebih baik.
        </p>
    </div>

    <div class="mt-4">
        <p class="text-center">Anda harus login terlebih dahulu sebelum memberikan saran, rekomendasi, penilaian, dan jawaban Anda terhadap proyek <strong>{{ $p->name }}</strong></p>
    </div>

@else

    None.

@endif
