<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{

    public function createClass(Request $request){

        $class = new Classes();
        $class->user_id = $request->user_id;
        $class->class_name = $request->class_name;
        $class->class_code = $request->class_code;
        $class->class_description = $request->class_description;
        $class->class_password = $request->class_password;

        $class->save();

        return redirect(url('/class'));
    }
}
