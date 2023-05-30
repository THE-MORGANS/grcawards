<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrcTrainingProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grc_training_providers', function (Blueprint $table) {
            $table->id();
            $table->integer('award_id')->nullable();
            $table->integer('nominee_id')->nullable();
            $table->integer('sector_id')->nullable();
            $table->string('number_of_votes')->nullable();
            $table->string('percentage_votes')->nullable();
            $table->text('profile_of_the_training_provider_and_areas_of_grc_covered')->nullable();
            $table->text('evidence_of_innovative_ways_of_teaching')->nullable();
            $table->text('clients_of_training_providers')->nullable();
            $table->text('clients_rating_of_training_provider')->nullable();
            $table->text('affiliations')->nullable(); 
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
        Schema::dropIfExists('grc_training_providers');
    }
}
