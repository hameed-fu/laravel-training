<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function services()
    {
        return view('site.service');
    }

    public function save_contact1(Request $request)
    {

        $first_name = $request->get('fname');
        $last_name = $request->lname;

        return $first_name . ' ' . $last_name;
    }

    public function item_details($id, $name)
    {
        return "ID is: " . $name;
    }


    public function save_contact(Request $request)
    {

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

        return view('contactData', [
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);

        // return view('contactData',compact('data'));

    }


    // query builder
    public function query()
    {

        // $admissions = DB::select('select * from admissions');

        // DB::table('admissions')->insert([
        //     'name' => "Sami",
        //     'father_name' => 'ali Khan',
        //     'email' => 'sami@ggmail.com',
        //     'password' => '3434343',
        //     'phone' => "34343434",
        //     'address' => "Mardan",
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // DB::table('admissions')->where('id',24)->delete();
        // DB::table('admissions')->where('id',25)->update([
        //     'name' => "Sami Khan",
        //     'father_name' => 'Gul khan',
        //     'email' => 'sami1@ggmail.com',
        //     'password' => '343434343343',
        //     'phone' => "34343434",
        //     'address' => "Mardan City",
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);;

        // $a = DB::table('admissions')->where('id', 10)->first();
        $a = DB::table('admissions')->find(11);
        // dd($a);
        $plucked = DB::table('admissions')->pluck('name');
        $count = DB::table('admissions')->count();

        $maxFee = DB::table('admissions')->max('fee');
        $avgFee = DB::table('admissions')->avg('fee');


        $maxFeeAdmissions = DB::table('admissions')
            // ->select('id','name','father_name')

            ->where('fee', '>', 300000)
            ->distinct() // use select clause to make it distinct
            ->get();


        $minFeeAdmissions = DB::table('admissions')
            ->where('fee', '<', 300000)
            ->get();

        $ex = DB::table('admissions')->where('name', 'Betsy Bednar')->exists();
        $dsntex = DB::table('admissions')->where('name', 'Betsy Bednar')->doesntExist();

        // dd($dsntex);

        return view('admissions.index', compact('maxFeeAdmissions', 'minFeeAdmissions'));


    }



}
