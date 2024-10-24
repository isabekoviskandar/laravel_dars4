<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/category' , [CategoryController::class, 'index']);
Route::get('/posts' , [PostController::class, 'index']);
Route::get('/comments' , [CommentController::class, 'index']);
