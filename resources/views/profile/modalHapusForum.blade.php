<div class="modal fade" id="modalHapusForum_{{ $f->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="modalHapusForum_{{ $f->id }}">Warning!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                Apakah Anda yakin ingin menghapus forum ini?
            </div>
            <div class="modal-footer">
                <a href="/forumDeleteUser/{{ $f->id }}" class="btn btn-danger">Ya</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
