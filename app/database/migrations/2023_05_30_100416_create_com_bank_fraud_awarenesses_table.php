<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComBankFraudAwarenessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_bank_fraud_awarenesses', function (Blueprint $table) {
            $table->id();
            $table->integer('award_id')->nullable();
            $table->integer('nominee_id')->nullable();
            $table->integer('sector_id')->nullable();
            $table->string('number_of_votes')->nullable();
            $table->string('percentage_votes')->nullable();
            $table->text('fraud_awareness')->nullable();
            $table->text('fraud_prevention_policies')->nullable();
            $table->text('additional_information')->nullable();
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
        Schema::dropIfExists('com_bank_fraud_awarenesses');
    }
}
