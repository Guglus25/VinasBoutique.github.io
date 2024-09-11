<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});



// rutas para la tabla media
Route::get('/Admin/Media/indexMedia', function () {
    return view('Admin.Media.indexMedia');
})->name('Media.index');

Route::get('/Admin/Media/CreateMedia', function () {
    return view('Admin.Media.CreateMedia');
})->name('Media.Create');