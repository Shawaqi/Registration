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
        Schema::table('users', function (Blueprint $table) {
            $table->string('relationship2')->after('categories')->nullable();
            $table->string('ic2')->after('relationship2')->nullable();
            $table->string('passport2')->after('ic2')->nullable();
            $table->string('birthday2')->after('passport2')->nullable();
            $table->string('phone2')->after('birthday2')->nullable();
            $table->string('altphone2')->after('phone2')->nullable();
            $table->string('gender2')->after('altphone2')->nullable();
            $table->string('faddress')->after('gender2')->nullable();
            $table->string('saddress')->after('faddress')->nullable();
            $table->string('state2')->after('saddress')->nullable();
            $table->string('poskod2')->after('state2')->nullable();
            $table->string('consent')->after('poskod2')->nullable();
            $table->string('gaji')->after('consent')->nullable();
            $table->string('races')->after('gender')->nullable();
            $table->string('races2')->after('gender2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });
    }
};
