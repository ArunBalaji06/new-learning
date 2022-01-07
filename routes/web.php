<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('welcome');
});

Route::get('/auth/redirect/{provider}',[App\Http\Controllers\GoogleLoginController::class, 'redirect']);
Route::get('/callback/{provider}', [App\Http\Controllers\GoogleLoginController::class,'callback']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Livewire route
Route::get('/livewire',[App\Http\Controllers\LiveWireController::class,'index'])->name('live-wire');
?>