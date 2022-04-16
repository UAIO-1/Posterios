<div class="modal fade" id="modalFeedbackDetail_{{ $q->id }}" tabindex="-1" aria-labelledby="modalFeedbackDetail" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h5 class="text-center" id="modalFeedbackDetail">
                <strong>Penilaian dari</strong>
                <h6 class="text-center"><em style="color: #259df3"><a href="/myProfile/{{ $p->user_id }}">{{ $q->name }}</a></em></h6>
            </h5>
            <hr>
            @if($p->project_subcategory == "Programming")
                @include('feedbackProject.programming')

            @elseif ($p->project_subcategory == "Digital Desain")
                @include('feedbackProject.digitaldesain')

            @elseif ($p->project_subcategory == "Komputer dan Jaringan")
                @include('feedbackProject.komputerdanjaringan')

            @elseif ($p->project_subcategory == "Seni Tari")
                @include('feedbackProject.senitari')

            @elseif ($p->project_subcategory == "Seni Lukis")
                @include('feedbackProject.senilukis')

            @elseif ($p->project_subcategory == "Seni Musik")
                @include('feedbackProject.senimusik')

            @endif
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
