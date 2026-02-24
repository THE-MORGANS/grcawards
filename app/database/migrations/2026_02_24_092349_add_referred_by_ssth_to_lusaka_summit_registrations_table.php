<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferredBySsthToLusakaSummitRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lusaka_summit_registrations', function (Blueprint $table) {
            $table->boolean('referred_by_ssth')->default(false)->after('delegates_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lusaka_summit_registrations', function (Blueprint $table) {
            $table->dropColumn('referred_by_ssth');
        });
    }
}
