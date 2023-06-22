<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use Illuminate\Http\Request;

class ListFavoritController extends Controller
{
    public function index()
    {
        $fav = Favorit::with('Barang', 'user')->get();
        return view('backEnd.list.favorit', compact('fav'));
    }
}
