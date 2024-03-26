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
        Schema::create('fitness_program_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fitness_program_id');
            $table->foreign('fitness_program_id')->references('id')->on('fitness_programs');
            $table->string('photo_gif');
            $table->text('description');
            $table->string('photo_png');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitness_program_details');
    }
};
