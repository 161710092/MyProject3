<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['gambar', 'name', 'warna', 'transmisi', 'tahun_keluar', 'harga'];
    public $timestamps = true;
}
