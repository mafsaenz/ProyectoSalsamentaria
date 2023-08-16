<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('index');
});

Route::get('productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos.index');
