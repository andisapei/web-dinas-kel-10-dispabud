<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [HomeControler::class, 'index'])->name('publik.home');

Route::get('/publik-wisata', [HomeControler::class, 'wisatas'])->name('publik.publik-wisata');
Route::get('/publik-wisata/{id}', [HomeControler::class, 'wisatasShow'])->name('publik.publik-show-wisata');

Route::get('/publik-posts', [HomeControler::class, 'posts'])->name('publik.publik-posts');
Route::get('/publik-posts/{id}', [HomeControler::class, 'postsShow'])->name('publik.publik-show-posts');

Route::get('/publik-contact', [HomeControler::class, 'contact'])->name('publik.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //page users
    Route::resource('wisatas', WisataController::class);
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);

});

require __DIR__.'/auth.php';
