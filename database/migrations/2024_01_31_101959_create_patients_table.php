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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->text('medical_history')->nullable();

            $table->string('emergency_contact')->nullable();

            $table->string('name');

            $table->string('phone');

            $table->string('photo')->nullable();

            $table->date('date_of_birth')->nullable();

            $table->enum('gender', ['male', 'female'])->nullable();

            $table->string('email')->unique();

            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
