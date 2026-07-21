<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeatNumbersToAwardsSummitRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awards_summit_registrations', function (Blueprint $table) {
            $table->json('seat_numbers')->nullable()->after('ticket_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('awards_summit_registrations', function (Blueprint $table) {
            $table->dropColumn('seat_numbers');
        });
    }
}
