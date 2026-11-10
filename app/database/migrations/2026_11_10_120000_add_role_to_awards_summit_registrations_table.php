<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToAwardsSummitRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awards_summit_registrations', function (Blueprint $table) {
            $table->string('role')->nullable()->after('organization');
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
            $table->dropColumn('role');
        });
    }
}
