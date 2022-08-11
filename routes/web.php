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
    return view('web.index');
});
Route::get('/invoices', function () {
    return view('web.invoices');
});
// Route::get('/register', function () {
//     return view('web.registration');
// });
Route::get('/order',[App\Http\Controllers\OrderController::class, 'store']);
Route::get('/midtrans',[App\Http\Controllers\MidtransController::class, 'index']);
Route::get('/invoice-details',[App\Http\Controllers\OrderController::class, 'index']);
Route::post('/registrasi',[App\Http\Controllers\LeaderController::class, 'create'])->name('registrasi');
Route::post('/registrasiplayer',[App\Http\Controllers\PlayerController::class, 'create'])->name('registrasi.player');
