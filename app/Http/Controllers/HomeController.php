<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Artikel;
use App\Models\NewBarang;
use Illuminate\Http\Request;
use App\Models\NewKategoriBarang;

class HomeController extends Controller
{
    public function index()
    {
        $sumBarang = NewBarang::count('id');
        $countKate = NewKategoriBarang::count('id');
        $countBan = Banner::count('id');
        $countArt = Artikel::count('id');
        return view('backEnd.dashboard', compact('sumBarang', 'countKate', 'countBan', 'countArt'));
    }
}
