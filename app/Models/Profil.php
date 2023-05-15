<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $primaryKey = "id";
    protected $table = "profils";
    protected $fillable = [
        'id','gambar_profil','nama_lengkap','alamat','tempat_lahir','tanggal_lahir','email'
    ];
}
