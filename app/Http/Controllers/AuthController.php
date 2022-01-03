<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister() {
        return view('register');
    }

    public function showLogin() {
        return view('login');
    }

    public function RegisterPost(Request $request){

        $this->validate($request,[
            'username' => 'required|min:6|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password',
            'gender' => 'required',
            'dob' => 'required',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->role = "User";
        $user->save();

        return redirect(url('/login'));
    }

    public function doLogin(Request $request){

        $credential = $request->only('email','password');

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($request->remember != null){
            Auth::attempt($credential, true);

            $minute = 120;
            $rememberToken = Auth::getRecallerName();
            Cookie::queue($rememberToken, Cookie::get($rememberToken), $minute);
        }
        else{
            Auth::attempt($credential);
        }

        if($credential == null) {
            return redirect(url('/login'))->with('failed', true);
        }

        if(Auth::user()->role=='Admin'){
            return redirect(('admin.adminHome'));
        }
        else {
            return redirect('/');
        }

    }


    public function Logout(){
        Auth::logout();

        return redirect('/login');
    }

    public function getProfileUser(){
        $users = DB::table('users')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

        return view('profile', ['users' => $users]);

    }

}
