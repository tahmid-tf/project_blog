<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ------------------------------------------------------- public routes --------------------------------------------

Route::get('/', [FrontController::class,'index']);

// ------------------------------------------------------- public routes --------------------------------------------


// ------------------------------------------------------------------ Admin Panel [ Admin ] --------------------------------------------


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // --------------------------------------- Blog ---------------------------------------

    Route::resource('blog', BlogController::class);

    // --------------------------------------- Blog ---------------------------------------
});


// ----------------------------------------------------------------- Admin Panel [ Admin ] --------------------------------------------
