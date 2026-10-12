<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('roleuser', function () {
    return view('roleuser');
})->middleware(['auth', 'verified'])->name('roleuser');

  Route::post('/roleuser', [RolesController::class, 'store'])
        ->name('roleuser.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('dashboard.owner', function () {
        return view('dashboard.owner');
    })->name('owner.dashboard');

    Route::get('dashboard.tenant', function () {
        return view('dashboard.tenant');
    })->name('tenant.dashboard');


require __DIR__.'/auth.php';
