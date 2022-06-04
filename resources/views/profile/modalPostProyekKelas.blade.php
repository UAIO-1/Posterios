<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="modal fade" id="postingproyek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="postingproyek">Posting Proyek Kelas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{ url('/postingProyekKelas') }} method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="class_id" value="{{ $c->id }}">
                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="gender" value="{{ Auth::user()->gender }}">

                <div class="mb-3">
                    <label class="form-label">Judul Proyek</label><span class="text-danger">*</span>
                    <input type="text" name="project_title" value="{{ old('project_title') }}" class="form-control" placeholder="Modern Banner Design">
                    @if($errors->first('project_title'))
                        <small class="text-danger"><em>{{ $errors->first('project_title') }}</em></small>
                    @else
                        <small class="text-muted"><em>*6 - 30 karakter</em></small>
                    @endif
                </div>

                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label><span class="text-danger">*</span>
                            <select class="ml-4 form-select" id="main" name="project_category">
                                <option selected disabled>Pilih Kategori</option>
                                <option value="Teknologi">Teknologi</option>
                                <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                <option value="Seni">Seni</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Sub Kategori</label><span class="text-danger">*</span>
                            <select name="project_subcategory" class="ml-4 form-select" id="sub">
                                <option selected disabled>Pilih Sub Kategori</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Proyek</label><span class="text-danger">*</span>
                    <input class="form-control" type="file" name="project_image" accept="image/jpg, image/jpeg, image/png">
                    @if($errors->first('project_image'))
                        <small class="text-danger"><em>{{ $errors->first('project_image') }}</em></small>
                    @else
                        <small class="text-muted"><em>*maks 3 MB</em></small>
                    @endif
                </div>

                <hr>

                <div class="mb-3">
                    <label class="form-label">Tautan Proyek</label>
                    <input type="text" value="{{ old('project_link') }}" name="project_link" class="form-control" placeholder="https://www.scratch.mit.edu/ or https://drive.google.com/">
                </div>

                <div class="mb-3">
                    <label>Deskripsi Proyek</label>
                    <textarea value="{{ old('project_description') }}" class="form-control" name="project_description" rows="5"></textarea>
                    @if($errors->first('project_description'))
                        <small class="text-danger"><em>{{ $errors->first('project_description') }}</em></small>
                    @else

                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">File Video</label>
                            <input class="form-control" type="file" name="project_video" accept=".mp4,.mkv">
                            @if($errors->first('project_video'))
                                <small class="text-danger"><em>{{ $errors->first('project_video') }}</em></small>
                            @else
                                <small class="text-muted"><em>*maks 10 MB</em></small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tautan Video</label>
                            <input class="form-control" value="{{ old('project_video_link') }}" type="text" name="project_video_link" placeholder="https://www.youtube.com/">
                        </div>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
      </div>
    </div>
  </div>



  <script>
    $(document).ready(function() {

        $("#main").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub").html("<option value='Digital Desain'>Digital Desain</option><option value='Programming'>Programming</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub").html("<option value='Komputer dan Jaringan'>Komputer dan Jaringan</option>");
            } else if (val == "Seni") {
                $("#sub").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });
</script>

@if (count($errors) > 0)
  <script>
      $( document ).ready(function() {
          $('#postingproyek').modal('show');
      });
  </script>
@endif
