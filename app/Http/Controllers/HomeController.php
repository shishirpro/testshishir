<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // public function jeno_jinis(){

    // }
    public function home(){
        // return view('home');
        return view('pages.home');
    }

    public function about(){
        $data = [
            [
                'name' => 'Jahid Hasan',
                'age' => 22,
                'address' => 'Dhaka, Bangladesh'
            ],
            [
                'name' => 'Jahid Hasan',
                'age' => 22,
                'address' => 'Dhaka, Bangladesh'
            ],
            [
                'name' => 'Jahid Hasan',
                'age' => 22,
                'address' => 'Dhaka, Bangladesh'
            ],

        ];
        return view('pages.about', compact('data'));
    }

    public function contact(){
        return view('contact');
    }

    public function second(){
        return view('second');
    }
}

