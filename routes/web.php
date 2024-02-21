<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\PenerbitPageController;
use App\Http\Controllers\Admin\PengadaanController;
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

Route::resource('/', AdminController::class);
Route::resource('admin', AdminController::class);
Route::resource('adminpage', AdminPageController::class);
Route::resource('penerbit', PenerbitPageController::class);
Route::resource('penerbitpage', PenerbitPageController::class);
Route::resource('pengadaan', PengadaanController::class);
