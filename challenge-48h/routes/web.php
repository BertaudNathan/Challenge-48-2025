<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ActiviteController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('map');
})->middleware(['auth', 'verified'])->name('map');

Route::get('/activite', function () {
    return view('activite');
})->name('activite');

Route::post('/activite', [ActiviteController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/chat', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);

require __DIR__.'/auth.php';
