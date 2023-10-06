<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
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


Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ------------------------------------------------------- public routes --------------------------------------------

Route::get('/', [FrontController::class, 'index']);
Route::get('/view_blog/{id}', [FrontController::class, 'show'])->name('blog.single');
Route::get('/blogs/', [FrontController::class, 'index']);
Route::post('/blogs/', [FrontController::class, 'search'])->name('blog.search');
Route::get('/about/', [FrontController::class, 'about'])->name('blog.about');

// ------------------------------------------------------- public routes --------------------------------------------


// ------------------------------------------------------------------ Admin Panel [ Admin ] --------------------------------------------


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // --------------------------------------- Blog ---------------------------------------

    Route::resource('blog', BlogController::class);

    // --------------------------------------- Blog ---------------------------------------


    Route::get('log_out', function () {
        auth()->logout();
        return redirect('/');
    })->name('log_out');
});


// ----------------------------------------------------------------- Admin Panel [ Admin ] --------------------------------------------
