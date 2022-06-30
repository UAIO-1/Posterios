<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
use App\User;
use App\Wishlists;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Arr;
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
            return redirect('/');
        }
        elseif(Auth::attempt($credentials) && Auth::user()->role == "Admin") {
            if($request->remember != null){
                $minute = 120;
                $rememberToken = Auth::getRecallerName();
                Cookie::queue($rememberToken, Cookie::get($rememberToken), $minute);
            }
            return redirect('/admin.dashboard');
        }
        else {
            return redirect('/');
        }

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

        return redirect('/myProfile/'.Auth::user()->id)->with('success-edit', 'Profil berhasil diubah!');
    }

    public function getProfileUser(Request $request){

        if(!Auth::check())
        {
            $users = DB::table('users')
                    ->where('users.id', '=', $request->id)
                    ->get();

            $projects = Projects::where('user_id', '=', $request->id)
                    ->get();

            $forums = Forums::where('user_id', '=', $request->id)
                    ->get();

            return view('myProfile', compact('users', 'projects', 'forums'));
        }
        else
        {
            $users = DB::table('users')
                    ->where('users.id', '=', $request->id)
                    ->get();

            $projects = Projects::where('projects.user_id', '=', $request->id)
                    ->get();

            $forums = Forums::where('user_id', '=', $request->id)
                    ->get();

            $wishlists = DB::table('wishlists')
                    ->join('projects', 'projects.id', '=', 'wishlists.project_id')
                    ->where('wishlists.user_id', Auth::user()->id)
                    ->select('*', 'wishlists.id as w_id')
                    ->get();

            $class = DB::table('joinclass')
                    ->select('class.*', 'joinclass.*')
                    ->join('class', 'class.id', '=', 'joinclass.class_id')
                    ->where('joinclass.user_id', '=', Auth::user()->id)
                    ->get();

            $classTeacher = DB::table('class')
                    ->where('user_id', '=', Auth::user()->id)
                    ->get();


            $recProgramming = DB::table('question_project')
                    ->select(DB::raw('(SUM(question_project.recommendation) / COUNT(question_project.project_id)) * 20 as Total'))
                    ->join('projects', 'question_project.project_id', '=', 'projects.id')
                    ->where('projects.user_id', '=', Auth::user()->id)
                    ->where('projects.project_subcategory', '=', 'Programming')
                    ->get();


            $recDigitalDesain = DB::table('question_project')
                    ->selectRaw('(SUM(question_project.recommendation) / COUNT(question_project.project_id))  AS Total')
                    ->join('projects', 'question_project.project_id', '=', 'projects.id')
                    ->where('projects.user_id', '=', Auth::user()->id)
                    ->where('projects.project_subcategory', '=', 'Digital Desain')
                    ->get();

            $recKomputerdanJaringan = DB::table('question_project')
                    ->selectRaw('(SUM(question_project.recommendation) / COUNT(question_project.project_id))  AS Total')
                    ->join('projects', 'question_project.project_id', '=', 'projects.id')
                    ->where('projects.user_id', '=', Auth::user()->id)
                    ->where('projects.project_subcategory', '=', 'Komputer dan Jaringan')
                    ->get();

            $recSeniMusik = DB::table('question_project')
                    ->select(DB::raw('(SUM(question_project.recommendation) / COUNT(question_project.project_id)) * 20 as Total'))
                    ->join('projects', 'question_project.project_id', '=', 'projects.id')
                    ->where('projects.user_id', '=', Auth::user()->id)
                    ->where('projects.project_subcategory', '=', 'Seni Musik')
                    ->get();


            $recSeniTari = DB::table('question_project')
                    ->selectRaw('(SUM(question_project.recommendation) / COUNT(question_project.project_id))  AS Total')
                    ->join('projects', 'question_project.project_id', '=', 'projects.id')
                    ->where('projects.user_id', '=', Auth::user()->id)
                    ->where('projects.project_subcategory', '=', 'Seni Tari')
                    ->get();

            $recSeniLukis = DB::table('question_project')
                    ->selectRaw('(SUM(question_project.recommendation) / COUNT(question_project.project_id))  AS Total')
                    ->join('projects', 'question_project.project_id', '=', 'projects.id')
                    ->where('projects.user_id', '=', Auth::user()->id)
                    ->where('projects.project_subcategory', '=', 'Seni Lukis')
                    ->get();

            $response = json_decode($recProgramming);
            $response2 = json_decode($recDigitalDesain);
            $response3 = json_decode($recKomputerdanJaringan);
            $response4 = json_decode($recSeniMusik);
            $response5 = json_decode($recSeniTari);
            $response6 = json_decode($recSeniLukis);


            $stringProgramming = $response[0]->Total;
            $stringDigitalDesain = $response2[0]->Total;
            $stringKomputerdanJaringan = $response3[0]->Total;
            $stringSeniMusik = $response4[0]->Total;
            $stringSeniTari = $response5[0]->Total;
            $stringSeniLukis = $response6[0]->Total;


            return view('myProfile', compact('users', 'projects', 'forums', 'wishlists', 'class', 'classTeacher', 'stringProgramming', 'stringDigitalDesain', 'stringKomputerdanJaringan', 'stringSeniMusik', 'stringSeniTari', 'stringSeniLukis'));
        }


    }

    public function Logout(){
        Auth::logout();

        return redirect('/');
    }

}
