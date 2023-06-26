<?php

namespace App\Http\Controllers;

// use App\Models\KategoriBarang;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\NewKategoriBarang;
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
        $KategoriBarang = NewKategoriBarang::all();
        return view('backEnd.kategoriBarang.index', compact('KategoriBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $KategoriBarang = NewKategoriBarang::all();
        return view('backEnd.kategoriBarang.create', compact('KategoriBarang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_kategori' => 'required|file|mimes:jpeg,jpg,png,webp|max:1024',
            'kategori_barang' => 'required',
        ],[
            'gambar_kategori' => 'Gambar Harus Di isi',
            'gambar_kategori.mimes' => 'Image Harus jpeg, jpg, png, webp',
            'gambar_kategori.max' => 'Image Melebihi 1024kb',
            'kategori_barang' => 'Kategori Tidak Boleh Kosong'
        ]);

        $kategoriNew = new NewKategoriBarang();
        $kategoriNew->kategori_barang = $request->kategori_barang;
        if($request->hasFile('gambar_kategori'))
        {
            $category = 'category'.rand(1,99999).'.'.$request->gambar_kategori->getClientOriginalExtension();
            $request->file('gambar_kategori')->move(public_path().'/img/', $category);
            $kategoriNew->gambar_kategori = $category;
            $kategoriNew->save();
        }
        $kategoriNew->save();

        

        // KategoriBarang::create($request->all());
        return redirect('/kategoriBarang')->with('success','Data Kategori Berhasil Di Tambahkan');
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
        $KategoriBarang = NewKategoriBarang::find($id);
        return view('backEnd.kategoriBarang.edit', compact('KategoriBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_kategori' => '|file|mimes:jpeg,jpg,png,webp|max:1024',
            'kategori_barang' => '',
        ],[
            'gambar_kategori.mimes' => 'Image Harus jpeg, jpg, png, webp',
            'gambar_kategori.max' => 'Image Melebihi 1024kb',
        ]);

        $KategoriBarang = NewkategoriBarang::findOrfail($id);
        if($request->hasFile('gambar_kategori'))
        {
            $category = 'category'.rand(1,99999).'.'.$request->gambar_kategori->getClientOriginalExtension();
            $request->file('gambar_kategori')->move(public_path().'/img/', $category);
            $KategoriBarang->gambar_kategori = $category;
            $KategoriBarang->save();
            
            $KategoriBarang->update([
                'gambar_kategori' => $gambar_kategori->hashName(),
                'kategori_barang' => $request->kategori_barang,
            ]);
        }else{
            $KategoriBarang->update([
                'kategori_barang' => $request->kategori_barang,
            ]);
        }
        return redirect()->route('kb_index')->with('success', 'Data Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $KategoriBarang = NewKategoriBarang::findOrfail($id);
        Storage::delete('public/image'.$KategoriBarang->gambar_kategori);
        $KategoriBarang->delete();
        return redirect()->route('kb_index')->with('deleted', 'Data Berhasil Dihapus');
    }
}
