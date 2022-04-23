<div class="modal fade" id="createReply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header border-0">
        <h5 class="modal-title" id="createReply">Balas Forum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="container" method="post" action={{url('/postReplyForum')}} enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="forum_id" value="{{ $f->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="username" value="{{ Auth::user()->name }}">

                <div class="mb-3">
                    <label>Pesan</label><span class="text-danger">*</span>
                    <textarea name="reply_message" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="reply_image" class="form-control">
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
