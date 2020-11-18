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
    Route::group(['middleware' => 'guest'], function () {
        Route::get('signup', 'UserController@signup')->name('users.signup');
        Route::post('signup', 'UserController@signupHandler')->name('users.signup-handler');
        Route::get('login', 'UserController@login')->name('users.login');
        Route::post('login', 'UserController@loginHandler')->name('users.login-handler');
    });

    // 用户主页
    Route::redirect('users/{user}', '/users/{user}/timeline')->name('users.home')->where('user', '[0-9]+');
    Route::get('users/{user}/timeline', 'UserHomeController@timeline')->name('users.home.timeline')->where('user', '[0-9]+');

    Route::group(['middleware' => 'auth'], function () {
        Route::any('logout', 'UserController@logoutHandler')->name('users.logout');

        // 用户设置
        Route::redirect('users/setting', '/users/settings/profile')->name('users.setting');
        Route::get('users/settings/profile', 'UserSettingController@profile')->name('users.settings.profile');
        Route::post('users/settings/profile', 'UserSettingController@profileUpdate')->name('users.settings.profile-update');
    });
});


//
// Timeline
Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::post('timelines/upload-image', 'TimelineController@uploadImage')->name('timelines.upload-image');

    Route::any('timelines/{timeline}/comments', 'TimelineController@commentStore')
        ->where('timeline', '[0-9]+')->name('timelines.comments.store');

    Route::resource('timelines', 'TimelineController');
});

//
// Thumb
Route::group(['namespace' => '\App\Http\Controllers', 'middleware' => ['auth']], function () {
    Route::post('thumbs/handler', 'ThumbController@handler')->name('thumbs.handler');
});

//
// Comment
Route::group(['namespace' => '\App\Http\Controllers', 'middleware' => ['auth']], function () {
    Route::post('comments', 'CommentController@store')->name('comments.store');
});
