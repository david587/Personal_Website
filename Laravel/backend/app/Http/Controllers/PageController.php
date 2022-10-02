<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view("frontend.About");
    }

    public function project(){
        return view("frontend.Project");
    }

    public function index(){
        return view("frontend.index");
    }
}
