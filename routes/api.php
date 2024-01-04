<?php

use App\Http\Controllers\MarketStockController;
use Illuminate\Support\Facades\Route;

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
Route::get('/tickers', [MarketStockController::class, 'get']);
Route::get('/eod-intraday', [MarketStockController::class, 'getEndOfDayAndIntrADay']);
