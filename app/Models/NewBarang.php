<?php

namespace App\Models;

use App\Models\NewKategoriBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewBarang extends Model
{
    protected $primaryKey = "id";
    protected $table = "barangs";
    protected $fillable = [
        'id','status','file_name','file_location','file_hash','id_kategori','judul_barang','deskripsi','promosi','harga_asli','harga_diskon','stok','terjual','rate'
    ];

    public function KategoriBarang(){
        return $this->belongsTo(NewKategoriBarang::class, 'id_kategori');
    }
    public function Favorit(){
        return $this->hasMany(Favorit::class);
    }
}
