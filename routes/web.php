<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

Route::get('/' , [CompanyController::class , 'index']);



Route::get('/users' , [UsersController::class, 'index']);


Route::get('product2' , [Product2Controller::class, 'index']);

Route::get('/category' , [CategoryController::class, 'index']);
Route::get('/category_create' , [CategoryController::class, 'create']);
Route::post('/category' , [CategoryController::class, 'store']);

Route::get('/posts' , [PostController::class, 'index']);
Route::get('/posts_create' , [PostController::class, 'create']);
Route::post('/posts' , [PostController::class, 'store']);

Route::get('/comments' , [CommentController::class, 'index']);
Route::get('/comments_create' , [CommentController::class, 'create']);
Route::post('/comments' , [CommentController::class, 'store']);

Route::get('/products' , [ProductController::class, 'index']);
Route::get('/products_create' , [ProductController::class, 'create']);
Route::post('/products' , [ProductController::class, 'index']);

Route::get('/likes' , [LikeController::class, 'index']);