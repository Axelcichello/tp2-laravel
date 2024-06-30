<?php

use App\Models\Backpack;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackpackController;
use App\Http\Controllers\BackofficeController;

//User
Route::get('/', [BackpackController::class, 'index']);
Route::get('backpack/{id}', [BackpackController::class, 'backpack']);
Route::get('categories/{id}', [BackpackController::class, 'list']);
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('checkout', [CartController::class, 'check']);
Route::post('cart/buy', [CartController::class, 'buy'])->name('cart.buy');
Route::get('thanks', [CartController::class, 'thanks']);


//Backoffice
Route::get('/backoffice/listado', [BackofficeController::class, 'listado']);

Route::post('/backoffice/listado', [BackofficeController::class, 'save']);
Route::get('/backoffice/crear', [BackofficeController::class, 'crear']);

Route::get('backoffice/{id}/editar', [BackofficeController::class, 'editar']);
Route::post('backoffice/{id}', [BackofficeController::class, 'update']);