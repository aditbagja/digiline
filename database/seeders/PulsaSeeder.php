<?php

namespace Database\Seeders;

use App\Models\pulsa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PulsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pulsa::create([
            'varian' => '5.000',
            'harga' => '5500',
            'keterangan'=>'Pulsa 5000'
        ]);
        pulsa::create([
            'varian' => '10.000',
            'harga' => '10500',
            'keterangan'=>'Pulsa 10000'
        ]);
        pulsa::create([
            'varian' => '20.000',
            'harga' => '20500',
            'keterangan'=>'Pulsa 20000'
        ]);
        pulsa::create([
            'varian' => '30.000',
            'harga' => '30500',
            'keterangan'=>'Pulsa 30000'
        ]);
        pulsa::create([
            'varian' => '40.000',
            'harga' => '40500',
            'keterangan'=>'Pulsa 40000'
        ]);
        pulsa::create([
            'varian' => '50.000',
            'harga' => '50500',
            'keterangan'=>'Pulsa 50000'
        ]);
    }
}
