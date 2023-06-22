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
    public function index(Request $request){
        $kategoriBarang = NewKategoriBarang::first()->get();
        $barang = NewBarang::where('status','Active')->get();
        $Banner = Banner::all();

        $Artikel = Artikel::orderBy('id', 'desc')->take(5)->get();
        
        if($request->sort == 'termurah') {
            $barang = NewBarang::orderby('harga_asli','asc')->where('status','Active')->get();
        }elseif($request->sort == 'termahal'){
            $barang = NewBarang::orderby('harga_asli','desc')->where('status','Active')->get();
        }elseif($request->sort == 'terbaru'){
            $barang = NewBarang::orderby('created_at','desc')->where('status','Active')->get();
        }elseif($request->sort == 'terlaris'){
            $barang = NewBarang::orderby('terjual','desc')->where('status','Active')->get();
        }elseif($request->sort == 'promo'){
            $barang = NewBarang::where('promosi','promo')->where('status','Active')->get();
        }
        // dd($Artikel);
        return view("home",compact('kategoriBarang','barang','Banner','Artikel'));
    }
    public function dataKategoriBarangKatalog(Request $request){
        $kategoriBarang = NewKategoriBarang::first()->get();
        // $barang = NewBarang::with('KategoriBarang')->latest()->where('status','active')->paginate(4);
        $barang = NewBarang::with('KategoriBarang')->latest()->where('status','active')->get();
        $allbarang = NewBarang::with('KategoriBarang')->latest()->get();

        $barangrandomkiri = NewBarang::orderByRaw('RAND()')->where('status','active')->get();
        $barangrandomkanan = NewBarang::orderByRaw('RAND()')->where('status','active')->get();

        // foreach($barang as $item){
            // if($request->sort == '{{$barang->KategoriBarang->id}}' && $barang->id_kategori) {
            //     $barang = Barang::all();
            // }
        // }

        return view("katalog",compact('kategoriBarang','barang','barangrandomkiri','barangrandomkanan','allbarang'));
    }
    public function dataKategoriBarangKatalogId($id){
        // $KategoriBarangId = NewKategoriBarang::find($id)->get();
        $KategoriBarangfilter = NewBarang::with('KategoriBarang')->where('id_kategori',$id)->where('status','active')->get();
        // dd($KategoriBarangId);

        $kategoriBarang = NewKategoriBarang::first()->get();
        $barang = NewBarang::with('KategoriBarang')->latest()->where('status','active')->get();
        $allbarang = NewBarang::with('KategoriBarang')->latest()->get();


        $barangrandomkiri = NewBarang::orderByRaw('RAND()')->where('status','active')->get();
        $barangrandomkanan = NewBarang::orderByRaw('RAND()')->where('status','active')->get();
        return view("katalogFilter",compact('kategoriBarang','barang','barangrandomkiri','barangrandomkanan','KategoriBarangfilter','allbarang'));
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
    public function detailBarang($id){
        $barang = NewBarang::find($id);
        $shareComponent = \Share::currentPage()
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()    
        ->whatsapp()        
        ->reddit();
        return view("detailBarang",compact('barang','shareComponent'));
    }
    public function SearchProduct(Request $request){
        if ($request->search) {
            $searchProduct = NewBarang::where('judul_barang','LIKE','%'.$request->search.'%')->latest()->paginate(10);
            return view('search', compact('searchProduct'));
        } else {
           return redirect()->back()->with('message','Empty Search');
        }
        
    }
    // public function BarangKategori($id){
    //     if ($request->search) {
    //         $searchProduct = NewBarang::where('judul_barang','LIKE','%'.$request->search.'%')->latest()->paginate(10);
    //         return view('search', compact('searchProduct'));
    //     } else {
    //        return redirect()->back()->with('message','Empty Search');
    //     }
        
    // }
}
