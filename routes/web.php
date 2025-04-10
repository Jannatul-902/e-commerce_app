<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


route::get('/', action: [HomeController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/view_category', action: [AdminController::class, 'view_category']);

route::post('/add_category', action: [AdminController::class, 'add_category']);


route::get('/delete_category/{id}', action: [AdminController::class, 'delete_category']);

route::get('/view_product', action: [AdminController::class, 'view_product']);


route::post('/add_product', action: [AdminController::class, 'add_product']);

route::get('/show_product', action: [AdminController::class, 'show_product']);

route::get('/delete_product/{id}', action: [AdminController::class, 'delete_product']);

route::get('/edit_product/{id}', action: [AdminController::class, 'edit_product']);

route::post('/edit_product_confirm/{id}', action: [AdminController::class, 'edit_product_confirm']);

route::get('/product_details/{id}', action: [HomeController::class, 'product_details']);
