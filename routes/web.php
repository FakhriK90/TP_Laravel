<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SaveClients;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/signInUp', function () {
    return view('signInUp');
});

Route::get('/a', [PagesController::class, 'index']);

Route::get('/b', [PagesController::class, 'about']);
Route::resource('SaveClients', SaveClients::class);