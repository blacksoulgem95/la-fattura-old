<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/login', fn() => view('auth.login'))->name('login');

Route::get('/customer/login', fn() => view('auth.customer-login'))->name('customer.login');

Route::get('/recovery', fn() => view('auth.password-recovery'))->name('password-recovery');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
