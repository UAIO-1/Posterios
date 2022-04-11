<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function doLogin(Request $request){

        $credentials = $request->only('email', 'password');

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            if($request->remember != null){
                $minute = 120;
                $rememberToken = Auth::getRecallerName();
                Cookie::queue($rememberToken, Cookie::get($rememberToken), $minute);
            }
            return redirect()->intended('/');
        }
        else {
            return redirect()->intended('/');
        }

    }

    public function Logout(){
        Auth::logout();

        return redirect('/');
    }

    public function editProfile(Request $request){

        $user = User::where('id', Auth::user()->id)->first();

        if ($request->hasFile('image')) {
            $path = 'storage/images/user'.$user->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $path = $file->store('images/user','public');
            $file->move('storage/images/user',  $path);
            $user->image = $path;
        }

        $user->jurusan = $request->jurusan;
        $user->grade = $request->grade;
        $user->sekolah = $request->sekolah;
        $user->aboutme = $request->aboutme;

        $user->save();

        return redirect('/myProfile/'.Auth::user()->id);
    }

    public function getProfileUser(Request $request){

        $users = DB::table('users')
                ->where('users.id', '=', $request->id)
                ->get();

        $projects = Projects::where('user_id', '=', $request->id)
                ->get();

        $forums = Forums::where('user_id', '=', $request->id)
                ->get();


        return view('myProfile', compact('users', 'projects', 'forums'));
    }

    public function getProfileOther(Request $request){

        $users = DB::table('users')
                ->where('users.id', '=', $request->id)
                ->get();

        $projects = Projects::where('user_id', '=', $request->id)
                ->get();

        $forums = Forums::where('user_id', '=', $request->id)
                ->get();



        return view('myProfile', compact('users', 'projects', 'forums'));
    }

    public function getID($id){
        $users = DB::table('users')
                ->where('id','=',$id)
                ->get();
        return view('changepassword', ['users' => $users]);
    }

    public function changePassword(Request $request){
        DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->update(['password' => Hash::make($request->password)]);
        return redirect('/profile');
    }

}
