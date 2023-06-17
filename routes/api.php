<?php

use App\Http\Controllers\ProxyController;
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

Route::group(['prefix' => 'proxy'], function () {
    Route::get('/get-phone-number', [ProxyController::class, 'getPhoneNumber']);
    Route::get('/get-sms/{activation}', [ProxyController::class, 'getSMSByActivation']);
});
