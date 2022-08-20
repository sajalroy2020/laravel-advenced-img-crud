<?php

use App\Http\Controllers\TestingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('add-data');
});

Route::post('save-data',[TestingController::class,'save_data'])->name('save-data');
Route::get('dataList',[TestingController::class,'dataList'])->name('dataList');
Route::get('edit/{id}',[TestingController::class,'edit']);
Route::get('delete/{id}',[TestingController::class,'delete']);

