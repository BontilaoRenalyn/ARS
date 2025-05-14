<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAnswerEnglishController;
use App\Http\Controllers\StudentAnswerTagalogController;

Route::post('/student/add', [StudentAnswerEnglishController::class, 'store']);
Route::post('/student/add', [StudentAnswerTagalogController::class, 'store']);




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

Route::get('/1', function () {
    return view('1');
});











