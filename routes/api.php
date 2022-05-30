<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// dokter
Route::post('/dokter', [ApiController::class, 'createDokter']);
Route::get('/dokter', [ApiController::class, 'showDokter']);
Route::delete('/dokterDelete/{id}', [ApiController::class, 'deleteDokter']);
Route::put('/dokterUpdate/{id}', [ApiController::class, 'updateDokter']);

// pasien
Route::post('/pasien', [ApiController::class, 'createPasien']);
Route::get('/pasien', [ApiController::class, 'showPasien']);
Route::delete('/pasienDelete/{id}', [ApiController::class, 'deletePasien']);
Route::put('/pasienUpdate/{id}', [ApiController::class, 'updatePasien']);

// ruang
Route::post('/ruang', [ApiController::class, 'createRuang']);
Route::get('/ruang', [ApiController::class, 'showRuang']);
Route::delete('/ruangDelete/{id}', [ApiController::class, 'deleteRuang']);
Route::put('/ruangUpdate/{id}', [ApiController::class, 'updateRuang']);

// rawat
Route::post('/rawat', [ApiController::class, 'createRawat']);
Route::get('/rawat', [ApiController::class, 'showRawat']);
Route::delete('/rawatDelete/{id}', [ApiController::class, 'deleteRawat']);
Route::put('/rawatUpdate/{id}', [ApiController::class, 'updateRawat']);

// petugas
Route::post('/petugas', [ApiController::class, 'createPetugas']);
Route::get('/petugas', [ApiController::class, 'showPetugas']);
Route::delete('/petugasDelete/{id}', [ApiController::class, 'deletePetugas']);
Route::put('/petugasUpdate/{id}', [ApiController::class, 'updatePetugas']);

// pembayaran
Route::post('/pembayaran', [ApiController::class, 'createPembayaran']);
Route::get('/pembayaran', [ApiController::class, 'showPembayaran']);
Route::delete('/pembayaranDelete/{id}', [ApiController::class, 'deletePembayaran']);
Route::put('/pembayaranUpdate/{id}', [ApiController::class, 'updatePembayaran']);