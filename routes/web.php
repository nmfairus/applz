<?php

use App\Http\Controllers\Uppa\AduanUppaController;
use App\Http\Controllers\Uppa\JenisAsetUppaController;
use App\Http\Controllers\Uppa\KategoriAduanUppaController;
use App\Http\Controllers\Uppa\LokasiUtamaUppaController;
use App\Http\Controllers\Uppa\PublicAduanUppaController;
use App\Http\Controllers\Upsm\AduanictController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JawatanController;
use App\Http\Controllers\Upsm\JenisAsetIctController;
use App\Http\Controllers\Upsm\KategoriAduanIctController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Upsm\PublicaduanictController;
use App\Http\Controllers\Upsm\LokasiUtamaIctController;
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

Route::get('/publicaduanuppa', [PublicAduanUppaController::class, 'create'])->name('publicaduanuppa');
Route::post('/publicaduanuppa', [PublicAduanUppaController::class, 'store'])->name('publicaduanuppa.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/aduanicts/{aduanict}/print', [AduanictController::class, 'print'])->name('aduanicts.print');
    Route::get('/aduanicts/report', [AduanictController::class, 'report'])->name('aduanicts.report');
    Route::get('/aduanuppas/{aduanuppa}/print', [AduanUppaController::class, 'print'])->name('aduanuppas.print');
    Route::get('/aduanuppas/report', [AduanUppaController::class, 'report'])->name('aduanuppas.report');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'jawatans' => JawatanController::class,
    'aduanicts' => AduanictController::class,
    'jenisaseticts' => JenisAsetIctController::class,
    'kategoriaduanicts' => KategoriAduanIctController::class,
    'lokasiutamaicts' => LokasiUtamaIctController::class,

    'aduanuppas' => AduanUppaController::class,
    'jenisasetuppas' => JenisAsetUppaController::class,
    'kategoriaduanuppas' => KategoriAduanUppaController::class,
    'lokasiutamauppas' => LokasiUtamaUppaController::class,
]);