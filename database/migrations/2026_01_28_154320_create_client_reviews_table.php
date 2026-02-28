<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();

            $table->string('client_name');
            $table->string('client_title')->nullable(); // e.g. CEO, Manager
            $table->text('review');

            $table->string('client_image')->nullable();

            $table->unsignedTinyInteger('rating')->default(5); // 1–5 stars

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_reviews');
    }
};
