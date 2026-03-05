<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            // Minden karórának fixen 3 képe van.
            // Ha azt szeretném, hogy bármennyi képe lehessen egy karórának,
            // csinálhatnék egy watch_images(watch_id, image_url) táblát,
            // rekordonként egy képpel.
            $table->string('image1_url')->nullable();
            $table->string('image2_url')->nullable();
            $table->string('image3_url')->nullable();
            $table->string('brand');
            $table->string('name');
            $table->integer('price');
            $table->string('description');
            $table->integer('stock')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};
