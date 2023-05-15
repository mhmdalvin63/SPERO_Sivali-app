<?php

namespace App\Http\Controllers\Front;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\KategoriBarang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;

class dataBarangFrontController extends Controller
{
    public function dataKategoriBarang(Request $request){
        $kategoriBarang = KategoriBarang::first()->get();
        $barang = Barang::latest()->get();
        
        if($request->sort == 'termurah') {
            $barang = Barang::orderby('harga','asc')->get();
        }elseif($request->sort == 'termahal'){
            $barang = Barang::orderby('harga','desc')->get();
        }elseif($request->sort == 'terbaru'){
            $barang = Barang::orderby('created_at','desc')->get();
        }

        return view("home",compact('kategoriBarang','barang'));
    }
    public function dataKategoriBarangKatalog(Request $request){
        $kategoriBarang = KategoriBarang::first()->get();
            // $barang = barang::latest()->get();
        $barang = Barang::with('kategoriBarang')->latest()->get();

        if($request->sort == '1') {
            $barang = Barang::where('id_kategori','1')->get();
        }if($request->sort == '2'){
            $barang = Barang::where('id_kategori','2')->get();
        }if($request->sort == '3'){
            $barang = Barang::where('id_kategori','3')->get();
        }
        // else($request->sort == '4'){
        //     $barang = barang::where('id_kategori','4')->get();
        // }

        // $sorted = $barang->sortBy('barang.id_kategori');
        // $sorted1 = $kategoriBarang->sortBy('kategoriBarang.id');

        // if($request->sort == 'termurah') {
        //     $barang = barang::orderby('harga','asc')->get();
        // }

        return view("katalog",compact('kategoriBarang','barang'));

        // $filter = $request->query('filter');

        // if (!empty($filter)) {
        //     $barang = barang::sortable()
        //         ->where('barang.id_kategori', 'like', '%'.$filter.'%')
        //         ->get();
        // } else {
        //     $barang = barang::sortable()
        //         ->get();
        // }
        // $barang->search(function($value, $key){
        //     strlen($value) == $barang->id_kategori;
        // })
        // return view("katalog",compact('kategoriBarang','barang'));

        // $kbid = kategoriBarang::find($id);
        // $getSort = $request->sort == '';
        // $sortBarang = barang::orderBy('id_kategori');
        // $sortKategoriBarang = kategoriBarang::orderBy('id');

        // if ($getSort = $sortBarang && $sortKategoriBarang ) {
        //     $barang = barang::with('kategoriBarang')->latest()->get();
        // }


            // $barang = barang::with('kategoriBarang')->get();
        // $kategoriBarang = kategoriBarang::first()->get();
        // $barang = barang::with('kategoriBarang')->latest()->get();
        // foreach($sorts as $sort){
        //     $query->orderBy($sort,'DESC')
        // };

        //     $sortedQuery = $query->get();

        // $sortBarang = barang::orderBy('id_kategori')->get();
        // $sortKategoriBarang = kategoriBarang::orderBy('id')->get();

        // if($request->sort == $sortKategoriBarang) {
        //     if ($sortKategoriBarang && $sortBarang) {
        //         $barang = barang::with('kategoriBarang')->get();
        //         // dd($barang);
                
        //     }
        // }


        // if($request->sort.'=='.kategoriBarang->kategori_barang &&    ) {
        //         $barang = barang::orderby('harga','asc')->get();
        //         // $sort = barang::orderby('id_kategori','id_kategori->nama_kategori');
        //         // dd($sort);
        //     }

        // $kategorisort = barang::

        // $sort = DB::table("barang")
        // ->select('id_kategori')
        // ->where('id_kategori','id_kategori->katgeori_barang')
        // ->get();

        // $sort = kategoriBarang::where('kategori_barang','id_kategori->kategori_barang');
        // if($request->sort == ) {
        //     // $barang = barang::orderby('harga','asc')->get();
        //     $sort = barang::orderby('id_kategori','id_kategori->nama_kategori');
        //     dd($sort);
        // }
        
        // if($request->sort == 'termurah') {
        //     $barang = barang::orderby('harga','asc')->get();
        // }elseif($request->sort == 'termahal'){
        //     $barang = barang::orderby('harga','desc')->get();
        // }elseif($request->sort == 'terbaru'){
        //     $barang = barang::orderby('created_at','desc')->get();
        // }

        
    }

    // public function dataKategoriBarangKatalog(Request $request){
    //     // $kategoriBarang = kategoriBarang::with('barang')->get();
    //     $barang = barang::with('kategoriBarang')->get();

    //     // if($request->sort.'='.$barang->id_kategori) {
    //     //     $barang = barang::with('kategoriBarang')->orderBy('kategori_barang','kategori_barang');
    //     // }
    //     // foreach ($barang as $item) {
    //     //     if($request->sort == $barang->id_kategori) {
    //     //         $barang = barang::orderby('harga','id_kategori')->get();
    //     //     }
    //     // }

    //     return view("katalog",compact('barang'));
    // }



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