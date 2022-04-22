<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
use App\Wishlists;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class SearchController extends Controller
{
    public function filterForum(){
        $forums = Forums::where('forum_subcategory', Request::get('forum_select'))->simplePaginate(15);

        $users = DB::table("users")
            ->select("users.image", "users.gender")
            ->join("forum", "forum.user_id", "=", "users.id")
            ->first();

        return view('/forum', compact('forums', 'users'));
    }

    public function filterProject(){
        if(!Auth::check())
        {
            $projects = Projects::where('project_subcategory', Request::get('project_select'))->simplePaginate(15);

            $users = DB::table("projects")
                ->select("users.image", "users.gender")
                ->join("users", "projects.user_id", "=", "users.id")
                ->first();
            }
        else
        {
            $projects = Projects::where('project_subcategory', Request::get('project_select'))->simplePaginate(15);

            $users = DB::table("projects")
                ->select("users.image", "users.gender")
                ->join("users", "projects.user_id", "=", "users.id")
                ->first();

            $wishlists = Wishlists::select('project_id')->where('user_id', Auth::user()->id)->get();
            $wishlistsArr = Arr::flatten($wishlists->toArray());
        }

        return view('/explore', ['wishlists'=>$wishlistsArr], compact('projects', 'users'));
    }

}
