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

    public function save_contact1(Request $request){

        $first_name = $request->get('fname');
        $last_name = $request->lname;

        return $first_name.' '. $last_name;
    }

    public function item_details($id, $name){
        return "ID is: ".$name;
    }


    public function save_contact(Request $request){

        // $name = $request->name;
        // $email = $request->email;
        // $message = $request->message;

        // $name = $_POST['name'];

        // $data = $request->all();
        // $data = $request->only(['name', 'email']);
        $data = $request->except(['_token']);
        $ipAddress = $request->ip();
        $data = $request->collect();

        $name = $request->input('name', 'Sally');
        // return response($name)->header('Content-Type', 'text/plain');;

         //dd($name, $email, $message);

         return view('contactData',[
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
         ]);

        // return view('contactData',compact('data'));

    }



}
