<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_votes', function (Blueprint $table) {
            $table->id();
            $table->string('voter');
            $table->string('ip_address');
            $table->unsignedBigInteger('award_id');
            $table->foreign('award_id')->references('id')->on('awards')->onDelete('cascade');
            $table->string('nominee');
            $table->unsignedBigInteger('award_program_id');
            $table->foreign('award_program_id')->references('id')->on('award_programs')->onDelete('cascade');
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
        Schema::dropIfExists('other_votes');
    }
}
