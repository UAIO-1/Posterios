<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;


class SearchController extends Controller
{
    public function filterForum(){
        $forums = Forums::where('forum_subcategory', Request::get('forum_select'))->simplePaginate(15);

        return view('/forum', compact('forums'));
    }

    public function filterProject(){
        $projects = Projects::where('project_subcategory', Request::get('project_select'))->simplePaginate(15);
        return view('/explore', compact('projects'));
    }
}
