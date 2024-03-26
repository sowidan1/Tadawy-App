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
        Schema::create('infant_incubators', function (Blueprint $table) {
            $table->id();
            $table->string('Temperature');
            $table->string('Humidity');
            $table->string('Weight');
            $table->string('Heart_Rate');
            $table->enum('Color_Sensor', ['Jaundice', 'Not_Jaundice']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infant_incubators');
    }
};
