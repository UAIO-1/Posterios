<?php

namespace App\Http\Controllers;

use App\Classes;
use App\JoinClasses;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClassController extends Controller
{

    public function createClass(Request $request){

        $class = new Classes();
        $class->user_id = $request->user_id;
        $class->class_name = $request->class_name;
        $class->class_code = $request->class_code;
        $class->class_grade = $request->class_grade;
        $class->class_description = $request->class_description;
        $class->class_password = Hash::make($request->class_password);

        $class->save();

        return redirect(url('/class'));
    }

    public function indexClass(Request $request){

        $class = DB::table('class')
                ->select('class.*', 'users.name', 'joinclass.user_status')
                ->join('users', 'users.id', '=', 'class.user_id')
                ->join('joinclass', 'joinclass.class_id', '=', 'class.id')
                ->get();

        $classes = Classes::select('id')->where('user_id', Auth::user()->id)->get();
        $classArr = Arr::flatten($classes->toArray());

        $join = JoinClasses::select('class_id')->where('user_id', Auth::user()->id)->get();
        $joinArr = Arr::flatten($join->toArray());

        $search = $request->get('s_class');
        $class = Classes::where("class_code",'like','%'.$search.'%')->get();


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
                    ->select('projects.project_image', 'projects.*')
                    ->join('class', 'class.id', '=', 'projects.class_id')
                    ->where('projects.class_id', '=',  $request->id)
                    ->where('projects.class_id', '!=', null)
                    ->orderBy('projects.created_at', 'desc')
                    ->get();

        return view('/classDetail', compact('class', 'users', 'host', 'usersCtr', 'projects', 'stats', 'statsUser','statsCtr'));
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
