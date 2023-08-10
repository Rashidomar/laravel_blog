<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $post = Post::all();
    return view('home', ['posts' => $post]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/posts', [PostController::class, 'allPost'])->name("post.allPost");
    Route::get('/post/{postID}', [PostController::class, 'show'])->name("post.show");
    Route::get('/create_post', [PostController::class, 'create'])->name("post.create");
    Route::post('/create_post', [PostController::class, 'store'])->name("post.store");
    Route::patch('/update', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post', [PostController::class, 'destroy'])->name('post.delete');



});

require __DIR__.'/auth.php';
