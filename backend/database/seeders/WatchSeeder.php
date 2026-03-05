<?php

namespace Database\Seeders;

use App\Models\Watch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Watch::create([
            'image_url' => "rolex_deepsea.png",
            'brand' => "Rolex",
            'name' => "Deepsea",
            'price' => 15550,
            'description' => "Professional dive watch with extreme water resistance.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "rolex_day_date_40.png",
            'brand' => "Rolex",
            'name' => "Day Date 40",
            'price' => 48000,
            'description' => "Iconic luxury watch showing day and date in full.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "rolex_cosmograph_daytona.png",
            'brand' => "Rolex",
            'name' => "Cosmograph Daytona",
            'price' => 16900,
            'description' => "Legendary racing chronograph with precise timing features.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "omega_seamaster_aqua_terra_150m.png",
            'brand' => "Omega",
            'name' => "Seamaster Aqua Terra 150M",
            'price' => 6000,
            'description' => "Versatile Seamaster combining classic style and water resistance.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "hamilton_jazzmaster_seaview_chrono_quartz.png",
            'brand' => "Hamilton",
            'name' => "Jazzmaster Seaview Chrono Quartz",
            'price' => 1000,
            'description' => "Sporty quartz chronograph with bold dial and durability.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "hamilton_jazzmaster_open_heart_lady_auto.png",
            'brand' => "Hamilton",
            'name' => "Jazzmaster Open Heart Lady Auto",
            'price' => 1200,
            'description' => "Elegant open-heart automatic watch blending style and precision.",
            'stock' => 10,
        ]);
    }
}
