<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('',[FirstController::class,'main'])->name('main');

Route::get('create',[FirstController::class,'createlist'])->name('createlist');
Route::get('insert',[FirstController::class,'insert'])->name('insert');
Route::get('edit/{id}',[FirstController::class,'edit'])->name('edit');
Route::post('update/{id}',[FirstController::class,'update'])->name('update');
Route::get('delete/{id}',[FirstController::class,'delete'])->name('delete');
