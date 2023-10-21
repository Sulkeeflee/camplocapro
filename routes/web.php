<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\HomeController;

use App\Http\Controller\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect']);

Route::get('/view_catagory', [App\Http\Controllers\AdminController::class, 'view_catagory']);

Route::post('/add_catagory', [App\Http\Controllers\AdminController::class, 'add_catagory']);

Route::get('/delete_catagory/{id}', [App\Http\Controllers\AdminController::class, 'delete_catagory']);

Route::get('/view_product', [App\Http\Controllers\AdminController::class, 'view_product']);

Route::post('/add_product', [App\Http\Controllers\AdminController::class, 'add_product']);

Route::get('/show_product', [App\Http\Controllers\AdminController::class, 'show_product']);

Route::get('/delete_product/{id}', [App\Http\Controllers\AdminController::class, 'delete_product']);

Route::get('/update_product/{id}', [App\Http\Controllers\AdminController::class, 'update_product']);

Route::post('/update_product_confirm/{id}', [App\Http\Controllers\AdminController::class, 'update_product_confirm']);

Route::get('/product_details/{id}', [App\Http\Controllers\HomeController::class, 'product_details']);

Route::post('/add_cart/{id}', [App\Http\Controllers\HomeController::class, 'add_cart']);

Route::get('/show_cart', [App\Http\Controllers\HomeController::class, 'show_cart']);

Route::get('/remove_cart/{id}', [App\Http\Controllers\HomeController::class, 'remove_cart']);

