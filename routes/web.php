<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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

Route::get('/',[studentcontroller::class,'index']);
Route::get('/edit/{id}',[studentcontroller::class,'edit']);
Route::get('/show/{id}',[studentcontroller::class,'show']);
Route::get('/create',[studentcontroller::class,'create']);
Route::post('/store',[studentcontroller::class,'store']);
Route::post('/update/{id}',[studentcontroller::class,'update']);
Route::get('/destroy/{id}',[studentcontroller::class,'destroy']);
