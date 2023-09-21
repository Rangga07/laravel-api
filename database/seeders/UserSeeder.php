<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'ranggahendarmin07@gmail.com',
            'username' => 'ranggahen',
            'password' => Hash::make('12345'),
            'firstname' => 'M Rangga',
            'lastname' => 'M Rangga Hendarmin'
        ]);
    }
}
