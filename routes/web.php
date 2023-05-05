<?php

use App\Http\Controllers\KategoriBarangController;
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

Route::get('/home', function () {return view('home');});
Route::get('/katalog', function () {return view('katalog');});
Route::get('/artikel', function () {return view('artikel');});
Route::get('/kontak', function () {return view('kontak');});
Route::get('/coba', function () {return view('cobacoba');});

// D A T A   K E L A S  
Route::get('kategoriBarang',[KategoriBarangController::class,'index'])->name('kb_index');
// Route::get('kategoriBarang/show/{id}',[KategoriBarangController::class,'show'])->name('kb_show');
Route::get('kategoriBarang/create',[KategoriBarangController::class,'create'])->name('kb_create');
Route::post('kategoriBarang/store',[KategoriBarangController::class,'store'])->name('kb_store');
Route::get('kategoriBarang/edit/{id}',[KategoriBarangController::class,'edit'])->name('kb_edit');
Route::put('kategoriBarang/update/{id}',[KategoriBarangController::class,'update'])->name('kb_update');
Route::delete('kategoriBarang/delete/{id}',[KategoriBarangController::class,'destroy'])->name('kb_delete');


