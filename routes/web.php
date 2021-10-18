<?php

use App\http\Controllers\HomeController;
use App\http\Controllers\SurahController;
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
    return view('welcome');
});

Route::get('home/index',[HomeController::class,'index']);

Route::get('surah/1',[SurahController::class,'one']);

