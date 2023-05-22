<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Banner = Banner::all();
        return view('backEnd.Banner.index', compact('Banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Banner = Banner::all();
        return view('backEnd.Banner.create', compact('Banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_banner' => 'required|image|mimes:jpeg,jpg,png,webp',
            'url' => 'required',
        ]);

        $gambar_banner = $request->file('gambar_banner');
        $gambar_banner->storeAs('public/image', $gambar_banner->hashName());

        Banner::create([
            'gambar_banner' => $gambar_banner->hashName(),
            'url' => $request->url,
        ]);
        // Banner::create($request->all());
        return redirect('/banner')->with('success','Data Pemesanan Berhasil Di Tambahkan');
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
    public function edit($id)
    {
        $Banner = Banner::find($id);
        return view('backEnd.Banner.edit', compact('Banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_banner' => '|image|mimes:jpeg,jpg,png,webp',
            'url' => '',
        ]);

        $Banner = Banner::findOrfail($id);
        if ($request->hasFile('gambar_banner')) {

            $gambar_banner = $request->file('gambar_banner');
            $gambar_banner->storeAs('public/image', $gambar_banner->hashName());

            Storage::delete('public/image/'.$Banner->gambar_banner);

            $Banner->update([
                'gambar_banner' => $gambar_banner->hashName(),
                'url' => $request->url,
            ]);
        }else{
            $Banner->update([
                'url' => $request->url,
            ]);
        }
        return redirect()->route('ban_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Banner = Banner::findOrfail($id);
        Storage::delete('public/image'.$Banner->gambar_banner);
        $Banner->delete();
        return redirect()->route('ban_index')->with('success', 'Data deleted successfully');
    }
}
