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
            'avatar' => '230513092724.jpg',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'no_telp' => '081111111111',
            'password' => bcrypt('admin'),
            'saldo' => '2147483647',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'email_verified_at' => now(),
            'is_admin'=>'1'
        ]);
        User::create([
            'name' => 'Adit Bagja Septiana',
            'email' => 'aditbagja44@gmail.com',
            'no_telp' => '085295185905',
            'password' => bcrypt('123456'),
            'saldo' => '100000',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => Carbon::parse('2000-09-04'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'septi',
            'email' => 'septi@mail.com',
            'no_telp' => '081321123321',
            'password' => bcrypt('123456'),
            'saldo' => '0',
            'jenis_kelamin' => 'P',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'email_verified_at' => now()
        ]);
    }
}
