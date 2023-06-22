<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Favorit;
use App\Models\NewBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $FavoritMerge = Favorit::with('Barang')->select('id_barang',Favorit::raw('sum(favorits.id_barang) as FavoritMerge'))->groupBy('id_barang')->latest()->get();  
        $Favorit = Favorit::with('Barang')->orderBy('created_at','desc')->distinct()->get();
        // dd($FavoritMerge);
        $FavoritCount = Favorit::count();
        
        // $this->data['Favorit'] = $Favorit;

        return view('wishlist', compact('Favorit','FavoritCount','FavoritMerge'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        // $Barang = NewBarang::find($id);

        // dd($Barang);
        // $Favorit = Favorit::where('id_barang', $Barang->id)->first();

        // if($Barang == $id){
            // return response('Barang Sudah Ditambahkan');
            
            // $this->validate($request,[
            //     'id_barang' => 'required',
            // ]);
            $love = Favorit::create(
                [
                    'id_barang' => $id,
                    'user_id' => Auth::user()->id,
                    ]
            );
                // dd($id);
        // }
        // return response('Barang Berhasil Ditambahkan');
        // return redirect('/katalog');
        // return view('katalog', compact('Favorit'));
        return redirect('/wishlist')->with('success','Favorit Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Favorit = NewBarang::with('Favorit')->find($id);
        return view('detail_wishlist', compact('Favorit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorit $favorit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorit $favorit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
        {
            $Favorit = Favorit::where('id_barang',$id)->first();
                $Favorit = $Favorit->offers_id;
                $Favorit = Favorit::where('id_barang', $id)->delete();
                return Redirect::to('wishlist');
        }
}
