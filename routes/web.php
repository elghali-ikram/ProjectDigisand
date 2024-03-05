<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\ADD;


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

Route::get('/', [index::class,'index'])->name('home');
Route::get('/ADD', [ADD::class,'ADD'])->name('ADD');
Route::post('/produits', [index::class, 'store'])->name('produits.store');

