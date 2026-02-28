<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('brand_name')->nullable();
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->enum('meeting_type', ['video', 'phone', 'in-person']);
            $table->json('services');
            $table->text('project_description');
            $table->date('project_deadline')->nullable();
            $table->string('budget')->nullable();
            $table->string('referral')->nullable();
            $table->text('additional_notes')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};