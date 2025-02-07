<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            // $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->string('doctor_name')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('service');
            $table->date('new_date_column');
            $table->time('new_time_column');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
