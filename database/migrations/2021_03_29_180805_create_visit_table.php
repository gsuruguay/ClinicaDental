<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit', function (Blueprint $table) {
            $table->id();
            $table->boolean('confirmed')->nullable();
            $table->boolean('canceled')->nullable();
            $table->unsignedBigInteger('dentist_id')->references('id')->on('user_has_role');
            $table->unsignedBigInteger('patient_id')->constrained();
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
        Schema::dropIfExists('visit');
    }
}
