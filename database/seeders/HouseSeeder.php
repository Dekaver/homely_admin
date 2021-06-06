<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
	    [
		"tipe" => 46,
		"lantai" => 2,
		"sertifikasi" => "bersertifikat",
		"luas_tanah" => 250,
		"luas_bangunan" => 50,
		"harga" => 750000000,
		"alamat" => "balikpapan"
		"lokasi_gps" => "-10.43 240.232",
		"deskripsi" => "rumah ini memiliki lantai keramik. ...",
		"kontak" => "082345672341",
		"ruangan" => [
		    "kamar_mandi" => 3,
		    "kamar_tidur" => 4,
		    "gudang" => 1,
		    ],
		"images" => [
		    "rumah-1.1.png",
		    "rumah-1.2.png",
		    "rumah-1.3.png",
		    "rumah-1.4.png",
		    ]
	    ]
	])
    }
}
