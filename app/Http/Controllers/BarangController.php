<?php

namespace App\Http\Controllers;

// use App\Models\Barang;
use App\Models\NewBarang;
use Illuminate\Http\Request;
// use App\Models\KategoriBarang;
use Illuminate\Http\Response;
use App\Models\NewKategoriBarang;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = NewBarang::latest()->get();
        return view('backEnd.Barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = NewBarang::all();
        $kategoriBarang = NewKategoriBarang::all();
        return view('backEnd.Barang.create', compact('barang','kategoriBarang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'status' => 'required',
            'file_name' => 'required|file|mimes:jpeg,jpg,png,webp|size:2048',
            'id_kategori' => 'required',
            'judul_barang' => 'required',
            'deskripsi' => 'required',
            'promosi' => '',
            'harga_asli' => 'required',
            'harga_diskon' => '',
            'stok' => 'required',
            'terjual' => '',
            'rate' => 'required',
        ],[
            'status' => 'Status Tidak Boleh Kosong',
            'file_name' => 'File Tidak Boleh Kosong',
            'file_name.size' => 'Image Melebihi 2048kb',
            'file_name.mimes' => 'Image Format Harus jpg, jpeg, png, webp',
            'id_kategori' => 'Kategori Tidak Boleh Kosong',
            'judul_barang' => 'Judul Tidak Boleh Kosong',
            'harga_asli' => 'Harga Asli Tidak Boleh Kosong',
            'stok' => 'Stok Tidak Boleh Kosong',
            'rate' => 'Rate Tidak Boleh Kosong',
        ]);

        $newBarang = new NewBarang();
        $newBarang->status = $request->status;

        $newBarang->id_kategori =$request->id_kategori;
        $newBarang->judul_barang = $request->judul_barang;
        $newBarang->deskripsi = $request->deskripsi;
        $newBarang->promosi = $request->pomosi;
        $newBarang->harga_asli = $request->harga_asli;
        $newBarang->harga_diskon = $request->harga_diskon;
        $newBarang->stok = $request->stok;
        $newBarang->terjual = $request->terjual;
        $newBarang->rate = $request->rate;
        if($request->hasFile('file_name'))
        {
            $fotoBarang = 'gambar'.rand(1,99999).'.'.$request->file_name->getClientOriginalExtension();
            $request->file('file_name')->move(public_path().'/img/', $fotoBarang);
            $newBarang->file_name = $fotoBarang;
            $newBarang->save();
        }
        $newBarang->save();
      
        // barang::create($request->all());
        return redirect('/barang')->with('success','Data Barang Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $barang = barang::find($id);
    //     return view('barang.show', compact('barang'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = NewBarang::find($id);
        $kategoriBarang = NewKategoriBarang::all();
        return view('backEnd.Barang.edit', compact('barang','kategoriBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'status' => '',
            'file_name' => '|file|mimes:jpeg,jpg,png,webp|size:2048|',
            'id_kategori' => '',
            'judul_barang' => '',
            'deskripsi' => '',
            'promosi' => '',
            'harga_asli' => '',
            'harga_diskon' => '',
            'stok' => '',
            'terjual' => '',
            'rate' => '',
        ],[
            'file_name.size' => 'Image Melebihi 2048kb',
            'file_name.mimes' => 'Image Format Harus jpg, jpeg, png, webp',
        ]);

        $barang = NewBarang::findOrfail($id);
        if($request->hasFile('file_name'))
        {
            $fotoBarang = 'gambar'.rand(1,99999).'.'.$request->file_name->getClientOriginalExtension();
            $request->file('file_name')->move(public_path().'/img/', $fotoBarang);
            $barang->file_name = $fotoBarang;
            $barang->save();

            $barang->update([
                'status' => $request->status,
                'id_kategori' => $request->id_kategori,
                'judul_barang' => $request->judul_barang,
                'deskripsi' => $request->deskripsi,
                'promosi' => $request->promosi,
                'harga_asli' => $request->harga_asli,
                'harga_diskon' => $request->harga_diskon,
                'stok' => $request->stok,
                'terjual' => $request->terjual,
                'rate' => $request->rate,
            ]);
        }else{
            $barang->update([
                'status' => $request->status,
                'id_kategori' => $request->id_kategori,
                'judul_barang' => $request->judul_barang,
                'deskripsi' => $request->deskripsi,
                'promosi' => $request->promosi,
                'harga_asli' => $request->harga_asli,
                'harga_diskon' => $request->harga_diskon,
                'stok' => $request->stok,
                'terjual' => $request->terjual,
                'rate' => $request->rate,
            ]);
        }
        return redirect()->route('b_index')->with('success', 'Data Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = NewBarang::findOrfail($id);
        Storage::delete('public/image'.$barang->gambar_barang);
        $barang->delete();
        return redirect()->route('kb_index')->with('deleted', 'Data Berhasil Dihapus');
    }
}
