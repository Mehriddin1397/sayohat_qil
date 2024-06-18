<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('shahar/{city_slug}',[\App\Http\Controllers\PageController::class,'category']);

    Route::get('shahar/{city_slug}/joylar/{slug}',[\App\Http\Controllers\PageController::class,'locality']);
    Route::get('locality/{locality}',[\App\Http\Controllers\PageController::class,'locshow'])->name('locality.show');
});

Route::get('/',[\App\Http\Controllers\PageController::class,'main'])->name('main');
Route::get('/city',[\App\Http\Controllers\PageController::class,'city'])->name('city');
Route::get('/history',[\App\Http\Controllers\PageController::class,'history'])->name('history');
Route::get('/hotel',[\App\Http\Controllers\PageController::class,'hotel'])->name('hotel');
Route::get('/contact',[\App\Http\Controllers\PageController::class,'contact'])->name('contact');

require __DIR__.'/auth.php';
