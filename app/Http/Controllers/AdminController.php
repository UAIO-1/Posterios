<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
use App\Questions;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function count() {

        $usersCount = Users::where('id', '>', 1)->count();
        $projectsCount = Projects::where('id', '>', 0)->count();
        $forumsCount = Forums::where('id', '>', 0)->count();
        $pendingCount = User::where('status', '=', null)->Where('id', '>', 1)->count();

        $users = Users::where('id', '>', 1)->get();
        $projects = Projects::where('id', '>', 0)->get();
        $forums = Forums::where('id', '>', 0)->get();

        return view('/admin.dashboard', compact('usersCount', 'projectsCount', 'forumsCount', 'users', 'projects', 'forums', 'pendingCount'));
    }

    public function indexUsers(Request $request) {

        $users = Users::where('id', '>', 1)->get();

        $users2 = DB::table('users')->where('id', '=', $request->id)->get();

        $usersCount = Users::where('id', '>', 1)->count();

        $pending = User::where('status', '=', null)->Where('id', '>', 1)->get();

        $pendingCount = User::where('status', '=', null)->Where('id', '>', 1)->count();

        $projects = DB::table('projects')
            ->join('users', 'users.id', '=', 'projects.user_id')
            ->where('projects.user_id', '=', $request->id)
            ->count();

        $projectsUser = DB::table('projects')
            ->join('users', 'users.id', '=', 'projects.user_id')
            ->where('projects.user_id', '=', $request->id)
            ->get();

        $search = $request->get('s_user');
        $users = User::where("name",'like','%'.$search.'%')->get();

        return view('/admin.users', compact('users', 'users2', 'projects', 'projectsUser', 'usersCount', 'pending', 'pendingCount'));
    }

    public function indexProjects(Request $request) {

        $projects = Projects::all();

        $projectsCount = Projects::where('id', '>', 0)->count();

        $projects2 = DB::table('projects')->where('id', '=', $request->id)->get();

        $questions = Questions::where('project_id', '=', $request->id)->get();

        $search = $request->get('s_project');
        $projects = Projects::where("project_title",'like','%'.$search.'%')->get();

        return view('/admin.projects', compact('projects', 'projectsCount', 'projects2', 'questions'));
    }

    public function indexForums(Request $request) {

        $forums = Forums::all();

        $forumsCount = Forums::where('id', '>', 0)->count();

        $forums2 = DB::table('forum')->where('id', '=', $request->id)->get();

        $search = $request->get('s_forum');
        $forums = Forums::where("forum_title",'like','%'.$search.'%')->get();



        return view('/admin.forums', compact('forums', 'forumsCount', 'forums2'));
    }

    public function userDelete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin.users');
    }

    public function forumDelete($id){
        DB::table('forum')->where('id', $id)->delete();
        return redirect('/admin.forums');
    }

    public function indexPending(Request $request){

        $users = User::where('status', '=', null)->Where('id', '>', 1)->get();

        $pendingCount = User::where('status', '=', null)->Where('id', '>', 1)->count();

        return view('/admin.verifikasiuser', compact('users', 'pendingCount'));
    }

    public function approve(Request $request){

        $users = User::where('id', $request->id)->first();

        $users->status = "Approved";

        $users->save();

        return redirect('/admin.verifikasiuser');
    }

    public function verifDelete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin.verifikasiUser');
    }

}
