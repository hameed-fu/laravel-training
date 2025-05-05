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