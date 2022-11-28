<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ClasslistController;


Route::get('/', function () {
    return view('welcome');
});
// route('Overall.classlist');

Route::resource('/contact', ContactController::class);
Route::get('/class/list', [ClassController::class, 'list']);

Route::resource('/class', ClassController::class);
Route::resource('/classlist', ClasslistController::class);
