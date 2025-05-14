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

    public function save_contact(Request $request){

        $first_name = $request->get('fname');
        $last_name = $request->lname;

        return $first_name.' '. $last_name;
    }

    public function item_details($id, $name){
        return "ID is: ".$name;
    }



}
