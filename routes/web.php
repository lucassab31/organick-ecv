<?php

use App\Http\Controllers\ContentController;
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

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');

Route::prefix('components')->name('components.')->group(function () {
    Route::get('/hero', [App\Http\Controllers\PageController::class, 'getHeroComponent'])->name('hero');
    Route::get('/about-us', [App\Http\Controllers\PageController::class, 'getAboutUsComponent'])->name('aboutus');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ContentController::class, 'index'])->name('dashboard');

    Route::prefix('content')->name('content.')->group(function () {
        Route::post('/hero', [ContentController::class, 'saveHero'])->name('hero.save');
        Route::post('/about-us', [ContentController::class, 'saveAboutUs'])->name('aboutus.save');
        Route::post('/offer', [ContentController::class, 'saveOfferBanner'])->name('offer.save');
        Route::post('/eco-friendly', [ContentController::class, 'saveEcoFriendly'])->name('eco-friendly.save');
        Route::post('/news', [ContentController::class, 'saveNews'])->name('news.save');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
