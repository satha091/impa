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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allevents', 'EventController@allevents')->name('events.all');
Route::get('/index', 'EventController@index')->name('events.index');
Route::resource('events', 'EventController');


Auth::routes();

