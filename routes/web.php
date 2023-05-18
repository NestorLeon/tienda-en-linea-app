<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/buscar', function () {
    return view('tienda/search_producto');
});

Route::get('/producto/show/{id}', function () {
    return view('tienda/show_producto');
});

Route::get('/admin/categorias', function () {
    return view('admin/categorias/index');
});

Route::get('/admin/productos', function () {
    return view('admin/productos/index');
});
