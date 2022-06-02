<div class="modal fade" id="daftarnilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="daftarnilai">Daftar Nilai Kelas <strong></strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kriteria 1</th>
                    <th>Kriteria 2</th>
                    <th>Kriteria 3</th>
                    <th>Rekomendasi</th>
                    <th>point</th>
                </thead>
                <tbody>
                    @foreach ($nilai as $key => $n)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $n->username }}</td>
                            <td>{{ $n->first_answer }}</td>
                            <td>{{ $n->second_answer }}</td>
                            <td>{{ $n->third_answer }}</td>
                            <td>{{ $n->recommendation }}</td>
                            @if ($n->points > 90)
                                <td class="text-success">{{ $n->points }}</td>
                            @elseif($n->points > 75)
                                <td class="text-dark">{{ $n->points }}</td>
                            @elseif($n->points > 65)
                                <td class="text-dark">{{ $n->points }}</td>
                            @else
                                <td class="text-danger">{{ $n->points }}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="{{ url('/printNilai') }}" class="btn btn-primary">Print</a>
        </div>
      </div>
    </div>
  </div>
