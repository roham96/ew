<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
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

Route::group([
    'prefix' => 'v1',
], function () {

    Route::group([
        'prefix' => 'auth',
        'middleware' => 'api',
    ], function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);

        Route::post('refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
        Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
        Route::get('me', [AuthController::class, 'me'])->middleware('auth:api');
    });

    Route::group([
        'middleware' => ['auth:api'],
    ], function () {
        Route::apiResource('users', UserController::class);
        // Route::get('user-info', [UserController::class, 'getUserInfo'])->name('getUserInfo');

        Route::get('actions/balance', [ActionController::class, 'balance']);
        Route::get('actions/transfers', [ActionController::class, 'transfers']);

        Route::post('actions/refresh-balance', [ActionController::class, 'refreshBalance']);
        Route::post('actions/wallet-transactions', [ActionController::class, 'walletTransactions']);

        Route::post('actions/deposit', [ActionController::class, 'deposit']);
        Route::post('actions/withdraw', [ActionController::class, 'withdraw']);

        Route::post('actions/transfer', [ActionController::class, 'transfer']);
        Route::post('actions/confirm', [ActionController::class, 'confirm']);

        Route::apiResource('trxs', TrxController::class);
        Route::apiResource('wallets', WalletController::class);
    });

});
