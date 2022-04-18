<link rel="stylesheet" href="{{ asset('css/badgecategory.css') }}">

@if($w->project_subcategory == "Programming")
    <p class="card-text badge badge-programming">{{ $w->project_subcategory }}</p>

@elseif ($w->project_subcategory == "Digital Desain")
    <p class="card-text badge badge-digitaldesign">{{ $w->project_subcategory }}</p>

@elseif ($w->project_subcategory == "Komputer dan Jaringan")
    <p class="card-text badge badge-komputerdanjaringan">{{ $w->project_subcategory }}</p>

@elseif ($w->project_subcategory == "Seni Tari")
    <p class="card-text badge badge-senitari">{{ $w->project_subcategory }}</p>

@elseif ($w->project_subcategory == "Seni Lukis")
    <p class="card-text badge badge-senilukis">{{ $w->project_subcategory }}</p>

@elseif ($w->project_subcategory == "Seni Musik")
    <p class="card-text badge badge-senimusik">{{ $w->project_subcategory }}</p>

@endif

