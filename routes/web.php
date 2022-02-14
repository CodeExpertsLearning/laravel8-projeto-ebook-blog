<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('site.')->group(function(){
	Route::get('/', [\App\Http\Controllers\Site\HomeController::class, 'index'])->name('index');
	Route::get('/post/{slug}', [\App\Http\Controllers\Site\HomeController::class, 'single'])->name('single');

    Route::post('/post/comment', [\App\Http\Controllers\Site\CommentController::class, 'saveComment'])->name('single.comment');
    Route::get('/category/{slug}', [\App\Http\Controllers\Site\CategoryController::class, 'index'])->name('category');
});


Route::prefix('admin')->middleware('auth')->group(function(){

	Route::resource('posts', \App\Http\Controllers\Admin\PostsController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('profile', \App\Http\Controllers\Admin\ProfileController::class)
            ->only(['index', 'update']);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
