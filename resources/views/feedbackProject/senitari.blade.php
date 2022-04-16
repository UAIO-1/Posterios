<div class="container">
    <div class="row row-cols-2">
        <div class="col">
            @if ($q->recommendation == "A")
                <div class="card border-0">
                    <img src="{{ asset('image/A.png') }}" class="card-img-top" alt="success">
                    <div class="card-body">
                        <p class="text-center mt-4">Kamu sangat cocok dibidang ini. Teruslah berkarya sampai menjadi sukses!</p>
                    </div>
                </div>

            @elseif ($q->recommendation == "B")
                <div class="card border-0">
                    <img src="{{ asset('image/B.png') }}" class="card-img-top" alt="power">
                    <div class="card-body">
                        <p class="text-center mt-4">Kamu harus lebih banyak berlatih, harus banyak membuat proyek, harus banyak belajar dari orang lain.</p>
                    </div>
                </div>
            @else
                <div class="card border-0">
                    <img src="{{ asset('image/C.png') }}" class="card-img-top" alt="spirit" style="border-radius: 50%">
                    <div class="card-body">
                        <p class="text-center mt-4">Semangat terus jangan menyerah, asah terus kemampuanmu.</p>
                    </div>
                </div>
            @endif
        </div>

        <div class="col mt-xl-5">
            <div class="text-center">
                <h3>Nilai:</h3>
                @if ($q->points > 90)
                    <h1 class="text-success display-1">{{ $q->points }}</h1>
                @elseif($q->points > 75)
                    <h1 class="text-success display-1">{{ $q->points }}</h1>
                @elseif($q->points > 65)
                    <h1 class="text-warning display-1">{{ $q->points }}</h1>
                @else
                    <h1 class="text-danger display-1">{{ $q->points }}</h1>
                @endif
            </div>
        </div>
    </div>

</div>

<hr>

<div class="text-center">
    <div class="mb-3">
        <label for="customRange1" class="form-label">
            Dari skala 1 sampai dengan 10, bagaimana keserasian penampilan dari gerakan yang dibawakan?
        </label>
        <br>
        <small class="text-muted"><i>catatan: tidak ada catatan.</i></small>

        <div class="text-center">
            @if ($q->first_answer > 6)
                <span>Nilai: </span> <h1 class="display-2 text-success">{{ $q->first_answer }}</h1>
            @else
                <span>Nilai: </span> <h1 class="display-2 text-danger">{{ $q->first_answer }}</h1>
            @endif
        </div>
    </div>

    <div class="mb-3">
        <label for="customRange2" class="form-label">
            Dari skala 1 sampai dengan 10, bagaimana ketepatan ritme/tempo dengan gerakan yang dibawakan?
        </label>
        <br>
        <small class="text-muted"><i>catatan: tidak ada catatan.</i></small>

        <div class="text-center">
            @if ($q->second_answer > 6)
                <span>Nilai: </span> <h1 class="display-2 text-success">{{ $q->second_answer }}</h1>
            @else
                <span>Nilai: </span> <h1 class="display-2 text-danger">{{ $q->second_answer }}</h1>
            @endif
        </div>
    </div>

    <div class="mb-3">
        <label for="customRange3" class="form-label">
            Dari skala 1 sampai dengan 10, bagaimana kesesuaian kostum dan aksesoris yang dipakai dengan tema tarian?
        </label>
        <br>
        <small class="text-muted"><i>catatan: tidak ada catatan.</i></small>

        <div class="text-center">
            @if ($q->third_answer > 6)
                <span>Nilai: </span> <h1 class="display-2 text-success">{{ $q->third_answer }}</h1>
            @else
                <span>Nilai: </span> <h1 class="display-2 text-danger">{{ $q->third_answer }}</h1>
            @endif
        </div>
    </div>


    <hr>

    <div class="mb-3">
        <h6><strong>Kelebihan:</strong></h6>
        @if ($q->strength == "--")
            <em class="text-muted">kosong.</em>
        @else
            @foreach (explode('-', $q->strength) as $kelebihan)
                <li class="text-dark">{{ $kelebihan }}</li>
            @endforeach
        @endif
    </div>

    <hr>

    <div class="mb-3">
        <h6><strong>Kekurangan:</strong></h6>
        @if ($q->weakness == "--")
            <em class="text-muted">kosong.</em>
        @else
            @foreach (explode('-', $q->weakness) as $kekurangan)
                <li class="text-dark">{{ $kekurangan }}</li>
            @endforeach
        @endif
    </div>


</div>
