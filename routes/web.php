<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/post/addComment/{post}',[PostController::class, 'addComment']);
Route::get('/', [HomeController::class, 'index'])->name('post.index');
Route::get('/myposts', [PostController::class, 'myPosts'])->name('post.mypost');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{post}',[PostController::class, 'show'])->name('blog.show');
Route::get('/posts',[PostController::class, 'index'])->name('post.index');
// Route::get('/post/{post}/edit', [PostController::class, 'edit']);
// Route::put('/post/{post}', [PostController::class, 'update']);
Route::get('/myposts', [PostController::class, 'myPosts'])->name('post.myposts');
Route::get('/contact',[PostController::class, 'contact']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
