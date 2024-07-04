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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->longText('hotel_descriptions')->nullable();
            $table->integer('hotel_nightly_price');
            $table->integer('hotel_weekly_price');
            $table->integer('hotel_monthly_price');
            $table->integer('hotel_weekends_price');
            $table->integer('hotel_additional_guest_price')->nullable();
            $table->integer('hotel_security_deposit_price')->nullable();
            $table->longText('hotel_location');
            $table->integer('hotel_contact_number');
            $table->string('hotel_email');
            $table->boolean('hotel_bed_service');
            $table->boolean('hotel_bath_service');
            $table->boolean('hotel_wifi_service');
            $table->boolean('hotel_tv_service');
            $table->boolean('hotel_ac_service');
            $table->boolean('hotel_laundry_service');
            $table->boolean('hotel_food_service');
            $table->boolean('hotel_doctor_service');
            $table->boolean('hotel_room_service');
            $table->boolean('hotel_gym_service');
            $table->boolean('hotel_swimmining_pool_service');
            $table->integer('child_allow')->nullable();
            $table->integer('adult_allow');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('vendor_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
