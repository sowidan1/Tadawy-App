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
        Schema::create('fitness_shows', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->unsignedBigInteger('fitness_id')->nullable();
            $table->foreign('fitness_id')->references('id')->on('fitnesses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitness_shows');
    }
};
