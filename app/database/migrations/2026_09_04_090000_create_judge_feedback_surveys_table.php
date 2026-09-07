<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudgeFeedbackSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judge_feedback_surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('award_program_id');
            $table->string('region')->nullable();
            $table->json('answers');
            $table->text('testimonial_text')->nullable();
            $table->string('testimonial_consent')->nullable();
            $table->timestamps();

            $table->unique(['admin_id', 'award_program_id'], 'judge_feedback_surveys_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judge_feedback_surveys');
    }
}
