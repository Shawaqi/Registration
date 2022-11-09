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
        Schema::create('studentforms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->text('fs_name')->nullable();
            $table->text('ss_name')->nullable();
            $table->text('ts_name')->nullable();
            $table->text('ic_student')->nullable();
            $table->text('s_dob')->nullable();
            $table->text('sno_tel')->nullable();
            $table->text('s_gender')->nullable();
            $table->text('s_email')->nullable();
            $table->text('s_school')->nullable();
            $table->text('s_state')->nullable();
            $table->text('s_city')->nullable();
            $table->text('s_races')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('studentforms');
    }
};
