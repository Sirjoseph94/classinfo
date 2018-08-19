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
Route::post('/send', 'NewsController@store')->name('send');

Route::get('/interests/{tag}', 'TagsController@index')->name('tags');


Route::get('/profile', function () {

    //Retrive user details from user id
    $user_id = auth()->user()->id;
    $user = App\User::find($user_id);
   
    return view('pages.profile')->with('user', $user);
})->name('profile');

Route::resource('news', 'NewsController');
Route::resource('interest', 'InterestController');
Route::resource('admin', 'AdminController');

// Route::get('/admin', function() {
//     if (Gate::allows('admin-access', Auth::user())) {
//         // The current user can access admin panel...
//         return view('pages.admin');
//     } else {
//         return ('You are not authorizied to access this page');
//     }
// })->name('admin');


