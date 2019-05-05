<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return "hello world";
});

Route::get('/hello', function() {
    return "hello world from <strong>hello</strong> page";
});

// Route::get('/about', function() {
//     return view('pages.about');
// });

Route::get('/users/{id}/{name}', function($id, $name) {
    return "this is user with name : " . $name . " and  id : " . $id . " .";
});

// Route::get('/index', 'PagesController@index');
Route::get('/index', 'PagesController@getIndexView');
Route::get('/about', 'PagesController@getAboutView');
Route::get('/services', 'PagesController@getServicesView');