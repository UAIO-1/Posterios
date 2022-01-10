<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Change Profile Picture</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{url('/editProfile')}} method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>

        </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Change">
                </div>
            </form>
      </div>
    </div>
  </div>
