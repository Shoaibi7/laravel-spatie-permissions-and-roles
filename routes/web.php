<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//post route

Route::get('/post', [PostController::class, 'index'])->middleware(['role:writer|admin']);
Route::post('add_post', [PostController::class, 'store'])->name('add_post');
Route::get('show_posts', [PostController::class, 'show'])->name('show_posts');
Route::get('edit_posts/{id}', [PostController::class, 'edit'])->name('edit_posts')->middleware('permission:edit post');
Route::put('update_post/{id}', [PostController::class, 'update'])->name('update_post');
