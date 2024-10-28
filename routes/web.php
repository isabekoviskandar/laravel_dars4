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
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class, 'index'])->name('company.index');       
Route::get('/company_create', [CompanyController::class, 'create'])->name('company.create'); 
Route::post('/company', [CompanyController::class, 'store'])->name('company.store');     
Route::get('/company/{company}', [CompanyController::class, 'show'])->name('company.show');
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('company.edit'); 
Route::put('/company/{company}', [CompanyController::class, 'update'])->name('company.update'); 
Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('company.destroy'); 







Route::get('/product2', [ProductController::class, 'index'])->name('product2.index');
Route::get('/product2_create', [ProductController::class, 'create'])->name('product2.create');
Route::post('/product2', [ProductController::class, 'store'])->name('product2.store');
Route::get('/product2/{id}', [ProductController::class, 'show'])->name('product2.show'); // This should be a GET request
Route::get('/product2/{id}/edit', [ProductController::class, 'edit'])->name('product2.edit'); // This should be a GET request
Route::put('/product2/{id}', [ProductController::class, 'update'])->name('product2.update'); // This is a PUT request
Route::delete('/product2/{id}', [ProductController::class, 'destroy'])->name('product2.destroy'); // This is a DELETE request


Route::get('users', [UsersController::class, 'index'])->name('users.index');
Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('users', [UsersController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UsersController::class, 'show'])->name('users.show');
Route::get('users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');


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