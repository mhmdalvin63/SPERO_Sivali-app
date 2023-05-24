<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Favorit;
use App\Models\NewBarang;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Favorit = Favorit::orderBy('created_at','desc')->get();
        
        // $this->data['Favorit'] = $Favorit;

        return view('wishlist', compact('Favorit'));
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
                    ]
                );
                // dd($id);
        // }
        // return response('Barang Berhasil Ditambahkan');
        // return redirect('/katalog');
        // return view('katalog', compact('Favorit'));
        return redirect('/katalog')->with('success','Favorit Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Favorit $favorit)
    {
        //
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
        $Favorit = Favorit::findOrFail($id);
        $Favorit->delete();
        // \Session::flash('success', 'Data Berhasil Di Hapus');
        return redirect('favorit');
    }
}
