<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => \Hash::make('12345678'),
            'status' => 'aktif',
        ]);
    }
}
