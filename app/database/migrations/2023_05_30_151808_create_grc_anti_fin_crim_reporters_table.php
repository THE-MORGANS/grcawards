<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrcAntiFinCrimReportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grc_anti_fin_crim_reporters', function (Blueprint $table) {
            $table->id();
            $table->integer('award_id')->nullable();
            $table->integer('nominee_id')->nullable();
            $table->integer('sector_id')->nullable();
            $table->string('number_of_votes')->nullable();
            $table->string('percentage_votes')->nullable();
            $table->text('profile_of_the_reporter')->nullable();
            $table->text('areas_anti_fincrime_the_reporter_covers')->nullable();
            $table->text('evidence_of_reporter_work')->nullable();
            $table->text('achievements')->nullable();
            $table->text('adverse_media')->nullable();
            $table->string('80_percent_score')->nullable();
            $table->string('20_percent_votes')->nullable();
            $table->string('overall_core')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('grc_anti_fin_crim_reporters');
    }
}
