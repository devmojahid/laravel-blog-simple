<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{
    HomeController,
    CategoryController,
    PostController
};
use App\Http\Controllers\backend\{
    DashboardController,
    CategoryController as BackendCategoryController,
    PostController as BackendPostController
};
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

Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/posts",[HomeController::class,"post"]);
Route::get("/category/{slug}",[HomeController::class,"singleCategory"])->name("single-category");

Route::prefix('post')->group(function () {
    Route::get('/', [PostController::class, 'allPost'])->name("post");
    Route::get("/{slug}",[PostController::class,"singlePost"])->name("single-post");
});


// Backend Routes Start

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Category Routes
    Route::prefix('category')->group(function (){
        Route::get('/all', [BackendCategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [BackendCategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [BackendCategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{slug}', [BackendCategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{slug}', [BackendCategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{slug}', [BackendCategoryController::class, 'delete'])->name('category.delete');
    });

    // Post Routes
    Route::prefix('post')->group(function (){
        Route::get('/all', [BackendPostController::class, 'index'])->name('post.index');
        Route::get('/create', [BackendPostController::class, 'create'])->name('post.create');
        Route::post('/store', [BackendPostController::class, 'store'])->name('post.store');
        Route::get('/edit/{slug}', [BackendPostController::class, 'edit'])->name('post.edit');
        Route::post('/update/{slug}', [BackendPostController::class, 'update'])->name('post.update');
        Route::get('/delete/{slug}', [BackendPostController::class, 'delete'])->name('post.delete');
    });

});
