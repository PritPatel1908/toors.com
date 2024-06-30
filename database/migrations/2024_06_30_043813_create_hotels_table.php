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
            $table->longText('hotel_descriptions');
            $table->integer('hotel_nightly_price');
            $table->integer('hotel_weekly_price');
            $table->integer('hotel_monthly_price');
            $table->integer('hotel_weekends_price');
            $table->integer('hotel_additional_guest_price');
            $table->integer('hotel_security_deposit_price');
            $table->longText('hotel_location');
            $table->integer('hotel_contact_number');
            $table->string('hotel_email');
            $table->string('hotel_services');
            $table->integer('child_allow');
            $table->integer('adult_allow');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreignId('vendor_id')->references('id')->on('users')->cascadeOnDelete();
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
