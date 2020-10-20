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

Route::get('/', function () {
    return redirect()->route('timelines.index');
})->name('home');

Route::get('timelines', function () {
    return view('web.timelines.index');
})->name('timelines.index');

Route::get('groups', function () {
    return view('web.groups.index');
})->name('groups.index');

Route::get('group', function () {
    return view('web.groups.show');
})->name('groups.show');
