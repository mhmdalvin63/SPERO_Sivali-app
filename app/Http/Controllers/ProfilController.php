<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = profil::all();
        return view('profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profil = profil::all();
        // $kategoriprofil = kategoriprofil::all();
        return view('profil.create', compact('profil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_profil' => 'required|image|mimes:jpeg,jpg,png,webp',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',  
        ]);

        $gambar_profil = $request->file('gambar_profil');
        $gambar_profil->storeAs('public/image', $gambar_profil->hashName());

        profil::create([
            'gambar_kategori' => $gambar_profil->hashName(),
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
        ]);
        // profil::create($request->all());
        return redirect('/profil')->with('success','Data Pemesanan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $profil = profil::find($id);
    //     return view('profil.show', compact('profil'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profil = profil::find($id);
        // $kategoriprofil = kategoriprofil::all();
        return view('profil.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_profil' => '|image|mimes:jpeg,jpg,png,webp',
            'nama_lengkap' => '',
            'alamat' => '',
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'email' => '', 
        ]);

        $profil = profil::findOrfail($id);
        if ($request->hasFile('gambar_profil')) {

            $gambar_profil = $request->file('gambar_profil');
            $gambar_profil->storeAs('public/image', $gambar_profil->hashName());

            Storage::delete('public/image/'.$profil->gambar_profil);

            $profil->update([
                'gambar_kategori' => $gambar_profil->hashName(),
                'nama_lengkap' => $request->nama_lengkap,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'email' => $request->email,
            ]);
        }else{
            $profil->update([
                'nama_lengkap' => $request->nama_lengkap,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'email' => $request->email,
            ]);
        }
        return redirect('/profil');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     $profil = profil::findOrfail($id);
    //     Storage::delete('public/image'.$profil->gambar_profil);
    //     $profil->delete();
    //     return redirect()->route('kb_index')->with('success', 'Data deleted successfully');
    // }
}