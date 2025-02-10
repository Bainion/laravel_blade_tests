<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//GET
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/animations', function () {
    return view('animations');
});

Route::prefix("animation")->group(function () {
    Route::get('/', function () {
        return view('animation');
    });
    Route::get('/create', function () {
        return view('create');
    });
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/creations', function () {
    return view('creations');
});

Route::prefix("creation")->group(function () {
    Route::get('/', function () {
        return view('creation');
    });
    Route::get('/create', function () {
        return view('create');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post("/formSubmitted", function () {
    return "Form submitted !";
});

require __DIR__ . '/auth.php';
