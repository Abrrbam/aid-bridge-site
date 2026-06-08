<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

if (file_exists(__DIR__ . '/auth.php')) {
    require __DIR__ . '/auth.php';
}