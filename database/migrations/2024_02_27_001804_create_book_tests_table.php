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
        Schema::create('book_tests', function (Blueprint $table) {
            $table->id();
            $table->string('table_name');
            $table->string('test_name');
            $table->unsignedBigInteger('test_id');
            $table->string('location');
            $table->decimal('price', 8, 2)->default(0)->nullable();
            $table->date('date');
            $table->time('time');
            $table->enum('visit_type', ['lab', 'home']);
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->unsignedBigInteger('patient_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tests');
    }
};
