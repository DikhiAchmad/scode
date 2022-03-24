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
    return view('users.homepage.index');
});
Route::get('/kelas', function () {
    return view('users.kelas.index');
});
Route::get('/id', function () {
    return view('users.kelas.detail');
});
Route::get('/dashboard', function () {
    return view('users.dashboard.layout.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');