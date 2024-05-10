<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\PropoController;
use App\Http\Controllers\SliderController;

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

Route::get('/admin',[Admincontroller::class,'index'])->name('admin.index');
Route::resources([
    'sliders' => SliderController::class,
    'propos' => PropoController::class,
]);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
