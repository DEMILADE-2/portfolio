<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('section_label')->default('ABOUT ME');
            $table->string('title');
            $table->string('highlight')->nullable();

            $table->text('description');

            $table->string('image')->nullable();

            $table->unsignedInteger('years_experience')->default(0);
            $table->unsignedInteger('projects_completed')->default(0);
            $table->unsignedInteger('happy_clients')->default(0);

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
