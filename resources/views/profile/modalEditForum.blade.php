<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
    label{
        font-weight: bold;
    }
</style>

<div class="modal fade" id="editForum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editForum">Edit Forum</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="container" method="post" action={{url('/editForum')}} enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $f->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="forum_category" value="{{ $f->forum_category }}">

                <div class="mb-3">
                    <label>Judul Forum</label>
                    <input type="text" name="forum_title" class="form-control" value="{{ $f->forum_title }}">
                </div>

                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="ml-4 form-select" id="main" name="forum_category">
                                @if ($f->forum_category == "Teknologi")
                                <option value="Teknologi" selected>Teknologi</option>
                                <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                <option value="Seni">Seni</option>
                            @elseif($f->forum_category == "Teknik Rekayasa")
                                <option value="Teknologi">Teknologi</option>
                                <option value="Teknik Rekayasa" selected>Teknik Rekayasa</option>
                                <option value="Seni">Seni</option>
                            @elseif($f->forum_category == "Seni")
                                <option value="Teknologi">Teknologi</option>
                                <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                <option value="Seni" selected>Seni</option>
                            @endif
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Sub Kategori</label>
                            <select name="forum_subcategory" class="ml-4 form-select" id="sub">
                                @if ($f->forum_category == "Teknologi" && $f->forum_subcategory == "Digital Desain")
                                    <option value="Digital Desain" selected>Digital Desain</option>
                                    <option value="Programming">Programming</option>
                                @elseif($f->forum_category == "Teknologi" && $f->forum_subcategory == "Programming")
                                    <option value="Digital Desain">Digital Desain</option>
                                    <option value="Programming" selected>Programming</option>
                                @elseif($f->forum_category == "Teknik Rekayasa" && $f->forum_subcategory == "Komputer dan Jaringan")
                                    <option value="Komputer dan Jaringan">Komputer dan Jaringan</option>
                                @elseif($f->forum_category == "Seni" && $f->forum_subcategory == "Seni Tari")
                                    <option value="Seni Lukis">Seni Lukis</option>
                                    <option value="Seni Musik">Seni Musik</option>
                                    <option value="Seni Tari" selected>Seni Tari</option>
                                @elseif($f->forum_category == "Seni" && $f->forum_subcategory == "Seni Musik")
                                    <option value="Seni Lukis">Seni Lukis</option>
                                    <option value="Seni Musik" selected>Seni Musik</option>
                                    <option value="Seni Tari">Seni Tari</option>
                                @elseif($f->forum_category == "Seni" && $f->forum_subcategory == "Seni Lukis")
                                    <option value="Seni Lukis" selected>Seni Lukis</option>
                                    <option value="Seni Musik">Seni Musik</option>
                                    <option value="Seni Tari">Seni Tari</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Pesan</label>
                    <textarea name="forum_message" class="form-control" cols="30" rows="10">{{ $f->forum_message }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input class="form-control" type="file" name="forum_image" accept="image/jpg, image/jpeg, image/png">
                </div>


                <div class="d-flex justify-content-end mt-lg-4">
                    <button type="button" class="btn text-muted" data-bs-dismiss="modal">Tutup</button>
                    <input class="ml-2 w-25 reply-modal-but" type="submit" value="Edit">
                </div>
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
