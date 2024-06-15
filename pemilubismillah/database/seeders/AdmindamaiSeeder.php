<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdmindamaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data for 'admindamai' table
        DB::table('admindamai')->insert([
            'username' => 'admin1',
            'password' => Hash::make('admin123'), // Menggunakan Hash untuk mengenkripsi password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Anda bisa menambahkan data admin lainnya jika diperlukan
    }
}
