<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/table', function () {
    return view('admin.categories.test');
});

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/details', function () {
    return view('pages.blog_details');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});




// Admin route start here 
Route::get('/mas', function () {
    return view('admin.admin_master');
});



Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});


Route::get('/forget-password', function () {
    return view('admin.pages.forget_password');
});
Route::get('/recover-password', function () {
    return view('admin.pages.recover_password');
});

// category route 

 Route::get('/add-category','admin\CategoryController@create');
 Route::get('/edit-category/{id}','admin\CategoryController@edit');
 Route::post('/update-category','admin\CategoryController@update');
 Route::post('/save-category','admin\CategoryController@store');
route::get('/catagory/delete/{id}','admin\CategoryController@destroy');

// Post route 
 Route::get('/add-post','admin\PostController@create');
 Route::post('/save-post','admin\PostController@store');


 Route::get('/category',function(){
     return view('admin.categories.create');
 });
 Route::get('manage-category','admin\CategoryController@index');

//
