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

use App\Participants;
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


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allevents', 'GuestController@index')->name('guest.all');
Route::get('/event/{event}', 'GuestController@show')->name('guest.show');
Route::get('/event/{event}/register', 'GuestController@register')->name('guest.register');
Route::post('/event/{event}', 'GuestController@store')->name('guest.store');
// Route::get('/index', 'EventController@index')->name('events.index');
Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('events', 'EventController');
    Route::delete('participants/{id}', function ($id) {
        $p=Participants::find($id);
        $p->delete();
        return back();
    })->name('participants.destroy');
});



Auth::routes();

