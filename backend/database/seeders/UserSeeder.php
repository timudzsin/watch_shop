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
        User::create([
            'name' => 'marcell',
            'password' => 'marcell',
        ]);
        User::create([
            'name' => 'adél',
            'password' => 'adél',
        ]);
        User::create([
            'name' => 'edda',
            'password' => 'edda',
        ]);
        User::create([
            'name' => 'péter',
            'password' => 'péter',
        ]);
    }
}
