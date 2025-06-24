<?php
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);
Route::get('/book/{id}', [HomepageController::class, 'book']);

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
        Route::post('/logout', 'logout')->name('logout');
    });

Route::middleware('auth')->group(
    function () {
        Route::controller(AdminController::class)
            ->prefix('admin')
            ->name('admin.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                // Route::get('/books', '...')->name('books');
                // Route::get('/categories', '...')->name('categories');
            });
    }
);