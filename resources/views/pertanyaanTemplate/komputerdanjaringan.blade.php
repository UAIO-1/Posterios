<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/pertanyaanTemplate.css') }}">

<form action={{ url('/submitAnswer') }} method="POST" class="form-pertanyaan">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="project_id" value="{{ $p->id }}">
    <input type="hidden" name="name" value="{{ Auth::user()->name }}">

    <div class="mb-3">
        <label for="customRange1" class="form-label">
            1. Dari skala 1 sampai dengan 10, bagaimana kerapian penyusunan kabel dalam jaringan tersebut?
            <span class="text-danger">*</span>
        </label>
        <br>
        <small class="text-muted"><i>catatan: penyusunan kabel dapat berupa hubungan device dengan device lain sudah baik atau pemasangan kabel RJ.</i></small>

        <input type="range" name="first_answer" class="form-range" id="first_answer" value="5" min="1" max="10" oninput="first_output.value = first_answer.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="first_output">5</output></h1>
        </div>
    </div>

    <div class="mb-3">
        <label for="customRange2" class="form-label">
            2. Dari skala 1 sampai dengan 10, bagaimana teknik yang digunakan dalam membuat jaringan tersebut?
            <span class="text-danger">*</span>
        </label>
        <br>
        <small class="text-muted"><i>catatan: teknik dapat berupa teknik menjepit kabel atau pembuatan jaringan sudah sesuai dengan standar operasional prosedur.</i></small>

        <input type="range" name="second_answer" class="form-range" id="second_answer" value="5" min="1" max="10" oninput="second_output.value = second_answer.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="second_output">5</output></h1>
        </div>
    </div>

    <div class="mb-3">
        <label for="customRange3" class="form-label">
            3. Dari skala 1 sampai dengan 10, bagaimana kesesuaian hasil dari pengujian yang dilakukan dari jaringan tersebut?
            <span class="text-danger">*</span>
        </label>
        <br>
        <small class="text-muted"><i>catatan: </i></small>

        <input type="range" name="third_answer" class="form-range" id="third_answer" value="5" min="1" max="10" oninput="third_output.value = third_answer.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="third_output">5</output></h1>
        </div>
    </div>

    <hr>

    <div class="mt-xl-5"></div>


    <div class="row row-cols-1 row-cols-2">
        <div class="col">
            <div class="">
                <div class="mb-2">
                    <h4><strong>Kelebihan Proyek (maks. 3)</strong></h4>
                    <small class="text-muted"><i>contoh: Penyusunan kabel dalam jaringan sangat rapi.</i></small>
                </div>
                <div class="mb-3">
                    <small>Kelebihan 1</small>
                    <input type="text" name="kel1" id="kel1" class="form-control" style="width: 100%;">
                </div>
                <div class="mb-3">
                    <small>Kelebihan 2</small>
                    <input type="text" name="kel2" id="kel2" class="form-control" style="width: 100%;">
                </div>
                <div class="mb-3">
                    <small>Kelebihan 3</small>
                    <input type="text" name="kel3" id="kel3" class="form-control" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="">
                <div class="mb-2">
                    <h4><strong>Kekurangan Proyek (maks. 3)</strong></h4>
                    <small class="text-muted"><i>contoh: Teknik yang digunakan masih salah.</i></small>
                </div>
                <div class="mb-3">
                    <small>Kekurangan 1</small>
                    <input type="text" name="kek1" id="kek1" class="form-control" style="width: 100%;">
                </div>
                <div class="mb-3">
                    <small>Kekurangan 2</small>
                    <input type="text" name="kek2" id="kek2" class="form-control" style="width: 100%;">
                </div>
                <div class="mb-3">
                    <small>Kekurangan 3</small>
                    <input type="text" name="kek3" id="kek3" class="form-control" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-xl-5 mb-xl-5">
        <div class="text-center" style="font-size: 1.5em">
            <p><strong> {{ $p->name }}</strong> memiliki peminatan pada jurusan <strong>{{ $users->jurusan }}.</strong></p>
            <p>Berikan saran Anda untuk <em>{{ $p->name }}</em>:</p>
        </div>
        <div class="row row-cols-1 row-cols-3">
            <div class="col">
                <label>
                    <input type="radio" name="recommendation" value="A" class="card-input-element">
                    <div class="card card-default card-input">
                        <div class="card-body">
                            <p>A</p>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('image/A.png') }}" alt="success">
                            </div>
                            <p class="text-center mt-4">Kamu sangat cocok dibidang ini. Teruslah berkarya sampai menjadi sukses!</p>
                        </div>
                    </div>
                </label>
            </div>
            <div class="col">
                <label>
                    <input type="radio" name="recommendation" value="B" class="card-input-element">
                    <div class="card card-default card-input">
                        <div class="card-body">
                            <p>B</p>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('image/B.png') }}" alt="power">
                            </div>
                            <p class="text-center mt-3">Kamu harus lebih banyak berlatih, harus banyak membuat proyek, harus banyak belajar dari orang lain.</p>
                        </div>
                    </div>
                </label>
            </div>
            <div class="col">
                <label>
                    <input type="radio" name="recommendation" value="C" class="card-input-element">
                    <div class="card card-default card-input">
                        <div class="card-body">
                            <p>C</p>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('image/C.png') }}" alt="study" style="border-radius: 50%">
                            </div>
                            <p class="text-center mt-4">Semangat terus jangan menyerah, asah terus kemampuanmu.</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <hr>

    <div class="mb-3 mt-xl-5">
        <label for="customRange3" class="form-label text-center">
            <h3>Total nilai keseluruhan yang Anda ingin berikan terhadap proyek ini?<span class="text-danger">*</span></h3>

        </label>

        <input type="range" name="points" class="form-range" id="points" value="50" min="0" max="100" oninput="points_output.value = points.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="points_output">50</output></h1>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-xl-5">
        <input type="submit" value="Submit Answer" class="submit-but w-25">
    </div>

</form>

