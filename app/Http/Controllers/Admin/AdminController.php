<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Hotel_Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function add_hotel_page(Request $request) {
        $user = Auth::user();
        return view('Templates.Admin.admin-add-hotel', compact('user'));
    }

    public function add_hotel(Request $request) {
        $user = Auth::user();
        $hotel = new Hotel();
        $hotel->hotel_name = $request->hotel_name;
        $hotel->hotel_descriptions = $request->hotel_descriptions;
        $hotel->hotel_nightly_price = $request->hotel_nightly_price;
        $hotel->hotel_weekly_price = $request->hotel_weekly_price;
        $hotel->hotel_monthly_price = $request->hotel_monthly_price;
        $hotel->hotel_weekends_price = $request->hotel_weekends_price;
        $hotel->hotel_additional_guest_price = $request->hotel_additional_guest_price;
        $hotel->hotel_security_deposit_price = $request->hotel_security_deposit_price;
        $hotel->hotel_location = $request->hotel_location;
        $hotel->hotel_contact_number = $request->hotel_contact_number;
        $hotel->hotel_email = $request->hotel_email;
        $hotel->hotel_bed_service = $request->hotel_bed_service;
        $hotel->hotel_bath_service = $request->hotel_bath_service;
        $hotel->hotel_wifi_service = $request->hotel_wifi_service;
        $hotel->hotel_tv_service = $request->hotel_tv_service;
        $hotel->hotel_ac_service = $request->hotel_ac_service;
        $hotel->hotel_laundry_service = $request->hotel_laundry_service;
        $hotel->hotel_food_service = $request->hotel_food_service;
        $hotel->hotel_doctor_service = $request->hotel_doctor_service;
        $hotel->hotel_room_service = $request->hotel_room_service;
        $hotel->hotel_gym_service = $request->hotel_gym_service;
        $hotel->hotel_swimmining_pool_service = $request->hotel_swimmining_pool_service;
        $hotel->child_allow = $request->child_allow;
        $hotel->adult_allow = $request->adult_allow;
        $hotel->category_id = $request->category_id;
        $hotel->vendor_id = $user->id;
        $hotel->save();

        $hotel_image = new Hotel_Image();
        $hotel_image->hotel_id = $hotel->id;
        $hotel_image->hotel_image = $request->file('hotel_image');;
        $hotel_image->save();

        if ($request->file('hotel_images')) {

            $hotel_images = $request->file('hotel_images');

            foreach ($hotel_images as $image) {
                $hotel_images = new Hotel_Image();
                $hotel_images->hotel_id = $hotel->id;
                $hotel_images->hotel_image = $image->store('hotel_images/', 'public');
                $hotel_images->save();
            }
        }
        return response()->json(['Success' => 'Your Hotel Successfully Created...']);
    }
}
