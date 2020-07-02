<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('state_id')->unsigned()->nullable()->after('contact_number');
            $table->foreign('state_id')
              ->references('id')->on('states')
              ->onDelete('cascade');
            $table->bigInteger('city_id')->unsigned()->nullable()->after('state_id');
            $table->foreign('city_id')
              ->references('id')->on('cities')
              ->onDelete('cascade');
            $table->string('unique_id')->after('city_id');
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
            $table->dropForeign(['state_id']);
            $table->dropColumn('state_id');
            $table->dropForeign(['city_id']);
            $table->dropColumn('city_id');
            $table->dropColumn('unique_id');
        });
    }
}
