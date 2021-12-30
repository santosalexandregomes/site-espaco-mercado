<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/supermercado', function () {
    return view('supermercado');
})->name('supermercado');

Route::get('/farmacia', function () {
    return view('farmacia');
})->name('farmacia');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/depoimentos', function () {
    return view('depoimentos');
})->name('depoimentos');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');