<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackpackController;
use App\Http\Controllers\BackofficeController;

//Route::get('/', function () {
//     return view('welcome');
// });

//User
Route::get('/', [BackpackController::class, 'index']);
Route::get('backpack/{id}', [BackpackController::class, 'backpack']);


//Backoffice
Route::get('/backoffice/listado', [BackofficeController::class, 'listado']);

Route::post('/backoffice/listado', [BackofficeController::class, 'save']);
Route::get('/backoffice/crear', [BackofficeController::class, 'crear']);

Route::get('backoffice/{id}/editar', [BackofficeController::class, 'editar']);
Route::post('backoffice/{id}', [BackofficeController::class, 'update']);