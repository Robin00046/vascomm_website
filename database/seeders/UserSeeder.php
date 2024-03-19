<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'phone' => '08123456789',
            'password' => bcrypt('password'),
        ])->assignRole('admin');

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'phone' => '08123456788',
            'password' => bcrypt('customer123'),
        ])->assignRole('customer');
    }
}
