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
        Schema::create('enquiry_infos', function (Blueprint $table) {
            $table->id();
            $table->string('leadid')->unique();
            $table->string('leadtype');
            $table->string('prefix', 10);
            $table->string('name');
            $table->string('mobile', 50);
            $table->string('phone', 50)->nullable();
            $table->string('email')->nullable();
            $table->date('date');
            $table->string('category');
            $table->string('city');
            $table->string('area');
            $table->string('brancharea')->nullable();
            $table->boolean('dncmobile')->default(0);
            $table->boolean('dncphone')->default(0);
            $table->string('company')->nullable();
            $table->string('pincode', 50)->nullable();
            $table->time('time');
            $table->string('branchpin', 50)->nullable();
            $table->string('parentid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiry_infos');
    }
};
