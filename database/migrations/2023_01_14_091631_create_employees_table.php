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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->integer('age');
            $table->integer('hypertension');
            $table->integer('heart_disease');
            $table->string('ever_married');
            $table->integer('avg_glucose_level');
            $table->string('bmi');
            $table->string('smoking_status');
            $table->integer('stroke');
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
        Schema::dropIfExists('employees');
    }
};
