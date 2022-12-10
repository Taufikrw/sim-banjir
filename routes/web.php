<?php

use App\Http\Controllers\MapsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TypeController;
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

Route::get('/', [NewsController::class, 'index']);
Route::get('/info', [TypeController::class, 'index']);
Route::view('/mitigasi', 'mitigasi', ['title' => 'Mitigasi',]);
Route::get('/peta-banjir', [StatisticController::class, 'lihat']);
Route::get('/data-statistik', [StatisticController::class, 'index']);
