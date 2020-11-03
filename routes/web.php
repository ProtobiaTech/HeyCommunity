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

//
// User
Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::get('signup', 'UserController@loginHandler')->name('users.signup');
    Route::post('signup', 'UserController@loginHandler')->name('users.signup-handler');
    Route::get('login', 'UserController@loginHandler')->name('users.login');
    Route::post('login', 'UserController@loginHandler')->name('users.login-handler');
    Route::any('logout', 'UserController@logoutHandler')->name('users.logout');
});


Route::get('timelines', function () {
    $timelines = \App\Models\Timeline::paginate();
    return view('web.timelines.index', compact('timelines'));
})->name('timelines.index');

Route::get('groups', function () {
    return view('web.groups.index');
})->name('groups.index');

Route::get('group', function () {
    return view('web.groups.show');
})->name('groups.show');
