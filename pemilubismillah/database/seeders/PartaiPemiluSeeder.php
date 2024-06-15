<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Partai;

class PartaiPemiluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partai::create([
            'username' => 'PDIPERJUANGAN',
            'password' => Hash::make('password1'),
        ]);

        Partai::create([
            'username' => 'GERINDA',
            'password' => Hash::make('password2'),
        ]);

        Partai::create([
            'username' => 'PAN',
            'password' => Hash::make('password3'),
        ]);
        Partai::create([
            'username' => 'PKB',
            'password' => Hash::make('password4'),
        ]);
        Partai::create([
            'username' => 'GOLKAR',
            'password' => Hash::make('password5'),
        ]);
        Partai::create([
            'username' => 'NASDEN',
            'password' => Hash::make('password6'),
        ]);
        Partai::create([
            'username' => 'PSI',
            'password' => Hash::make('password7'),
        ]);

    }
}
