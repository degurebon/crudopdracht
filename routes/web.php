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

// Route::get('/home', function () { return view('home');});

// returns the home page with all posts
// Route::get('/dashboard', PostController::class .'@index')->name('dashboard.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->middleware(['auth', 'verified'])->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->middleware(['auth', 'verified'])->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->middleware(['auth', 'verified'])->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->middleware(['auth', 'verified'])->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->middleware(['auth', 'verified'])->name('posts.destroy');

// Route::get('/', function () {
//     return view('unauthdash');
// })->name('unauthdash');

Route::get('/', PostController::class .'@landing')
->name('/');

Route::get('/dashboard', PostController::class .'@dash')
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
