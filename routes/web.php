<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ArtikelController;
// use App\Http\Controllers\SocialShareButtonController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListChartController;
use App\Http\Controllers\ManageUserCotroller;
use App\Http\Controllers\ListFavoritController;
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

// Login



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::post('/postregister',[LoginController::class, 'postregister'])->name('postregister');

Route::get('/verification/{$id}', [LoginController::class, 'verification'])->name('verification');
Route::post('/verified',[LoginController::class, 'verified'])->name('verified');
// Route::get('/resend', [LoginController::class, 'resendotp'])->name('resendotp');
// Route::post('/register',[LoginController::class, 'verify'])->name('verify');

Route::get('/signin', [SigninController::class, 'adminlogin'])->name('signin');
Route::post('/postlogin',[SigninController::class, 'postadmin'])->name('postadmin');
Route::get('/logoutadmin', [SigninController::class, 'logoutadmin'])->name('logoutadmin');

// Route::middleware(['web'])->group(function(){
//     Route::middleware(['logged_in'])->group(function(){
//         Route::get('/', [LoginController::class, 'index'])->name('login');
//         Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');
//     });
//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [FrontEndBarangController::class, 'index'])->name('home');
    Route::get('search', [FrontEndBarangController::class,'SearchProduct']);
    Route::get('/detailBarang/{id}', [FrontEndBarangController::class,'detailBarang'])->name('detail_barang');
    
            Route::get('/katalog', [FrontEndBarangController::class,'dataKategoriBarangKatalog']);
            Route::get('/katalog/{id}', [FrontEndBarangController::class,'dataKategoriBarangKatalogId'])->name('katalogFilter');
            Route::get('/artikel', [FrontEndBarangController::class,'dataArtikel']);
            Route::get('/artikel/{id}', [FrontEndBarangController::class,'dataArtikelDetail'])->name('detail_artikel');
            Route::get('/kontak', function () {return view('kontak');});
// });
Route::middleware(['auth:web', 'PreventBack', 'user'])->group(function(){

        // Route::get('/katalog/{id}', [FrontEndBarangController::class,'SearchProduct']);

        // Route::get('/wishlist/{id}', [FrontEndBarangController::class,'detailBarang'])->name('detail_barang');

        Route::get('/wishlist', [FavoritController::class,'index'])->name('wl_index');
        Route::get('/wishlist/{id_barang}', [FavoritController::class,'store'])->name('favorit_barang');
        // Route::get('/wishlist/{id}', [FavoritController::class,'show'])->name('detail_favorit');

        Route::delete('wishlist/delete/{id}',[FavoritController::class,'destroy'])->name('Favorit-delete');
        // Route::get('/katalog/{slug}', [FrontEndBarangController::class,'ShowBarangByKategori'])->name('filter_barang');
        // Route::get('/katalog-filter/{Barang}', [FrontEndBarangController::class,'dataKategoriBarangKatalogFilter'])->name('filter_barang');

        // Route::get('/katalog-filter/{Barang}', [FrontEndBarangController::class,'filter_barang'])->name('filter_barang');
        // Route::get('/coba', function () {return view('cobacoba');});
    });
Route::middleware(['auth:web', 'PreventBack', 'admin'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('kategoriBarang',[KategoriBarangController::class,'index'])->name('kb_index');
            // Route::get('kategoriBarang/show/{id}',[KategoriBarangController::class,'show'])->name('kb_show');
            Route::get('kategoriBarang/create',[KategoriBarangController::class,'create'])->name('kb_create');
            Route::post('kategoriBarang/store',[KategoriBarangController::class,'store'])->name('kb_store');
            Route::get('kategoriBarang/edit/{id}',[KategoriBarangController::class,'edit'])->name('kb_edit');
            Route::put('kategoriBarang/update/{id}',[KategoriBarangController::class,'update'])->name('kb_update');
            Route::delete('kategoriBarang/delete/{id}',[KategoriBarangController::class,'destroy'])->name('kb_delete');
            // Route::resource('list_fav', ListFavoritController::class);
            
    
            // D A T A   B A R A N G  
            Route::get('barang',[BarangController::class,'index'])->name('b_index');
            // Route::get('Barang/show/{id}',[BarangController::class,'show'])->name('b_show');
            Route::get('barang/create',[BarangController::class,'create'])->name('b_create');
            Route::post('barang/store',[BarangController::class,'store'])->name('b_store');
            Route::get('barang/edit/{id}',[BarangController::class,'edit'])->name('b_edit');
            Route::put('barang/update/{id}',[BarangController::class,'update'])->name('b_update');
            // Route::get('banner/changeStatus/{id}',[BarangController::class,'changeStatus'])->name('ban_changeStatus');
            Route::delete('barang/delete/{id}',[BarangController::class,'destroy'])->name('b_delete');
    
            // D A T A   A R T I K E L 
            Route::get('admartikel',[ArtikelController::class,'index'])->name('art_index');
            // Route::get('Barang/show/{id}',[ArtikelController::class,'show'])->name('b_show');
            Route::get('admartikel/create',[ArtikelController::class,'create'])->name('art_create');
            Route::post('admartikel/store',[ArtikelController::class,'store'])->name('art_store');
            Route::get('admartikel/edit/{id}',[ArtikelController::class,'edit'])->name('art_edit');
            Route::put('admartikel/update/{id}',[ArtikelController::class,'update'])->name('art_update');
            Route::delete('admartikel/delete/{id}',[ArtikelController::class,'destroy'])->name('art_delete');
    
            // D A T A   B A N N E R
            Route::get('banner',[BannerController::class,'index'])->name('ban_index');
            // Route::get('Barang/show/{id}',[BannerController::class,'show'])->name('b_show');
            Route::get('banner/create',[BannerController::class,'create'])->name('ban_create');
            Route::post('banner/store',[BannerController::class,'store'])->name('ban_store');
            Route::get('banner/edit/{Banner}',[BannerController::class,'edit'])->name('ban_edit');
            Route::put('banner/update/{id}',[BannerController::class,'update'])->name('ban_update');
            Route::delete('banner/delete/{id}',[BannerController::class,'destroy'])->name('ban_delete');
    });
//     Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
//     Route::group(['middleware' => ['auth', 'cekLevel:admin']], function(){
//         // D A T A   K A T E G O R I B A R A N G  
//         Route::get('kategoriBarang',[KategoriBarangController::class,'index'])->name('kb_index');
//         // Route::get('kategoriBarang/show/{id}',[KategoriBarangController::class,'show'])->name('kb_show');
//         Route::get('kategoriBarang/create',[KategoriBarangController::class,'create'])->name('kb_create');
//         Route::post('kategoriBarang/store',[KategoriBarangController::class,'store'])->name('kb_store');
//         Route::get('kategoriBarang/edit/{id}',[KategoriBarangController::class,'edit'])->name('kb_edit');
//         Route::put('kategoriBarang/update/{id}',[KategoriBarangController::class,'update'])->name('kb_update');
//         Route::delete('kategoriBarang/delete/{id}',[KategoriBarangController::class,'destroy'])->name('kb_delete');
        
//         // Manage User
//         Route::resource('manage_user', ManageUserCotroller::class);

//         // D A T A   B A R A N G  
//         Route::get('barang',[BarangController::class,'index'])->name('b_index');
//         // Route::get('Barang/show/{id}',[BarangController::class,'show'])->name('b_show');
//         Route::get('barang/create',[BarangController::class,'create'])->name('b_create');
//         Route::post('barang/store',[BarangController::class,'store'])->name('b_store');
//         Route::get('barang/edit/{id}',[BarangController::class,'edit'])->name('b_edit');
//         Route::put('barang/update/{id}',[BarangController::class,'update'])->name('b_update');
//         // Route::get('banner/changeStatus/{id}',[BarangController::class,'changeStatus'])->name('ban_changeStatus');
//         Route::delete('barang/delete/{id}',[BarangController::class,'destroy'])->name('b_delete');

//         // D A T A   A R T I K E L 
//         Route::get('admartikel',[ArtikelController::class,'index'])->name('art_index');
//         // Route::get('Barang/show/{id}',[ArtikelController::class,'show'])->name('b_show');
//         Route::get('admartikel/create',[ArtikelController::class,'create'])->name('art_create');
//         Route::post('admartikel/store',[ArtikelController::class,'store'])->name('art_store');
//         Route::get('admartikel/edit/{id}',[ArtikelController::class,'edit'])->name('art_edit');
//         Route::put('admartikel/update/{id}',[ArtikelController::class,'update'])->name('art_update');
//         Route::delete('admartikel/delete/{id}',[ArtikelController::class,'destroy'])->name('art_delete');

//         // D A T A   B A N N E R
//         Route::get('banner',[BannerController::class,'index'])->name('ban_index');
//         // Route::get('Barang/show/{id}',[BannerController::class,'show'])->name('b_show');
//         Route::get('banner/create',[BannerController::class,'create'])->name('ban_create');
//         Route::post('banner/store',[BannerController::class,'store'])->name('ban_store');
//         Route::get('banner/edit/{Banner}',[BannerController::class,'edit'])->name('ban_edit');
//         Route::put('banner/update/{id}',[BannerController::class,'update'])->name('ban_update');
//         Route::delete('banner/delete/{id}',[BannerController::class,'destroy'])->name('ban_delete');

//     });
    
// });

    


