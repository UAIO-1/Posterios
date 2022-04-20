<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
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

        $users = Users::where('id', '>', 1)->get();
        $projects = Projects::where('id', '>', 0)->get();

        return view('/admin.dashboard', compact('usersCount', 'projectsCount', 'forumsCount', 'users', 'projects'));
    }

    public function indexUsers(Request $request) {

        $users = Users::where('id', '>', 1)->get();

        $users2 = DB::table('users')->where('id', '=', $request->id)->get();

        $projects = DB::table('projects')
            ->join('users', 'users.id', '=', 'projects.user_id')
            ->where('projects.user_id', '=', $request->id)
            ->count();

        $projectsUser = DB::table('projects')
            ->join('users', 'users.id', '=', 'projects.user_id')
            ->where('projects.user_id', '=', $request->id)
            ->get();

        return view('/admin.users', compact('users', 'users2', 'projects', 'projectsUser'));
    }

}
