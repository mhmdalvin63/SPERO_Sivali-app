<?php

namespace App\Http\Controllers\Front;

use App\Models\barang;
use Illuminate\Http\Request;
use App\Models\kategoriBarang;
use App\Http\Controllers\Controller;

class dataBarangFrontController extends Controller
{
    public function dataKategoriBarang(Request $request){
        $kategoriBarang = kategoriBarang::first()->get();
        $barang = barang::latest()->get();
        
        if($request->sort == 'termurah') {
            $barang = barang::orderby('harga','asc')->get();
        }elseif($request->sort == 'termahal'){
            $barang = barang::orderby('harga','desc')->get();
        }elseif($request->sort == 'terbaru'){
            $barang = barang::orderby('created_at','desc')->get();
        }

        return view("home",compact('kategoriBarang','barang'));
    }

    // public function home_katalog(){
    //     $barang = barang::first()->get();
    //     if ($barang) {
    //         return view("home",compact('barang'));
    //     } else{
    //         return response()->json(['message'=>'Tidak Ada Data'], 200);
    //     };

    //     return view("home",compact('barang'));
    // }
}
