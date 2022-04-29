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

Route::get('/', App\Http\Livewire\Home\Home\Index::class)->name('home');

Route::get('/register', App\Http\Livewire\Home\Users\Register::class)->name('register');
Route::get('/login', App\Http\Livewire\Home\Users\Login::class)->name('login');
Route::post('/logout', [App\Http\Controllers\HomeController::class,'logout'])->name('logout');
Route::get('/verify-mobile/{id}', App\Http\Livewire\Home\Users\VerifyMobile::class)->name('verify.mobile');


// \Auth::routes();
