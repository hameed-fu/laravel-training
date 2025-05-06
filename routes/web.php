<?php

use Illuminate\Support\Facades\Route;


 
Route::get('/', function () {
    return view('welcome');
});


Route::get("about", function(){
    return "I am about page";
});

Route::get('contact', function(){
    return "I am contact page";
});

Route::get("user/{name}/{age}",function($name, $age){
    return "I am $name and my age is $age";

});



Route::match(['get','post'],'contact/submit',function(){
    return "I am contact submit page";
});


Route::get("user/{name?}",function($name = null){
    return "my name is $name";

});

Route::redirect('contact','about',301);

Route::view('about','about');
Route::view('student','student',['name' => 'Ali khan','age' => 22]);
