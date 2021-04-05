<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_role', function (Blueprint $table) {
            $table->id();
            $table->timestamp('role_start_time')->nullable();
            $table->timestamp('role_end_time')->nullable();
            $table->unsignedBigInteger('user_account_id')->constrained();
            $table->unsignedBigInteger('role_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_role');
    }
}
