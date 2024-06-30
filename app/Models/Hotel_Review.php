<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_rating',
        'review_message',
        'review_reply_message',
        'user_id',
        'hotel_id',
        'created_at',
        'updated_at'
    ];
}
