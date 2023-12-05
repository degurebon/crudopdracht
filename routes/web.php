<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// homepage with all posts
Route::get('/', PostController::class .'@index')->name('posts.index');
// full post page
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');

// need auth
Route::middleware('auth')->group(function () {
    // add post form
    Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
    // add post to database
    Route::post('/posts', PostController::class .'@store')->name('posts.store');
    // edit form
    Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
    // update
    Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
    // delete
    Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');
});

// dashboard auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// profile crud
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
