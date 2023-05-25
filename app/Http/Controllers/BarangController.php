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
            'gambar_barang' => 'required|image|mimes:jpeg,jpg,png,webp',
            'id_kategori' => 'required',
            'judul_barang' => 'required',
            'deskripsi' => 'required',
            'promosi' => '',
            'harga_asli' => 'required',
            'harga_diskon' => '',
            'stok' => 'required',
            'terjual' => '',
            'rate' => 'required',
        ]);

        $gambar_barang = $request->file('gambar_barang');
        $gambar_barang->storeAs('public/image', $gambar_barang->hashName());
        // <a href="{{$data->file_location.'/'.$data->file_hash}}" download="{{$data->file_name}}"> </a>
        NewBarang::create([
            'status' => $request->status,
            'file_name' => $gambar_barang->getClientOriginalName(),
            'file_location' => URL('/').'/storage/image/',
            'file_hash' => $gambar_barang->hashName(),
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
        // barang::create($request->all());
        return redirect('/barang')->with('success','Data Pemesanan Berhasil Di Tambahkan');
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
            'gambar_barang' => '|image|mimes:jpeg,jpg,png,webp',
            'id_kategori' => '',
            'judul_barang' => '',
            'deskripsi' => '',
            'promosi' => '',
            'harga_asli' => '',
            'harga_diskon' => '',
            'stok' => '',
            'terjual' => '',
            'rate' => '',
        ]);

        $barang = NewBarang::findOrfail($id);
        if ($request->hasFile('gambar_barang')) {

            $gambar_barang = $request->file('gambar_barang');
            $gambar_barang->storeAs('public/image', $gambar_barang->hashName());

            Storage::delete('public/image/'.$barang->gambar_barang);

            $barang->update([
                'status' => $request->status,
                'gambar_barang' => $gambar_barang->hashName(),
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
        return redirect()->route('b_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = NewBarang::findOrfail($id);
        Storage::delete('public/image'.$barang->gambar_barang);
        $barang->delete();
        return redirect()->route('kb_index')->with('success', 'Data deleted successfully');
    }
}
