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
    return view('japan');
})->name('japan');

Route::get('point', function () {
    return view('point');
})->name('point');

Route::get('stay', function () {
    return view('stay');
})->name('stay');
