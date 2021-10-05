<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NikahController;
use App\Http\Controllers\IbadahController;
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
Route::get('/', [IndexController::class,'index']);

Route::get('/nikah', [NikahController::class,'nikah']);
Route::get('/create', [NikahController::class,'create']);
Route::post('/store', [NikahController::class,'store']);
Route::get('/show/{id}', [NikahController::class, 'show']);
Route::post('/update/{id}', [NikahController::class,'update']);
Route::get('/destroy/{id}', [NikahController:: class, 'destroy']); 

Route::get('/tempat_ibadah', [IbadahController::class,'ibadah']);
Route::get('/create1', [IbadahController::class,'create1']);
Route::post('/store1', [IbadahController::class,'store1']);
Route::get('/show1/{id}', [IbadahController::class, 'show1']);
Route::post('/update1/{id}', [IbadahController::class,'update1']);
Route::get('/destroy1/{id}', [IbadahController:: class, 'destroy1']);