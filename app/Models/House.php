<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'kategori',
        'lantai',
        'kamar_tidur',
        'kamar_mandi',
        'Sertifikasi',
        'luas_tanah',
        'luas_bangunan',
        'lokasi_gps',
        'deskripsi',
        'kontak',
    ];

    public function Gambar()
    {
        return $this->hasMany(Image::class, 'id_house');
    }

    public function Kategori()
    {
        return $this->hasMany(Category::class, 'id_house');
    }

    public function Ruangan()
    {
        return $this->hasMany(Ruangan::class, 'id_house');
    }
}
