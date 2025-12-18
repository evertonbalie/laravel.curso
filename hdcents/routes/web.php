<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/product/cadastrar', [ProductController::class, 'cadastrar']);




Route::get('/contact', function () {

    return view('contact');
});

Route::get('/produto', function () {

    $busca = request('search');
    return view('product', ['busca' => $busca]);
});


Route::get('/produto_teste/{id}', function ($id) {


    return view('product', ['id' => $id]);
});
