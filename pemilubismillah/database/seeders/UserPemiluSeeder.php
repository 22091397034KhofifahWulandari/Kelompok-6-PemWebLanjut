<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserPemiluSeeder extends Seeder
{
    public function run()
    {
        DB::table('userpemilu')->insert([
            [
                'nik' => '1234567890123456',
                'username' => 'Anisa',
                'nama_lengkap' => 'Anisa Rahma',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Jl. Kebon Jeruk No. 1',
                'password' => Hash::make('123'),
                'foto_ktp' => 'path/to/ktp1.jpg', // contoh path
                'profile_picture' => 'path/to/profile1.jpg', // contoh path
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '2345678901234567',
                'username' => 'Farah',
                'nama_lengkap' => 'Farah Diba',
                'tanggal_lahir' => '1991-02-02',
                'alamat' => 'Jl. Mangga Dua No. 2',
                'password' => Hash::make('1234'),
                'foto_ktp' => 'path/to/ktp2.jpg', // contoh path
                'profile_picture' => 'path/to/profile2.jpg', // contoh path
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '3456789012345678',
                'username' => 'Ramdan',
                'nama_lengkap' => 'Ramdan Saputra',
                'tanggal_lahir' => '1992-03-03',
                'alamat' => 'Jl. Melati No. 3',
                'password' => Hash::make('12345'),
                'foto_ktp' => 'path/to/ktp3.jpg', // contoh path
                'profile_picture' => 'path/to/profile3.jpg', // contoh path
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

