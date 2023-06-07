<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\API\KategoriProdukController;





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


Route::apiResource('produks', ProdukController::class);

Route::get('produks', [ProdukController::class, 'index']);
Route::post('produks/create', [ProdukController::class, 'store']);
Route::get('produks/{id}', [ProdukController::class, 'show']);
Route::put('produks/{id}', [ProdukController::class, 'update']);
Route::delete('produks/{id}', [ProdukController::class, 'destroy']);


Route::apiResource('kategori-produks', KategoriProdukController::class);
Route::post('kategori-produks/create', [KategoriProdukController::class, 'store']);
Route::get('kategori-produks/{id}', [KategoriProdukController::class, 'show']);
Route::put('kategori-produks/{id}/edit', [KategoriProdukController::class, 'update']);
Route::delete('kategori-produks/{id}', [KategoriProdukController::class, 'destroy']);
