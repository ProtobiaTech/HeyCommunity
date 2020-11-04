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


//
// Base
Route::get('/', function () {
    return redirect()->route('timelines.index');
})->name('home');

Route::get('log-in', function () {
    return redirect()->route('users.login');
})->name('login');


//
// User
Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::get('signup', 'UserController@signup')->name('users.signup');
    Route::post('signup', 'UserController@signupHandler')->name('users.signup-handler');
    Route::get('login', 'UserController@login')->name('users.login');
    Route::post('login', 'UserController@loginHandler')->name('users.login-handler');
    Route::any('logout', 'UserController@logoutHandler')->name('users.logout');
});


//
// Timeline
Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::any('timelines/{timeline}/set-thumb-up', 'TimelineController@setThumbUp')
        ->where('timeline', '[0-9]+')->name('timelines.set-thumb-up');
    Route::any('timelines/{timeline}/cancel-thumb-up', 'TimelineController@cancelThumbUp')
        ->where('timeline', '[0-9]+')->name('timelines.cancel-thumb-up');

    Route::any('timelines/{timeline}/comments', 'TimelineController@commentStore')
        ->where('timeline', '[0-9]+')->name('timelines.comments.store');

    Route::resource('timelines', 'TimelineController');
});
