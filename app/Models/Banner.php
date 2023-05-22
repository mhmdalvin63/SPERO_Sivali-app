<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primaryKey = "id";
    protected $table = "banners";
    protected $fillable = [
        'id','gambar_banner','url'
    ];
}
