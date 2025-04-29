<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', function () {
    return view('notas');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/editarnotas', function () {
    return view('editarnotas');
});

