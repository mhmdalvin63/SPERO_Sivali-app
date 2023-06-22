<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;

class ListChartController extends Controller
{
    public function index()
    {
        $chart = Chart::with('barang', 'user')->get();
        return view('backEnd.list.chart', compact('chart'));
    }
}
