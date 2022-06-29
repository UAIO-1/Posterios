<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Nilai</title>
    <style>

        *{
            padding: 0;
            margin: 0;
        }

        table, td, th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .center{
            text-align: center;
        }

        .text-danger{
            color: #CC0000;
        }

        .text-success{
            color: #007E33;
        }

        .pl-2{
            padding-left: 5px;
        }

        .mt-4{
            margin-top: 4px;
        }

        .mt-lg-4{
            margin-top: 30px;
        }

        .container{
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div>
        <div>
            <h5 class="center mt-lg-4">DAFTAR NILAI</h5>
            <h5 class="center mt-4">KELAS</h5>
            <h1 class="center mt-4">{{ $class->class_name }}</h1>
        </div>
        <div class="container mt-lg-4">
            <table>
                <thead>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>P1</th>
                    <th>P2</th>
                    <th>P3</th>
                    <th>Nilai</th>
                </thead>
                <tbody>
                    @foreach ($nilai as $key => $n)
                        <tr>
                            <td class="center">{{ $key+1 }}</td>
                            <td class="pl-2">{{ $n->username }}</td>
                            <td class="center">{{ $n->first_answer }}</td>
                            <td class="center">{{ $n->second_answer }}</td>
                            <td class="center">{{ $n->third_answer }}</td>
                            @if ($n->points > 90)
                                <td class="text-success center">{{ $n->points }}</td>
                            @elseif($n->points > 75)
                                <td class="text-dark center">{{ $n->points }}</td>
                            @else
                                <td class="text-danger center">{{ $n->points }}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


</div>



</body>
</html>



