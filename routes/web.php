<?php

use App\Http\Controllers\AduanictController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JawatanController;
use App\Http\Controllers\JenisAsetIctController;
use App\Http\Controllers\KategoriAduanIctController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicaduanictController;
use App\Http\Controllers\LokasiUtamaIctController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/publicaduanict', [PublicaduanictController::class, 'create'])->name('publicaduanict');
Route::post('/publicaduanict', [PublicaduanictController::class, 'store'])->name('publicaduanict.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/aduanicts/{aduanict}/print', [AduanictController::class, 'print'])->name('aduanicts.print');
    Route::get('/aduanicts/report', [AduanictController::class, 'report'])->name('aduanicts.report');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'jenisaseticts' => JenisAsetIctController::class,
    'kategoriaduanicts' => KategoriAduanIctController::class,
    'aduanicts' => AduanictController::class,
    'jawatans' => JawatanController::class,
    'lokasiutamaicts' => LokasiUtamaIctController::class
]);