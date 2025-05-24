<?php

use Illuminate\Support\Facades\Route;

Route::get('/halaman', function () {
    return view('master.index');
});
