<?php

use App\Http\Controllers\ManageClients;
use Illuminate\Support\Facades\Route;
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

Route::get('/show', function () {
    return view('show');
});

Route::resource('SaveClients', SaveClients::class);
Route::resource('Clients', ManageClients::class);