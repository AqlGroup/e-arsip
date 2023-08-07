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
    return view('welcome');
});

Route::middleware(['role:admin,supervisor'])->group(function () {
    // Rute untuk admin dan supervisor
});

Route::middleware(['role:operator'])->group(function () {
    // Rute untuk operator
});

