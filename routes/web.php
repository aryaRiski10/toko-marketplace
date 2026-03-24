<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/hello', function () {
    echo '<h1>Hello World</h1>';
});
