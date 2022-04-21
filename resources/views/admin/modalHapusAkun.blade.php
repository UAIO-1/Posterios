<div class="modal fade" id="modalHapusAkun_{{ $u2->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="modalHapusAkun_{{ $u2->id }}">Warning!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                Apakah Anda yakin ingin menghapus akun ini? <em>(ID: {{ $u2->id }}, {{ $u2->name }})</em>
            </div>
            <div class="modal-footer">
                <a href="/userDelete/{{ $u2->id }}" class="btn btn-danger">Ya</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
