<?php

namespace App\Http\Controllers;

use App\Forums;
use Illuminate\Support\Facades\Request;


class SearchController extends Controller
{
    public function filterForum(){
        $forums = Forums::where('forum_category', Request::get('forum_select'))->simplePaginate(15);
        return view('/forum', compact('forums'));
    }
}
