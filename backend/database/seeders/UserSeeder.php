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
            'name' => 'marci',
            'password' => 'marci',
        ]);
        User::create([
            'name' => 'bence',
            'password' => 'bence',
        ]);
        User::create([
            'name' => 'timu',
            'password' => 'timu',
        ]);
        User::create([
            'name' => 'zackey',
            'password' => 'zackey',
        ]);
    }
}
