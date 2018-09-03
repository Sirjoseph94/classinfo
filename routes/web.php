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


//Resource::news();
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/send', 'AdminController@store')->name('send');

Route::post('/interests/add', 'TagsController@add');
Route::post('/interests/delete/{id}', 'TagsController@delete');
Route::get('/interests', 'TagsController@index');
Route::get('/interests/fetch', 'TagsController@fetch');



Route::resource('news', 'NewsController');
Route::resource('admin', 'AdminController');
Route::resource('profile', 'ProfileController');

// Route::get('/admin', function() {
//     if (Gate::allows('admin-access', Auth::user())) {
//         // The current user can access admin panel...
//         return redirect('/admin');
//     } else {
//         return ('You are not authorizied to access this page');
//     }
// })->name('admin');


