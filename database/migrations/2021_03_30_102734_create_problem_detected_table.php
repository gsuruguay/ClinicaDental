<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemDetectedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_detected', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tooth_id')->constrained();
            $table->unsignedBigInteger('visit_id')->constrained();
            $table->unsignedBigInteger('problem_catalog_id')->constrained();
            $table->unsignedBigInteger('suggest_treatment_id')->constrained('tratment');
            $table->unsignedBigInteger('selected_tratment_id')->constrained('treatment');
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
        Schema::dropIfExists('problem_detected');
    }
}
