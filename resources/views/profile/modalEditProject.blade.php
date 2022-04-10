<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="modal fade" id="exampleModalEditProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #259df3">Edit Proyek</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  action={{ url('/editProject') }} method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Title</label>
                        <input class="form-control" type="text" name="project_title" value="{{ $p->project_title }}">
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Category</label> <span class="text-danger">*</span>
                                <select class="ml-4 form-select" id="main" name="project_category">
                                    <option selected disabled>Select Category</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                    <option value="Seni">Seni</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Sub Category</label> <span class="text-danger">*</span>
                                <select name="project_subcategory" class="ml-4 form-select" id="sub">
                                    <option selected disabled>Select Sub Category</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Link</label>
                        <input class="form-control" type="url" name="project_link" value="{{ $p->project_link }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile" name="project_image" accept="image/jpg, image/jpeg, image/png">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="project_description" rows="10">{{ $p->project_description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Video</label>
                        <input class="form-control" type="file" id="formFile" name="project_video" accept="video/mp4">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-transparent" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn but-save text-light" style="background-color: #259df3" value="Save Changes">
            </div>
            </form>
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
