<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\NewBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Banner = Banner::with('Barang')->get();

        return view('backEnd.Banner.index', compact('Banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Banner = Banner::all();
        $Barang = NewBarang::where('status','active')->get();
        return view('backEnd.Banner.create', compact('Banner', 'Barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_banner' => 'required|image|mimes:jpeg,jpg,png,webp|dimensions:max_width=1440px,max_height=556px',
            'id_barang' => 'required',
        ]);

        $newBanner = new Banner();
        $newBanner->id_barang = $request->id_barang;
        if($request->hasFile('gambar_banner'))
        {
            $fotoBanner = 'gambar'.rand(1,99999).'.'.$request->gambar_banner->getClientOriginalExtension();
            $request->file('gambar_banner')->move(public_path().'/img/', $fotoBanner);
            $newBanner->gambar_banner = $fotoBanner;
            $newBanner->save();
        }
        $newBanner->save();


        
        // Banner::create($request->all());
        return redirect('/banner')->with('success','Data Banner Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $Banner = Banner::find($id);
    //     return view('Banner.show', compact('Banner'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $Banner)
    {
        $Barang = NewBarang::where('status','active')->get();
        // $Banner = Banner::with('Barang')->findOrFail($id);
        // $Banner->update($request->all());
        return view('backEnd.Banner.edit', compact('Banner','Barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_banner' => 'required|image|mimes:jpeg,jpg,png,webp|dimensions:max_width=1440px,max_height=556px',
            'id_barang' => '',
        ]);

        $Banner = Banner::findOrfail($id);
        if($request->hasFile('gambar_banner'))
        {
            $fotoBanner = 'gambar'.rand(1,99999).'.'.$request->gambar_banner->getClientOriginalExtension();
            $request->file('gambar_banner')->move(public_path().'/img/', $fotoBanner);
            $Banner->gambar_banner = $fotoBanner;
            $Banner->save();

            $Banner->update([
                'id_barang' => $request->id_barang,
            ]);
        }else{
            $Banner->update([
                'id_barang' => $request->id_barang,
            ]);
        }
        return redirect()->route('ban_index')->with('success', 'Data Banner Berhasil Diupdate');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Banner = Banner::findOrfail($id);
        Storage::delete('public/image'.$Banner->gambar_banner);
        $Banner->delete();
        return redirect()->route('ban_index')->with('deleted', 'Data Berhasil Dihapus');
    }
}
