<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomineeEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominee_evidence', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nominee_id');
            $table->unsignedBigInteger('award_id');
            $table->string('criterion');
            $table->unsignedTinyInteger('weight')->nullable();
            $table->text('evidence')->nullable();
            $table->string('assessment')->nullable();
            $table->string('strength')->nullable();
            $table->string('primary_source')->nullable();
            $table->text('primary_url')->nullable();
            $table->string('authority_source')->nullable();
            $table->text('authority_url')->nullable();
            $table->string('secondary_source')->nullable();
            $table->text('secondary_url')->nullable();
            $table->text('verification_note')->nullable();
            $table->text('eligibility_treatment')->nullable();
            $table->text('vote_tie_note')->nullable();
            $table->string('competition_status')->nullable();
            $table->string('adverse_screen')->nullable();
            $table->string('adverse_materiality')->nullable();
            $table->text('adverse_summary')->nullable();
            $table->string('adverse_event_date')->nullable();
            $table->text('adverse_source_1')->nullable();
            $table->text('adverse_source_2')->nullable();
            $table->text('judge_materiality_treatment')->nullable();
            $table->timestamps();

            $table->unique(['nominee_id', 'award_id', 'criterion'], 'nominee_evidence_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominee_evidence');
    }
}
