<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "lala",
        "email" => "lala@gmail.com"
        ]);
});
Route::get('/boom',[PostController::class,'boomesport']);
