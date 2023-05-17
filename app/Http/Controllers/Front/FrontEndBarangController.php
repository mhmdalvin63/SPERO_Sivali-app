<?php

namespace App\Http\Controllers\Front;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\KategoriBarang;
use App\Http\Controllers\Controller;

class FrontEndBarangController extends Controller
{
    public function dataKategoriBarang(Request $request){
        $kategoriBarang = KategoriBarang::first()->get();
        $barang = Barang::latest()->get();
        
        if($request->sort == 'termurah') {
            $barang = Barang::orderby('harga_asli','asc')->get();
        }elseif($request->sort == 'termahal'){
            $barang = Barang::orderby('harga_asli','desc')->get();
        }elseif($request->sort == 'terbaru'){
            $barang = Barang::orderby('created_at','desc')->get();
        }elseif($request->sort == 'terlaris'){
            $barang = Barang::orderby('terjual','desc')->get();
        }elseif($request->sort == 'promo'){
            $barang = Barang::where('promosi','promo')->get();
        }

        return view("home",compact('kategoriBarang','barang'));
    }
    public function dataKategoriBarangKatalog(Request $request){
        $kategoriBarang = KategoriBarang::first()->get();
        $barang = Barang::with('kategoriBarang')->latest()->get();

        foreach($barang as $item){
            if($request->sort == '{{$item->$kategoriBarang->id}}') {
            $barang = Barang::where('id_kategori','{{$item->id_kategori}}')->get();
            }
        }
        
        return view("katalog",compact('kategoriBarang','barang'));
    }
}
