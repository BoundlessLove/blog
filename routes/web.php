<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');

Route::view('/resilience', 'resilience');
Route::view('/integrity', 'integrity');
Route::view('/humanity', 'humanity');
Route::view('/life', 'life');
