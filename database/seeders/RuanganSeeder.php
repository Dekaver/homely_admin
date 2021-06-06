<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruangan::insert([
	    ['id_house' => 1,'nama' => "kamar_mandi", 'jumlah' =>3],
        ['id_house' => 1,'nama' => "kamar_tidur", 'jumlah' =>4],
        ['id_house' => 1,'nama' => "gudang", 'jumlah' =>1],
        ['id_house' => 2,'nama' => "kamar_mandi", 'jumlah' =>1],
        ['id_house' => 2,'nama' => "kamar_tidur", 'jumlah' =>2],
        ['id_house' => 2,'nama' => "gudang", 'jumlah' =>0],
        ['id_house' => 3,'nama' => "kamar_mandi", 'jumlah' =>1],
        ['id_house' => 3,'nama' => "kamar_tidur", 'jumlah' =>2],
        ['id_house' => 3,'nama' => "gudang", 'jumlah' =>0],
        ['id_house' => 4,'nama' => "kamar_mandi", 'jumlah' =>1],
        ['id_house' => 4,'nama' => "kamar_tidur", 'jumlah' =>2],
        ['id_house' => 4,'nama' => "gudang", 'jumlah' =>0],
        ['id_house' => 5,'nama' => "kamar_mandi", 'jumlah' =>2],
        ['id_house' => 5,'nama' => "kamar_tidur", 'jumlah' =>2],
        ['id_house' => 5,'nama' => "gudang", 'jumlah' =>0],
        ['id_house' => 6,'nama' => "kamar_mandi", 'jumlah' =>1],
        ['id_house' => 6,'nama' => "kamar_tidur", 'jumlah' =>3],
        ['id_house' => 6,'nama' => "gudang", 'jumlah' =>0],
        ['id_house' => 7,'nama' => "kamar_mandi", 'jumlah' =>2],
        ['id_house' => 7,'nama' => "kamar_tidur", 'jumlah' =>3],
        ['id_house' => 7,'nama' => "gudang", 'jumlah' =>0],
	]);
    }
}
