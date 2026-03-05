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
            'description' => "The Rolex Deepsea is a professional dive watch engineered for extreme underwater exploration. With its robust Oystersteel case, exceptional water resistance, and bold design, it combines cutting-edge technology with legendary Rolex durability and precision.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "rolex_day_date_40.png",
            'brand' => "Rolex",
            'name' => "Day Date 40",
            'price' => 48000,
            'description' => "The Rolex Day-Date 40 is an iconic luxury watch known for displaying both the date and the day of the week in full. Crafted from precious metals, it represents prestige, elegance, and timeless style with unmatched Rolex craftsmanship.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "rolex_cosmograph_daytona.png",
            'brand' => "Rolex",
            'name' => "Cosmograph Daytona",
            'price' => 16900,
            'description' => "The Rolex Cosmograph Daytona is a legendary chronograph designed for racing enthusiasts. Its precise timing functions, tachymeter bezel, and sporty yet luxurious design make it one of the most sought-after watches in the world.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "omega_seamaster_aqua_terra_150m.png",
            'brand' => "Omega",
            'name' => "Seamaster Aqua Terra 150M",
            'price' => 6000,
            'description' => "The Omega Seamaster Aqua Terra 150M blends classic style with modern performance. Inspired by the ocean, it features a clean dial, reliable automatic movement, and impressive water resistance, making it perfect for both everyday wear and aquatic adventures.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "hamilton_jazzmaster_seaview_chrono_quartz.png",
            'brand' => "Hamilton",
            'name' => "Jazzmaster Seaview Chrono Quartz",
            'price' => 1000,
            'description' => "The Hamilton Jazzmaster Seaview Chrono Quartz offers a sporty look with precise quartz chronograph functionality. Its bold dial, durable construction, and versatile design make it a reliable watch suited for both casual and active lifestyles.",
            'stock' => 10,
        ]);
        Watch::create([
            'image_url' => "hamilton_jazzmaster_open_heart_lady_auto.png",
            'brand' => "Hamilton",
            'name' => "Jazzmaster Open Heart Lady Auto",
            'price' => 1200,
            'description' => "The Hamilton Jazzmaster Open Heart Lady Auto highlights the beauty of its automatic movement through an elegant open-heart dial. Designed for women, it combines delicate styling with Swiss watchmaking precision and refined craftsmanship.",
            'stock' => 10,
        ]);
    }
}
