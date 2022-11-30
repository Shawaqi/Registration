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
        Schema::create('studentform', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->text('fname')->nullable();
            $table->text('mname')->nullable();
            $table->text('sname')->nullable();
            $table->text('ic')->nullable();
            $table->text('birthday')->nullable();
            $table->text('phone')->nullable();
            $table->text('gender')->nullable();
            $table->text('email')->nullable();
            $table->text('school')->nullable();
            $table->text('state')->nullable();
            $table->text('ppd')->nullable();
            $table->text('races')->nullable();
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
        Schema::dropIfExists('studentform');
    }
};
