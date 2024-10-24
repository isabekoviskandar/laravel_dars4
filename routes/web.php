<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [IndexController::class , 'index']);
Route::get('/category' , [CategoryController::class, 'index']);
Route::get('/posts' , [PostController::class, 'index']);
Route::get('/comments' , [CommentController::class, 'index']);
Route::get('/products' , [ProductController::class, 'index']);