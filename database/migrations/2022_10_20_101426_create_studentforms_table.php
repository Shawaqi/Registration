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
            $table->foreignId('user_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->string('races');
            $table->string('gender');
            $table->string('ic');
            $table->string('phone');
            $table->string('birthday');
            $table->string('email');
            $table->string('state');
            $table->string('ppd');
            $table->string('school');
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
