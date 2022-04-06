<link rel="stylesheet" href="{{ asset('css/badgecategory.css') }}">

@if($p->project_category == "Programming")
    <p class="card-text badge badge-programming">{{ $p->project_category }}</p>

@elseif ($p->project_category == "Digital Desain")
    <p class="card-text badge badge-digitaldesign">{{ $p->project_category }}</p>

@elseif ($p->project_category == "Komputer dan Jaringan")
    <p class="card-text badge badge-komputerdanjaringan">{{ $p->project_category }}</p>

@elseif ($p->project_category == "Kelistrikan")
    <p class="card-text badge badge-kelistrikan">{{ $p->project_category }}</p>

@elseif ($p->project_category == "Seni Tari")
    <p class="card-text badge badge-senitari">{{ $p->project_category }}</p>

@elseif ($p->project_category == "Seni Lukis")
    <p class="card-text badge badge-senilukis">{{ $p->project_category }}</p>

@elseif ($p->project_category == "Seni Musik")
    <p class="card-text badge badge-senimusik">{{ $p->project_category }}</p>

@endif

