<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function show_welcome(){
        return view('home.welcome');
    }


    public function show_about(){
        return view('home.about');
    }

    public function show_contact_us(){
        return view('home.contact');
    }

}
