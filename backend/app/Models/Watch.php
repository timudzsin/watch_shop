<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    /** @use HasFactory<\Database\Factories\WatchFactory> */
    use HasFactory;

    protected $fillable = [
        'image_url',
        'brand',
        'name',
        'price',
        'description',
        'stock',
    ];
}
