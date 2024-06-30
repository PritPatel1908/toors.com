<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name',
        'hotel_descriptions',
        'hotel_nightly_price',
        'hotel_weekly_price',
        'hotel_monthly_price',
        'hotel_weekends_price',
        'hotel_additional_guest_price',
        'hotel_security_deposit_price',
        'hotel_location',
        'hotel_contact_number',
        'hotel_email',
        'hotel_services',
        'child_allow',
        'adult_allow',
        'category_id',
        'vendor_id',
        'created_at',
        'updated_at'
    ];
}
