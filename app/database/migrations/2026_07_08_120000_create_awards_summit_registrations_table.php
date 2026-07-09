<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsSummitRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards_summit_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_id')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('organization')->nullable();
            $table->string('ticket_type'); // summit, full, gala, student
            $table->string('ticket_name'); // Summit Pass, Full Delegate Pass, Gala Only Pass, Student / Academic
            $table->integer('quantity')->default(1);
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->string('payment_status')->default('pending'); // pending, paid, failed
            $table->string('region')->default('africa'); // africa, europe
            $table->string('stripe_session_id')->nullable();
            $table->string('ticket_number')->nullable()->unique();
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
        Schema::dropIfExists('awards_summit_registrations');
    }
}
