<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreFormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    function form()
    {
    
        return view('form');
    }


    public function save_form(StoreFormRequest $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|max:5',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'password' => 'required',
        //     'address' => 'required',
        // ]);

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:20|string|alpha',
        //     'email' => 'required|email',
        //     'phone' => 'required|numeric',
        //     'password' => 'required',
        //     'address' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/form')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $data = $request->all();
        dd($data);
    }
    
}
