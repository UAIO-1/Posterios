<div class="modal fade" id="buatKelas" tabindex="-1" aria-labelledby="buatKelas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="buatKelas">Buat Kelas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{ url('/createClass') }} method="POST">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label for="">Nama Kelas</label>
                    <input type="text" class="form-control" name="class_name">
                </div>
                <div class="mb-3">
                    <label for="">Kode Kelas</label>
                    <input type="text" class="form-control" name="class_code">
                    <small class="text-muted"><em>*max 6 characters</em></small>
                </div>
                <div class="mb-3">
                    <label for="">Kelas</label>
                    <select class="form-select" name="class_grade">
                        <option disabled selected>Pilih Kelas</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi Kelas</label>
                    <textarea name="class_description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Buat">
        </form>
        </div>
      </div>
    </div>
  </div>
