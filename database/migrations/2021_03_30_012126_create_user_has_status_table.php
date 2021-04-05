<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_status', function (Blueprint $table) {
            $table->id();
            $table->timestamp('status_start_time')->nullable();
            $table->timestamp('status_end_time')->nullable();
            $table->unsignedBigInteger('user_account_id')->constrained();
            $table->unsignedBigInteger('status_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_status');
    }
}
