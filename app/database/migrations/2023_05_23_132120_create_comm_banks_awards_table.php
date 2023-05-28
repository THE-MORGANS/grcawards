<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommBanksAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comm_banks_awards', function (Blueprint $table) {
            $table->id();
            $table->integer('award_id')->nullable();
            $table->integer('nominee_id')->nullable();
            $table->string('number_of_votes')->nullable();
            $table->string('percentage_votes')->nullable();
            $table->string('names')->nullable();
            $table->string('title')->nullable();
            $table->text('board_composition')->nullable();
            $table->string('policies_framework')->nullable();
            $table->string('fraud_awareness')->nullable();
            $table->tinyText('additional_information')->nullable();
            $table->string('adverse_media')->nullable();
            $table->tinyText('judges_scores')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('board_committee_in_risk_management')->nullable();
            $table->string('no_of_independent_non_executive_directors')->nullable();
            $table->string('board_committee_in_governance_compliance')->nullable();
            $table->string('total_judges_score')->nullable();
            $table->string('documentations')->nullable();
            $table->string('management')->nullable();
            $table->string('average_rating')->nullable();
            $table->string('No_of_employee_rated')->nullable();
            $table->string('job_security_advancement')->nullable();
            $table->string('culture')->nullable();
            $table->string('worklife_balance')->nullable();
            $table->string('pay_benefits')->nullable();
            $table->string('fraud_prevention_policies')->nullable();
            $table->string('aml_policy')->nullable();
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
        Schema::dropIfExists('comm_banks_awards');
    }
}
