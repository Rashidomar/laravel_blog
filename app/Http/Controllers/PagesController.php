<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to the homepage";
        return view('pages/home')->with("title", $title);
    }

    public function about(){
        return view('pages/about');
    }

    public function service(){
        return view('pages/service');
    }
}
