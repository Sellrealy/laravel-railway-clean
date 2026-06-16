<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);

Route::view('/about', 'about');

Route::view('/projects', 'projects');

Route::get('/guestbook', [GuestbookController::class, 'index']);

Route::post('/guestbook', [GuestbookController::class, 'store'])
    ->name('guestbook.store');

Route::get('/admin/login', [AdminController::class, 'login']);

Route::post('/admin/login', [AdminController::class, 'authenticate'])
    ->name('admin.login');

Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::delete('/admin/guestbook/{id}', [AdminController::class, 'destroy'])
    ->name('guestbook.destroy');

Route::delete(
    '/guestbook/{id}',
    [GuestbookController::class, 'destroy']
)->name('guestbook.destroy');

Route::get(
    '/admin/song/{id}',
    [AdminController::class, 'show']
)->name('admin.song.show');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);