<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create']);
Route::post('/events',[EventController::class, 'store']);

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/{id}', function ($id) {
    return view('product',['id' => $id]);
});