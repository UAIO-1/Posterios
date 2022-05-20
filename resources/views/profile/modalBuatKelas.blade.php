<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="modal fade" id="buatKelas" tabindex="-1" aria-labelledby="buatKelas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="buatKelas">Buat Kelas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{ url('/createClass') }} method="POST">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label for=""><strong>Nama Kelas</strong></label><span class="text-danger">*</span>
                    <input type="text" class="form-control" name="class_name" value="{{ old('class_name') }}">
                    @if($errors->first('class_name'))
                        <small class="text-danger"><em>{{ $errors->first('class_name') }}</em></small>
                    @else
                        <small class="text-muted"><em>*6 - 30 karakter.</em></small>
                    @endif
                </div>
                <div class="mb-3">
                    <label for=""><strong>Kode Kelas</strong></label><span class="text-danger">*</span>
                    <input type="text" class="form-control" name="class_code" value="{{ old('class_code') }}">
                    @if($errors->first('class_code'))
                        <small class="text-danger"><em>{{ $errors->first('class_code') }}</em></small>
                    @else
                        <small class="text-muted"><em>*harus 6 karakter.</em></small>
                    @endif
                </div>
                <div class="mb-3">
                    <label for=""><strong>Kelas</strong></label><span class="text-danger">*</span>
                    <select class="form-select" name="class_grade">
                        <option disabled selected>Pilih Kelas</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for=""><strong>Deskripsi Kelas</strong></label>
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

@if (count($errors) > 0)
  <script>
      $( document ).ready(function() {
          $('#buatKelas').modal('show');
      });
  </script>
@endif
