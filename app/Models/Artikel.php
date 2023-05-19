<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $primaryKey = "id";
    protected $table = "artikels";
    protected $fillable = [
        'id','gambar_artikel','judul_artikel','subjudul_artikel','deskripsi_artikel'
    ];
}
