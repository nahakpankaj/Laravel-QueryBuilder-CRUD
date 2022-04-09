<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentContoller;

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

Route::get('/',[StudentContoller::class,'index'])->name('index');
Route::post('/',[StudentContoller::class,'create'])->name('create');
Route::get('/edit/{id}',[StudentContoller::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentContoller::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentContoller::class,'destroy'])->name('destroy');

