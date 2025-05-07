<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAnswerEnglishController;
use App\Http\Controllers\StudentAnswerTagalogController;

Route::post('/student/add', [StudentAnswerEnglishController::class, 'store']);
Route::post('/student/add', [StudentAnswerTagalogController::class, 'store']);


Route::get('/', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/students-eng', function () {
    return view('students-eng');
});

Route::get('/students-tag', function () {
    return view('students-tag');
});

Route::get('/students-results', function () {
    return view('students-results');
});










