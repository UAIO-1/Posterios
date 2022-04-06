<link rel="stylesheet" href="{{ asset('css/badgecategory.css') }}">

@if($p->project_subcategory == "Programming")
    <p class="card-text badge badge-programming">{{ $p->project_subcategory }}</p>

@elseif ($p->project_subcategory == "Digital Desain")
    <p class="card-text badge badge-digitaldesign">{{ $p->project_subcategory }}</p>

@elseif ($p->project_subcategory == "Komputer dan Jaringan")
    <p class="card-text badge badge-komputerdanjaringan">{{ $p->project_subcategory }}</p>

@elseif ($p->project_subcategory == "Kelistrikan")
    <p class="card-text badge badge-kelistrikan">{{ $p->project_subcategory }}</p>

@elseif ($p->project_subcategory == "Seni Tari")
    <p class="card-text badge badge-senitari">{{ $p->project_subcategory }}</p>

@elseif ($p->project_subcategory == "Seni Lukis")
    <p class="card-text badge badge-senilukis">{{ $p->project_subcategory }}</p>

@elseif ($p->project_subcategory == "Seni Musik")
    <p class="card-text badge badge-senimusik">{{ $p->project_subcategory }}</p>

@endif

