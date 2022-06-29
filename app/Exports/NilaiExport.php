<?php


namespace App\Exports;

use App\Questions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class NilaiExport implements FromCollection, WithHeadings, WithCustomStartCell, WithStyles, WithColumnWidths{



    public function columnWidths(): array
    {
        return [
            'B' => 35,
            'C' => 30,
            'G' => 30,
            'H' => 30,
            'I' => 20,
            'K' => 30,
            'L' => 30,

        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [

            2    => ['font' => ['bold' => true, 'size' => 18]],
            3    => ['font' => ['bold' => true, 'size' => 30]],
            4    => ['font' => ['bold' => true, 'size' => 14]],
            5    => ['font' => ['bold' => true, 'size' => 14]],
            7    => ['font' => ['bold' => true, 'size' => 14]],
        ];
    }


    public function headings(): array

        {
            $id = request('id');

            $rangeHeadings = DB::table('class')
                    ->where('id','=', $id)
                    ->first();

            $usersCtr = DB::table('users')
                    ->select('users.*')
                    ->join('joinclass', 'joinclass.user_id', '=', 'users.id')
                    ->where('joinclass.class_id', '=', $id)
                    ->where('users.role', '!=', 'Teacher')
                    ->where('joinclass.user_status', '!=', 'null')
                    ->count();

            return [
                [
                    'DAFTAR NILAI KELAS',
                ],
                [
                    $rangeHeadings->class_name,
                ],
                [
                    'Kode Kelas: #'.$rangeHeadings->class_code,
                ],
                [
                    'Kelas: '.$rangeHeadings->class_grade,
                ],
                [
                    'Jumlah Siswa: '. $usersCtr
                ],
                [

                ],
                [
                    'No.',
                    'Nama Siswa',
                    'Judul Tugas/Project',
                    'K1',
                    'K2',
                    'K3',
                    'Kelebihan',
                    'Kekurangan3',
                    'Rekomendasi',
                    'Nilai',
                    'Diposting pada',
                    'Diubah Pada',
                ],


            ];
        }

    public function collection()
    {

        $id = request('id');

        DB::statement(DB::raw("SET @row = '0'"));

        return Questions::
        select(DB::raw("@row:=@row+1 as No"),
        'projects.name as username',
        'projects.project_title',
        'question_project.first_answer',
        'question_project.second_answer',
        'question_project.third_answer',
        'question_project.strength',
        'question_project.weakness',
        'question_project.recommendation',
        'question_project.points',
        'question_project.created_at',
        'question_project.updated_at'
        )


        ->join('projects', 'question_project.project_id', '=', 'projects.id')
        ->join('users', 'users.id', '=', 'question_project.user_id')
        ->join('class', 'class.id', '=', 'projects.class_id')
        ->where('class.id', '=', $id)
        ->where('users.role', '=', 'Teacher')
        ->where('question_project.user_id', '=', Auth::user()->id)
        ->orderBy('No', 'asc')
        ->orderBy('projects.name', 'ASC')
        ->get();


    }

    public function startCell(): string
    {
        return 'A2';
    }
}

// class NilaiExport implements FromView, WithHeadings
// {



    // public function view(): View
    // {

    //     $class_id = request('class_id');
    //     $id = request('id');

    //     $class = DB::table('class')
    //     ->where('id','=', $id)
    //     ->first();

    //     $nilai = DB::table('projects')
    //     ->select('class.*', 'projects.name as username', 'question_project.*', 'users.*')
    //     ->join('question_project', 'question_project.project_id', '=', 'projects.id')
    //     ->join('users', 'users.id', '=', 'question_project.user_id')
    //     ->join('class', 'class.id', '=', 'projects.class_id')
    //     ->where('class.id', '=', $id)
    //     ->where('users.role', '=', 'Teacher')
    //     ->where('question_project.user_id', '=', Auth::user()->id)
    //     ->orderBy('username', 'asc')
    //     ->get();


    //     return view('daftarNilaiExcel', compact('class', 'nilai'));

    // }



// }
