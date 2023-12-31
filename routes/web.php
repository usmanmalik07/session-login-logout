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
    return view('login');
});
Route::get('/dashboard', 'App\Http\Controllers\userctrl@viewdashboard');
Route::get('/logout', 'App\Http\Controllers\userctrl@logout');
Route::post('/login', 'App\Http\Controllers\userctrl@login');
Route::get('/login', 'App\Http\Controllers\userctrl@index');
