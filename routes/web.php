<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimationController;
use Illuminate\Support\Facades\Route;

//GET
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/forge/{type}/{page?}', [AnimationController::class, 'show'])->name('forge.show');

Route::get('/animations', function () {
    return view('animations');
})->name('animations');

Route::prefix("animation")->group(function () {
    Route::get('/', function () {
        return view('animation');
    });
    Route::get('/create', function () {
        return view('create');
    })->middleware(['auth', 'verified']);
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/galleries', function () {
    return view('galleries');
})->name('galleries');

Route::prefix("gallery")->group(function () {
    Route::get('/', function () {
        return view('gallery');
    });
    Route::get('/create', function () {
        return view('create');
    })->middleware(['auth', 'verified']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
