<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DaftarBeasiswaController;
use App\Http\Controllers\DetailBeasiswaController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('landing.index');
// });

//route homecontroller
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('check.auth');

//route admincontroller
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/tabel-beasiswa', [AdminController::class, 'tabel_beasiswa'])->name('tabel-beasiswa');
Route::get('/tabel-user', [AdminController::class, 'tabel_user'])->name('tabel-user');
Route::post('/beasiswa/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
Route::post('/beasiswa/update-status', [BeasiswaController::class, 'updateStatus'])->name('beasiswa.updateStatus');
Route::delete('/beasiswa/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');


//route article beasiswa
Route::get('/article', [ArticleController::class, 'index']);

Route::post('/logout', function () {
    Auth::logout();
    session()->flush(); // Hapus semua data session
    return redirect('/');
})->name('logout');

//route LoginController
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

//route RegisterController
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');

//route BeasiswaController
Route::get('/formbeasiswa', [BeasiswaController::class, 'index'])->name('form')->middleware('auth');

//route DaftarBeasiswaController
Route::get('/daftarbeasiswa', [DaftarBeasiswaController::class, 'index'])->name('daftar')->middleware('check.auth');

//route DetailBeasiswaController
Route::get('/detailbeasiswa/{id}', [DetailBeasiswaController::class, 'index'])->name('detail');

//route FavoriteController
Route::get('/favorit', [FavoriteController::class, 'index'])->name('favorit')->middleware('auth');

//route ProfilController
Route::get('/profil', [ProfilController::class, 'index'])->name('profil')->middleware('auth');
Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

// route TentangController
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');


//backend 
Route::post('/beasiswa/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
Route::post('/favorites', [FavoriteController::class, 'store'])->name('favorit.store');
Route::delete('/favorites/{favorite}', [DetailBeasiswaController::class, 'destroy'])->name('favorites.destroy');

Route::get('/searchBeasiswa', [BeasiswaController::class, 'search'])->name('searchBeasiswa');

Route::get('/filterBeasiswa/{status}', [BeasiswaController::class, 'filterByStatus'])->name('filterBeasiswa');


Route::get('artisan', function(){
    Artisan::call('storage:link');
});