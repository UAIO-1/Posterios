<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<form action={{ url('/submitAnswer') }} method="POST" class="form-pertanyaan">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="project_id" value="{{ $p->id }}">

    <div class="mb-3">
        <label for="customRange1" class="form-label">
            1. Dari skala 1 sampai dengan 10, bagaimana ketepatan input, proses, dan output dari proyek tersebut?
            <span class="text-danger">*</span>
        </label>
        <br>
        <small class="text-muted"><i>catatan: nilai yang masuk harus sama dengan nilai yang dihasilkan.</i></small>

        <input type="range" name="first_answer" class="form-range" id="first_answer" value="5" min="1" max="10" oninput="first_output.value = first_answer.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="first_output">5</output></h1>
        </div>
    </div>

    <div class="mb-3">
        <label for="customRange2" class="form-label">
            2. Dari skala 1 sampai dengan 10, bagaimana elemen-elemen atau komponen-komponen yang digunakan dari proyek tersebut?
            <span class="text-danger">*</span>
        </label>
        <br>
        <small class="text-muted"><i>catatan: elemen atau komponen dapat berupa aset gambar, suara, atau teks.</i></small>

        <input type="range" name="second_answer" class="form-range" id="second_answer" value="5" min="1" max="10" oninput="second_output.value = second_answer.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="second_output">5</output></h1>
        </div>
    </div>

    <div class="mb-3">
        <label for="customRange3" class="form-label">
            3. Dari skala 1 sampai dengan 10, bagaimana tampilan antar muka atau <i>user interface</i> dari proyek tersebut?
            <span class="text-danger">*</span>
        </label>
        <br>
        <small class="text-muted"><i>catatan: tampilan antar muka dapat berupa kombinasi warna atau kerapian penempatan elemen.</i></small>

        <input type="range" name="third_answer" class="form-range" id="third_answer" value="5" min="1" max="10" oninput="third_output.value = third_answer.value">
        <div class="text-center">
            <span>Nilai: </span> <h1 class="display-3"><output id="third_output">5</output></h1>
        </div>
    </div>

    <div class="mt-xl-5"></div>

    <div class="mb-3">
        <h6>Kelebihan Proyek</h6>
        <small class="text-muted"><i>contoh: Elemen yang digunakan sesuai dengan tema | Tampilan sangat bagus.</i></small>
        <textarea name="strength" class="form-control" style="width: 100%; height: 10%"></textarea>
    </div>

    <div class="mb-3">
        <h6>Kekurangan Proyek</h6>
        <small class="text-muted"><i>contoh: Elemen yang digunakan kurang banyak | Hasil yang masuk tidak sama dengan hasil yang dikeluarkan.</i></small>
        <textarea name="weakness"  class="form-control" style="width: 100%; height: 10%"></textarea>
    </div>

    <div class="mb-3">
        <h6>Saran/Rekomendasi untuk <strong>{{ $p->name }}</strong></h6>
        <small class="text-muted"><i>contoh: Kedepannya perbaiki elemen yang digunakan | Dari proyek ini, Anda sangat cocok dalam bidang ini.</i></small>
        <textarea name="recommendation"  class="form-control" style="width: 100%; height: 10%"></textarea>
    </div>

    <div class="d-flex justify-content-end">
        <input type="submit" value="Submit" class="submit-but w-25">
    </div>
</form>

