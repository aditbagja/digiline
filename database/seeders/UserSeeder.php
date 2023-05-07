<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'no_telp' => '081111111111',
            'password' => bcrypt('admin'),
            'saldo' => '2147483647',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'email_verified_at' => now()
        ]);
    }
}
