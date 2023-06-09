<?php

namespace App\Models;

// use App\Models\KategoriBarang;
use App\Models\NewBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Models\kategoriBarang;

class NewKategoriBarang extends Model
{
    protected $primaryKey = "id";
    protected $table = "kategori_barangs";
    protected $fillable = [
        'id','gambar_kategori','kategori_barang'
    ];

    public function barang(){
        return $this->hasMany(NewBarang::class);
    }
}