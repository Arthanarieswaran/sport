<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('reg',[FrontendController::class, 'reg'])->name('reg');
Route::get('running',[FrontendController::class,'running'])->name('running');
Route::get('hockey',[FrontendController::class,'hockey'])->name('hockey');
Route::get('football',[FrontendController::class,'football'])->name('football');
Route::get('kabbadi',[FrontendController::class,'kabbadi'])->name('kabbadi');



