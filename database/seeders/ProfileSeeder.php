<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Abimanyu',
            'email' => 'abimanyuamirudin6@gmail.com',
            'bio' => 'Founder Narend Studio. Mahasiswa Teknologi Rekayasa Perangkat Lunak (TRPL) yang berfokus pada Full-Stack Web Development dan UI/UX Design.',
            'phone' => '085709875002', 
            'address' => 'Sungai Liat, Bangka',
            'avatar' => 'img/abi.png'
        ]);
    }
}