<?php

use App\Http\Controllers\PostController;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register_form'])->name('register_form');
Route::post('register', [AuthController::class, 'register'])->name('register');


// Route::resource('post', 'PostController');
Route::get('posts', [PostController::class, 'index'])->name('beranda');
Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::get('posts/{id}', [PostController::class, 'show']);
Route::post('posts', [PostController::class, 'store'])->name('store');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('edit');
Route::patch('posts/{id}', [PostController::class, 'update'])->name('update');
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('delete');
=======
// Route::resource('post', 'PostController');
Route::get('posts', [PostController::class, 'index']) -> name('beranda');
Route::get('posts/create', [PostController::class, 'create']) -> name('create');
Route::get('posts/{id}', [PostController::class, 'show']);
Route::post('posts', [PostController::class, 'store']) -> name('store');
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
