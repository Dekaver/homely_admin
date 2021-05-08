<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'lantai',
        'sertifikasi',
        'luas_tanah',
        'luas_bangunan',
        'harga',
        'alamat',
        'lokasi_gps',
        'deskripsi',
        'kontak',
    ];

    public function Images()
    {
        return $this->hasMany(Image::class, 'id_house');
    }

    public function Category()
    {
        return $this->hasMany(Category::class, 'id_house');
    }

    public function Ruangan()
    {
        return $this->hasMany(Ruangan::class, 'id_house');
    }
}
