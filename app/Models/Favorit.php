<?php

namespace App\Models;

use App\Models\NewBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorit extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function Barang(){
        return $this->belongsTo(NewBarang::class, 'id_barang');
    }
}
