<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_image',
        'hotel_id',
        'created_at',
        'updated_at'
    ];
}
