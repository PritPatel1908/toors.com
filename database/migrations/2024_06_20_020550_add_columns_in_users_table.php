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
        Schema::table('users', function (Blueprint $table) {
            $table->removeColumn('name');
            $table->string('username')->after('id');
            $table->string('first_name')->after('username');
            $table->string('last_name')->after('first_name');
            $table->enum('gender',['Male', 'Female', 'Other'])->after('last_name');
            $table->bigInteger('phono_no')->after('email_verified_at')->nullable();
            $table->longText('address')->after('remember_token')->nullable();
            $table->integer('pincode')->after('address')->nullable();
            $table->integer('city_id')->after('pincode')->nullable();
            $table->integer('state_id')->after('city_id')->nullable();
            $table->integer('country_id')->after('state_id')->nullable();
            $table->tinyInteger('role')->default(1)->comment('0 => Admin, 1 => User, 2 => Vendor');
            $table->string('profile_pic')->after('role')->nullable();
            $table->boolean('is_active')->after('profile_pic')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
