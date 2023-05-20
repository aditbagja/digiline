<?php

namespace Database\Seeders;

use App\Models\wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        wallet::create([
            'logo'=> 'dana.png',
            'name' => 'DANA'
        ]);
        wallet::create([
            'logo'=> 'gopay.png',
            'name' => 'GoPay'
        ]);
        wallet::create([
            'logo'=> 'ovo.png',
            'name' => 'OVO'
        ]);
        wallet::create([
            'logo'=> 'shopeepay.png',
            'name' => 'ShopeePay'
        ]);
        wallet::create([
            'logo'=> 'digiline.png',
            'name' => 'DigiLine'
        ]);
    }
}
