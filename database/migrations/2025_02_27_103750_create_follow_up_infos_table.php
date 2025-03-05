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
        Schema::create('follow_up_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enquiry_id');
            $table->enum('status', [
                'Not Connect',
                'Request Call Back',
                'Follow Up',
                'Purposal Send',
                'Won',
                'Cancelled',
                'Rejected',
                'Wrong Category',
                'Job/Intership',
                'Marketing',
                'Pending'
            ])->default('Pending');
            $table->text('notes')->nullable();
            $table->dateTime('next_follow_up')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('enquiry_id')->references('id')->on('enquiry_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_up_infos');
    }
};
