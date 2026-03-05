<?php

namespace Database\Seeders;

use App\Models\Order_item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order_item::create([
            'order_id' => 1,
            'watch_id' => 5,
            'quantity' => 1,
        ]);
        Order_item::create([
            'order_id' => 2,
            'watch_id' => 6,
            'quantity' => 2,
        ]);
        Order_item::create([
            'order_id' => 3,
            'watch_id' => 1,
            'quantity' => 1,
        ]);
    }
}
