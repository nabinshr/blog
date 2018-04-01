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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('home');
});

Route::resource('blogs', 'Blog\BlogController');
// Route::get('blogs', 'Blog\BlogController@index')->name('blogs.index');
// Route::get('blogs/create', 'Blog\BlogController@create');
// Route::post('blogs', 'Blog\BlogController@store');

Route::post('/contact/submit','MessagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
