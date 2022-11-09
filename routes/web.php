<?php

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

//////////////////////////////
// Admin機能のルーティング定義 (Folder: Admin)
//////////////////////////////
Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        //ログイン
        Route::get('login', 'LoginController@showLoginForm')->name('showLoginForm');
        Route::post('login', 'LoginController@login')->name('login');
        //2回認証OTP
        Route::resource('verify', 'TwoFactorController')->only(['index', 'store']);
        //再発行コードOTP
        Route::get('verify/resend', 'TwoFactorController@resend')->name('verify.resend');
    });
});
