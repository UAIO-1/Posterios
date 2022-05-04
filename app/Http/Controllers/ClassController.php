<?php

namespace App\Http\Controllers;

use App\Classes;
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

        return view('/class', ['classes' => $classArr], compact('class'));
    }

    public function getClassID($id){
        $class = DB::table('class')
                    ->where('id','=', $id)
                    ->get();

        return view('/classDetail', compact('class'));
    }
}
