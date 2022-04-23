<div class="modal fade" id="modalEditReplyForum_{{ $r->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header border-0">
        <h5 class="modal-title" id="modalEditReplyForum_{{ $r->id }}">Edit Balasan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="container" method="post" action={{url('/editReplyForum')}} enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $r->id }}">

                <div class="mb-3">
                    <label>Pesan</label>
                    <textarea name="reply_message" class="form-control" cols="30" rows="10">{{ $r->reply_message }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="reply_image" class="form-control" accept="image/jpg, image/jpeg, image/png">
                </div>

                <div class="d-flex justify-content-end mt-lg-4">
                    <button type="button" class="btn text-muted" data-bs-dismiss="modal">Tutup</button>
                    <input class="ml-2 reply-modal-but" type="submit" value="Balas">
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
