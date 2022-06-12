<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/', ['App\Http\Controllers\SiswaController','index'])->name('datasiswa');
Route::get('/inputdata', ['App\Http\Controllers\SiswaController','create'])->name('inputdata');
Route::post('/simpandata', ['App\Http\Controllers\SiswaController','store'])->name('simpandata');
Route::get('/editdata/{id}', ['App\Http\Controllers\SiswaController','edit'])->name('editdata');
Route::post('/updatedata/{id}', ['App\Http\Controllers\SiswaController','update'])->name('updatedata');
Route::get('/hapusdata/{id}', ['App\Http\Controllers\SiswaController','destroy'])->name('hapusdata');

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});