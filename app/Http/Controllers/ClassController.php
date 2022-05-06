<?php

namespace App\Http\Controllers;

use App\Classes;
use App\JoinClasses;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{

    public function createClass(Request $request){

        $class = new Classes();
        $class->user_id = $request->user_id;
        $class->class_name = $request->class_name;
        $class->class_code = $request->class_code;
        $class->class_grade = $request->class_grade;
        $class->class_description = $request->class_description;
        $class->class_password = $request->class_password;

        $class->save();

        return redirect(url('/class'));
    }

    public function indexClass(){
        $class = DB::table('class')
                ->select('class.*', 'users.name')
                ->join('users', 'users.id', '=', 'class.user_id')
                ->get();

        $classes = Classes::select('id')->where('user_id', Auth::user()->id)->get();
        $classArr = Arr::flatten($classes->toArray());

        $join = JoinClasses::select('class_id')->where('user_id', Auth::user()->id)->get();
        $joinArr = Arr::flatten($join->toArray());

        return view('/class', ['classes' => $classArr, 'join' => $joinArr], compact('class'));
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
                    ->select('users.*')
                    ->join('joinclass', 'joinclass.user_id', '=', 'users.id')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->where('users.role', '!=', 'Teacher')
                    ->orderBy('users.name', 'asc')
                    ->get();

        $usersCtr = DB::table('users')
                    ->select('users.*')
                    ->join('joinclass', 'joinclass.user_id', '=', 'users.id')
                    ->where('joinclass.class_id', '=', $request->id)
                    ->where('users.role', '!=', 'Teacher')
                    ->count();


        $projects = DB::table('projects')
                    ->select('projects.project_image', 'projects.*')
                    ->join('class', 'class.id', '=', 'projects.class_id')
                    ->where('projects.class_id', '=',  $request->id)
                    ->where('projects.class_id', '!=', null)
                    ->orderBy('projects.created_at', 'desc')
                    ->get();

        return view('/classDetail', compact('class', 'users', 'host', 'usersCtr', 'projects'));
    }

    public function joinClass(Request $request){
        $class = new JoinClasses();

        $class->user_id = $request->user_id;
        $class->class_id = $request->class_id;

        $class->save();

        return redirect('/classDetail/'.$class->class_id);
    }

    public function selectClass(Request $request){


        $join = JoinClasses::select('joinclass.class_id', 'joinclass.class_code')->where('joinclass.user_id', Auth::user()->id)->get();
        $joinArr = Arr::flatten($join->toArray());

        $class = DB::table('class')
                ->get();


        return view('/post', ['join' => $joinArr], compact('class'));
    }


}
