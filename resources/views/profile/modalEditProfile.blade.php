<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="modal fade" id="EditProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditProfileModal" style="color: #259df3">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  action={{ url('/editProfile') }} method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                    <label for="formFile" class="form-label">Grade</label>
                    <div class="mb-3">
                        <select name="grade" class="form-select">
                            @if ($u->grade == null)
                                <option selected>Select Grade</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            @elseif($u->grade == 10)
                                <option value="10" selected>10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            @elseif($u->grade == 12)
                                <option value="10">10</option>
                                <option value="11" selected>11</option>
                                <option value="12">12</option>
                            @else
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12" selected>12</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">School</label>
                        <input class="form-control" type="text" name="sekolah" value="{{ $u->sekolah }}" placeholder="SMP 06 Satu Bangsa">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Preferred Major</label>
                        <input class="form-control" type="text" name="jurusan" value="{{ $u->jurusan }}" placeholder="Teknik Industri, Teknik Informatika">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Profile Picture</label>
                        <input class="form-control" type="file" id="formFile" name="image" accept="image/jpg, image/jpeg, image/png">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">About Me</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="aboutme" rows="10">{{ $u->aboutme }}</textarea>
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
