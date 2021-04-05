<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitStepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_step', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visit_id')->constrained();
            $table->unsignedBigInteger('treatment_steps_id')->constrained();
            $table->unsignedBigInteger('problem_detected_id')->constrained();
            $table->string('notes', 512);
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
        Schema::dropIfExists('visit_step');
    }
}
