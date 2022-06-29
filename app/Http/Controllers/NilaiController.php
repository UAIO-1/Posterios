<?php

namespace App\Http\Controllers;
use App\Exports\NilaiExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Export;
class NilaiController extends Controller
{
    public function getExcel(Request $request){

        $class = DB::table('class')
        ->where('id','=', $request->id)
        ->first();

        $nilai = DB::table('projects')
        ->select('class.*', 'projects.name as username', 'question_project.*', 'users.*')
        ->join('question_project', 'question_project.project_id', '=', 'projects.id')
        ->join('users', 'users.id', '=', 'question_project.user_id')
        ->join('class', 'class.id', '=', 'projects.class_id')
        ->where('class.id', '=', $request->id)
        ->where('users.role', '=', 'Teacher')
        ->where('question_project.user_id', '=', Auth::user()->id)
        ->orderBy('username', 'asc')
        ->get();

        return view('/daftarNilaiExcel', compact('nilai', 'class'));
    }

    public function exportExcel(){
        return Export::download(new NilaiExport,'daftarNilaiExcel.xls');
    }
}
