<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolaUrutan;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ContentController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KelolaQuizController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\KelolaKelasController;
use App\Http\Controllers\ContentKelasController;
use App\Http\Controllers\KelolaMateriController;
use App\Http\Controllers\KelolaUrutanController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KelolaPengajarController;
use App\Http\Controllers\DashboardPengajarController;

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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/list_kelas', [HomepageController::class, 'kelas']);
Route::get('/kelas_detail/{id}', [HomepageController::class, 'show'])->name('kelas.show');
Route::get('/tambah_kelas', [HomepageController::class, 'store'])->name('kelas.store')->middleware('auth');

Auth::routes();

Route::get('/dashboard/admin', function () {
    return view('admin.kelola_user.index');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::resource('/admin_dashboard', DashboardAdminController::class);
    Route::resource('/kelola_pengajar', KelolaPengajarController::class);
    Route::resource('/kelola_users', KelolaUserController::class);
});

Route::group([
    'prefix' => 'pengajar',
    'middleware' => 'auth'
], function () {
    Route::resource('/pengajar_dashboard', DashboardPengajarController::class);
    Route::resource('/kelola_kelas', KelolaKelasController::class);
    Route::resource('/kelola_materi', KelolaMateriController::class);
    Route::resource('/kelola_quiz', KelolaQuizController::class);
    Route::resource('/kelola_urutan', KelolaUrutanController::class);
});

Route::group([
    'prefix' => 'users',
    'middleware' => 'auth'
], function () {
    Route::resource('/dashboard', DashboardUserController::class);
    Route::resource('/kelas_saya', ContentController::class);
    Route::get('/content/{kelas}/{materi}', [ContentController::class, 'index'])->name('content');
    Route::get('/quiz/{kelas}/{materi}', [QuizController::class, 'index'])->name('quiz');
    // Route::resource('/quiz', QuizController::class);
});



// Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/grade', function () {
    return view('users.dashboard.content_kelas.grade');
});
