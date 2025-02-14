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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('user_mail');
            $table->string('doc_name');
            $table->string('doc_email');
            $table->string('doc_skills');
            $table->string('doc_diploma');
            $table->string('day');
            $table->string('date');
            $table->boolean('is_booked')->default(false);
            $table->string('hospital');
            $table->string('time');
            $table->string('end_time');
            $table->string('doctor_id');
            $table->string('schedule_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
