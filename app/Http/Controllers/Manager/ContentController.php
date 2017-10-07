<?php

namespace App\Http\Controllers\Manager;

use App\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function create()
    {
        $pages = Pages::where('status','active')->orderby('id','asc')->get();

        return view('manager.content.create')->withPages($pages);
    }
}
