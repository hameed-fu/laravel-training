<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


 
Route::get('/', function () {
    return view('welcome');
});


Route::get("about", function(){
    return "I am about page";
});

// Route::get('contact', function(){
//     return "I am contact page";
// });

Route::get("user/{name}/{age}",function($name, $age){
    return "I am $name and my age is $age";

});



Route::match(['get','post'],'contact/submit',function(){
    return "I am contact submit page";
});


Route::get("user/{name?}",function($name = null){
    return "my name is $name";

});

// Route::redirect('contact','about',301);

// Route::view('about','about');
Route::view('student','student',['name' => 'Ali khan','age' => 22]);

Route::get('/demo/{id}', function (string $id) {
    echo $id;
})->whereUuid('id');




Route::prefix('dashboard')->group(function(){


    Route::get('about',function(){
        return view('about',['name' => 'Hassan']);
    })->name('about');
    
    Route::get('contact/{contact}/{email}',function($contact,$email){
        return view('contact',['name' => 'Hassan']);
    })->name('contact_index');

});

Route::get('home',[SiteController::class,'home']);
Route::get('about-us',[SiteController::class,'about']);
Route::match(['post','get'],'services',[SiteController::class,'services']);
Route::post('save-contact',[SiteController::class,'save_contact'])->name('contact.save');
