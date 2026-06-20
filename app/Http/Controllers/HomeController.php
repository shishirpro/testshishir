<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // public function jeno_jinis(){

    // }
    public function home(){
        // return view('home');
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}

