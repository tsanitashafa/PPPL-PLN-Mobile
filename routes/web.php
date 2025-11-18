<?php

use Illuminate\Support\Facades\Route;

Route::get('/tes', function () {
    return view('tes'); // Ambil dari nama file template.blade.php
});

Route::get('/template', function () {
    return view('template'); // Ambil dari nama file template.blade.php
});


