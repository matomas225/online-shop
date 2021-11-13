<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostListController;
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

Route::get('/', [HomeController::class, "index"])->name("home");

Route::get('/login', [LoginController::class, "index"])->name("login")->middleware("guest");

Route::post('/login', [LoginController::class, "login"])->middleware("guest");

Route::post('/logout', [LoginController::class, "logout"])->name("logout")->middleware("auth");

Route::get('/register', [RegisterController::class, "index"])->name("register")->middleware("guest");

Route::post('/register', [RegisterController::class, "store"])->middleware("guest");

Route::get('/post', [PostController::class, "index"])->name("post")->middleware("auth");

Route::post('/post', [PostController::class, "post"])->middleware("auth");

Route::get('/postlist', [PostListController::class, "index"])->name("postlist")->middleware("auth");
