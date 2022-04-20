<link rel="stylesheet" href="{{ asset('css/badgecategory.css') }}">

@if($ps->project_subcategory == "Programming")
    <p class="card-text badge badge-programming">{{ $ps->project_subcategory }}</p>

@elseif ($ps->project_subcategory == "Digital Desain")
    <p class="card-text badge badge-digitaldesign">{{ $ps->project_subcategory }}</p>

@elseif ($ps->project_subcategory == "Komputer dan Jaringan")
    <p class="card-text badge badge-komputerdanjaringan">{{ $ps->project_subcategory }}</p>

@elseif ($ps->project_subcategory == "Seni Tari")
    <p class="card-text badge badge-senitari">{{ $ps->project_subcategory }}</p>

@elseif ($ps->project_subcategory == "Seni Lukis")
    <p class="card-text badge badge-senilukis">{{ $ps->project_subcategory }}</p>

@elseif ($ps->project_subcategory == "Seni Musik")
    <p class="card-text badge badge-senimusik">{{ $ps->project_subcategory }}</p>

@endif

