<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('stud-dash');
});

Route::get('/stud-eng', function () {
    return view('stud-eng');
});

Route::get('/stud-fil', function () {
    return view('stud-fil');
});

Route::get('/stud-reports', function () {
    return view('stud-reports');
});










