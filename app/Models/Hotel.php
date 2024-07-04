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
        'hotel_bed_service',
        'hotel_bath_service',
        'hotel_wifi_service',
        'hotel_tv_service',
        'hotel_ac_service',
        'hotel_laundry_service',
        'hotel_food_service',
        'hotel_doctor_service',
        'hotel_room_service',
        'hotel_gym_service',
        'hotel_swimmining_pool_service',
        'child_allow',
        'adult_allow',
        'category_id',
        'vendor_id',
    ];
}
