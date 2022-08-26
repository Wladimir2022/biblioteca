<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::guest()) {   //but here it will work
        return redirect('/login');
    } else {
        return view('index');
    }
});
Route::get('/index', function () {
    return view('index');
});

Route::resource('libro', App\Http\Controllers\LibroController::class);
Route::resource('reserva', App\Http\Controllers\ReservaController::class);
Route::resource('usuario', App\Http\Controllers\UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
