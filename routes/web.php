<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\Front\FrontEndBarangController;
use App\Http\Controllers\Front\DataBarangFrontController;

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

Route::get('/', [FrontEndBarangController::class,'dataKategoriBarang']);

Route::get('/profil', [ProfilController::class,'index']);

Route::get('/home', [FrontEndBarangController::class,'dataKategoriBarang']);
Route::get('/katalog', [FrontEndBarangController::class,'dataKategoriBarangKatalog']);
// Route::get('/katalog-filter/{Barang}', [FrontEndBarangController::class,'filter_barang'])->name('filter_barang');
Route::get('/artikel', function () {return view('artikel');});
Route::get('/kontak', function () {return view('kontak');});
Route::get('/coba', function () {return view('cobacoba');});

Route::get('/signin',[SigninController::class,'login'])->name('login');
Route::post('/postlogin',[SigninController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[SigninController::class,'logout'])->name('logout');

Route::middleware(['admin','auth:web'])->group(function(){
    // D A T A   K A T E G O R I B A R A N G  
    Route::get('kategoriBarang',[KategoriBarangController::class,'index'])->name('kb_index');
    // Route::get('kategoriBarang/show/{id}',[KategoriBarangController::class,'show'])->name('kb_show');
    Route::get('kategoriBarang/create',[KategoriBarangController::class,'create'])->name('kb_create');
    Route::post('kategoriBarang/store',[KategoriBarangController::class,'store'])->name('kb_store');
    Route::get('kategoriBarang/edit/{id}',[KategoriBarangController::class,'edit'])->name('kb_edit');
    Route::put('kategoriBarang/update/{id}',[KategoriBarangController::class,'update'])->name('kb_update');
    Route::delete('kategoriBarang/delete/{id}',[KategoriBarangController::class,'destroy'])->name('kb_delete');
    
    // D A T A   B A R A N G  
    Route::get('barang',[BarangController::class,'index'])->name('b_index');
    // Route::get('Barang/show/{id}',[BarangController::class,'show'])->name('b_show');
    Route::get('barang/create',[BarangController::class,'create'])->name('b_create');
    Route::post('barang/store',[BarangController::class,'store'])->name('b_store');
    Route::get('barang/edit/{id}',[BarangController::class,'edit'])->name('b_edit');
    Route::put('barang/update/{id}',[BarangController::class,'update'])->name('b_update');
    Route::delete('barang/delete/{id}',[BarangController::class,'destroy'])->name('b_delete');
});


