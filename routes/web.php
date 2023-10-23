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

Route::get('/limited-product', function () {
    return view('pages.limited-product');
});
Route::get('/product-detail', function () {
    return view('pages.product-detail');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/login', function () {
    return view('login');
});
