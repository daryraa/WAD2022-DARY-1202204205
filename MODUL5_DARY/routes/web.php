<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomsController;

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
    return view('homeawal-dary');
});

Route::get('/home', function () {
    return view('home-dary');
});

Route::get('/profil', function () {
    return view('profil-dary');
});

Route::get('/dd', function () {
    return dd(rand(10000000,99999999));
});

Route::get('/login', [LoginController::class, 'index'] )->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'] );
Route::get('/register', [RegisterController::class, 'index'] );
Route::post('/register', [RegisterController::class, 'store'] );

Route::get('/logout', [LoginController::class, 'logout'] );
//view route
Route::get('/mycar', [ShowroomsController::class, 'mycar']);
Route::get('/mycar/add', [ShowroomsController::class, 'add']);
Route::get('/mycar/edit/{id}', [ShowroomsController::class, 'edit']);
Route::get('/mycar/detail/{id}', [ShowroomsController::class, 'read']);


//input route
Route::post('/mycar/add', [ShowroomsController::class, 'store']);
Route::post('/mycar/edit/{id}', [ShowroomsController::class, 'update']);
Route::get('/mycar/delete/{id}', [ShowroomsController::class, 'delete']);