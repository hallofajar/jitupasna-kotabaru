<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiData;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});


Route::get('/setting', [ApiData::class, 'setting_data']);
Route::get('/color', [ApiData::class, 'color']);
Route::get('/data/{region}', [ApiData::class, 'data']);
Route::get('/datadetail/{region}/{id}', [ApiData::class, 'detail_data']);
Route::get('/geojson/{region}', [ApiData::class, 'geojson']);
Route::get('/resume/{region}', [ApiData::class, 'resume_all']);
Route::get('/resumeall', [ApiData::class, 'resumeAllData']);
Route::get('/resume_grafik/{region}', [ApiData::class, 'resume_grafik']);
Route::get('/pivot_data_multi/{region}', [ApiData::class, 'pivot_data_multi_lp']);
Route::get('/pivot_data_multi_all', [ApiData::class, 'pivot_data_multiAll']);
Route::get('/pivot_data/{region}', [ApiData::class, 'pivot_data_lp']);
Route::get('/pivot_data_all', [ApiData::class, 'pivot_dataAll']);
