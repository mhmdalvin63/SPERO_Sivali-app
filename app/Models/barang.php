<?php

namespace App\Models;

use App\Models\kategoriBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    protected $primaryKey = "id";
    protected $table = "barangs";
    protected $fillable = [
        'id','file_name','file_location','file_hash','id_kategori','judul_barang','deskripsi','promosi','harga_asli','harga_diskon','rate'
    ];

    public function KategoriBarang(){
        return $this->belongsTo(KategoriBarang::class, 'id_kategori');
    }
}
