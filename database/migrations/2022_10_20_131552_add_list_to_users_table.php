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
            $table->string('relationship')->after('password')->nullable();
            $table->string('ic')->after('relationship')->nullable();
            $table->string('passport')->after('ic')->nullable();
            $table->string('birthday')->after('passport')->nullable();
            $table->string('phone')->after('birthday')->nullable();
            $table->string('altphone')->after('phone')->nullable();
            $table->string('gender')->after('altphone')->nullable();
            $table->string('address1')->after('gender')->nullable();
            $table->string('address2')->after('address1')->nullable();
            $table->string('state')->after('address2')->nullable();
            $table->string('ppd')->after('state')->nullable();
            $table->string('school')->after('ppd')->nullable();
            $table->string('poskod')->after('school')->nullable();
            $table->string('categories')->after('poskod')->nullable();
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
            $table->dropColumn('users');
        });
    }
};
