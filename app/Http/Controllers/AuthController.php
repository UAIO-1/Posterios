<?php

namespace App\Http\Controllers;

use App\Projects;
use App\User;
use Illuminate\Support\Facades\File;
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
        $user->dob = $request->dob;
        $user->gender = $request->gender;
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
            return redirect(url('/login'));
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

        $user->aboutme = $request->aboutme;

        $user->save();

        return redirect('myProfile');
    }

    public function getProfileUser(){

        $users = DB::table('users')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

        $projects = Projects::where('user_id', '=', Auth::user()->id)
                ->get();


        return view('myProfile', compact('users', 'projects'));

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
