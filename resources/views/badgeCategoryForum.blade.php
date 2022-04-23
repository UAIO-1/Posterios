<link rel="stylesheet" href="{{ asset('css/badgecategory.css') }}">

@if($f->forum_subcategory == "Programming")
    <p class="card-text badge badge-programming">{{ $f->forum_subcategory }}</p>

@elseif ($f->forum_subcategory == "Digital Desain")
    <p class="card-text badge badge-digitaldesign">{{ $f->forum_subcategory }}</p>

@elseif ($f->forum_subcategory == "Komputer dan Jaringan")
    <p class="card-text badge badge-komputerdanjaringan">{{ $f->forum_subcategory }}</p>

@elseif ($f->forum_subcategory == "Seni Tari")
    <p class="card-text badge badge-senitari">{{ $f->forum_subcategory }}</p>

@elseif ($f->forum_subcategory == "Seni Lukis")
    <p class="card-text badge badge-senilukis">{{ $f->forum_subcategory }}</p>

@elseif ($f->forum_subcategory == "Seni Musik")
    <p class="card-text badge badge-senimusik">{{ $f->forum_subcategory }}</p>

@endif

