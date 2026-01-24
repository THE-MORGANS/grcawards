<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToJudgesVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('judges_votes', function (Blueprint $table) {
            if (!Schema::hasColumn('judges_votes', 'award_id')) {
                $table->integer('award_id')->nullable();
            }
            if (!Schema::hasColumn('judges_votes', 'nominee_id')) {
                $table->integer('nominee_id')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('judges_votes', function (Blueprint $table) {
            //
        });
    }
}
