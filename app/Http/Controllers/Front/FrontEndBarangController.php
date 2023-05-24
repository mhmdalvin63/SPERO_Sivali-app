<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
// use App\Models\Barang;
use App\Models\Artikel;
use App\Models\NewBarang;
// use App\Models\KategoriBarang;
use Illuminate\Http\Request;
use App\Models\NewKategoriBarang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontEndBarangController extends Controller
{
    public function dataKategoriBarang(Request $request){
        $kategoriBarang = NewKategoriBarang::first()->get();
        $barang = NewBarang::latest()->get();
        $Banner = Banner::all();
        
        if($request->sort == 'termurah') {
            $barang = NewBarang::orderby('harga_asli','asc')->get();
        }elseif($request->sort == 'termahal'){
            $barang = NewBarang::orderby('harga_asli','desc')->get();
        }elseif($request->sort == 'terbaru'){
            $barang = NewBarang::orderby('created_at','desc')->get();
        }elseif($request->sort == 'terlaris'){
            $barang = NewBarang::orderby('terjual','desc')->get();
        }elseif($request->sort == 'promo'){
            $barang = NewBarang::where('promosi','promo')->get();
        }

        return view("home",compact('kategoriBarang','barang','Banner'));
    }


    public function dataKategoriBarangKatalog(Request $request){
        $kategoriBarang = NewKategoriBarang::first()->get();
        $barang = NewBarang::with('KategoriBarang')->latest()->get();

        $barangrandomkiri = NewBarang::orderByRaw('RAND()')->get();
        $barangrandomkanan = NewBarang::orderByRaw('RAND()')->get();

        // foreach($barang as $item){
            // if($request->sort == '{{$barang->KategoriBarang->id}}' && $barang->id_kategori) {
            //     $barang = Barang::all();
            // }
        // }

        return view("katalog",compact('kategoriBarang','barang','barangrandomkiri','barangrandomkanan'));
    }
    public function dataKategoriBarangKatalogId($id){
        $KategoriBarangfilter = NewBarang::with('KategoriBarang')->where('id_kategori',$id)->get();
        
        $kategoriBarang = NewKategoriBarang::first()->get();
        $barang = NewBarang::with('KategoriBarang')->latest()->get();

        $barangrandomkiri = NewBarang::orderByRaw('RAND()')->get();
        $barangrandomkanan = NewBarang::orderByRaw('RAND()')->get();
        return view("katalogFilter",compact('kategoriBarang','barang','barangrandomkiri','barangrandomkanan','KategoriBarangfilter'));
        // dd($KategoriBarangfilter);
    }

    public function dataArtikel(Request $request){
        $Artikel = Artikel::all();
        $ArtikelRandom = Artikel::orderByRaw('RAND()')->get();
        return view("artikel",compact('Artikel','ArtikelRandom'));
    }
    public function dataArtikelDetail($id){
        $ArtikelDetail = Artikel::find($id);
        $Artikel = Artikel::all();
        return view("artikelDetail",compact('Artikel', 'ArtikelDetail'));
    }
    // public function dataArtikelid($id){
    //     $Artikelid = Artikel::find($id);
    //     return view("artikel",compact('Artikelid'));
    // }

    public function detailBarang($id){
        $barang = NewBarang::find($id);
        return view("detailBarang",compact('barang'));
    }


    // public function filter_barang(Barang $barang){
    //     // $barang = KategoriBarang::with('Barang')->get();
    //     $barang->KategoriBarang()->get();

    //     return view("katalog",compact('barang'));
    // //    return $barang;
    // }
}
