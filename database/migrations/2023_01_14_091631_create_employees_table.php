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
            $table->double('hypertension');
            $table->double('heart_disease');
            $table->string('ever_married');
            $table->double('avg_glucose_level');
            $table->string('bmi');
            $table->string('smoking_status');
            $table->double('stroke');
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
