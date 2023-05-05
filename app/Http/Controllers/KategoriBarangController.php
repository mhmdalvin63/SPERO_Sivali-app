<?php

namespace App\Http\Controllers;

use App\Models\kategoriBarang;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $KategoriBarang = KategoriBarang::all();
        return view('backEnd.kategoriBarang.index', compact('KategoriBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $KategoriBarang = KategoriBarang::all();
        return view('backEnd.KategoriBarang.create', compact('KategoriBarang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_kategori' => 'required|image|mimes:jpeg,jpg,png,webp',
            'kategori_barang' => 'required',
        ]);

        $gambar_kategori = $request->file('gambar_kategori');
        $gambar_kategori->storeAs('public/image', $gambar_kategori->hashName());

        kategoriBarang::create([
            'gambar_kategori' => $gambar_kategori->hashName(),
            'kategori_barang' => $request->kategori_barang,
        ]);
        // KategoriBarang::create($request->all());
        return redirect('/kategoriBarang')->with('success','Data Pemesanan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $KategoriBarang = KategoriBarang::find($id);
    //     return view('KategoriBarang.show', compact('KategoriBarang'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $KategoriBarang = KategoriBarang::find($id);
        return view('backEnd.KategoriBarang.edit', compact('KategoriBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_kategori' => '|image|mimes:jpeg,jpg,png,webp',
            'kategori_barang' => '',
        ]);

        $KategoriBarang = kategoriBarang::findOrfail($id);
        if ($request->hasFile('gambar_kategori')) {

            $gambar_kategori = $request->file('gambar_kategori');
            $gambar_kategori->storeAs('public/image', $gambar_kategori->hashName());

            Storage::delete('public/image/'.$KategoriBarang->gambar_kategori);

            $KategoriBarang->update([
                'gambar_kategori' => $gambar_kategori->hashName(),
                'kategori_barang' => $request->kategori_barang,
            ]);
        }else{
            $KategoriBarang->update([
                'kategori_barang' => $request->kategori_barang,
            ]);
        }
        return redirect()->route('kb_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $KategoriBarang = KategoriBarang::findOrfail($id);
        Storage::delete('public/image'.$KategoriBarang->gambar_kategori);
        $KategoriBarang->delete();
        return redirect()->route('kb_index')->with('success', 'Data deleted successfully');
    }
}
