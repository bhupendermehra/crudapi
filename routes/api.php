<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('add-produts',[ProductsController::class,'adding']);
Route::put('edit-produts',[ProductsController::class,'edit']);
Route::delete('delete-produts',[ProductsController::class,'delete']);
Route::get('getdata',[ProductsController::class,'getdata']);