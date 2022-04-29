<div class="modal fade" id="modalDetailPending_{{ $u->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDetailPending_{{ $u->id }}">Verification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-flex justify-content-end">
                @php
                    Carbon\Carbon::setLocale('id');
                @endphp
                <div style="padding-right: 10px">
                    @if ($u->email_verified_at == null)
                    <p class="badge bg-danger">Not Verified Yet.</p>
                    @else
                    <p class="badge bg-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                        Email Verified
                    </p>
                    @endif
                </div>
                <div style="padding-right: 10px">
                    @if ($u->status == null)
                    <p class="badge bg-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                            <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                        </svg>
                        Waiting Approval
                    </p>
                    @else
                    <param class="badge bg-success">
                        Approved
                    </p>
                    @endif
                </div>
                <p class="text-muted">{{ Carbon\Carbon::parse($u->created_at)->diffForHumans()}}</p>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <div class="text-center">
                        <p><strong>Foto Selfie:</strong></p>
                    </div>
                    <img src="{{ asset('storage/'.$u->image_selfie) }}" alt="selfie" class="image">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-lg-4">
                <div>
                    <div class="text-center">
                        @if ($u->role == "Student")
                            <p><strong>Foto Kartu Pelajar:</strong></p>
                        @else
                            <p><strong>Foto Kartu Tanda Guru / ID Card:</strong></p>
                        @endif
                    </div>
                    <img src="{{ asset('storage/'.$u->image_card) }}" alt="card" class="image">
                </div>
            </div>
            <hr>
            <table>
                <tr>
                    <th>Fullname</th>
                    <td>{{ $u->name }}</td>
                </tr>
                <tr>
                    <th>E-Mail Address</th>
                    <td>{{ $u->email }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $u->gender }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ $u->role }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $u->dob }}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{ \Carbon\Carbon::parse($u->dob)->diff(\Carbon\Carbon::now())->format('%y') }}</td>
                </tr>
                <tr>
                    <th>Grade</th>
                    <td>{{ $u->grade }}</td>
                </tr>
                <tr>
                    <th>School</th>
                    <td>{{ $u->sekolah }}</td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <form action={{ url('/approve') }} method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $u->id }}">
                <input type="submit" class="btn btn-primary" value="Approved">
            </form>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
