<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('site.home');
    }

    public function about(){
        return view('site.about');
    }

    public function services(){
        return view('site.service');
    }

    public function save_contact(){
        return "Form submittion";
    }



}
