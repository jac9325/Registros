<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('registros',[RegistroController::class,'index'])->name('registros.index');
Route::get('registros/create',[RegistroController::class,'create'])->name('registros.create');
Route::get('registros/{id}',[RegistroController::class,'show'])->name('registros.show');

Route::post('registros',[RegistroController::class,'store'])->name('registros.store');
Route::get('registros/{id}/edit', [RegistroController::class,'edit'])->name('registros.edit');
Route::put('registros/{registro}',[RegistroController::class,'update'])->name('registros.update');
