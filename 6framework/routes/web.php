<?php
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\Admin\CategoryController;

if (! function_exists('adminRoutes')) {
    function adminRoutes(): RouteRegistrar
    {
        return Route::controller(AdminController::class)
            ->prefix('admin')
            ->name('admin.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                categoryAdminRoutes();
            });
    }
}

if (! function_exists('categoryAdminRoutes')) {
    function categoryAdminRoutes(): RouteRegistrar
    {
        return Route::controller(CategoryController::class)
            ->prefix('category')
            ->name('category.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::put('/{id}', 'update')->name('update');
                Route::delete('/{id}', 'destroy')->name('destroy');
            });
    }
}

Route::get('/', [HomepageController::class, 'index']);
Route::get('/books/{book}', [HomepageController::class, 'show'])->name('books.show');

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
        Route::post('/logout', 'logout')->name('logout');
    });

Route::middleware('auth')->group(
    function () {
        adminRoutes();
    }
);


