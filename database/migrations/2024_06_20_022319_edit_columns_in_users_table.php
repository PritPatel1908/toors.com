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
            $table->dropColumn('name');
            $table->tinyInteger('role')->after('country_id')->default(1)->comment('0 => Admin, 1 => User, 2 => Vendor')->change();
            $table->string('profile_pic')->after('role')->nullable()->change();
            $table->boolean('is_active')->after('profile_pic')->default(0)->change();
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
