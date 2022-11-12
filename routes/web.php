<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormIdentitasController;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/instruction', function () {
    return view('instruction', [
        "title" => "Petunjuk"
    ]);
});

Route::get('/info', function () {
    return view('info', [
        "title" => "Informasi"
    ]);
});

Route::get('/announ', function () {
    return view('announ', [
        "title" => "Pengumuman"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/identitas', [FormIdentitasController::class, 'inputIdentitas']);