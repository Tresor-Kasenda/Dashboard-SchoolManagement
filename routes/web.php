<?php

declare(strict_types=1);

use App\Http\Controllers\Admins\Sessions\SessionController;
use App\Http\Controllers\Admins\University\StoreUniversityController;
use App\Http\Controllers\Admins\University\UniversityController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\UniversityMiddleware;
use App\Http\Middleware\UserStatusMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('home');

Route::get('/dashboard', fn () => view('dashboard'))->middleware([
    'auth', 'verified',
    UserStatusMiddleware::class,
    UniversityMiddleware::class,
])->name('dashboard');

Route::middleware(['auth', UserStatusMiddleware::class])->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit')
        ->middleware(UniversityMiddleware::class);
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update')
        ->middleware(UniversityMiddleware::class);
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy')
        ->middleware(UniversityMiddleware::class);

    Route::get('university', UniversityController::class)->name('university.index');
    Route::post('university', StoreUniversityController::class)->name('university.store');

    Route::get('sessions', SessionController::class)->name('sessions.index');
});


require __DIR__.'/auth.php';
