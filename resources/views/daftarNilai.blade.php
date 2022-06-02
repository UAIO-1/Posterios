<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Nilai</title>
    <style>
        table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}
    </style>
</head>
<body>

    <div>
        <div>
            <h3>DAFTAR NILAI KELAS</h3>
            <h1>{{ $class->class_name }}</h1>
        </div>
        <table>
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>P1</th>
                <th>P2</th>
                <th>P3</th>
                <th>Nilai</th>
            </thead>
            <tbody>
                @foreach ($nilai as $key => $n)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $n->username }}</td>
                        <td class="center">{{ $n->first_answer }}</td>
                        <td class="center">{{ $n->second_answer }}</td>
                        <td class="center">{{ $n->third_answer }}</td>
                        @if ($n->points > 90)
                            <td class="text-success center">{{ $n->points }}</td>
                        @elseif($n->points > 75)
                            <td class="text-dark center">{{ $n->points }}</td>
                        @elseif($n->points > 65)
                            <td class="text-dark center">{{ $n->points }}</td>
                        @else
                            <td class="text-danger center">{{ $n->points }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

</div>



</body>
</html>



