<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('site.home');
});


Route::get("about", function(){
    return view('site.about');
})->name('site.about');

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
Route::match(['post','get'],'services',[SiteController::class,'services'])->name('services');
Route::post('save-contact',[SiteController::class,'save_contact'])->name('contact.save');
Route::get('item/{id}/{name}',[SiteController::class,'item_details']);

Route::post('save-contact',[SiteController::class,'save_contact'])->name('contact.submit');
 
Route::get('mypage', function(){
    return view('mypage')->with([
        'name' => 'Hasan',
        'age' => 19,
        'data' => [
            'email' => 'ali@gmail.com'
        ],
        'users' => [
            ['name' => 'Ali', 'age' => 20],
            ['name' => 'Hassan', 'age' => 22],
            ['name' => 'Ahmed', 'age' => 23],
        ],
        'countries' => [
            ['name' => 'Pakistan', 'code' => 'PK'],
            ['name' => 'India', 'code' => 'IN'],
            ['name' => 'Bangladesh', 'code' => 'BD'],
        ]
    ]);
});


Route::get('/tasks', function () {
    $email = session()->get('user.email');
    
    // session()->forget('user.email');
    Session::flush();
    return view('tasks', ['tasks' => [
        ['id' => 1, 'title' => 'Task 1', 'completed' => true],
        ['id' => 2, 'title' => 'Task 2', 'completed' => false],
        ['id' => 3, 'title' => 'Task 3', 'completed' => true],
    ]]);
});


Route::get('/projects', function () {

    session()->put('user_name', 'Hasan khan');

    Session::put('user_email','hasan@gmail.com');

    $user = [
        'name' => 'Hasan Khan',
        'email' => 'hasan@gmail.com',

    ];
   session()->put('user', $user);

//    $_SESSION['user'] = $user;

   

    return view('projects');
});


Route::get('form', [FormController::class,'form'])->name('form');
Route::post('save-form', [FormController::class,'save_form'])->name('form.save');


// query builder
Route::get('q',[SiteController::class,'query'])->name('query');

// ORM
Route::get('orm',[SiteController::class,'ormQuery'])->name('ormQuery');
Route::post('category/save',[SiteController::class,'storeCategory'])->name('categories.store');

Route::get('admissions',[SiteController::class,'admissions'])->name('admissions');


Route::prefix('admin')->group(function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('students',[AdminController::class,'students'])->name('students');
    Route::get('products',[AdminController::class,'products'])->name('products');
    Route::post('products/save',[AdminController::class,'add_product'])->name('products.save');

});
