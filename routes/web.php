<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\DailyTransactionController;

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
    return view('index');
});
Route::get('/master-data', [MasterController::class, 'index']);
Route::post('/master-data/create', [MasterController::class, 'addNew']);
Route::post('/master-data/update/{id}', [MasterController::class, 'processUpdate']);
Route::get('/master-data/delete/{id}', [MasterController::class, 'delete']);

Route::get('/daily-transaction', [DailyTransactionController::class, 'index']);
Route::post('/daily-transaction/create', [DailyTransactionController::class, 'addNew']);
Route::post('/daily-transaction/update/{id}', [DailyTransactionController::class, 'processUpdate']);
Route::get('/daily-transaction/delete/{id}', [DailyTransactionController::class, 'delete']);
