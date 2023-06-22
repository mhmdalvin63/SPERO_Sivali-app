<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Artikel = Artikel::all();
        return view('backEnd.Artikel.index', compact('Artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Artikel = Artikel::all();
        return view('backEnd.Artikel.create', compact('Artikel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_artikel' => 'required|image|mimes:jpeg,jpg,png,webp',
            'judul_artikel' => 'required',
            'subjudul_artikel' => 'required',
            'deskripsi_artikel' => 'required',
        ]);

        $newArtikel = new Artikel();
        $newArtikel->judul_artikel = $request->judul_artikel;
        $newArtikel->subjudul_artikel = $request->subjudul_artikel;
        $newArtikel->deskripsi_artikel = $request->deskripsi_artikel;

        if($request->hasFile('gambar_artikel'))
        {
            $fotoArtikel = 'gambar'.rand(1,99999).'.'.$request->gambar_artikel->getClientOriginalExtension();
            $request->file('gambar_artikel')->move(public_path().'/img/', $fotoArtikel);
            $newArtikel->gambar_artikel = $fotoArtikel;
            $newArtikel->save();
        }

       $newArtikel->save();
        // Artikel::create($request->all());
        return redirect('/admartikel')->with('success','Data Artikel Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $Artikel = Artikel::find($id);
    //     return view('Artikel.show', compact('Artikel'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Artikel = Artikel::find($id);
        return view('backEnd.Artikel.edit', compact('Artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_artikel' => '|image|mimes:jpeg,jpg,png,webp',
            'judul_artikel' => '',
            'subjudul_artikel' => '',
            'deskripsi_artikel' => '',
        ]);

        $Artikel = Artikel::findOrfail($id);
        if($request->hasFile('gambar_artikel'))
        {
            $fotoArtikel = 'gambar'.rand(1,99999).'.'.$request->gambar_artikel->getClientOriginalExtension();
            $request->file('gambar_artikel')->move(public_path().'/img/', $fotoArtikel);
            $Artikel->gambar_artikel = $fotoArtikel;
            $Artikel->save();

            $Artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'subjudul_artikel' => $request->subjudul_artikel,
                'deskripsi_artikel' => $request->deskripsi_artikel,
            ]);
        }else{
            $Artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'subjudul_artikel' => $request->subjudul_artikel,
                'deskripsi_artikel' => $request->deskripsi_artikel,
            ]);
        }
        return redirect()->route('art_index')->with('success','Data Artikel Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Artikel = Artikel::findOrfail($id);
        Storage::delete('public/image'.$Artikel->gambar_artikel);
        $Artikel->delete();
        return redirect()->route('art_index')->with('deleted', 'Data Berhasil Dihapus');
    }
}
