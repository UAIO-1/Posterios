<?php

namespace App\Http\Controllers;

use App\Classes;
use App\JoinClasses;
use App\Questions;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Svg\Tag\Rect;

class ClassController extends Controller
{

    public function createClass(Request $request){

        $this->validate($request,[
            'class_name' => 'required|min:6|max:30',
            'class_code' => 'required|min:6|max:6|unique:class',
            'class_grade' => 'required',
        ]);

        $class = new Classes();
        $class->user_id = $request->user_id;
        $class->class_name = $request->class_name;
        $class->class_code = $request->class_code;
        $class->class_grade = $request->class_grade;
        $class->class_description = $request->class_description;

        $class->save();

        return redirect(url('/class'))->with('success-buat', 'Kelas berhasil dibuat!');
    }

    public function indexClass(Request $request){

        $class = DB::table('class')
                ->select('class.*', 'users.name')
                ->join('users', 'users.id', '=', 'class.user_id')
                ->get();

        $stats = DB::table('joinclass')
                ->join('class', 'class.id', '=', 'joinclass.class_id')
                ->where('joinclass.class_id', '=', $request->id)
                ->first();

        $classes = Classes::select('id')->where('user_id', Auth::user()->id)->get();
        $classArr = Arr::flatten($classes->toArray());

        $join = JoinClasses::select('class_id')->where('user_id', Auth::user()->id)->get();
        $joinArr = Arr::flatten($join->toArray());

        $search = $request->get('s_class');
        $class = Classes::where("class_code",'like','%'.$search.'%')->get();


        return view('/class', ['classes' => $classArr, 'join' => $joinArr], compact('class', 'stats'));
    }

    public function getClassID(Request $request){

        $class = DB::table('class')
                    ->where('id','=', $request->id)
                    ->get();

        $host = DB::table('class')
                    ->select('users.*')
                    ->join('users', 'users.id', '=', 'class.user_id')
                    ->where('class.id', '=', $request->id)
                    ->get();

        $users = DB::table('users')
                    ->select('users.*', 'joinclass.*')
                    ->join('joinclass', 'joinclass.user_id', '=', 'users.id')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->where('users.role', '!=', 'Teacher')
                    ->where('joinclass.user_status', '!=', 'null')
                    ->orderBy('users.name', 'asc')
                    ->get();

        $stats = DB::table('joinclass')
                    ->join('class', 'class.id', '=', 'joinclass.class_id')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->first();

        $statsUser = DB::table('users')
                    ->select('users.*', 'joinclass.*')
                    ->join('joinclass', 'joinclass.user_id', '=', 'users.id')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->where('users.role', '!=', 'Teacher')
                    ->where('joinclass.user_status', '=', null)
                    ->orderBy('users.name', 'asc')
                    ->get();

        $statsCtr = DB::table('joinclass')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->where('user_status', '=', null)
                    ->count();

        $usersCtr = DB::table('users')
                    ->select('users.*')
                    ->join('joinclass', 'joinclass.user_id', '=', 'users.id')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->where('users.role', '!=', 'Teacher')
                    ->where('joinclass.user_status', '!=', 'null')
                    ->count();

        $projects = DB::table('projects')
                    ->where('projects.class_id', '=', $request->id)
                    ->orderBy('projects.created_at', 'asc')
                    ->get();

        $doneNilai = Questions::select('project_id')->where('user_id', Auth::user()->id)->get();
        $doneNilaiArr = Arr::flatten($doneNilai->toArray());

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


        return view('/classDetail', ['doneNilai' => $doneNilaiArr], compact('class', 'users', 'host', 'usersCtr', 'projects', 'stats', 'statsUser', 'statsCtr', 'nilai'));
    }


    public function approveStudent(Request $request){

        $class = JoinClasses::where('id', $request->id)->first();

        $class->user_status = "Approved";

        $class->save();

        return redirect('/classDetail/'.$class->class_id);
    }

    public function joinClass(Request $request){

        $class = new JoinClasses();

        $class->user_id = $request->user_id;
        $class->class_id = $request->class_id;
        $class->class_code = $request->class_code;


        $class->save();

        return redirect('/class');

    }

    public function selectClass(Request $request){


        $join = JoinClasses::select('joinclass.class_id', 'joinclass.class_code')->where('joinclass.user_id', Auth::user()->id)->get();
        $joinArr = Arr::flatten($join->toArray());

        $class = DB::table('class')
                ->get();


        return view('/post', ['join' => $joinArr], compact('class'));
    }
}
