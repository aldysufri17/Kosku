<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.home');
});

Route::get('/daftar', function () {
    return view('frontend.detail-kos');
});

Route::get('/status', function () {
    return view('frontend.pengajuan');
});

Route::get('/booking', function () {
    return view('frontend.booking');
});

Route::get('/favorit', function () {
    return view('frontend.favorit');
});

Route::get('/bukti', function () {
    return view('frontend.bukti');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'indexPengguna'])->name('home');

    Route::get('/dashboard', [DashboardController::class, 'indexAdmin'])->name('dashboard');

    // Profile Routes
    Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'profile'])->name('detail');
        Route::post('/update', [DashboardController::class, 'updateProfile'])->name('update');
        Route::post('/update/ktm', [DashboardController::class, 'updateKTM'])->name('ktm');
        Route::post('/update/foto', [DashboardController::class, 'updateFoto'])->name('foto');
        Route::post('/change-password', [DashboardController::class, 'changePassword'])->name('change-password');
    });

    // Pengguna
    Route::resource('pengguna', UserController::class);
    Route::get('/status/pengguna/{user_id}/{status}', [UserController::class, 'updateStatus'])->name('pengguna.status');
    Route::post('/reset/password', [UserController::class, 'reset'])->name('pengguna.reset');

    // Kelola Post
    Route::resource('post', PostController::class);

    // Fasilitas
    Route::resource('fasilitas', FasilitasController::class);

    // Peraturan
    Route::resource('peraturan', PeraturanController::class);

    // Peraturan
    Route::resource('kos', KosController::class);

    // Peraturan
    Route::resource('kamar', KamarController::class);

    // Peraturan
    Route::resource('transaksi', TransaksiController::class);
    Route::get('/status/{id}/{status}', [TransaksiController::class, 'statusUpdate'])->name('transaksi.status');
    Route::get('/daftar/pengguna', [TransaksiController::class, 'daftarPengguna'])->name('pengguna.kamar');

    // Profile Routes
    // Route::prefix('kos')->name('kos.')->middleware('auth')->group(function () {
    //     Route::get('/{kategori}', [KosController::class, 'index'])->name('index');
    //     Route::get('/create/{kategori}', [KosController::class, 'create'])->name('create');
    //     Route::post('/store/{kategori}', [KosController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}/{kategori}', [KosController::class, 'edit'])->name('edit');
    //     Route::get('/update/{id}/{kategori}', [KosController::class, 'update'])->name('update');
    // });
});
