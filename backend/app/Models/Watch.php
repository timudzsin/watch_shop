<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    /** @use HasFactory<\Database\Factories\WatchFactory> */
    use HasFactory;

    protected $fillable = [
        //'image1_url',
        //'image2_url',
        //'image3_url',
        'image_url',
        'brand',
        'name',
        'price',
        'description',
        'stock',
    ];
}
