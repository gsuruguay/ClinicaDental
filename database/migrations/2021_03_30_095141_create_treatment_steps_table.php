<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('treatment_id')->constrained();
            $table->unsignedBigInteger('step_id')->constrained();
            $table->integer('step_order');
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
        Schema::dropIfExists('treatment_steps');
    }
}
