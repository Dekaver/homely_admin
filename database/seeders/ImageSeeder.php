<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::insert([
            ['id_house' => 1, 'nama' => "rumah-1.1.jpg"],
            ['id_house' => 1, 'nama' => "rumah-1.2.jpg"],
            ['id_house' => 1, 'nama' => "rumah-1.3.jpg"],
            ['id_house' => 1, 'nama' => "rumah-1.4.jpg"],
            ['id_house' => 2, 'nama' => "rumah-2.1.jpg"],
            ['id_house' => 2, 'nama' => "rumah-2.2.jpg"],
            ['id_house' => 2, 'nama' => "rumah-2.3.jpg"],
            ['id_house' => 2, 'nama' => "rumah-2.4.jpg"],
            ['id_house' => 3, 'nama' => "rumah-3.1.jpg"],
            ['id_house' => 3, 'nama' => "rumah-3.2.jpg"],
            ['id_house' => 3, 'nama' => "rumah-3.3.jpg"],
            ['id_house' => 3, 'nama' => "rumah-3.4.jpg"],
            ['id_house' => 4, 'nama' => "rumah-4.1.jpg"],
            ['id_house' => 4, 'nama' => "rumah-4.2.jpg"],
            ['id_house' => 4, 'nama' => "rumah-4.3.jpg"],
            ['id_house' => 4, 'nama' => "rumah-4.4.jpg"],
            ['id_house' => 5, 'nama' => "rumah-5.1.jpg"],
            ['id_house' => 5, 'nama' => "rumah-5.2.jpg"],
            ['id_house' => 5, 'nama' => "rumah-5.3.jpg"],
            ['id_house' => 5, 'nama' => "rumah-5.4.jpg"],
            ['id_house' => 6, 'nama' => "rumah-6.1.jpg"],
            ['id_house' => 6, 'nama' => "rumah-6.2.jpg"],
            ['id_house' => 6, 'nama' => "rumah-6.3.jpg"],
            ['id_house' => 6, 'nama' => "rumah-6.4.jpg"],
            ['id_house' => 7, 'nama' => "rumah-7.1.jpg"],
            ['id_house' => 7, 'nama' => "rumah-7.2.jpg"],
            ['id_house' => 7, 'nama' => "rumah-7.3.jpg"],
            ['id_house' => 7, 'nama' => "rumah-7.4.jpg"],
        ]);
    }
}
