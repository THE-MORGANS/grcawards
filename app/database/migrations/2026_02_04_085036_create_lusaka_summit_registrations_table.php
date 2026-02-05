<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLusakaSummitRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lusaka_summit_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_id')->unique(); // Payer reg number
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('organization')->nullable();
            $table->string('attendance_option');
            $table->integer('delegate_count');
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->string('payment_status')->default('pending'); // pending, paid, failed
            $table->string('stripe_session_id')->nullable();
            $table->string('ticket_number')->nullable()->unique();
            $table->json('delegates_data')->nullable();
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
        Schema::dropIfExists('lusaka_summit_registrations');
    }
}
