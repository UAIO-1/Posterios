<div class="modal fade" id="passwordKelas_{{ $c->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passwordKelas_{{ $c->id }}">Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{ url('/joinClass') }} method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="class_id" value="{{ $c->id }}">
</form>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="curPass">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Gabung">

        </div>
      </div>
    </div>
  </div>

